        <footer>
          <div class="content Lfooter">
          <?php if (is_page(array('contact'))) {?>
          <?php }else{ ?>
            <a class="hover-Uline" href="<?php echo home_url('/contact'); ?>"><i class="far fa-envelope fa-sm"></i> contact</a>
          <?php } ?>
          </div>
          <div class="content Cfooter">
            <a class="hover-Uline" href="<?php echo home_url('/privacypolicy'); ?>">privacy policy</a>
          </div>
          <div class="content Rfooter">
            <!-- <a class="footer-icon hover-Uline" href="#"><i class="fab fa-youtube fa-sm"></i></a> -->
            <!-- <a class="footer-icon hover-Uline" href="#"><i class="fab fa-facebook-square fa-sm"></i></a> -->
            <a class="footer-icon hover-Uline" href="https://rua.jp/i/fumiya_ozaki_wd"><i class="fab fa-instagram fa-sm"></i></a>
            <a class="footer-icon hover-Uline" href="https://twitter.com/fumiya0414"><i class="fab fa-twitter fa-sm"></i></a>
            <!-- <a class="footer-icon hover-Uline" href=""><i class="fab fa-line fa-sm"></i></a> -->
          </div>
          
          <?php if (is_page(array('demo'))) {?>
          <?php }else{ ?>
            <div id="topBtn" class="topBtn">TOP</div>
          <?php } ?>

        </footer>
      </div> <!--#containerFromheader-->
    </div> <!--#global-containerFromheader-->
    <?php wp_footer(); ?> <!--footerfookpoint-->
  </body>
</html>
