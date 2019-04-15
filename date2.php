
    <?php
echo "<table border=1;>";
$a=['星期日','星期一','星期二','星期三','星期四','星期五','星期六',];
$today=date("Y-08-15");
echo $today . "<br>";
$week=date("w",strtotime($today));
echo $week;
$howday=date("t",strtotime($today));
echo "<br>" . $howday;
$howtoday=date("d",strtotime($today));

for($b=0;$b<7;$b++){
    echo "<td>" . $a[$b] . "</td>";
}

for($c=0;$c<7;$c++){
    echo "<tr>";
    for($d=0;$d<7;$d++){
    $e=(($c*7)+($d+1));
    $e=$e-$week;
        if(($e<=$howday) && ($e>=1)){
            if($e==$howtoday){

                echo "<td style='color:red;'>" . $e ."</td>";
            }else{

            echo "<td>" . $e . "</td>";}
        }else{
            echo "<td></td>";
        }
        
    }
    echo "</tr>";
}














echo "</table>";
?>


