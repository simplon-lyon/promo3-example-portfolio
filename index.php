<?php
$all = scandir('project');
$projects = [];
foreach($all as $f) {
    if ($f[0] === '.') {
        continue;
    }
    if (!is_dir('project/'.$f)) {
        continue;
    }
    $projects[] = $f;
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Louis AROD</title>
</head>
<body>
    <h1>Louis AROD</h1>
    <p>Formateur de la promo3. :D</p>
    <h2>Projets</h2>
    <ul>
        <?php foreach($projects as $p) { ?>
        <li><a href="<?php echo 'project/'.$p; ?>"><?php echo $p; ?></a></li>
        <?php } ?>
    </ul>
</body>
</html>