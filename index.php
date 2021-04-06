
<?php
$vodkaprice = "119 Kč";
$homelessMoney = "25" + "17" + "40" + "100" - "50 ";
echo "Cena vodky:". $vodkaprice;

echo " <br>Peníze bezdomovce před návštěvou večerky:". $homelessMoney . "<br>";
if ($homelessMoney > $vodkaprice) {echo "Bezdomovec si může koupit vodku";}
elseif ($homelessMoney < $vodkaprice) {echo "Bezdomovec si nemůže koupit vodku";}

?>
