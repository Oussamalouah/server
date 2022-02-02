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
    error_reporting(0);
    $result = $_GET['num1']-$_GET['num2'];
      $tk1 = 0.794;
      $tk2 = 0.883;
      $tk3 = 0.9451;
      $tk4 = 1.0489;
      $tk5 = 1.2915;
      $tk6 = 1.4975;
      $calibr = $_GET['calibre'];
      $taxe =($result*$tk1)*0.14;
      $taxeCalibre = $_GET['calibre']*0.14;
     if(isset($_GET['submit'])){
   //   tranch algorithme
         if($result <=100){
         echo"<p id = 'r2'>".$taxe.':مجموع الرسوم '."</p>";
         echo"<p id ='r1'>".($result*$tk1)+$taxe+$_GET['calibre']+$taxeCalibre+0.740.':الواجب أداؤه'."</p>";
         }
         if($result <=150 and $result >=101){
             $tr1=100 *$tk1;
             echo "<p id = 'r3'>".$tr1.':الشطر الاول'."</p>";
             echo "<p id = 'r4'>".($result -100) * $tk2.':الشطر التاني '."</p>";
             echo"<p id = 'r5'>".$taxe.':مجموع الرسوم '."</p>";
             echo "<p id ='r6'>".($result -100) * $tk2 +$taxe+$_GET['calibre']+$taxeCalibre.':الواجب أداؤه'."</p>";
            
         }
         if($result <=210 and $result >=151){
            echo"<p id = 'r2'>".$taxe.':مجموع الرسوم '."</p>";
            echo"<p id ='r1'>".($result*$tk3)+$taxe+$_GET['calibre']+$taxeCalibre.':الواجب أداؤه'."</p>";
         }
         if($result <=310 and $result >=211){
            echo"<p id = 'r2'>".$taxe.':مجموع الرسوم '."</p>";
            echo"<p id ='r1'>".($result*$tk4)+$taxe+$_GET['calibre']+$taxeCalibre.':الواجب أداؤه'."</p>";
           
         }
         
         if($result <=510 and $result >=311){
            echo"<p id = 'r2'>".$taxe.':مجموع الرسوم '."</p>";
            echo"<p id ='r1'>".($result*$tk5)+$taxe+$_GET['calibre']+$taxeCalibre.':الواجب أداؤه'."</p>";
         }
         if($result >=511){
            echo"<p id = 'r2'>".$taxe.':مجموع الرسوم '."</p>";
            echo"<p id ='r1'>".($result*$tk6)+$taxe+$_GET['calibre']+$taxeCalibre.':الواجب أداؤه'."</p>";
         }
         
         
     }
 ?>
 <style> 
    <?php include('style.css'); ?>
   </style>


</body>
</html>