<?php
$config["sitename"] = "ㅇㅇㅇ";
$config["mode"] = "front";
$config["isDev"] = true;
$config["cssTableMinWidth"] = 640;
$config["cssDesktopMinWidth"] = 1024;
$config["cssLargeDesktopMinWidth"] = 1280;
$config["srcResourcesDir"] = "/resources-dev/" . $config["mode"];
$config["destResourcesDir"] = "/resources/" . $config["mode"];
$config["resourcesDir"] = ($config['isDev'] === true && (isset($config['isBuild']) && !$config['isBuild'] || !isset($config['isBuild']))) ? $config["srcResourcesDir"] : $config["destResourcesDir"];
$config["imageDir"] = $config["resourcesDir"]  . "/images";
?><!DOCTYPE html>
<!-- App Header.html -->
<html lang="ko-KR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?php echo $config["sitename"]; ?> 홈페이지 입니다." />
<title><?php echo $config["sitename"]; ?></title>
<?php if($config['isDev'] === true && (isset($config['isBuild']) && !$config['isBuild'] || !isset($config['isBuild']))){ ?>
<link rel="stylesheet/less" href="<?php echo $config["resourcesDir"]; ?>/less/phone.less" />
<link rel="stylesheet" href="<?php echo $config["destResourcesDir"]; ?>-legacy/css/legacy-phone.css" />
<link rel="stylesheet/less" href="<?php echo $config["resourcesDir"]; ?>/less/tablet.less" />
<link rel="stylesheet" href="<?php echo $config["destResourcesDir"]; ?>-legacy/css/legacy-tablet.css" />
<link rel="stylesheet/less" href="<?php echo $config["resourcesDir"]; ?>/less/desktop.less" />
<link rel="stylesheet" href="<?php echo $config["destResourcesDir"]; ?>-legacy/css/legacy-desktop.css" />
<link rel="stylesheet/less" href="<?php echo $config["resourcesDir"]; ?>/less/largedesktop.less" media="screen and (min-width: <?php echo $config['cssLargeDesktopMinWidth']; ?>px)" />
<link rel="stylesheet" href="<?php echo $config["destResourcesDir"]; ?>-legacy/css/legacy-largedesktop.css" media="screen and (min-width: <?php echo $config['cssLargeDesktopMinWidth']; ?>px)" />
<script src="<?php echo $config["resourcesDir"]; ?>/etc/less.min.js"></script>
<?php }else{ ?>
<link rel="stylesheet" href="<?php echo $config["resourcesDir"]; ?>/css/phone.min.css" />
<link rel="stylesheet" href="<?php echo $config["resourcesDir"]; ?>-legacy/css/legacy-phone.css" />
<link rel="stylesheet" href="<?php echo $config["resourcesDir"]; ?>/css/tablet.min.css" />
<link rel="stylesheet" href="<?php echo $config["resourcesDir"]; ?>-legacy/css/legacy-tablet.css" />
<link rel="stylesheet" href="<?php echo $config["resourcesDir"]; ?>/css/desktop.min.css" />
<link rel="stylesheet" href="<?php echo $config["resourcesDir"]; ?>-legacy/css/legacy-desktop.css" />
<link rel="stylesheet" href="<?php echo $config["resourcesDir"]; ?>/css/largedesktop.min.css" media="screen and (min-width: <?php echo $config['cssLargeDesktopMinWidth']; ?>px)" />
<link rel="stylesheet" href="<?php echo $config["resourcesDir"]; ?>-legacy/css/legacy-largedesktop.css" media="screen and (min-width: <?php echo $config['cssLargeDesktopMinWidth']; ?>px)" />
<?php } ?>
<?php if ($config["isDev"] === true && (isset($config['isBuild']) && !$config['isBuild'] || !isset($config['isBuild']))) { ?>
<!--[if lt IE 9]><script src="<?php echo $config["resourcesDir"]; ?>/jsvendor/jquery-1.12.2.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="<?php echo $config["resourcesDir"]; ?>/jsvendor-dev-only/jquery.js"></script><![endif]-->
<?php echoJsInPath('/resources-dev/' . $config["mode"] . '/jspack/'); ?>
<?php } else { ?>
<!--[if lt IE 9]><script src="<?php echo $config["resourcesDir"]; ?>/js/vendor/jquery-1.12.2.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="<?php echo $config["resourcesDir"]; ?>/js/vendor/jquery.min.js"></script><![endif]-->
<script src="<?php echo $config["resourcesDir"]; ?>/js/script.min.js"></script>
<?php } ?>
</head>
<body class="<?php echo getBodyClass($pagePath, $bodyClass); ?>">
<!-- //App Header.html -->
