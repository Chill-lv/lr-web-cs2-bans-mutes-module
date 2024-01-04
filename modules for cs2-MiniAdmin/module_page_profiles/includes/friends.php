<div class="row">
	<div class="col-md-12 profile_gap">
		<div class="profile_block_titles">
			<div class="profile_block_content_title">
				<svg viewBox="0 0 640 512">
					<path d="M352 128c0 70.7-57.3 128-128 128s-128-57.3-128-128S153.3 0 224 0s128 57.3 128 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
				</svg>
				<?= $Translate->get_translate_module_phrase('module_page_profiles', '_FRIENDS_LIST'); ?>
			</div>
		</div>
		<div class="profile_block_content_friends">
			<div class="profile_block_stats">
				<div class="profile_block_scroll scroll">
					<?php if (!empty($friends)) : ?>
						<div class="profile_friends_wrap">
							<?php foreach ($friends['friendslist']['friends'] as $friend) : ?>
								<?php 
									switch ( $Player->found[ $Player->server_group ]['DB_mod'] ) {
										case 'LevelsRanks':
											$checkDB = $Db->query('LevelsRanks', $Player->found[$Player->server_group]['USER_ID'], $Player->found[$Player->server_group]['DB'], "SELECT `name`, `lastconnect` FROM `" . $Player->found[$Player->server_group]['Table'] . "` WHERE `steam` = '" . con_steam64to32($friend['steamid']) . "' AND  `lastconnect` > 0");
										break;
										case 'FPS':
											$checkDB = $Db->query('FPS', 0, 0, "SELECT `fps_players`.`steam_id` AS `steam`, `fps_players`.`nickname` AS `name`, `fps_servers_stats`.`lastconnect` FROM `fps_players`
											INNER JOIN `fps_servers_stats` ON `fps_players`.`account_id` = `fps_servers_stats`.`account_id`
											WHERE `fps_players`.`steam_id` = '{$friend['steamid']}'
											AND `fps_servers_stats`.`server_id` = '{$Player->found[$Player->server_group ]['server_int']}'
											LIMIT 1");
										break;
									}?>
								<?php if (!empty($checkDB)) : ?>
									<div onclick="window.open('<?= $General->arr_general['site'] ?>profiles/<?= $friend['steamid']; ?>/?search=1');" class="profile_friend_block">
										<div class="profile_friend_avatar" href="<?= $General->arr_general['site'] ?>profiles/<?= $friend['steamid']; ?>/?search=1">
											<div class="profile_friend_avatar_profile" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_profiles', '_GoToDemo'); ?>" data-tippy-placement="right">
												<svg viewBox="0 0 576 512">
													<path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm96-96c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zm128-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
												</svg>
											</div>
											<?php $General->get_js_relevance_avatar($friend['steamid'], 1 )?>
											<img id="<?=$friend['steamid']; ?>" src="<?php if ($General->arr_general['avatars'] == 1) {
																							echo $General->getAvatar($friend['steamid'], 1);
																						} elseif ($General->arr_general['avatars'] == 1) {
																							echo 'storage/cache/img/avatars_random/' . rand(1, 30) . '_xs.jpg';
																						} ?>" alt="">
										</div>
										<div class="profile_friend_info">
											<div class="profile_friend_name">
												<span><?= action_text_clear(action_text_trim($checkDB['name'], 15)) ?></span>
											</div>
											<div class="profile_friend_status"><?= date("d.m.Y, H:i", $checkDB['lastconnect']) ?></div>
										</div>
									</div>
								<?php endif; ?>
							<?php endforeach ?>
						</div>
					<?php else : ?>
						<div class="no_punishment_block">
							<svg viewBox="0 0 640 512">
								<path d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z" />
							</svg>
							<div class="no_punishment_text"><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Steam_friends_list_is_empty_or_hidden'); ?></div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>