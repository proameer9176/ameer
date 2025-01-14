<?php
include 'includes/db.php';
include 'templates/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

  $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
  $stmt->execute(['name' => $name, 'email' => $email, 'password' => $password]);
  echo "Registration successful!";
}
?>
<main>
  <h2>Register</h2>
  <form action="" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Register</button>
  </form>
</main>
<?php include 'templates/footer.php'; ?>
