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
    <h3 class="mb-4">Products</h3>

    <div class="table-responsive">
      <table class="table table-striped table-hover bg-white">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Age Range</th>
            <th>Clay Type</th>
            <th>Pieces</th>
            <th>Price (RM)</th>
            <th>Stock</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mini Bunny Pot Kit</td>
            <td>5-8</td>
            <td>Air-dry clay</td>
            <td>3</td>
            <td>29.90</td>
            <td>40</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Rainbow Mug Making Set</td>
            <td>6-10</td>
            <td>Air-dry clay</td>
            <td>5</td>
            <td>45.00</td>
            <td>25</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Starter Pottery Wheel Kit</td>
            <td>8-12</td>
            <td>Kiln clay</td>
            <td>8</td>
            <td>89.90</td>
            <td>12</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php require_once 'footer.php'; ?>