<?php

#Bucle
/*for (VARIABLE; CONDICION; INCREMENTO){
    LO QUE VA A REPETIR;
}*/

//$x = 1;
echo($x);

echo('<br />');

$x++; //x=2
$x++; //x es igual a 3
echo('<br />');
echo($x);
echo('<br />');
echo('<br />');

for ($y = 1; $y <= 10; $y++){
    echo($y);
    echo("<br />");
}
?>
<html>
    <head><title>Mis weas</title></head>
    
    <body>
        <table>
            <?php
                for($z=1; $z<=10;$z++){
                    echo('<tr style="border:2px solid black">');
                    echo('<td style="border:2px solid black">'.$z.'</td>');
                    echo('<td style="border:2px solid black">'.$z.'</td>');
                    echo('<td style="border:2px solid black">'.$z.'</td>');
                    echo('<td style="border:2px solid black">'.$z.'</td>');
                    echo('<td style="border:2px solid black">'.$z.'</td>');
                    echo('<td style="border:2px solid black">'.$z.'</td>');
                    echo('<td style="border:2px solid black">'.$z.'</td>');
                    echo('<td style="border:2px solid black">'.$z.'</td>');
                    echo('<td style="border:2px solid black">'.$z.'</td>');
                    echo('<td style="border:2px solid black">'.$z.'</td>');
                    echo('<td style="border:2px solid black">'.$z.'</td>');
                    echo('</tr style="border:2px solid black">');
                }
                
            ?>            
        </table>
    </body>    
</html>
<?php

$s = 0;
$limit = 30;
$b = "<br />";

while($s <= $limit)
{
    echo($s);
    echo($b);
    $s++;
    
    if($s == 20)
    {
        echo($s);
        break;
    }        
}

?>