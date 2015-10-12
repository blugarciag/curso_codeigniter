<head>
<title>Formulario de Carga</title>
</head>
<body>
<h3>Su archivo fue exitosamente subido!</h3>
<ul>
<?php foreach($upload_data as $item => $value):?>
<li><?=$item;?>: <?=$value;?></li>
<?php endforeach; ?>
<?= $upload_data['full_path'] ?>
</ul>
<p><?=anchor('upload', 'Subir otro archivo!'); ?></p>
</body>
</html>