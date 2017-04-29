<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ajkerbazzar
 */
?>

<?php get_sidebar('footerfull'); ?>
<div id="footer-ads">  
    <div class="container">
        <div class="row">
            <div class="col-xs-12 ab_common_ads mrb10">
                <?php echo do_shortcode('[amads id="678" size="970x90" title="Footer 970x90"]'); ?>
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
                        <p class="copyright">© সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত <a href="http://ajkerbazzar.com/">আজকের বাজার</a>, <?php _e(date('Y')) ?></p>                       
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
