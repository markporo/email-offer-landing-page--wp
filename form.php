<?php 

// Template Name: Email Submission Form

?>

  <div class="w-3/4 md:w-1/3 border-2 border-gray-600 text-center bg-gray-700 mb-5 rounded-lg drop-shadow-lg">
        <form id="emailForm" method="post" action="" class="flex flex-col justify-evenly items-center my-10 w-full">
          <div class="text-center">
              <h2 class="text-gray-100 mb-2 -mt-3">Sign Up Now!</h2>
              <input class="w-10/12 mt-3 h-9 rounded-md border-2 border-gray-600" placeholder="First Name" type="text" name="fname" tabindex="1" autofocus required />
              <input class="w-10/12 mt-3 h-9 rounded-md border-2 border-gray-600" placeholder="Last Name" type="text" name="lname" tabindex="2" required />
              <input class="w-10/12 mt-3 h-9 rounded-md border-2 border-gray-600" placeholder="Phone" type="tel" name="phone" tabindex="3" required />
              <input class="w-10/12 mt-3 h-9 rounded-md border-2 border-gray-600" placeholder="City" type="city" name="city" tabindex="4" required />
              <input class="w-10/12 mt-3 h-9 rounded-md border-2 border-gray-600" placeholder="Email" type="email" name='email' tabindex="5" required />
              
              <?php if (get_field('input_message_prompt')) : ?>
              <textarea class="w-10/12 mt-3 h-9 mb-2 rounded-md border-2 border-gray-600" placeholder="<?php the_field('input_message_prompt'); ?>" tabindex="6" type="text" name="specialMessageField" required></textarea>
                
              <?php endif; ?>

              </div>
          <button id="email-submit" name="email-submit" class="w-10/12 mt-3 mb-1 rounded-3xl border-2 border-gray-600 bg-yellow-600 hover:bg-blue-300 active:bg-blue-400" tabindex="7" type="submit" >
             SUBMIT
          </button>
        </form>
      </div>