<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kadai2_5</title>
</head>
<body>


<?php

if (isset($_POST['edit'])){ //編集
$file_name = "sample2_2.txt";
$array = file($file_name);
for ($i=0;$i<count($array);++$i){
$line = explode("<>",$array[$i]);
if($line[0] == $_POST['edino']){
$file   = file('sample2_2.txt');
unset($file[$i]);
file_put_contents('sample2_2.txt', $file);
	
}

}
      
}
?>

<form action="kadai2_5.php" method="post">
  名前：<br/>
  <input type="text" name="name2" size="30" value="" /><br/>
  コメント:<br/>
  <textarea name="comment2" cols="30" rows="5"></textarea><br />
  <br />
  <input type="submit" name="sent2" value="編集" />
</form>






</body>
</html>