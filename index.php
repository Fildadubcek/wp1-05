<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bezdomovec na nádraží</title>
</head>
<body>

<?php
$vodkaprice = "119 Kč";

$homelessMoney = "17" + "40" + "100" - "50 ";

$homelessMoneyafter = $homelessMoney - "119";
echo "Cena vodky:". $vodkaprice;

echo " <br>Peníze bezdomovce před návštěvou večerky:". $homelessMoney . "<br>";
if ($homelessMoney > $vodkaprice) {echo "Vodka zakoupena!";}
if ($vodkaprice > $homelessMoney) {echo "Nedostatek peněz!";}

echo "<br>Peníze po návštěvě večerky:". $homelessMoneyafter . "<br>";
?>
</body>
</html>  