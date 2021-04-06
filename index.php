
<?php
$vodkaprice = "119 Kč";
$homelessMoney = "25" + "17" + "40" + "100" - "50 ";
$homelessMoneyafter = $homelessMoney - "119";
echo "Cena vodky:". $vodkaprice;

echo " <br>Peníze bezdomovce před návštěvou večerky:". $homelessMoney . "<br>";
if ($homelessMoney > $vodkaprice) {echo "Vodka zakoupena!";}
if ($vodkaprice > $homelessMoney) {echo "Nedostatek peněz!";}
echo "<br>Peníze po návštěvě večerky:". $homelessMoneyafter . "<br>";
?>
