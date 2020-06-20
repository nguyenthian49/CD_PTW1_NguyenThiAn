<?php

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
require_once "libs/scss.inc.php";
use ScssPhp\ScssPhp\Compiler;
$scss = new Compiler();
$sass = file_get_contents("sass/1063.scss");
$style = $scss->compile($sass);
file_put_contents("css/1063.css",$style);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>1063</title>
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/1063.css">
    <link href="./css/swiper.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    
    <script type="text/javascript" src="<?php echo $url_path ?>./js/1063.js"></script>
    <script type="text/javascript" src="<?php echo $url_path ?>./js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo $url_path ?>./js/bootstrap.min.js"></script>
    <script src="<?php echo $url_path ?>./js/swiper.min.js" type="text/javascript"></script>
   
</head>
<body>
    <?php include './1063-content.php'; ?>
</body>
</html>

