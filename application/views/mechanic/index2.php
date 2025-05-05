<?php    
    
    $this->load->view('mechanic/inc/header');
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-transparent" style="min-height: 120px;">

            	<div class="row mb-5">
				    <!-- Card 1 -->
				    <div class="col-lg-3 col-md-6">
				        <div style="display: flex; align-items: center; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; background-color: #fff;">
				            <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #007bff; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 24px;">
				                <i class="fas fa-calendar-alt"></i>
				            </div>
				            <div style="margin-left: 15px;">
				                <h5 style="margin: 0; font-weight: 600;">Today Bookings</h5>
				                <small style="font-size: 19px; color: #6c757d;">0</small>
				            </div>
				        </div>
				    </div>

				    <!-- Card 2 -->
				    <div class="col-lg-3 col-md-6">
				        <div style="display: flex; align-items: center; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; background-color: #fff;">
				            <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #28a745; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 24px;">
				                <i class="fas fa-clipboard"></i>
				            </div>
				            <div style="margin-left: 15px;">
				                <h5 style="margin: 0; font-weight: 600;">Yesterday Bookings</h5>
				                <small style="font-size: 19px; color: #6c757d;">0</small>
				            </div>
				        </div>
				    </div>

				    <!-- Card 3 -->
				    <div class="col-lg-3 col-md-6">
				        <div style="display: flex; align-items: center; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; background-color: #fff;">
				            <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #ffc107; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 24px;">
				                <i class="fas fa-check-square"></i>
				            </div>
				            <div style="margin-left: 15px;">
				                <h5 style="margin: 0; font-weight: 600;">All Time  Bookings</h5>
				                <small style="font-size: 19px; color: #6c757d;">0</small>
				            </div>
				        </div>
				    </div>

				    <!-- Card 4 -->
				    <div class="col-lg-3 col-md-6">
				        <div style="display: flex; align-items: center; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; background-color: #fff;">
				            <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #dc3545; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 24px;">
				                <i class="bi bi-envelope-fill"></i>
				            </div>
				            <div style="margin-left: 15px;">
				                <h5 style="margin: 0; font-weight: 600;">No. Of Packages</h5>
				                <small class="mt-2" style="font-size: 19px; color: #6c757d;">0</small>
				            </div>
				        </div>
				    </div>
				</div>

				<div class="row">
			      <!-- Bar Chart -->
			      <div class="col-md-8">
			        <div class="card">
			          <div class="card-body">
			            <canvas id="patientsChart"></canvas>
			          </div>
			        </div>
			      </div>

			    <div class="col-md-4">
			      	<div class="card">
			      		<h3 class="text-start ms-3 mt-3 text-primary fw-bold">Quick Links</h3>
			      		<div class="card-body">
			      			<ul class="list-unstyled">
			      				<li>
			      					<a href="#" class="d-flex align-items-center text-decoration-none mb-3 p-3 rounded-3 border border-2 border-light hover-bg-primary hover-text-white transition-all">
			      						<i class="bi bi-house-door-fill me-3 fs-4"></i>
			      						Home
			      					</a>
			      				</li>
			      				<li>
			      					<a href="#" class="d-flex align-items-center text-decoration-none mb-3 p-3 rounded-3 border border-2 border-light hover-bg-primary hover-text-white transition-all">
			      						<i class="bi bi-briefcase-fill me-3 fs-4"></i>
			      						Services
			      					</a>
			      				</li>
			      				<li>
			      					<a href="#" class="d-flex align-items-center text-decoration-none mb-3 p-3 rounded-3 border border-2 border-light hover-bg-primary hover-text-white transition-all">
			      						<i class="bi bi-person-circle me-3 fs-4"></i>
			      						About Us
			      					</a>
			      				</li>
			      				<li>
			      					<a href="#" class="d-flex align-items-center text-decoration-none mb-3 p-3 rounded-3 border border-2 border-light hover-bg-primary hover-text-white transition-all">
			      						<i class="bi bi-envelope-fill me-3 fs-4"></i>
			      						Contact
			      					</a>
			      				</li>
			      				<li>
			      					<a href="#" class="d-flex align-items-center text-decoration-none mb-3 p-3 rounded-3 border border-2 border-light hover-bg-primary hover-text-white transition-all">
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




 


<?php    
    
    $this->load->view('mechanic/inc/footer');
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
          backgroundColor: 'rgba(75, 192, 192, 0.6)',
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

