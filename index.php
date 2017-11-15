<?php
    define('DS', '/');
    require_once "Classes/Entity.php";
    require_once "Classes/Helper.php";
    require_once "Classes/FilteredFilelist.php";
    require_once "Classes/File.php";
    require_once "Classes/Folder.php";

    $base = !empty( $_GET['entry'] ) ? urldecode($_GET['entry']) :  __DIR__;
    $config = [
        'levelup_link' => ($base != __DIR__)
    ];
    $entryFolder = new Folder($base, $config);
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
    <?php $entryFolder->showContent(); ?>
</div>
</body>
</html>
