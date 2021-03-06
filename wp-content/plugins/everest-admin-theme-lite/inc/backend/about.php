<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<div class="eat-about-main-wrapper">
    <div class="eat-header">
        <div>
            <div id="eat-fb-root"></div>
            <script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
            <script>!function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location)?'http':'https'; if (!d.getElementById(id)){js = d.createElement(s); js.id = id; js.src = p + '://platform.twitter.com/widgets.js'; fjs.parentNode.insertBefore(js, fjs); }}(document, 'script', 'twitter-wjs');</script>
        </div>
        <div class="eat-header-section">
            <div class="eat-header-left">
                <img src='<?php echo EAT_ADMIN_THEME_IMAGE_DIR; ?>/header-logo.png' alt='Header logo' />
            </div>

            <div class="eat-header-social-link">
                <p class="eat-follow-us"><?php _e('Follow us for new updates', 'everest-admin-theme-lite'); ?></p>
                <div class="fb-like" data-href="https://www.facebook.com/accesspressthemes" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
                <a href="https://twitter.com/accesspressthemes" class="twitter-follow-button" data-show-count="false">Follow @accesspressthemes</a>
            </div>
        </div>
    </div>

    <div class="eat-how-to-use-container">
        <div class="eat-column-one-wrap">
            <div class="eat-panel-body">
                <div class="eat-row">
                    <div class="eat-col-three-third">
                        <h3><?php _e('About Us', 'everest-admin-theme-lite'); ?></h3>
                        <div class="eat-tab-wrapper">
                            <p><strong><?php _e('Everest Admin Theme Lite - #1 WordPress Backend Customizer', 'everest-admin-theme-lite') ?></strong> <?php _e('- is a Free WordPress Plugin by AccessPress Themes.', 'everest-admin-theme-lite'); ?> </p>

                            <p><?php _e('AccessPress Themes is a venture of Access Keys - who has developed hundreds of Custom WordPress themes and plugins for its clients over the years. ', 'everest-admin-theme-lite'); ?></p>

                            <p><strong><?php _e('Everest Admin Theme Lite', 'everest-admin-theme-lite') ?></strong><?php _e(" - makes your WordPress website's admin dashboard look non-WordPess. Though WordPress itself is great, many of you might want to white-label the WP Admin dashboard and give it a complete different look, rearrange the menus and stuff and make it more customized for you and your clients.", 'everest-admin-theme-lite'); ?></p>
                            <div class="eat-halfseperator"></div>
                            <p><strong><?php _e('Please visit our product page for more details here:', 'everest-admin-theme-lite'); ?></strong>
                                <br />
                                <a href="https://accesspressthemes.com/wordpress-plugins/everest-admin-theme-lite" target="_blank">https://accesspressthemes.com/wordpress-plugins/everest-admin-theme-lite</a>
                            </p>
                            <div class="eat-halfseperator"></div>
                            <p><strong><?php _e('Please visit our demo page here:', 'everest-admin-theme-lite'); ?></strong>
                                <br />
                                <a href="http://demo.accesspressthemes.com/wordpress-plugins/everest-admin-theme-lite" target="_blank">http://demo.accesspressthemes.com/wordpress-plugins/everest-admin-theme-lite/</a>
                            </p>



                            <hr />
                            <h3><?php _e('Get in touch', 'everest-admin-theme-lite'); ?></h3>
                            <p><?php _e('If you have any question/feedback, please get in touch:', 'everest-admin-theme-lite'); ?></p>
                            <p>
                                <strong>General enquiries:</strong> <a href="mailto:info@accesspressthemes.com">info@accesspressthemes.com</a><br />
                                <strong>Support:</strong> <a href="mailto:support@accesspressthemes.com">support@accesspressthemes.com</a><br />
                                <strong>Sales:</strong> <a href="mailto:sales@accesspressthemes.com">sales@accesspressthemes.com</a>
                            </p>
                            <div class="eat-seperator"></div>
                            <div class="eat-dottedline"></div>
                            <div class="eat-seperator"></div>
                        </div>
                    </div>
                    <div class="eat-col-three-third">
                        <h3><?php _e('Get social', 'everest-admin-theme-lite'); ?></h3>
                        <p><?php _e('Get connected with us on social media. Facebook is the best place to find updates on our themes/plugins: ', 'everest-admin-theme-lite'); ?></p>

                        <p><strong>Like us on facebook:</strong>
                            <br />
                            <iframe style="border: none; overflow: hidden; width: 700px; height: 250px;" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FAccessPress-Themes%2F1396595907277967&amp;width=842&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true&amp;appId=1411139805828592" width="240" height="150" frameborder="0" scrolling="no"></iframe>
                        </p>

                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
<div id="eat-postbox-container-1" class="eat-postbox-container-1">
    <?php include(EAT_ADMIN_THEME_PLUGIN_DIR . 'inc/backend/eat-sidebar.php'); ?>
</div>
<div class="clearfix"></div>