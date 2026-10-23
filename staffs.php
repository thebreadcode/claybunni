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
    <h3 class="mb-4">Staffs</h3>

    <div class="table-responsive">
      <table class="table table-striped table-hover bg-white">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Amirul Hakim</td>
            <td>amirul@claybunni.com</td>
            <td>012-111 2233</td>
            <td>Manager</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Farah Nabila</td>
            <td>farah@claybunni.com</td>
            <td>013-444 5566</td>
            <td>Cashier</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Jason Lim</td>
            <td>jason@claybunni.com</td>
            <td>011-777 8899</td>
            <td>Workshop Instructor</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php require_once 'footer.php'; ?>