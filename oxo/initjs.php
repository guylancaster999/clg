<html>
<head>
<script>
function initialise()
{
var file = new File("hone/oxo/test.txt";);
file.open("w"); // open file with write access
file.writeln("First line of text");
file.close();
return true;
}
</script>
</head>
<body>
<a href="#" onclick  = "initialise();">Initialise</a>
</body>
</html>