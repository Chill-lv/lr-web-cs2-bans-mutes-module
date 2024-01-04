<?php
/**
 * @author Anastasia Sidak <m0st1ce.nastya@gmail.com>
 *
 * @link https://steamcommunity.com/profiles/76561198038416053
 * @link https://github.com/M0st1ce
 *
 * @license GNU General Public License Version 3
 */

empty( $Db->db_data['MiniAdmin'] ) && get_iframe( '012','Mod not found' );

// Количество банов на странице.
define('PLAYERS_ON_PAGE', '20');

$USER_ID = $Db->db_data['MiniAdmin'][0]['USER_ID'];
$Table = $Db->db_data['MiniAdmin'][0]['Table'];
$DB_num = $Db->db_data['MiniAdmin'][0]['DB_num'];


// Номер страницы.
$page_num = (int) intval ( get_section( 'num', '1' ) );

// Per player active ban listing
$player_ban = [];
if(!empty($_SESSION['steamid64'])){
    $db_result = $Db->queryAll('MiniAdmin', $USER_ID, $DB_num, "SELECT * FROM `{$Table}mute` WHERE `steamid64` = {$_SESSION['steamid64']} LIMIT 1");
    $db_result = $db_result[0];
    if ($db_result['mute_active'] == 0 || ($db_result['end_mute_time'] - time()) <= 0){
        $player_ban = [];
    } else {
        $player_ban = $db_result; 
    }
};

// Подсчёт кол-ва страниц
$page_max = ceil($Db->queryNum('MiniAdmin', $USER_ID, $DB_num, "SELECT COUNT(*) FROM `" . $Table . "mute` ")[0]/PLAYERS_ON_PAGE);

$page_num_min = ($page_num - 1) * PLAYERS_ON_PAGE;

( $page_num > $page_max || $page_num <= '0' ) && header('Location: ' . $General->arr_general['site']);

// Запрос на получение информации о мутах
$res = $Db->queryAll('MiniAdmin', $USER_ID, $DB_num, "SELECT `mute_type`, `admin_username`, `admin_unlocked_username`, `admin_steamid`, `steamid64`, `username`, `reason`, `unmute_reason`, `start_mute_time`, `end_mute_time`, `mute_active` FROM `{$Table}mute` ORDER BY `start_mute_time` DESC LIMIT {$page_num_min}," . PLAYERS_ON_PAGE . "");

// Задаём заголовок страницы.
$Modules->set_page_title( $General->arr_general['short_name'] . ' :: ' . $Translate->get_translate_phrase('_Comms') . ' :: ' . $Translate->get_translate_phrase('_Page') . ' ' . $page_num );

// Задаём описание страницы.
$Modules->set_page_description( $General->arr_general['short_name'] . ' :: ' . $Translate->get_translate_phrase('_Comms') . ' :: ' . $Translate->get_translate_phrase('_Page') . ' ' . $page_num );
