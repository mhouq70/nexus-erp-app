<?php
/**
 * Products Page
 */
?>
<div class="page-header">
    <div>
        <h1>Products</h1>
        <p>Manage product catalog and inventory</p>
    </div>
    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addProductModal">
        <i class="fas fa-plus"></i> Add Product
    </button>
</div>

<div class="card">
    <div class="card-header">
        <h3>Product Inventory</h3>
    </div>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="color: var(--primary); font-weight: 600;">SKU-WPX01</td>
                    <td>Widget Pro X</td>
                    <td>Electronics</td>
                    <td style="font-weight: 600;">$65.00</td>
                    <td>142</td>
                    <td><span class="status-badge badge-success">In Stock</span></td>
                    <td>
                        <button class="btn btn-sm" style="background: none; border: none; color: var(--text-secondary); padding: 4px 8px; cursor: pointer;">
                            <i class="fas fa-pen"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td style="color: var(--primary); font-weight: 600;">SKU-SMV03</td>
                    <td>Sensor Module V3</td>
                    <td>Electronics</td>
                    <td style="font-weight: 600;">$70.00</td>
                    <td>380</td>
                    <td><span class="status-badge badge-success">In Stock</span></td>
                    <td>
                        <button class="btn btn-sm" style="background: none; border: none; color: var(--text-secondary); padding: 4px 8px; cursor: pointer;">
                            <i class="fas fa-pen"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td style="color: var(--primary); font-weight: 600;">SKU-PU500</td>
                    <td>Power Unit 500</td>
                    <td>Mechanical</td>
                    <td style="font-weight: 600;">$79.00</td>
                    <td>24</td>
                    <td><span class="status-badge badge-warning">Low Stock</span></td>
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

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background: var(--card); border: 1px solid var(--border);">
            <div class="modal-header" style="border-bottom: 1px solid var(--border);">
                <h5 class="modal-title">Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">SKU</label>
                        <input type="text" class="form-control" placeholder="Product SKU">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" placeholder="Product name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select">
                            <option>Select category...</option>
                            <option>Electronics</option>
                            <option>Mechanical</option>
                            <option>Chemical</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" placeholder="Price" step="0.01">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Stock Quantity</label>
                        <input type="number" class="form-control" placeholder="Quantity">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Reorder Level</label>
                        <input type="number" class="form-control" placeholder="Minimum stock">
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="border-top: 1px solid var(--border);">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Add Product</button>
            </div>
        </div>
    </div>
</div>
