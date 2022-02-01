<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method ="get">
    <input type="number" name="num1" >
    <input type="number"name="num2" >
    <input type="submit" name="submit" value="submit">
    <select name="calibre">
                            <option>-- select calibre--</option>
                            <option value="22,65">5-10</option>
                            <option value="37,05">15-20</option>
                            <option value="46,20">>30 </option>
                        </select>
                        
    </form>
    <?php
    // when click submit calculate the numbers
      $result = $_GET['num1']-$_GET['num2'];
      $tk1 = 0.794;
      $tk2 = 0.883;
      $tk3 = 0.9451;
      $tk4 = 1.0489;
      $tk5 = 1.2915;
      $tk6 = 1.4975;
      $calibr = $_GET['calibre'];
     if(isset($_GET['submit'])){
   //   tranch algorithme
         if($result <=100){
            echo "<br>";
            echo $result *$tk1;
         }
         if($result <=150 and $result >=101){
             echo "<br>";
             $tr1=100 *$tk1;
             echo $tr1;
             echo "<br>";
             echo ($result -100) * $tk2;
             echo "<br>";
             echo ($result -510) * $tk2 +$tr1;
            
         }
         if($result <=210 and $result >=151){
            echo $result + $tk3;
         }
         if($result <=310 and $result >=211){
            echo "<br>";
            $tr4=210 * $tk3;
            echo $tr4;
            echo "<br>";
            echo ($result -210) * $tk4;
            echo "<br>";
            echo ($result -510) * $tk4+$tr4;
         }
         
         if($result <=510 and $result >=311){
            echo "<br>";
            $tr5=310 * $tk4;
            echo $tr5;
            echo "<br>";
            echo ($result -310) * $tk5;
            echo "<br>";
            echo ($result -310) * $tk5 +$tr5;
         }
         if($result >=511){
            echo "<br>";
            $tr6=510 * $tk5;
            echo $tr6;
            echo "<br>";
            echo ($result -510) * $tk6;
            echo "<br>";
            echo ($result -510) * $tk6 +$tr6+($_GET['calibre']);
           
         }
         
         
     }
 ?>


</body>
</html>