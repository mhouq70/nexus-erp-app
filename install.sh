#!/bin/bash

# NexusERP - Complete Application Installer
# Automated setup script for Linux/Mac

echo "================================"
echo "  NexusERP Application Installer"
echo "================================"
echo ""

# Check if PHP is installed
if ! command -v php &> /dev/null; then
    echo "❌ PHP is not installed. Please install PHP 7.4 or higher."
    exit 1
fi

echo "✓ PHP version: $(php -v | head -n 1)"

# Check if MySQL is installed
if ! command -v mysql &> /dev/null; then
    echo "❌ MySQL is not installed. Please install MySQL 5.7 or higher."
    exit 1
fi

echo "✓ MySQL is installed"

# Set permissions
echo ""
echo "Setting file permissions..."
chmod -R 755 .
chmod -R 777 public/

echo "✓ Permissions set"

# Database setup
echo ""
echo "Creating database..."
read -p "Enter MySQL username (default: root): " db_user
db_user=${db_user:-root}

read -sp "Enter MySQL password: " db_pass
echo ""

mysql -u "$db_user" -p"$db_pass" < assets/database.sql

if [ $? -eq 0 ]; then
    echo "✓ Database created successfully"
else
    echo "❌ Database creation failed"
    exit 1
fi

# Update configuration
echo ""
echo "Updating configuration..."

# Create config with actual credentials
cat > config/database.php << 'EOF'
<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'nexus_erp';
    private $username = 'root';
    private $password = '';
    private $charset = 'utf8mb4';
    private $pdo;

    public function connect() {
        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name . ';charset=' . $this->charset;
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (PDOException $e) {
            die('Connection Error: ' . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
}

$db = new Database();
$pdo = $db->connect();
?>
EOF

echo "✓ Configuration updated"

echo ""
echo "================================"
echo "  ✅ Installation Complete!"
echo "================================"
echo ""
echo "📍 Access your application at:"
echo "   http://localhost/nexus-erp-app/public/login.php"
echo ""
echo "🔐 Demo Credentials:"
echo "   Username: admin"
echo "   Password: password"
echo ""
echo "📚 Documentation: See README.md"
echo ""
