<?php
header('Content-Type: application/force-download');
header('Content-disposition: attachment; filename=export.xls');
// Fix for crappy IE bug in download.
header("Pragma: ");
header("Cache-Control: ");
echo $_REQUEST['datatodisplay'];
?>