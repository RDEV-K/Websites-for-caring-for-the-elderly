<?php
session_start();
session_unset();
session_destroy();
echo "<script>location.href='index.php?msg=Log out successfully.'</script>";
ob_end_flush();
exit();
?>