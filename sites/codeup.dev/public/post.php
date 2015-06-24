<article>

	<?php include 'blog_data.php'; ?>

	<header>
		<h1> <?= $post['title']; ?></h1>
		by <?= $post['author']; ?> &mdash; <?= $post['date']; ?>
	</header>

	<p><?= $post['content'] ?></p>

</article>