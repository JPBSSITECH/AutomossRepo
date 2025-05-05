<?php
  include('inc/header.php');
?>

<script src="https://kit.fontawesome.com/7948284983.js" crossorigin="anonymous"></script> 


<style type="text/css">
   .spl_list ul li{
        padding-bottom: 10px; font-size: 16px; width: 48%; float: left;
   }
   .spl_list ul li::before{
       font-family: "Font Awesome 5 Free";
        content: "\f058"; margin-right: 10px; color: #c23200;
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
</style>

    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg"style="background-image: url('<?=base_url() ?>assets/img/carbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title mb-25 text-white">Thank You</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="<?= base_url()?>" style="color:white;">Home</a></li>
                                <li class="breadcrumb__content--menu__items text-white"><span>Thank You</span></li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->




     

        <div class="login__section section--padding">
            <div class="container">
                
             <div class="login__section--inner">
                <div class="row row-cols-md-2 row-cols-1 d-flex justify-content-center">
                    <div class="col-md-7">








                        <div class="alert alert-success" role="alert">
                          <h4 class="alert-heading">Booking Successful!</h4>
                          <p>Thank you for using Automoss. Your Order placed successfully.</p>
                        </div>

                        <!-- Ticket Display -->
                        <div class="ticket-card">
                            <img src="<?=$orderz->qrcode ?>" />
                          <h5>Your Ticket</h5>
                          <hr>
                          <p class="transaction-id">Transaction ID: <span id="transaction-id">#<?=$bid ?></span></p>
                           
                           
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-4">
                          <a href="/" class="btn btn-primary">Go to Homepage</a>
                          
                        </div>







                        
                    </div> 
                    <div class="col-md-5">

                            <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 pt-0 bg-light w-100">
                                 
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
  include('inc/footer.php');
?>
 
 <script>
    function updatePriceValue(value) {
        document.getElementById('selected-price').innerText = value;
    }
</script>
