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
    <h3 class="mb-4">Orders</h3>

    <div class="table-responsive">
      <table class="table table-striped table-hover bg-white">
        <thead class="table-dark">
          <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Staff</th>
            <th>Order Date</th>
            <th>Total (RM)</th>
            <th>Status</th>
<th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1001</td>
            <td>Nur Aisyah</td>
            <td>Farah Nabila</td>
            <td>2026-10-20</td>
            <td>74.90</td>
            <td><span class="badge bg-success">Completed</span></td>
            <td><a href="order_details.php" class="btn btn-sm btn-primary">View</a></td>
          </tr>
          <tr>
            <td>1002</td>
            <td>Daniel Tan</td>
            <td>Amirul Hakim</td>
            <td>2026-10-21</td>
            <td>89.90</td>
            <td><span class="badge bg-warning text-dark">Pending</span></td>
            <td><a href="order_details.php" class="btn btn-sm btn-primary">View</a></td>
          </tr>
          <tr>
            <td>1003</td>
            <td>Siti Aminah</td>
            <td>Farah Nabila</td>
            <td>2026-10-22</td>
            <td>29.90</td>
            <td><span class="badge bg-info text-dark">Processing</span></td>
            <td><a href="order_details.php" class="btn btn-sm btn-primary">View</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php require_once 'footer.php'; ?>