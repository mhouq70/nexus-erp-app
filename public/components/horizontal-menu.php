<?php
/**
 * Horizontal Menu Component
 */
$fullMenu = $menuController->getFullMenu();
?>
<div class="menu-bar" id="menuBar" role="menubar">
    <button class="header-btn mobile-menu-btn" id="mobileMenuBtn">
        <i class="fas fa-bars"></i>
    </button>

    <?php foreach ($fullMenu as $category): ?>
        <?php foreach ($category['items'] as $item): ?>
            <div class="h-menu-item">
                <?php if ($item['has_submenu']): ?>
                    <button class="h-menu-link has-submenu">
                        <i class="fas <?php echo $item['icon']; ?> h-menu-icon"></i>
                        <span><?php echo $item['title']; ?></span>
                        <?php if ($item['badge_text']): ?>
                            <span class="menu-badge <?php echo $item['badge_class']; ?>"><?php echo $item['badge_text']; ?></span>
                        <?php endif; ?>
                        <i class="fas fa-chevron-down h-menu-arrow"></i>
                    </button>
                    <div class="h-submenu-wrapper">
                        <?php foreach ($item['submenus'] as $submenu): ?>
                            <a href="?page=<?php echo str_replace('#', '', $submenu['link']); ?>" class="h-submenu-link">
                                <i class="fas <?php echo $submenu['icon']; ?>"></i>
                                <div>
                                    <div><?php echo $submenu['title']; ?></div>
                                    <small><?php echo $submenu['description']; ?></small>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <a href="?page=<?php echo str_replace('#', '', $item['link']); ?>" class="h-menu-link">
                        <i class="fas <?php echo $item['icon']; ?> h-menu-icon"></i>
                        <span><?php echo $item['title']; ?></span>
                        <?php if ($item['badge_text']): ?>
                            <span class="menu-badge <?php echo $item['badge_class']; ?>"><?php echo $item['badge_text']; ?></span>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>
