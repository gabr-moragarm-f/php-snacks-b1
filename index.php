<?php
// primo Snack =================================================================
$minPunti = 2;

$maxPunti = 100;

$matches = array (
  array (
    "casa" => "	Boston Celtics",
    "ospite" => "Brooklyn Nets",
    "puntiCasa" => rand($minPunti, $maxPunti),
    "puntiOspite" => rand($minPunti, $maxPunti)
  ),
  array (
    "casa" => "New York Knicks",
    "ospite" => "Philadelphia 76ers",
    "puntiCasa" => rand($minPunti, $maxPunti),
    "puntiOspite" => rand($minPunti, $maxPunti)
  ),
  array (
    "casa" => "Toronto Raptors",
    "ospite" => "	Chicago Bulls",
    "puntiCasa" => rand($minPunti, $maxPunti),
    "puntiOspite" => rand($minPunti, $maxPunti)
  ),
  array (
    "casa" => "Cleveland Cavaliers",
    "ospite" => "Detroit Pistons",
    "puntiCasa" => rand($minPunti, $maxPunti),
    "puntiOspite" => rand($minPunti, $maxPunti)
  )
);

for ($i=0; $i < count($matches) ; $i++) {
  echo $matches[$i]["casa"] . ' - ' . $matches[$i]["ospite"] . ' | ' . $matches[$i]["puntiCasa"] . ' - ' . $matches[$i]["puntiOspite"] . '<br> <br>';
}
?>

<br>
<br>
<hr>
<br>
<br>

<?php
// secondo Snack ===============================================================
$name = $_GET['name'];

$email = $_GET['email'];

$emailDomain = strpbrk($email, '@');

$age = $_GET['age'];

$validationFlag = true;

if (strlen($name) <= 3) {
  echo "name";
  $validationFlag = false;
}

if (!strpos($email, '@') || !strpos($emailDomain, '.')) {
  echo "email";
  $validationFlag = false;
}

if (!is_numeric($age)) {
  echo "age";
  $validationFlag = false;
}

if ($validationFlag) {
  echo "Benvenuto " . $name;
}else {
  echo "Accesso negato.";
}
?>
