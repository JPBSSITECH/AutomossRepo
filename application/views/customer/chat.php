<?php    
    
    $this->load->view('customer/inc/header2');
?>

<style type="">
    .car-overview {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .car-overview h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .info-item {
            display: flex;
            align-items: center;
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }

        .info-item i {
            color: #007BFF;
            font-size: 18px;
            margin-right: 10px;
        }

        .info-item span {
            font-weight: bold;
            margin-right: 5px;
        }
</style>
 



                    <div class="account__wrapper">
                        <div class="account__content">

                            <div class="cart__section--inner">

                                <div class="row mb-5">
                                <div class="col-12 p-3 shadow d-flex justify-content-between align-items-center">
                                     <h2>Message  </h2>
                                     <a class="wishlist__cart--btn primary__btn" href="<?=base_url('customer/carlists') ?>">Back</a>
                                </div>
                            </div>
                     
                                                        
                     
                            </div>

                        <div class="container mt-5">
                            <form method="post">
                                <div class="row justify-content-around">       

                                    <!-- Message Box Section -->
                                    <div class="col-md-11 bg-white" style="height: 400px; padding: 15px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                                        <!-- Scrollable Messages -->
                                        <div class="messages p-3" style="overflow-y: auto; height: 400px; border-bottom: 1px solid #ddd;">
                                             <?php
                                                foreach ($cc as $k) {

                                                    

                                                    if($myid == $k->chat_by){
                                                        ?>
                                                        <div class="d-flex justify-content-end align-items-center mb-3">                                                         
                                                            <div class="p-3 bg-secondary text-white rounded" style="max-width: 70%; border-radius: 15px 15px 15px 0;">
                                                                <?=$k->message ?>
                                                            </div>                                                         
                                                            <img src="https://automoss.in/nouser.png" alt="Receiver" class="rounded-circle ms-2" style="width: 40px; height: 40px;">
                                                        </div>
                                                        <?php
                                                    }else{                                                 
                                                        ?>
                                                        <div class="d-flex align-items-center mb-3">
                                                             
                                                            <img src="https://automoss.in/nouser.png" alt="Sender" class="rounded-circle me-3" style="width: 40px; height: 40px;">
                                                             
                                                            <div class="p-3 bg-danger text-white rounded" style="max-width: 70%; border-radius: 15px 15px 0 15px;">
                                                               <?=$k->message ?>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                             ?>
                                           

                                             
                                            
                                             
                                        </div>
                                        <!-- Input Section -->
                                        <div class="message-input d-flex align-items-center mt-3">
                                            <input type="text" class="contact__form--input" name="message" placeholder="Type your message..." style="border-radius: 30px; margin-right: 10px;">
                                            <button class="wishlist__cart--btn primary__btn" type="submit">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>





                             
                        </div>
                    </div>
                </div>
            </div>
        </section>












  


 


 


<?php    
    
    $this->load->view('front/inc/footer');
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



  <script src="https://maps.googleapis.com/maps/api/js?key=<?=g_map_api ?>&libraries=places"></script>
    <script>
        function initMap() {
            const pointA = { lat: <?=$book_info->cust_lat ?>, lng: <?=$book_info->cust_lon ?> }; // Rasulgad, Bhubaneswar
            const pointB = { lat: <?=$garage_info->garage_lat ?>, lng: <?=$garage_info->garage_lon ?> }; // Lingaraj, Bhubaneswar

            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 14,
                center: pointA,
                styles: [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            { "color": "#f5f5f5" }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            { "visibility": "off" }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            { "color": "#616161" }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            { "color": "#f5f5f5" }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            { "color": "#bdbdbd" }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            { "color": "#eeeeee" }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            { "color": "#757575" }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            { "color": "#e5e5e5" }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            { "color": "#9e9e9e" }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            { "color": "#ffffff" }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            { "color": "#757575" }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            { "color": "#dadada" }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            { "color": "#616161" }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            { "color": "#9e9e9e" }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [
                            { "color": "#e5e5e5" }
                        ]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [
                            { "color": "#eeeeee" }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            { "color": "#c9c9c9" }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            { "color": "#9e9e9e" }
                        ]
                    }
                ]
            });

            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer({
                map: map,
            });

            // Custom icons
            const carIcon = "https://maps.google.com/mapfiles/kml/shapes/cabs.png";
            const garageIcon = "https://maps.google.com/mapfiles/kml/shapes/parking_lot_maps.png";

            // Markers
            new google.maps.Marker({
                position: pointA,
                map: map,
                icon: carIcon,
                title: "Rasulgad (Starting Point)"
            });

            new google.maps.Marker({
                position: pointB,
                map: map,
                icon: garageIcon,
                title: "Lingaraj (Destination)"
            });

            // Directions request
            directionsService.route(
                {
                    origin: pointA,
                    destination: pointB,
                    travelMode: google.maps.TravelMode.DRIVING,
                },
                (response, status) => {
                    if (status === google.maps.DirectionsStatus.OK) {
                        directionsRenderer.setDirections(response);
                    } else {
                        console.error("Directions request failed due to ", status);
                    }
                }
            );
        }

        window.onload = initMap;
    </script>