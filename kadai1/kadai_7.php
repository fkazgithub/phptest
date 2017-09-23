<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kadai_7</title>
</head>
<body>
 <?php
 $fp = fopen("sample4.txt", "a");
 $str = $_POST["sample"];
 fwrite($fp, $str."\n");
 fclose($fp);
 
 $file_name = "sample4.txt";
 $array = file($file_name);
 for ($i=0;$i<count($array);++$i){
 echo ($array[$i]."<br />\n");


 }



   ?>
</body>
</html>