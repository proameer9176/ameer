<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ameer</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
  <h1>ameer</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="services.php">Services</a>
    <a href="book.php">Book Now</a>
    <?php if (!isset($_SESSION['user'])): ?>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
    <?php else: ?>
      <a href="logout.php">Logout</a>
    <?php endif; ?>
  </nav>
</header>
