<html>
 <head>
  <title>kadai1_3</title>
 </head>
 <body>
  
 <?php 
 
  $fp = fopen("sample.txt", "w");
  $str = "書き込み";
  fwrite($fp, $str);

  $fp2 = fopen("sample.txt", "r");
  while ($line = fgets($fp2)) {
  echo "$line<br />";
}
  fclose($fp);
 ?>
 
 </body>
</html>
