<!DOCTYPE html>
<html>
  
<head>
  <title>Login Page</title>
  <style>
    
body {
  background-image: url('manoks.jpg');
  background-repeat: no-repeat; 
  background-position: center center;
  background-attachment: fixed; 
  background-size: cover;
}

.container {
  width: 200px;
  margin: 0 auto;
  margin-top: 100px;
  padding: 20px;
  background-color: transparent;
  backdrop-filter: blur(40px);
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

h2 {
  text-align: center;
}

form {
  margin-top: 20px;
}

label, input {
  display: block;
  width: 100%;
  margin-bottom: 10px;
}

button {
  width: 50%;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  
}

.error-message {
  color: red;
  text-align: center;
  margin-top: 10px;
}
  </style>
</head>
<body>

  <div class="container">
    <h2>Login</h2>
    <form>
      <label for="username">Username</label>
      <input type="text" id="username" required>

      <label for="password">Password</label>
      <input type="password" id="password" required>

      <button type="submit">Log In</button>
    </form>
    <div class="error-message"></div>

</body>

</html>
<script>
  document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username === 'admin' && password === 'password') {
      // Successful login
      window.location.href = 'firstpage.php'; // go to a welcome page
    } else {
      // Invalid login
      var errorMessage = document.querySelector('.error-message');
      errorMessage.textContent = 'Invalid username or password';
    }
  });
</script>
