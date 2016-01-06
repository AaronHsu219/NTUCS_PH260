<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>analysis</title>
</head>
<body>

<?php 
// GET THE DATA FROM GRADE.TXT, SAVE AS 2D ARRAY ////////////////
$row = 0;
$num_subject = 5; // 學科數
if (($handle = fopen("grade.txt", "r")) !== FALSE) {
	
	$class_sum = 0; // Store class sum score

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {   	
        $num = count($data);   
        $student_sum = 0; // 單一學生總分
        
        for ($c = 0; $c < $num; $c++) {         
            $grade[$row][$c] = $data[$c];
            // echo $grade[$row][$c].' '; 
            if ($c > 2) {
            	$student_sum += $data[$c] ;
            }            
        }

        $grade[$row][$num] = $student_sum; // calc sum of data             
        $grade[$row][$num + 1] = $student_sum / $num_subject; // calc avg of data             
        $grade[$row]["avg"] = $grade[$row][$num + 1]; // calc avg of data   

        // echo $grade[$row][$num]; 
        // echo ' '; 
        // echo $grade[$row][$num + 1];

        // $class_sum += $grade[$row][$num + 1];
        $class_sum += $grade[$row]["avg"];
        $row++;
    }
    fclose($handle);
}

$class_avg = $class_sum / $row; // calculate class average

//check //////////////////////////////////////////////////////
// echo $row;
// echo "<br>";
// echo $num;
// echo "<br>";
// echo $grade[0]["avg"];
// echo "<br>";
// echo "<br>\n";

// SORTING THE DATA //////////////////////////////////////////
function cmp($a,$b){
    return -strcmp($a["avg"],$b["avg"]);
}
usort($grade,"cmp");

// PRINTING THE DATA /////////////////////////////////////////
echo "<table border='1' width='800'>"; 
    echo "<tr>";        
        echo "<td>".名次."</td>";
        echo "<td>".姓名."</td>";
        echo "<td>".學號."</td>";
        echo "<td>".email."</td>";
        echo "<td>".國文."</td>";
        echo "<td>".英文."</td>";
        echo "<td>".數學."</td>";
        echo "<td>".物理."</td>";
        echo "<td>".化學."</td>";
        echo "<td>".總分."</td>";
        echo "<td>".平均分數."</td>";
    echo "</tr>"; 

$rank = 1;
for ($i = 0; $i < $row; $i++) {  
    echo "<tr>";     
    echo "<td>".$rank."</td>";
    for ($j = 0; $j < $num + 2 ; $j++) {
        if ($j == 0 || $j == 1 || $j == 2) {
            echo "<td>".$grade[$i][$j]."</td>"; 
        }
        else
        {
            if ($grade[$i][$j] >= 60) {
                echo "<td>".round($grade[$i][$j], 2)."</td>";        
            }
            else
            {
                echo "<td>"."<font color = red>".round($grade[$i][$j], 2)."</font>"."</td>";        
            }   
        }     
    }
    $rank++;
    // echo "<br>\n";
    echo "</tr>"; 
}

// Print class avg ////////////////////////////////////////////////
    echo "<tr>";
    if ($class_avg > 60) {
        echo "<td colspan='10' align = right>".'全班總平均：'."</td>";
        echo "<td>".$class_avg."</td>";
    }
    else
    {
        echo "<td colspan='10' align = right>".'全班總平均：'."</td>";
        echo "<td>"."<font color = red>".round($class_avg, 2)."</font>"."</td>";
    }
    
    echo "</tr>";    

echo "</table>"; 
echo "<br>\n";

?>

</body>
</html>