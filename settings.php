<?php

// include('includes/functions.php');

if($titan) {


	$basicTab = $titan->createAdminPanel( array(
	    'name' => 'WP Copy Protect' , 'parent' => 'options-general.php'
	) );

	// $settingsPanel = $adminPanel->createAdminPanel( array(
	// 	'name' => 'Settings',
	// ) );


	// $basicTab = $adminPanel->createTab( array(
	// 	'name' => 'Basic Settings',
	// ) );


	$basicTab->createOption( array(
		'name' => 'Disable Right Click',
		'id' => 'diable_right_click',
		'type' => 'checkbox',
		'desc' => 'Disable Context Menu On Your Website',
		'default' => true,
	));

	$basicTab->createOption( array(
		'name' => 'Disable Cut Copy Paste',
		'id' => 'diable_copy',
		'type' => 'checkbox',
		'desc' => 'Disable Ctrl + C, X and V on your website',
		'default' => false,
	));

	$basicTab->createOption( array(
		'name' => 'Disable Drag and Drop',
		'id' => 'diable_drag',
		'type' => 'checkbox',
		'desc' => 'Disable Drag and Drop of Images and Text',
		'default' => true,
	));

	$basicTab->createOption( array(
		'name' => 'Disable Selection',
		'id' => 'diable_selection',
		'type' => 'checkbox',
		'desc' => 'Disable Selection of Text on web pages (does not work inside text boxes)',
		'default' => true,
	));

	$basicTab->createOption( array(
		'name' => 'Append Text After Copy',
		'id' => 'append_text_copy',
		'type' => 'textarea',
		'desc' => 'Following text will be appended after user copies a text',
		'css' => 'medium-text'
	) );

	$basicTab->createOption( array(
		'type' => 'save',
	) );

	// $advanceTab = $adminPanel->createTab( array(
	// 	'name' => 'Advance Settings',
	// ) );


}



