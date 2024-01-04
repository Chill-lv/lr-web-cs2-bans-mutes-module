<div class="row">
	<div class="col-md-12 profile_gap">
		<div class="profile_block_titles">
			<div class="profile_block_content_title col-md-6 center_title">
				<svg viewBox="0 0 512 512">
					<path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256z" />
				</svg>
				<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Bans'); ?> (<?= count($SBBans) ?>)
			</div>
			<div class="profile_block_content_title col-md-6 center_title">
				<svg viewBox="0 0 640 512">
					<path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L472.1 344.7c15.2-26 23.9-56.3 23.9-88.7V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 21.2-5.1 41.1-14.2 58.7L416 300.8V96c0-53-43-96-96-96s-96 43-96 96v54.3L38.8 5.1zM344 430.4c20.4-2.8 39.7-9.1 57.3-18.2l-43.1-33.9C346.1 382 333.3 384 320 384c-70.7 0-128-57.3-128-128v-8.7L144.7 210c-.5 1.9-.7 3.9-.7 6v40c0 89.1 66.2 162.7 152 174.4V464H248c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H344V430.4z" />
				</svg>
				<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Comms'); ?> (<?= count($SBComms) ?>)
			</div>
		</div>
		<div class="profile_block_content">
			<div class="profile_block_about_player max_height fix_gap">
				<?php if ($SBBans != true) : ?>
					<div class="no_punishment_block">
						<svg viewBox="0 0 640 512">
							<path d="M448.2 34.34C446.9 54.04 453.7 74.18 468.7 89.25L524.2 145.1C533.4 154.3 545.3 159.3 557.4 159.9C569.4 189.6 576 222 576 256C576 293.4 567.1 329 553.5 361.1C526.5 345.8 491.6 349.8 468.7 372.9C442.8 398.9 441.2 439.9 463.8 467.8C422.8 495.7 373.3 512 320 512C258.7 512 202.4 490.4 158.3 454.4L171.3 441.3C198.9 413.6 198.9 368.7 171.3 340.9C146.5 315.1 107.7 313.4 80.04 333.3C78.34 332 76.59 330.9 74.81 329.8C67.78 306.5 64 281.7 64 256C64 114.6 178.6 .0006 320 .0006C366.7 .0006 410.5 12.5 448.2 34.34V34.34zM203.9 346.5C226.2 372.1 264.9 400 320 400C375.1 400 413.8 372.1 436.1 346.5C441.9 339.8 441.2 329.7 434.5 323.9C427.8 318.1 417.7 318.8 411.9 325.5C393.1 346.2 363.4 368 320 368C276.6 368 246 346.2 228.1 325.5C222.3 318.8 212.2 318.1 205.5 323.9C198.8 329.7 198.1 339.8 203.9 346.5H203.9zM204.8 233.6C222.4 210.1 257.6 210.1 275.2 233.6C280.5 240.7 290.5 242.1 297.6 236.8C304.7 231.5 306.1 221.5 300.8 214.4C270.4 173.9 209.6 173.9 179.2 214.4C173.9 221.5 175.3 231.5 182.4 236.8C189.5 242.1 199.5 240.7 204.8 233.6zM457.6 236.8C464.7 231.5 466.1 221.5 460.8 214.4C430.4 173.9 369.6 173.9 339.2 214.4C333.9 221.5 335.3 231.5 342.4 236.8C349.5 242.1 359.5 240.7 364.8 233.6C382.4 210.1 417.6 210.1 435.2 233.6C440.5 240.7 450.5 242.1 457.6 236.8zM573.7 11.5C588.9-3.757 613.5-3.757 628.6 11.5C643.8 26.76 643.8 51.49 628.6 66.75L573.2 122.5C565.9 129.8 554.1 129.8 546.9 122.5L491.4 66.69C476.2 51.43 476.2 26.7 491.4 11.44C506.5-3.814 531.1-3.814 546.3 11.44L560 25.27L573.7 11.5zM628.6 450.7L573.2 506.5C565.9 513.8 554.1 513.8 546.9 506.5L491.4 450.7C476.2 435.4 476.2 410.7 491.4 395.4C506.5 380.2 531.1 380.2 546.3 395.4L560 409.3L573.7 395.5C588.9 380.2 613.5 380.2 628.6 395.5C643.8 410.8 643.8 435.5 628.6 450.7L628.6 450.7zM93.71 363.5C108.9 348.2 133.5 348.2 148.6 363.5C163.8 378.8 163.8 403.5 148.6 418.7L93.2 474.5C85.93 481.8 74.13 481.8 66.86 474.5L11.37 418.7C-3.791 403.4-3.791 378.7 11.37 363.4C26.54 348.2 51.12 348.2 66.29 363.4L80.03 377.3L93.71 363.5z" />
						</svg>
						<div class="no_punishment_text"><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Bans_No_Bans'); ?></div>
					</div>
				<?php else : ?>
					<div class="bans_comms_header bans_header">
						<span class="bans_comms_none"><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Bans_Data'); ?></span>
						<span><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Bans_Reason'); ?></span>
						<span class="bans_comms_none"><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Bans_Admin'); ?></span>
						<span><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Bans_Length'); ?></span>
						<span><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Expiration'); ?></span>
					</div>
					<ul class="bans_comms_list_body bans_comms_list_scroll no-scrollbar bans_list">
						<?php for ($i = 0, $c_c = min(sizeof($SBBans), 10); $i < $c_c; $i++) { ?>
							<li class="hover_lbam">
								<span class="bans_comms_none"><?= date("d.m.Y", $SBBans[$i]['start_ban_time']) ?></span>
								<span><?= $SBBans[$i]['reason'] ?></span>
								<span class="bans_comms_none"><?= $SBBans[$i]['admin_steamid'] == "Console" ? '<a>'. $SBBans[$i]['admin_username'] .' </a></span>' : '<a href="'. $General->arr_general['site'] .'profiles/'. $SBBans[$i]['admin_steamid'] .'/?search=1">'. $SBBans[$i]['admin_username'] .' </a></span>' ?>
								<span>
									<?php
										if ($SBBans[$i]['end_ban_time'] == 0){ 
											echo '<div class="color-red">' . $Translate->get_translate_phrase('_Forever') . '</div>'; 
										} else { 
											echo '<div class="color-gray">'. $Modules->action_time_exchange($SBBans[$i]['end_ban_time'] - $SBBans[$i]['start_ban_time']) ."</div>";
										}
									?>
								</span>
								<span>
									<?php
										if(!empty($SBBans[$i]['unban_reason']) && (($SBBans[$i]['end_ban_time'] != 0 && time() < ($SBBans[$i]['end_ban_time'] - $SBBans[$i]['start_ban_time']) + $SBBans[$i]['end_ban_time']) || ($SBBans[$i]['end_ban_time'] == 0))){
											echo '<div data-tippy-placement="bottom" data-tippy-content="By: '. $SBBans[$i]["admin_unlocked_username"] .'<br/>Reason: '. $SBBans[$i]['unban_reason'] .'" class="color-blue" style="color: var(--ct-color);">'. $Translate->get_translate_module_phrase('module_page_bans', '_Unban') .'</div>'; 
										} elseif ($SBBans[$i]['end_ban_time'] == 0){ 
											echo '<div class="color-red">' . $Translate->get_translate_module_phrase('module_page_profiles', '_Never') . '</div>';
										} else { 
											if ($SBBans[$i]['ban_active'] == 0 || ($SBBans[$i]['end_ban_time'] - time()) <= 0){ 
												echo '<div class="color-green"><strike>'. $Translate->get_translate_module_phrase('module_page_bans', '_BanExpired') .'</strike></div>'; 
											} else { 
												echo '<div class="color-gray">'. $Modules->action_time_exchange($SBBans[$i]['end_ban_time'] - time()) ."</div>";
											} 
										}
									?>
								</span>
							</li>
						<?php } ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="profile_block_about_player max_height fix_gap">
				<?php if (empty($SBComms)) : ?>
					<div class="no_punishment_block">
						<svg viewBox="0 0 640 512">
							<path d="M448.2 34.34C446.9 54.04 453.7 74.18 468.7 89.25L524.2 145.1C533.4 154.3 545.3 159.3 557.4 159.9C569.4 189.6 576 222 576 256C576 293.4 567.1 329 553.5 361.1C526.5 345.8 491.6 349.8 468.7 372.9C442.8 398.9 441.2 439.9 463.8 467.8C422.8 495.7 373.3 512 320 512C258.7 512 202.4 490.4 158.3 454.4L171.3 441.3C198.9 413.6 198.9 368.7 171.3 340.9C146.5 315.1 107.7 313.4 80.04 333.3C78.34 332 76.59 330.9 74.81 329.8C67.78 306.5 64 281.7 64 256C64 114.6 178.6 .0006 320 .0006C366.7 .0006 410.5 12.5 448.2 34.34V34.34zM203.9 346.5C226.2 372.1 264.9 400 320 400C375.1 400 413.8 372.1 436.1 346.5C441.9 339.8 441.2 329.7 434.5 323.9C427.8 318.1 417.7 318.8 411.9 325.5C393.1 346.2 363.4 368 320 368C276.6 368 246 346.2 228.1 325.5C222.3 318.8 212.2 318.1 205.5 323.9C198.8 329.7 198.1 339.8 203.9 346.5H203.9zM204.8 233.6C222.4 210.1 257.6 210.1 275.2 233.6C280.5 240.7 290.5 242.1 297.6 236.8C304.7 231.5 306.1 221.5 300.8 214.4C270.4 173.9 209.6 173.9 179.2 214.4C173.9 221.5 175.3 231.5 182.4 236.8C189.5 242.1 199.5 240.7 204.8 233.6zM457.6 236.8C464.7 231.5 466.1 221.5 460.8 214.4C430.4 173.9 369.6 173.9 339.2 214.4C333.9 221.5 335.3 231.5 342.4 236.8C349.5 242.1 359.5 240.7 364.8 233.6C382.4 210.1 417.6 210.1 435.2 233.6C440.5 240.7 450.5 242.1 457.6 236.8zM573.7 11.5C588.9-3.757 613.5-3.757 628.6 11.5C643.8 26.76 643.8 51.49 628.6 66.75L573.2 122.5C565.9 129.8 554.1 129.8 546.9 122.5L491.4 66.69C476.2 51.43 476.2 26.7 491.4 11.44C506.5-3.814 531.1-3.814 546.3 11.44L560 25.27L573.7 11.5zM628.6 450.7L573.2 506.5C565.9 513.8 554.1 513.8 546.9 506.5L491.4 450.7C476.2 435.4 476.2 410.7 491.4 395.4C506.5 380.2 531.1 380.2 546.3 395.4L560 409.3L573.7 395.5C588.9 380.2 613.5 380.2 628.6 395.5C643.8 410.8 643.8 435.5 628.6 450.7L628.6 450.7zM93.71 363.5C108.9 348.2 133.5 348.2 148.6 363.5C163.8 378.8 163.8 403.5 148.6 418.7L93.2 474.5C85.93 481.8 74.13 481.8 66.86 474.5L11.37 418.7C-3.791 403.4-3.791 378.7 11.37 363.4C26.54 348.2 51.12 348.2 66.29 363.4L80.03 377.3L93.71 363.5z" />
						</svg>
						<div class="no_punishment_text"><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Comms_No_Mute'); ?></div>
					</div>
				<?php else : ?>
					<!-- 2 -->
					<div class="bans_comms_header">
						<span class=" "><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Comms_Type'); ?></span>
						<span class="bans_comms_none"><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Bans_Data'); ?></span>
						<span><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Bans_Reason'); ?></span>
						<span class="bans_comms_none"><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Bans_Admin'); ?></span>
						<span><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Bans_Length'); ?></span>
						<span><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Expiration'); ?></span>
					</div>
					<ul class="bans_comms_list_body bans_comms_list_scroll no-scrollbar">
						<?php for ($i = 0, $c_c = min(sizeof($SBComms), 10); $i < $c_c; $i++) { ?>
							<li class="hover_lbam">
								<span>
									<?php if ($SBComms[$i]['mute_type'] == '0') : ?> <!-- Mute -->
										<svg viewBox="0 0 640 512" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_comms', '_Type_Mic') ?>" data-tippy-placement="top">
											<path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L472.1 344.7c15.2-26 23.9-56.3 23.9-88.7V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 21.2-5.1 41.1-14.2 58.7L416 300.8V96c0-53-43-96-96-96s-96 43-96 96v54.3L38.8 5.1zM344 430.4c20.4-2.8 39.7-9.1 57.3-18.2l-43.1-33.9C346.1 382 333.3 384 320 384c-70.7 0-128-57.3-128-128v-8.7L144.7 210c-.5 1.9-.7 3.9-.7 6v40c0 89.1 66.2 162.7 152 174.4V464H248c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H344V430.4z" />
										</svg>
									<?php elseif ($SBComms[$i]['mute_type'] == '1') : ?> <!-- Gag -->
										<svg viewBox="0 0 640 512" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_comms', '_Type_Chat') ?>" data-tippy-placement="top">
											<path d="M64.03 239.1c0 49.59 21.38 94.1 56.97 130.7c-12.5 50.39-54.31 95.3-54.81 95.8c-2.187 2.297-2.781 5.703-1.5 8.703c1.312 3 4.125 4.797 7.312 4.797c66.31 0 116-31.8 140.6-51.41c32.72 12.31 69.02 19.41 107.4 19.41c37.39 0 72.78-6.663 104.8-18.36L82.93 161.7C70.81 185.9 64.03 212.3 64.03 239.1zM630.8 469.1l-118.1-92.59C551.1 340 576 292.4 576 240c0-114.9-114.6-207.1-255.1-207.1c-67.74 0-129.1 21.55-174.9 56.47L38.81 5.117C28.21-3.154 13.16-1.096 5.115 9.19C-3.072 19.63-1.249 34.72 9.188 42.89l591.1 463.1c10.5 8.203 25.57 6.333 33.7-4.073C643.1 492.4 641.2 477.3 630.8 469.1z" />
										</svg>
									<?php elseif ($SBComms[$i]['mute_type'] == '2') : ?> <!-- Silence -->
										<svg viewBox="0 0 512 512" data-tippy-content="<?= $Translate->get_translate_module_phrase('module_page_comms', '_Type_Chat_Mic') ?>" data-tippy-placement="top">
											<path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256z" />
										</svg>
									<?php endif; ?>
								</span>
								<span class="bans_comms_none"><?= date("d.m.Y", $SBComms[$i]['start_mute_time']) ?></span>
								<span><?= $SBComms[$i]['reason'] ?></span>
								<span class="bans_comms_none"><?= $SBComms[$i]['admin_steamid'] == "Console" ? '<a>'. $SBComms[$i]['admin_username'] .'</a></span>' : '<a href="'. $General->arr_general['site'] .'profiles/'. $SBComms[$i]['admin_steamid'] .'/?search=1">'. $SBComms[$i]['admin_username'] .' </a></span>' ?>
								<span>
									<?php
										if ($SBComms[$i]['end_mute_time'] == 0){ 
											echo '<div class="color-red">' . $Translate->get_translate_phrase('_Forever') . '</div>'; 
										} else { 
											echo '<div class="color-gray">'. $Modules->action_time_exchange($SBComms[$i]['end_mute_time'] - $SBComms[$i]['start_mute_time']) ."</div>";
										}
									?>
								</span>
								<span>
									<?php
										if(!empty($SBComms[$i]['unmute_reason']) && (($SBComms[$i]['end_mute_time'] != 0 && time() < ($SBComms[$i]['end_mute_time'] - $SBComms[$i]['start_mute_time']) + $SBComms[$i]['end_mute_time']) || ($SBComms[$i]['end_mute_time'] == 0))){
											echo '<div data-tippy-placement="bottom" data-tippy-content="By: '. $SBComms[$i]["admin_unlocked_username"] .'<br/>Reason: '. $SBComms[$i]['unmute_reason'] .'" class="color-blue" style="color: var(--ct-color);">'. $Translate->get_translate_module_phrase('module_page_comms', '_Unmute') .'</div>'; 
										} elseif ($SBComms[$i]['end_mute_time'] == 0){ 
											echo '<div class="color-red">' . $Translate->get_translate_module_phrase('module_page_profiles', '_Never') . '</div>';
										} else { 
											if ($SBComms[$i]['mute_active'] == 0 || ($SBComms[$i]['end_mute_time'] - time()) <= 0){ 
												echo '<div class="color-green"><strike>'. $Translate->get_translate_module_phrase('module_page_comms', '_MuteExpired') .'</strike></div>'; 
											} else { 
												echo '<div class="color-gray">'. $Modules->action_time_exchange($SBComms[$i]['end_mute_time'] - time()) ."</div>";
											} 
										}
									?>
								</span>
							</li>
						<?php } ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>