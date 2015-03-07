<html>
<head>
</head>
<body>
<?php
$file = 'hc.dsp';
$text = $_POST['hc'];
file_put_contents($file, $text, LOCK_EX);
?>
</body>
</html>
