<?php 

session_start();
session_destroy();

echo "Anda telah logout. Mengalihkan ke halaman login...";
echo " <meta http-equiv='refresh' content='2;url=index.php.'> ";
exit();

?>