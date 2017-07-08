<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ajkerbazzar
 */
?>

<?php 
get_sidebar('footerfull'); 
require get_template_directory() . '/inc/settings.php';
?>
<div id="ftrads" class="hidden-xs-down">  
    <div class="container">
        <div class="row">
            <div class="col-xs-12 ab_common_ads mrb10">
                <?php echo do_shortcode('[amads id="678" size="970x90" title="Footer 970x90"]'); ?>
            </div>
        </div>
    </div>
</div>
<div class="bottom-category">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">প্রচ্ছদ</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_saradesh)); ?>">সারাদেশ</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_stockmarket)); ?>">পুঁজিবাজার</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_bank)); ?>">ব্যাংক-বীমা</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_technology)); ?>">প্রযুক্তি</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_telecom)); ?>">টেলিকম</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_agribusiness)); ?>">এগ্রিবিজনেস</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_energy_power)); ?>">এনার্জি-পাওয়ার</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_communication)); ?>">যোগাযোগ</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_porjoton)); ?>">পর্যটন</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_abason)); ?>">আবাসন নির্মাণ</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_garments)); ?>">গার্মেন্টস-ক্লথিং</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_export)); ?>">রপ্তানি-বাণিজ্য</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_shilpo)); ?>">শিল্প বাজার</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_economy)); ?>">অর্থনীতি</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_educationbusiness)); ?>">এডুবাজার</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_health_pharma)); ?>">হেলথ বাজার</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_job)); ?>">চাকরির বাজার</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_sports)); ?>">খেলার বাজার</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_showbiz)); ?>">শোবিজ</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_life_style)); ?>">লাইফস্টাইল</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_fashion)); ?>">ফ্যাশন-গ্লামার</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_sahitto)); ?>">সাহিত্য-সংস্কৃতি</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_politics)); ?>">রাজনীতি</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_district)); ?>">জেলার সংবাদ</a></li>                  
                    <li><a href="<?php echo esc_url(get_category_link($cat_international)); ?>">আন্তর্জাতিক</a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_corporate_news)); ?>">কর্পোরেট নিউজ </a></li>
                    <li><a href="<?php echo esc_url(get_category_link($cat_law)); ?>">আইনের কথা </a></li>                 

                    <?php
//                    wp_list_categories(array(
//                        'orderby' => '',
//                        'title_li' => '',
//                        'include' => array(14,2, 8, 85, 66, 68, 69, 67, 70, 71,5,6,3,75,73,74,76,21,44,79,77,15,99)
//                    ));
                    ?> 
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <p class="ab-about">
                    <b>Ajker Bazar</b> is the First One Stop Media in Bangladesh. We are going to start several 
                    media wings under same roof. Internet Business Television ABTV, Internet Business 
                    Radio AB Radio, Internet Video Portal, Business News Portal and Daily Business News 
                    Paper-The Daily <b>Ajker Bazar</b> will be brought under single portfolio to establish 
                    first of its kind integrated media organization.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="wrapper" id="wrapper-footer">  
    <div class="container">        
        <div class="row">
            <div class="col-md-12">
                <footer id="colophon" class="site-footer" role="contentinfo">
                    <div class="site-info">                       
                        <p class="copyright">&COPY; স্বত্ব <a title="ajkerbazar" href="http://ajkerbazzar.com/">আজকের বাজার</a> ২০১৬ - ২০১৭ </p>                       
                        <p class="editor-publisher">সম্পাদক ও প্রকাশক: সৈয়দ আতিয়ার রহমান</p>
                        <p class="office-address"><span>২৭ লিংক রোড (৪র্থ তলা)</span><br> বাংলা মোটর, ঢাকা ১০০০</p>
                        <p class="offcie-contact"><span class="email">ফোনঃ৯৬৬৪৪২৬-২৭, ফ্যাক্সঃ৯৬৬৪৪২৭</span>
                            <br>ইমেইলঃ editor@ajkerbazzar.com</p>
                    </div><!-- .site-info -->
                </footer><!-- #colophon -->
            </div><!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-92011789-1', 'auto');
    ga('send', 'pageview');

</script>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#facebookcontainer').slideDown(2000);
    });
    jQuery(function () {
        var container = jQuery("#facebookcontainer");

        jQuery(".fb_close_box").click(
                function (event) {
                    event.preventDefault();

                    if (container.is(":visible")) {
                        container.slideUp(2000);
                    }
                    else {
                        container.slideDown(2000);
                    }
                }
        );
    });
</script>
<div class="fix facebooklike hidden-xs-down">
    <div id="facebookcontainer">
        <div class="fb_close_box"></div>
        <div id="inner_facebook">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdailyajkerbazar%2F&tabs&width=190&height=230&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=483739645115108" width="200" height="230" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
    </div>
</div>
</body>

</html>
