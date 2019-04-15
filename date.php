<?php
$a =$_GET["y"];
$b =$_GET["m"];
$c =$_GET["d"];
echo $a;
echo "<br>";
// echo phpinfo();
$i=["星期日","星期一","星期二","星期三","星期四","星期五","星期六"];
$today=date("Y-m-d H:i:s");
// ,time()+7840
echo $today;
$changedate=strtotime($a . "-" . $b . "-01");
$year=date("Y" ,$changedate); //當下的年
$month=date("m" ,$changedate);//當下的月
$day=date("d",strtotime($a . "-" . $b . "-". $c));//當下的日
$datenow=date("t" , $changedate);//當下的月有幾天
$datenownow=date("w" ,$changedate);//當下星期幾(0~6)
echo "<br>" . $year, $month , $datenow , $datenownow;
 
$datenownumber1=date("w",strtotime($a . "-" . $b . "-01"));//strtotime(文字變時間)
echo "<br>" .  $datenownumber1;







// echo $i[2];
echo "<table border=1>";
     echo "<tr>";
    for($k=0;$k<=6;$k++){    
        echo "<td>". $i[$k] . "</td>";
    }
    echo "</tr>";
    for($j=0;$j<7;$j++){
        echo "<tr>";
        for($l=0; $l<7; $l++){
            $o=(($j*7)+($l+1));//計算日期是幾號
            $o=$o-$datenownumber1;//這個月的一號是星期幾
            if(($o<=$datenow)&&($o>=1)){//判斷一號之後的值才要印出
                if($o==$day){
                    echo "<td style='color:red;'>" . $o ."</td>";
                }else{
                echo "<td>" . $o ."</td>";
                }
            }else{
            echo "<td></td>";
        }
        }

        echo "</tr>";
    }












echo "</table>";
?>