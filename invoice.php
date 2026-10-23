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
    <div class="card shadow-sm">
      <div class="card-body p-4">

        <div class="row mb-4">
          <div class="col-sm-6">
            <h3 class="mb-0">ClayBunni</h3>
            <small class="text-muted">Pottery Craft Kits for Kids</small>
          </div>
          <div class="col-sm-6 text-sm-end">
            <h4 class="mb-0">INVOICE</h4>
            <div>Invoice No: INV-1001</div>
            <div>Date: 2026-10-20</div>
          </div>
        </div>

        <hr>

        <div class="row mb-4">
          <div class="col-sm-6">
            <h6 class="text-muted">Billed To</h6>
            <div>Nur Aisyah</div>
            <div>aisyah@email.com</div>
            <div>012-345 6789</div>
            <div>Bangi, Selangor</div>
          </div>
          <div class="col-sm-6 text-sm-end">
            <h6 class="text-muted">Served By</h6>
            <div>Farah Nabila</div>
            <div>Cashier</div>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="table-dark">
              <tr>
                <th>No.</th>
                <th>Product</th>
                <th>Unit Price (RM)</th>
                <th>Qty</th>
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

        <p class="text-center text-muted mt-4 mb-0">Thank you for shopping at ClayBunni!</p>

      </div>
    </div>

    <div class="mt-3">
      <a href="orders.php" class="btn btn-secondary">
        <i class="bi bi-arrow-left me-1"></i>Back to Orders
      </a>
      <button class="btn btn-primary" onclick="window.print()">
        <i class="bi bi-printer me-1"></i>Print
      </button>
    </div>
  </div>
</div>

<?php require_once 'footer.php'; ?>