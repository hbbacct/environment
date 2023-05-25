function triggerOTP() {
    
    $.get("ajax/triggerOTP.php", function(response) {
      // Success callback function
        console.log("GET request successful");
        if (response.includes('--text--')) {
            var cleanResponse = response.replace(/--text--/g, '');
            var responseBox = document.getElementById('response-box');
            responseBox.innerHTML = cleanResponse;
        }
    }).fail(function() {
      // Error callback function
      console.log("Error occurred during GET request");
    });

    
}

function otpSubmitSetUp(data) {
    
    var signupContainer = document.getElementById('signup-container');
    signupContainer.innerHTML = data;
    
    var otpInput = document.getElementById('otp');
    var signupBtn3 = document.getElementById('signup-btn3');
    
    signupBtn3.addEventListener('click', function() {

        console.log('btn3 click');
    
        var requestData = { otp: otpInput.value };
        
        fetch('ajax/submitOTP.php', {
            method: 'POST',
            body: JSON.stringify(requestData),
            headers: {
              'Content-Type': 'application/json'
            }
        })
        .then(response => {
            return checkResponse(response);
        })
        .then(data => {
            
            console.log('in php:' + data);
            if (data.includes('--text--')) {
                var cleanResponse = data.replace(/--text--/g, '');
                var responseBox = document.getElementById('response-box');
                responseBox.innerHTML = cleanResponse;
            }
            else if (data.includes('--redirect--')) {
                var cleanResponse = data.replace(/--redirect--/g, '');
                window.location.href = cleanResponse;
            }
        });
    });
    
}

function checkResponse(response) {
    if (!response.ok) {
        throw new Error('Request failed with status ' + response.status);
    }
    const contentType = response.headers.get('content-type');
    if (contentType && contentType.includes('application/json')) {
        return response.json();
    } else {
        return response.text(); // Retrieve the response as text
    }
}

function callSignUp(url, requestData) {
    fetch(url, {
        method: 'POST',
        body: JSON.stringify(requestData),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => {
        return checkResponse(response);
    })
    .then(data => {
        
        //console.log(data);
        if (data.includes('--text--')) {
            var cleanResponse = data.replace(/--text--/g, '');
            $('.response-box').text(cleanResponse);
        }
        else {
            
            if (data.includes('signup-btn3')) {
              otpSubmitSetUp(data);
              
            } else {
            
                var signupContainer = document.getElementById('signup-container');
                signupContainer.innerHTML = data;
                
                
                var nameInput = document.getElementById('name');
                var emailInput = document.getElementById('email_address');
                var signupBtn2 = document.getElementById('signup-btn2');
                
                signupBtn2.addEventListener('click', function() {
                    
                    console.log('btn2 click');
                
                    var requestData = { name: nameInput.value, email:emailInput.value };
                    
                    fetch('ajax/submitNameAndEmail.php', {
                        method: 'POST',
                        body: JSON.stringify(requestData),
                        headers: {
                          'Content-Type': 'application/json'
                        }
                    })
                    .then(response => {
                        return checkResponse(response);
                    })
                    .then(data => {
                        
                        console.log('in php:' + data);
                        if (data.includes('--text--')) {
                            var cleanResponse = data.replace(/--text--/g, '');
                            $('.response-box').text(cleanResponse);
                        }
                        else if (data.includes('--redirect--')) {
                            var cleanResponse = data.replace(/--redirect--/g, '');
                            window.location.href = cleanResponse;
                        }
                        else {
                            
                            otpSubmitSetUp(data);
                            
                        }
                    });
                });
            }
        }
       
    });
    
}


document.addEventListener('DOMContentLoaded', function() {
    
    console.log('DOMContentLoaded');
    var signupBtn = document.getElementById('signup-btn');
    var phoneInput = document.getElementById('phone');
  

    phoneInput.addEventListener('input', function() {
        var value = phoneInput.value;
        
        // Remove any non-digit characters from the input value
        value = value.replace(/\D/g, '');
    
        // Apply the desired formatting
        if (value.length > 0) {
          value = '(' + value.substr(0, 3) + ') ' + value.substr(3, 3) + '-' + value.substr(6);
        }
        
        // Update the input value with the formatted phone number
        phoneInput.value = value;
    });

    signupBtn.addEventListener('click', function() {
      
        console.log('btn1 click');
        var phoneNumber = phoneInput.value;
        var requestData = { phone: phoneNumber };
    
        callSignUp('ajax/signUp.php', requestData);
    
    });
});
