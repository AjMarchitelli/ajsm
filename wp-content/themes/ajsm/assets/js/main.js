document.addEventListener("DOMContentLoaded", function () {

window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    if (window.scrollY > 0) {
      header.classList.add('sticky');
    } else {
      header.classList.remove('sticky');
    }
  });


  document.addEventListener("mousemove", function (e) {
    const trail = document.createElement("div");
    trail.classList.add("paint-trail");

    trail.style.left = `${e.pageX}px`;
    trail.style.top = `${e.pageY}px`;
  
    document.body.appendChild(trail);
  
    setTimeout(() => {
      trail.remove();
    }, 1000);
  });

  

});

jQuery(document).ready(function($) {
  // Ensure that the form is selected correctly and use jQuery to bind the submit event
  $('form').on('submit', function(e) {
      e.preventDefault(); // Prevent default form submission

      // Serialize the form data for sending
      var formData = $(this).serialize();

      // Make the AJAX request
      $.ajax({
          type: 'POST',
          url: ajax_form_obj.ajax_url, // URL set in wp_localize_script()
          data: formData + '&action=contact_form_submission', // Send the form data with the custom action
          dataType: 'json',
          success: function(response) {
              if (response.status == 'success') {
                  // Display success message to the user
                  alert(response.message);
                  $('form')[0].reset(); // Reset form fields after submission
              } else {
                  // Display error message to the user
                  alert(response.message);
              }
          },
          error: function() {
              alert('There was an error with the form submission. Please try again.');
          }
      });
  });
});
