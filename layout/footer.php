<?php error_reporting(0);

$parts = explode('/', __FILE__);
$filename = $parts[count($parts) - 1];

if (strpos($_SERVER["SCRIPT_URI"], $filename) !== false) {
	exit("illegal method");
}
?>
<div class="footer">
    <div class="pull-right">
        <strong>Instagram</strong> UMRAH
    </div>
    <div>
        <strong>Developed</strong> by Informatika
    </div>
</div>