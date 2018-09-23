<<<<<<< HEAD
<?php
include("config/setup.php");
include ("template/header.php");
include ("template/footer.php");
?>
		
=======
<?php
require_once 'library/config.php';
require_once 'library/functions.php';

checkUser();

$content = 'main.php';

$pageTitle = 'Asset Management';
$script = array();

require_once 'template.php';
?>
>>>>>>> dd9ae0e01944b4035c04273a85d1b6b93ebd2d59
