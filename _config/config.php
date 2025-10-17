<?php
$request_url = $_SERVER["REQUEST_URI"];

$request_url_explode = explode('/', $request_url);

$url_count = count($request_url_explode);

$folder_name = $request_url_explode[$url_count - 2] ? $request_url_explode[$url_count - 2] : null;

$folder_name2 = $request_url_explode[$url_count - 2] ? $request_url_explode[$url_count - 2] : null;

$class_of_main = '';

$HTTPS = empty($_SERVER['HTTPS']) ? 'http://' : 'https://';

$HTTP_HOST = $_SERVER['HTTP_HOST'];

$top_url = $HTTPS . $HTTP_HOST . "/";

$full_url = $HTTPS . $HTTP_HOST . $request_url;

$time = time();

//メインのページタイトル
$pageTitle = "沖縄県平和関連施設ネットワーク構築事業　特設ページ";

//下層ページタイトルの設定
$viewPageTitle = 'Home';

//description
$description = "沖縄県平和関連施設ネットワーク構築事業　特設ページ";

//トップページ以外
if ($folder_name) {
  switch ($folder_name) {
    // Contactページ
    case $folder_name == "contact" && !$request_url_explode[$url_count - 1];
      $viewPageTitle = "お問い合わせ";
      $description = "desc";
      break;
    // Contactページ thanks.php
    case $folder_name == "contact" && $request_url_explode[$url_count - 1] == "thanks.php";
      $viewPageTitle = "お問い合わせありがとうございました";
      break;
  }

  if ($pageTitle) {
    $pageTitle = $viewPageTitle . "｜" . $pageTitle;
  } else {
    $pageTitle = $viewPageTitle;
  }
}


// funtion
function generate_token() {
    $token = bin2hex(random_bytes(32));
    return $token;
}
