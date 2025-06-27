<?php
if (isset($_GET['showSource'])) {
    header('Content-Type: text/plain');
    show_source(__FILE__);
    exit;
}
?>
