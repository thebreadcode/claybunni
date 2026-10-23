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
    <h3 class="mb-2">Order Details</h3>
    <p class="text-muted mb-4">Order #1001 | Customer: Nur Aisyah | Date: 2026-10-20</p>

    <div class="table-responsive">
      <table class="table table-striped table-hover bg-white">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Product</th>
            <th>Unit Price (RM)</th>
            <th>Quantity</th>
            <th>Subtotal (RM)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mini Bunny Pot Kit</td>
            <td>29.90</td>
            <td>1</td>
            <td>29.90</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Rainbow Mug Making Set</td>
            <td>45.00</td>
            <td>1</td>
            <td>45.00</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="4" class="text-end">Total</th>
            <th>RM 74.90</th>
          </tr>
        </tfoot>
      </table>
    </div>

    <a href="orders.php" class="btn btn-secondary">
      <i class="bi bi-arrow-left me-1"></i>Back to Orders
    </a>
  </div>
</div>

<?php require_once 'footer.php'; ?>