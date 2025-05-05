<?php    
    include('inc/header.php');

?>
<style>
        #map {
            height: 400px;
            width: 890px;
        }
    </style>

<div class="page-content">
    <div class="container-fluid">

        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                            <a href="<?=base_url('admin/jobcard') ?>" class="btn btn-danger" style="float:right;">Back</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title"><?=$heading?></h4>
                    </div>
                </div>
            </div>
        </div>


     
     

<div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 pt-0 bg-light w-100">
                <div class="card-body" style="flex-direction: column;">
                    <div class="row map pt-0 mt-0">






            <div class="col-md-5">
                 <div class="card">
                      <img   src="<?=$job->thumb ?>" onerror="this.onerror=null; this.src='https://automoss.in/nocar.png';" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#lightboxModal">
                      <p class="text-center mt-2">click to view more</p>
                       
                      <div class="card-body">
                        <h3 class=""><?= $job->job_heading;  ?></h3>
                        <p class="card-text"><?=$job->job_info ?></p>


                        <h5 class="">CAR: <?=$job->car_manufacturer ?> <?=$job->car_model ?> <?=$job->fuel_type ?></h5>

                        
                         <?php 
                            if($job->jc_aud!=''){
                                ?>
                                    <audio controls>
                                        <source src="<?=$job->jc_aud ?>" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                <?php

                            }
                        ?>
                        

                         <?php 
                            if($job->jc_vid!=''){
                                ?>
                                    
                                    <h5>Video Feature</h5>
                                    <video controls width="100%">
                                        <source src="<?=$job->jc_vid ?>" type="video/mp4">
                                        Your browser does not support the video element.
                                    </video>
                                <?php

                            }
                        ?>

                         


                       
                        
                    </div>
                </div>

                        <div class="modal fade" id="lightboxModal" tabindex="-1" aria-labelledby="lightboxModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                     
                                    <div class="modal-body text-center">
                                        <div id="lightboxCarousel" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="<?=$job->thumb ?>" onerror="this.onerror=null; this.src='https://automoss.in/nocar.png';" alt="Car Secondary Image 1" class="img-fluid">
                                                </div>

                                                 <?php 
                                                    if($job->thumb2!=''){
                                                        ?>
                                                            <div class="carousel-item">
                                                                <img src="<?=$job->thumb2 ?>" alt="Car Secondary Image 2" class="img-fluid">
                                                            </div>
                                                        <?php

                                                    }
                                                ?>
                                                
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>









            </div>

            <!-- Right Panel: List of Bids Received -->
            <div class="col-md-7">
                <h4>Bids Received</h4>
                <ul class="list-group">
                    


                    <!-- Bid Item 1 -->

                    <?php 
                        foreach ($bids as $bb) {
                    ?>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="mb-1">Garage Name: Auto Fix</h5>
                                <p class="mb-1">Address: 123 Main Street, Bhubaneswar</p>
                                <small>Additional Info: "Quick service with quality paint materials."</small>
                            </div>
                            <div>
                                <h6 class="text-success">&#8377; 5,000</h6>
                            </div>
                        </div>
                    </li>
                    <?php 
                        }
                    ?>

                    

                </ul>
            </div>
                        







                    </div> 
                </div>
            </div>










 

        </div>
        
    </div>
 











              
            
<?php    
    include('inc/footer.php');

?>


<script src="https://maps.googleapis.com/maps/api/js?key=<?=g_map_api ?>&libraries=places"></script>
    <script>
        function initMap() {
            const pointA = { lat: <?=$book_info->cust_lat ?>, lng: <?=$book_info->cust_lon ?> };   
            const pointB = { lat: <?=$garage_info->garage_lat ?>, lng: <?=$garage_info->garage_lon ?> };

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