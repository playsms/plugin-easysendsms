<?php
defined('_SECURE_') or die('Forbidden');

$data = registry_search(0, 'gateway', 'easysendsms');
$plugin_config['easysendsms'] = $data['gateway']['easysendsms'];
$plugin_config['easysendsms']['name'] = 'easysendsms';
$plugin_config['easysendsms']['url'] = 'https://api.easysendsms.app/bulksms';
//$plugin_config['easysendsms']['default_url'] = 'https://www.easysendsms.com/sms/bulksms-api/bulksms-api';
//$plugin_config['easysendsms']['url'] = ( $plugin_config['easysendsms']['url'] ? $plugin_config['easysendsms']['url'] : $plugin_config['easysendsms']['default_url'] );

// smsc configuration
$plugin_config['easysendsms']['_smsc_config_'] = array(
	/* 'url' => _('Easy Send SMS URL'), */
	'user' => _('User'),
	'password' => _('Password'),
	'module_sender' => _('Module sender ID'),
	'datetime_timezone' => _('Module timezone') 
);
