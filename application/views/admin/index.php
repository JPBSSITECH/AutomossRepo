<?php    
    include('inc/header.php');

?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  


            
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-xl">
                                <!-- Card -->
                                <a href="<?=base_url() ?>admin/customer" class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h6 class="text-uppercase font-14">
                                                    Customers
                                                </h6>

                                                <!-- Heading -->
                                                <span class="font-24 text-dark mb-0">
                                                    <?=$cust->num ?>
                                                </span>
                                            </div>

                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <div class="icon">
                                                    <img src="<?=base_url('admin_codebase') ?>/img/bg-img/icon-11.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-sm-6 col-xl">
                                <!-- Card -->
                                <a href="<?=base_url() ?>admin/garage" class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h6 class="text-uppercase font-14">
                                                    Garage
                                                </h6>

                                                <!-- Heading -->
                                                <span class="font-24 text-dark mb-0">
                                                    <?=$garage->num ?>
                                                </span>
                                            </div>

                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <div class="icon">
                                                    <img src="<?=base_url('admin_codebase') ?>/img/bg-img/icon-11.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-12 col-sm-6 col-xl">
                                <!-- Card -->
                                <a href="<?=base_url() ?>admin/usedcar" class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h6 class="text-uppercase font-14">
                                                    Car To Sell
                                                </h6>

                                                <!-- Heading -->
                                                <span class="font-24 text-dark mb-0">
                                                    <?=$car->num ?>
                                                </span>
                                            </div>

                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <div class="icon">
                                                    <img src="<?=base_url('admin_codebase') ?>/img/bg-img/icon-11.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-12 col-sm-6 col-xl">
                                <!-- Card -->
                                 <a href="<?=base_url() ?>admin/product"  class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h6 class="text-uppercase font-14">
                                                    Products
                                                </h6>

                                                <!-- Heading -->
                                                <span class="font-24 text-dark mb-0">
                                                    <?=$prod->num ?>
                                                </span>
                                            </div>

                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <div class="icon">
                                                    <img src="<?=base_url('admin_codebase') ?>/img/bg-img/icon-11.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                             
                        </div>

                        <div class="row" style="min-height: 800px;">
                             
                                
                                                      
                             
                            <div class="col-md-8">
                            <h4>Daily Service Bookings!</h4>  
                            <div class="card">
                                  <div class="card-body">
                                    <canvas id="patientsChart"></canvas>
                                  </div>
                            </div>
                            </div>
                            <div class="col-md-4">



                                         
                            </div>                              
                             


                        </div>


                         












                        <!-- / .row -->

                        <div class="row  d-none">
                            <!-- Order Summary -->
                            <div class="col-md-7  box-margin height-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-50">
                                            <h4 class="card-title mb-0">Order <span
                                                    class="break-320-480-none">Summary</span></h4>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary btn-sm mr-2">Month</button>
                                                <button type="button" class="btn btn-secondary btn-sm">Week</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Order Chart -->
                                    <div class="card-body p-0">
                                        <div class="card-content">
                                            <div id="order-summary-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                             

                            <!-- Visits Chart Area -->
                            <div class="col-md-5  box-margin height-card ">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <h4 class="card-title">Visits of 2019</h4>
                                            <div id="radial-chart"></div>
                                            <ul class="list-inline d-flex justify-content-around mb-0">
                                                <li> <i class="fa fa-circle mr-1 text-danger"></i>Target</li>
                                                <li> <i class="fa fa-circle text-success mr-1"></i>Mart</li>
                                                <li> <i class="fa fa-circle text-primary mr-1"></i>Ebay</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


 
 
                            

                            <!-- Order Summary Area -->
                            <div class="col-12 box-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Order Summary</h6>
                                        <!-- Table -->
                                        <div class="table-responsive">
                                            <table class="table table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Invoice</th>
                                                        <th>Order</th>
                                                        <th>Amount</th>
                                                        <th>Client</th>
                                                        <th>Modified</th>
                                                        <th>Taxes</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button"
                                                                class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i
                                                                        class="fa fa-download"></i></span>
                                                                <span class="btn-inner--text">Invoice</span>
                                                            </button>
                                                        </th>
                                                        <td class="order">
                                                            <span class="font-14 mb-0">10/09/2018</span>
                                                            <span class="d-block font-13">ABC 00023</span>
                                                        </td>
                                                        <td>2569854</td>
                                                        <td>
                                                            <span class="client">Apple Inc</span>
                                                        </td>
                                                        <td>18/11/19</td>
                                                        <td>
                                                            <span class="taxes text-sm mb-0">$1.115,45</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <button type="button"
                                                                    class="btn btn-rounded btn-outline-success">
                                                                    <span class="btn-inner--text">Paid</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button"
                                                                class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i
                                                                        class="fa fa-download"></i></span>
                                                                <span class="btn-inner--text">Invoice</span>
                                                            </button>
                                                        </th>
                                                        <td class="order">
                                                            <span class="font-14 mb-0">10/09/2018</span>
                                                            <span class="d-block font-13">ABC 00023</span>
                                                        </td>
                                                        <td>2569854</td>
                                                        <td>
                                                            <span class="client">Apple Inc</span>
                                                        </td>
                                                        <td>12/11/19</td>
                                                        <td>
                                                            <span class="taxes text-sm mb-0">$1.115,45</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <button type="button"
                                                                    class="btn btn-rounded btn-outline-warning">
                                                                    <span class="btn-inner--text">Pay now</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button"
                                                                class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i
                                                                        class="fa fa-download"></i></span>
                                                                <span class="btn-inner--text">Invoice</span>
                                                            </button>
                                                        </th>
                                                        <td class="order">
                                                            <span class="font-14 mb-0">10/09/2018</span>
                                                            <span class="d-block font-13">ABC 00023</span>
                                                        </td>
                                                        <td>2569854</td>
                                                        <td>
                                                            <span class="client">Apple Inc</span>
                                                        </td>
                                                        <td>20/11/19</td>
                                                        <td>
                                                            <span class="taxes text-sm mb-0">$1.115,45</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <button type="button"
                                                                    class="btn btn-rounded btn-outline-danger">
                                                                    <span class="btn-inner--text">Delayed</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button"
                                                                class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i
                                                                        class="fa fa-download"></i></span>
                                                                <span class="btn-inner--text">Invoice</span>
                                                            </button>
                                                        </th>
                                                        <td class="order">
                                                            <span class="font-14 mb-0">10/09/2018</span>
                                                            <span class="d-block font-13">ABC 00023</span>
                                                        </td>
                                                        <td>2569854</td>
                                                        <td>
                                                            <span class="client">Apple Inc</span>
                                                        </td>
                                                        <td>28/11/19</td>
                                                        <td>
                                                            <span class="taxes text-sm mb-0">$1.115,45</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <button type="button"
                                                                    class="btn btn-rounded btn-outline-success">
                                                                    <span class="btn-inner--text">Paid</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <button type="button"
                                                                class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                                                <span class="btn-inner--icon"><i
                                                                        class="fa fa-download"></i></span>
                                                                <span class="btn-inner--text">Invoice</span>
                                                            </button>
                                                        </th>
                                                        <td class="order">
                                                            <span class="font-14 mb-0">10/09/2018</span>
                                                            <span class="d-block font-13">ABC 00023</span>
                                                        </td>
                                                        <td>2569854</td>
                                                        <td>
                                                            <span class="client">Apple Inc</span>
                                                        </td>
                                                        <td>29/11/19</td>
                                                        <td>
                                                            <span class="taxes text-sm mb-0">$1.115,45</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <button type="button"
                                                                    class="btn btn-rounded btn-outline-success">
                                                                    <span class="btn-inner--text">Paid</span>
                                                                </button>
                                                                <!-- Actions -->
                                                                <div class="actions ml-3">
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        data-original-title="Edit">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a href="#" class="action-item mr-2"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        data-original-title="Archive">
                                                                        <i class="fa fa-archive"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
        


<?php    
    include('inc/footer.php');

?>

 

<script>
    // Initialize Chart.js
    const ctx = document.getElementById('patientsChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?=json_encode($chart_date) ?>,
        datasets: [{
          label: 'Bookings',
          data: <?=json_encode($chart_val) ?>,
        backgroundColor: 'rgba(255, 0, 0, 0.8)',

          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>