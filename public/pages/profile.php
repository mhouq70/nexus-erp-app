<?php
/**
 * Profile Page
 */
?>
<div class="page-header">
    <div>
        <h1>My Profile</h1>
        <p>View and manage your profile information</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Profile Information</h3>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" value="<?php echo $currentUser['full_name']; ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" value="<?php echo $currentUser['email']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" value="<?php echo $currentUser['username']; ?>" disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Role</label>
                            <input type="text" class="form-control" value="<?php echo ucfirst($currentUser['role']); ?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Member Since</label>
                        <input type="text" class="form-control" value="<?php echo date('F d, Y', strtotime($currentUser['created_at'])); ?>" disabled>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fas fa-save"></i> Save Changes
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Profile Picture</h3>
            </div>
            <div class="card-body" style="text-align: center;">
                <div style="width: 100px; height: 100px; border-radius: 10px; background: linear-gradient(135deg, var(--primary), #d4770a); display: flex; align-items: center; justify-content: center; font-size: 48px; color: #fff; font-weight: 900; margin: 0 auto 16px;">
                    <?php echo strtoupper(substr($currentUser['full_name'], 0, 2)); ?>
                </div>
                <button class="btn btn-secondary btn-sm" style="width: 100%;">
                    <i class="fas fa-upload"></i> Upload Photo
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Account Status</h3>
            </div>
            <div class="card-body">
                <div style="margin-bottom: 12px;">
                    <span class="status-badge badge-success">Active</span>
                </div>
                <small style="color: var(--text-secondary);">Your account is active and in good standing</small>
            </div>
        </div>
    </div>
</div>
