<!DOCTYPE html> 
<html lang="en"> 
<head> 
 <meta charset="UTF-8"> 
 <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <title>Document</title> 
 <style type="text/css"> 
 container { 
 width: 80%; 
 } 
 
 table { 
 width: 100%; 
 border-collapse: collapse; 
 text-align: center; 
 } 
 
 table tr { 
 height: 30px; 
 padding-bottom: 10px; 
 } 
 
 table tr td { 
 padding: 5px; 
 } 
 </style> 
</head> 
<body> 
 <h3 style="text-align: center;"> Data Pemantaun Covid19 Wilayah <?php 
echo $_POST['wilayah'] ?></h3> 
 <h3 style="text-align: center;"> <?php echo date('d-m-Y h:i:s a') 
?></h3> 
 <h3 style="text-align: center;"> <?php echo $_POST['operator'], " / ", 
$_POST['nim'] ?></h3> 
 <div class="container"> 
 <div class="box"> 
 <table border="1" class="table"> 
 <thead> 
 <tr> 
 <th>positif</th> 
 <th>Dirawat</th> 
 <th>Sembuh</th> 
 <th>Meninggal</th> 
 </tr> 
 </thead> 
 <tbody> 
 <tr> 
 <td><?php echo $_POST['positif'] ?></td> 
 <td><?php echo $_POST['rawat'] ?></td> 
 <td><?php echo $_POST['sembuh'] ?></td> 
 <td><?php echo $_POST['die'] ?></td> 
 </tr> 
 </tbody> 
 </table> 
 </div> 
 </div> 
</body> 
</html>