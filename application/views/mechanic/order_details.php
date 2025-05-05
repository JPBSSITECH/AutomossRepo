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
                               <h2 style="padding-top:0px; margin-bottom:0px;" class="card-title">Product Order Details</h2>

                             

                            

                           </div>

                             <!-- <span class="badge badge-pill status-badge completed">Completed</span> -->
                           
                           <div class="text-end">
                            <?php 
                                if($orderdtl->is_cancelled == 1){}else{
                            ?>
                        <a href="<?= base_url() ?>mechanic/order_canncel/<?=$order_id ?>" class="contact__form--btn primary__btn" type="submit"> <span>Cancel Order</span></a>
                            <?php 
                                }
                            ?>
                        <a href="<?= base_url() ?>mechanic/product_orders" class="contact__form--btn primary__btn" type="submit"> <span>Back</span></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="row justify-content-center">
        <div class="col-md-6 order-2">
             <div class="card mb-4 border-0" style="width: 100%">
            <!-- <h2 class="card-title mb-0 ps-3">Customer Details</h2> -->

            <div class="card-body">
                <?php 
                    //print_result($orderdtl);
                    if ($orderdtl->delivery_status == 1) {
                        ?>
                            <h2>Order Delivered</h2>
                            <p>on: <?=date('d M Y',strtotime($orderdtl->delivered_on)) ?></p>

                <?php
                     
                    }else if($orderdtl->is_cancelled == 1){
                        ?>
                            <h2>Order Cancelled</h2>
                            <p>on: <?=date('d M Y',strtotime($orderdtl->cancelled_on)) ?></p>

                        <?php



                   }else{
                ?>
                <form method="post">
                    <div class="row mt-4">
                         <div class="col-md-12">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label">OTP <span class="contact__form--label__star"></span></label>
                                <input class="contact__form--input" name="otp" placeholder="Enter Otp" type="number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label">Payment Mode</label>
                                <select class="contact__form--input" name="payment_mode">
                                    <option value="" selected="">Select payment method</option>
                                        <option value="Cash">Cash</option>
                                        <option value="UPI">UPI</option>
                                        <option value="Card">Card</option>
                                </select>
                            </div>
                        </div>                      
                     </div>
                     <button class="contact__form--btn primary__btn" type="submit">Submit</button>
                </form>
                <?php 
                    }
                ?>
                 
            </div>
        </div>
        </div>
        <div class="col-md-6 order-1">
           <div class="card shadow-lg mb-4 border-0 rounded-3 p-2 bg-light" style="width: 100%">
            <h2 class="card-title mb-0 ps-3">Customer Details</h2>

            <div class="card-body">
                <table class="table" style="border-collapse: collapse; width: 100%;">
                    <thead class="table-primary">
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><i class="fas fa-user"></i>&nbsp; Full Name</strong></td>
                            <td><?=$orderdtl->shipping_name ?></td>
                        </tr>
                        <tr>
                            <td><strong><i class="fas fa-phone"></i> &nbsp;Phone</strong></td>
                            <td><?=$orderdtl->shipping_phone ?></td>
                        </tr>
                        <tr>
                            <td><strong><i class="fas fa-envelope"></i> &nbsp;Email</strong></td>
                            <td><?=$orderdtl->shipping_email ?></td>
                        </tr>    
                         <tr>
                            <td><strong><i class="fas fa-map-marker-alt"></i> &nbsp;Address</strong></td>
                            <td><?=$orderdtl->shipping_address ?></td>
                        </tr>                                    
                    </tbody>
                </table>
            </div>


            <h2 class="card-title mb-0 ps-3">Product Details</h2>

            <div class="card-body">
                <table class="table" style="border-collapse: collapse; width: 100%;">
                    <thead class="table-primary">
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><i class="fas fa-cogs"></i>&nbsp; Product Name</strong></td>
                            <td><?=$orderdtl->product_name ?></td>
                        </tr>
                        <tr>
                            <td><strong><i class="fas fa-cogs"></i> &nbsp;qty</strong></td>
                            <td><?=$orderdtl->qty ?></td>
                        </tr>
                        <tr>
                            <td><strong><i class="fas fa-cogs"></i> &nbsp;Price</strong></td>
                            <td><?=$orderdtl->price ?></td>
                        </tr>    
                         <tr>
                            <td><strong><i class="fas fa-cogs"></i> &nbsp;Home Delivery</strong></td>
                            <td><?=($orderdtl->is_homedelivery==0)?'No':'Yes' ?></td>
                        </tr>                                    
                    </tbody>
                </table>
            </div>









        </div>
                                     
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