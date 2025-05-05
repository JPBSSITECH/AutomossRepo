<?php
    $this->load->view('customer/inc/headerv3');
?>



<style>
        #map {
            height: 400px;             
        }
 
.star-rating {
      display: flex;
      flex-direction: row-reverse;
      justify-content: left;
    }
    .star-rating input {
      display: none;
    }
    .star-rating label {
      font-size: 5rem;
      color: #ddd;
      cursor: pointer;
      transition: color 0.2s ease-in-out;
    }
    .star-rating input:checked ~ label,
    .star-rating input:hover ~ label,
    .star-rating label:hover ~ label {
      color: #ed1d24;
    }
  </style>


                    <div class="account__wrapper">
                        <div class="account__content">

                            <div class="cart__section--inner">
                     
                                <div class="row mb-5">
                                <div class="col-12 p-3 shadow d-flex justify-content-between align-items-center">
                                     <h2>Booking Details</h2>
                                     <!-- <a class="wishlist__cart--btn primary__btn" href="<?=base_url('customer/carlist2') ?>">Back</a> -->
                                </div>
                            </div>                   
                     
                            </div>

                            <div class="row">
                                    <div class="col-md-5">
                                        <div class="row map pt-0 mt-0">
                                            <div id="map"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-7">
                                         <div class="card shadow-lg mb-4 border-0 rounded-3 p-2 bg-light" style="width: 100%">
                                            <h2 class="card-title mb-0 ps-3">Garage Details</h2>

                                            <div class="card-body">
                                                <table class="table table-bordered table-striped align-middle">
                                                    <thead class="table-primary">
                                                         
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><strong><i class="fas fa-tools"></i> &nbsp;Garage Name</strong></td>
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

                                        <div class="card shadow-lg mb-4 border-0 rounded-3 p-2 bg-light" style="width: 100%">
                                        <h2 class="card-title mb-0 ps-3">Add Review</h2>

                                        <div class="card-body " >





                                            <form method="post" class="mt-4">
                                                  <!-- Star Rating -->
 




                                                    <div class="star-rating">
                                                        <input type="radio" name="rating"  <?=(isset($rvw_info->rating) && $rvw_info->rating==5)?"checked":"" ?>  id="star5" value="5">
                                                        <label for="star5" title="5 stars">&#9733;</label>
                                                        <input type="radio" name="rating" id="star4" <?=(isset($rvw_info->rating) && $rvw_info->rating==4)?"checked":"" ?> value="4">
                                                        <label for="star4" title="4 stars">&#9733;</label>
                                                        <input type="radio" name="rating" id="star3" <?=(isset($rvw_info->rating) && $rvw_info->rating==3)?"checked":"" ?> value="3">
                                                        <label for="star3" title="3 stars">&#9733;</label>
                                                        <input type="radio" name="rating" id="star2" <?=(isset($rvw_info->rating) && $rvw_info->rating==2)?"checked":"" ?> value="2">
                                                        <label for="star2" title="2 stars">&#9733;</label>
                                                        <input type="radio" name="rating" id="star1" <?=(isset($rvw_info->rating) && $rvw_info->rating==1)?"checked":"" ?>  value="1">
                                                        <label for="star1" title="1 star">&#9733;</label>
                                                      </div>




                                                                






                                                  
                                                  <!-- Feedback Text -->
                                                  <div class="mb-3">
                                                    <label for="feedbackText" class="form-label">Your Feedback</label>
                                                    <textarea class="form-control" id="feedbackText" name="review_text"       rows="4" placeholder="Write your feedback here..."><?=@$rvw_info->review_text ?></textarea>
                                                  </div>
                                                  
                                                  <!-- Submit Button -->
                                                  <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                  </div>
                                            </form>













                                             
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
    $this->load->view('customer/inc/footerv3');
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