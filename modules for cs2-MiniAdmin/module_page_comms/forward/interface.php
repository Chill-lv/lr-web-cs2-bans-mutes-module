<?php ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="row">
    <div class="col-md-12">
        <div class="block_buttons">
            <?php if (file_exists(MODULES . 'module_page_bans/description.json')) : ?>
                <div class="block_bans_button<?php if (in_array($Modules->route, array("bans"))) echo ' block_active' ?>" onclick="location.href='<?= $General->arr_general['site'] ?>/bans';"><?= $Translate->get_translate_module_phrase('module_page_comms', '_Bans_GameBlock') ?></div>
            <?php endif;
            if (file_exists(MODULES . 'module_page_comms/description.json')) : ?>
                <div class="block_comms_button<?php if (in_array($Modules->route, array("comms"))) echo ' block_active' ?>" onclick="location.href='<?= $General->arr_general['site'] ?>/comms';"><?= $Translate->get_translate_module_phrase('module_page_comms', '_Comms_GameBlock') ?></div>
            <?php endif; ?>
        </div>
        <div class="note_container">
            <?php if(!empty($_SESSION['steamid64'])): ?>
                <?php if(empty($player_ban)): ?>
                    <span class="check_ban">No active commban for <a class="link" target="_blank" href="<?= $General->arr_general['site'] ?>profiles/<?= $_SESSION['steamid64'] ?>/?search=1">your account</a> was found...</span>
                <?php else: ?>
                    <p>
                        <span class="check_ban">You are <a class="special-red">commbanned</a> by <?= $player_ban["admin_steamid"] == "Console" ? '<a class="special-orange">Console</a>' : '<a class="link" href="'. $General->arr_general['site'] .'profiles/'. con_steam32to64($res[$i]['admin_steamid']) .'/?search=1">'. $player_ban["admin_username"] .'</a> with the reason of <a class="special-bold">'. $player_ban["reason"] .'</a>' ?></span>
                        <span class="check_ban">
                            Your ban expires in: 
                            <?php
                                if ($player_ban['end_ban_time'] == 0){ 
                                    echo '<a class="special-red">' . $Translate->get_translate_module_phrase('module_page_profiles', '_Never') . '</a>'; 
                                } else { 
                                    echo '<a class="special-orange">'. $Modules->action_time_exchange(($player_ban['start_ban_time'] + $player_ban['end_ban_time']) - time()) .'</a>';
                                }
                            ?>
                        </span>
                        <br />
                        <span class="check_ban">You may appeal your ban at our <a href="https://discord.gg/gk66ur79" class="discord_link" target="_blank">Discord</a></span>
                    </p>
                <?php endif; ?>
            <?php else: ?>
                <span class="check_ban"><a href="?auth=login" class="link">Log in</a> to see if you have an active ban...</span>
            <?php endif; ?>
        </div>
        <div class="card">
            <div class="comms_head">
                <span class="comms_1"><?= $Translate->get_translate_module_phrase('module_page_comms', '_Comms_Date') ?></span>
                <span class="comms_1"><?= $Translate->get_translate_module_phrase('module_page_comms', '_Comms_Type') ?></span>
                <span><?= $Translate->get_translate_module_phrase('module_page_comms', '_Muted_User') ?></span>
                <span class="comms_1"><?= $Translate->get_translate_module_phrase('module_page_comms', '_Comms_Admin') ?></span>
                <span><?= $Translate->get_translate_module_phrase('module_page_comms', '_Comms_Reason') ?></span>
                <span><?= $Translate->get_translate_module_phrase('module_page_comms', '_Comms_Term') ?></span>
				<span><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Expiration'); ?></span>
            </div>
            <ul class="comms_list_body">
                <?php for ($i = 0, $sz = sizeof($res); $i < $sz; $i++) :
                    $General->get_js_relevance_avatar($General->arr_general['only_steam_64'] === 1 ? con_steam32to64($res[$i]['admin_steamid']) : $res[$i]['admin_steamid']);
                    $res[$i]['aid'] != '0' && $General->get_js_relevance_avatar($General->arr_general['only_steam_64'] === 1 ? con_steam32to64($res[$i]['admin_steamid']) : $res[$i]['admin_steamid']) ?>
                    <li class="pointer">
                        <span class="comms_date comms_1"><?= date('d-m-Y', $res[$i]['start_mute_time']) ?></span>
                        <span class="comms_type comms_1">
                            <?php if ($res[$i]['mute_type'] == '0') : ?> <!-- Mute -->
                                <svg viewBox="0 0 640 512" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_comms', '_Type_Mic') ?>" data-tippy-placement="top">
                                    <path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L472.1 344.7c15.2-26 23.9-56.3 23.9-88.7V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 21.2-5.1 41.1-14.2 58.7L416 300.8V96c0-53-43-96-96-96s-96 43-96 96v54.3L38.8 5.1zM344 430.4c20.4-2.8 39.7-9.1 57.3-18.2l-43.1-33.9C346.1 382 333.3 384 320 384c-70.7 0-128-57.3-128-128v-8.7L144.7 210c-.5 1.9-.7 3.9-.7 6v40c0 89.1 66.2 162.7 152 174.4V464H248c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H344V430.4z" />
                                </svg>
                            <?php elseif ($res[$i]['mute_type'] == '1') : ?> <!-- Gag -->
                                <svg viewBox="0 0 640 512" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_comms', '_Type_Chat') ?>" data-tippy-placement="top">
                                    <path d="M64.03 239.1c0 49.59 21.38 94.1 56.97 130.7c-12.5 50.39-54.31 95.3-54.81 95.8c-2.187 2.297-2.781 5.703-1.5 8.703c1.312 3 4.125 4.797 7.312 4.797c66.31 0 116-31.8 140.6-51.41c32.72 12.31 69.02 19.41 107.4 19.41c37.39 0 72.78-6.663 104.8-18.36L82.93 161.7C70.81 185.9 64.03 212.3 64.03 239.1zM630.8 469.1l-118.1-92.59C551.1 340 576 292.4 576 240c0-114.9-114.6-207.1-255.1-207.1c-67.74 0-129.1 21.55-174.9 56.47L38.81 5.117C28.21-3.154 13.16-1.096 5.115 9.19C-3.072 19.63-1.249 34.72 9.188 42.89l591.1 463.1c10.5 8.203 25.57 6.333 33.7-4.073C643.1 492.4 641.2 477.3 630.8 469.1z" />
                                </svg>
                            <?php elseif ($res[$i]['mute_type'] == '2') : ?> <!-- Silence -->
                                <svg viewBox="0 0 512 512" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_comms', '_Type_Chat_Mic') ?>" data-tippy-placement="top">
                                    <path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256z" />
                                </svg>
                            <?php endif; ?>
                        </span>
                        <span class="comms_banned_user" onclick="location.href= '<?= $General->arr_general['site'] ?>profiles/<?= con_steam32to64($res[$i]['steamid64']) ?>/?search=1'"><?= action_text_clear(action_text_trim($res[$i]['username'], 13)) ?></span>
                        <span class="comms_admin comms_1" onclick="location.href = '<?php if($res[$i]['admin_steamid'] != 'Console'): echo $General->arr_general['site'] ?>profiles/<?php print $General->arr_general['only_steam_64'] === 1 ? con_steam32to64($res[$i]['admin_steamid']) : $res[$i]['admin_steamid'] ?>/?search=1'<?php endif; ?>'">
                            <?php 
                                if($res[$i]["admin_username"] != "Console"){
                                    echo '<svg viewBox="0 0 576 512"><path d="M489.7 82.79C511.7 92.12 528.2 113.8 528 139.1C527.5 239.2 486.7 420.7 314.4 503.2C297.7 511.1 278.3 511.1 261.6 503.2C89.25 420.7 48.49 239.2 47.1 139.1C47.87 113.8 64.32 92.12 86.3 82.79L274.7 2.913C278.8 1.008 283.4-.0081 288-.0078C292.7-.0081 297.2 1.008 301.4 2.913L489.7 82.79zM122.1 224H288V66.77L112 141.4C112.3 165.5 115.2 193.1 122.1 224zM453.1 224H288V444.8C388.5 396.2 435.5 304.5 453.1 224V224z" /></svg>';
                                } else {
                                    echo '<i class="fa-solid fa-terminal"></i>';
                                }
                            ?>
                            <?= action_text_clear(action_text_trim($res[$i]['admin_username'], 13)) ?>
                        </span>
                        <span class="comms_reason"><?= $res[$i]['reason'] ?></span>
                        <span>
                            <?php
                                if ($res[$i]['end_mute_time'] == 0){ 
                                    echo '<div class="color-red">' . $Translate->get_translate_phrase('_Forever') . '</div>'; 
                                } else { 
                                    echo '<div class="color-gray">'. $Modules->action_time_exchange($res[$i]['end_mute_time'] - $res[$i]['start_mute_time']) ."</div>";
                                }
                            ?>
                        </span>
                        <span>
                            <?php
							    if(!empty($res[$i]['unmute_reason']) && (($res[$i]['end_mute_time'] != 0 && time() < ($res[$i]['end_mute_time'] - $res[$i]['start_mute_time']) + $res[$i]['end_mute_time']) || ($res[$i]['end_mute_time'] == 0))){
							    	echo '<div data-tippy-placement="bottom" data-tippy-content="By: '. $res[$i]["admin_unlocked_username"] .'<br/>Reason: '. $res[$i]['unmute_reason'] .'" class="color-blue" style="color: var(--ct-color);">'. $Translate->get_translate_module_phrase('module_page_comms', '_Unmute') .'</div>'; 
                                } elseif ($res[$i]['end_mute_time'] == 0){ 
							    	echo '<div class="color-red">' . $Translate->get_translate_module_phrase('module_page_profiles', '_Never') . '</div>';
							    } else { 
							    	if ($res[$i]['mute_active'] == 0 || ($res[$i]['end_mute_time'] - time()) <= 0){ 
							    		echo '<div class="color-green"><strike>'. $Translate->get_translate_module_phrase('module_page_comms', '_MuteExpired') .'</strike></div>'; 
							    	} else { 
							    		echo '<div class="color-gray">'. $Modules->action_time_exchange($res[$i]['end_mute_time'] - time()) ."</div>";
							    	} 
							    }
							?>
                        </span>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
        <?php if ($page_max != 1) : ?>
            <div class="pagination">
                <?php if ($page_num != 1) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_num != 1) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_TotheBegin') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 448 512">
                            <path d="M77.25 256l169.4-169.4c12.5-12.5 12.5-32.75 0-45.25s-32.75-12.5-45.25 0l-192 192c-12.5 12.5-12.5 32.75 0 45.25l192 192C207.6 476.9 215.8 480 224 480s16.38-3.125 22.62-9.375c12.5-12.5 12.5-32.75 0-45.25L77.25 256zM269.3 256l169.4-169.4c12.5-12.5 12.5-32.75 0-45.25s-32.75-12.5-45.25 0l-192 192c-12.5 12.5-12.5 32.75 0 45.25l192 192C399.6 476.9 407.8 480 416 480s16.38-3.125 22.62-9.375c12.5-12.5 12.5-32.75 0-45.25L269.3 256z" />
                        </svg>
                    </a>
                <?php } ?>
                <?php if ($page_num != 1) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_num - 1) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_Back') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 384 512">
                            <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                        </svg>
                    </a>
                <?php } ?>
                <a href="<?= set_url_section(get_url(2), 'num', $page_num) ?>" class="button_pagination current active"><?= $page_num ?></a>
                <?php for ($v = $page_num; $v < min($page_num + 3, $page_max); $v++) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $v + 1) ?>" class="button_pagination current "><?= $v + 1 ?></a>
                <?php } ?>
                <?php if ($page_num != $page_max) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_num + 1) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_Forward') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 384 512">
                            <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                        </svg>
                    </a>
                <?php } ?>
                <?php if ($page_num = $page_max) { ?>
                    <a href="<?= set_url_section(get_url(2), 'num', $page_max) ?>" class="button_pagination current " data-tippy-content="<?= $Translate->get_translate_phrase('_IntheEnd') ?>" data-tippy-placement="bottom">
                        <svg viewBox="0 0 448 512">
                            <path d="M246.6 233.4l-192-192c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-169.4 169.4c-12.5 12.5-12.5 32.75 0 45.25C15.63 476.9 23.81 480 32 480s16.38-3.125 22.62-9.375l192-192C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-192-192c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-169.4 169.4c-12.5 12.5-12.5 32.75 0 45.25C207.6 476.9 215.8 480 224 480s16.38-3.125 22.62-9.375l192-192C451.1 266.1 451.1 245.9 438.6 233.4z" />
                        </svg>
                    </a>
                <?php } ?>
            </div>
        <?php endif; ?>
    </div>
</div>