<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package me
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer_logo   wow fadeInUp animated">
                        <img  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center   wow fadeInUp animated">
                    <div class="social">
                        <h2>Follow Me on Here</h2>
                               <div class="social-links">
        <a target="_blank" class="twitter social-link" data-placement="top" data-toggle="tooltip" href="https://twitter.com/EmadShtay" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a> <a target="_blank" class="facebook social-link" data-placement="top" data-toggle="tooltip" href="https://www.facebook.com/EmadDev" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a> <a target="_blank" class="google-plus social-link" data-placement="top" data-toggle="tooltip" href="https://plus.google.com/u/1/103130301238569963705" title="" data-original-title="Google+"><i class="fa fa-google-plus"></i></a> <a target="_blank" class="linkedin social-link" data-placement="top" data-toggle="tooltip" href="https://www.linkedin.com/in/emadshtay/" title="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a> <a target="_blank" class="dribbble social-link" data-placement="top" data-toggle="tooltip" href="https://www.instagram.com/emad_web_developer/" title="" data-original-title="Instagram"><i class="fa fa-instagram"></i></a> <a target="_blank" class="pinterest social-link" data-placement="top" data-toggle="tooltip" href="https://www.youtube.com/channel/UC_7wwIjhtzlQTRwdJOiy3Uw" title="" data-original-title="Youtube"><i class="fa fa-youtube"></i></a>
        <a target="_blank" class="github social-link" data-placement="top" data-toggle="tooltip" href="https://github.com/Emad-Shtay" title="" data-original-title="Github"><i class="fa fa-github"></i></a>
        <a target="_blank" class="instagram social-link" data-placement="top" data-toggle="tooltip" href="https://www.instagram.com/emad_web_developer/" title="" data-original-title="Instagram"><i class="fa fa-instagram"></i></a>
       
        </div>
                    </div>
                </div>
            </div>
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- =========================
     SCRIPTS 
============================== -->

<script src="<?php echo esc_url(get_template_directory_uri());?>/js/jquery.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/jquery.nicescroll.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/owl.carousel.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/wow.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/script.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/lightbox.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/wa-mediabox.min.js"></script>




    <!--   <?php if (is_page('1467')) { ?>
               <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.min.js"></script>
               <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-ui.min.js"></script>
               <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jGravity-min.js"></script>
               <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/app.js"></script>
    <?php } ?> -->
    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
    (function () {
    var options = {
    facebook: "111233752656501", // Facebook page ID
    whatsapp: "+79626493833", // WhatsApp number
    email: "info@emadsh.com", // Email
    call: "+7 962 649-38-33", // Call phone number
    company_logo_url: "//storage.whatshelp.io/widget/1c/1c0c/1c0c0ff054a29a57f2fbc769184b1bb4/14141617_147506662362543_5277858233954793301_n.jpg", // URL of company logo (png, jpg, gif)
    greeting_message: "Hello, how can help you? Just send me a message now to get assistance.", // Text of greeting message
    call_to_action: "Message Me", // Call to action
    button_color: "#FF3366", // Color of button
    position: "right", // Position may be 'right' or 'left'
    order: "facebook,whatsapp,call,email" // Order of buttons
    };
    var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
    </script>
    <!-- /WhatsHelp.io widget --> 

</body>
</html>
