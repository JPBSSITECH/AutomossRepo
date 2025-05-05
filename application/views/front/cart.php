<?php
include ('inc/header.php');
?>

<script src="https://kit.fontawesome.com/7948284983.js" crossorigin="anonymous"></script>


<style type="text/css">
.spl_list ul li {
    padding-bottom: 10px;
    font-size: 16px;
    width: 48%;
    float: left;
}

.spl_list ul li::before {
    font-family: "Font Awesome 5 Free";
    content: "\f058";
    margin-right: 10px;
    color: #c23200;
}
</style>
<style>
.form-control-range {
    -webkit-appearance: none;
    appearance: none;
    width: 100%;
    height: 8px;
    background: #e1c7c7;
    border-radius: 5px;
    outline: none;
    transition: background 0.3s ease;
}

.form-control-range::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 16px;
    height: 16px;
    background: #ED1D24;
    border-radius: 50%;
    cursor: pointer;
    transition: background 0.3s ease;
}

.form-control-range::-moz-range-thumb {
    width: 16px;
    height: 16px;
    background: #007bff;
    border-radius: 50%;
    cursor: pointer;
    transition: background 0.3s ease;
}

.form-control-range:active::-webkit-slider-thumb {
    background: #ED1D24;
}

.form-control-range:active::-moz-range-thumb {
    background: #ED1D24;
}

* {
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    text-shadow: rgba(0, 0, 0, .01) 0 0 1px
}

body {
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
    font-weight: 400;
    background: #E0E0E0;
    color: #000000
}







/* Basic styling for the title */

.cart_title {
    font-size: 32px;
    font-weight: bold;
    color: #fff;

    display: inline-block;
    position: relative;
    animation: embossTextShadow 2s ease-in-out infinite;

    text-transform: uppercase;

}

/* 3D Emboss Text Shadow Animation */
@keyframes embossTextShadow {
    0% {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5),
            -1px -1px 3px rgba(255, 255, 255, 0.8),
            1px 1px 5px rgba(0, 0, 0, 0.4);
    }

    25% {
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6),
            -2px -2px 5px rgba(255, 255, 255, 0.7),
            2px 2px 8px rgba(0, 0, 0, 0.5);
    }

    50% {
        text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.7),
            -4px -4px 10px rgba(255, 255, 255, 0.6),
            4px 4px 12px rgba(0, 0, 0, 0.6);
    }

    75% {
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6),
            -2px -2px 5px rgba(255, 255, 255, 0.7),
            2px 2px 8px rgba(0, 0, 0, 0.5);
    }

    100% {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5),
            -1px -1px 3px rgba(255, 255, 255, 0.8),
            1px 1px 5px rgba(0, 0, 0, 0.4);
    }
}




.cart_list {
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border-top-left-radius: 15px;
    border-bottom-right-radius: 15px;
}

.cart_item {
    width: 100%;
    padding: 15px;
    padding-right: 46px
}

.cart_item_image {
    width: 133px;
    height: 133px;
    float: left
}

.cart_item_image img {
    max-width: 100%
}


.cart_item_title {
    font-size: 14px;


    color: rgb(0 19 223 / 73%);
    font-weight: 700;
    text-transform: uppercase;
    text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0, 0, 0, .1), 0 1px 3px rgba(0, 0, 0, .3), 0 3px 5px rgba(0, 0, 0, .2), 0 5px 10px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .2), 0 20px 20px rgba(0, 0, 0, .15);
}







.order_total {
    width: 100%;
    height: 60px;
    margin-top: 30px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    padding-right: 46px;
    padding-left: 15px;
    background-color: #fff;
    border-bottom-left-radius: 15px;
    border-top-right-radius: 15px;
}

.order_total_title {
    display: inline-block;
    font-size: 14px;
    color: rgba(0, 0, 0, 0.5);
    line-height: 60px
}

.order_total_amount {
    display: inline-block;
    font-size: 18px;
    font-weight: 500;
    margin-left: 26px;
    line-height: 60px;
    color: #e80000;
    text-shadow: 0px 4px 3px rgba(0, 0, 0, 0.4), 0px 7px 10px rgba(0, 0, 0, 0.1), 0px 10px 19px rgba(0, 0, 0, 0.1);
}

.cart_buttons {
    margin-top: 60px;
    /* text-align: right; */
    display: flex;
    justify-content: end;
}

.cart_button_clear {

    border: none;
    font-size: 18px;
    font-weight: 400;
    line-height: 48px;
    color: rgba(0, 0, 0, 0.5);
    background: #FFFFFF;
    border: solid 1px #b2b2b2;
    padding-left: 35px;
    padding-right: 35px;
    outline: none;
    cursor: pointer;
    margin-right: 26px;
    display: flex;
    align-items: center;
    font-size: 14px;
    border-radius: 15px;
    gap: 7px;
}

.cart_button_clear:hover {
    border-color: #0e8ce4;
    color: #0e8ce4
}

.cart_button_checkout {
    display: inline-block;
    border: none;
    font-size: 18px;
    font-weight: 400;
    line-height: 48px;
    color: #FFFFFF;
    padding-left: 35px;
    padding-right: 35px;
    outline: none;
    cursor: pointer;
    vertical-align: top;
    display: inline-block;
    background: #e40e0e;
    border-radius: 15px;
    height: 48px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    gap: 7px;




    display: flex;
    align-items: center;
    font-size: 14px;
}

.cart_button_checkout a {
    display: block;
    font-size: 18px;
    font-weight: 400;
    line-height: 48px;
    color: #FFFFFF;
    padding-left: 35px;
    padding-right: 35px
}

.cart_button_checkout:hover {
    opacity: 0.8
}


.cart_button_checkout img {
    width: 24px;
    height: auto;
}


.cart_button_clear img {
    width: 24px;
    height: auto;
}


.text-md-right {
    text-align: right !important;
}

.cart__table {
    width: 100%;
    padding: 15px;
    padding-right: 46px;
}

.quantity__box {
    text-align: center;
    display: flex;
    gap: 10px;
}

.cart__table--body--items__list {

    padding: 2rem 2rem 2rem 2rem;
}

.display_justify {
    display: flex;
    justify-content: center;
}

.cart__thumbnail img {
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}
</style>

<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg"
        style="background-image: url('<?= base_url() ?>assets/img/carbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title mb-25 text-white">Cart</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="<?= base_url() ?>"
                                    style="color:white;">Home</a></li>
                            <li class="breadcrumb__content--menu__items text-white"><span>Cart</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="login__section section--padding">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-10 offset-lg-1">
                    <div class="cart_container">
                        <div class="cart_title mb-5">Shopping Cart</div>

                        <form method="post">

                            <div class="cart_list">

                                <div class="cart__table">
                                    <table class="cart__table--inner">
                                        <thead class="cart__table--header">
                                            <tr class="cart__table--header__items">
                                                <th class="cart_item_title text-center">Product Image</th>
                                                <th class="cart_item_title text-center">Product Name</th>
                                                <th class="cart_item_title text-center">Unit Price</th>
                                                <th class="cart_item_title text-center">Quantity</th>
                                                <th class="cart_item_title text-center">Price</th>
                                                <th class="cart_item_title text-center">Remove</th>
                                                <th class="cart_item_title text-center">Save for later</th>
                                            </tr>
                                        </thead>
                                        <tbody class="cart__table--body">


                                            <?php

                                            $tot = 0;
                                            foreach ($cart as $cx) {
                                                $ln_tot = $cx->offer_price * $cx->quantity;
                                                $tot += $ln_tot;
                                                ?>

                                            <tr class="cart__table--body__items">
                                                <td class="cart__table--body--items__list text-center">
                                                    <div class="cart__product display_justify">
                                                        <div class="cart__thumbnail">
                                                            <a href="product-details.html"><img class="border-radius-5"
                                                                    src="<?= $cx->thumb ?>" alt="cart-product"></a>
                                                        </div>

                                                    </div>
                                                </td>
                                                <td class="cart__table--body--items__list text-center">
                                                    <div class="cart__product display_justify">

                                                        <div class="">
                                                            <h3 class="cart__content--title h4">
                                                                <a
                                                                    href="<?= base_url('product_details/' . spl_encode($cx->product_id)) ?>"><?= $cx->name ?></a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cart__table--body--items__list text-center">
                                                    <div class="quantity__box display_justify">
                                                        <span class="cart__price end">₹<?= $cx->offer_price ?></span>
                                                    </div>
                                                </td>

                                                <td class="cart__table--body--items__list text-center">
                                                    <div class="quantity__box display_justify align-items-center">
                                                        <a class="btn btn-sm btn-outline-danger"
                                                            href="<?= base_url('addcart/' . spl_encode($cx->product_id)) ?>/m">-</a>
                                                        <span class="cart__price end"><?= $cx->quantity ?></span>
                                                        
                                                        <a class="btn btn-sm btn-outline-success"
                                                            href="<?= base_url('addcart/' . spl_encode($cx->product_id)) ?>">+</a>
                                                    </div>
                                                </td>
                                                <td class="cart__table--body--items__list text-center">
                                                    <span class="cart__price end">₹<?= $ln_tot ?></span>
                                                </td>


                                                <td class="cart__table--body--items__list text-center">
                                                    <a href="<?= base_url('removecart/' . spl_encode($cx->id)) ?>"><i
                                                            class="fas fa-trash text-danger"></i></a>
                                                </td>
                                                <td class="cart__table--body--items__list text-center">

                                                    <i class="fa-solid fa-bookmark"></i>
                                                </td>
                                            </tr>

                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="order_total">
                                <div class="order_total_content text-md-right">
                                    <div class="order_total_title">Order Total:</div>
                                    <div class="order_total_amount">₹<?= $tot ?></div>
                                    <input type="hidden" name="cart_total" value="<?= $tot ?>">
                                </div>
                            </div>
                            <div class="cart_buttons">

                                <a href="<?= base_url('spareparts') ?>" class="button cart_button_clear">
                                    <img src="<?= base_url() ?>assets/img/checkout-unscreen (1).gif">
                                    Continue Shopping
                                </a>

                                <button type="submit" class="button cart_button_checkout"><img
                                        src="<?= base_url() ?>assets/img/grocery-unscreen.gif">Checkout
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</main>




<script type="text/javascript">
var page_nm = 'servicedetails';
</script>

<?php
include ('inc/footer.php');
?>

<script>
function updatePriceValue(value) {
    document.getElementById('selected-price').innerText = value;
}
</script>