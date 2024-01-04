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
require '../ext/SourceQuery/bootstrap.php';
use xPaw\SourceQuery\SourceQuery;

$return = [];

$Translate      = new \app\ext\Translate;
$Db             = new \app\ext\Db();
$General        = new \app\ext\General ($Db);
$Query          = new SourceQuery();

$servers = $Db->queryAll( 'Core', 0, 0, "SELECT `id`, `ip`, `name` FROM `lvl_web_servers`" );
$servers_count = sizeof( $servers );
for ( $i_ser = 0; $i_ser < $servers_count; $i_ser++ ):
    $server[] = explode( ":", $servers[$i_ser]['ip'] );
    $server_name[] = $servers[$i_ser]['name'];
endfor;

for ( $i_server = 0; $i_server < $servers_count; $i_server++ ):
  try {
      $Query->Connect( $server[ $i_server ][0], $server[ $i_server ][1], 3, SourceQuery :: SOURCE );
      $SQuery[ $i_server ]['players'] = $Query->GetPlayers();
      $SQuery[ $i_server ]['ip'] = $server[ $i_server ][0] . ':' . $server[ $i_server ][1];
      $SQuery[ $i_server ]['server_name'] = $server_name[ $i_server ];
  } catch ( Exception $e ) {
    $SQuery[ $i_server ]['players'] = null;
    $SQuery[ $i_server ]['ip'] = $server[ $i_server ][0] . ':' . $server[ $i_server ][1];
    $SQuery[ $i_server ]['server_name'] = $server_name[ $i_server ];
  } finally {
      $Query->Disconnect();
  }
endfor;

$lastconnect = false;

foreach($SQuery as $server_search) {
  foreach($server_search["players"] as $player) {
    if (strcasecmp($player["Name"], $_POST['data']["name"]) == 0) {
      $return['online'] = $Translate->get_translate_module_phrase('module_page_profiles', '_Playing_on_the_server').' <svg width="12px" height="12px" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path></svg> '.$server_search['server_name'];
      $return['ip'] = $server_search['ip'];
      $lastconnect = true;
    }
  }
}
if($lastconnect == false) {
  $return['online'] = '<svg  width="12px" height="12px" viewBox="0 0 512 512"><path d="M75 75L41 41C25.9 25.9 0 36.6 0 57.9V168c0 13.3 10.7 24 24 24H134.1c21.4 0 32.1-25.9 17-41l-30.8-30.8C155 85.5 203 64 256 64c106 0 192 86 192 192s-86 192-192 192c-40.8 0-78.6-12.7-109.7-34.4c-14.5-10.1-34.4-6.6-44.6 7.9s-6.6 34.4 7.9 44.6C151.2 495 201.7 512 256 512c141.4 0 256-114.6 256-256S397.4 0 256 0C185.3 0 121.3 28.7 75 75zm181 53c-13.3 0-24 10.7-24 24V256c0 6.4 2.5 12.5 7 17l72 72c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-65-65V152c0-13.3-10.7-24-24-24z"/></svg> '.' '.$Translate->get_translate_module_phrase('module_page_profiles', '_Last_connect').' '.$_POST['data']["lastconnect"];
}

// Вывод
echo json_encode( $return, JSON_UNESCAPED_UNICODE );
exit;