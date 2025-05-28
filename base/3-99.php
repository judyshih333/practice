<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td{
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>九九乘法表</h2>
    <ul>
        <li>以表格排列的九九乘法表</li>
    <table>   
        <?php
    
        for($i=1;$i<=9;$i++){
            echo"<tr>";
            for($j=1;$j<=9;$j++){
                echo"<td>$i x $j=".($i*$j)."</td>";
            }
            
            echo"</tr>";
        }     
        ?>
    </table>
<br>
<table>
 <?php
        
        for($i=1;$i<=9;$i++){
            echo"<tr>";
            for($j=1;$j<=9;$j++){
                echo"<td>$j x $i=".($j*$i)."</td>";
            }
            echo"</tr>";
        }
        
        
        ?>
</table>
<br>

<li>以交叉計算結果呈現的九九乘法表</li>
<table>
<?php
    for($i=0;$i<10;$i++){
        echo"<tr>";
            for($j=0;$j<10;$j++){
                if($i+$j==0){
                    echo"<td></td>";
                }else{
                    if($i==0){
                        echo"<td>"."$j"."</td>";
                    }else{
                        if($j==0){
                            echo"<td>"."$i"."</td>";
                            }else{
                            echo"<td>".($j*$i)."</td>";
                        }
                    }
                }
            }
        echo"</tr>";

    }
        
?>
</table>
<br>
<table>
    <tr>
        <td></td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
    </tr>
    <?php
    for($i=1;$i<=9;$i++){
        echo"<tr>";
        echo "<td>$i</td>";
        for($j=1;$j<=9;$j++){
        echo"<td>".($i * $j)."</td>";
        }
    echo"</tr>";
    }
    ?>
</table>

<br>

<li>斜角九九乘法表</li>
<table>
    <tr>
        <td></td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
    </tr>
    <?php
    for($i=1;$i<=9;$i++){
        echo"<tr>";
        echo "<td>$i</td>";
        for($j=1;$j<=9;$j++){
            if($i>=$j){
            echo"<td>".($i * $j)."</td>";
            }else{
                echo"<td></td>";
            }
        
        }
    echo"</tr>";
    }
    ?>
</table>
<br>
<table>
<?php
    for($i=0;$i<10;$i++){
        echo"<tr>";
            for($j=0;$j<10;$j++){
                if($i+$j==0){
                    echo"<td></td>";
                }else{
                    if($i==0){
                        echo"<td>"."$j"."</td>";
                    }else{
                        if($j==0){
                            echo"<td>"."$i"."</td>";
                            }else{
                                if($i<=$j){
                                echo"<td>".($j*$i)."</td>";
                                }else{
                                    echo"<td></td>";
                                }
                        }
                    }
                }
            }
        echo"</tr>";

    }
        
?>
</table>



    </ul>

    
</body>
</html>
