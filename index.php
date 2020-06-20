<?php
require_once('./Birds/Ostrich.php');
require_once('./Birds/Penguin.php');
require_once('./Birds/Crow.php');
use Birds\Ostrich;
use Birds\Penguin;
use Birds\Crow;

$Ostrich = (new Ostrich)->getInfo();
$Penguin = (new Penguin)->getInfo();
$Crow    = (new Crow)->getInfo();


?>

<?php
echo "<table border = '1'>";
echo "   <tr>";
echo "        <th>種類</th>";
echo "        <th>名前</th>";
echo "        <th>出産方法</th>";
echo "        <th>移動手段</th>";
echo "    </tr>";
echo "    <tr>";
echo "        <th>$Ostrich[type]</th>";
echo "        <th>$Ostrich[name]</th>";
echo "        <th>$Ostrich[birthType]</th>";
echo "        <th>$Ostrich[howToMovement]</th>";
echo "    </tr>";
echo "</table>";
?>

<?php
echo "<table border = '1'>";
echo "   <tr>";
echo "        <th>種類</th>";
echo "        <th>名前</th>";
echo "        <th>出産方法</th>";
echo "        <th>移動手段</th>";
echo "    </tr>";
echo "    <tr>";
echo "        <th>$Penguin[type]</th>";
echo "        <th>$Penguin[name]</th>";
echo "        <th>$Penguin[birthType]</th>";
echo "        <th>$Penguin[howToMovement]</th>";
echo "    </tr>";
echo "</table>";
?>

<?php
echo "<table border = '1'>";
echo "   <tr>";
echo "        <th>種類</th>";
echo "        <th>名前</th>";
echo "        <th>出産方法</th>";
echo "        <th>移動手段</th>";
echo "    </tr>";
echo "    <tr>";
echo "        <th>$Crow[type]</th>";
echo "        <th>$Crow[name]</th>";
echo "        <th>$Crow[birthType]</th>";
echo "        <th>$Crow[howToMovement]</th>";
echo "    </tr>";
echo "</table>";
?>

