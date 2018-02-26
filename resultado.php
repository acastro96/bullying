$total = 0;
$contador = $_POST[$counter];
$con = 1; 


 while ($con <= $contador)
 {
     $var = $_POST['fila'+$con];
     
     $total += $var;

     $con++;
 }