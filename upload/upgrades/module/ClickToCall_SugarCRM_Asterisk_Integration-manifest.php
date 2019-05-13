<?php
$manifest = array (
                   'acceptable_sugar_versions' =>
                   array (
                          'exact_matches' =>
                          array (
								1 => '6.5.15',
                                 ),
                          'regex_matches' =>
                          array (
							1 => '6\.4\.\d',
							2 => '6\.[0-9]\.\d',
							3 => '7\.[0-9]\.\d',  /** matches 6.1.x,6.2.x,6.3.x,6.4.x,6.5.x,6.6.x **/
                                 ),
                          ),
                   'acceptable_sugar_flavors' =>
                   array(
                         'CE'
                         ,'PRO'
                          ,'ENT'
                          ,'CORP'
                         ),
                   'readme'=>'',
                   'key'=>'',
                   'author' => 'TechExtension',
                   'description' => 'Integrates Asterisk and SugarCRM',
                   'icon' => '',
                   'is_uninstallable' => true,
                   'name' => 'SugarCRM Click To Call Module',
                   'published_date' => 'March 1, 2014',
                   'type' => 'module',
                   'version' => '3.1',
                   'remove_tables' => 'true',
                   );

$installdefs = 
array 
(
 'id' => 'TechExtensionCall',
 'copy' => array
(
    0 => array(
                'from' => '<basepath>/SugarModules/Extension/application/Ext/EntryPointRegistry',
                'to' => 'custom/Extension/application/Ext/EntryPointRegistry',
            ),
	1 => array(
		'from' => '<basepath>/SugarModules/Extension/modules/Administration/Ext/',
		'to' => 'custom/Extension/modules/Administration/Ext',
	),
	2 => array(
		'from' => '<basepath>/SugarModules/Extension/modules/Calls/Ext/',
		'to' => 'custom/Extension/modules/Calls/Ext',
	),

	3 => array(
	'from' => '<basepath>/SugarModules/modules/Asterisk',
	'to' => 'custom/modules',
	),
	4 => array(
	'from' => '<basepath>/SugarModules/modules/Configurator',
	'to' => 'custom/modules/Configurator',
	),
	5 => array(
		'from' => '<basepath>/SugarModules/Extension/modules/Contacts/Ext/',
		'to' => 'custom/Extension/modules/Contacts/Ext',
	),

	6 => array(
	'from' => '<basepath>/SugarModules/entryPointforLowerVersion',
	'to' => 'custom/include/MVC/Controller',
	),
	7 => array(
	'from' => '<basepath>/SugarModules/Extension/modules/Configurator/Ext/Language',
	'to' => 'custom/Extension/modules/Configurator/Ext/Language',
	),

	
	
),
  'mkdir' => array(

  ),
'administration' =>
                      array (

                             ),
'custom_fields' => array(
			array(
			'id'		  => 'showclicktocall_id',
			'name'        => 'showclicktocall_c',
			'label'       => 'LBL_SHOWCLICKTOCALL',
			'type' => 'bool',
            'module' => 'Users',
            'default_value' => false, // true or false
            'help' => 'Tick to Show Magic Dial Button',
            'comment' => '',
            'audited' => false, // true or false
            'mass_update' => false, // true or false
            'duplicate_merge' => false, // true or false
            'reportable' => true, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
            ),
			
			array(
			'id'		  => 'phoneextension_id',
			'name'        => 'phoneextension_c',
			'label'        => 'LBL_PHONEEXTENSION',
			'type' => 'varchar',
            'module' => 'Users',
            'help' => 'Enter Your Extension',
            'comment' => '',
            'default_value' => '',
            'max_size' => 10,
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false', 'required'
            'duplicate_merge' => false, // true or false
			),
			array(
			'id'		  => 'dialout_prefix_id',
			'name'        => 'dialout_prefix_c',
			'label'        => 'LBL_DIALOUTPREFIX',
			'type' => 'varchar',
            'module' => 'Users',
            'help' => 'Enter Dial Out Prefix',
            'comment' => '',
            'default_value' => '',
            'max_size' => 30,
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false', 'required'
            'duplicate_merge' => false, // true or false
			),
			array(
			'id'		  => 'dial_plan_id',
			'name'        => 'dial_plan_c',
			'label'        => 'LBL_DIALPLAN',
			'type' => 'varchar',
            'module' => 'Users',
            'help' => 'Enter Dial Plan',
            'comment' => '',
            'default_value' => '',
            'max_size' => 30,
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false', 'required'
            'duplicate_merge' => false, // true or false
			),
	   array(
			'id'		  => 'asteriskname_id',
			'name'        => 'asteriskname_c',
			'label'        => 'LBL_ASTERISK',
			'type' => 'varchar',
            'module' => 'Users',
            'help' => 'Enter Your Asterisk IP',
            'comment' => '',
            'default_value' => '',
            'max_size' => 20,
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => false, // true or false
            'importable' => 'true', // 'true', 'false', 'required'
            'duplicate_merge' => false, // true or false
			),
			array(
			'id'		  => 'call_notification_id',
			'name'        => 'call_notification_c',
			'label'        => 'LBL_CALL_NOTIFICATION',
			'type' => 'bool',
            'module' => 'Users',
            'default_value' => false, // true or false
            'help' => 'Tick to Show Call Notification',
            'comment' => '',
            'audited' => false, // true or false
            'mass_update' => false, // true or false
            'duplicate_merge' => false, // true or false
            'reportable' => true, // true or false
            'importable' => 'true', // 'true', 'false' or 'required'
			),
			
		),
				 "logic_hooks" =>
							array (
								   array(
								  'module' => '',
								  'hook' => 'after_ui_frame',
								  'order' => 11,
								  'description' => 'Sugar Asterisk Integration',
								  'file' => 'custom/modules/Asterisk/include/LoadConnector.php',
								  'class' => 'LoadConnector',
								  'function' => 'echoJavaScript',
									),
							),
);
 
$upgrade_manifest = array(
  
);
?>
