<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>
      Tabuada gerada!
    </title>
    <link rel='stylesheet'
          type='text/css'
          href='estiloSaida.css'>
   
  </head>
  <body>
     
      <?php      
    
    $tab = 0;
    if (isset ($_POST["TABUADA"])){        
        $tab = $_POST["TABUADA"];
        if (!is_numeric($tab)){
          echo  "<br>O valor informado não é um numero.<br>";  
        }else {          
          for ($num=0; $num<=10; $num++){
             echo $num . " x " . $tab. " = " . ($num * $tab) . "<br>"; 
                               
            }
        }        
      } 
      
    ?>  
   
  </body>
</html>