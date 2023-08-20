<?php
if (isset($_GET['ip'])) {
    $ipAddress = $_GET['ip'];

    // Log the IP address along with a timestamp
    $logEntry = date('Y-m-d H:i:s') . ' - ' . $ipAddress . "\n";
    file_put_contents('ip_log.txt', $logEntry, FILE_APPEND);
}
?>
