

$(document).ready(function() {
    
  $('#content').load('/ajax/selectService.php?service='+startingService);
  
  $('#serviceSelector').change(function() {
    var selectedService = $(this).val();
    
    // Make AJAX call to selectService.php
    $.ajax({
      url: '/ajax/selectService.php',
      type: 'POST',
      data: { service: selectedService },
      success: function(response) {
        // Update the content div with the HTML returned from selectService.php
        $('#content').html(response);

      },
      error: function() {
        alert('Error occurred while loading content');
      }
    });
  });
  
  
});
