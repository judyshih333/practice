<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>判斷成績是否合格</h2>
    <!-- if...else -->
    <h4><ol>
        <li>給定一個成績數字，判斷是否及格(60)分</li>
        <li>不及格使用紅色字顯示，及格使用綠色字顯示</li>
        <li>判斷$score是否是數字，如果不是數字，則提示錯誤</li>
        </ol></h4>
    <?php
    echo"1.";
    $sorce=60;
    if($sorce>=60){
        echo"成績:$sorce"."分-合格";
    }else{echo"成績:$sorce"."分-不合格";

    }

    echo"<br>";
    echo"2.";
    // <span style="color:green>文字部分著色</span>
    $sorce=60;
    echo"成績:$sorce"."分-";
    if($sorce>=60){
    echo "<span style='color:green'>合格</span>";
    }else{echo "<span style='color:red'>不合格</span>";

    }
    echo"<br>";
    echo"3.";
    $sorce=20;
    // is_numeric() 是用來檢查是否為數字或數字字串的函數
    if(!is_numeric($sorce)||$sorce<0||$sorce>100){
        echo"<span style='color:red'>請確認並填入正確分數</span>";
        exit();
    }
    echo"成績:$sorce"."分-";
    if($sorce>=60){
    echo "<span style='color:green'>合格</span>";
    }else{echo "<span style='color:red'>不合格</span>";

    }
    
    ?>

    <h2>分配成績等級</h2>
    <h3>給定一個成績數字，根據成績所在的區間，給定等級</h3>
    <ul>
        <li>0 ~ 59 => E</li>
        <li>60 ~ 69 => D</li>
        <li>70 ~ 79 => C</li>
        <li>80 ~ 89 => B</li>
        <li>90 ~ 100 => A</li>

    </ul>
    <?php
    $level='';
    if($sorce>=0 && $sorce<=59){
      $level='E';
     }else if($sorce>=60 && $sorce<=69){
        $level='D';
    }else if($sorce>=70 && $sorce<=79){
        $level='C';
    }else if($sorce>=80 && $sorce<=89){
        $level='B';
    }else if($sorce>=90 && $sorce<=100){
        $level='A';
    }
    echo"<br>";
    echo "成績:".$sorce."分，"."判定等級:".$level;
        
    ?>
    <h2>依據學生成績等級給予評價</h2>
    <?php
    switch($level){
        case"A":echo"成績傑出，超讚的!!!";
        break;
        case"B":echo"成績不錯，讚!";
        break;
        case"C":echo"很好";
        break;
        case"D":echo"要加油喔";
        break;
        case"E":echo"要非常努力";
        break;
        default:echo"請確認並填入正確分數";

    }
    ?>
</body>
</html>
