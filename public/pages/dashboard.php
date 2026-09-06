<?php
/**
 * Dashboard Page
 */
?>
<div class="page-header">
    <div>
        <h1>Dashboard</h1>
        <p>Welcome back, <?php echo $currentUser['full_name']; ?>. Here's your business overview.</p>
    </div>
    <div>
        <button class="btn btn-secondary btn-sm" onclick="app.showToast('Report exported', 'success')">
            <i class="fas fa-download"></i> Export
        </button>
        <button class="btn btn-primary btn-sm" onclick="window.location='?page=orders'">
            <i class="fas fa-plus"></i> New Order
        </button>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                    <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(224, 165, 38, 0.12); display: flex; align-items: center; justify-content: center; font-size: 18px; color: var(--primary);">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <span class="status-badge badge-success">↑ 12.5%</span>
                </div>
                <div style="font-size: 28px; font-weight: 700; margin-bottom: 2px;">$284,520</div>
                <div style="color: var(--text-secondary); font-size: 13px;">Total Revenue</div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                    <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(34, 197, 94, 0.12); display: flex; align-items: center; justify-content: center; font-size: 18px; color: var(--success);">
                        <i class="fas fa-bag-shopping"></i>
                    </div>
                    <span class="status-badge badge-success">↑ 8.2%</span>
                </div>
                <div style="font-size: 28px; font-weight: 700; margin-bottom: 2px;">1,847</div>
                <div style="color: var(--text-secondary); font-size: 13px;">Total Orders</div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                    <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(59, 130, 246, 0.12); display: flex; align-items: center; justify-content: center; font-size: 18px; color: var(--info);">
                        <i class="fas fa-users"></i>
                    </div>
                    <span class="status-badge badge-success">↑ 23.1%</span>
                </div>
                <div style="font-size: 28px; font-weight: 700; margin-bottom: 2px;">3,492</div>
                <div style="color: var(--text-secondary); font-size: 13px;">Active Customers</div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                    <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(245, 158, 11, 0.12); display: flex; align-items: center; justify-content: center; font-size: 18px; color: var(--warning);">
                        <i class="fas fa-box"></i>
                    </div>
                    <span class="status-badge badge-danger">↓ 3.4%</span>
                </div>
                <div style="font-size: 28px; font-weight: 700; margin-bottom: 2px;">12,680</div>
                <div style="color: var(--text-secondary); font-size: 13px;">Items in Stock</div>
            </div>
        </div>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <h3>Quick Actions</h3>
    </div>
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-3">
                <a href="?page=users" style="text-decoration: none;">
                    <div style="border: 1px solid var(--border); border-radius: 8px; padding: 20px; text-align: center; cursor: pointer; transition: all 0.25s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 8px 16px rgba(224,165,38,0.2)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='none';">
                        <i class="fas fa-users" style="font-size: 24px; color: var(--primary); margin-bottom: 10px; display: block;"></i>
                        <div style="font-weight: 600; margin-bottom: 4px;">Manage Users</div>
                        <div style="font-size: 12px; color: var(--text-secondary);">View & edit users</div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <div style="border: 1px solid var(--border); border-radius: 8px; padding: 20px; text-align: center; cursor: pointer; transition: all 0.25s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 8px 16px rgba(224,165,38,0.2)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='none';" onclick="app.showToast('Opening invoices...', 'info')">
                    <i class="fas fa-file-invoice-dollar" style="font-size: 24px; color: var(--primary); margin-bottom: 10px; display: block;"></i>
                    <div style="font-weight: 600; margin-bottom: 4px;">Create Invoice</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">New invoice</div>
                </div>
            </div>
            <div class="col-md-3">
                <div style="border: 1px solid var(--border); border-radius: 8px; padding: 20px; text-align: center; cursor: pointer; transition: all 0.25s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 8px 16px rgba(224,165,38,0.2)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='none';" onclick="app.showToast('Opening reports...', 'info')">
                    <i class="fas fa-chart-bar" style="font-size: 24px; color: var(--primary); margin-bottom: 10px; display: block;"></i>
                    <div style="font-weight: 600; margin-bottom: 4px;">View Reports</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">Analytics & insights</div>
                </div>
            </div>
            <div class="col-md-3">
                <div style="border: 1px solid var(--border); border-radius: 8px; padding: 20px; text-align: center; cursor: pointer; transition: all 0.25s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 8px 16px rgba(224,165,38,0.2)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='none';" onclick="app.showToast('Opening settings...', 'info')">
                    <i class="fas fa-gear" style="font-size: 24px; color: var(--primary); margin-bottom: 10px; display: block;"></i>
                    <div style="font-weight: 600; margin-bottom: 4px;">Settings</div>
                    <div style="font-size: 12px; color: var(--text-secondary);">Configuration</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Recent Orders</h3>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="color: var(--primary); font-weight: 600;">ORD-4821</td>
                            <td>Acme Corporation</td>
                            <td style="font-weight: 600;">$3,250.00</td>
                            <td>2024-12-18</td>
                            <td><span class="status-badge badge-success">Completed</span></td>
                        </tr>
                        <tr>
                            <td style="color: var(--primary); font-weight: 600;">ORD-4820</td>
                            <td>Globex Industries</td>
                            <td style="font-weight: 600;">$8,420.00</td>
                            <td>2024-12-18</td>
                            <td><span class="status-badge badge-info">Processing</span></td>
                        </tr>
                        <tr>
                            <td style="color: var(--primary); font-weight: 600;">ORD-4819</td>
                            <td>Stark Enterprises</td>
                            <td style="font-weight: 600;">$15,800.00</td>
                            <td>2024-12-17</td>
                            <td><span class="status-badge badge-success">Completed</span></td>
                        </tr>
                        <tr>
                            <td style="color: var(--primary); font-weight: 600;">ORD-4818</td>
                            <td>Wayne Tech</td>
                            <td style="font-weight: 600;">$2,140.00</td>
                            <td>2024-12-17</td>
                            <td><span class="status-badge badge-warning">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Recent Activity</h3>
            </div>
            <div class="card-body">
                <div style="display: flex; gap: 12px; margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid var(--border);">
                    <div style="width: 8px; height: 8px; border-radius: 50%; background: var(--success); margin-top: 4px;"></div>
                    <div>
                        <div style="font-size: 13px; font-weight: 500;">Payment received</div>
                        <div style="font-size: 11px; color: var(--muted);">2 minutes ago</div>
                    </div>
                    <div style="margin-left: auto; color: var(--success); font-weight: 600;">+$12,400</div>
                </div>
                <div style="display: flex; gap: 12px; margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid var(--border);">
                    <div style="width: 8px; height: 8px; border-radius: 50%; background: var(--info); margin-top: 4px;"></div>
                    <div>
                        <div style="font-size: 13px; font-weight: 500;">New order created</div>
                        <div style="font-size: 11px; color: var(--muted);">18 minutes ago</div>
                    </div>
                    <div style="margin-left: auto; color: var(--info); font-weight: 600;">$3,250</div>
                </div>
                <div style="display: flex; gap: 12px; margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid var(--border);">
                    <div style="width: 8px; height: 8px; border-radius: 50%; background: var(--warning); margin-top: 4px;"></div>
                    <div>
                        <div style="font-size: 13px; font-weight: 500;">Low stock alert</div>
                        <div style="font-size: 11px; color: var(--muted);">1 hour ago</div>
                    </div>
                    <div style="margin-left: auto; color: var(--warning); font-weight: 600;">14 left</div>
                </div>
                <div style="display: flex; gap: 12px; padding-bottom: 0;">
                    <div style="width: 8px; height: 8px; border-radius: 50%; background: var(--danger); margin-top: 4px;"></div>
                    <div>
                        <div style="font-size: 13px; font-weight: 500;">Invoice overdue</div>
                        <div style="font-size: 11px; color: var(--muted);">3 hours ago</div>
                    </div>
                    <div style="margin-left: auto; color: var(--danger); font-weight: 600;">$5,800</div>
                </div>
            </div>
        </div>
    </div>
</div>
