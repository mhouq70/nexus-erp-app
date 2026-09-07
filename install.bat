@echo off
REM NexusERP - Complete Application Installer
REM Automated setup script for Windows

echo ================================
echo   NexusERP Application Installer
echo ================================
echo.

REM Check if PHP is installed
php -v >nul 2>&1
if errorlevel 1 (
    echo Error: PHP is not installed or not in PATH
    echo Please install PHP 7.4 or higher
    pause
    exit /b 1
)

echo OK PHP is installed

REM Check if MySQL is installed
mysql --version >nul 2>&1
if errorlevel 1 (
    echo Warning: MySQL not found in PATH
    echo You may need to manually import database.sql
)

echo.
echo Setting up application...

REM Create required directories
if not exist "public" mkdir public
if not exist "config" mkdir config
if not exist "models" mkdir models
if not exist "controllers" mkdir controllers

echo OK Directories ready

echo.
echo ================================
echo   Setup Complete!
echo ================================
echo.
echo Access your application at:
echo http://localhost/nexus-erp-app/public/login.php
echo.
echo Demo Credentials:
echo Username: admin
echo Password: password
echo.
echo Next Steps:
echo 1. Create database: nexus_erp
echo 2. Import assets/database.sql
echo 3. Update config/database.php with your credentials
echo.
pause
