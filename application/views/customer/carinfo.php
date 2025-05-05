<?php    
    
    $this->load->view('customer/inc/headerv3');
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
        .primary__btn {
    border-radius: 0.5rem !important;
}

.animated_btn {
    position: relative;
    overflow: hidden;
    padding: 5px 20px;
    font-size: 12px;
    text-transform: uppercase;
    border-radius: 5px;
    border: none;
    background-color: #dc3545;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Wave Animation */
.animated_btn::before {
    content: '';
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.6);

    transform: scale(0);
    animation: wave 3s infinite;

    pointer-events: none;

    top: 50%;
    left: 50%;
    width: 100px;

    height: 100px;


}


@keyframes wave {
    0% {
        transform: scale(0);
        opacity: 1;
    }

    50% {
        transform: scale(2);

        opacity: 0.3;

    }

    100% {
        transform: scale(4);

        opacity: 0;

    }
}

.title_3d {
    text-shadow: 0 13.36px 8.896px #482c2c, 0 -2px 1px #ffffff;
    text-transform: uppercase;

    color: #6b4040;
}

.table-wrapper {
    border-radius: 5px;
    border: 1px solid rgb(21, 94, 117);
}

tbody tr:nth-child(odd) {
    background-color: light-dark(rgba(0 0 0 / 0.05), rgba(255 255 255 / 0.1));
}

tbody tr:hover td {
    background-color: rgb(249, 240, 240);
}

th {
    padding: 0.25rem 0.75rem;
}

td {
    padding: 0.5rem 0.75rem;
    transition: background-color 150ms ease-in-out;
}

thead {
    background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%, rgba(252, 164, 255, 1) 100%, rgba(0, 0, 0, 1) 100%);
}

.cart__table--header__list {
    padding: 2rem 2rem 2rem 2rem;
    color: white;
}

.cart__table--body__list {
    border-bottom: 1px solid var(--border-color);
    padding: 2rem 2rem 2rem 2rem;
}

.cart__content--title a {
    color: blue;
    font-family: emoji;
}

.badge-beat {
    display: inline-block;
    padding: 5px 15px;
    background-color: #ff6347;
    color: white;
    border-radius: 12px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    animation: beat 2s infinite;
}


@keyframes beat {
    0% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.1);
    }

    100% {
        transform: scale(1);
    }
}
</style>




<div class="">
    <div class="account__content">

        <div class="cart__section--inner">

            <div class="row mb-5">
                <div class="col-12 p-3  d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;
                border-radius: 10px;">
                    <h2 class="pl_0 title_3d">Car Details</h2>
                    <a class="btn btn-danger btn-lg animated_btn" href="<?=base_url('customer/carlist2') ?>">Back</a>
                </div>
            </div>



        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="row map pt-0 mt-0">
                    <img src="<?=$info->thumb?>"  onerror="this.onerror=null; this.src='https://automoss.in/nocar.png';">

                    <div class="p-4">
                        <div class="mt-4 shadow-sm" style="font-weight: 600;">
                            Price - <?=$info->price ?>
                        </div>
                        <div class="mt-4 shadow-sm" style="font-weight: 600;">
                            Message - <?=$info->info ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="car-overview">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Registration Year:</span> <?=$info->year_of_registration ?>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>Insurance:</span> <?=$info->insurance ?>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-gas-pump"></i>
                                <span>Fuel Type:</span> <?=$info->fuel_type_id ?>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-chair"></i>
                                <span>Seats:</span> <?=$info->seat_count ?>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Kms:</span> <?=$info->kms_driven ?> KM
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>RTO:</span> <?=$info->rto ?>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-user"></i>
                                <span>Ownership:</span> <?=$info->owner_type ?>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-cogs"></i>
                                <span>Transmission:</span> <?=$info->car_transmission ?>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-car"></i>
                                <span>Engine:</span> <?=$info->engine ?> cc
                            </div>
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <span>Year of Mfg:</span> <?=$info->year_of_manufacture ?>
                            </div>
                        </div>
                    </div>













                </div>
            </div>



        </div>


        <div class="row mt-4 pb-4">
            <ul class="list-group">


                <?php
                                        foreach ($car_lead as $k) {
                                    ?>

                <li class="list-group-item py-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-1">Name: <?=$k->cust_name ?></h4>
                            <p class="mb-1">Message: <?=$k->description ?></p>
                        </div>
                        <div>
                            <!-- <h3 class="text-success">&#8377;  34555</h3> -->
                            <a href="<?=base_url() ?>customer/chat/<?= spl_encode($k->id) ?>"
                                class="btn primary__btn btn-sm">Replay</a>
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
    const pointA = {
        lat: <?=$book_info->cust_lat ?>,
        lng: <?=$book_info->cust_lon ?>
    }; // Rasulgad, Bhubaneswar
    const pointB = {
        lat: <?=$garage_info->garage_lat ?>,
        lng: <?=$garage_info->garage_lon ?>
    }; // Lingaraj, Bhubaneswar

    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 14,
        center: pointA,
        styles: [{
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }]
            },
            {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#616161"
                }]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#f5f5f5"
                }]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#bdbdbd"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#eeeeee"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#757575"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e5e5e5"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#9e9e9e"
                }]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#757575"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#dadada"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#616161"
                }]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#9e9e9e"
                }]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e5e5e5"
                }]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#eeeeee"
                }]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#c9c9c9"
                }]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#9e9e9e"
                }]
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
    directionsService.route({
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