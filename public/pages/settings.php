<?php
/**
 * Settings Page
 */
?>
<div class="page-header">
    <div>
        <h1>Settings</h1>
        <p>Configure application preferences and settings</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Appearance</h3>
            </div>
            <div class="card-body">
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0; border-bottom: 1px solid var(--border);">
                    <div>
                        <div style="font-weight: 600; margin-bottom: 4px;">Dark Mode</div>
                        <div style="font-size: 13px; color: var(--text-secondary);">Use dark theme for the application</div>
                    </div>
                    <label style="cursor: pointer; position: relative;">
                        <input type="checkbox" checked style="display: none;">
                        <div style="width: 44px; height: 24px; background: var(--primary); border-radius: 12px; position: relative; transition: all 0.25s ease;">
                            <div style="width: 18px; height: 18px; background: #fff; border-radius: 50%; position: absolute; top: 3px; left: 23px; transition: all 0.25s ease;"></div>
                        </div>
                    </label>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0;">
                    <div>
                        <div style="font-weight: 600; margin-bottom: 4px;">Compact Sidebar</div>
                        <div style="font-size: 13px; color: var(--text-secondary);">Show only icons in sidebar</div>
                    </div>
                    <label style="cursor: pointer; position: relative;">
                        <input type="checkbox" style="display: none;">
                        <div style="width: 44px; height: 24px; background: var(--border); border-radius: 12px; position: relative; transition: all 0.25s ease;">
                            <div style="width: 18px; height: 18px; background: #fff; border-radius: 50%; position: absolute; top: 3px; left: 3px; transition: all 0.25s ease;"></div>
                        </div>
                    </label>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h3>Notifications</h3>
            </div>
            <div class="card-body">
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0; border-bottom: 1px solid var(--border);">
                    <div>
                        <div style="font-weight: 600; margin-bottom: 4px;">Email Notifications</div>
                        <div style="font-size: 13px; color: var(--text-secondary);">Receive order and payment alerts</div>
                    </div>
                    <label style="cursor: pointer; position: relative;">
                        <input type="checkbox" checked style="display: none;">
                        <div style="width: 44px; height: 24px; background: var(--primary); border-radius: 12px; position: relative; transition: all 0.25s ease;">
                            <div style="width: 18px; height: 18px; background: #fff; border-radius: 50%; position: absolute; top: 3px; left: 23px; transition: all 0.25s ease;"></div>
                        </div>
                    </label>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0;">
                    <div>
                        <div style="font-weight: 600; margin-bottom: 4px;">Low Stock Alerts</div>
                        <div style="font-size: 13px; color: var(--text-secondary);">Get notified for low inventory</div>
                    </div>
                    <label style="cursor: pointer; position: relative;">
                        <input type="checkbox" checked style="display: none;">
                        <div style="width: 44px; height: 24px; background: var(--primary); border-radius: 12px; position: relative; transition: all 0.25s ease;">
                            <div style="width: 18px; height: 18px; background: #fff; border-radius: 50%; position: absolute; top: 3px; left: 23px; transition: all 0.25s ease;"></div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Account Info</h3>
            </div>
            <div class="card-body">
                <div style="margin-bottom: 12px;">
                    <div style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; color: var(--muted); margin-bottom: 4px;">Full Name</div>
                    <div><?php echo $currentUser['full_name']; ?></div>
                </div>
                <div style="margin-bottom: 12px;">
                    <div style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; color: var(--muted); margin-bottom: 4px;">Email</div>
                    <div><?php echo $currentUser['email']; ?></div>
                </div>
                <div style="margin-bottom: 12px;">
                    <div style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; color: var(--muted); margin-bottom: 4px;">Role</div>
                    <div><?php echo ucfirst($currentUser['role']); ?></div>
                </div>
                <div>
                    <div style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; color: var(--muted); margin-bottom: 4px;">Joined</div>
                    <div><?php echo date('M d, Y', strtotime($currentUser['created_at'])); ?></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Security</h3>
            </div>
            <div class="card-body">
                <button class="btn btn-primary btn-sm" style="width: 100%; margin-bottom: 8px;">
                    <i class="fas fa-key"></i> Change Password
                </button>
                <button class="btn btn-secondary btn-sm" style="width: 100%;">
                    <i class="fas fa-sign-out-alt"></i> Sign Out
                </button>
            </div>
        </div>
    </div>
</div>
