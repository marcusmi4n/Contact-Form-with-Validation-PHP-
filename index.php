<!DOCTYPE html>
<html>
<head>
  <title>Contact Form</title>
</head>
<body>
  <h2>Contact Us</h2>
  <form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Message:<br>
    <textarea name="message" rows="5" cols="30"></textarea><br><br>
    <input type="submit" name="submit" value="Send">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    if (!$name || !$email || !$message) {
      echo "<p style='color:red;'>All fields are required.</p>";
    } else {
      echo "<p style='color:green;'>Thanks, $name! Your message has been received.</p>";
    }
  }
  ?>
</body>
</html>
