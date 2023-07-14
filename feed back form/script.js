$(document).ready(function() {
    // Add hover effect
    $("form input, form select, form textarea, form button").hover(
      function() {
        $(this).addClass("hover");
      },
      function() {
        $(this).removeClass("hover");
      }
    );
  
    // Handle form submission
    $("#feedbackForm").submit(function(event) {
      event.preventDefault(); // Prevent the form from submitting
  
      // Get form values
      var name = $("#name").val();
      var email = $("#email").val();
      var flightNo = $("#flightNo").val();
      var pnrNo = $("#pnrNo").val();
      var rating = $("#rating").val();
      var comment = $("#comment").val();
  
      // Validate flight number and PNR number
      if (!isAlphaNumeric(flightNo)) {
        alert("Flight number must contain both alphabetic and numeric characters.");
        return;
      }
  
      if (!isAlphaNumeric(pnrNo)) {
        alert("PNR number must contain both alphabetic and numeric characters.");
        return;
      }
     // TODO: Perform further form validation and submit data to server
  
      // Display pop-up message
      var message = "Thank you for your feedback!";
      alert(message);
  
      // Reset form
      $("#feedbackForm")[0].reset();
    });
  
    // Check if a string contains both alphabetic and numeric characters
    function isAlphaNumeric(str) {
      var hasAlphabetic = /[a-zA-Z]/.test(str);
      var hasNumeric = /\d/.test(str);
      return hasAlphabetic && hasNumeric;
    }
  });
  