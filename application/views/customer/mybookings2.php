<?php    
    
    $this->load->view('customer/inc/headerv3');
?>

<style>
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
    margin-right: auto;
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

.primary__btn_outlined {

    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.cart__table--header__list {
    padding: 10px;
    text-align: left;
    font-weight: bold;
    font-size: 1.3rem;

}
</style>
<div class="row mb-5">
<div class="col-12 p-3  d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;
      border-radius: 10px;">

    <div class="text-end">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="btn btn-danger btn-lg animated_btn active" data-bs-toggle="tab" href="#hello">Live
                    Booking</a>
            </li>
            <li class="nav-item" style="padding-left: 10px;">
                <a class="btn btn-danger btn-lg animated_btn" data-bs-toggle="tab" href="#bye">My Booking</a>
            </li>
        </ul>

    </div>
</div>
</div>
<div class="tab-content">

    <div id="hello" class="tab-pane fade show active">
        <div class="row" style="padding:0;margin-bottom: 20px;">
            <div class="col-12 p-3  d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;
                border-radius: 10px;">
                <h2 class="pl_0 title_3d">Live Booking Lists</h2>
                <a class="btn btn-danger btn-lg animated_btn" href="<?=base_url('customer/jobcard_add') ?>">Add</a>
            </div>
        </div>
        <div class="row">

            <form method="post" style="padding:0;">
                <div class="hstack d-flex gap-3" style="margin: 10px 0 10px 0;padding: 0;">
                    <input class="contact__form--input" value="<?=@$_SESSION['jc_search']['searches'] ?>"
                        name="searches" placeholder="Search " type="text" style="background:#ffc5c58a">

                    <div class="text-start">
                        <button class="contact__form--btn animated_btn" type="submit" style="padding: 10px 20px;">
                            <span>Search</span></button>



                    </div>

                    <div class="text-start">

                        <a href="?reset=Y" class="contact__form--btn animated_btn" style="padding: 10px 20px;">Reset</a>


                    </div>
                </div>

            </form>

        </div>
        <div class="row">
            <div class="card-body table-responsive" style="padding: 10px 0;">
                <table class="cart__table--inner">
                    <thead class="cart__table--header">
                        <tr class="cart__table--header__items">
                            <th class="cart__table--header__list">Heading</th>
                            <th class="cart__table--header__list">Bids</th>
                            <th class="cart__table--header__list">Status</th>
                            <th class="cart__table--header__list">Action</th>
                        </tr>
                    </thead>
                    <tbody class="cart__table--body">

                        <?php if (!empty($job) && mycount($job) > 0): ?>
                        <?php
                           $i = 0;
                           foreach ($job as $r) {
                               $i++;
                       ?>
                        <tr class="cart__table--body__items">
                            <td class="cart__table--body__list">
                                <div class="cart__product d-flex align-items-center">
                                    <div class="cart__thumbnail">
                                        <a href="#"><img class="border-radius-5" src="<?= $r->thumb; ?>"
                                                onerror="this.onerror=null; this.src='https://automoss.in/nocar.png';"
                                                alt="cart-product" style="width: 60px"></a>
                                    </div>
                                    <div class="cart__content">
                                        <h3 class="cart__content--title h4"><a
                                                href="product-details.html"><?= $r->job_heading; ?></a></h3>
                                    </div>
                                </div>
                            </td>
                            <td class="cart__table--body__list">
                                <span class="cart__price"><?= $r->bid_oount; ?></span>
                            </td>
                            <td class="cart__table--body__list text-center">
                                <span class="in__stock <?= ($r->status == 1) ? 'text-success' : 'text-danger'; ?>">

                                    <?php 
                                           if($r->award_count>0){
                                               echo '<span  >(AWARDED)</span>';
                                           }else{
                                               ?>
                                    <?= ($r->status == 1) ? 'Active' : 'Completed'; ?>
                                    <?php
                                           }


                                       ?>
                                </span>
                            </td>
                            <td class="cart__table--body__list text-right">
                                <a class="wishlist__cart--btn primary__btn"
                                    href="<?= base_url() ?>customer/jobcard_details/<?= $r->transaction_id ?>"><i
                                        class="fas fa-eye"></i></a>
                                <a class="wishlist__cart--btn primary__btn"
                                    onclick="return confirm('Are you sure to  delete?')"
                                    href="<?= base_url() ?>customer/jobcard_del/<?= $r->transaction_id ?>"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                        <?php else: ?>
                        <div class="col-12">
                            <table class="table text-start" style="border: 2px dashed #ccc;  ">
                                <tbody>
                                    <tr class="py-4 px-3">
                                        <td colspan="4" style="position:relative;  height: 220px;">
                                            <!-- Lottie Animation -->
                                            <div class="lottie-container mb-3"
                                                style="max-width: 150px;  position: absolute; right: 0;">
                                                <script
                                                    src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js">
                                                </script>
                                                <div id="lottie-no-cars"></div>
                                            </div>
                                            <h4 class="ml-2">Opps! No Data found.</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <script>
                        // Load Lottie Animation
                        lottie.loadAnimation({
                            container: document.getElementById('lottie-no-cars'),
                            renderer: 'svg',
                            loop: true,
                            autoplay: true,
                            path: 'https://automoss.in/Animation - 1734960613567.json'
                        });
                        </script>
                        <?php endif; ?>


                    </tbody>
                </table>
            </div>
        </div>



    </div>

    <div id="bye" class="tab-pane fade">
        <div class="cart__section--inner">

            <div class="row mb-5">
                <div class="col-12 p-3  d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;
                border-radius: 10px;">
                    <h2 class="pl_0 title_3d">My Bookings</h2>
                    <a style="float:left; margin-left:10px;"
                        class="wishlist__cart--btn <?=($typ == 'active')?'primary__btn':'primary__btn_outlined' ?>"
                        href="<?=base_url('customer/booking_list/active') ?>">Active</a>
                    <a style="float:left; margin-left:10px;"
                        class="wishlist__cart--btn <?=($typ == 'completed')?'primary__btn':'primary__btn_outlined' ?>"
                        href="<?=base_url('customer/booking_list/completed') ?>">Completed</a>
                    <a style="float:left; margin-left:10px;"
                        class="wishlist__cart--btn <?=($typ == 'all')?'primary__btn':'primary__btn_outlined' ?>"
                        href="<?=base_url('customer/booking_list/all') ?>">All</a>
                </div>
            </div>
            <div class="card-body table-responsive" style="padding: 10px 0;">
                <div class="cart__table">
                    <table class="cart__table--inner">
                        <thead class="cart__table--header">
                            <tr class="cart__table--header__items">
                                <th class="cart__table--header__list">Booking Info</th>
                                <th class="cart__table--header__list">Booking For</th>
                                <th class="cart__table--header__list ">Garage Info</th>
                                <th class="cart__table--header__list ">Home Service</th>
                                <th class="cart__table--header__list ">Status</th>
                                <th class="cart__table--header__list">ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="cart__table--body">
                            <?php
                    if (mycount($bd) > 0) {
                        $i = 0;
                        foreach ($bd as $dd) {
                            $i++;
                    ?>
                            <tr class="cart__table--body__items">
                                <td class="cart__table--body__list">
                                    <div class="cart__product d-flex align-items-center">
                                        <div class="cart__thumbnail">
                                            <img class="border-radius-5" src="<?= base_url('customer-service.png') ?>"
                                                alt="service-icon" style="width: 55px;">
                                        </div>
                                        <div class="cart__content">
                                            <h3 class="cart__content--title h4"><a
                                                    href="product-details.html"><?= $dd->booking_id ?></a></h3>
                                            <span class="cart__content--variant">Booked On:
                                                <?= date('d M y', strtotime($dd->created_on)) ?></span>

                                            <?php 
                                            if($dd->job_close_status == 0){
                                        ?>
                                            OTP: <span class="otp"><?= $dd->job_close_otp ?></span> <span
                                                class="toggle-otp">View</span>
                                            <?php 
                                            }elseif($dd->job_close_status == 1){
                                                ?>
                                            <a href="<?= base_url() ?>customer/givereview/<?= $dd->booking_id ?>">Give
                                                Review</a>
                                            <?php 
                                            }
                                        ?>




                                        </div>
                                    </div>
                                </td>
                                <td class="cart__table--body__list text-start">
                                    <div style="font-size: 24px; font-weight: bold;">
                                        <?= date('d M', strtotime($dd->scedule_date)) ?></div>
                                    <div style="font-size: 14px; color: #888;">
                                        <?= date('Y', strtotime($dd->scedule_date)) ?>
                                        <span style="font-size: 16px; color: #555; font-weight: normal;">|
                                            <?= date('H:i A', strtotime($dd->scedule_time)) ?></span>
                                    </div>
                                </td>
                                <td class="cart__table--body__list text-start">
                                    <span class="fw-bold">🚔<?= $dd->g_nm ?></span><br>
                                    <span>📞<?= $dd->garage_phone ?></span><br>
                                    <!-- Uncomment if needed -->
                                    <!-- <span>📍<?= $dd->garage_address ?></span> -->
                                </td>

                                <td class="cart__table--body__list text-start">

                                    <span><?=($dd->is_homeservice==0)?'No':'Yes' ?></span>
                                </td>

                                <td class="cart__table--body__list text-start">

                                    <span><?= $dd->booking_status ?></span>
                                </td>


                                <td class="cart__table--body__list text-right">
                                    <a class="wishlist__cart--btn primary__btn" style="background: #1ab360;"
                                        href="<?= base_url() ?>customer/booking_details/<?= $dd->booking_id ?>"><i
                                            class="fas fa-eye"></i></a>
                                    <?php   
                                    if($dd->booking_status=='Active'){
                                ?>
                                    <a class="wishlist__cart--btn primary__btn"
                                        href="<?= base_url() ?>customer/bookingcancel/<?=$dd->booking_id ?>"><i
                                            class="fas fa-ban"></i></a>
                                    <?php   
                                    }
                                ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                    ?>
                            <div class="col-12">
                                <table class="table text-start" style="border: 2px dashed #ccc;  ">
                                    <tbody>
                                        <tr class="py-4 px-3">
                                            <td colspan="4" style="position:relative;  height: 220px;">
                                                <!-- Lottie Animation -->
                                                <div class="lottie-container mb-3"
                                                    style="max-width: 150px;  position: absolute; right: 0;">
                                                    <script
                                                        src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js">
                                                    </script>
                                                    <div id="lottie-no-cars"></div>
                                                </div>
                                                <h4 class="ml-2">Opps! No Data found.</h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <script>
                            // Load Lottie Animation
                            lottie.loadAnimation({
                                container: document.getElementById('lottie-no-cars'),
                                renderer: 'svg',
                                loop: true,
                                autoplay: true,
                                path: 'https://automoss.in/Animation - 1734960613567.json'
                            });
                            </script>
                            <?php
                    }
                    ?>



                        </tbody>
                    </table>

                </div>
            </div>
        </div>


    </div>


</div>
<!-- <div class="cart__section--inner">

    <div class="row mb-5">
        <div class="col-12 p-3 shadow d-flex   align-items-center">
            <h2>My Bookings</h2>
            <a style="float:left; margin-left:10px;"
                class="wishlist__cart--btn <?=($typ == 'active')?'primary__btn':'primary__btn_outlined' ?>"
                href="<?=base_url('customer/booking_list/active') ?>">Active</a>
            <a style="float:left; margin-left:10px;"
                class="wishlist__cart--btn <?=($typ == 'completed')?'primary__btn':'primary__btn_outlined' ?>"
                href="<?=base_url('customer/booking_list/completed') ?>">Completed</a>
            <a style="float:left; margin-left:10px;"
                class="wishlist__cart--btn <?=($typ == 'all')?'primary__btn':'primary__btn_outlined' ?>"
                href="<?=base_url('customer/booking_list/all') ?>">All</a>
        </div>
    </div>
    <div class="cart__table">
        <table class="cart__table--inner">
            <thead class="cart__table--header">
                <tr class="cart__table--header__items">
                    <th class="cart__table--header__list">Booking Info</th>
                    <th class="cart__table--header__list">Booking For</th>
                    <th class="cart__table--header__list ">Garage Info</th>
                    <th class="cart__table--header__list ">Home Service</th>
                    <th class="cart__table--header__list ">Status</th>
                    <th class="cart__table--header__list text-right">ACTION</th>
                </tr>
            </thead>
            <tbody class="cart__table--body">
                <?php
                                    if (mycount($bd) > 0) {
                                        $i = 0;
                                        foreach ($bd as $dd) {
                                            $i++;
                                    ?>
                <tr class="cart__table--body__items">
                    <td class="cart__table--body__list">
                        <div class="cart__product d-flex align-items-center">
                            <div class="cart__thumbnail">
                                <img class="border-radius-5" src="<?= base_url('customer-service.png') ?>"
                                    alt="service-icon" style="width: 55px;">
                            </div>
                            <div class="cart__content">
                                <h3 class="cart__content--title h4"><a
                                        href="product-details.html"><?= $dd->booking_id ?></a></h3>
                                <span class="cart__content--variant">Booked On:
                                    <?= date('d M y', strtotime($dd->created_on)) ?></span>

                                <?php 
                                                            if($dd->job_close_status == 0){
                                                        ?>
                                OTP: <span class="otp"><?= $dd->job_close_otp ?></span> <span
                                    class="toggle-otp">View</span>
                                <?php 
                                                            }elseif($dd->job_close_status == 1){
                                                                ?>
                                <a href="<?= base_url() ?>customer/givereview/<?= $dd->booking_id ?>">Give Review</a>
                                <?php 
                                                            }
                                                        ?>




                            </div>
                        </div>
                    </td>
                    <td class="cart__table--body__list text-start">
                        <div style="font-size: 24px; font-weight: bold;">
                            <?= date('d M', strtotime($dd->scedule_date)) ?></div>
                        <div style="font-size: 14px; color: #888;">
                            <?= date('Y', strtotime($dd->scedule_date)) ?>
                            <span style="font-size: 16px; color: #555; font-weight: normal;">|
                                <?= date('H:i A', strtotime($dd->scedule_time)) ?></span>
                        </div>
                    </td>
                    <td class="cart__table--body__list text-start">
                        <span class="fw-bold">🚔<?= $dd->g_nm ?></span><br>
                        <span>📞<?= $dd->garage_phone ?></span><br>

                       
                    </td>

                    <td class="cart__table--body__list text-start">

                        <span><?=($dd->is_homeservice==0)?'No':'Yes' ?></span>
                    </td>

                    <td class="cart__table--body__list text-start">

                        <span><?= $dd->booking_status ?></span>
                    </td>


                    <td class="cart__table--body__list text-right">
                        <a class="wishlist__cart--btn primary__btn" style="background: #1ab360;"
                            href="<?= base_url() ?>customer/booking_details/<?= $dd->booking_id ?>"><i
                                class="fas fa-eye"></i></a>
                        <?php   
                                                    if($dd->booking_status=='Active'){
                                                ?>
                        <a class="wishlist__cart--btn primary__btn"
                            href="<?= base_url() ?>customer/bookingcancel/<?=$dd->booking_id ?>"><i
                                class="fas fa-ban"></i></a>
                        <?php   
                                                    }
                                                ?>
                    </td>
                </tr>
                <?php
                                        }
                                    } else {
                                    ?>
                <div class="col-12">
                    <table class="table text-start" style="border: 2px dashed #ccc;  ">
                        <tbody>
                            <tr class="py-4 px-3">
                                <td colspan="4" style="position:relative;  height: 220px;">

                                    <div class="lottie-container mb-3"
                                        style="max-width: 150px;  position: absolute; right: 0;">
                                        <script
                                            src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js">
                                        </script>
                                        <div id="lottie-no-cars"></div>
                                    </div>
                                    <h4 class="ml-2">Opps! No Data found.</h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <script>
                lottie.loadAnimation({
                    container: document.getElementById('lottie-no-cars'),
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: 'https://automoss.in/Animation - 1734960613567.json'
                });
                </script>
                <?php
                                    }
                                    ?>



            </tbody>
        </table>

    </div>

</div> -->





























<?php
    $this->load->view('customer/inc/footerv3');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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


<script>
// jQuery Script
$(document).ready(function() {
    $('.toggle-otp').click(function() {
        const button = $(this);
        const otpCell = button.closest('tr').find('.otp');

        if (button.text() === 'View') {
            // Show the OTP
            otpCell.text(otpCell.data('otp'));
            button.text('Hide');
        } else {
            // Hide the OTP
            otpCell.text('••••••');
            button.text('View');
        }
    });

    // Initialize hidden OTPs
    $('.otp').each(function() {
        const otp = $(this).text();
        $(this).data('otp', otp); // Store the original OTP in a data attribute
        $(this).text('••••••'); // Mask the OTP
    });
});
</script>