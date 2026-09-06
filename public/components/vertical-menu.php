<?php
/**
 * Vertical Menu Component
 */
$fullMenu = $menuController->getFullMenu();
?>
<aside class="sidebar" id="sidebar" role="navigation" aria-label="Main navigation">
    <nav class="sidebar-nav">
        <?php foreach ($fullMenu as $category): ?>
            <div class="menu-section">
                <div class="menu-section-label"><?php echo $category['name']; ?></div>
                
                <?php foreach ($category['items'] as $item): ?>
                    <div class="menu-item">
                        <?php if ($item['has_submenu']): ?>
                            <button class="menu-link" data-toggle="submenu">
                                <div class="menu-icon"><i class="fas <?php echo $item['icon']; ?>"></i></div>
                                <span class="menu-text"><?php echo $item['title']; ?></span>
                                <?php if ($item['badge_text']): ?>
                                    <span class="menu-badge <?php echo $item['badge_class']; ?>"><?php echo $item['badge_text']; ?></span>
                                <?php endif; ?>
                                <i class="fas fa-chevron-right menu-arrow"></i>
                            </button>
                            <div class="submenu">
                                <?php foreach ($item['submenus'] as $submenu): ?>
                                    <a href="?page=<?php echo str_replace('#', '', $submenu['link']); ?>" class="submenu-link">
                                        <i class="fas <?php echo $submenu['icon']; ?>"></i>
                                        <?php echo $submenu['title']; ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <a href="?page=<?php echo str_replace('#', '', $item['link']); ?>" class="menu-link">
                                <div class="menu-icon"><i class="fas <?php echo $item['icon']; ?>"></i></div>
                                <span class="menu-text"><?php echo $item['title']; ?></span>
                                <?php if ($item['badge_text']): ?>
                                    <span class="menu-badge <?php echo $item['badge_class']; ?>"><?php echo $item['badge_text']; ?></span>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </nav>
    <button class="sidebar-toggle" id="sidebarToggle">
        <i class="fas fa-chevron-left"></i>
    </button>
</aside>
