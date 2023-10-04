<html>
<html>
<head>
    <title>phpvariables</title>
</head>
<body>
<?php
$x = 4;
function assignx () {
$x = 0;
print "\$x inside function is $x. 
";
}
assignx();
print "\$x outside of function is $x. 
";
?>
</body>
</html>
