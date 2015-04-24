<?php
global $options;
foreach ($options as $value) {
    if (get_settings($value['id']) === FALSE) {
        $$value['id'] = $value['std'];
    } else {
        $$value['id'] = get_settings($value['id']);
    }
}
?>

</div> <!-- end content-wrap -->
</div> <!-- end main-wrap -->

<?php
if ($wpzoom_misc_analytics != '' && $wpzoom_misc_analytics_select == 'Yes') {
    echo stripslashes($wpzoom_misc_analytics);
}
?>

<?php if (is_home() && $paged < 2) { ?>
    <script type="text/javascript">
        $(function() {
            $("#navi ul").tabs("#panes > div", {
                effect: 'fade',
                fadeOutSpeed: 500,
                rotate: true
            }).slideshow({
                clickable: false,
                autoplay: <?php if ($wpzoom_slideshow_auto == 'Yes') { ?>true<?php } if ($wpzoom_slideshow_auto == 'No') { ?>false<?php } ?>,
                interval: <?php echo "$wpzoom_slideshow_speed"; ?>
            });
        });
    </script>
<?php } ?>

<div id="footer">

    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_bar")) : ?>
    <?php endif; ?>

</div> <!-- end footer -->

<!-- footer jquery effects -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#footer #logos img").mouseover(function() {
            $(this).attr("src", $(this).attr("src").replace("grey", "color"));
        }).mouseout(function(){
            $(this).attr("src", $(this).attr("src").replace("color", "grey"));
        });
    });
</script>

<div class="clear"></div>
<?php wp_footer(); ?>
</div> <!-- end page-wrap -->

</body>
</html>