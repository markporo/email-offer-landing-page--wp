<footer class="flex flex-row justify-center items-end self-center mt-2">
  <?php wp_footer() ?>
           <p> 
              <!-- <?php bloginfo('name'); ?>  -->
              &copy &nbsp
              <a href="<?php the_field('website_url'); ?>" target="_blank" title="@artistName"> <?php the_field('artist_name'); ?>, </a>
              &nbsp <?php echo date("Y") ?>
            </p>
        </footer>  
    </div>
  </body> 
</html>
