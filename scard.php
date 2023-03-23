<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 40%;
            border-radius: 25px;
            padding: 100px; 
            border-color: pink;
          
        }
        
        
    </style>

</head>
<body>
    
   



<center> 
  <div class="card">
        <img src="img/maha.jpg" alt="Studentcard" style="width:200px;float:left;">
        <img src="img/mari.jpg" alt="Studentcard" style="width:100px;float:right;">
        
        <div class="container">
         <center>
    <?php
      include("../classcard/dob.php")
        
      
 
    ?>
        </center>

        </div>
    </div>

  </center>
  
   
</body>
  


</body>
</html>