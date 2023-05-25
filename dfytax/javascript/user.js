var hasBusiness = false;

function saveUsersResponses(selectedButtonIds) {
            
  $.ajax({
    url: '/ajax/saveUsersResponses.php',
    type: 'POST',
    data: { questionsData: selectedButtonIds },
    success: function(response) {
      $('#content').html(response);
    },
    error: function() {
      console.log('An error occurred saving your data. Please refresh and start again.');
    }
  });
}

$(document).ready(function() {
  
  var publicKey = 'YOUR_PUBLIC_KEY';
  var handler = Plaid.create({
    clientName: 'HBB Accounting',
    env: 'sandbox',
    key: publicKey,
    product: ['auth'],
    onSuccess: function(public_token, metadata) {
      // Handle successful Plaid Link authentication
      $.ajax({
        url: 'ajax/continuePlaidLink.php',
        type: 'POST',
        data: { public_token: public_token },
        success: function(response) {
          // Handle the AJAX response from continuePlaidLink.php
          console.log('AJAX response:', response);
          // Add your own logic to handle the response
        },
        error: function() {
          console.log('An error occurred during the AJAX request.');
        }
      });
    },
    onExit: function(err, metadata) {
      // Handle when the user exits Plaid Link without completing the flow
      // You can perform any necessary cleanup or display appropriate messages
    }
  });

  // Launch Plaid Link on button click
  $('#open-plaid-link').click(function() {
    handler.open();
  });
  


    
  if (!(typeof startingService === 'undefined')) {
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
  }
  else {
    
        // Adding click event listeners to the buttons
    $(".work-button").click(function() {
        $(this).toggleClass("selected");
    });

    // Logging the selected buttons to the console
    $("#next-button").click(function() {
        var selectedButtons = $(".work-button.selected");
        var selectedButtonIds = selectedButtons.map(function() {
            return this.id;
        }).get();
        
        console.log("Button 1 clicked:", selectedButtonIds);
        
        var totalSelectedKinds = 0
        $.each(selectedButtonIds, function(index, value) {
          if (value === '1independent' || value === '1business-owner') {
            hasBusiness = true;
          }
          totalSelectedKinds++;
        });
        
        if (totalSelectedKinds > 0) {
        
          if(hasBusiness) {
            $("#questionContainer1").hide();
            $('#questionContainer2').show();
          }
          else{
            $("#questionContainer1").hide();
            $('#questionContainer4').show();
          }
        }
        else {
          $('#next-button').css('background-color', '#24ace4');
          showPopUp("You Must Select Some Kind of Work", "Please select a type of work. If you don't have any of these work types, we are not the right company for you.");
          
        }
    });
    
    $("#next-button2").click(function() {
        var selectedButtons = $(".work-button.selected");
        var selectedButtonIds = selectedButtons.map(function() {
            return this.id;
        }).get();
        
        console.log("Button 2 Clicked:", selectedButtonIds);
        
        var allBusinessesString = '';
        
        countOfBusinesses = 0;
        $.each(selectedButtonIds, function(index, value) {
          if (value.startsWith("2")) {
            allBusinessesString += ' ' + value.substring(1) + ',';
            countOfBusinesses++;
          }
        });
        
        if (countOfBusinesses > 0) {
          
          allBusinessesString = allBusinessesString.replace(/,$/, '');
          
          var stringEnding;
          if (countOfBusinesses > 1) stringEnding = ' businesses.';
          else stringEnding = ' business.';
        
          var h2Element = $('<h2>').text('Pick all activities that apply to your' + allBusinessesString + stringEnding);

          // Append the <h2> element to the questionContainer2 div using its ID
          $('#questionContainer3').prepend(h2Element);
          $('#questionContainer2').hide();
          $('#questionContainer3').show();
        }
        else {
          
          $('#next-button2').css('background-color', '#24ace4');
          showPopUp('You Must Select One Type of Work', 'Please classify your 1099 or business as some type of work.');
          
        }
        
        
        
    });
    
    $("#next-button3").click(function() {
        var selectedButtons = $(".work-button.selected");
        var selectedButtonIds = selectedButtons.map(function() {
            return this.id;
        }).get();
        
        console.log("Button 3 clicked:", selectedButtonIds);
        
        var container = $('#questionContainer4');
        var buttons = container.find('.work-button');
      
        buttons.on('click', function() {
            buttons.removeClass('selected');
            $(this).addClass('selected');
        });
        
        $('#questionContainer3').hide();
        $('#questionContainer4').show();
        
    });
    
    $("#next-button4").click(function() {
      
      var selectedButtons = $(".work-button.selected");
      var selectedButtonIds = selectedButtons.map(function() {
          return this.id;
      }).get();
      console.log("Button 4 clicked. Selected buttons:", selectedButtonIds);
      
      var container = $('#questionContainer5');
      var buttons = container.find('.work-button');
    
      buttons.on('click', function() {
          buttons.removeClass('selected');
          $(this).addClass('selected');
      });
      
      var firstYear;
      $.each(selectedButtonIds, function(index, value) {
        if (value.startsWith("4")) {
          firstYear = value.substring(1);
        }
      });
      
      
      if (typeof firstYear !== 'undefined') {
        var h2Element = $('<h2>').text('When did you start working on your business in ' + firstYear + '?');
        $('#questionContainer5').prepend(h2Element);
        
        if (firstYear == '2023') {
          var currentDate = new Date();
          var currentMonth = currentDate.getMonth() + 1;
          
          var iteration = 0;
          $('#questionContainer5 .work-button').each(function() {
            if (iteration > currentMonth) {
              $(this).hide();
            }
            iteration ++;
          });
          
        }
        
        if (hasBusiness) {
          $('#questionContainer4').hide();
          $('#questionContainer5').show();
        }
        else {
          saveUsersResponses(selectedButtonIds);
          
        }
        
        
      }
      else {
        $('#next-button4').css('background-color', '#24ace4');
        $('.popup-container .popup-content h3').text('You Must Select One Year');
        $('.popup-container .popup-content p').text('What year are you looking to work on?');

        $('.popup-container').fadeIn();
      
      }
      
      
    });
    
    $("#next-button5").click(function() { 
      
      var selectedButtons = $(".work-button.selected");
      var selectedButtonIds = selectedButtons.map(function() {
          return this.id;
      }).get();
      console.log("Button 4 clicked. Selected buttons:", selectedButtonIds);
      
      var month;
      $.each(selectedButtonIds, function(index, value) {
        if (value.startsWith("5")) {
          month = value.substring(1);
        }
      });
      
      if (typeof month !== 'undefined') {
        saveUsersResponses(selectedButtonIds);
        
      }
      else {
        $('#next-button2').css('background-color', '#24ace4');
        $('.popup-container .popup-content h3').text('You Must Select A Month');
        $('.popup-container .popup-content p').text('Select the month you started working on your business.');

        $('.popup-container').fadeIn();
      }
      
      
    });
        
   
  }
  
  
});
