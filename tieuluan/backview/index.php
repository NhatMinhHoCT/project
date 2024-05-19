<?php
include "header.php";
$page_title = "trangchu";
include "navside.php";
include "../controller/AccountController.php";

$accountController = new AccountController();
$chartData = $accountController->getChartData();
var_dump($chartData);
?>




<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-6 col-xl-3">
      <div class="border border-primary border-3 rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-chart-line fa-3x text-primary"></i>
        <div class="ms-3">
          <p class="mb-2">Đơn hàng mới</p>
          <h6 class="mb-0">+1234</h6>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="border border-primary border-3 rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-chart-bar fa-3x text-primary"></i>
        <div class="ms-3">
          <p class="mb-2">Đơn hàng/tháng</p>
          <h6 class="mb-0">$1234</h6>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="border border-primary border-3 rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-chart-area fa-3x text-primary"></i>
        <div class="ms-3">
          <p class="mb-2">Thành viên</p>
          <h6 class="mb-0">$1234</h6>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="border border-primary border-3 rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-chart-pie fa-3x text-primary"></i>
        <div class="ms-3">
          <p class="mb-2">Tổng doanh số</p>
          <h6 class="mb-0">$1234</h6>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Sale & Revenue End -->


<!-- Sales Chart Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-sm-12 col-xl-6">
      <div class="border border-primary border-3 text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <h6 class="mb-0">Đơn hàng bán ra</h6>
        </div>
        <canvas id="barChart"></canvas>
      </div>
    </div>
    <div class="col-sm-12 col-xl-6">
      <div class="border border-primary border-3 text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <h6 class="mb-0">Salse & Revenue</h6>
        </div>
        <canvas id="salse-revenue"></canvas>
      </div>
    </div>
  </div>
</div>
<!-- Sales Chart End -->

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
  <div class=" text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h6 class="mb-0">Recent Salse</h6>
      <a href="">Show All</a>
    </div>
    <div class="table-responsive">
      <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
          <tr class="text-primary">

            <th scope="col">Date</th>
            <th scope="col">Invoice</th>
            <th scope="col">Customer</th>
            <th scope="col">Amount</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <td>01 Jan 2045</td>
            <td>INV-0123</td>
            <td>Jhon Doe</td>
            <td>$123</td>
            <td>Paid</td>
            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
          </tr>
          <tr>

            <td>01 Jan 2045</td>
            <td>INV-0123</td>
            <td>Jhon Doe</td>
            <td>$123</td>
            <td>Paid</td>
            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
          </tr>
          <tr>

            <td>01 Jan 2045</td>
            <td>INV-0123</td>
            <td>Jhon Doe</td>
            <td>$123</td>
            <td>Paid</td>
            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
          </tr>
          <tr>

            <td>01 Jan 2045</td>
            <td>INV-0123</td>
            <td>Jhon Doe</td>
            <td>$123</td>
            <td>Paid</td>
            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
          </tr>
          <tr>

            <td>01 Jan 2045</td>
            <td>INV-0123</td>
            <td>Jhon Doe</td>
            <td>$123</td>
            <td>Paid</td>
            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Recent Sales End -->

<script>
  var chartData = <?php echo $chartData; ?>;
  // Your chart rendering code here
</script>
<?php
include "footer.php";
?>