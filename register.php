<form action="register.php" method="POST">
  <label for="name">Name:</label>
  <input type="text" name="name" required>
  <label for="email">Email:</label>
  <input type="email" name="email" required>
  <label for="password">Password:</label>
  <input type="password" name="password" required>
  <button type="submit">Register</button>
</form>
<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

  $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
  $stmt->execute(['name' => $name, 'email' => $email, 'password' => $password]);
  echo "Registration successful!";
}
?>
