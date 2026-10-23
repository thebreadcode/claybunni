<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to ClayBunni</h2>
        <p class="text-muted mb-0">Pottery craft kits for kids</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body p-5 text-center">
        <i class="bi bi-balloon-heart-fill text-primary display-3"></i>
        <h3 class="mt-3">Let little hands create something special</h3>
        <p class="lead text-muted mb-0">Manage your products, customers, staffs and orders in one place.</p>
    </div>
</div>

<div class="row g-4">
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-box-seam-fill fs-1 text-primary"></i>
                <h5 class="mt-2">Products</h5>
                <p class="text-muted">View and manage pottery kits.</p>
                <a href="products.php" class="btn btn-primary btn-sm">Open</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-people-fill fs-1 text-primary"></i>
                <h5 class="mt-2">Customers</h5>
                <p class="text-muted">View and manage customers.</p>
                <a href="customers.php" class="btn btn-primary btn-sm">Open</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-person-badge-fill fs-1 text-primary"></i>
                <h5 class="mt-2">Staffs</h5>
                <p class="text-muted">View and manage staff members.</p>
                <a href="staffs.php" class="btn btn-primary btn-sm">Open</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-cart-fill fs-1 text-primary"></i>
                <h5 class="mt-2">Orders</h5>
                <p class="text-muted">View orders and invoices.</p>
                <a href="orders.php" class="btn btn-primary btn-sm">Open</a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>