<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../controllers/AuthController.php';
require_once __DIR__ . '/../controllers/MenuController.php';
require_once __DIR__ . '/../controllers/UserController.php';

$auth = new AuthController($pdo);

if (!$auth->isLoggedIn()) {
    header('Location: login.php');
    exit;
}

$menuController = new MenuController($pdo);
$userController = new UserController($pdo);
$currentUser = $auth->getCurrentUser();

// Get page from query string
$page = $_GET['page'] ?? 'dashboard';
$menuType = $currentUser['menu_type'] ?? 'horizontal';
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_TITLE; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@200;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body data-menu-type="<?php echo $menuType; ?>">
    <div class="main-wrapper">
        <?php if ($menuType === 'vertical'): ?>
            <?php include 'components/vertical-menu.php'; ?>
        <?php endif; ?>

        <div class="content-wrapper">
            <?php include 'components/navbar.php'; ?>
            
            <?php if ($menuType === 'horizontal'): ?>
                <?php include 'components/horizontal-menu.php'; ?>
            <?php endif; ?>

            <main class="main-content">
                <?php 
                // Load page content
                $pageFile = __DIR__ . '/pages/' . $page . '.php';
                if (file_exists($pageFile)) {
                    include $pageFile;
                } else {
                    include 'pages/dashboard.php';
                }
                ?>
            </main>
        </div>
    </div>

    <div class="toast-container" id="toastContainer"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/tabs.js"></script>
</body>
</html>
