<?php
/**
 * Orders Page
 */
?>
<div class="page-header">
    <div>
        <h1>Sales Orders</h1>
        <p>Manage customer orders and sales</p>
    </div>
    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addOrderModal">
        <i class="fas fa-plus"></i> New Order
    </button>
</div>

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
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="color: var(--primary); font-weight: 600;">ORD-4821</td>
                    <td>Acme Corporation</td>
                    <td>Widget Pro X</td>
                    <td>50</td>
                    <td style="font-weight: 600;">$3,250.00</td>
                    <td>2024-12-18</td>
                    <td><span class="status-badge badge-success">Completed</span></td>
                    <td style="font-size: 12px; display: flex; gap: 4px;">
                        <button class="btn btn-sm" style="background: none; border: none; color: var(--text-secondary); padding: 4px 8px; cursor: pointer;">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-sm" style="background: none; border: none; color: var(--text-secondary); padding: 4px 8px; cursor: pointer;">
                            <i class="fas fa-pen"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td style="color: var(--primary); font-weight: 600;">ORD-4820</td>
                    <td>Globex Industries</td>
                    <td>Sensor Module V3</td>
                    <td>120</td>
                    <td style="font-weight: 600;">$8,420.00</td>
                    <td>2024-12-18</td>
                    <td><span class="status-badge badge-info">Processing</span></td>
                    <td style="font-size: 12px; display: flex; gap: 4px;">
                        <button class="btn btn-sm" style="background: none; border: none; color: var(--text-secondary); padding: 4px 8px; cursor: pointer;">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-sm" style="background: none; border: none; color: var(--text-secondary); padding: 4px 8px; cursor: pointer;">
                            <i class="fas fa-pen"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td style="color: var(--primary); font-weight: 600;">ORD-4819</td>
                    <td>Stark Enterprises</td>
                    <td>Power Unit 500</td>
                    <td>200</td>
                    <td style="font-weight: 600;">$15,800.00</td>
                    <td>2024-12-17</td>
                    <td><span class="status-badge badge-success">Completed</span></td>
                    <td style="font-size: 12px; display: flex; gap: 4px;">
                        <button class="btn btn-sm" style="background: none; border: none; color: var(--text-secondary); padding: 4px 8px; cursor: pointer;">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-sm" style="background: none; border: none; color: var(--text-secondary); padding: 4px 8px; cursor: pointer;">
                            <i class="fas fa-pen"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Add Order Modal -->
<div class="modal fade" id="addOrderModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background: var(--card); border: 1px solid var(--border);">
            <div class="modal-header" style="border-bottom: 1px solid var(--border);">
                <h5 class="modal-title">Create New Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Customer</label>
                        <select class="form-select">
                            <option>Select customer...</option>
                            <option>Acme Corporation</option>
                            <option>Globex Industries</option>
                            <option>Stark Enterprises</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Order Date</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Product</label>
                        <select class="form-select">
                            <option>Select product...</option>
                            <option>Widget Pro X</option>
                            <option>Sensor Module V3</option>
                            <option>Power Unit 500</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="number" class="form-control" value="1">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Notes</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer" style="border-top: 1px solid var(--border);">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Create Order</button>
            </div>
        </div>
    </div>
</div>
