<?php    
    
    $this->load->view('mechanic/inc/headerv3');
?>

<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>

<style type="text/css">
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
    margin-right: auto;
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

.primary__btn_outlined {

    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
</style>


<div class="row" style="margin-bottom: 20px;">
    <div class="col-12 p-3 d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;
    border-radius: 10px;">
        <h2 class="pl_0 title_3d">My Bookings</h2>
        <a style="float:left; margin-left:10px;"
            class="wishlist_cart--btn <?=($typ == 'active')?'animated_btn':'primary__btn_outlined ' ?>"
            href="<?=base_url('mechanic/booking_list/active') ?>">Active</a>
        <a style="float:left; margin-left:10px;"
            class="wishlist_cart--btn <?=($typ == 'completed')?'animated_btn':'primary__btn_outlined ' ?>"
            href="<?=base_url('mechanic/booking_list/completed') ?>">Completed</a>

        <a style="float:left; margin-left:10px;"
            class="wishlist_cart--btn <?=($typ == 'cancelled')?'animated_btn':'primary__btn_outlined ' ?>"
            href="<?=base_url('mechanic/booking_list/cancelled') ?>">Cancelled</a>


        <a style="float:left; margin-left:10px;"
            class="wishlist_cart--btn <?=($typ == 'all')?'animated_btn':'primary__btn_outlined ' ?>"
            href="<?=base_url('mechanic/booking_list/all') ?>">All</a>
    </div>
</div>

<div class="row">

    <div class="card shadow-lg" style="padding: 0;">
        <div class="card-header" style="padding: 20px 10px;">



            <div class="hstack d-flex gap-3">
                <input class="contact__form--input" placeholder="Search." type="text" style="height: 40px;">

                <div class="text-start">
                    <a class="contact__form--btn animated_btn" type="submit" style="height: 4rem;">
                        <span>Search</span></a>
                </div>
            </div>

        </div>



        <div class="card-body">
        <div class="">
            <table class="table" style="border-collapse: collapse; width: 100%;">
            <thead class="cart__table--header">
            <tr class="cart__table--header__items">
                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;font-size:13px;">
                            <i class="fas fa-calendar-alt"></i> Created On
                        </th>
                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;font-size:13px;">
                            <i class="fas fa-id-card"></i> Booking ID
                        </th>
                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;font-size:13px;">
                            <i class="fas fa-user"></i> Customer Name
                        </th>
                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;font-size:13px;">
                            <i class="fas fa-phone"></i> Customer Phone
                        </th>
                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;font-size:13px;">
                            <i class="fas fa-calendar-day"></i> Booking Date
                        </th>

                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;font-size:13px;">
                            <i class="fas fa-calendar-day"></i> Home Service
                        </th>
                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;font-size:13px;">
                            <i class="fas fa-calendar-day"></i> Status
                        </th>


                        <th class="cart__table--header__list" style="text-align: left; padding: 8px;font-size:13px;">
                            <i class="fas fa-cogs"></i> Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        	$i = 0;
                        	foreach ($bd as $dd) {
                        	$i++;
                        	?>
                    <tr>
                        <!-- <td><?=$i; ?></td> -->
                        <td><?=$dd->created_on ?></td>
                        <td><?=$dd->booking_id ?></td>
                        <td><?=$dd->cust_name ?></td>
                        <td><?=$dd->cust_phone ?></td>

                        <td><?=$dd->scedule_date ?></td>
                        <td><?=($dd->is_homeservice==0)?'No':'Yes'  ?></td>
                        <td><?=$dd->booking_status ?></td>
                        <td>
                            <a href="<?= base_url() ?>mechanic/booking_details/<?=$dd->booking_id ?>"
                                style="color: red;" title="View Details">
                                <i class="fas fa-eye"></i>
                            </a>

                            <!-- <a href="<?= base_url() ?>mechanic/booking_details/<?=$dd->booking_id ?>" style="color: red;" title="Cancel Booking">
                                        <i class="fas fa-ban"></i>
                                    </a> -->

                            <?php if (isset($typ) && $typ === 'completed'): ?>
                            <a href="<?= base_url('service_bill/' . $dd->booking_id) ?>" class="text-success ms-2"><i
                                    class="fa fa-file-invoice-dollar"></i></a>
                            <?php endif; ?>


                        </td>

                    </tr>
                    <?php
                        	}
                        	?>

                </tbody>
            </table>
        </div>
        </div>
    </div>

</div>








<?php    
    
    $this->load->view('mechanic/inc/footerv3');
?>