<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Encoding, browser compatibility, viewport -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Search Engine Optimization (SEO) -->
		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<meta property="og:url" content="<?= $Wcms->getCurrentPageUrl() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />

		<!-- Website and page title -->
		<title>
			<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>

		</title>

		<!-- Admin CSS -->
		<?= $Wcms->css() ?>
		
		<!-- Theme CSS -->
		<link rel="stylesheet" href="style.css">
	</head>

	<body>

		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>

		<header>
			<h1>
				<a href="<?= $Wcms->url() ?>"><?= $Wcms->siteTitle() ?></a>
			</h1>
			<nav>
				<?= $Wcms->menu() ?>
			</nav>
		</header>

		<main>
			<aside>
				<?= $Wcms->block('subside') ?>
			</aside>
			<article id="docs">
				<?= $Wcms->page('content') ?>
			</article>
		</main>

		<hr>

		<footer>
			<?= $Wcms->footer() ?>
		</footer>

	</body>
</html>

