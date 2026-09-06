<?php
/**
 * Customers Page
 */
?>
<div class="page-header">
    <div>
        <h1>Customers</h1>
        <p>Manage your customer database</p>
    </div>
    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
        <i class="fas fa-plus"></i> Add Customer
    </button>
</div>

<div class="card">
    <div class="card-header">
        <h3>All Customers</h3>
    </div>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="color: var(--primary); font-weight: 600;">CUS-001</td>
                    <td>Acme Corporation</td>
                    <td>billing@acme.com</td>
                    <td>+1 (555) 123-4567</td>
                    <td>New York</td>
                    <td><span class="status-badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm" style="background: none; border: none; color: var(--text-secondary); padding: 4px 8px; cursor: pointer;">
                            <i class="fas fa-pen"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td style="color: var(--primary); font-weight: 600;">CUS-002</td>
                    <td>Globex Industries</td>
                    <td>ap@globex.com</td>
                    <td>+1 (555) 234-5678</td>
                    <td>Los Angeles</td>
                    <td><span class="status-badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm" style="background: none; border: none; color: var(--text-secondary); padding: 4px 8px; cursor: pointer;">
                            <i class="fas fa-pen"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td style="color: var(--primary); font-weight: 600;">CUS-003</td>
                    <td>Stark Enterprises</td>
                    <td>finance@stark.com</td>
                    <td>+1 (555) 345-6789</td>
                    <td>Chicago</td>
                    <td><span class="status-badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm" style="background: none; border: none; color: var(--text-secondary); padding: 4px 8px; cursor: pointer;">
                            <i class="fas fa-pen"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Add Customer Modal -->
<div class="modal fade" id="addCustomerModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background: var(--card); border: 1px solid var(--border);">
            <div class="modal-header" style="border-bottom: 1px solid var(--border);">
                <h5 class="modal-title">Add New Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Company Name</label>
                        <input type="text" class="form-control" placeholder="Company name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Contact Person</label>
                        <input type="text" class="form-control" placeholder="Contact name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Email address">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Phone</label>
                        <input type="tel" class="form-control" placeholder="Phone number">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="City">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control" placeholder="Country">
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="border-top: 1px solid var(--border);">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Add Customer</button>
            </div>
        </div>
    </div>
</div>
