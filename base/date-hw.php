<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日曆作業</title>
<style>

* {
        box-sizing: border-box;
}

.calendar-bar{
width: 100%;
height: 35px;
background-color:rgba(255, 255, 255, 0.3);
display:flex;
justify-content:space-around;
align-items: center;
position: fixed;
padding-left:70px; 

}

h1{
    /* background-color:pink; */
    text-align: center;  
}


.container{
    /* width: 90%; */
    background-image: url(./drawing-pad-1209781_1280.jpg);
    background-position:bottom;
    background-size: 90%;
    display:flex;
    justify-content: space-between; 
    

}
.cl{
    /* background-color: blanchedalmond; */
    width: 60%;
    height: 610px;
    padding-left:30px;    
    padding-top:40px;    
}

/* .cr{
    width: 40%;
    height: 610px;
    /* background-color:lightpink; */
    /* padding-top:40px;  
} */ 

.th-box{
    width:90px;
    height:25px;
    text-align:center;
    background-color:rgba(255, 255, 255, 0.3);
    
    display:inline-block;
    /* justify-content: center; */
    /* align-items: center; */
    border:1px solid white;
    /* margin-left:1; */
    /* margin-top:1; */
    /* vertical-align:top; */
    border-radius: 5px;
    
}

.box{
    width:90px;
    height:90px;
    background-color:rgba(255, 255, 255, 0.3);
    display:inline-block;
    justify-content: center;
    align-items: center;

    border:1px solid white;
    vertical-align:top;
    border-radius: 5px;

    
}

.box:hover{
background-color:rgba(255, 255, 255, 0.6);
   /* border:3px solid red; */
}


.holiday{
    background-color:lightpink;
    color:red;
}
.day-num{
    height:30px;
    /* background: lightgray; */
    padding-left: 5px;
    padding-top: 5px;
    
}
    
</style>

</head>
<body>

<?php

// 判斷網址列有沒有帶入 year 和 month 的參數，若無用當日的

if(isset($_GET['month'])){  
    $month=$_GET['month'];  
}else{
$month=date("m"); 
}

if(isset($_GET['year'])){
$year=$_GET['year'];
}else{
$year=date("Y");
}

//上一個月
if($month-1>0){
    $prev=$month-1;  
    $prevyear=$year;
}else{
    $prev=12;  
    $prevyear=$year-1;
}

//下一個月
if($month+1>12){
    $next=1;  
    $nextyear=$year+1;
}else{
    $next=$month+1;  
    $nextyear=$year;
}



$today= date("Y-m-d");
$firstDay= date("$year-$month-01");                     // 這個月第一天
$firstDayWeek= date("w", strtotime($firstDay));     // 第一天星期幾，0（星期天）到 6（星期六）
$theDaysOfMonth=date("t", strtotime($firstDay));    // 該月份的天數幾天(28~31)

$spDate=[
'01-01'=>'元旦',
'02-28'=>'228紀念日',
'04-04'=>'兒童節',
'05-01'=>'勞動節',
'09-28'=>"教師節",
];

$monthDays=[];                                   


//第一天星期幾，前面要補多少空白格子
for($i=0;$i<$firstDayWeek;$i++){
$monthDays[]=[];                        
}

//填入當日日期
for($i=0;$i<$theDaysOfMonth;$i++){
$timestamp= strtotime("$i days", strtotime($firstDay)); // 「在本月1號，加上 $i 天」，產生某天的時間戳
$date=date("d", $timestamp);                            // $timestamp 轉成「日」
$holiday="";
foreach($spDate as $d=>$value){
if($d==date("m-d", $timestamp)){
$holiday=$value;
}
}

$monthDays[]=[
"day"=>date("d", $timestamp),
// "fullDate"=>date("Y-m-d", $timestamp),
// "weekOfYear"=>date("W", $timestamp),
"week"=>date("w", $timestamp),
// "daysOfYear"=>date("z", $timestamp),
"workday"=>date("N", $timestamp)<6?true:false,      // 判斷工作日true
"holiday"=>$holiday,

];
}

while (count($monthDays) % 7 !== 0) {
    $monthDays[] = [];
}

?>


<div class=calendar-bar>

<a href="?year=<?= date('Y'); ?>&month=<?= date('n'); ?>">Today</a>

<a href="?year=<?=$prevyear;?>&month=<?=$prev;?>">&laquo;&laquo;上一月</a>   
<a href="?year=<?=$nextyear;?>&month=<?=$next;?>">下一月&raquo;&raquo;</a>

</div>

<div class="container">

<?php
echo "<div class='cl'>";

echo "<div class='th-box'>日</div>";
echo "<div class='th-box'>一</div>";
echo "<div class='th-box'>二</div>";
echo "<div class='th-box'>三</div>";
echo "<div class='th-box'>四</div>";
echo "<div class='th-box'>五</div>";
echo "<div class='th-box'>六</div>";

//使用foreach迴圈,印出日期
foreach($monthDays as $day){

echo "<div class='box'>";
// echo "<div class='day-info'>";
echo "<div class='day-num'>";
if(isset($day['day'])){

echo $day["day"];
}else{
echo "&nbsp;";
}
echo "</div>";
// echo "</div>";


// echo "<div class='holiday-info'>";
if(isset($day['holiday'])){
echo "<div class='holiday'>";
echo $day['holiday'];
echo "</div>";
}else{
echo "&nbsp;";
}
// echo "</div>";
echo "</div>";
}
echo "</div>";

?>

<!-- <div class="cr">
<h1>
    <?php echo $year; ?>年
    <?php echo $month; ?>月
</h1>
</div> -->


</div>

</body>
</html>