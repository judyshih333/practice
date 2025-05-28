<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>時間及日期處理</title>
</head>
<body>
    <h2>日期函式基本用法</h2>
    <h4>設置程式執行期間的時區</h4>
    <?php
    date_default_timezone_set('Asia/Taipei');    // 設定時區
    echo"台北:";
    echo date("Y-m-d H-i-s");    // 取得當前的日期和時間
    ?>

    <h4>時間戳記</h4>
    <?php
    $timestamp=time();    // 取得當前的時間戳記
    echo"當前時間戳記:$timestamp";
    echo"<br>";
    
    $datestring="2025-05-28 17:30:10";    // 將字串轉換為時間戳記
    echo $timestampformstring=strtotime($datestring);
    echo"<br>";
    $datestringfromtimestamp=date("Y-m-d H-i-s",$timestampformstring);    // 將時間戳記轉換為日期字串
    echo   $datestringfromtimestamp;


    ?>

    <h4>給定兩個日期，計算中間間隔天數-2025/05/01-2025/05/12</h4>
    <?php
    $date1="2025-05-01";
    $date2="2025-05-12";
    $date1_timestamp=strtotime($date1);           // day1轉成時間戳記
    $date2_timestamp=strtotime($date2);           // day2轉成時間戳記
    $diff=$date2_timestamp - $date1_timestamp;    // 兩者相減得出差異秒數
    $days=$diff / (60*60*24);                     // 差值換算成天數
    echo "兩者相差:$days"."天";
    ?>

    <h4>strtotime的用法</h4>
    <?php
    $date3="2025-06-06";    // 設定日期字串
    $date3_timestamp=strtotime($date3);    // 將日期字串轉為時間戳記
    echo"日期字串:$date3";
    echo"<br>";
    echo"時間戳記:$date3_timestamp";
    
?>
    <h4>strtotime() 函式也可以處理相對時間</h4>
<?php
    echo "今天是:".date("Y-m-d H-i-s");
    echo"<br>";
    $relativeDateStrings = [
        "+1 days",
        "-1 days",
        "+1 weeks",
        "-1 weeks",
        "+1 month",
        "-1 month",
        "+1 year",
        "-1 year",
        "next Monday",
        "last Friday",
        "first day of next month",
        "last day of this month"
    ];
    foreach($relativeDateStrings as $relativeDateStrings){
        $timestamp=strtotime($relativeDateStrings);
        echo"相對時間字串:$relativeDateStrings";
        echo"，相對時間的日期:". date("Y-m-d H-i-s",$timestamp);
        echo"，相對時間的時間戳記:$timestamp";
        echo"<br>";
    }


        ?>

        <h4>計算距離自己下一次生日還有幾天</h4>
        <?php
        $birthday="2020-04-10";
        $birthday_arry=explode("-",$birthday);        // 將生日字串轉成陣列
        $birthday_arry[0]=date("Y");        // 將出生份轉化成當前年份
        $nextbirthday=join("-",$birthday_arry);        // 將陣列轉成字串
        $today=strtotime(date("Y-m-d"));        // 取得當前的時間戳記
        $nextbirthday_timestamp=strtotime($nextbirthday); // 如果生日已過，下次生日要+1年
        if($today>$nextbirthday_timestamp){
            $nextbirthday_timestamp=strtotime("+1 year",$nextbirthday_timestamp);
        }
        $birthday_diff=$nextbirthday_timestamp-$today;
        $day_diff=($birthday_diff/(60*60*24));
        echo"我的生日是:$birthday";
        echo"<br>";
        echo"下次生日剩:$day_diff"."天";
        ?>
        <h4>利用迴圈來計算連續五個周一的日期</h4>
        <?php
        $mon="2025-05-26";
        for($i=0;$i<5;$i++){
            $nextmon_stamp=strtotime("+$i week",strtotime($mon));
            echo date("Y-m-d l",$nextmon_stamp)."<br>";
        }
        ?>


      

</body>
</html>