 <?php    
    
    $this->load->view('customer/inc/header2');
?>





      
                    <div class="account__wrapper">
                        <div class="account__content">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card bg-transparent border-0" style="min-height: 120px;">

                                        <div class="row mb-5">
                                            <!-- Card 1 -->
                                            <div class="col-lg-3 col-md-6">
                                                <a href="<?=base_url() ?>customer/booking_list" style="display: flex; align-items: center; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; background-color: #fff;">
                                                    <div style="width: 45px; height: 45px; border-radius: 50%; background-color: #ED1D24; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 17px;">
                                                        <i class="bi bi-calendar"></i>
                                                    </div>
                                                    <div style="margin-left: 15px;">
                                                        <h5 style="margin: 0; font-weight: 600;">My Bookings</h5>
                                                        <small style="font-size: 13px; color: #6c757d;"><?=$bd->num ?></small>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Card 2 -->
                                            <div class="col-lg-3 col-md-6">
                                                <div style="display: flex; align-items: center; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; background-color: #fff;">
                                                    <div style="width: 45px; height: 45px; border-radius: 50%; background-color: #ED1D24; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 17px;">
                                                        <i class="fa fa-car"></i> 
                                                    </div>
                                                    <div style="margin-left: 15px;">
                                                        <h5 style="margin: 0; font-weight: 600;">My Car Sale</h5>
                                                        <small style="font-size: 13px; color: #6c757d;">4</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card 3 -->
                                            <div class="col-lg-3 col-md-6">
                                                <div style="display: flex; align-items: center; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; background-color: #fff;">
                                                    <div style="width: 45px; height: 45px; border-radius: 50%; background-color: #ED1D24; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 17px;">
                                                        <i class="bi bi-card-text"></i> <!-- Card Icon -->

                                                    </div>
                                                    <div style="margin-left: 15px;">
                                                        <h5 style="margin: 0; font-weight: 600;">My Job Cards</h5>
                                                        <small style="font-size: 13px; color: #6c757d;">8</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card 4 -->
                                            <div class="col-lg-3 col-md-6">
                                                <div style="display: flex; align-items: center; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; background-color: #fff;">
                                                    <div style="width: 45px; height: 45px; border-radius: 50%; background-color: #ED1D24; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 17px;">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </div>
                                                    <div style="margin-left: 15px;">
                                                        <h5 style="margin: 0; font-weight: 600;">Messages</h5>
                                                        <small style="font-size: 13px; color: #6c757d;">Check inbox</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
 
                                        <div class="row d-none"> 
                                          <!-- Bar Chart -->
                                          <div class="col-md-8 d-none">
                                            <div class="card">
                                              <div class="card-body">
                                                <canvas id="patientsChart" style="display: block; box-sizing: border-box; height: 111px; width: 222px;" width="277" height="138"></canvas>
                                              </div>
                                            </div>
                                          </div>

                                        <div class="col-md-4">
                                            <div class="card">
                                                <h3 class="text-start ms-3 mt-3 fw-bold" style="color: #ED1D24;">Quick Links</h3>
                                                <div class="card-body">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="<?=base_url()?>" class="d-flex align-items-center text-decoration-none mb-3 p-3 rounded-3 border border-2 border-light hover-bg-primary hover-text-white transition-all">
                                                                <i class="bi bi-house-door-fill me-3 fs-4"></i>
                                                                Home
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?=base_url('customer/booking_list')?>" class="d-flex align-items-center text-decoration-none mb-3 p-3 rounded-3 border border-2 border-light hover-bg-primary hover-text-white transition-all">
                                                                <i class="bi bi-briefcase-fill me-3 fs-4"></i>
                                                                My Bookings
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?=base_url('about')?>" class="d-flex align-items-center text-decoration-none mb-3 p-3 rounded-3 border border-2 border-light hover-bg-primary hover-text-white transition-all">
                                                                <i class="bi bi-person-circle me-3 fs-4"></i>
                                                                About Us
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?=base_url('contact')?>" class="d-flex align-items-center text-decoration-none mb-3 p-3 rounded-3 border border-2 border-light hover-bg-primary hover-text-white transition-all">
                                                                <i class="bi bi-envelope-fill me-3 fs-4"></i>
                                                                Contact
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?=base_url('customer/editprofil2')?>" class="d-flex align-items-center text-decoration-none mb-3 p-3 rounded-3 border border-2 border-light hover-bg-primary hover-text-white transition-all">
                                                                <i class="bi bi-gear-fill me-3 fs-4"></i>
                                                                Settings
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Add Bootstrap icons (optional) -->
                                        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
                                            
                                          
                                        </div>                                                      

                                         
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>












  


 


 


<?php    
    
    $this->load->view('customer/inc/footer');
?>
<script>
    // Initialize Chart.js
    const ctx = document.getElementById('patientsChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
          label: 'Customer',
          data: [12, 19, 3, 5, 2, 3, 7],
          backgroundColor: '#ED1D24',
          borderColor: '#ED1D24',
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