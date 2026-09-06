<?php
/**
 * Help Page
 */
?>
<div class="page-header">
    <div>
        <h1>Help Center</h1>
        <p>Find guides, documentation, and support resources</p>
    </div>
</div>

<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card" style="cursor: pointer; transition: all 0.25s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 8px 16px rgba(224,165,38,0.2)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='none';">
            <div class="card-body" style="text-align: center;">
                <i class="fas fa-rocket" style="font-size: 32px; color: var(--primary); display: block; margin-bottom: 12px;"></i>
                <h4 style="margin-bottom: 8px;">Getting Started</h4>
                <p style="font-size: 12px; color: var(--text-secondary);">Quick setup guide</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card" style="cursor: pointer; transition: all 0.25s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 8px 16px rgba(224,165,38,0.2)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='none';">
            <div class="card-body" style="text-align: center;">
                <i class="fas fa-book" style="font-size: 32px; color: var(--primary); display: block; margin-bottom: 12px;"></i>
                <h4 style="margin-bottom: 8px;">Documentation</h4>
                <p style="font-size: 12px; color: var(--text-secondary);">Full API reference</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card" style="cursor: pointer; transition: all 0.25s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 8px 16px rgba(224,165,38,0.2)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='none';">
            <div class="card-body" style="text-align: center;">
                <i class="fas fa-play-circle" style="font-size: 32px; color: var(--primary); display: block; margin-bottom: 12px;"></i>
                <h4 style="margin-bottom: 8px;">Tutorials</h4>
                <p style="font-size: 12px; color: var(--text-secondary);">Video guides</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card" style="cursor: pointer; transition: all 0.25s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 8px 16px rgba(224,165,38,0.2)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='none';">
            <div class="card-body" style="text-align: center;">
                <i class="fas fa-circle-question" style="font-size: 32px; color: var(--primary); display: block; margin-bottom: 12px;"></i>
                <h4 style="margin-bottom: 8px;">FAQ</h4>
                <p style="font-size: 12px; color: var(--text-secondary);">Common questions</p>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3>Frequently Asked Questions</h3>
    </div>
    <div class="card-body">
        <div style="margin-bottom: 24px;">
            <h5 style="margin-bottom: 8px;">How do I create a new user?</h5>
            <p style="color: var(--text-secondary); margin: 0;">Go to the Dashboard and click "Manage Users" in the Quick Actions section. Then click "Add User" to create a new account.</p>
        </div>
        <div style="margin-bottom: 24px;">
            <h5 style="margin-bottom: 8px;">Can I switch between menu types?</h5>
            <p style="color: var(--text-secondary); margin: 0;">Yes! When creating a user, you can select either Horizontal or Vertical menu. Each user has their own menu preference.</p>
        </div>
        <div style="margin-bottom: 24px;">
            <h5 style="margin-bottom: 8px;">How do I change the theme?</h5>
            <p style="color: var(--text-secondary); margin: 0;">Click the moon/sun icon in the top-right corner of the navbar to toggle between dark and light themes.</p>
        </div>
        <div style="margin-bottom: 24px;">
            <h5 style="margin-bottom: 8px;">Where is my data stored?</h5>
            <p style="color: var(--text-secondary); margin: 0;">All application data is securely stored in the MySQL database configured in config/database.php.</p>
        </div>
        <div>
            <h5 style="margin-bottom: 8px;">How do I reset my password?</h5>
            <p style="color: var(--text-secondary); margin: 0;">Contact your administrator to reset your password. Administrators can update user passwords through the User Management page.</p>
        </div>
    </div>
</div>
