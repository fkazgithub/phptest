<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kadai_5</title>
</head>
<body>
 <?php
 $fp = fopen("sample2.txt", "w");
 $str = $_POST["sample"];
 fwrite($fp, $str);
 fclose($fp);


   ?>
</body>
</html>