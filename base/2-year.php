<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>
    <h4>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，
    因此以365天定為一年 的狀況下，每年會多出近六小時的時間，<br>
    所以每隔四年設置一個閏年來消除這多出來的一天。</h4>
    <ul>
        <li>公元年分除以4不可整除，為平年。</li>
        <!-- $year%4==0>>閏年 -->
        <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
        <!-- $year%4==0 && $year%100!==0>>閏年 -->
        <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
        <!-- $year%100!==0 || $year%400==0>>閏年 -->
    </ul>
    <?php
    $year="2204";
    if($year%4==0 && $year%100!==0|| $year%400==0){
       echo "<span style='color:red'>$year"."年-閏年</span>";
    }else{
            echo$year. "年-平年";
        }
    ?>

    <h2>使用for迴圈來產生以下的數列</h2>
<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>
    <?php

    echo"(1)";
    echo"<br>";
    for($i=0;$i<10;$i++){
    echo ($i*2+1) ."," ;  }

   echo "<br>";
   for($i=1;$i<=20;$i=$i+2){
    echo$i.",";
   }
   echo"<br>";

   echo"(2)";
   echo"<br>";
    for($i=1;$i<=10;$i++){
    echo ($i*10) ."," ;
    }
    echo"<br>";
    for($i=10;$i<=100;$i=$i+10){
        echo $i.",";
    }

    echo"<br>";
    echo"(3)";
    echo"<br>";
    $isPrime=true;
    for($i=3;$i<100;$i=$i+2){
        $isPrime=true;
        for($j=2;$j<$i;$j=$j+1){
            if($i%$j==0){
                $isPrime=false;
                break;

            }
        }
            if($isPrime){
            echo $i.",";      
            }

    }

    ?>
</ul>
</body>
</html>