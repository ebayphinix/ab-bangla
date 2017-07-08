<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

date_default_timezone_set('Asia/Dhaka');
$__banglaDay1 = array('5' => 'শুক্রবার', '6' => 'শনিবার', '0' => 'রবিবার', '1' => 'সোমবার', '2' => 'মঙ্গলবার', '3' => 'বুধবার', '4' => 'বৃহষ্পতিবার');
$__banglaDay = array('Fri' => 'শুক্রবার', 'Sat' => 'শনিবার', 'Sun' => 'রবিবার', 'Mon' => 'সোমবার', 'Tue' => 'মঙ্গলবার', 'Wed' => 'বুধবার', 'Thu' => 'বৃহষ্পতিবার');
$__banglaNumber = array('0' => '০', '1' => '১', '2' => '২', '3' => '৩', '4' => '৪', '5' => '৫', '6' => '৬', '7' => '৭', '8' => '৮', '9' => '৯');
$__banglaGerMonth = array('01' => 'জানুয়ারী', '02' => 'ফেব্রুয়ারী', '03' => 'মার্চ', '04' => 'এপ্রিল', '05' => 'মে', '06' => 'জুন', '07' => 'জুলাই', '08' => 'আগস্ট', '09' => 'সেপ্টেম্বর', '10' => 'অক্টোবর', '11' => 'নভেম্বর', '12' => 'ডিসেম্বর');
$__banglaMonth = array('বৈশাখ', 'জৈষ্ঠ', 'আষাঢ়', 'শ্রাবণ', 'ভাদ্র', 'আশ্বিন', 'কার্তিক', 'অগ্রাহায়ন', 'পৌষ', 'মাঘ', 'ফাল্গুন', 'চৈত্র');

function _banglaDay($v, $isShort = false)
{
    global $__banglaDay;
    return $isShort ? rtrim($__banglaDay[$v], 'বার') : $__banglaDay[$v];
}

function _banglaNumber($v)
{
    global $__banglaNumber;
    for ($i = 0; $i < 10; $i++)
        $v = str_replace("$i", $__banglaNumber[$i], $v);
    return $v;
}

function _banglaMonth($v)
{
    global $__banglaGerMonth;
    return $__banglaGerMonth[$v];
}

function excerpt($limit = 20)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
    return $excerpt;
}

function content($limit)
{
    $content = explode(' ', get_the_content(), $limit);
    if (count($content) >= $limit) {
        array_pop($content);
        $content = implode(" ", $content) . '...';
    } else {
        $content = implode(" ", $content);
    }
    $content = preg_replace('/[.+]/', '', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

//Get Featured Image URL 
function wp_get_thumbnail_url($id, $size = 'thumbnail')
{
    //large , medium  ,thumbnail
    if (has_post_thumbnail($id)) {
        $imgArray = wp_get_attachment_image_src(get_post_thumbnail_id($id), $size);
        $imgURL = $imgArray[0];
        return $imgURL;
    } else {
        return false;
    }
}

function read_more($post_id, $hidden=false)
{
    $class =($hidden)?'':' hidden-xs-down';
    return '<a class="readmore pull-right'. $class.'" href="' . get_permalink($post_id) . '"> বিস্তারিত...</a>';
}

function read_more_lalign($post_id)
{
    return '<a class="readmore" href="' . get_permalink($post_id) . '"> বিস্তারিত...</a>';
}

function category_read_more($category_id, $more='')
{
    $more = empty($more)?' আরো খবর':$more.' আরো খবর';
    return '<a class="readmore pull-right" href="' . esc_url(get_category_link($category_id)) . '">'. $more . '</a>';
}
function category_link($category_id, $catname='')
{
    $catname = empty($catname)?'':$catname;
    return '<a href="' . esc_url(get_category_link($category_id)) . '">'. $catname . '</a>';
}
function get_custom_field_values($key = 'youtube', $post_id)
{
    $matches = '';
    $youtube = get_post_custom_values($key, $post_id);
    preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $youtube[0], $matches);
    $iframe = $matches[0];
    return $iframe;
}
/**
* Returns ID of top-level parent category, or current category if you are viewing a top-level
*
* @param    string      $catid      Category ID to be checked
* @return   string      $catParent  ID of top-level parent category
*/
function smart_category_top_parent_id ($catid) {
    while ($catid) {
        $cat = get_category($catid); // get the object for the catid
        $catid = $cat->category_parent; // assign parent ID (if exists) to $catid
          // the while loop will continue whilst there is a $catid
          // when there is no longer a parent $catid will be NULL so we can assign our $catParent
        $catParent = $cat->cat_ID;
    }
    return $catParent;
}