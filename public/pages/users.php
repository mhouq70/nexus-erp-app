<?php
/**
 * Users Management Page
 */
$userController = new UserController($pdo);
$users = $userController->getAll();

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'create') {
        $result = $userController->create([
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'full_name' => $_POST['full_name'],
            'menu_type' => $_POST['menu_type'] ?? 'horizontal'
        ]);
        $message = $result['success'] ? 'User created successfully' : $result['message'];
        if ($result['success']) {
            $users = $userController->getAll();
        }
    } elseif ($action === 'delete') {
        $result = $userController->delete($_POST['user_id']);
        $message = $result['success'] ? 'User deleted successfully' : $result['message'];
        if ($result['success']) {
            $users = $userController->getAll();
        }
    }
}
?>

<div class="page-header">
    <div>
        <h1>User Management</h1>
        <p>Create, edit, and manage user accounts</p>
    </div>
    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addUserModal">
        <i class="fas fa-plus"></i> Add User
    </button>
</div>

<?php if ($message): ?>
    <div class="alert alert-<?php echo strpos($message, 'successfully') !== false ? 'success' : 'danger'; ?>">
        <i class="fas fa-<?php echo strpos($message, 'successfully') !== false ? 'check-circle' : 'exclamation-circle'; ?>"></i>
        <?php echo $message; ?>
    </div>
<?php endif; ?>

<div class="card">
    <div class="card-header">
        <h3>All Users (<?php echo count($users); ?>)</h3>
    </div>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Menu Type</th>
                    <th>Joined</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td style="color: var(--primary); font-weight: 600;">#<?php echo $user['id']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['full_name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><span class="status-badge badge-info"><?php echo ucfirst($user['role']); ?></span></td>
                        <td><?php echo ucfirst($user['menu_type']); ?></td>
                        <td><?php echo date('M d, Y', strtotime($user['created_at'])); ?></td>
                        <td>
                            <button class="btn btn-sm" style="background: none; border: none; color: var(--text-secondary); padding: 4px 8px; cursor: pointer;" title="Edit">
                                <i class="fas fa-pen"></i>
                            </button>
                            <form method="POST" style="display: inline;" onsubmit="return confirm('Delete this user?');">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                                <button type="submit" class="btn btn-sm" style="background: none; border: none; color: var(--danger); padding: 4px 8px; cursor: pointer;" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="background: var(--card); border: 1px solid var(--border);">
            <div class="modal-header" style="border-bottom: 1px solid var(--border);">
                <h5 class="modal-title">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST">
                <input type="hidden" name="action" value="create">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="full_name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Menu Type</label>
                        <select class="form-select" name="menu_type">
                            <option value="horizontal">Horizontal</option>
                            <option value="vertical">Vertical</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid var(--border);">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Create User</button>
                </div>
            </form>
        </div>
    </div>
</div>
