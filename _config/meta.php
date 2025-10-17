<?php
include_once "config.php";

//端末判定
$ua = $_SERVER['HTTP_USER_AGENT'];
$is_sp = false;
$is_sp = ((strpos($ua, 'iPhone') !== false) || (strpos($ua, 'iPod') !== false) || (strpos($ua, 'Android') !== false));

$HTML['pageHeaderJsCss'] = <<< HTML
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>{$pageTitle}</title>
<link rel="shortcut icon" href="{$top_url}assets/img/common/meta/favicon.png">
<link rel="apple-touch-icon" sizes="180x180" href="{$top_url}assets/img/common/meta/favicon.png">
<link rel="icon" type="image/png" sizes="32x32" href="{$top_url}assets/img/common/meta/favicon.png">
<link rel="canonical" href="{$top_url}"/>
<link rel="index" href="{$top_url}"/>
<meta name="description" content="{$description}">
<!-- サムネイル -->
<meta name="thumbnail" content="{$top_url}assets/img/common/meta/ogp.jpg" />
<meta property="og:locale" content="ja_JP" />
<meta property="og:title" content="{$pageTitle}"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="{$top_url}"/>
<meta property="og:image" content="{$top_url}assets/img/common/meta/ogp.jpg"/>
<meta property="og:site_name" content="{$pageTitle}"/>
<meta property="og:description" content="{$description}"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="{$pageTitle}"/>
<meta name="twitter:description" content="{$description}"/>
<meta name="twitter:image" content="{$top_url}assets/img/common/meta/ogp.jpg"/>
<meta itemprop="image" content="{$top_url}assets/img/common/meta/ogp.jpg"/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;800&family=Roboto:wght@400;600&display=swap" rel="stylesheet">

<link href="{$top_url}assets/css/index.css" rel="stylesheet" type="text/css">


HTML;

$HTML['pageFooterJs'] = <<< HTML
<!--javascript-->
<script type="text/javascript" src="{$top_url}lib/jquery-3.4.1.min.js"></script>
<script src="{$top_url}assets/js/common.js"></script>
<script src="{$top_url}lib/jquery.inview.min.js"></script>
<script src="{$top_url}assets/js/animation.template.js?{$time}"></script>
HTML;
