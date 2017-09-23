<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kadai2_3</title>
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
   ?>

<form action="" method="post">
  名前：<br/>
  <input type="text" name="name" size="30" value="" /><br/>
  コメント:<br/>
  <textarea name="comment" cols="30" rows="5"></textarea><br />
  <br />
  <input type="submit" value="送信" />
</form>

<?php
$file_name = "sample2_2.txt";
 $array = file($file_name);
 for ($i=0;$i<count($array);++$i){
 $line = explode("<>",$array[$i]);
 echo ($line[0].$line[1].$line[2].$line[3]."<br />\n");
 }

?>






</body>
</html>