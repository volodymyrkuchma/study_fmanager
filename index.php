<?php

define('DS', '/');

$loader = require_once 'Classes/Autoloader.php';
$loader->addNamspacePath('Mindk', __DIR__ . '/Classes/');

$base = !empty( $_GET['entry'] ) ? urldecode($_GET['entry']) :  __DIR__;
$entryFolder = new \Mindk\Folder($base);

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.4/css/uikit.min.css" type="text/css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.4/js/uikit.min.js"></script>
</head>
<body>
<div class="uk-container uk-container-center uk-margin-large-top">
    <?php if( $base != __DIR__ ): ?>
    <a href="index.php?entry=<?php echo urlencode(dirname($base)); ?>"><i class="uk-icon-mail-reply-all"></i> ..</a>
    <?php endif; ?>
    <?php $entryFolder->showContent(); ?>
</div>
</body>
</html>
