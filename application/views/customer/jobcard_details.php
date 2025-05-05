<?php    
    
    $this->load->view('customer/inc/header');
?>

<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>
  
<style>
        #map {
            height: 400px;
            width: 890px;
        }
    </style>

<div class="container">
    <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card shadow-lg">
                    <div class="card-body justify-content-between" style="padding: 8px 12px; ">
                           <h2 style="padding-top:0px; margin-bottom:0px;" class="card-title">Job Card: <?=$this->uri->segment(3) ?></h2>
                           <!-- <button class="btn btn-primary btn-lg">ADD</button> -->
                           <div class="text-start">
                        <a href="<?= base_url() ?>customer/jobcard" class="contact__form--btn primary__btn" type="submit"> <span>Back</span></a>
                    </div>
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
                <div class="card mb-4">
                    <img src="<?=$job->thumb ?>" class="card-img-top" alt="Car Image">
                    

                    <h2 class="card-title mb-0 ps-3"><?=$job->job_heading ?></h2>
                    <div class="card-body"> 
                        <p ><?=$job->job_info ?></p>
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
                                <h5 class="mb-1">Garage Name: <?=$bb->garage_name ?></h5>
                                <p class="mb-1">Address: <?=$bb->garage_address ?></p>
                                <small>Additional Info: "<?=$bb->short_info ?>"</small>
                            </div>
                            <div>
                                <h3 class="text-success">&#8377;  <?=$bb->price ?></h3>
                                <a href="<?=base_url() ?>customer/awardbid/<?=$bb->bid_id ?>" class="btn primary__btn btn-sm">Award This Bid</a>
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
</div>




 


<?php    
    
    $this->load->view('customer/inc/footer');
?>


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