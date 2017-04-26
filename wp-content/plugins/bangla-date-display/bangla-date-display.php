<?php
/*
Plugin Name: Bangla Date Display
Plugin URI: http://i-onlinemedia.net/
Description: Displays Bangla, Gregorian and Hijri date in bangla language via widgets and shortcodes! Options for displaying post/page's time, date, comment count, archive calendar etc in Bangla language.
Author: M.A. IMRAN
Version: 8.5.2
Author URI: http://facebook.com/imran2w
*/

/*
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or ( at your option) any later version. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of ERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details. You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA. Online: http://www.gnu.org/licenses/gpl.txt;
*/

// Bismillah...

defined( 'ABSPATH' ) or die( 'Stop! You can not do this!' );

  $bddp_options = get_option("bddp_options");
  if (!is_array($bddp_options)) {
    $bddp_options = array(
        'cal_wgt' => '0',
        'trans_dt' => '0',
        'trans_cmnt' => '0',
        'trans_num' => '0',
        'trans_cal' => '0' );
   }


include "translator.php";
include "class.banglaDate.php";

function bddp_bangla_time() {
	
	$bddp_options = get_option("bddp_options");
	if (!is_array($bddp_options)) {
		$bddp_options = array( 'bangla_tz' => '6' ); }

	$offset= $bddp_options['bangla_tz']*60*60; //converting hours to seconds.
	$hour = gmdate("G", time()+$offset);
	
	if ($hour >= 5 && $hour <= 5) { echo "ভোর "; }
	else if ($hour >= 6 && $hour <= 11) { echo "সকাল "; }
	else if ($hour >= 12 && $hour <= 14) { echo "দুপুর "; }
	else if ($hour >= 15 && $hour <= 17) { echo "বিকাল "; }
	else if ($hour >= 18 && $hour <= 19) { echo "সন্ধ্যা "; }
	else { echo "রাত "; }
	
	echo en_to_bn(gmdate("g:i", time()+$offset));
	}


function bddp_bn_day() {
	$bddp_options = get_option("bddp_options");
	if (!is_array($bddp_options)) {
		$bddp_options = array( 'bangla_tz' => '6' ); }
		
	echo en_to_bn(gmdate("l", time()+$bddp_options['bangla_tz']*60*60));
	}

function bddp_bangla_date() {

	$bddp_options = get_option("bddp_options");
	if (!is_array($bddp_options)) {
		$bddp_options = array( 'dt_change' => '0', 'separator' => ', ', 'last_word' => '1', 'ord_suffix' => '1' ); }
	if ( $bddp_options['last_word'] == "1" ) { $last_word = " বঙ্গাব্দ"; }

	$bn = new BanglaDate(time(), $bddp_options['dt_change']);
	$bdtday = $bn->get_day();
	$bdtmy = $bn->get_month_year();
	
	$day = sprintf( '%s', implode( ' ', $bdtday ) );
	$month_year = sprintf( '%s', implode( ' ' , $bdtmy ) );
	
	$day_number = array( "১" => "১", "২" => "২", "৩" => "৩", "৪" => "৪", "৫" => "৫", "৬" => "৬", "৭" => "৭", "৮" => "৮", "৯" => "৯", "১০" => "১০", "১১" => "১১", "১২" => "১২", "১৩" => "১৩", "১৪" => "১৪", "১৫" => "১৫", "১৬" => "১৬", "১৭" => "১৭", "১৮" => "১৮", "১৯" => "১৯", "২০" => "২০", "২১" => "২১", "২২" => "২২", "২৩" => "২৩", "২৪" => "২৪", "২৫" => "২৫", "২৬" => "২৬", "২৭" => "২৭", "২৮" => "২৮", "২৯" => "২৯", "৩০" => "৩০", "৩১" => "৩১" );
	
	if ( $bddp_options['ord_suffix'] == "1" ) { echo $day_number[$day] . ' ' . $month_year ; }
	elseif ( $bddp_options['ord_suffix'] == "" ) { echo $day . ' ' . $month_year ; }
}


function bddp_bn_season() {
	$bddp_options = get_option("bddp_options");
	if (!is_array($bddp_options)) {
		$bddp_options = array( 'bangla_tz' => '6' ); }
	
	$bn = new BanglaDate(time()+$bddp_options['bangla_tz']*60*60, 0);
	$bdtmonth = $bn->get_month();
	$month = sprintf( '%s', implode( ' ', $bdtmonth ) );
	
	if($month == "বৈশাখ" || $month == "জ্যৈষ্ঠ") { echo "গ্রীষ্মকাল"; }
	elseif($month == "আষাঢ়" || $month == "শ্রাবণ") { echo "বর্ষাকাল"; }
	elseif($month == "ভাদ্র" || $month == "আশ্বিন") { echo "শরৎকাল"; }
	elseif($month == "কার্তিক" || $month == "অগ্রহায়ণ") { echo "হেমন্তকাল"; }
	elseif($month == "পৌষ" || $month == "মাঘ") { echo "শীতকাল"; }
	else { echo "বসন্তকাল"; }
}


function bddp_bn_en_date() {

    $bddp_options = get_option("bddp_options");
    if (!is_array($bddp_options)) {
		$bddp_options = array(
		'en_tz' => '6',
		'separator' => ', ',
		'last_word' => '1',
		'ord_suffix' => '1' );
		}
		
	if ( $bddp_options['last_word'] == "1" ) { $last_word = " "; }
	
	if ( $bddp_options['ord_suffix'] == "1" ) { $day_number = array( "1" => "১", "2" => "২", "3" => "৩", "4" => "৪", "5" => "৫", "6" => "৬", "7" => "৭", "8" => "৮", "9" => "৯", "10" => "১০", "11" => "১১", "12" => "১২", "13" => "১৩", "14" => "১৪", "15" => "১৫", "16" => "১৬", "17" => "১৭", "18" => "১৮", "19" => "১৯", "20" => "২০", "21" => "২১", "22" => "২২", "23" => "২৩", "24" => "২৪", "25" => "২৫", "26" => "২৬", "27" => "২৭", "28" => "২৮", "29" => "২৯", "30" => "৩০", "31" => "৩১" ); }
	
	elseif ( $bddp_options['ord_suffix'] == "" ) { $day_number = array( "1" => "১", "2" => "২", "3" => "৩", "4" => "৪", "5" => "৫", "6" => "৬", "7" => "৭", "8" => "৮", "9" => "৯", "10" => "১০", "11" => "১১", "12" => "১২", "13" => "১৩", "14" => "১৪", "15" => "১৫", "16" => "১৬", "17" => "১৭", "18" => "১৮", "19" => "১৯", "20" => "২০", "21" => "২১", "22" => "২২", "23" => "২৩", "24" => "২৪", "25" => "২৫", "26" => "২৬", "27" => "২৭", "28" => "২৮", "29" => "২৯", "30" => "৩০", "31" => "৩১" ); }
	
	$offset = $bddp_options['en_tz']*60*60;         //$bddp_options['separator']
	echo $day_number[gmdate("j", time()+$offset)] . " " . en_to_bn(gmdate("F", time()+$offset)); echo ' ' . en_to_bn(gmdate("Y", time()+$offset)); // . $last_word;
}

function bddp_bn_hijri_date() {

    $bddp_options = get_option("bddp_options");
    if (!is_array($bddp_options)) {
		$bddp_options = array(
		'hijri_adjust' => '-0',
		'separator' => ', ',
		'last_word' => '1',
		'ord_suffix' => '1' );
		}
		
	if ( $bddp_options['last_word'] == "1" ) { $last_word = " হিজরী"; }
	
	$offset = $bddp_options['hijri_adjust'] * 60 * 60;
	
	include "uCal.class.php";
	$d = new uCal;
	
	if ( $bddp_options['ord_suffix'] == "1" ) { $day_number = array( "1" => "১", "2" => "২", "3" => "৩", "4" => "৪", "5" => "৫", "6" => "৬", "7" => "৭", "8" => "৮", "9" => "৯", "10" => "১০", "11" => "১১", "12" => "১২", "13" => "১৩", "14" => "১৪", "15" => "১৫", "16" => "১৬", "17" => "১৭", "18" => "১৮", "19" => "১৯", "20" => "২০", "21" => "২১", "22" => "২২", "23" => "২৩", "24" => "২৪", "25" => "২৫", "26" => "২৬", "27" => "২৭", "28" => "২৮", "29" => "২৯", "30" => "৩০", "31" => "৩১" ); }
	
	elseif ( $bddp_options['ord_suffix'] == "" ) { $day_number = array( "1" => "১", "2" => "২", "3" => "৩", "4" => "৪", "5" => "৫", "6" => "৬", "7" => "৭", "8" => "৮", "9" => "৯", "10" => "১০", "11" => "১১", "12" => "১২", "13" => "১৩", "14" => "১৪", "15" => "১৫", "16" => "১৬", "17" => "১৭", "18" => "১৮", "19" => "১৯", "20" => "২০", "21" => "২১", "22" => "২২", "23" => "২৩", "24" => "২৪", "25" => "২৫", "26" => "২৬", "27" => "২৭", "28" => "২৮", "29" => "২৯", "30" => "৩০", "31" => "৩১" ); }
	
	$month_name = array( "Muh" => "মুহাররম", "Saf" => "সফর", "Rb1" => "রবিউল-আউয়াল", "Rb2" => "রবিউস-সানি", "Jm1" => "জমাদিউল-আউয়াল", "Jm2" => "জমাদিউস-সানি", "Raj" => "রজব", "Shb" => "শাবান", "Rmd" => "রমযান", "Shw" => "শাওয়াল", "DhQ" => "জিলক্বদ", "DhH" => "জিলহজ্জ" );
	
	echo $day_number[$d->date("j", time()+$offset)] . " " . $month_name[$d->date("M", time()+$offset)] . ' ' . en_to_bn($d->date("Y", time()+$offset)); // . $last_word;
}


function bddp_header_content() {
?>
	<script type="text/javascript" src="<?php echo WP_PLUGIN_URL; ?>/bangla-date-display/bncalendar.inc.js"></script>
    <style type="text/css">
    <?php include "style.inc.css"; ?>
    </style>
<?php }

function bddp_bn_calendar() {
?>
	<script type="text/javascript">
    document.write(BanglaMas());
    </script>
<?php
}


function bddp_en_bn_calendar() {
?>
	<script type="text/javascript">
    
    var todaydate=new Date();
    todaydate.setTime(todaydate.getTime() +(todaydate.getTimezoneOffset()+360)*60*1000); 
    var curmonth=todaydate.getMonth()+1; //get current month (1-12)
    var curyear=todaydate.getFullYear(); //get current year
    
    document.write(buildCal(curmonth ,curyear, "bc_main", "bc_month", "bc_daysofweek", "bc_days", 1));
    </script>
<?php
}

//================== Widget 01 ========================

function widget_bangla_date_display($args) {
	extract($args);
	
	  	$bddp_wgt1 = get_option("bddp_wgt1");
	if (!is_array($bddp_wgt1)) {
	$bddp_wgt1 = array(
		'title' => 'আজকের দিন-তারিখ',
        'day' => '1',
        'time' => '1',
        'en_date' => '1',
        'hijri_date' => '1',
        'bn_date' => '1',
        'season' => '1' );
	}

	echo $before_widget;
	echo $before_title . $bddp_wgt1['title'] . $after_title;
	echo "<ul>";
	if ($bddp_wgt1['day'] == "1" || $bddp_wgt1['time'] == "1") { echo "<li>"; }
	if ($bddp_wgt1['day'] == "1") { echo do_shortcode('[bangla_day]'); }
	if ($bddp_wgt1['time'] == "1") { echo " ( "; echo do_shortcode('[bangla_time]'); echo " )"; }
	if ($bddp_wgt1['day'] == "1" || $bddp_wgt1['show_time'] == "1") { echo "</li>"; }
	if ($bddp_wgt1['en_date'] == "1") { echo "<li>"; echo do_shortcode('[english_date]'); echo "</li>"; }
	if ($bddp_wgt1['hijri_date'] == "1") { echo "<li>"; echo do_shortcode('[hijri_date]'); echo "</li>"; }
	if ($bddp_wgt1['bn_date'] == "1" || $bddp_wgt1['show_season'] == "1") { echo "<li>"; }
	if ($bddp_wgt1['bn_date'] == "1") { echo do_shortcode('[bangla_date]'); }
	if ($bddp_wgt1['season'] == "1") { echo " ( "; echo do_shortcode('[bangla_season]'); echo " )"; } ?><?php if ($bddp_wgt1['bn_date'] == "1" || $bddp_wgt1['season'] == "1") { echo "</li>"; }
	echo "</ul>";
	echo $after_widget;
}

function bddp_wgt1_control() {
	$bddp_wgt1 = get_option("bddp_wgt1");
	if (!is_array($bddp_wgt1)) {
	$bddp_wgt1 = array(
		'title' => 'আজকের দিন-তারিখ',
        'day' => '1',
        'time' => '1',
        'en_date' => '1',
        'hijri_date' => '1',
        'bn_date' => '1',
        'season' => '1' );
	}
  
	if($_POST['widget_control_submit'])
	{
	  $bddp_wgt1['title'] = htmlspecialchars($_POST['title']);
	  $bddp_wgt1['day'] = htmlspecialchars($_POST['day']);
	  $bddp_wgt1['time'] = htmlspecialchars($_POST['time']);
	  $bddp_wgt1['en_date'] = htmlspecialchars($_POST['en_date']);
	  $bddp_wgt1['hijri_date'] = htmlspecialchars($_POST['hijri_date']);
	  $bddp_wgt1['bn_date'] = htmlspecialchars($_POST['bn_date']);
	  $bddp_wgt1['season'] = htmlspecialchars($_POST['season']);
	  update_option("bddp_wgt1", $bddp_wgt1);
	}
?>

	<p>
	<table width="100%">
	<tr><td> <label for="title">Title: </label></td>
    <td><input type="text" id="title" name="title" value="<?php echo $bddp_wgt1['title'];?>"/> </td></tr>

	<tr><td>Show:</td>
    <td><input type="checkbox" id="day" name="day" value="1" <?php if($bddp_wgt1['day']==1) echo('checked="checked"'); ?>/><label for="day">Day</label></td></tr>

	<tr><td></td>
    <td><input type="checkbox" id="time" name="time" value="1" <?php if($bddp_wgt1['time']==1) echo('checked="checked"'); ?>/><label for="time">Time</label></td></tr>

	<tr><td></td>
    <td><input type="checkbox" id="en_date" name="en_date" value="1" <?php if($bddp_wgt1['en_date']==1) echo('checked="checked"'); ?>/><label for="en_date">Gregorian Date</label></td></tr>

	<tr><td></td>
    <td><input type="checkbox" id="hijri_date" name="hijri_date" value="1" <?php if($bddp_wgt1['hijri_date']==1) echo('checked="checked"'); ?>/><label for="hijri_date">Hijri Date</label></td></tr>

	<tr><td></td>
    <td><input type="checkbox" id="bn_date" name="bn_date" value="1" <?php if($bddp_wgt1['bn_date']==1) echo('checked="checked"'); ?>/><label for="bn_date">Bangla Date</label></td></tr>

	<tr><td></td>
    <td><input type="checkbox" id="season" name="season" value="1" <?php if($bddp_wgt1['season']==1) echo('checked="checked"'); ?>/><label for="season">Season Name</label></td></tr>
	</table>

    <input type="hidden" id="widget_control_submit"  name="widget_control_submit" value="1" />
  </p>
	<p><span style="color: gray;">Go to: Settings > <a href="<?php admin_url(); ?>options-general.php?page=bangla-date-display">Bangla Date Display</a> to change plugin settings.</span></p>
<?php
}

//================== Widget 02 ====================

function widget_bn_calendar($args) {
	extract($args);
	  $bddp_options = get_option("bddp_options");
	  if (!is_array($bddp_options)) {
		  $bddp_options = array(
		  'cal_wgt' => '0' );
		  }
		  
	  $bddp_wgt2 = get_option("bddp_wgt2");
	  if (!is_array($bddp_wgt2)) {
		  $bddp_wgt2 = array(
		  'title' => 'বাংলা ক্যালেন্ডার'
		   );
		  }

	echo $before_widget;
	echo $before_title . $bddp_wgt2['title'] . $after_title;
	echo "<ul>";
	if ($bddp_options['cal_wgt'] == "1") { echo do_shortcode('[bn_calendar]'); }
	elseif ($bddp_options['cal_wgt'] == "0") {
		echo '<p align="center"><span style="color: red;">Widget Disabled!</span><br/><span style="color: green;">Go to "Admin Panel > Settings > Bangla Date Display" to enable this widget.</span></p>';
		}
	echo "</ul>";
	echo $after_widget;
}


function bddp_wgt2_control() {
    $bddp_wgt2 = get_option("bddp_wgt2");
	  if (!is_array($bddp_wgt2)) {
		  $bddp_wgt2 = array(
		  'title' => 'বাংলা ক্যালেন্ডার'
		   );
		  }

    if($_POST['widget_control_submit'])
    {
      $bddp_wgt2['title'] = htmlspecialchars($_POST['title']);
      update_option("bddp_wgt2", $bddp_wgt2);
    }
?>
	<p>
	<table width="100%">
	<tr><td> <label for="title">Title: </label></td>
    <td><input type="text" id="title" name="title" value="<?php echo $bddp_wgt2['title']; ?>" /> </td></tr>
	</table>
    
    <input type="hidden" id="widget_control_submit"  name="widget_control_submit" value="1" />
  </p>
	<p><span style="color: gray;">Go to: Settings > <a href="<?php admin_url(); ?>options-general.php?page=bangla-date-display">Bangla Date Display</a> to change plugin settings.</span></p>
<?php
}

//=============== Widget 03 ======================

function widget_en_bn_calendar($args) {
	extract($args);
	  $bddp_options = get_option("bddp_options");
	  if (!is_array($bddp_options)) {
		  $bddp_options = array(
		  'cal_wgt' => '0' );
		  }
		  
	  $bddp_wgt3 = get_option("bddp_wgt3");
  if (!is_array($bddp_wgt3)) {
	  $bddp_wgt3 = array(
	  'title' => 'বাংলা পঞ্জিকা'
	  );
	  }

	echo $before_widget;
	echo $before_title . $bddp_wgt3['title'] . $after_title;
	echo "<ul>";
	if ($bddp_options['cal_wgt'] == "1") { echo do_shortcode('[en_bn_calendar]'); }
	elseif ($bddp_options['cal_wgt'] == "0") {
		echo '<p align="center"><span style="color: red;">Widget Disabled!</span><br/><span style="color: green;">Go to "Admin Panel > Settings > Bangla Date Display" to enable this widget.</span></p>';
		}
	echo "</ul>";
	echo $after_widget;
}

function bddp_wgt3_control() {
  $bddp_wgt3 = get_option("bddp_wgt3");
  if (!is_array($bddp_wgt3)) {
	  $bddp_wgt3 = array(
	  'title' => 'বাংলা পঞ্জিকা'
	  );
	  }

  if($_POST['widget_control_submit'])
  {
    $bddp_wgt3['title'] = htmlspecialchars($_POST['title']);
    update_option("bddp_wgt3", $bddp_wgt3);
  }

?>
	<p>
	<table width="100%">
	<tr><td> <label for="title">Title: </label></td>
    <td><input type="text" id="title" name="title" value="<?php echo $bddp_wgt3['title'];?>" /> </td></tr>
	</table>

    <input type="hidden" id="widget_control_submit"  name="widget_control_submit" value="1" />
	</p>
	<p><span style="color: gray;">Go to: Settings > <a href="<?php admin_url(); ?>options-general.php?page=bangla-date-display">Bangla Date Display</a> to change plugin settings.</span></p>
<?php
}
 
// ========== Action Links =================
 
function bddp_action_links($links) {
	$links[] = '<a href="' . get_admin_url(null, 'options-general.php?page=bangla-date-display') . '">Settings</a>';
	return $links;
}

	add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'bddp_action_links');

//====================================

if ($bddp_options['cal_wgt'] == "1") { add_action('wp_head', 'bddp_header_content'); }

wp_register_sidebar_widget('bangla_date_display', 'Bangla Date Display', 'widget_bangla_date_display', array('description' => __('Displays Bangla, Gregorian & Hijri date, time, day name and season name.')));
wp_register_widget_control('bangla_date_display', 'Bangla Date Display', 'bddp_wgt1_control');
wp_register_sidebar_widget('monthly_calendar_bangla', 'Monthly Calendar (Bangla)', 'widget_bn_calendar', array('description' => __('Displays calendar of current bangla month.')));
wp_register_widget_control('monthly_calendar_bangla', 'Monthly Calendar (Bangla)', 'bddp_wgt2_control');
wp_register_sidebar_widget('monthly_calendar_bn_en', 'Monthly Calendar (Bangla + Gregorian)', 'widget_en_bn_calendar', array('description' => __('Displays calendar of current bangla+gregorian month.')));
wp_register_widget_control('monthly_calendar_bn_en', 'Monthly Calendar (Bangla + Gregorian)', 'bddp_wgt3_control');

	add_shortcode('bangla_time', 'bddp_bangla_time');
	add_shortcode('bangla_day', 'bddp_bn_day');
	add_shortcode('bangla_date', 'bddp_bangla_date');
	add_shortcode('bangla_season', 'bddp_bn_season');
	add_shortcode('english_date', 'bddp_bn_en_date');
	add_shortcode('hijri_date', 'bddp_bn_hijri_date');
	add_shortcode('bn_calendar', 'bddp_bn_calendar');
	add_shortcode('en_bn_calendar', 'bddp_en_bn_calendar');

    if(is_admin())
    include 'bddp_admin.php';

?>
