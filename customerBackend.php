<?php
echo "<link rel='stylesheet' type='text/css' href='style.css' />";  

error_reporting(E_ALL);
ini_set("display_errors", 1);

$tableHeaders= ["", "Quantity", "Cost Per Item", "Sub Total"];
$items = ["Paper", "Pencils", "Pens"];
$prices = ["$0.99", "$1.99", "$2.99"];

$i1Amount = $_GET["item1"];
$i1Total = $i1Amount * .99;

$i2Amount = $_GET["item2"];
$i2Total = $i2Amount * 1.99;

$i3Amount = $_GET["item3"];
$i3Total = $i3Amount * 2.99;

$amounts = [$i1Amount, $i2Amount, $i3Amount];

$totals = [$i1Total, $i2Total, $i3Total];

$username = $_GET["username"];
$password = $_GET["password"];

$shipType = $_GET["shipping"];

$shipCost = 0;

if($shipType == "$50.00 over night")
{
	$shipCost = 50;
}
else if ($shipType == "$5.00 three day")
{
	$shipCost = 5;
}

$totalCost = $i1Total + $i2Total + $i3Total + $shipCost;

echo "<p>Welcome " . $username . ", your password is " . $password . ".</p>";

echo "<br>";

echo "<p class='receipt'>Here is your receipt: </p>";

echo "<table>";
echo "<tr>";
for($i = 0; $i < 4; $i++)
{
	echo "<th>".$tableHeaders[$i]."</th>";
}
echo "</tr>";

for($i = 0; $i < 3; $i++)
{
	echo "<tr>";

	for($j = 0; $j < 4; $j++)
	{
		if($j == 0)
		{
			echo "<th>".$items[$i]."</th>";
		}
		else if($j == 1)
		{
			echo "<td>".$amounts[$i]."</td>";
		}
		else if($j == 2)
		{
			echo "<td>".$prices[$i]."</td>";
		}
		else if($j == 3)
		{
			echo "<td>$".$totals[$i]."</td>";
		}
	}

	echo "</tr>";
}
echo "</table>";

echo "<table>";
echo "<tr>";
echo "<th>Shipping</th>";
echo "<td class='longCell'>".$shipType."</td>";
echo "<td>$".$shipCost."</td>";
echo "</tr>";
echo "</table>";

echo "<table>";
echo "<tr>";
echo "<th class='longHeader'>Total Cost</th>";
echo "<td>$".$totalCost."</td>";
echo "</tr>";
echo "</table>";
?>