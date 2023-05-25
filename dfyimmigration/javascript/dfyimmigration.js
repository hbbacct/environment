document.addEventListener('DOMContentLoaded', function() {
  
  var button = document.getElementById('userButton');
  var maxLength = 8; // Maximum number of characters to show
  
  if (button.textContent.length > maxLength) {
    var truncatedText = button.textContent.substr(0, maxLength) + '...▼';
    button.textContent = truncatedText;
  }
  
  var logoutOption = document.querySelector('.dropdown-content a[href="#logout"]');
  logoutOption.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default link behavior

    // Make an AJAX request to script/logoutUser.php
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/ajax/logoutUser.php', true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Handle the response here if needed
        if (xhr.responseText.startsWith('--redirect--')) {
            var cleanResponse = xhr.responseText.replace(/--redirect--/g, '');
            window.location.href = cleanResponse;
        }
      }
    };
    xhr.send();
  });
});
