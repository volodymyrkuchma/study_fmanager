<?php
    define('DS', '/');
    require_once "Classes/Entity.php";
    require_once "Classes/File.php";
    require_once "Classes/Folder.php";

    $base = __DIR__;
    $list = scandir($base);
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
<?php foreach ($list as $item):?>
    <div><?php
        $fullPath = $base . DS . $item;
        $obj = is_file($fullPath)
            ? new File($fullPath)
            : new Folder($fullPath);

        if($obj instanceof Entity){
            $obj->showTeaser();
        }
        ?>
    </div>
<?php endforeach; ?>
</div>
</body>
</html>
