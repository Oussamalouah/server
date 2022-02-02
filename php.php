<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <div class = "container">
    <form  method ="get">
    <div class = "content">
    <input type="number" class = "num1" name="num1" >
    <input type="number" class = "num1" name="num2" >
    <input type="submit"  class = "submit" name="submit" value="submit">
    <select name="calibre" class = "calibre">
                            <option> select calibre</option>
                            <option value="22,65">5-10</option>
                            <option value="37,05">15-20</option>
                            <option value="46,20">>30 </option>
                        </select>
                        
         </div>              
         </form>
    </div> 
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
            echo $result *$tk1+$_GET['calibre'];
         }
         if($result <=150 and $result >=101){
             echo "<br>";
             $tr1=100 *$tk1;
             echo $tr1;
             echo "<br>";
             echo ($result -100) * $tk2;
             echo "<br>";
             echo ($result -100) * $tk2 +$tr1+$_GET['calibre'];
            
         }
         if($result <=210 and $result >=151){
            echo $result * $tk3; +$_GET['calibre']
         }
         if($result <=310 and $result >=211){
            echo $result * $tk4; +$_GET['calibre']
           
         }
         
         if($result <=510 and $result >=311){
            echo $result * $tk5; +$_GET['calibre']
         }
         if($result >=511){
            echo $result * $tk6; +$_GET['calibre']
         }
         
         
     }
 ?>
 <style>
    <?php include('style.css'); ?>
   </style>


</body>
</html>