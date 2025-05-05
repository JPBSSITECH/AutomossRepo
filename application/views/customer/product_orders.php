<?php    
    
    $this->load->view('customer/inc/headerv3');
?>

<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>
<style>
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
    font-size: 1.3rem;
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



<div class="container">
    <div class="row mb-5">


        <div class="col-12 p-3  d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;
      border-radius: 10px;">
            <h2 class="pl_0 title_3d">Product Orders</h2>
            <div class="text-end">

            </div>
        </div>


    </div>

    <div class="row">

        <div class="row d-none">

            <div class="card">
                <div class="card-body">
                    <!-- Search Form -->
                    <div class="col-xl-12">


                        <div class="hstack d-flex gap-3" style="margin-bottom: 10px;">
                            <input class="contact__form--input" placeholder="Search......" type="text"
                                style="height: 40px;">

                            <div class="text-start">
                                <a class="contact__form--btn primary__btn" type="submit" style="height: 4rem;">
                                    <span>Search</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>



        <!-- ////////////////////////table start -->
        <div class="card-body table-responsive" style="padding: 10px 0;">
            <div class="cart__table table-wrapper">
                <table class="cart__table--inner">
                    <thead class="cart__table--header">
                        <tr class="cart__table--header__items">
                            <th class="cart__table--header__list">Product Name</th>
                            <!-- <th class="cart__table--header__list">City</th> -->
                            <th class="cart__table--header__list">Contact</th>
                            <th class="cart__table--header__list">Sub Total</th>
                            <th class="cart__table--header__list">Status</th>
                            <th class="cart__table--header__list">ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="cart__table--body ">
                        <?php
                                    if (mycount($poo) > 0) {
                                        $i = 0;
                                        foreach ($poo as $dd) {
                                            $i++;
                                    ?>
                        <tr class="cart__table--body__items">
                            <td class="cart__table--body__list">
                                <div class="cart__product d-flex align-items-center">
                                    <div class="cart__thumbnail">
                                        <img class="border-radius-5" src="<?=$dd->thumb ?>" alt="service-icon"
                                            style="width: 55px;">
                                    </div>

                                    <div class="cart__content">
                                        <h3 class="cart__content--title h4"><a target="_blank"
                                                href="<?=base_url('product_details/'.spl_encode($dd->product_id)) ?>"><?= $dd->product_name ?>
                                            </a></h3>
                                        <span class="cart__content--variant">Quantity : <?= $dd->qty ?></span>

                                        OTP: <span class="otp"><?= $dd->closer_otp ?></span> <span
                                            class="toggle-otp">View</span>





                                    </div>
                                </div>

                            <td class="cart__table--body__list text-start">
                                <span class="fw-bold">🚹 <?= $dd->shipping_name ?></span><br>
                                <span>📞<?= $dd->shipping_phone ?></span><br>
                                <span>📍<?= $dd->city_nm ?></span>
                            </td>
                            <td class="cart__table--body__list text-start">
                                <div class="badge-beat" style="font-size: 15px;"><?= $dd->sub_total ?></div>
                            </td>
                            <td class="cart__table--body__list text-start">
                                <div style="font-size: 15px;">

                                    <?php                                                    
                                                        if($dd->is_cancelled==1){
                                                            echo 'Cancelled';
                                                        }else{
                                                           echo ($dd->delivery_status == 1) ? "Delivered" : "Pending"; 
                                                        }
                                                    ?>

                                </div>
                            </td>
                            <td class="cart__table--body__list text-right">
                                <a class="wishlist__cart--btn primary__btn"
                                    href="<?= base_url() ?>customer/order_details/<?= $dd->order_id ?>"><i
                                        class="fas fa-eye"></i></a>
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








        <!-- ///////////////////////End -->








    </div>
</div>







<?php    
    
    $this->load->view('customer/inc/footerv3');
?>



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