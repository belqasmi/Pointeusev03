<html>
<head>
    <meta charset="UTF-8">
    <title>PointeuseV0.3</title>
    <link href="Ressources/page.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
date_default_timezone_set("EUROPE/Paris");

spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    require __DIR__."/Classes/".end($parts) . '.php';
});

use PointeuseV03\PointeuseNiveau1;
use PointeuseV03\PointeuseNiveau2;
use PointeuseV03\PointeuseNiveau3;

$P1 = new PointeuseNiveau1();
$P2 = new PointeuseNiveau2();
$P3 = new PointeuseNiveau3();


echo "<h1>Pointeuse Niveau 1</h1>";
echo "<p>Badgé à 1:00:00</p><br>";
$P1->badger("1:00:00");
echo "<p>Débadgé à 12:00:00</p><br>";
$P1->debadger("12:00:00");
//var_dump($P1->risque());


echo "<h1>Pointeuse Niveau 2</h1>";
echo "<p>Badgé à 1:00:00</p><br>";
$P2->badger("1:00:00");
echo "<p>Débadgé à 11:00:00</p><br>";
$P2->debadger("11:00:00");
//var_dump($P2->heuresCumulées());


echo "<h1>Pointeuse Niveau 3</h1>";
echo "<p>Badgé à 1:00:00</p><br>";
$P3->badger("1:00:00");
echo "<p>Débadgé à 11:00:00</p><br>";
$P3->debadger("11:00:00");
//var_dump($P3->heuresCumulées());


//var_dump($P3->estContaminé());

?>
</body>
</html>