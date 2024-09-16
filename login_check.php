<?php
if (isset($_SESSION['username'])) {
    header("Location: index1.php");
    exit();
}
?>
