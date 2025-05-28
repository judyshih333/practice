<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
        font-family:'Courier New', Courier, monospace;
    }
    </style>    

    </head>
<body>
    <h2>以 * 符號為基礎在網頁上排列出下列圖形:</h2>
<ol>
    <li>直角三角型</li>
    <?php
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
        echo "*";
        }
        echo "<br>";
    }
    ?>
    <li>倒直角三角型</li>
    <?php
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=5;$j++){
            if($j>=$i){
                echo"*";
            }
        }
        echo"<br>";
    }
    ?>
    <li>正三角型</li>
    <?php
    for($i=1;$i<=5;$i++){
        for($x=1;$x<=(5-$i);$x++){
            echo"&nbsp";
        }
        for($j=1;$j<=($i*2-1);$j++){
            echo"*";
        }
        echo"<br>";
    }
    ?>

    <li>菱型</li>
    <?php
   
?>
    <li>矩形</li>
    <?php
    for($i=1;$i<=7;$i++){
        for($j=1;$j<=7;$j++){
            if($i==1||$i==7||$j==1||$j==7){
                echo"*";
            }else{
                echo"&nbsp";
            }
        }
        echo"<br>";
    }
    
    $w=7;
    for($i=1;$i<=$w;$i++){
        for($j=1;$j<=$w;$j++){
            if($i==1||$i==$w||$j==1||$j==$w){
                echo"*";
            }else{
                echo"&nbsp";
            }
        }
        echo"<br>";
    }
    ?>

    <li>內含對角線的矩形</li>
    <?php
    $w=7;
    for($i=1;$i<=$w;$i++){
        for($j=1;$j<=$w;$j++){
            if($i==1||$i==$w||$j==1||$j==$w||$i==$j||$i+$j==$w+1){
                echo"*";
            }else{
                echo"&nbsp";
            }
        }
        echo"<br>";
    }

    ?>


</ol>
</body>
</html>