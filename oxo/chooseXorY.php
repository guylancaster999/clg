<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/main.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>2D Noughts and Crosses</title>
</head>

<body>
<h1>2D Noughts and Crosses</h1>
<div align="center"><?php print $_POST["msg"];?></div>
<form "do_chooseXorY.php" method="post">
<input type="submit" id="xor0" name="xor0" value="0"/>
or
<input type="submit" id="xor0" name="xor0" value="X"/>
?
</form>
</body>
</html>