<?php
/**
 * Navbar Component
 */
?>
<nav class="navbar-top">
    <div class="navbar-brand">
        <div class="brand-icon">N</div>
        <div class="brand-text">
            <h1>NexusERP</h1>
            <p>Enterprise Suite</p>
        </div>
    </div>

    <div class="navbar-center">
        <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" id="searchInput" placeholder="Search modules, actions...">
        </div>
    </div>

    <div class="navbar-right">
        <button class="header-btn" id="themeBtn" title="Toggle theme">
            <i class="fas fa-moon"></i>
        </button>
        <button class="header-btn" title="Notifications">
            <i class="fas fa-bell"></i>
            <span class="badge">4</span>
        </button>
        <button class="header-btn" title="Messages">
            <i class="fas fa-envelope"></i>
            <span class="badge">2</span>
        </button>
        <div class="user-menu">
            <div class="user-avatar"><?php echo strtoupper(substr($currentUser['full_name'], 0, 2)); ?></div>
            <div class="user-info">
                <div class="name"><?php echo $currentUser['full_name']; ?></div>
                <div class="role"><?php echo ucfirst($currentUser['role']); ?></div>
            </div>
            <div class="user-dropdown" id="userDropdown">
                <a href="?page=profile"><i class="fas fa-user"></i> My Profile</a>
                <a href="?page=settings"><i class="fas fa-palette"></i> Preferences</a>
                <a href="?page=security"><i class="fas fa-shield-halved"></i> Security</a>
                <hr>
                <a href="logout.php" class="danger"><i class="fas fa-right-from-bracket"></i> Sign Out</a>
            </div>
        </div>
    </div>
</nav>
