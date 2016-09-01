

<div class="admin-backup">

	<p><a href="<?php echo URL;?>Backup.sql"><img src="<?php echo URL;?>public/images/backup.png"></a></p>


</div>




<?php
/*
for($i=0;$i<128;$i++) {
    echo "$i>" . bin2hex(chr($i)) . "<" . PHP_EOL;
}
*/

error_reporting(E_ALL);

include_once(dirname(__FILE__) . "/src/Ifsnop/Mysqldump/Mysqldump.php");

use Ifsnop\Mysqldump as IMysqldump;

$dumpSettings = array(
    'compress' => IMysqldump\Mysqldump::NONE,
    'no-data' => false,
    'add-drop-table' => true,
    'single-transaction' => true,
    'lock-tables' => true,
    'add-locks' => true,
    'extended-insert' => false,
    'disable-keys' => true,
    'skip-triggers' => false,
    'add-drop-trigger' => true,
    'databases' => false,
    'add-drop-database' => false,
    'hex-blob' => true,
    'no-create-info' => false,
    'where' => ''
    );

$dump = new IMysqldump\Mysqldump(
    "mvc",
    "root",
    "",
    "localhost:",
    "mysql",
    $dumpSettings);

$dump->start("Backup.sql");


$dumpSettings['default-character-set'] = IMysqldump\Mysqldump::UTF8MB4;

/*$dump = new IMysqldump\Mysqldump(
    "awebarts",
    "root",
    "",
    "localhost",
    "mysql",
    $dumpSettings);

$dump->start("mysqldump-php_test002.sql");*/

exit;
