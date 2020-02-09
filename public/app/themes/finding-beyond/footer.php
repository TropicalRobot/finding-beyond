    </main>

    <?php echo tev_partial('partials/modals/search'); ?>

    <?php wp_footer(); ?>

    <footer class="site-footer">
        <div class="container">
            <div class="site-footer__container">
                <div class="site-footer__col">
                    <div class="site-footer__copy">
                        &copy; <?php echo date('Y'); ?>
                        <span class="color--primary text-uppercase"><?php _e('Finding Beyond'); ?></span>
                    </div>
                    <div class="footer-nav-wrapper">
                        <?php wp_nav_menu([
                            "theme_location" => "footer_links",
                            "container" => "nav",
                            "container_class" => "footer-nav",
                            "menu_class"      => "footer-nav__menu list--unstyled"
                            ]);?>
                    </div>
                </div>
                <div class="site-footer__col site-footer__social">
                    <a class="social-icon-circled link-clean" href="https://www.facebook.com/findingbeyond/" target="_blank"><span class="icon-facebook"></span></a>
                    <a class="social-icon-circled link-clean" href="https://www.instagram.com/findingbeyond/" target="_blank"><span class="icon-instagram"></span></a>
                    <a class="social-icon-circled link-clean" href="https://twitter.com/FindingBeyond" target="_blank"><span class="icon-twitter"></span></a>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        var cid = '20';
        window.onload = function() {
          var adbackhost = (("https:" == document.location.protocol) ? "https://s.ad-back.net/adbackplugin" : "http://n.ad-back.net/adbackplugin");
          var hostname = window.location.href;
          var dataString = "?s=1&c="+cid+"&p="+hostname;
          var iframesrc = adbackhost+dataString;

          var tempIFrame=document.createElement("iframe");
          tempIFrame.setAttribute("id","ADBACKPlugFrame");
          tempIFrame.setAttribute("name","ADBACKPlugFrame");
          tempIFrame.setAttribute("src",iframesrc);
          tempIFrame.style.border='0px';
          tempIFrame.style.width='0px';
          tempIFrame.style.height='0px';
          tempIFrame.style.display='none';
          var IFrameObj = document.body.appendChild(tempIFrame);

          if (document.frames) {
            // this is for IE5 Mac, because it will only
            // allow access to the document object
            // of the IFrame if we access it through
            // the document.frames array
            IFrameObj = document.frames['ADBACKPlugFrame'];
          }

        }
      </script>
    </body>
</html>
