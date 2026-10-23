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
    <h3 class="mb-4">Customers</h3>

    <div class="table-responsive">
      <table class="table table-striped table-hover bg-white">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Nur Aisyah</td>
            <td>aisyah@email.com</td>
            <td>012-345 6789</td>
            <td>Bangi, Selangor</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Daniel Tan</td>
            <td>daniel@email.com</td>
            <td>011-222 3344</td>
            <td>Kajang, Selangor</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Siti Aminah</td>
            <td>aminah@email.com</td>
            <td>013-987 6543</td>
            <td>Cheras, Kuala Lumpur</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php require_once 'footer.php'; ?>