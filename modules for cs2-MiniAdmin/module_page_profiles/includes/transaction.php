<div class="row">
	<div class="col-md-12 profile_gap">
		<div class="profile_block_titles">
			<div class="profile_block_content_title <?php !empty($web_shop['shop']) ? print "col-md-6" : print "col-md-12" ?> center_title">
				<svg viewBox="0 0 576 512">
					<path d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z" />
				</svg>
				<?= $Translate->get_translate_module_phrase('module_page_profiles', '_DonationList'); ?> <?= number_format($lk[0]['all_cash'] ?? 0, 0, '.', ' ') . ' ' . $Translate->get_translate_module_phrase('module_page_lk_impulse', '_AmountCourse'); ?>
			</div>
			<?php if (!empty($web_shop['shop'])) : ?>
				<div class="profile_block_content_title col-md-6 center_title">
					<svg viewBox="0 0 576 512">
						<path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
					</svg>
					<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Hystory'); ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="profile_block_content">
			<div class="profile_block_about_player max_height">
				<div class="table-responsive table_scroll scroll">
					<table class="table table-hover mb-0 tb_bg">
						<thead>
							<tr>
								<th class="text-center lrweb_table">ID</th>
								<th class="text-center lrweb_table"><?= $Translate->get_translate_module_phrase('module_page_lk_impulse', '_Gateways') ?></th>
								<th class="text-center lrweb_table"><?= $Translate->get_translate_module_phrase('module_page_lk_impulse', '_Amount') ?></th>
								<th class="text-center lrweb_table"><?= $Translate->get_translate_module_phrase('module_page_lk_impulse', '_Promo') ?></th>
								<th class="text-center lrweb_table"><?= $Translate->get_translate_module_phrase('module_page_lk_impulse', '_Date') ?></th>
							</tr>
						</thead>
						<tbody>
							<?php for ($i = 0, $c_c = sizeof($lk); $i < $c_c; $i++) { ?>
								<tr class="pointer">
									<th class="text-center lrweb_table"><?= $lk[$i]['pay_id'] ?></th>
									<th class="text-center lrweb_table"><img class="br_4" src="<?php echo $General->arr_general['site'] ?>app/modules/module_page_lk_impulse/assets/gateways/<?php echo mb_strtolower($lk[$i]['pay_system']) ?>.svg" alt="" title=""></th>
									<th class="text-center lrweb_table"><?= $lk[$i]['pay_summ'] ?></th>
									<th class="text-center lrweb_table">
										<?php if ($lk[$i]['pay_promo'] == ' ' || empty($lk[$i]['pay_promo'])) : ?>
											<svg viewBox="0 0 320 512">
												<path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z" />
											</svg>
										<?php else : ?>
											<?= $lk[$i]['pay_promo'] ?>
										<?php endif; ?>
									</th>
									<th class="text-center lrweb_table"><?= $lk[$i]['pay_data'] ?></th>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<?php if (!empty($web_shop['shop'])) : ?>
				<div class="profile_block_about_player max_height">
					<?php if (!empty($web_shop['array'])) : ?>
						<div class="table-responsive table_scroll scroll">
							<?php if ($web_shop['shop'] != "stwx") : ?>
								<table class="table table-hover mb-0 tb_bg">
									<thead>
										<tr>
											<th class="text-center lrweb_table">Товар</th>
											<th class="text-center lrweb_table">Кол-во</th>
											<?php if ($web_shop['shop'] > 4) : ?>
												<th class="text-center lrweb_table">Стоимость</th>
											<?php endif; ?>
											<?php if ($web_shop['shop'] > 4) : ?>
												<th class="text-center lrweb_table">Промокод</th>
											<?php endif; ?>
											<th class="text-center lrweb_table">Дата и время</th>
										</tr>
									</thead>
									<tbody>
										<?php for ($i = 0, $c_c = sizeof($web_shop['array']); $i < $c_c; $i++) { ?>
											<?php if (($web_shop['array'][$i]['steam'] == $Player->get_steam_32())) : ?>
												<tr class="pointer">
													<th class="text-center lrweb_table"><?= $web_shop['array'][$i]['title'] ?></th>
													<?php if (isset($web_shop['array'][$i]['count'])) : ?>
														<th class="text-center lrweb_table"><?= $web_shop['array'][$i]['count'] ?></th>
													<?php endif; ?>
													<?php if (isset($web_shop['array'][$i]['price'])) : ?>
														<th class="text-center lrweb_table"><?= $web_shop['array'][$i]['price'] ?></th>
													<?php endif; ?>
													<th class="text-center lrweb_table">
														<?php if (empty($web_shop['array'][$i]['promo'])) : ?>
															<svg viewBox="0 0 320 512">
																<path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z" />
															</svg>
														<?php else : ?>
															<?= $web_shop['array'][$i]['promo'] ?>
														<?php endif; ?>
													</th>
													<th class="text-center lrweb_table"><?= $web_shop['array'][$i]['date'] ?></th>
												</tr>
											<?php endif; ?>
										<?php } ?>
									</tbody>
								</table>
							<?php else : ?>
								<table class="table table-hover mb-0 tb_bg">
									<thead>
										<tr>
											<th class="text-center lrweb_table">Товар</th>
											<th class="text-center lrweb_table">Стоимость</th>
											<th class="text-center lrweb_table">Скидка</th>
											<th class="text-center lrweb_table">Сервер</th>
											<th class="text-center lrweb_table">Дата и время</th>
										</tr>
									</thead>
									<tbody>
										<?php for ($i = 0, $c_c = sizeof($web_shop['array']); $i < $c_c; $i++) { ?>
											<tr class="pointer">
												<th class="text-center lrweb_table"><?= $web_shop['array'][$i]['item_name'] ?></th>
												<th class="text-center lrweb_table"><?= $web_shop['array'][$i]['price'].' ' . $Translate->get_translate_module_phrase('module_page_lk_impulse', '_AmountCourse');?></th>
												<th class="text-center lrweb_table"><?= $web_shop['array'][$i]['discount'] ?></th>
												<th class="text-center lrweb_table"><?= $web_shop['array'][$i]['server'] ?></th>
												<th class="text-center lrweb_table"><?= date('d.m.Y H:i:s', $web_shop['array'][$i]['timestamp'] )?></th>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							<?php endif; ?>
						</div>
					<?php else : ?>
						<div class="no_punishment_block">
							<svg viewBox="0 0 512 512">
								<path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zm0-96c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64zM100.7 132.7c6.2-6.2 16.4-6.2 22.6 0L160 169.4l36.7-36.7c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6L182.6 192l36.7 36.7c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0L160 214.6l-36.7 36.7c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6L137.4 192l-36.7-36.7c-6.2-6.2-6.2-16.4 0-22.6zm192 0c6.2-6.2 16.4-6.2 22.6 0L352 169.4l36.7-36.7c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6L374.6 192l36.7 36.7c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0L352 214.6l-36.7 36.7c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6L329.4 192l-36.7-36.7c-6.2-6.2-6.2-16.4 0-22.6z" />
							</svg>
							<div class="no_punishment_text"><?= $Translate->get_translate_module_phrase('module_page_profiles', '_Shop_empty'); ?></div>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>