<?php 

/* Template Name: HOME PAGE */

$image = get_field('band_image');
$featureImage = $image['sizes']['large'];

get_header(); 
?>

  <!-- Body -->
   <!-- <?php body_class(); ?>  -->
   <body class="bg-gray-700 flex justify-center w-full min-h-screen py-5 md:py-10 text-black">
    <div class="w-11/12 md:w-10/12 border-solid border-gray-700 border-2 drop-shadow-xl py-2 bg-gray-100 flex flex-col justify-between rounded-lg">
        <header class="p-0 m-0">
            <div class="m-5 font-bold text-center  text-xl md:text-3xl"><?php the_field('artist_name'); ?> 
              <!-- <?php bloginfo("name"); ?> -->
            </div>
            <!-- <h3>  <?php bloginfo('description'); ?> </h3> -->
            
           <!-- <nav class="flex flex-col flex-start text-blue-900">
              
            /*  <?php 
                $args = array(
                    'theme_location' => 'primary'
                );
              ?> */

                <?php wp_nav_menu( $args ); ?>
            </nav> -->
          
        </header>

<div class="flex flex-col md:flex-row flex-nowrap justify-evenly items-center rounded-xl md:max-h-full flex-grow ">
      <!-- min-h-screen for scrolling -->
      <div class="w-3/4 md:w-1/3 flex flex-col justify-center text-center my-5">
        <img alt="band image" src="<?php echo $featureImage; ?>" /> 
        <p class="mt-1 mb-7 text-gray-500 flex-grow"> <?php the_field('offer_description');?>  </p>
      </div>
      <?php get_template_part('form');?>
  </div>

  <?php get_footer(); ?>