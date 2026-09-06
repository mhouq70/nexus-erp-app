<?php
/**
 * Logout
 */
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../controllers/AuthController.php';
require_once __DIR__ . '/../config/database.php';

$auth = new AuthController($pdo);
$auth->logout();

header('Location: login.php');
exit;
?>