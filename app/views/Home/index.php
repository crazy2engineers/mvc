<main>
	<?php if (!$DATA['user']): ?>
	<p>Not logged in.</p>
	<?php else: ?>
	<p>Welcome, <?php Security::escape($DATA['user']); ?>!</p>
	<?php endif; ?>
</main>
