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
			<?php $files = glob('/var/www/vhosts/ljv.fr/_fr.ljv.mdl/comptes-rendus/*.txt');
			rsort($files);
			foreach($files as $eachFile) { ?>
				<li><a href="https://mdl.ljv.fr/comptes-rendus/<?=basename($eachFile)?>"><?=basename($eachFile)?></a></li>
			<?php } ?>
		</ul>
	</div>
</div>

<?php include 'footer.php'; ?>

<?php /*<script type="text/javascript" src="https://cdn.matiboux.com/js/jquery-3.1.1.min.js"></script>*/ ?>
<?php /*<script type="text/javascript" src="https://cdn.matiboux.com/js/bootstrap.min.js"></script>*/ ?>

</body>
</html>