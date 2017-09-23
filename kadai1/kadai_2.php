<html>
 <head>
  <title>kadai1_2</title>
 </head>
 <body>
  
 <?php 
 
  $fp = fopen("sample.txt", "w");
  $str = "書き込み";
  fwrite($fp, $str);
  fclose($fp);
 ?>
 
 </body>
</html>
