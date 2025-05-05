<?php
  include('inc/header.php');
?>

<style type="text/css">
    .hidden_div{
        display: none;
    }
 
    #map {
        height: 400px;
        width: 890px; border-bottom: 1px dashed #ccc;
    }

 
    .ticket-card {
      background: #f8f9fa;
      border: 2px dashed #c23200;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      margin: 20px auto;
      max-width: 400px;
    }
    .ticket-card h5 {
      font-size: 1.5rem;
      color: #c23200;
    }
    .transaction-id {
      font-size: 1.2rem;
      color: #6c757d;
      font-weight: bold;
    }
  </style>




    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg"style="background-image: url('<?= base_url() ?>assets/img/carbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="<?= base_url() ?>" style="color: white;">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span style="color: white;">Pakeges</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->



        <div class="login__section section--padding">
            <div class="container">
                
             <div class="login__section--inner">
                <div class="row row-cols-md-2 row-cols-1 d-flex justify-content-center">
                    <div class="col-md-7">








                        <div class="alert alert-success" role="alert">
                          <h4 class="alert-heading">Booking Successful!</h4>
                          <p>Thank you for booking with us. Your transaction has been completed successfully.</p>
                        </div>

                        <!-- Ticket Display -->
                        <div class="ticket-card">
                            <img src="<?=$book_info->qrcode ?>" />
                          <h5>Your Ticket</h5>
                          <hr>
                          <p class="transaction-id">Transaction ID: <span id="transaction-id">#<?=$bid ?></span></p>
                          <hr>
                          <p>Show this ticket at the garage for verification.</p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-4">
                          <a href="<?=base_url() ?>" class="btn btn-primary">Go to Homepage</a>
                          <a href="<?=base_url() ?>customer/booking_list" class="btn btn-outline-secondary">View All Bookings</a>
                        </div>







                        
                    </div> 
                    <div class="col-md-5">

                            <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 pt-0 bg-light w-100">
                                <div class="card-body" style="flex-direction: column;">
                                    <div class="row map pt-0 mt-0">
                                        <div id="map"></div>
                                    </div>

                                    <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 bg-light" style="width: 100%">
                                        <h2 class="card-title mb-0 ps-3">Booking Details</h2>

                                        <div class="card-body">
                                            <table class="table table-bordered table-striped align-middle">
                                                <thead class="table-primary">
                                                     
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong><i class="fas fa-car"></i> &nbsp;Car</strong></td>
                                                        <td><?=$book_info->car_manufacturer ?> <?=$book_info->car_model ?> <?=$book_info->fuel_type ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong><i class="fas fa-clock"></i> &nbsp;Seduled For</strong></td>
                                                        <td><?=date('d M Y',strtotime($book_info->scedule_date)) ?> <?=$book_info->scedule_time ?></td>
                                                    </tr>
                                                                                 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                     

                                    <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 bg-light" style="width: 100%">
                                        <h2 class="card-title mb-0 ps-3">Garage Details</h2>

                                        <div class="card-body">
                                            <table class="table table-bordered table-striped align-middle">
                                                <thead class="table-primary">
                                                     
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong><i class="fas fa-car"></i> &nbsp;Garage Name</strong></td>
                                                        <td><?=$garage_info->garage_name ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong><i class="fas fa-phone"></i> &nbsp;Garage Phone</strong></td>
                                                        <td><?=$garage_info->garage_phone ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong><i class="fas fa-envelope"></i> &nbsp;Garage Email</strong></td>
                                                        <td><?=$garage_info->garage_email ?></td>
                                                    </tr>                                     
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    

                                    

                                    <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 bg-light" style="width: 100%; min-height: 300px ; display: none;">
                                        <h2 class="card-title mb-0 ps-3">Package Details</h2>

                                        
                                        <div class="row" style="border: 1px solid #ccc; padding: 20px;">
                                            <div class="col-md-3">

                                                <img style="border:6px solid #ccc; border-radious:5px;" src="https://automoss.in/uploads/fuel/675b192a651de_2333.webp" alt="AC Service" class="img-fluid">
                                            </div>
                                            <div class="col-md-8">
                                                <h3 class="font-weight-bold fs-3">Standard Service</h3>
                                                <p class="mb-4 fs-3">• 500 Kms or 1 Month Warranty  • Every 5,000 Kms or 3 Months (Recommended)</p>
                                                <div class="row">
                                                    <div class="col-md-12 spl_list">                                 
                                                        <ul>
                                                           <li>Car Scanning</li>
                                                           <li>Battery Water Top up</li>
                                                           <li>Interior Vacuuming ( Carpet &amp; Seats)</li>
                                                           <li>Front Brake Pads Serviced</li>
                                                           <li>Oil Filter Replacement</li>
                                                           <li>Fuel Filter Checking</li>
                                                           <li>Heater/Spark Plugs Checking</li>
                                                           <li>AC Filter Cleaning</li>
                                                           <li>Wiper Fluid Replacement</li>
                                                           <li>Car Wash</li>
                                                           <li>Rear Brake Shoes Serviced</li>
                                                           <li>Engine Oil Replacement</li>
                                                           <li>Air Filter Replacement</li>
                                                           <li>Coolant Top Up (200 ml)</li>
                                                           <li>Brake Fluid Top Up                             
                                                           </li></ul>
                                                       </div>
                                                            
                                                    </div>
                                                </div>
                                        </div>
                                        
                                    </div>









                                </div>
                            </div>
                        







                    </div>
               </div>
            </div>              
        </div>     
    </div>
</main>

 <?php
    include('inc/footer.php');
 ?>

 <script>
    function initMap() {
      // Grayscale map styles
      const mapStyles = [
        {
          featureType: "all",
          stylers: [{ saturation: -100 }, { lightness: 50 }],
        },
        {
          featureType: "poi",
          elementType: "labels",
          stylers: [{ visibility: "off" }], // Hide points of interest
        },
        {
          featureType: "road",
          elementType: "labels.icon",
          stylers: [{ visibility: "off" }], // Hide road icons
        },
        {
          featureType: "transit",
          stylers: [{ visibility: "off" }], // Hide transit features
        },
      ];

      const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: <?=$book_info->cust_lat ?>, lng: <?=$book_info->cust_lon ?> }, // Center around Bhubaneswar
        zoom: 13,
        styles: mapStyles, // Apply grayscale styles
      });

      const directionsService = new google.maps.DirectionsService();
      const directionsRenderer = new google.maps.DirectionsRenderer({ map });

      // Define the start and end points
      const start = { lat: <?=$book_info->cust_lat ?>, lng: <?=$book_info->cust_lon ?> }; // Rasulgad
      const end = { lat: <?=$garage_info->garage_lat ?>, lng: <?=$garage_info->garage_lon ?> }; // Khandagiri

      // Request for directions
      directionsService.route(
        {
          origin: start,
          destination: end,
          travelMode: google.maps.TravelMode.DRIVING,
        },
        (response, status) => {
          if (status === "OK") {
            directionsRenderer.setDirections(response);

            // AdvancedMarkerElement for Start Point
            new google.maps.marker.AdvancedMarkerElement({
              map,
              position: start,
              title: "Rasulgad",
            });

            // AdvancedMarkerElement for End Point
            new google.maps.marker.AdvancedMarkerElement({
              map,
              position: end,
              title: "Khandagiri",
            });
          } else {
            console.error("Directions request failed due to " + status);
          }
        }
      );
    }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuXTua1mqw6_qv4zUj7orFZLs54D6YuyU&libraries=places&callback=initMap" async defer></script>