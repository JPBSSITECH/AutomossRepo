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
                            <a href="<?=base_url('admin/booking_list') ?>" class="btn btn-danger" style="float:right;">Back</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title"><?=$heading?></h4>
                    </div>
                </div>
            </div>
        </div>


     
     

    <div class="row justify-content-center">
        <div class="col-md-9">

            <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 pt-0 bg-light w-100">
                <div class="card-body" style="flex-direction: column;">
                    <div class="row map pt-0 mt-0">
                        <div id="map"></div>
                    </div>


                    <?php 
                        if(isset($cust_info->fname)){
                    ?>
                    <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 bg-light" style="width: 100%">
                        <h2 class="card-title mb-0 ps-3">Customer Details</h2>

                        <div class="card-body " >
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-primary">
                                   <!--  <tr>
                                        <th scope="col">Field</th>
                                        <th scope="col">Details</th>
                                    </tr> -->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong><i class="fa fa-user"></i>&nbsp; Full Name</strong></td>
                                        <td><?=$cust_info->fname ?> <?=$cust_info->mname ?> <?=$cust_info->lname ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-phone"></i> &nbsp;Phone</strong></td>
                                        <td><?=$cust_info->phone ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="failed fa-envelope"></i> &nbsp;Email</strong></td>
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
                    <?php 
                        }
                    ?>



                    <?php 
                        if(isset($book_info)){
                    ?>
                    <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 bg-light" style="width: 100%">
                        <h2 class="card-title mb-0 ps-3">Booking Details</h2>

                        <div class="card-body">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-primary">
                                     
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong><i class="fa fa-car"></i> &nbsp;Car Name</strong></td>
                                        <td><?=$book_info->car_model_nm ?> <?=$book_info->m_nm ?></td>
                                    </tr>

                                    <tr>
                                        <td><strong><i class="fa fa-gas-pump"></i> &nbsp;Fuel Type</strong></td>
                                        <td><?=$book_info->fuel_nm ?></td>
                                    </tr>

                                    <tr>
                                        <td><strong><i class="fa fa-clock"></i> &nbsp;Sceduled For</strong></td>
                                        <td><?=$book_info->scedule_date ?> <?=$book_info->scedule_time ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong><i class="fa fa-file-alt"></i> &nbsp;Description</strong></td>
                                        <td><?=$book_info->description ?></td>
                                    </tr>

                                    <tr>
                                        <td><strong><i class="fa fa-file-alt"></i> &nbsp;Home Service</strong></td>
                                        <td><?=($book_info->is_homeservice==0)?'No':'Yes' ?></td>
                                    </tr>                                     
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>


                    <?php 
                        if(isset($garage_info)){
                    ?>
                    <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 bg-light" style="width: 100%">
                        <h2 class="card-title mb-0 ps-3">Garage Details</h2>

                        <div class="card-body">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-primary">
                                     
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong><i class="fa fa-tools"></i> &nbsp;Garage Name</strong></td>
                                        <td><?=$garage_info->garage_name ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-phone"></i> &nbsp;Garage Phone</strong></td>
                                        <td><?=$garage_info->garage_phone ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-envelope"></i> &nbsp;Garage Email</strong></td>
                                        <td><?=$garage_info->garage_email ?></td>
                                    </tr>                                     
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>


                    <?php  
                        if(isset($book_info->package_id) && $book_info->package_id>0){
                    ?>
                    <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 bg-light" style="width: 100%;height: 460px ;">
                        <h2 class="card-title mb-0 ps-3">Package Details</h2>
                        <div class="ps-3 pt-3">
                            <h4><?=$pkg_info->name ?></h4>
                        <p><?=$pkg_info->info ?></p>
                        </div>                        
                    </div>
                    <?php  
                        }
                    ?>









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