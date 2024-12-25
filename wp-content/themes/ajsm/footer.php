<footer style="text-align: center; padding: 20px; font-size: 0.9rem; background-color: #f5f5f5; color: #333;">
   <p style="margin: 0;">Proudly serving New Jersey homeowners with quality painting services.</p>
   <p style="margin: 5px 0;">&copy; <span id="year"></span> AJSM Painting. All rights reserved.</p>

   <!-- Social Icons in Footer -->
   <div class="social-icons" style="margin-top: 20px; display: flex; justify-content: center; gap: 10px;">
    <a href="https://www.facebook.com/profile.php?id=61564643498140" target="_blank" class="social-icon">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb-logo.png" alt="Facebook" style="width: 30px; height: auto; transition: transform 0.3s ease; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
      </a>
      <a href="https://www.instagram.com/ajsmpaint/" target="_blank" class="social-icon">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ig-logo.png" alt="Instagram" style="width: 30px; height: auto; transition: transform 0.3s ease; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
      </a>
      <a href="mailto:ajsmpaint@gmail.com" class="social-icon">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email-logo.png" alt="Email" style="width: 30px; height: auto; transition: transform 0.3s ease; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
      </a>
   </div>
</footer>

<script>
   document.getElementById('year').textContent = new Date().getFullYear();
</script>

<?php wp_footer(); ?>
</body>
</html>
