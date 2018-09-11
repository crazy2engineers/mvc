<?php require_once './app/views/_global/header.php'; ?>

<header>
	<h1><?php echo $DATA['title']; ?></h1>
</header>

<main>
	<?php if (isset($DATA['message'])): ?>
	<p><?php echo $DATA['message']; ?></p>
	<?php endif; ?>

	<form method="POST">
		<input type="hidden" name="id" value="<?php echo $DATA['task']->id; ?>">
		<label>
			<span>Name:</span>
			<input type="text" name="name" value="<?php echo $DATA['task']->name; ?>" required>
		</label>
		<label>
			<span>Description:</span>
			<textarea name="description" required><?php echo $DATA['task']->description; ?></textarea>
		</label>
		<button type="submit">Update</button>
	</form>
</main>

<?php require_once './app/views/_global/footer.php'; ?>
