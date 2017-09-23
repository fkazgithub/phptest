<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kadai_6</title>
</head>
<body>
 <?php
 $fp = fopen("sample3.txt", "a");
 $str = $_POST["sample"];
 fwrite($fp, $str."\n");

 fclose($fp);


   ?>
</body>
</html>