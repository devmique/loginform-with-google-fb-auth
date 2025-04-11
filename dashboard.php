<?php
session_start();

if (!isset($_SESSION['google_user']) && !isset($_SESSION['facebook_user'])) {
    header('Location: login.php');
    exit();
}

$user = isset($_SESSION['google_user']) ? $_SESSION['google_user'] : $_SESSION['facebook_user'];
?>

<h1>Welcome, <?= htmlspecialchars($user['name']); ?>!</h1>
<p>Email: <?= htmlspecialchars($user['email']); ?></p>
<img src="<?= $user['picture']; ?>" alt="Profile Picture">
<a href="logout.php">Logout</a>
