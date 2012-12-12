<?php

<html>
<head>

<meta http-equiv="Refresh" CONTENT="0; URL=http://www.speedyshare.com/files/19797176/relaks.mp3">
</head>

<body>

<?
$file=fopen("licznik.txt", "r");
$counter=fgets($file);
fclose($file);
$counter=$counter+1;
$file=fopen("licznik.txt", "w");
fwrite($file, $counter);
fclose($file);
print "$counter";
?>

</body>
</html>

 
