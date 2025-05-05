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
                            <a href="<?=base_url('admin/garage') ?>" class="btn btn-danger" style="float:right;">Back</a>
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






                    <div class="col-md-4">
                    <div class="card mb-4 shadow-lg border-0">
                        <div class="card-body">
                            <div class="alert alert-secondary py-2" role="alert">
                              Currently In "<?=$dtl->pk_nm ?>" Package!
                            </div>
                            <!-- Garage Logo -->
                            <div class="text-center mb-4">
                                <img 
                                    src="<?=$dtl->thumb?>"  onerror="this.onerror=null; this.src='https://automoss.in/nopics.jpg'"
                                    alt="Garage Logo" 
                                    class="rounded-circle border border-primary p-1 shadow-sm" 
                                    style="width: 120px; height: 120px; object-fit: cover;" 
                                     >
                            </div>

                            <!-- Garage Name -->
                            <h5 class="card-title text-center mb-2 fw-bold"><?=$dtl->garage_name?></h5>
                            <!-- Contact Information -->
                            <div class="mb-4 text-center">
                                <!-- <h6 class="fw-bold text-uppercase"><i class="fa fa-phone-alt me-2 text-primary"></i> Contact Info</h6> -->
                                <p class="text-muted mb-1"><i class="fa fa-phone me-2 text-success"></i> +91 <?=$dtl->phone?></p>
                                <p class="text-muted mb-1"><i class="fa fa-envelope me-2 text-warning"></i><?=$dtl->email?></p>
                                <p class="text-muted"><i class="fa fa-map-marker me-2 text-danger"></i> <?=$dtl->garage_address?> |  <?=$dtl->city?></p>
                            </div>

                            <hr class="my-4">
                                <ul class="list-unstyled">
                                   <li class="mb-2 mt-1"><b>PAN:</b> <?=$dtl->pan_number?></li>
                                   <li class="mb-2 mt-1"><b>Aadhar:</b> <?=$dtl->aadhar_number?></li>
                                </ul>



                            <?php 
                                if($dtl->user_typ=='Garage'){
                                ?>
                                <hr class="my-4">
                                    <ul class="list-unstyled">
                                       <li class="mb-2 mt-1"><b>Garage Details:</b></li>
                                       <li class="mb-2 mt-1"><b>GST:</b> <?=$dtl->garage_gst?></li>
                                       <li class="mb-2 mt-1"><b>Garage Email:</b> <?=$dtl->garage_email?></li>
                                       <li class="mb-2 mt-1"><b>Garage Phone:</b> <?=$dtl->garage_phone ?></li>
                                       
                                    </ul>
                            <?php 
                                }else{
                            ?>
                                <hr class="my-4">
                                        <ul class="list-unstyled">
                                           <li class="mb-2 mt-1"><b>Mechanic Details:</b></li>
                                           <li class="mb-2 mt-1"><b>Exp:</b> <?=$dtl->mech_exp?> Yr</li>
                                           <li class="mb-2 mt-1"><b>First Workplace:</b> <?=$dtl->mech_first_workplace ?></li>
                                           <li class="mb-2 mt-1"><b>Cur Workplace:</b> <?=$dtl->mech_cur_workplace ?></li>                                          
                                        </ul>
                            <?php 
                                }
                            ?>


                             <hr class="my-4">

                            <?php 
                                if($dtl->is_approved==0){
                            ?>
                             <a class="btn btn-warning btn-sm py-2" href="<?=base_url('admin/garage_approve/'.$uid) ?>">Approve This Garage/Mech</a>
                            <?php 
                                }else{


                                    if($dtl->status==1){
                                        ?>
                                         <a class="btn btn-danger btn-sm py-2" href="<?=base_url('admin/garage_suspend/'.$uid) ?>">Suspend This Garage/Mech</a>
                                        <?php
                                    }else{
                                        ?>
                                         <a class="btn btn-primary btn-sm py-2" href="<?=base_url('admin/garage_unsuspend/'.$uid) ?>">Enable This Garage/Mech</a>
                                        <?php
                                    }






                                }
                            ?>


                            <hr class="my-4">

                            <!-- Services Offered -->
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="fw-bold text-uppercase mb-0">
                                    <i class="fa fa-tools me-2 text-primary"></i> Services Offered
                                </h6>
                               <a href="<?= base_url('admin/garage_edit/' . spl_encode($dtl->id)) ?>" class="btn btn-primary btn-sm py-2">
                                    <i class="fa fa-edit me-1"></i>Edit
                                </a>
                            </div>
                            <ul class="list-unstyled">
                                <?php if (!empty($cats)) { ?>
                                    <?php foreach ($cats as $dj) { ?>
                                        <li class="mb-2 mt-1"><i class="fa fa-angle-right text-primary me-2"></i><?=$dj->name?></li>
                                    <?php } ?>
                                <?php } else { ?>
                                    <li class="mt-2 ms-2">No services available!!!</li>
                                <?php } ?>
                            </ul>
                          
                        </div>
                    </div>
                </div>


                    <!-- Right Panel: -->
                    <div class="col-md-7">
                        <h4>Booking List</h4>




                         
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