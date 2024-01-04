<script>
	var info = <?= json_encode(array("name" => $Player->get_name(), "lastconnect" => $Player->get_lastconnect())) ?>;
	var faceit = <?= json_encode($Player->get_steam_64()) ?>;
</script>
<div class="row pad_5">
	<div class="col-md-12">
		<div class="servers__buttons_wrapper">
			<div class="profile_servers_list" onChange="window.location.href=this.value">
				<?php for ($b = 0, $_c = sizeof($Player->found); $b < $_c; $b++) {
					if (!empty($Player->found_fix[$b])) { ?>
						<a class="profile__list_button <?php if (($Player->found_fix[$b]['server_group']) == ($Player->found[$Player->server_group]['server_group'])) {
															echo 'profile__list_button_active';
														} ?>" href="<?= $General->arr_general['site'] ?>profiles/<?= con_steam32to64($Player->get_steam_32()) ?>/<?= $Player->found_fix[$b]['server_group'] ?>"><?= $Player->found_fix[$b]['name_servers'] ?></a>
				<?php }
				} ?>
			</div>
		</div>
	</div>
	<div class="profile_head">
		<div class="profile_user_middle_block">
			<div class="profile_head_user_stats">
				<div class="profile_user_rank_block">
					<span class="rank_translate_style">
						<!-- <svg viewBox="0 0 512 512">
							<path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
						</svg> -->
						<?= $Translate->get_translate_phrase($Player->get_rank(), 'ranks_' . $Player->found[$Player->server_group]['ranks_pack']) ?>
					</span>
					<img class="profile_head_user_rank" src="https:<?= $General->arr_general['site'] ?>storage/cache/img/ranks/<?= $Player->found[$Player->server_group]['ranks_pack'] . '/' . $Player->get_rank() ?>.png" alt="" title="" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Rank'); ?>" data-tippy-placement="top">
				</div>
				<!-- <div class="profile_xp_bar">
					<div class="profile_progress_box">
						<div class="profile_progress_block">
							<div class="profile_progress_bar">
								<div class="profile_progress_bg" style="width: <?= $Player->xpbar['percent'] ?>%;"></div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- <div class="profile_xp_bar_info">
					<div class="profile_user_progress_value_text">
						<svg viewBox="0 0 576 512">
							<path d="M0 176c0-44.2 35.8-80 80-80H464c44.2 0 80 35.8 80 80v16c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32v16c0 44.2-35.8 80-80 80H80c-44.2 0-80-35.8-80-80V176zm80-16c-8.8 0-16 7.2-16 16V336c0 8.8 7.2 16 16 16H464c8.8 0 16-7.2 16-16V176c0-8.8-7.2-16-16-16H80zm272 32V320H96V192H352z" />
						</svg>
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_progress'); ?>
					</div>
					<div class="profile_user_progress_value">
						<div class="profile_user_value"><?= $Player->get_value() ?></div> / <div class="profile_user_max_xp"><?= $Player->xpbar['next'] ?> XP</div>
					</div>
				</div> -->
			</div>
			<div class="profile_head_user_info">
				<div class="profile_user_badges">
					<div class="role_profile">
						<?php if (empty($Player->get_db_Vips()) && (empty($SBAdmins))) : ?>
							<div class="profile_new_player">
								<svg viewBox="0 0 448 512">
									<path d="M370.7 96.1C346.1 39.5 289.7 0 224 0S101.9 39.5 77.3 96.1C60.9 97.5 48 111.2 48 128v64c0 16.8 12.9 30.5 29.3 31.9C101.9 280.5 158.3 320 224 320s122.1-39.5 146.7-96.1c16.4-1.4 29.3-15.1 29.3-31.9V128c0-16.8-12.9-30.5-29.3-31.9zM336 144v16c0 53-43 96-96 96H208c-53 0-96-43-96-96V144c0-26.5 21.5-48 48-48H288c26.5 0 48 21.5 48 48zM189.3 162.7l-6-21.2c-.9-3.3-3.9-5.5-7.3-5.5s-6.4 2.2-7.3 5.5l-6 21.2-21.2 6c-3.3 .9-5.5 3.9-5.5 7.3s2.2 6.4 5.5 7.3l21.2 6 6 21.2c.9 3.3 3.9 5.5 7.3 5.5s6.4-2.2 7.3-5.5l6-21.2 21.2-6c3.3-.9 5.5-3.9 5.5-7.3s-2.2-6.4-5.5-7.3l-21.2-6zM112.7 316.5C46.7 342.6 0 407 0 482.3C0 498.7 13.3 512 29.7 512H128V448c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64l98.3 0c16.4 0 29.7-13.3 29.7-29.7c0-75.3-46.7-139.7-112.7-165.8C303.9 338.8 265.5 352 224 352s-79.9-13.2-111.3-35.5zM176 448c-8.8 0-16 7.2-16 16v48h32V464c0-8.8-7.2-16-16-16zm96 32c8.8 0 16-7.2 16-16s-7.2-16-16-16s-16 7.2-16 16s7.2 16 16 16z" />
								</svg>
								<?= $Translate->get_translate_module_phrase('module_page_profiles', '_player'); ?>
							</div>
						<?php endif; ?>
						<?php if (!empty($SBAdmins) && (in_array(($SBSid['sid']), (explode(',', $SBAdmins['srv_id']))))) : ?>
							<div class="profile_admin_status" data-tippy-content="<?= $SBAdmins['srv_group'] ?>" data-tippy-placement="top">
								<svg viewBox="0 0 512 512">
									<path d="M466.5 83.71l-192-80c-4.875-2.031-13.16-3.703-18.44-3.703c-5.312 0-13.55 1.672-18.46 3.703L45.61 83.71C27.7 91.1 16 108.6 16 127.1C16 385.2 205.2 512 255.9 512C307.1 512 496 383.8 496 127.1C496 108.6 484.3 91.1 466.5 83.71zM352 200c0 5.531-1.901 11.09-5.781 15.62l-96 112C243.5 335.5 234.6 335.1 232 335.1c-6.344 0-12.47-2.531-16.97-7.031l-48-48C162.3 276.3 160 270.1 160 263.1c0-12.79 10.3-24 24-24c6.141 0 12.28 2.344 16.97 7.031l29.69 29.69l79.13-92.34c4.759-5.532 11.48-8.362 18.24-8.362C346.4 176 352 192.6 352 200z" />
								</svg>
								<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Admin_permission'); ?>

							</div>
						<?php endif; ?>
						<?php if ($Player->get_db_Vips()) : ?>
							<div class="profile_vip_status" data-tippy-content="<?= $Vips['group'] ?>" data-tippy-placement="top">
								<svg viewBox="0 0 512 512">
									<path d="M259.7 86l49.66 20.63l20.62 49.67c1.125 2.375 3.498 3.707 5.998 3.707c2.5 0 4.876-1.332 6.001-3.707l20.62-49.67l49.62-20.63c2.375-1.125 3.748-3.501 3.748-6.002s-1.373-4.874-3.748-5.999L362.6 53.38l-20.62-49.63C340.9 1.375 338.5 0 336 0c-2.5 0-4.872 1.375-5.997 3.75l-20.62 49.63l-49.66 20.63c-2.375 1.125-3.712 3.499-3.712 5.999S257.3 84.88 259.7 86zM364.2 267.2l-104.8-15.28L212.6 156.7c-8.375-17-32.72-17.13-41.22 0L124.5 251.1L19.71 267.2C.8322 269.1-6.742 293.2 7.007 306.5l75.87 74l-17.1 104.6c-3.125 18.88 16.7 33.05 33.32 24.18l93.79-49.38l93.74 49.38c7.75 4.125 17.13 3.386 24.25-1.739c6.1-5.125 10.62-13.91 9.119-22.41L301.2 380.5l75.92-74C390.7 293.3 383.1 269.1 364.2 267.2zM509 219.3l-39.62-16.63l-16.62-39.63c-.875-1.875-2.751-3.003-4.751-3.003s-3.874 1.128-4.749 3.003l-16.62 39.63L387 219.3c-1.875 .8751-3.002 2.746-3.002 4.746c0 2 1.127 3.879 3.002 4.754l39.62 16.63l16.62 39.63c.875 1.875 2.749 2.995 4.749 2.995s3.876-1.12 4.751-2.995l16.62-39.63l39.62-16.63C510.9 227.9 512 226 512 224C512 222 510.9 220.1 509 219.3z" />
								</svg>
								<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Vip_permission'); ?>
							</div>
						<?php endif; ?>
						<?php if ($Player->get_top_position() < 4) : ?>
							<div class="profile_top_position <?= 'topplayer-' . $Player->get_top_position(); ?>" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Top_players'); ?>" data-tippy-placement="top">
								<svg viewBox="0 0 576 512">
									<path d="M309 106c11.4-7 19-19.7 19-34c0-22.1-17.9-40-40-40s-40 17.9-40 40c0 14.4 7.6 27 19 34L209.7 220.6c-9.1 18.2-32.7 23.4-48.6 10.7L72 160c5-6.7 8-15 8-24c0-22.1-17.9-40-40-40S0 113.9 0 136s17.9 40 40 40c.2 0 .5 0 .7 0L86.4 427.4c5.5 30.4 32 52.6 63 52.6H426.6c30.9 0 57.4-22.1 63-52.6L535.3 176c.2 0 .5 0 .7 0c22.1 0 40-17.9 40-40s-17.9-40-40-40s-40 17.9-40 40c0 9 3 17.3 8 24l-89.1 71.3c-15.9 12.7-39.5 7.5-48.6-10.7L309 106z" />
								</svg>
								TOP <?= $Player->get_top_position() ?>
							</div>
						<?php endif; ?>
						<?php if (!empty($Player->Db->db_data['SourceBans'])) :
							for ($d = 0; $d < $General->server_list_count; $d++) :
								if (!empty($General->server_list[$d]['server_stats']) && $General->server_list[$d]['server_stats'] == sprintf('%s;%d;%d;%s', $Player->found[$Player->server_group]['DB_mod'], $Player->found[$Player->server_group]['USER_ID'], $Player->found[$Player->server_group]['DB'], $Player->found[$Player->server_group]['Table'])) :
									$stats = explode(";", $General->server_list[$d]['server_sb']);
									if (empty($Settings['bans_for_all_servers'])) :
										$ban_check = $Db->query('SourceBans', (int) $stats[1], (int) $stats[2], "SELECT `created`, `authid`, `ends`, `length`, `RemovedOn`, `RemoveType` FROM `" . $stats[3] . "bans` WHERE `authid` LIKE '%" . $Player->get_steam_32_short() . "%' AND `" . $stats[3] . "bans`.`sid` = '" . $SBSid['sid'] . "' order by `created` desc limit 1");
									else :
										$ban_check = $Db->query('SourceBans', (int) $stats[1], (int) $stats[2], "SELECT `created`, `authid`, `ends`, `length`, `RemovedOn`, `RemoveType` FROM `" . $stats[3] . "bans` WHERE `authid` LIKE '%" . $Player->get_steam_32_short() . "%' order by `created` desc limit 1");
									endif;
									!empty($ban_check) && ((empty($ban_check['length']) || $ban_check['ends'] >= time()) && empty($ban_check['RemovedOn']) && empty($ban_check['RemoveType'])) && (print '<div class="profile_player_banned"><svg viewBox="0 0 512 512"><path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256z" /></svg>Забанен</div>');
									break;
								endif;
							endfor;
						endif; ?>
					</div>
				</div>
				<div class="profile_user_balance">
					<div class="profile_user_balance_phrase">
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_balance'); ?>:
					</div>
					<?php if (!empty($Player->Db->db_data['lk'])) : ?>
						<div class="profile_user_balance_count">
							<?php if (isset($_SESSION["steamid"]) && ($_SESSION["user_admin"] || ($Player->get_steam_32() == $_SESSION['steamid32']))) : ?>
								<?= $Player->get_balance() . $Translate->get_translate_module_phrase('module_page_profiles', '_AmountCourse'); ?>
							<?php else : ?>
								Hidden
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="profile_user_last_connect">
					<a id="connect_link">
						<span id="online_status">
							<svg width="12px" height="12px" viewBox="0 0 512 512">
								<path d="M75 75L41 41C25.9 25.9 0 36.6 0 57.9V168c0 13.3 10.7 24 24 24H134.1c21.4 0 32.1-25.9 17-41l-30.8-30.8C155 85.5 203 64 256 64c106 0 192 86 192 192s-86 192-192 192c-40.8 0-78.6-12.7-109.7-34.4c-14.5-10.1-34.4-6.6-44.6 7.9s-6.6 34.4 7.9 44.6C151.2 495 201.7 512 256 512c141.4 0 256-114.6 256-256S397.4 0 256 0C185.3 0 121.3 28.7 75 75zm181 53c-13.3 0-24 10.7-24 24V256c0 6.4 2.5 12.5 7 17l72 72c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-65-65V152c0-13.3-10.7-24-24-24z" />
							</svg>
							<?= $Player->get_lastconnect() ?>
						</span>
					</a>
				</div>
			</div>
		</div>
		<div class="profile_user_nickname">
			<?= action_text_clear(action_text_trim($Player->get_name(), 20)) ?>
		</div>
		<div class="profile_user_avatar">
			<?php $General->get_js_relevance_avatar($Player->get_steam_64(), 1) ?>
			<img class="" src="<?= $General->getAvatar($Player->get_steam_64(), 1) ?>" id="<?php $General->arr_general['avatars'] == 1 && print $Player->get_steam_64() ?>" alt="" title="">
		</div>
		<?php if (isset($_SESSION["steamid"]) && ($Player->get_steam_32() == $_SESSION['steamid32'])) : ?>
			<a href="<?= $General->arr_general['site'] . 'profiles/' . $profile . '/settings/' . $server_page ?>/">
				<div class="profile_user_settings" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Settings'); ?>" data-tippy-placement="left">
					<svg viewBox="0 0 512 512">
						<path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336c44.2 0 80-35.8 80-80s-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80z" />
					</svg>
				</div>
			</a>
		<?php endif; ?>
		<div class="profile_socials">
			<a class="social_button_faceit" id="faceit_url" href="" target="_blank" style="display: none;">
				<svg viewBox="0 0 24 24">
					<path fill="#FA5E00" d="M24 2.213c0-.1-.1-.2-.1-.2-.1 0-.1 0-.2.1-1.999 3.096-4.098 6.191-6.098 9.387H.209c-.2 0-.3.3-.1.399 7.197 2.696 17.693 6.79 23.491 9.087.2.1.4-.1.4-.2V2.213z" />
				</svg>
			</a>
			<a class="social_button_steam" href="//steamcommunity.com/profiles/<?= $Player->get_steam_64() ?>/" target="_blank">
				<svg viewBox="0 0 496 512">
					<path d="M496 256c0 137-111.2 248-248.4 248-113.8 0-209.6-76.3-239-180.4l95.2 39.3c6.4 32.1 34.9 56.4 68.9 56.4 39.2 0 71.9-32.4 70.2-73.5l84.5-60.2c52.1 1.3 95.8-40.9 95.8-93.5 0-51.6-42-93.5-93.7-93.5s-93.7 42-93.7 93.5v1.2L176.6 279c-15.5-.9-30.7 3.4-43.5 12.1L0 236.1C10.2 108.4 117.1 8 247.6 8 384.8 8 496 119 496 256zM155.7 384.3l-30.5-12.6a52.79 52.79 0 0 0 27.2 25.8c26.9 11.2 57.8-1.6 69-28.4 5.4-13 5.5-27.3.1-40.3-5.4-13-15.5-23.2-28.5-28.6-12.9-5.4-26.7-5.2-38.9-.6l31.5 13c19.8 8.2 29.2 30.9 20.9 50.7-8.3 19.9-31 29.2-50.8 21zm173.8-129.9c-34.4 0-62.4-28-62.4-62.3s28-62.3 62.4-62.3 62.4 28 62.4 62.3-27.9 62.3-62.4 62.3zm.1-15.6c25.9 0 46.9-21 46.9-46.8 0-25.9-21-46.8-46.9-46.8s-46.9 21-46.9 46.8c.1 25.8 21.1 46.8 46.9 46.8z" />
				</svg>
			</a>
			<?php if (!empty($Info['vk'])) : ?>
				<a class="social_button_vk" href="//vk.com/<?= $Info['vk'] ?>" target="_blank">
					<svg viewBox="0 0 448 512">
						<path d="M31.4907 63.4907C0 94.9813 0 145.671 0 247.04V264.96C0 366.329 0 417.019 31.4907 448.509C62.9813 480 113.671 480 215.04 480H232.96C334.329 480 385.019 480 416.509 448.509C448 417.019 448 366.329 448 264.96V247.04C448 145.671 448 94.9813 416.509 63.4907C385.019 32 334.329 32 232.96 32H215.04C113.671 32 62.9813 32 31.4907 63.4907ZM75.6 168.267H126.747C128.427 253.76 166.133 289.973 196 297.44V168.267H244.16V242C273.653 238.827 304.64 205.227 315.093 168.267H363.253C359.313 187.435 351.46 205.583 340.186 221.579C328.913 237.574 314.461 251.071 297.733 261.227C316.41 270.499 332.907 283.63 346.132 299.751C359.357 315.873 369.01 334.618 374.453 354.747H321.44C316.555 337.262 306.614 321.61 292.865 309.754C279.117 297.899 262.173 290.368 244.16 288.107V354.747H238.373C136.267 354.747 78.0267 284.747 75.6 168.267Z" />
					</svg>
				</a>
			<?php endif; ?>
			<?php if (!empty($Info['discord'])) : ?>
				<div data-clipboard-text="<?= $Info['discord'] ?>" class="social_button_discord copybtn">
					<svg viewBox="0 0 640 512">
						<path d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z" />
					</svg>
				</div>
			<?php endif; ?>
		</div>
		<div class="profile_head_line">
			<div class="profile_head_menu_left scroll">
				<a class="profile_head_menu_button <?php if ($page == 'info') : ?>profile_head_menu_button_active<?php endif; ?>" href="<?= $General->arr_general['site'] . 'profiles/' . $profile . '/info/' . $server_page ?>/">
					<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Info'); ?>
				</a>
				<a class="profile_head_menu_button <?php if ($page == 'stats') : ?>profile_head_menu_button_active<?php endif; ?>" href="<?= $General->arr_general['site'] . 'profiles/' . $profile . '/stats/' . $server_page ?>/">
					<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Stats'); ?>
				</a>
				<?php if ((empty($SBAdmins['adminsauthid']) != true) && (in_array(($SBSid['sid']), (explode(',', $SBAdmins['srv_id']))))) : ?>
					<a class="profile_head_menu_button <?php if ($page == 'admin') : ?>profile_head_menu_button_active<?php endif; ?>" href="<?= $General->arr_general['site'] . 'profiles/' . $profile . '/admin/' . $server_page ?>/">
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Admin'); ?>
					</a>
				<?php endif; ?>
				<a class="profile_head_menu_button <?php if ($page == 'block') : ?>profile_head_menu_button_active<?php endif; ?>" href="<?= $General->arr_general['site'] . 'profiles/' . $profile . '/block/' . $server_page ?>/">
					<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Block'); ?>
				</a>
				<a class="profile_head_menu_button <?php if ($page == 'friends') : ?>profile_head_menu_button_active<?php endif; ?>" href="<?= $General->arr_general['site'] . 'profiles/' . $profile . '/friends/' . $server_page ?>/">
					<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Friends'); ?>
				</a>
				<?php if (file_exists(MODULES . 'module_page_autodemo/description.json')) : ?>
					<a class="profile_head_menu_button <?php if ($page == 'autodemo') : ?>profile_head_menu_button_active<?php endif; ?>" href="<?= $General->arr_general['site'] . 'profiles/' . $profile . '/autodemo/' . $server_page ?>/">
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Demos'); ?>
					</a>
				<?php endif; ?>
				<?php if (isset($_SESSION["steamid"]) && (($Player->get_steam_32() == $_SESSION['steamid32']) || isset($_SESSION['user_admin']))) : ?>
					<a class="profile_head_menu_button <?php if ($page == 'transaction') : ?>profile_head_menu_button_active<?php endif; ?>" href="<?= $General->arr_general['site'] . 'profiles/' . $profile . '/transaction/' . $server_page ?>/">
						<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Transaction'); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
		<div class="profile_back" <?php if ($back['video'] == 0 || !isset($back['video'])) : ?><?php empty($back['url']) ? '' : print print 'style="background: url(' . $General->arr_general['site'] . $back['url'] . ') no-repeat center;"' ?><?php endif; ?>>
			<?php if ($back['video'] == 1) : ?>
				<video playsinline="" autoplay="" muted="" loop="">
					<source src="<?php echo $General->arr_general['site'] . $back['url'] ?>" type="video/webm">
				</video>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php require_once MODULES . 'module_page_profiles/includes/' . $page . '.php'; ?>