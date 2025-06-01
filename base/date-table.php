<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .other-month{
            color: gray;
        }
    </style>
</head>
<body>
    <h3>日曆-table</h3>
    <?php
    $today=date("Y-m-d");
    echo"今天日期是: $today";
    echo"<br>";
    $firstDay=date("Y-m-01");
    echo"本月第一天是:$firstDay";
    echo"<br>";
    $firstDayWeek=date("w",strtotime("$firstDay"));  // w: 0（星期天）到 6（星期六）
    echo"本月第一天是星期(幾):$firstDayWeek";
    echo"<br>";
    $thedaysOfMonth=date("t",strtotime("$firstDay"));    // 月份的天数t=28~31days
    echo"本月$thedaysOfMonth"."天";


    $spDate=[
    '2025-05-30'=>'端午節',
    '2025-10-06'=>'中秋節',
        ];
    ?>

    <h3><?php
    echo date("Y年m月");
    ?></h3>
    <table>
        <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
        
    
    <?php
    for($i=0;$i<6;$i++){          // 一個月最多$i=6週
    echo"<tr>";
    for($j=0;$j<7;$j++){
        $day=$j+($i*7)-$firstDayWeek;
        $timestamp=strtotime("$day days",strtotime($firstDay));
        $date=date("Y-m-d",$timestamp);
        $class="";
        
        
        if($today==$date){
            $class=$class."today";
        }else if(date("m",$timestamp)!=date("m",strtotime($firstDay))){
            $class=$class."other-month";
        }
        if($timestamp<strtotime($today)){
            $class=$class."pass-date";

        if(date("N",$timestamp)>5){    //    星期六日-->$class=$holiday
        $class=$class."holiday";
        }


        }
        echo "<td class='$class date-date='$date'>";
        echo date("d",$timestamp);
        // echo"<div class='date-num'>";
        // echo date("d",$timestamp);
        // echo"</div>";
        echo"<div class='date-event'>";
        if(isset($spDate[$date])){
            echo$spDate[$date];
            }
        echo "</div>";
        echo"</td>";
        }
        echo"</tr>";
        }



     ?>
     </table>

</body>
</html>