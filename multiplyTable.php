<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function printTable()
{
        echo '<tr>';
        for($a = 0; $a < 101; $a++)
        {
            if($a == 0)
            {
                echo '<th></th>';
            }
            else
            {
                echo '<th>'.$a.'</th>';
            }
        }
        echo '</tr>';

	for($i = 1; $i < 101; $i++)
	{
                echo '<tr>';
	
		for($j = 1; $j < 101; $j++)
		{
                    if($j==1)
                    {
                        echo '<th>'.$i.'</th>';
                    }
		
                    echo '<td>'.$i*$j.'</td>';
		}

		echo '</tr>';
	}
}
?>
