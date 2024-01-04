<div class="row">
	<div class="col-md-12 profile_gap">
		<div class="profile_block_titles">
			<div class="profile_block_content_title">
				<svg viewBox="0 0 448 512">
					<path d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z" />
				</svg>
				<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Stats'); ?>
			</div>
		</div>
		<div class="profile_block_content">
			<div class="profile_block_stats">
				<div class="profile_block">
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 512 512">
								<path d="M16 0H144c5.3 0 10.3 2.7 13.3 7.1l81.1 121.6c-49.5 4.1-94 25.6-127.6 58.3L2.7 24.9C-.6 20-.9 13.7 1.9 8.5S10.1 0 16 0zM509.3 24.9L401.2 187.1c-33.5-32.7-78.1-54.2-127.6-58.3L354.7 7.1c3-4.5 8-7.1 13.3-7.1H496c5.9 0 11.3 3.2 14.1 8.5s2.5 11.5-.8 16.4zM432 336c0 97.2-78.8 176-176 176s-176-78.8-176-176s78.8-176 176-176s176 78.8 176 176zM264.4 241.1c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Rank'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Translate->get_translate_phrase($Player->get_rank(), 'ranks_' . $Player->found[$Player->server_group]['ranks_pack']) ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 512 512">
								<path d="M448 160H320V128H448v32zM48 64C21.5 64 0 85.5 0 112v64c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zM448 352v32H192V352H448zM48 288c-26.5 0-48 21.5-48 48v64c0 26.5 21.5 48 48 48H464c26.5 0 48-21.5 48-48V336c0-26.5-21.5-48-48-48H48z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Exp'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_value() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 640 512">
								<path d="M353.8 54.1L330.2 6.3c-3.9-8.3-16.1-8.6-20.4 0L286.2 54.1l-52.3 7.5c-9.3 1.4-13.3 12.9-6.4 19.8l38 37-9 52.1c-1.4 9.3 8.2 16.5 16.8 12.2l46.9-24.8 46.6 24.4c8.6 4.3 18.3-2.9 16.8-12.2l-9-52.1 38-36.6c6.8-6.8 2.9-18.3-6.4-19.8l-52.3-7.5zM256 256c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V288c0-17.7-14.3-32-32-32H256zM32 320c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H160c17.7 0 32-14.3 32-32V352c0-17.7-14.3-32-32-32H32zm416 96v64c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32V416c0-17.7-14.3-32-32-32H480c-17.7 0-32 14.3-32 32z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Top_players'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_top_position() ?> <?= $Translate->get_translate_module_phrase('module_page_profiles', '_Top_place'); ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 576 512">
								<path d="M352 0C369.7 0 384 14.33 384 32C384 49.67 369.7 64 352 64V74.98C352 117.4 335.1 158.1 305.1 188.1L237.3 256L273.2 291.1C262.2 314.1 256 340.8 256 368C256 427.5 285.6 480.1 330.8 512H32C14.33 512 0 497.7 0 480C0 462.3 14.33 448 32 448V437C32 394.6 48.86 353.9 78.86 323.9L146.7 256L78.86 188.1C48.86 158.1 32 117.4 32 74.98V64C14.33 64 0 49.67 0 32C0 14.33 14.33 0 32 0H352zM111.1 128H272C282.4 112.4 288 93.98 288 74.98V64H96V74.98C96 93.98 101.6 112.4 111.1 128zM576 368C576 447.5 511.5 512 432 512C352.5 512 288 447.5 288 368C288 288.5 352.5 224 432 224C511.5 224 576 288.5 576 368zM415.1 304V368C415.1 376.8 423.2 384 431.1 384H480C488.8 384 496 376.8 496 368C496 359.2 488.8 352 480 352H447.1V304C447.1 295.2 440.8 288 431.1 288C423.2 288 415.1 295.2 415.1 304V304z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Time_Played'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_playtime() ?> <?= $Translate->get_translate_module_phrase('module_page_profiles', '_hours'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="profile_block_stats">
				<div class="profile_block">
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 640 512">
								<path d="M640 384.2c0-5.257-.4576-10.6-1.406-15.98l-33.38-211.6C591.4 77.96 522 32 319.1 32C119 32 48.71 77.46 34.78 156.6l-33.38 211.6c-.9487 5.383-1.406 10.72-1.406 15.98c0 51.89 44.58 95.81 101.5 95.81c49.69 0 93.78-30.06 109.5-74.64l7.5-21.36h203l7.5 21.36c15.72 44.58 59.81 74.64 109.5 74.64C595.4 479.1 640 436.1 640 384.2zM247.1 248l-31.96-.0098L215.1 280c0 13.2-10.78 24-23.98 24c-13.2 0-24.02-10.8-24.02-24l.0367-32.01L135.1 248c-13.2 0-23.98-10.8-23.98-24c0-13.2 10.77-24 23.98-24l32.04-.011L167.1 168c0-13.2 10.82-24 24.02-24c13.2 0 23.98 10.8 23.98 24l.0368 31.99L247.1 200c13.2 0 24.02 10.8 24.02 24C271.1 237.2 261.2 248 247.1 248zM432 311.1c-22.09 0-40-17.92-40-40c0-22.08 17.91-40 40-40s40 17.92 40 40C472 294.1 454.1 311.1 432 311.1zM496 215.1c-22.09 0-40-17.92-40-40c0-22.08 17.91-40 40-40s40 17.92 40 40C536 198.1 518.1 215.1 496 215.1z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Rounds'); ?>
						</div>
						<div class="profile_block_value">
							<?= ($Player->get_round_lose() + $Player->get_round_win()) ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 576 512">
								<path d="M304 240V16.6c0-9 7-16.6 16-16.6C443.7 0 544 100.3 544 224c0 9-7.6 16-16.6 16H304zM32 272C32 150.7 122.1 50.3 239 34.3c9.2-1.3 17 6.1 17 15.4V288L412.5 444.5c6.7 6.7 6.2 17.7-1.5 23.1C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zm526.4 16c9.3 0 16.6 7.8 15.4 17c-7.7 55.9-34.6 105.6-73.9 142.3c-6 5.6-15.4 5.2-21.2-.7L320 288H558.4z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Total_winning_percentage'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_percent_win() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 512 512">
								<path d="M64 400C64 408.8 71.16 416 80 416H480C497.7 416 512 430.3 512 448C512 465.7 497.7 480 480 480H80C35.82 480 0 444.2 0 400V64C0 46.33 14.33 32 32 32C49.67 32 64 46.33 64 64V400zM439 279L406.6 246.6L326.6 326.6C314.1 339.1 293.9 339.1 281.4 326.6L208 253.3L150.6 310.6C138.1 323.1 117.9 323.1 105.4 310.6C92.88 298.1 92.88 277.9 105.4 265.4L185.4 185.4C197.9 172.9 218.1 172.9 230.6 185.4L304 258.7L361.4 201.4L328.1 168.1C313.9 153.9 324.6 128 345.9 128H456C469.3 128 480 138.7 480 152V262.1C480 283.4 454.1 294.1 439 279L439 279z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Wins'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_round_win() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 512 512">
								<path d="M64 400C64 408.8 71.16 416 80 416H480C497.7 416 512 430.3 512 448C512 465.7 497.7 480 480 480H80C35.82 480 0 444.2 0 400V64C0 46.33 14.33 32 32 32C49.67 32 64 46.33 64 64V400zM281.4 121.4C293.9 108.9 314.1 108.9 326.6 121.4L406.6 201.4L439 168.1C454.1 153.9 480 164.6 480 185.9V296C480 309.3 469.3 320 456 320H345.9C324.6 320 313.9 294.1 328.1 279L361.4 246.6L304 189.3L230.6 262.6C218.1 275.1 197.9 275.1 185.4 262.6L105.4 182.6C92.88 170.1 92.88 149.9 105.4 137.4C117.9 124.9 138.1 124.9 150.6 137.4L207.1 194.7L281.4 121.4z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Loss'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_round_lose() ?>
						</div>
					</div>
				</div>
			</div>
			<div class="profile_block_stats">
				<div class="profile_block">
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 448 512">
								<path d="M0 96C0 43 43 0 96 0H384h32c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32H384 96c-53 0-96-43-96-96V96zM64 416c0 17.7 14.3 32 32 32H352V384H96c-17.7 0-32 14.3-32 32zM320 112c0-35.3-35.8-64-80-64s-80 28.7-80 64c0 20.9 12.6 39.5 32 51.2V176c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16V163.2c19.4-11.7 32-30.3 32-51.2zM208 128c-8.8 0-16-7.2-16-16s7.2-16 16-16s16 7.2 16 16s-7.2 16-16 16zm80-16c0 8.8-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16s16 7.2 16 16zM134.3 209.3c-8.1-3.5-17.5 .3-21 8.4s.3 17.5 8.4 21L199.4 272l-77.7 33.3c-8.1 3.5-11.9 12.9-8.4 21s12.9 11.9 21 8.4L240 289.4l105.7 45.3c8.1 3.5 17.5-.3 21-8.4s-.3-17.5-8.4-21L280.6 272l77.7-33.3c8.1-3.5 11.9-12.9 8.4-21s-12.9-11.9-21-8.4L240 254.6 134.3 209.3z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Kill_count'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_kills() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 512 512">
								<path d="M400 128c0 44.4-25.4 83.5-64 106.4V256c0 17.7-14.3 32-32 32H208c-17.7 0-32-14.3-32-32V234.4c-38.6-23-64-62.1-64-106.4C112 57.3 176.5 0 256 0s144 57.3 144 128zM200 176c17.7 0 32-14.3 32-32s-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32zm144-32c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zM35.4 273.7c7.9-15.8 27.1-22.2 42.9-14.3L256 348.2l177.7-88.8c15.8-7.9 35-1.5 42.9 14.3s1.5 35-14.3 42.9L327.6 384l134.8 67.4c15.8 7.9 22.2 27.1 14.3 42.9s-27.1 22.2-42.9 14.3L256 419.8 78.3 508.6c-15.8 7.9-35 1.5-42.9-14.3s-1.5-35 14.3-42.9L184.4 384 49.7 316.6c-15.8-7.9-22.2-27.1-14.3-42.9z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Deaths'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_deaths() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 640 512">
								<path d="M638.6 297.2C633 315.9 580.4 480 463.1 480C346.4 480 294.5 285.9 288.1 263.8C275.2 209 229.5 96 176 96C117.1 96 73.34 197.6 62.67 233.2C57.57 250.1 39.75 259.7 22.83 254.7C5.889 249.6-3.72 231.7 1.358 214.8C6.983 196.1 59.56 32 176 32c117.6 0 169.5 194.1 175 216.3C364.8 302.1 410.5 416 463.1 416c58.92 0 102.7-101.6 113.3-137.2c5.109-16.94 22.97-26.44 39.84-21.47C634.1 262.4 643.7 280.3 638.6 297.2z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Ratio_KD'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_kd() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 640 512">
								<path d="M543.9 251.4c0-1.1 .1-2.2 .1-3.4c0-48.6-39.4-88-88-88l-40 0H320l-16 0 0 0v16 72c0 22.1-17.9 40-40 40s-40-17.9-40-40V128h.4c4-36 34.5-64 71.6-64H408c2.8 0 5.6 .2 8.3 .5l40.1-40.1c21.9-21.9 57.3-21.9 79.2 0l78.1 78.1c21.9 21.9 21.9 57.3 0 79.2l-69.7 69.7zM192 128V248c0 39.8 32.2 72 72 72s72-32.2 72-72V192h80l40 0c30.9 0 56 25.1 56 56c0 27.2-19.4 49.9-45.2 55c8.2 8.6 13.2 20.2 13.2 33c0 26.5-21.5 48-48 48h-2.7c1.8 5 2.7 10.4 2.7 16c0 26.5-21.5 48-48 48H224c-.9 0-1.8 0-2.7-.1l-37.7 37.7c-21.9 21.9-57.3 21.9-79.2 0L26.3 407.6c-21.9-21.9-21.9-57.3 0-79.2L96 258.7V224c0-53 43-96 96-96z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Assists'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_assists() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 512 512">
								<path d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM123.3 132.7C117.1 126.4 106.9 126.4 100.7 132.7C94.44 138.9 94.44 149.1 100.7 155.3L137.4 192L100.7 228.7C94.44 234.9 94.44 245.1 100.7 251.3C106.9 257.6 117.1 257.6 123.3 251.3L160 214.6L196.7 251.3C202.9 257.6 213.1 257.6 219.3 251.3C225.6 245.1 225.6 234.9 219.3 228.7L182.6 192L219.3 155.3C225.6 149.1 225.6 138.9 219.3 132.7C213.1 126.4 202.9 126.4 196.7 132.7L160 169.4L123.3 132.7zM315.3 132.7C309.1 126.4 298.9 126.4 292.7 132.7C286.4 138.9 286.4 149.1 292.7 155.3L329.4 192L292.7 228.7C286.4 234.9 286.4 245.1 292.7 251.3C298.9 257.6 309.1 257.6 315.3 251.3L352 214.6L388.7 251.3C394.9 257.6 405.1 257.6 411.3 251.3C417.6 245.1 417.6 234.9 411.3 228.7L374.6 192L411.3 155.3C417.6 149.1 417.6 138.9 411.3 132.7C405.1 126.4 394.9 126.4 388.7 132.7L352 169.4L315.3 132.7zM256 304C211.8 304 176 339.8 176 384C176 392.8 183.2 400 192 400H320C328.8 400 336 392.8 336 384C336 339.8 300.2 304 256 304z" />
							</svg>
							<?= $Translate->get_translate_phrase('_Headshot') ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_headshots() ?> (<?= $Player->get_percent_headshots() ?>)
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 512 512">
								<path d="M256 0c17.7 0 32 14.3 32 32V42.4c93.7 13.9 167.7 88 181.6 181.6H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H469.6c-13.9 93.7-88 167.7-181.6 181.6V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V469.6C130.3 455.7 56.3 381.7 42.4 288H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H42.4C56.3 130.3 130.3 56.3 224 42.4V32c0-17.7 14.3-32 32-32zM107.4 288c12.5 58.3 58.4 104.1 116.6 116.6V384c0-17.7 14.3-32 32-32s32 14.3 32 32v20.6c58.3-12.5 104.1-58.4 116.6-116.6H384c-17.7 0-32-14.3-32-32s14.3-32 32-32h20.6C392.1 165.7 346.3 119.9 288 107.4V128c0 17.7-14.3 32-32 32s-32-14.3-32-32V107.4C165.7 119.9 119.9 165.7 107.4 224H128c17.7 0 32 14.3 32 32s-14.3 32-32 32H107.4zM256 288c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Ratio_SH'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_percent_hits() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 576 512">
								<path d="M528 56c0-13.3-10.7-24-24-24s-24 10.7-24 24v8H32C14.3 64 0 78.3 0 96V208c0 17.7 14.3 32 32 32H42c20.8 0 36.1 19.6 31 39.8L33 440.2c-2.4 9.6-.2 19.7 5.8 27.5S54.1 480 64 480h96c14.7 0 27.5-10 31-24.2L217 352H321.4c23.7 0 44.8-14.9 52.7-37.2L400.9 240H432c8.5 0 16.6-3.4 22.6-9.4L477.3 208H544c17.7 0 32-14.3 32-32V96c0-17.7-14.3-32-32-32H528V56zM321.4 304H229l16-64h105l-21 58.7c-1.1 3.2-4.2 5.3-7.5 5.3zM80 128H464c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Shoots'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_shoots() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 640 512">
								<path d="M32 196.8C32 220.7 51.33 240 75.17 240c21.26 0 36.61 20.35 30.77 40.79l-40.69 158.4C59.41 459.6 74.76 480 96.02 480h103.8c14.29 0 26.84-9.469 30.77-23.21L258.4 352h67.39L32 121.8V196.8zM630.8 469.1l-219.3-171.9L430.6 240h36.1c8.486 0 16.62-3.369 22.63-9.373L512 208h64c17.67 0 32-14.33 32-32V96c0-17.67-14.33-32-32-32h-16V56C560 42.74 549.3 32 536 32S512 42.74 512 56V64H113.1L38.81 5.109C34.41 1.672 29.19 0 24.03 0C16.91 0 9.846 3.156 5.127 9.188C-3.061 19.62-1.248 34.72 9.189 42.89l591.1 463.1c10.5 8.203 25.56 6.328 33.69-4.078C643.1 492.4 641.2 477.3 630.8 469.1zM195.6 128H512v32H236.4L195.6 128zM371.4 265.8L338.5 240h41.52L371.4 265.8z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Hits'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_hits() ?>
						</div>
					</div>
				</div>
			</div>
			<div class="profile_block_stats">
				<div class="profile_block">
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 512 512">
								<path d="M416 398.9c58.5-41.1 96-104.1 96-174.9C512 100.3 397.4 0 256 0S0 100.3 0 224c0 70.7 37.5 133.8 96 174.9c0 .4 0 .7 0 1.1v64c0 26.5 21.5 48 48 48h48V464c0-8.8 7.2-16 16-16s16 7.2 16 16v48h64V464c0-8.8 7.2-16 16-16s16 7.2 16 16v48h48c26.5 0 48-21.5 48-48V400c0-.4 0-.7 0-1.1zM224 256c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zm128 64c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_First_round_kills'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_unusualkills_op() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 640 512">
								<path d="M304 95.1c26.5 0 48-21.5 48-47.1S330.5 0 304 0S256 21.5 256 47.1S277.5 95.1 304 95.1zM560 0h-96C437.5 0 416 21.5 416 47.1v175.1h-44.22l-26.97-53.95c-11.68-23.36-32.32-40.93-57.25-48.7L219.8 100.2c-31.9-9.984-66.69-2.625-91.84 19.39L90.94 151.9C77.63 163.5 76.29 183.8 87.9 197.1c11.65 13.28 31.87 14.62 45.18 3.008l36.99-32.38c8.352-7.293 19.87-9.758 30.46-6.525l-30.95 92.8c-9.344 28.03 1.729 58.85 26.82 74.49l86.21 53.88l-25.41 88.83c-4.832 16.99 4.992 34.72 21.98 39.58c16.99 4.832 34.72-4.992 39.58-21.98l28.67-100.4c5.887-20.57-2.561-42.56-20.71-53.88L270 299l28.99-77.37L318.9 261.5c8.129 16.26 24.77 26.53 42.95 26.53H416v175.1c0 26.5 21.5 48 48 48h96c26.5 0 48-21.5 48-48V47.1C608 21.5 586.5 0 560 0zM145.5 319.1l-14.4 32.9H64c-17.66 0-32 14.34-32 31.1c0 17.66 14.34 32 32 32h77.54c19.07 0 36.32-11.3 43.97-28.77l9.568-21.86l-15.62-9.76C164.7 346.4 153.2 333.7 145.5 319.1z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Penetrated_kills'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_unusualkills_penetrated() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 640 512">
								<path d="M184.9 119.6C212.4 92.34 248.1 73.35 288 66.66V32C288 14.33 302.3 .001 320 .001C337.7 .001 352 14.33 352 32V66.66C432.4 80.14 495.9 143.6 509.3 224H544C561.7 224 576 238.3 576 256C576 273.7 561.7 288 544 288H509.3C505.3 312 496.8 334.5 484.8 354.6L630.8 469.1C641.2 477.3 643.1 492.4 634.9 502.8C626.7 513.2 611.6 515.1 601.2 506.9L9.196 42.89C-1.236 34.71-3.065 19.63 5.112 9.196C13.29-1.236 28.37-3.065 38.81 5.112L184.9 119.6zM235.8 159.5L274.7 190C287.6 181.2 303.2 176 320 176C364.2 176 400 211.8 400 256C400 265.9 398.2 275.4 394.9 284.2L433.8 314.7C442.9 297.1 448 277.2 448 256C448 185.3 390.7 128 320 128C287.8 128 258.3 139.9 235.8 159.5V159.5zM352 445.3V480C352 497.7 337.7 512 320 512C302.3 512 288 497.7 288 480V445.3C207.6 431.9 144.1 368.4 130.7 288H96C78.33 288 64 273.7 64 256C64 238.3 78.33 224 96 224H130.7C131.9 216.8 133.5 209.7 135.5 202.7L192.3 247.5C192.1 250.3 192 253.1 192 256C192 326.7 249.3 384 320 384C333.3 384 346.1 381.1 358.2 378.2L414.9 422.9C395.8 433.8 374.6 441.6 352 445.3z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Killing_without_scope'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_unusualkills_noscope() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 448 512">
								<path d="M336 48c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48zM141.7 175.5c9.9-9.9 23.4-15.5 37.5-15.5c1.9 0 3.8 .1 5.6 .3L153.6 254c-9.3 28 1.7 58.8 26.8 74.5l86.2 53.9-25.4 88.8c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l28.7-100.4c5.9-20.6-2.6-42.6-20.7-53.9L254 299l30.9-82.4 5.1 12.3C305 264.7 339.9 288 378.7 288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H378.7c-12.9 0-24.6-7.8-29.5-19.7l-6.3-15c-14.6-35.1-44.1-61.9-80.5-73.1l-48.7-15c-11.1-3.4-22.7-5.2-34.4-5.2c-31 0-60.8 12.3-82.7 34.3L73.4 153.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l23.1-23.1zM107.2 352H48c-17.7 0-32 14.3-32 32s14.3 32 32 32h69.6c19 0 36.2-11.2 43.9-28.5L173 361.6l-9.5-6c-17.5-10.9-30.5-26.8-37.9-44.9L107.2 352z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Kills_on_run'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_unusualkills_run() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 640 512">
								<path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c5.2-11.8 8-24.8 8-38.5c0-53-43-96-96-96c-2.8 0-5.6 .1-8.4 .4c5.3 9.3 8.4 20.1 8.4 31.6c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zm223.1 298L373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Kills_flash'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_unusualkills_flash() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 640 512">
								<path d="M167.4 412.7c-4.625 2.1-7.502 8.097-7.502 13.6v37.75c0 12.5 13.87 20.28 24.5 13.53l66.68-39.87l-47.81-47.8L167.4 412.7zM584.3 217.3l-56.48-34.66c-.125-13.1-2.153-30.72-7.028-48.59c-11.25-42.24-31.89-73.45-46.01-69.7c-14 3.875-16.25 41.1-5.001 83.34c.75 2.375 1.45 4.78 2.201 7.03c-5.001-5.999-10.23-12.16-16.35-18.28C424.7 105.5 391.2 88.78 380.1 99.02c-10.38 10.37 6.422 43.7 37.3 74.7c12.75 12.62 25.72 22.76 37.47 29.76c-3.125 5.749-5.754 12.03-6.879 19.28c-.5 3.125-.7502 6.217-.7502 9.342c-51.63-36.1-154.6-104.1-224.2-104.1c-52.13 0-85.21 28.27-104.7 54.14c-1.75-2.75-2.875-5.749-5.251-8.124c-18.75-18.75-49.26-18.75-67.88 0c-18.75 18.75-18.75 49.24 0 67.99c16.38 16.37 41.25 17.5 59.88 5.249l191.4 191.4c6.001 5.999 14.14 9.37 22.64 9.37l143.1-.0018c8.876 0 15.1-7.124 15.1-15.1V416c0-17.62-14.26-31.1-32.01-31.1H351.9v-55.6c0-35.5-23.89-67.14-58.02-76.89L251.5 239.4C243 237 238.1 228.1 240.5 219.6c2.375-8.499 11.39-13.37 19.77-10.1l42.39 12.12c47.88 13.62 81.26 57.91 81.26 107.7v23.6l64.03-32l103.4 .0018C582.6 320 608 294.6 608 263.4C608 244.1 599.1 227.9 584.3 217.3zM527.1 256c-8.876 0-16-7.126-16-15.1c0-8.874 7.126-15.1 16-15.1s16.01 7.125 16.01 15.1C543.1 248.9 536.9 256 527.1 256z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Jump_kills'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_unusualkills_jump() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 640 512">
								<path d="M144 192c9.875 0 19.5 .875 29.12 2.5C197.3 136.8 253.8 96 320 96c26.25 0 52 6.75 75.13 19.25c9.25-10.25 20.12-18.5 31.62-25.88C403.8 54.88 364.6 32 320 32C288.4 32 259.9 43.88 237.6 62.75C215.3 25.25 174.8 0 128 0C57.25 0 0 57.25 0 128c0 38.25 17.12 72.13 43.75 95.63C72.25 203.8 106.8 192 144 192zM402.4 158.8C380.1 139.9 351.6 128 320 128C268.3 128 224.1 158.8 203.9 202.8C219.5 208.5 234.5 216.3 248 226.3C277.1 204 313.1 192 352 192c54.88 0 105.1 25.88 139 69.13C503.1 257.8 515.5 256 528 256c35.5 0 67.63 13.38 92.75 34.75C632.8 271.3 640 248.6 640 224c0-70.75-57.25-128-128-128C465.3 96 424.8 121.3 402.4 158.8zM528 288c-18 0-34.75 4.625-49.75 12.12C453.1 254.1 406.8 224 352 224C311 224 274.3 241.3 248 268.8C221.8 241.3 185 224 144 224C64.5 224 0 288.5 0 368S64.5 512 144 512h384c61.88 0 112-50.13 112-112S589.9 288 528 288z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Smoke_kills'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_unusualkills_smoke() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 448 512">
								<path d="M224 96c38.4 0 73.7 13.5 101.3 36.1l-32.6 32.6c-4.6 4.6-5.9 11.5-3.5 17.4s8.3 9.9 14.8 9.9H416c8.8 0 16-7.2 16-16V64c0-6.5-3.9-12.3-9.9-14.8s-12.9-1.1-17.4 3.5l-34 34C331.4 52.6 280.1 32 224 32c-10.9 0-21.5 .8-32 2.3V99.2c10.3-2.1 21-3.2 32-3.2zM100.1 154.7l32.6 32.6c4.6 4.6 11.5 5.9 17.4 3.5s9.9-8.3 9.9-14.8V64c0-8.8-7.2-16-16-16H32c-6.5 0-12.3 3.9-14.8 9.9s-1.1 12.9 3.5 17.4l34 34C20.6 148.6 0 199.9 0 256c0 10.9 .8 21.5 2.3 32H67.2c-2.1-10.3-3.2-21-3.2-32c0-38.4 13.5-73.7 36.1-101.3zM445.7 224H380.8c2.1 10.3 3.2 21 3.2 32c0 38.4-13.5 73.7-36.1 101.3l-32.6-32.6c-4.6-4.6-11.5-5.9-17.4-3.5s-9.9 8.3-9.9 14.8V448c0 8.8 7.2 16 16 16H416c6.5 0 12.3-3.9 14.8-9.9s1.1-12.9-3.5-17.4l-34-34C427.4 363.4 448 312.1 448 256c0-10.9-.8-21.5-2.3-32zM224 416c-38.4 0-73.7-13.5-101.3-36.1l32.6-32.6c4.6-4.6 5.9-11.5 3.5-17.4s-8.3-9.9-14.8-9.9H32c-8.8 0-16 7.2-16 16l0 112c0 6.5 3.9 12.3 9.9 14.8s12.9 1.1 17.4-3.5l34-34C116.6 459.4 167.9 480 224 480c10.9 0 21.5-.8 32-2.3V412.8c-10.3 2.1-21 3.2-32 3.2z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Kills_whirl'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_unusualkills_whirl() ?>
						</div>
					</div>
					<div class="profile_block_info">
						<div class="profile_block_title">
							<svg viewBox="0 0 448 512">
								<path d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288H175.5L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7H272.5L349.4 44.6z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Kills_last_shoot'); ?>
						</div>
						<div class="profile_block_value">
							<?= $Player->get_unusualkills_last_clip() ?>
						</div>
					</div>
				</div>
			</div>
			<div class="profile_block_stats">
				<?php $maps_names = empty($Player->maps) ? [] : array_keys($Player->maps); ?>
				<div class="profile_block_no_scroll">
					<div class="profile_block_info_map">
						<img class="map_image" src="<?= $General->arr_general['site'] ?>storage/cache/img/maps/<?= $Player->found[$Player->server_group]['mod'] . '/' . array_keys($Player->maps)[0]; ?>.jpg" alt="" title="">
						<div class="profile_block_title">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
								<path d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152c22.1 0 40-17.9 40-40s-17.9-40-40-40s-40 17.9-40 40s17.9 40 40 40z" />
							</svg>
							<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Favorite_Map'); ?>
						</div>
						<div class="profile_block_value_double">
							<img class="pin_size_image" src="<?= $General->arr_general['site'] ?>/storage/cache/img/pins/maps/_<?= $maps_names[0]; ?>.png" alt="" title="">
							<div class="profile_mapname"><?= array_keys($Player->maps)[0]; ?></div>
						</div>
					</div>
				</div>
				<div class="profile_block_title_map">
					<svg viewBox="0 0 640 512">
						<path d="M560 160c44.2 0 80-35.8 80-80s-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80zM55.9 512H381.1h75H578.9c33.8 0 61.1-27.4 61.1-61.1c0-11.2-3.1-22.2-8.9-31.8l-132-216.3C495 196.1 487.8 192 480 192s-15 4.1-19.1 10.7l-48.2 79L286.8 81c-6.6-10.6-18.3-17-30.8-17s-24.1 6.4-30.8 17L8.6 426.4C3 435.3 0 445.6 0 456.1C0 487 25 512 55.9 512z" />
					</svg>
					<div><?= $Translate->get_translate_module_phrase('module_page_profiles', '_PlayMatches'); ?></div>
				</div>
				<div class="profile_block_maps_matches scroll">
					<?php for ($w = 0, $_c = count($Player->maps); $w < $_c; $w++) { ?>
						<div class="profile_block_info_map_matches">
							<img class="map_image" src="<?= $General->arr_general['site'] ?>storage/cache/img/maps/<?= $Player->found[$Player->server_group]['mod'] . '/' . $maps_names[$w]; ?>.jpg" alt="" title="">
							<div class="profile_block_value_double">
								<img class="pin_size_image_again" src="<?= $General->arr_general['site'] ?>/storage/cache/img/pins/maps/_<?= $maps_names[$w]; ?>.png" alt="" title="" onerror="this.src='<?=$General->arr_general['site'] ?>/storage/cache/img/pins/maps/_.png';">
								<div class="profile_mapname">
									<div class="count_matches_text"><?= $Player->maps[$maps_names[$w]]; ?> <?= $Translate->get_translate_module_phrase('module_page_profiles', '_CountMatches'); ?></div>
									<div class="count_matches"><?= $maps_names[$w]; ?></div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="profile_block_titles">
			<div class="profile_block_content_title">
				<?= $Translate->get_translate_module_phrase('module_page_profiles', '_Favorite_weapons'); ?>
			</div>
		</div>
		<div class="wslider">
			<?php $weapon_names = empty($Player->weapons) ? [] : array_keys($Player->weapons);
			for ($w = 0, $_c = count($Player->weapons); $w < $_c; $w++) { ?>
				<div class="witem">
					<div class="weapon_svg_image"><?php $General->get_icon('custom', $weapon_names[$w], 'weapons') ?></div>
					<div class="weapon_kills_count"><?= $Player->weapons[$weapon_names[$w]].' '.$Translate->get_translate_module_phrase('module_page_profiles', '_Kill_count'); ?></div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>