<?php
if(file_exists('comptes-rendus/' . $_GET['f'] . '.txt')) {
	header('Content-Type: text/plain');
	die(file_get_contents('comptes-rendus/' . $_GET['f'] . '.txt'));
}
else if(file_exists('comptes-rendus/' . $_GET['f'] . '.md')) {
	require 'parsedown/Parsedown.php';
	$Parsedown = new Parsedown();
	
	echo '<link rel="stylesheet" type="text/css" href="https://cdn.matiboux.com/css/bootstrap.min.css">' . "\n";
	echo '<style>body { padding: 10px 20px }</style>' . "\n";
	die($Parsedown->text(file_get_contents('comptes-rendus/' . $_GET['f'] . '.md')));
} else { ?>

<html>
<head>
<?php include 'head.php'; ?>
<title>MDL Jules Verne</title>

</head>
<body>

<?php include 'header.php'; ?>

<div id="main">
	<div class="container text-justify">
		<h2>Comptes-Rendus de la MDL</h2>
		<ul>
			<?php $files = glob('comptes-rendus/*.{txt,md}', GLOB_BRACE);
			rsort($files);
			foreach($files as $eachFile) { ?>
				<li><a href="https://mdl.ljv.fr/comptes-rendus.php?f=<?=urlencode(implode('.', explode('.', basename($eachFile), -1)))?>" target="_blank"><?=implode('.', explode('.', basename($eachFile), -1))?></a></li>
			<?php } ?>
		</ul>
		
		<p class="text-muted">Affichage des compte-rendus propulsé par <a href="https://github.com/erusev/parsedown">Parsedown</a></p>
	</div>
</div>

<?php include 'footer.php'; ?>

<?php /*<script type="text/javascript" src="https://cdn.matiboux.com/js/jquery-3.1.1.min.js"></script>*/ ?>
<?php /*<script type="text/jacascript" src="https://cdn.matiboux.com/js/bootstrap.min.js"></script>*/ ?>

</body>
</html>

<?php } ?>