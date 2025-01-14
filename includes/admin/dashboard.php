<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit();
}
include '../includes/db.php';
?>

<?php include '../templates/header.php'; ?>
<main>
  <h2>Admin Dashboard</h2>
  <p>Manage bookings and users here.</p>
</main>
<?php include '../templates/footer.php'; ?>
