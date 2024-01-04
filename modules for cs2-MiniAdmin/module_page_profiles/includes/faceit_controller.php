<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

set_time_limit(4);

define('IN_LR', true);
define('APP', '../../../../app/');
define('STORAGE', '../../../../storage/');
define('PAGE', APP . 'page/general/');
define('PAGE_CUSTOM', APP . 'page/custom/');
define('MODULES', APP . 'modules/');
define('INCLUDES', APP . 'includes/');
define('CACHE', STORAGE . 'cache/');
define('ASSETS', STORAGE . 'assets/');
define('SESSIONS', CACHE . 'sessions/');
define('LOGS', CACHE . 'logs/');
define('IMG', CACHE . 'img/');
define('ASSETS_CSS', ASSETS . 'css/');
define('ASSETS_JS', ASSETS . 'js/');
define('THEMES', ASSETS_CSS . 'themes/');
define('RANKS_PACK', IMG . 'ranks/');
define('MINUTE_IN_SECONDS', 60);
define('HOUR_IN_SECONDS', 3600);
define('DAY_IN_SECONDS', 86400);
define('WEEK_IN_SECONDS', 604800);
define('MONTH_IN_SECONDS', 2592000);
define('YEAR_IN_SECONDS', 31536000);

session_start();

require '../../../includes/functions.php';
require_once '../../../ext/Db.php';
require_once '../../../ext/Translate.php';
require_once '../../../ext/General.php';
require_once '../../../ext/Modules.php';
require_once '../../../ext/AltoRouter.php';

$settings = require MODULES.'module_page_profiles/settings.php';

$return = [];

$Translate      = new \app\ext\Translate;
$Db             = new \app\ext\Db();
$General        = new \app\ext\General ($Db);

$data = [];

if(!empty($settings['faceit_api_key'])){
  $nh = curl_init();
  curl_setopt($nh, CURLOPT_HTTPHEADER,
      array(
          'Authorization: Bearer ' . $settings['faceit_api_key'],
          'accept: application/json'
      )
  );
  curl_setopt($nh, CURLOPT_URL, 'https://open.faceit.com/data/v4/players?game=csgo&game_player_id=' . $_POST['data']);
  curl_setopt($nh, CURLOPT_RETURNTRANSFER, true);
  $array = curl_exec($nh);
  $data = json_decode($array, true);
  $return['HTTP_CODE'] = curl_getinfo($nh, CURLINFO_HTTP_CODE);
  curl_close($nh);
}


$return['faceit_nickname'] = $data['nickname'];
$return['faceit_elo'] = $data['games']['csgo']['faceit_elo'];
if(empty($data['games']['csgo']['skill_level'])){
  $return['skill_level'] = $General->arr_general['site'].'/app/modules/module_page_profiles/assets/img/faceit/none.svg';
} else {
  $return['skill_level'] = $General->arr_general['site'].'/app/modules/module_page_profiles/assets/img/faceit/'.$data['games']['csgo']['skill_level'].'.svg';
}
$faceit_url = $data['faceit_url'];
$language = $data['settings']['language'];
$return['faceit_url'] = str_replace("{lang}", $language, $faceit_url);



// Вывод
echo json_encode( $return, JSON_UNESCAPED_UNICODE );
exit;