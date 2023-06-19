<!DOCTYPE html>
<html>
<head>
  <title>Responsive Web Form</title>
  <link rel="stylesheet" href="./index.css">
  <script src="https://www.google.com/recaptcha/api.js?render=6LdlNa0mAAAAAPmN_lQmr9qhCmSF1i6EvKiJO9vo"></script>

</head>
<body>

   

    <header class="header">
    <div class="logo">Print shastra</div>
    <nav class="nav">
      <ul>
        <li><a href="#">Home</a></li>
        
        <li><a href="./dashboared.php">Dashboared</a></li>
      </ul>
    </nav>
  </header>
  <div class="form-container">
      <h2 class="title">Join Us</h2>
    <form action="script.php" method="POST" >
      <input type="hidden" id="token_response" name="token_response" />
      <div class="form-group">
        <label for="first-name">First Name</label>
        <input type="text" id="first-name" name="first-name" required>
      </div>
      <div class="form-group">
        <label for="last-name">Last Name</label>
        <input type="text" id="last-name" name="last-name" >
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
          <option value="">Select</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="telephone">Telephone Number</label>
        <input type="number" id="telephone" name="telephone" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>

   <script>
      
        grecaptcha.ready(function() {
          grecaptcha.execute('6LdlNa0mAAAAAPmN_lQmr9qhCmSF1i6EvKiJO9vo', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.

              let response=document.getElementById('token_response')
              response.value= token;
          });
        });
      
  </script>

<script>
  // Function to display an alert after successful form submission
  function showSuccessAlert() {
    alert("Form submitted successfully!");
  } 


  
  
   <?php
  session_start();
  if (isset($_SESSION['success']) && $_SESSION['success']) {
    echo 'showSuccessAlert();';
    unset($_SESSION['success']); 
    // Unset the success session variable
  }
   ?>
  </script> 

</body>
</html>

