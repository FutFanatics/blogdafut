<?php

/*
Frontier Buttons Hooks
*/

//**********************************************************************************
// Get editor name.
//**********************************************************************************

function fbut_get_editor_name($editor_id)
	{
	$fbut_settings	= get_option(FBUT_SETTINGS_NAME, array());
	
	//Check if mobile 
	$fbut_is_mobile = wp_is_mobile();
	
	// a cheat to display editor in frontier buttons settings
	if (strpos($editor_id, 'frontier_buttons_') !== false) 
		{
		$editor_name = substr($editor_id, 17);
		}
	else
		{
		//****************************************************************************************************
		// Apply filter, so it is possible to do custom mobile check
		// filter:			frontier_buttons_is_mobile
		// $fbut_is_mobile 	Boolean if mobile editor 
		// $editor_id  		Name of editor
		// $fbut_settings	Frontier Buttons Settings			
		//****************************************************************************************************
		$fbut_is_mobile = apply_filters( 'frontier_buttons_is_mobile', $fbut_is_mobile, $editor_id, $fbut_settings );
		
		if ( fbut_bool($fbut_settings['use_role_editors']) )	
			{
			$role 	= fbut_get_editor_role();
			$edset	= $fbut_settings['role_editors'][$role];
			}
		else
			{
			$edset	= $fbut_settings['editor_set'];
			}
		
		if ($fbut_is_mobile)
			$editor_name = $edset['mobile_editor'];
		else
			if ($editor_id == "comment")
				$editor_name = $edset['cmt_editor'];		
			else
				$editor_name = $edset['default_editor'];		
	
		//$editor_name = $edset[$editor_id];
		
		//echo "*** EDITOR NAME = ".$editor_name." (ID= ".$editor_id.") *******<br>";
		
		//error_log("*** EDITOR NAME = ".$editor_name." (ID= ".$editor_id." *******");
		
		return $editor_name;
		}
	}

//**********************************************************************************
// Decide wich editor to use.
//**********************************************************************************

//$fbut_settings	= get_option(FBUT_SETTINGS_NAME, array());

function fbut_set_editor($editor_settings, $editor_id)
	{
	$fbut_settings	= get_option(FBUT_SETTINGS_NAME, array());
	
	if (strpos($editor_id, 'frontier_buttons_') !== false) 
		$editor_name = substr($editor_id, 17);
	else
		$editor_name 	= fbut_get_editor_name($editor_id);
	
	//echo "*** EDITOR NAME = ".$editor_name." (ID= ".$editor_id.") *******<br>";
	
	
	// set quicktags
	if ($editor_name == "quicktags")
		{
		$editor_settings['tinymce'] 		= false;
		$editor_settings['quicktags']		= true;
		}
	
	// check if disable media button (no media button for comments)
	if ($editor_name != "comment")
		{
		$toolbars = $fbut_settings[$editor_name];
		
		//echo "*CHECK 1<br>";
		//echo "*** Toolbars = ".print_r($toolbars, true)." <br>";
		//echo $editor_name."<br>";
		//echo "T1: ".array_key_exists('disable_media_button', $toolbars)."<br>";
		//echo "T2: ".fbut_bool($toolbars['disable_media_button'])."<br>";
		
		if ( array_key_exists('disable_media_button', $toolbars) && fbut_bool($toolbars['disable_media_button'])  )
			$editor_settings['media_buttons']	= false;	
		}
	
	//error_log("*** EDITOR SETTINGS = ".print_r($editor_settings, true)." (ID= ".$editor_id." *******");
	//echo "*** EDITOR SETTINGS = ".print_r($editor_settings, true)." (ID= ".$editor_id." *******<br>";
		
	
	return $editor_settings;
	}

add_filter( 'wp_editor_settings', 'fbut_set_editor', 999, 2 );

	
/*
if ()
	{
	function my_force_textarea($editor_settings) 
		{
		if (true)
			{
			$editor_settings['tinymce'] 		= false;
			$editor_settings['media_buttons']	= true;
			$editor_settings['quicktags']		= true;
			}		
			return $editor_settings;
		}

	add_filter( 'wp_editor_settings', 'my_force_textarea' );
	}

	function my_quicktags_settings($quicktags_settings) 
		{
		// default buttons: strong,em,link,block,del,ins,img,ul,ol,li,code,more,close
		$quicktags_settings['buttons'] = 'strong,em,link,img,ul,li,close';
		return $quicktags_settings;
		}

	add_filter( 'quicktags_settings', 'my_quicktags_settings' );
	}


*/

//**********************************************************************************
// Set toolbars and Detect new buttons 
//**********************************************************************************


function frontier_buttons_mce_init( $settings, $editor_id  )
	{
	
	// get settings
	$fbut_settings	= get_option(FBUT_SETTINGS_NAME, array());
	
	//error_log("FButtons settings: ".print_r($fbut_settings, true));
	
	// lets get out of here if Frontier Buttons for comments isn't enabled and comments editor passed
	if ($editor_id == "comment" && !fbut_bool($fbut_settings['comment_editor_enable']) )
		return $settings;
	
	$editor_name = fbut_get_editor_name($editor_id);
	
	
	/*
	//Check if mobile 
	$fbut_is_mobile = wp_is_mobile();
	
	
	// a cheat to display editor in frontier buttons settings
	if (strpos($editor_id, 'frontier_buttons_') !== false) 
		{
		$editor_name = substr($editor_id, 17);
		}
	else
		{
		//****************************************************************************************************
		// Apply filter, so it is possible to do custom mobile check
		// filter:			frontier_buttons_is_mobile
		// $fbut_is_mobile 	Boolean if mobile editor 
		// $editor_id  		Name of editor
		// $fbut_settings	Frontier Buttons Settings			
		//****************************************************************************************************
		$fbut_is_mobile = apply_filters( 'frontier_buttons_is_mobile', $fbut_is_mobile, $editor_id, $fbut_settings );
		
		if ( fbut_bool($fbut_settings['use_role_editors']) )	
			{
			$role 	= fbut_get_editor_role();
			$edset	= $fbut_settings['role_editors'][$role];
			}
		else
			{
			$edset	= $fbut_settings['editor_set'];
			}
			
		$editor_name = $edset['mobile_editor'];
	*/	
		
		
		/*
			if ($fbut_is_mobile)
				$editor_name = $fbut_settings['role_editors'][$role]['mobile_editor'];	
			else
				if ($editor_id == "comment")
					$editor_name = $fbut_settings['role_editors'][$role]['cmt_editor'];		
				else
					$editor_name = $fbut_settings['role_editors'][$role]['default_editor'];		
			}
		else
			{
			//error_log("NOT Role editors");
			if ($fbut_is_mobile)
				$editor_name = $fbut_settings['std_mobile_editor'];
			else
				if ($editor_id == "comment")
					$editor_name = $fbut_settings['std_cmt_editor'];		
				else
					$editor_name = $fbut_settings['std_editor'];		
			
			}
		
		
		}
		*/
	
	
	//echo "Editor id: ".$editor_id. " - Editor name: ".$editor_name."<br>";
	
	// No toolbars, then we need to clear them.
	if ( $editor_name == FBUT_NO_TOOLBARS )
		{
		$settings['toolbar1'] = ','; // there needs to be a comma, else the toolbar will display standard.
		$settings['toolbar2'] = '';
		$settings['toolbar3'] = '';
		$settings['toolbar4'] = '';
		
		return $settings;
		}
	
	if ( $editor_name == FBUT_WP_STANDARD_EDITOR  )
		{
		return $settings;
		}
	else
		{
		$toolbars = ( array_key_exists($editor_name, $fbut_settings) ? $fbut_settings[$editor_name] : array() );
	
		//**********************************************************************************
		// Detect new buttons before setting toolbars
		//**********************************************************************************

		$detect_interval 	= fbut_detect_interval();
		$do_detection 		= false;
		
		
		if (is_admin())
			{
			if ( fbut_bool($fbut_settings['force_backend_check']) ||  (intval($fbut_settings['last_backend_detect'])+$detect_interval < current_time( 'timestamp')) )
				{
				$fbut_settings['force_backend_check'] = false;
				$fbut_settings['last_backend_detect'] = current_time( 'timestamp');
				$do_detection = true;
				}
			}
		else
			{
			if ( fbut_bool($fbut_settings['force_frontend_check']) ||  (intval($fbut_settings['last_frontend_detect'] )+$detect_interval < current_time( 'timestamp')) )
				{
				$fbut_settings['force_frontend_check'] = false;
				$fbut_settings['last_frontend_detect']  = current_time( 'timestamp');
				$do_detection = true;
				}
			}
			
		if ($do_detection)
			{
			$tmp_used_buttons = array();
			// set toolbar if exists
			for ($i = 1; $i <= 4; $i++) 
				{
				$tid = "toolbar".$i;
		
				// first capture the buttons from the toolbars
				if (strlen($settings[$tid]) > 0)
					{
					$tmp_toolbar = explode(',', $settings[$tid]);
					$tmp_used_buttons = array_merge_recursive($tmp_used_buttons,$tmp_toolbar);
					}
			
		
				// then set the new toolbar
				if ( array_key_exists($tid, $toolbars)  )
					{
					$settings[$tid] = implode($toolbars[$tid], ',');
					}
				} 
	
			$diff = array_diff($tmp_used_buttons, fbut_all_std_buttons());
	
			// save discovered buttons
			if (count($diff) > 0)
				{
				foreach ($diff  as $key => $value)
					{
					if ( $value != "spellchecker" )
						{
						if ( !array_key_exists($value, $fbut_settings['detected_buttons'])   )
							{
							$fbut_settings['detected_buttons'][$value] = array();
							$fbut_settings['detected_buttons'][$value]['status'] = "new";
							}
					
						if ( is_admin() )
							$fbut_settings['detected_buttons'][$value]['backend_discovered'] = date("Y-m-d H:i", current_time( 'timestamp'));
						else
							$fbut_settings['detected_buttons'][$value]['frontend_discovered'] = date("Y-m-d H:i", current_time( 'timestamp'));
				
						}
					//$fbut_settings['detected_buttons'][$value]['frontend_discovered'] = current_time( 'mysql' );
				
					}
				
				}
			update_option(FBUT_SETTINGS_NAME, $fbut_settings);
			} // if detection	
	
		
	
		//**********************************************************************************
		// Set toolbars
		//**********************************************************************************
		for ($i = 1; $i <= 4; $i++) 
			{
			$tid = "toolbar".$i;
			if ( array_key_exists($tid, $toolbars)  )
				{
				$settings[$tid] = implode($toolbars[$tid], ',');
				}
			}
		//error_log("Frontier Buttons settings: ".print_r($fbut_settings, true));
		//error_log("Tinymce init values: ".print_r($settings, true));
		
		//****************************************************************************************************
		// Apply filter, so it is possible to override toolbar settings
		// filter:			frontier_buttons_is_mobile
		// $settings 		wp_editor settings, incl toolbars 
		// $editor_name  	Name of editor
		// $fbut_settings	Frontier Buttons Settings			
		//****************************************************************************************************
		$settings = apply_filters( 'frontier_buttons_editor_set', $settings, $editor_name, $fbut_settings );
	
		
		return $settings;
		} // if not standard editor
	
	
	
	
	return $settings;
	} // end function
	
add_filter( 'tiny_mce_before_init', 'frontier_buttons_mce_init' ,999, 2);	



//*************************************************************************
// Enable buttons for Teeny editor
//*************************************************************************


function frontier_buttons_teeny_init( $settings, $editor_id  )
	{
	
	// get settings
	$fbut_settings	= get_option(FBUT_SETTINGS_NAME, array());
	
	
	// a cheat to display editor in frontier buttons settings
	if (strpos($editor_id, 'frontier_buttons_') !== false) 
		{
		$editor_name = substr($editor_id, 17);
		}
	else
		{
		$editor_name = FBUT_WP_TEENY_EDITOR;		
		}
	
	
	$toolbars = ( array_key_exists($editor_name, $fbut_settings) ? $fbut_settings[$editor_name] : array() );
	
	//**********************************************************************************
	// Set toolbar (Only 1 in teeny
	//**********************************************************************************
	
	$tid = "toolbar1";
	if ( array_key_exists($tid, $toolbars)  )
		{
		$settings[$tid] = implode($toolbars[$tid], ',');
		}
	
	return $settings;
	} // end function


add_filter( 'teeny_mce_before_init', 'frontier_buttons_teeny_init' ,999, 2);	




//*************************************************************************
// Enable tinyMCE editor for comments
//*************************************************************************

function frontier_buttons_comments_editor( $fields ) 
	{
	$fbut_settings	= get_option(FBUT_SETTINGS_NAME, array());
	
	if ( !fbut_bool($fbut_settings['comment_editor_enable']) )
		return $fields;
	
	$role = fbut_get_editor_role();
	
	$editor_name 		= $fbut_settings['role_editors'][$role]['cmt_editor'];		
	
	$check_editor_types	= fbut_editor_types();
	
	if ( $editor_name == FBUT_WP_STANDARD_EDITOR )
		return $fields;
	
	$tmp_args 		= array();
	$change_editor 	= false;
	
	if ( $editor_name == FBUT_WP_TEENY_EDITOR )
		{
		$tmp_args = array(
			'teeny' 		=> true,
			'textarea_rows' => intval($fbut_settings['comment_editor_lines']),
			'media_buttons' => false,
			'quicktags'		=> false,
			);
		$change_editor = true;
		}
	else
		{
		if ( array_key_exists($editor_name,$check_editor_types) )
			{
			$tmp_args = array(
				'textarea_rows' => intval($fbut_settings['comment_editor_lines']),
				'media_buttons' => false,
				'quicktags'		=> false
				);	
			$change_editor = true;
			}
		}
	
	if ( $editor_name == 'quicktags' )
		{
		$tmp_args = array(
			'textarea_rows' => intval($fbut_settings['comment_editor_lines']),
			'media_buttons' => false,
			'quicktags'		=> true
			);
		$change_editor = true;
		}
	
	
	
	if ($change_editor)
		{
		ob_start();
		wp_editor( '', 'comment', $tmp_args);
		$fields['comment_field'] = ob_get_clean();
		}
	
	/*
	error_log("******* Comment editor Fields ****");
	error_log(print_r($fields,true));
	
	error_log("******* Comment editor Args ****");
	error_log(print_r($tmp_args,true));
	*/
	
	return $fields;	
	
	} // end function		

add_filter( 'comment_form_defaults', 'frontier_buttons_comments_editor' );

//******************************************************************************
// Load tinymce plugins
//******************************************************************************

$bsettings			= get_option(FBUT_SETTINGS_NAME, array());

if ( array_key_exists('load_fbuttons_plugins', $bsettings) && fbut_bool($bsettings["load_fbuttons_plugins"]) )
	{
	add_filter('mce_external_plugins', 'frontier_buttons_mce_plugins'  );

	function frontier_buttons_mce_plugins ($plugins_array ) 
		{
		global $wp_version;
		global $tinymce_version;
	
		$folder 	= 'tinymce.'.fbut_tinymce_plugin_version();
		$plugins 	= array('table', 'searchreplace', 'preview', 'code'); 
	
		if ($tinymce_version >= "4300")
			$plugins[] 	= 'codesample'; 
	
		//Build the response - the key is the plugin name, value is the URL to the plugin JS
		foreach ($plugins as $plugin ) 
			{
			$plugins_array[ $plugin ] = FBUT_URL.'/'.$folder.'/'. $plugin . '/plugin.min.js';
			}
	
		//error_log(print_r($plugins_array,true));

		return $plugins_array;
		}
	}

//*************************************************************************
// Force default visual editor
//*************************************************************************	
function frontier_buttons_default_editor() 
	{
    if (user_can_richedit())
		return 'tinymce';
	}
add_filter( 'wp_default_editor', 'frontier_buttons_default_editor' );	





	
//*************************************************************************
// quicktags
//*************************************************************************	
function frontier_buttons_force_quicktags($editor_settings) 
	{
	$editor_settings['tinymce'] 		= false;
	$editor_settings['quicktags']		= true;

	//error_log('********** QUICKTAGS *********');
	//error_log(print_r($editor_settings, true));


	return $editor_settings;
	}

function frontier_buttons_quicktags_settings($quicktags_settings) 
	{
	// default buttons: strong,em,link,block,del,ins,img,ul,ol,li,code,more,close
	//$quicktags_settings['buttons'] = 'strong,em,link,img,ul,li,close';
	$bsettings						= get_option(FBUT_SETTINGS_NAME, array());
	$quicktags_buttons				= $bsettings[FBUT_QUICKTAGS]['toolbar1'];
	//error_log("******Qtags buttons: ".print_r($quicktags_buttons,true));
	$quicktags_settings['buttons'] 	= implode(",",$quicktags_buttons);
	return $quicktags_settings;
	}



//*************************************************************************
// Force text area
//*************************************************************************	

// Moved to functions php
/*
function frontier_buttons_force_textarea($editor_settings) 
	{
    if (true)
		{
		$editor_settings['tinymce'] 		= false;
		$editor_settings['media_buttons']	= false;
		$editor_settings['quicktags']		= false;
		}
		
		
		return $editor_settings;
	}

add_filter( 'wp_editor_settings', 'frontier_buttons_force_textarea' );
*/

?>