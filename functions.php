<?php
	/**
	 * Created by PhpStorm.
	 * User: alexandrzanko
	 * Date: 12/4/18
	 * Time: 5:00 PM
	 */

	define('THEME_NAME', get_template());
	define('BASE_URL','/wp-content/themes/' . THEME_NAME);

	require_once __DIR__ . '/utils/Lang.php';
	require_once __DIR__ . '/utils/Assets.php';

	require_once __DIR__ . '/core/styles.php';
	require_once __DIR__ . '/core/scripts.php';

	require_once __DIR__ . '/core/cmb2/common.php';

