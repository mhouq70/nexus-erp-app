<?php
/**
 * Page Controller - Handles page content loading
 */

class PageController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function loadPage($page) {
        $allowedPages = [
            'dashboard' => 'pages/dashboard.php',
            'users' => 'pages/users.php',
            'orders' => 'pages/orders.php',
            'customers' => 'pages/customers.php',
            'products' => 'pages/products.php',
            'profile' => 'pages/profile.php',
            'settings' => 'pages/settings.php',
            'help' => 'pages/help.php',
        ];

        if (isset($allowedPages[$page])) {
            return $allowedPages[$page];
        }
        return 'pages/dashboard.php';
    }

    public function getPageTitle($page) {
        $titles = [
            'dashboard' => 'Dashboard',
            'users' => 'User Management',
            'orders' => 'Sales Orders',
            'customers' => 'Customers',
            'products' => 'Products',
            'profile' => 'My Profile',
            'settings' => 'Settings',
            'help' => 'Help Center',
        ];

        return $titles[$page] ?? 'Dashboard';
    }
}
?>
