<div class="row">
	<div class="col-md-12 profile_gap">
		<div class="profile_block_titles">
			<div class="profile_block_content_title">
				<svg viewBox="0 0 576 512">
					<path d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z" />
				</svg>
				<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Demos'); ?>
			</div>
		</div>
		<div class="profile_block_content_demo">
			<div class="profile_block_stats">
				<?php $maps_names = empty($Player->maps) ? [] : array_keys($Player->maps); ?>
				<div class="profile_block_scroll scroll">
					<?php if (!empty($autodemo)) : ?>
						<div class="profile_friends_wrap">
							<?php for ($i = 0; $i < sizeof($autodemo); $i++) : $map = explode("/", $autodemo[$i]['map']); ?>
								<div onclick="window.open('<?= $General->arr_general['site'] ?>autodemo/dem/<?= $autodemo[$i]['match_id'] ?>');" class="profile_demo_card">
									<img class="profile_demo_map" src="<?= $General->arr_general['site'] ?>storage/cache/img/maps/730/<?= end($map) ?>.jpg" alt="" title="">
									<div class="profile_demo_content">
										<div class="profile_demo_info">
											<div class="profile_demo_title_map"><img class="profile_demo_pin_size_image" src="<?= $General->arr_general['site'] ?>/storage/cache/img/pins/maps/_<?= $maps_names[0]; ?>.png" alt="" title=""><?= end($map) ?></div>
											<div class="profile_demo_score">
												<img class="profile_demo_t_img" src="<?= $General->arr_general['site'] ?>app/modules/module_page_autodemo/assets/img/t.png" alt="" title="">
												<div class="profile_demo_t_score"><?= $autodemo[$i]['score_t'] ?></div> : <div class="profile_demo_ct_score"><?= $autodemo[$i]['score_ct'] ?></div>
												<img class="profile_demo_ct_img" src="<?= $General->arr_general['site'] ?>app/modules/module_page_autodemo/assets/img/ct.png" alt="" title="">
											</div>
											<div class="profile_demo_date"><?= date("d.m.Y H:i", $autodemo[$i]['time']) ?></div>
										</div>
									</div>
									<div class="profile_demo_eye">
										<svg viewBox="0 0 512 512">
											<path d="M240 216c-30.88 0-56 25.12-56 56c0 30.88 25.12 56 56 56c30.88 0 56-25.12 56-56C296 241.1 270.9 216 240 216zM464 96h-192l-64-64h-160C21.5 32 0 53.5 0 80v352C0 458.5 21.5 480 48 480h416c26.5 0 48-21.5 48-48v-288C512 117.5 490.5 96 464 96zM376.1 408.1C372.3 413.7 366.2 416 360 416s-12.28-2.344-16.97-7.031l-48.67-48.67C278.5 370.1 259.1 376 240 376c-57.44 0-104-46.56-104-104S182.6 168 240 168s104 46.56 104 104c0 20-5.922 38.5-15.71 54.36l48.67 48.67C386.3 384.4 386.3 399.6 376.1 408.1z" />
										</svg>
										<div class="profile_demo_eye_text"><?= $Translate->get_translate_module_phrase('module_page_profiles', '_GoToDemo'); ?></div>
									</div>
								</div>
							<?php endfor; ?>
						</div>
					<?php else : ?>
						<div class="no_punishment_block">
							<svg viewBox="0 0 640 512">
								<path d="M75.23 33.4L320 63.1L564.8 33.4C571.5 32.56 578 36.06 581.1 42.12L622.8 125.5C631.7 143.4 622.2 165.1 602.9 170.6L439.6 217.3C425.7 221.2 410.8 215.4 403.4 202.1L320 63.1L236.6 202.1C229.2 215.4 214.3 221.2 200.4 217.3L37.07 170.6C17.81 165.1 8.283 143.4 17.24 125.5L58.94 42.12C61.97 36.06 68.5 32.56 75.23 33.4H75.23zM321.1 128L375.9 219.4C390.8 244.2 420.5 255.1 448.4 248L576 211.6V378.5C576 400.5 561 419.7 539.6 425.1L335.5 476.1C325.3 478.7 314.7 478.7 304.5 476.1L100.4 425.1C78.99 419.7 64 400.5 64 378.5V211.6L191.6 248C219.5 255.1 249.2 244.2 264.1 219.4L318.9 128H321.1z" />
							</svg>
							<div class="no_punishment_text"><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Demoempty'); ?></div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>