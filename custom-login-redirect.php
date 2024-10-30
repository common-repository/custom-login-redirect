<?php
/*
Plugin Name: Custom Login Redirect
Version: 1.0.0
Description: Redirect to custom locations after logging in. Locations like Add New Post/Page, Manage Posts/Pages/Themes/Widgets/Plugins/Comments, Home Page etc.
Author: Pritesh Gupta
Author URI: http://www.priteshgupta.com
Plugin URI: http://www.priteshgupta.com/plugins/custom-login-redirect
License: GPL
*/

/*  Copyright (C) 2011  Pritesh Gupta {http://www.priteshgupta.com/plugins/custom-login-redirect}

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<?php
        add_action('activate_custom_login_redirect.php', 'custom_login_redirect');
		function custom_login_redirect(){
			add_option("custom_login_redirect", '');
			add_option("custom_login_redirect2", '');
			add_option("custom_login_redirect3", '');
			add_option("custom_login_redirect4", '');
			add_option("custom_login_redirect5", '');
			add_option("custom_login_redirect6", '');
			add_option("custom_login_redirect7", '');
			add_option("custom_login_redirect8", '');
			add_option("custom_login_redirect9", '');
			add_option("custom_login_redirect10", '');
			add_option("custom_login_redirect_display", 'no');
			add_option("custom_login_redirect_display2", 'no');
			add_option("custom_login_redirect_display3", 'no');
			add_option("custom_login_redirect_display4", 'no');
			add_option("custom_login_redirect_display5", 'no');
			add_option("custom_login_redirect_display6", 'yes');
			add_option("custom_login_redirect_display7", 'yes');
			add_option("custom_login_redirect_display8", 'yes');
			add_option("custom_login_redirect_display9", 'yes');
			add_option("custom_login_redirect_display10", 'yes');
			add_option("custom_login_redirect_display11", 'yes');
			add_option("custom_login_redirect_display12", 'yes');
			add_option("custom_login_redirect_display13", 'yes');
			add_option("custom_login_redirect_display14", 'yes');
			add_option("custom_login_redirect_display15", 'yes');
			add_option("custom_login_redirect_display16", 'yes');
			add_option("custom_login_redirect_display17", 'yes');
			add_option("custom_login_redirect_display18", 'yes');
			add_option("custom_login_redirect_display19", 'yes');
			add_option("custom_login_redirect_display20", 'yes');
			add_option("custom_login_redirect_display21", 'yes');
		}
	add_action('wp_head', 'custom_login_redirect_session');
	function custom_login_redirect_session(){$_SESSION['custom_login_redirect_nri'] = 0;}
	
    add_action('admin_menu', 'custom_login_redirect_menu');
    function custom_login_redirect_menu() {
        if (function_exists('add_options_page')) {
            add_options_page('Custom Login Redirect', 'Custom Login Redirect', 9, 'custom_login_redirect', 'custom_login_redirect_display');
        }
    }
    function custom_login_redirect_display(){
		
        if($_POST['Submit']){
			$custom_login_redirect = $_POST['custom_login_redirect'];
			$custom_login_redirect2 = $_POST['custom_login_redirect2'];
			$custom_login_redirect3 = $_POST['custom_login_redirect3'];
			$custom_login_redirect4 = $_POST['custom_login_redirect4'];
			$custom_login_redirect5 = $_POST['custom_login_redirect5'];
			$custom_login_redirect6 = $_POST['custom_login_redirect6'];
			$custom_login_redirect7 = $_POST['custom_login_redirect7'];
			$custom_login_redirect8 = $_POST['custom_login_redirect8'];
			$custom_login_redirect9 = $_POST['custom_login_redirect9'];
			$custom_login_redirect10 = $_POST['custom_login_redirect10'];
			update_option("custom_login_redirect", $custom_login_redirect);
			update_option("custom_login_redirect2", $custom_login_redirect2);
			update_option("custom_login_redirect3", $custom_login_redirect3);
			update_option("custom_login_redirect4", $custom_login_redirect4);
			update_option("custom_login_redirect5", $custom_login_redirect5);
			update_option("custom_login_redirect6", $custom_login_redirect6);
			update_option("custom_login_redirect7", $custom_login_redirect7);
			update_option("custom_login_redirect8", $custom_login_redirect8);
			update_option("custom_login_redirect9", $custom_login_redirect9);
			update_option("custom_login_redirect10", $custom_login_redirect10);
			update_option("custom_login_redirect_display", $_POST['custom_login_redirect_display']);
			update_option("custom_login_redirect_display2", $_POST['custom_login_redirect_display2']);
			update_option("custom_login_redirect_display3", $_POST['custom_login_redirect_display3']);
			update_option("custom_login_redirect_display4", $_POST['custom_login_redirect_display4']);
			update_option("custom_login_redirect_display5", $_POST['custom_login_redirect_display5']);
			update_option("custom_login_redirect_display6", $_POST['custom_login_redirect_display6']);
			update_option("custom_login_redirect_display7", $_POST['custom_login_redirect_display7']);
			update_option("custom_login_redirect_display8", $_POST['custom_login_redirect_display8']);
			update_option("custom_login_redirect_display9", $_POST['custom_login_redirect_display9']);
			update_option("custom_login_redirect_display10", $_POST['custom_login_redirect_display10']);
			update_option("custom_login_redirect_display11", $_POST['custom_login_redirect_display11']);
			update_option("custom_login_redirect_display12", $_POST['custom_login_redirect_display12']);
			update_option("custom_login_redirect_display13", $_POST['custom_login_redirect_display13']);
			update_option("custom_login_redirect_display14", $_POST['custom_login_redirect_display14']);
			update_option("custom_login_redirect_display15", $_POST['custom_login_redirect_display15']);
			update_option("custom_login_redirect_display16", $_POST['custom_login_redirect_display16']);
			update_option("custom_login_redirect_display17", $_POST['custom_login_redirect_display17']);
			update_option("custom_login_redirect_display18", $_POST['custom_login_redirect_display18']);
			update_option("custom_login_redirect_display19", $_POST['custom_login_redirect_display19']);
			update_option("custom_login_redirect_display20", $_POST['custom_login_redirect_display20']);
			update_option("custom_login_redirect_display21", $_POST['custom_login_redirect_display21']);
			echo '<div id="message" class="updated fade"><p>Update Successful!</p></div>';
		}
		$output = '<form method="post" action="'.$_SERVER['REQUEST_URI'].'">';
		?>
	<style type="text/css">
	.author{
	text-decoration:none;
	}
	table{
	width:60%;
	border-collapse:collapse;
	table-layout:auto;
	vertical-align:top;
	margin-bottom:15px;
	border:1px solid #CCCCCC;
	}
	table thead th{
	color:#FFFFFF;
	background-color:#666666;
	border:1px solid #CCCCCC;
	border-collapse:collapse;
	text-align:center;
	table-layout:auto;
	vertical-align:middle;
	}
	table tbody td{
	vertical-align:top;
	border-collapse:collapse;
	border-left:1px solid #CCCCCC;
	border-right:1px solid #CCCCCC;
	}
	table thead th, table tbody td{
	padding:5px;
	border-collapse:collapse;
	}
	table tbody tr.light{
	color:#333333;
	background-color:#F7F7F7;
	}
	table tbody tr.dark{
	color:#333333;
	background-color:#E8E8E8;
	border-top:1px solid #CCCCCC;
	border-bottom:1px solid #CCCCCC;
	font-weight:bold;
	}
	input[type=text]{
	background: #cecdcd; /* Fallback */
	background: rgba(206, 205, 205, 0.6);
	border: 2px solid #666;
	padding: 6px 5px;
	line-height: 1em;
	-webkit-box-shadow: inset -1px 1px 1px rgba(255, 255, 255, 0.65);
	-moz-box-shadow: inset -1px 1px 1px rgba(255, 255, 255, 0.65);
	box-shadow: inset -1px 1px 1px rgba(255, 255, 255, 0.65);
	-webkit-border-radius: 8px !important; 
	-moz-border-radius: 8px !important;
	border-radius: 8px !important; 
	margin-bottom: 10px;
	width: 300px;
	}
	select{
	background: #cecdcd; /* Fallback */
	background: rgba(206, 205, 205, 0.6);
	border: 2px solid #666;
	padding: 6px 5px;
	height: 2.8em !important;
	-webkit-box-shadow: inset -1px 1px 1px rgba(255, 255, 255, 0.65);
	-moz-box-shadow: inset -1px 1px 1px rgba(255, 255, 255, 0.65);
	box-shadow: inset -1px 1px 1px rgba(255, 255, 255, 0.65);
	-webkit-border-radius: 8px !important; 
	-moz-border-radius: 8px !important;
	border-radius: 8px !important; 
	margin-bottom: 10px;
	width: 300px;
	text-align:center;
	}
	</style>
		<?php
		$output .= '<div class="wrap">'."\n";
		$output .= '	<div id="icon-plugins" class="icon32"></div><h2>Custom Login Redirect Plugin Options</h2>'."\n";
		$output .= '	WordPress Plugin by <strong><a href="http://www.priteshgupta.com" target="_blank" class="author">Pritesh Gupta</a></strong> || <strong><a href="http://www.priteshgupta.com/plugins/custom-login-redirect" target="_blank" class="author">Visit Release Page</a></strong>'."\n";
		$output .= '	<br /> <br />'."\n";
		$output .= '	<table border="0" cellspacing="0" cellpadding="6">'."\n";
		$custom_login_redirect_display = get_option('custom_login_redirect_display', 'no');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Custom Location 1?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$output .= '		<tr class="light">'."\n";
		$output .= '			<td width="75%">Enter text to be displayed for Custom Location 1:  </td>'."\n";
		$output .= '			<td width="25%"><input type="text" name="custom_login_redirect" value="'.get_option('custom_login_redirect', '').'" /></td>';
		$output .= '		</tr>'."\n";
		$output .= '		<tr class="light">'."\n";
		$output .= '			<td width="50%">Enter URL for the Custom Location 1:  </td>'."\n";
		$output .= '			<td><input type="text" name="custom_login_redirect2" value="'.get_option('custom_login_redirect2', '').'" /></td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display2 = get_option('custom_login_redirect_display2', 'no');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Custom Location 2?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display2">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display2 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display2 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$output .= '		<tr class="light">'."\n";
		$output .= '			<td width="75%">Enter text to be displayed for Custom Location 2:  </td>'."\n";
		$output .= '			<td width="25%"><input type="text" name="custom_login_redirect3" value="'.get_option('custom_login_redirect3', '').'" /></td>';
		$output .= '		</tr>'."\n";
		$output .= '		<tr class="light">'."\n";
		$output .= '			<td width="50%">Enter URL for the Custom Location 2:  </td>'."\n";
		$output .= '			<td><input type="text" name="custom_login_redirect4" value="'.get_option('custom_login_redirect4', '').'" /></td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display3 = get_option('custom_login_redirect_display3', 'no');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Custom Location 3?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display3">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display3 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display3 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$output .= '		<tr class="light">'."\n";
		$output .= '			<td width="75%">Enter text to be displayed for Custom Location 3:  </td>'."\n";
		$output .= '			<td width="25%"><input type="text" name="custom_login_redirect5" value="'.get_option('custom_login_redirect5', '').'" /></td>';
		$output .= '		</tr>'."\n";
		$output .= '		<tr class="light">'."\n";
		$output .= '			<td width="50%">Enter URL for the Custom Location 3:  </td>'."\n";
		$output .= '			<td><input type="text" name="custom_login_redirect6" value="'.get_option('custom_login_redirect6', '').'" /></td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display4 = get_option('custom_login_redirect_display4', 'no');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Custom Location 4?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display4">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display4 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display4 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$output .= '		<tr class="light">'."\n";
		$output .= '			<td width="75%">Enter text to be displayed for Custom Location 4:  </td>'."\n";
		$output .= '			<td width="25%"><input type="text" name="custom_login_redirect7" value="'.get_option('custom_login_redirect7', '').'" /></td>';
		$output .= '		</tr>'."\n";
		$output .= '		<tr class="light">'."\n";
		$output .= '			<td width="50%">Enter URL for the Custom Location 4:  </td>'."\n";
		$output .= '			<td><input type="text" name="custom_login_redirect8" value="'.get_option('custom_login_redirect8', '').'" /></td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display5 = get_option('custom_login_redirect_display5', 'no');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Custom Location 5?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display5">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display5 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display5 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$output .= '		<tr class="light">'."\n";
		$output .= '			<td width="75%">Enter text to be displayed for Custom Location 5:  </td>'."\n";
		$output .= '			<td width="25%"><input type="text" name="custom_login_redirect9" value="'.get_option('custom_login_redirect9', '').'" /></td>';
		$output .= '		</tr>'."\n";
		$output .= '		<tr class="light">'."\n";
		$output .= '			<td width="50%">Enter URL for the Custom Location 5:  </td>'."\n";
		$output .= '			<td><input type="text" name="custom_login_redirect10" value="'.get_option('custom_login_redirect10', '').'" /></td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display6 = get_option('custom_login_redirect_display6', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Dashboard Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display6">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display6 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display6 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display7 = get_option('custom_login_redirect_display7', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Last Page Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display7">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display7 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display7 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display8 = get_option('custom_login_redirect_display8', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Front Page Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display8">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display8 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display8 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display9 = get_option('custom_login_redirect_display9', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Add New Post Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display9">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display9 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display9 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display10 = get_option('custom_login_redirect_display10', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Manage Posts Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display10">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display10 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display10 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display11 = get_option('custom_login_redirect_display11', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Add New Page Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display11">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display11 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display11 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display12 = get_option('custom_login_redirect_display12', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Manage Pages Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display12">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display12 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display12 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display13 = get_option('custom_login_redirect_display13', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Upload New Media Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display13">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display13 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display13 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display14 = get_option('custom_login_redirect_display14', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Media Library Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display14">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display14 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display14 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display15 = get_option('custom_login_redirect_display15', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Edit Comments Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display15">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display15 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display15 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display16 = get_option('custom_login_redirect_display16', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Manage Themes Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display16">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display16 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display16 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display17 = get_option('custom_login_redirect_display17', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Manage Widgets Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display17">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display17 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display17 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display18 = get_option('custom_login_redirect_display18', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Edit Themes Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display18">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display18 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display18 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display19 = get_option('custom_login_redirect_display19', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Manage Plugins Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display19">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display19 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display19 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display20 = get_option('custom_login_redirect_display20', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable Install Plugins Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display20">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display20 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display20 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$custom_login_redirect_display21 = get_option('custom_login_redirect_display21', 'yes');
		$output .= '		<tr class="dark">'."\n";
		$output .= '			<td width="75%">Enable General Settings Option?</td>'."\n";
		$output .= '			<td width="25%">';
		$output .= '				<select name="custom_login_redirect_display21">'."\n";
		$output .= '					<option value="no"';if ($custom_login_redirect_display21 == 'no') $output .= 'selected="selected"';$output .= '>No</option>'."\n";
		$output .= '					<option value="yes"';if ($custom_login_redirect_display21 == 'yes') $output .= 'selected="selected"';$output .= '>Yes</option>'."\n";
		$output .= '				</select>'."\n";
		$output .= '			</td>';
		$output .= '		</tr>'."\n";
		$output .= '	</table>'."\n";
		$output .= "\n";
		$output .= '				<input type="submit" name="Submit" class="button-primary" value="Update Options &raquo;" />&nbsp;&nbsp;'."\n";
		$output .= '</form>';
		$output .= '</div>'."\n";
        echo $output;
    }
?>
<?php function custom_login_redirect_select() { ?>
<style type="text/css">
	select{
	font-size: 20px;
	color: #555;
	padding: 6px 5px;
	width: 262px;
	border: 1px solid #E5E5E5;
	}	
</style>
<p>
  <label> Choose Location
    <select name="login_location">
	  <option value="">Default</option>
    <?php if (get_option('custom_login_redirect_display6','yes') == 'yes'){ ?>
	  <option value="<?php home_url ?>wp-admin/">Dashboard</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display7','yes') == 'yes'){ ?>
      <option value="<?php echo $_SERVER['HTTP_REFERER'] ?>">Last Page</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display8','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>">Front Page</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display9','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>wp-admin/post-new.php">Add New Post</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display10','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>wp-admin/edit.php">Manage Posts</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display11','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>wp-admin/post-new.php?post_type=page">Add New Page</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display12','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>wp-admin/edit.php?post_type=page">Manage Pages</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display13','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>wp-admin/media-new.php">Upload New Media</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display14','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>wp-admin/upload.php">Media Library</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display15','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>wp-admin/edit-comments.php">Edit Comments</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display16','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>wp-admin/themes.php">Manage Themes</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display17','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>wp-admin/widgets.php">Manage Widgets</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display18','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>wp-admin/theme-editor.php">Edit Themes</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display19','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>wp-admin/plugins.php">Manage Plugins</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display20','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>wp-admin/plugin-install.php">Install Plugins</option>
	<?php } ?>
    <?php if (get_option('custom_login_redirect_display21','yes') == 'yes'){ ?>
      <option value="<?php home_url ?>wp-admin/options-general.php">General Settings</option>
  	<?php } ?>
    <?php if (get_option("custom_login_redirect_display") == 'yes'){ ?>
      <option value="<?php echo get_option("custom_login_redirect2") ?>"><?php echo get_option("custom_login_redirect") ?></option>
	<?php } ?>
    <?php if (get_option("custom_login_redirect_display2") == 'yes'){ ?>
      <option value="<?php echo get_option("custom_login_redirect4") ?>"><?php echo get_option("custom_login_redirect3") ?></option>
	<?php } ?>
    <?php if (get_option("custom_login_redirect_display3") == 'yes'){ ?>
      <option value="<?php echo get_option("custom_login_redirect6") ?>"><?php echo get_option("custom_login_redirect5") ?></option>
	<?php } ?>
    <?php if (get_option("custom_login_redirect_display4") == 'yes'){ ?>
      <option value="<?php echo get_option("custom_login_redirect8") ?>"><?php echo get_option("custom_login_redirect7") ?></option>
	<?php } ?>
    <?php if (get_option("custom_login_redirect_display5") == 'yes'){ ?>
      <option value="<?php echo get_option("custom_login_redirect10") ?>"><?php echo get_option("custom_login_redirect9") ?></option>
	<?php } ?>
	    </select>
  </label>
</p>
<br/>
<?php } function add_login_redirect($redirect_to, $request, $user)
{$location = $_POST['login_location'];
return $location;}
add_action('login_form','custom_login_redirect_select');
if ( (isset($_GET['action']) && $_GET['action'] != 'logout') || (isset($_POST['login_location']) && !empty($_POST['login_location'])) ) 
add_filter("login_redirect", "add_login_redirect", 10, 3); ?>