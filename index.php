<?php require_once 'header.php'; ?>

<?php require_once 'sidebar.php'; ?>

<div class="col bg-light">
  <!-- Mobile Header with Burger -->
  <div id="myBurger" class="p-3 d-lg-none text-white bg-dark">
    <div class="row">
      <a href="#" class="text-white text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#mySidebar">
        <i class="bi bi-list"></i><h5 class="ms-3 d-inline">ClayBunni</h5>
      </a>
    </div>
  </div>

  <div class="p-4">

    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
      <h2 class="fw-bold">Welcome to ClayBunni</h2>
      <p class="lead mb-0">Pottery craft kits for kids. Manage your products, customers, staffs and orders in one place.</p>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <i class="bi bi-box-seam-fill fs-1"></i>
            <h5 class="mt-2">Products</h5>
            <p class="text-muted">View and manage pottery kits.</p>
            <a href="products.php" class="btn btn-dark btn-sm">Open</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <i class="bi bi-people-fill fs-1"></i>
            <h5 class="mt-2">Customers</h5>
            <p class="text-muted">View and manage customers.</p>
            <a href="customers.php" class="btn btn-dark btn-sm">Open</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <i class="bi bi-person-badge-fill fs-1"></i>
            <h5 class="mt-2">Staffs</h5>
            <p class="text-muted">View and manage staff members.</p>
            <a href="staffs.php" class="btn btn-dark btn-sm">Open</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
          <div class="card-body text-center">
            <i class="bi bi-cart-fill fs-1"></i>
            <h5 class="mt-2">Orders</h5>
            <p class="text-muted">View orders and invoices.</p>
            <a href="orders.php" class="btn btn-dark btn-sm">Open</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php require_once 'footer.php'; ?>