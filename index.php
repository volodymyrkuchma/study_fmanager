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
</head>
<body>
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
</body>
</html>
