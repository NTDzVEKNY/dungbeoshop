<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the framework's
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter.com/user_guide/extending/common.html
 */

const PARAMS = [
	'app_name'    => 'DungBeo',
	'app_version' => '2.4.10',
	'email'       => [
		'support_email' => 'ntdgdeptrai@gmail.com',
	],
];

const MENU_STATUS = [
	'pending' => [
		'color' => 'danger',
		'title' => 'Đang phát triển',
	],
	'coming_soon' => [
		'color' => 'warning',
		'title' => 'Sắp có',
	],
	'draft' => [
		'color' => 'secondary',
		'title' => 'Tạm dừng',
	],
	'updating' => [
		'color' => 'primary',
		'title' => 'Đang cập nhật',
	],
];