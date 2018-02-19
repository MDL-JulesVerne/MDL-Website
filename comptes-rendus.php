<html>
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="Matiboux" />
<meta name="description" content="Portail web non officiel du Lycée Jules Verne" />
<meta name="keywords" content="portail,portal,web,internet,lycée,high,school,jules,verne,Matiboux" />

<link rel="stylesheet" type="text/css" href="https://cdn.matiboux.com/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.matiboux.com/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="style.css" />

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