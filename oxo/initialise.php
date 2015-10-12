<html>
<head>
</head>
<body>
<h1>2d OXO</h1>
<h2>Initialise</h2>
<?php
$fp = fopen('data.txt', 'w');
fwrite($fp, '1');
fwrite($fp, '23');
fclose($fp);
?>