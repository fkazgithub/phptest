<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kadai2_2</title>
</head>
<body>
 <?php
 date_default_timezone_set('Asia/Tokyo');
 $time = date('Y/m/d H:i:s');
 $fp = fopen("sample2_2.txt", "a");
 $str = $_POST["name"];
 $com = $_POST["comment"];
 $time = date('Y年m月d日 H時i分s秒');
 $datafile='sample2_2.txt';
 $num = sizeof(file($datafile))+1;
 
 fwrite($fp,$num."<>".$str."<>".$com."<>".$time."\n");
 fclose($fp);
 
 $file_name = "sample2_2.txt";
 $array = file($file_name);
 for ($i=0;$i<count($array);++$i){
 echo ($array[$i]."<br />\n");


 }



   ?>
</body>
</html>