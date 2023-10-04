<html>
<html>
<head>
    <title>phpvariables</title>
</head>
<body>
<?php
function keep_track() {
    STATIC $count = 0;
    $count++;
    print $count;
    print "
   ";
   }
   keep_track();
   keep_track();
   keep_track();
?>
</body>
</html>