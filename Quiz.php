<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$a1 = $_POST["q1"];
$a2 = $_POST["q2"];
$a3 = $_POST["q3"];
$a4 = $_POST["q4"];
$a5 = $_POST["q5"]; 

$correct = 0;

if($a1 == "Russia")
{
	$correct++;
}
if($a2 == "Aglet")
{
	$correct++;
}
if($a3 == "Louis XIV")
{
	$correct++;
}
if($a4 == "Steam")
{
	$correct++;
}
if($a5 == "A monopoly")
{
	$correct++;
}

$percent = $correct * 20;


echo "<div>"."Question 1: Which country spans across 2 continents?"."</div>";
echo "<div>"."You answered: " . $a1."</div>";
echo "<div>"."Correct answer: Russia"."</div><br>";

echo "<div>"."Question 2: What is the tip of a shoelace called?"."</div>";
echo "<div>"."You answered: " . $a2."</div>";
echo "<div>"."Correct answer: Aglet"."</div><br>";

echo "<div>"."Question 3: Which king was known as the 'Sun King'? "."</div>";
echo "<div>"."You answered: " . $a3."</div>";
echo "<div>"."Correct answer: Louis XIV"."</div><br>";

echo "<div>"."Question 4: Gabe Newell is famous for co-founding which video game company? "."</div>";
echo "<div>"."You answered: " . $a4."</div>";
echo "<div>"."Correct answer: Steam"."</div><br>";

echo "<div>"."Question 5: What is a company called when it has complete control over an industry? "."</div>";
echo "<div>"."You answered: " . $a5."</div>";
echo "<div>"."Correct answer: A monopoly"."</div><br>";

echo "<div>"."You answered " . $correct. " questions correctly"."</div>";
echo "<div>"."Your total is score is: " . $percent . "%"."</div>";
?>