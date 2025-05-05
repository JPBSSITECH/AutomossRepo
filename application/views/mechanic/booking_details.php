<?php    
    
    $this->load->view('mechanic/inc/headerv3');
?>

<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>
  
<style>
        #map {
            height: 400px;
            width: 890px; 
        }
        .status-badge {
    font-size: 1rem;
    padding: 0.5rem 1rem;
    font-weight: 600;
    text-transform: capitalize;
}

.status-badge.completed {
    background-color: #28a745; /* Green */
    color: white;
}

.status-badge.active {
    background-color: #ffc107; /* Yellow */
    color: #343a40; /* Dark Text */
}

    </style>

<div class="container">
	<div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card shadow-lg">
                    <div class="card-body d-flex justify-content-between align-items-center" style="padding: 8px 12px;">
                           <div class="d-flex" style="gap:10px;">
                               <h2 style="padding-top:0px; margin-bottom:0px;" class="card-title"><?=$heading ?></h2>

                             

                            <div>
                                <span class="badge badge-pill status-badge <?= ($book_info->job_close_status == 0) ? 'active' : 'completed' ?> ">Status <?=($book_info->job_close_status==0)?'Active':' Closed' ?></span>
                            </div>

                            <?php 
                                if($book_info->job_close_status==0){
                                    ?>
                                        <div><a href="<?= base_url() ?>mechanic/bookingclose/<?=$book_info->booking_id ?>" class="btn btn-primary" type="submit"> <span>Close This Booking</span></a></div>
                                    <?php
                                }



                                

                            ?>


                           </div>

                             <!-- <span class="badge badge-pill status-badge completed">Completed</span> -->
                           
                           <div class="text-end">
                        <a href="<?= base_url() ?>mechanic/booking_list" class="contact__form--btn primary__btn" type="submit"> <span>Back</span></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="row map pt-0 mt-0">
                <div id="map"></div>
            </div>
        </div>
        <div class="col-md-7">


            <?php 
                if(isset($book_info->review_id) && $book_info->review_id>0){
                
            ?>
                <div class="card shadow-lg mb-4 border-0 rounded-3 p-2 bg-light" style="width: 100%">
                            <h2 class="card-title mb-0 ps-3">Customer Review</h2>
                            <div class="card-body">

                                <p class="card-text">"<?=$review_info->review_text ?>"</p>
                                <?=StarRating($review_info->rating) ?>
                            </div> 
                </div>
            <?php                 
                }
            ?>


           <div class="card shadow-lg mb-4 border-0 rounded-3 p-2 bg-light" style="width: 100%">
                <h2 class="card-title mb-0 ps-3">Customer Details</h2>
                <div class="card-body">
                    <table class="table" style="border-collapse: collapse; width: 100%;">
                        <thead class="table-primary">
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong><i class="fas fa-user"></i>&nbsp; Full Name</strong></td>
                                <td><?=$cust_info->fname ?> <?=$cust_info->mname ?> <?=$cust_info->lname ?></td>
                            </tr>
                            <tr>
                                <td><strong><i class="fas fa-phone"></i> &nbsp;Phone</strong></td>
                                <td><?=$cust_info->phone ?></td>
                            </tr>
                            <tr>
                                <td><strong><i class="fas fa-envelope"></i> &nbsp;Email</strong></td>
                                <td><?=$cust_info->email ?></td>
                            </tr> 
                            <tr>
                                    <td><strong><i class="failed fa-envelope"></i> &nbsp;Address</strong></td>
                                    <td><?=$book_info->cust_address ?></td>
                            </tr>                                        
                        </tbody>
                    </table>
                </div>
            </div>

        <div class="card shadow-lg mb-4 border-0 rounded-3 p-2 bg-light" style="width: 100%">
            <h2 class="card-title mb-0 ps-3">Booking Details</h2>

            <div class="card-body " >
                <table class="table" style="border-collapse: collapse; width: 100%;">
                    <thead class="table-primary">

                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><i class="fas fa-car"></i> &nbsp;Car Name</strong></td>
                            <td><?=$book_info->car_model_nm ?> <?=$book_info->m_nm ?></td>
                        </tr>

                        <tr>
                            <td><strong><i class="fas fa-gas-pump"></i> &nbsp;Fuel Type</strong></td>
                            <td><?=$book_info->fuel_nm ?></td>
                        </tr>

                        <tr>
                            <td><strong><i class="fas fa-clock"></i> &nbsp;Sceduled For</strong></td>
                            <td><?=$book_info->scedule_date ?> <?=$book_info->scedule_time ?></td>
                        </tr>

                        <tr>
                            <td><strong><i class="fas fa-file-alt"></i> &nbsp;Description</strong></td>
                            <td><?=$book_info->description ?></td>
                        </tr> 
                        <tr>
                            <td><strong><i class="fas fa-envelope"></i> &nbsp;Home Service</strong></td>
                            <td><?=($book_info->is_homeservice==0)?'No':'Yes' ?></td>
                        </tr>                                     
                    </tbody>
                </table>
            </div>
        </div>

                                    

                                    <?php 
                                        if(isset($book_info->package_id) && isset($pkg_info->name) && $book_info->package_id>0){
                                    ?>
                                    <div class="card shadow-lg mb-4 border-0 rounded-3 p-1 bg-light" style="width: 100%;">
                                        <h2 class="card-title mb-0 ps-3">Package Details</h2>



                                        <div class="ps-3 pt-3">
                                            <h4><?=@$pkg_info->name ?></h4>
                                            <p><?=@$pkg_info->info ?></p>
                                        </div>


                                    </div>
                                    <?php 
                                        }
                                    ?>



                                    <?php 

                                        if($book_info->is_cancelled==0){
                                            ?>
                                                <div><a href="<?= base_url() ?>mechanic/bookingcancel/<?=$book_info->booking_id ?>" class="btn btn-danger" type="submit"> <span>Cancel  Booking</span></a></div>
                                            <?php
                                        }

                                    ?>

                                </div>
        
    </div>
</div>




 
 

<?php    
    
    $this->load->view('mechanic/inc/footerv3');
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