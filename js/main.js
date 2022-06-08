const submitButton = document.getElementById("email-submit");

  document.addEventListener('DOMContentLoaded', () => { 
    console.log("dom fully loaded") 


  submitButton.addEventListener("click", function() {
     if (submitButton) {

      //data from user
      let dataFromUser = {
        "fname": document.querySelector('#emailForm [name="fname"]').value,
        "lname": document.querySelector('#emailForm [name="lname"]').value,
        "email": document.querySelector('#emailForm [name="email"]').value,
        "phone":  document.querySelector('#emailForm [name="phone"]').value,
        "city":  document.querySelector('#emailForm [name="city"]').value,
        "specialMessageField":  document.querySelector('#emailForm [name="specialMessageField"]').value,
        // "status": publish,
      }


      //rest api request
      let newUser = new XMLHttpRequest();
      newUser.open('POST', 'userData.siteURL + /wp-json/wp/v2/posts');
      newUser.setRequestHeader("X-WP-Nonce", userData.nonce);
      newUser.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
      
      // newUser.onload = function() {
      //   if (newUser.status >= 200 && newUser.status < 400) {
      //     let data = JSON.parse(newUser.responseText);
      //     console.log(data);
      //   } else {
      //     console.log("We connected to the server, but it returned an error.");
      //   }
      // };
      
      // newUser.onerror = function() {
      //   console.log("Connection error");
      // };
      
      newUser.send(JSON.stringify(dataFromUser));
      newUser.onreadystatechange = function() {
        if (newUser.readyState == 4) {
          if (newUser.status == 201) {
             document.querySelector('#emailForm [name="fname"]').value = '';
             document.querySelector('#emailForm [name="lname"]').value = '';
             document.querySelector('#emailForm [name="email"]').value = '';
             document.querySelector('#emailForm [name="phone"]').value = '';
             document.querySelector('#emailForm [name="city"]').value = '';
             document.querySelector('#emailForm [name="specialMessageField"]').value = '';
          } else {
            alert("Error...Data could not be saved!")
          }
        }
      }
      }
 
    });
  });
