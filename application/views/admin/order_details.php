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
                            <a href="<?=base_url('admin/product_orders') ?>" class="btn btn-danger" style="float:right;">Back</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title"><?=$heading?></h4>
                    </div>
                </div>
            </div>
        </div>


     
     

    <div class="row justify-content-center">
        <div class="col-md-9">

            <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 pt-0 bg-light w-100">
                <div class="card-body" style="flex-direction: column;">
                     


                    <?php 
                        //print_result($orderdtl);
                        
                    ?>
                    <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 bg-light" style="width: 100%">


                        <?php 
                         
                        if ($orderdtl->delivery_status == 1) {
                        ?>
                            <h2>Order Delivered</h2>
                            <p>on: <?=date('d M Y',strtotime($orderdtl->delivered_on)) ?></p>

                        <?php
                             
                            } 
                        ?>




                        <h2 class="card-title mb-0 ps-3">Customer Details</h2>

            <div class="card-body">
                <table class="table" style="border-collapse: collapse; width: 100%;">
                    <thead class="table-primary">
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><i class="fa fa-user"></i>&nbsp; Full Name</strong></td>
                            <td><?=$orderdtl->shipping_name ?></td>
                        </tr>
                        <tr>
                            <td><strong><i class="fa fa-phone"></i> &nbsp;Phone</strong></td>
                            <td><?=$orderdtl->shipping_phone ?></td>
                        </tr>
                        <tr>
                            <td><strong><i class="fa fa-envelope"></i> &nbsp;Email</strong></td>
                            <td><?=$orderdtl->shipping_email ?></td>
                        </tr>    
                         <tr>
                            <td><strong><i class="fa fa-map"></i> &nbsp;Address</strong></td>
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
                            <td><strong><i class="fa fa-cogs"></i>&nbsp; Product Name</strong></td>
                            <td><?=$orderdtl->product_name ?></td>
                        </tr>
                        <tr>
                            <td><strong><i class="fa fa-cogs"></i> &nbsp;qty</strong></td>
                            <td><?=$orderdtl->qty ?></td>
                        </tr>
                        <tr>
                            <td><strong><i class="fa fa-cogs"></i> &nbsp;Price</strong></td>
                            <td><?=$orderdtl->price ?></td>
                        </tr>    
                         <tr>
                            <td><strong><i class="fa fa-cogs"></i> &nbsp;Home Delivery</strong></td>
                            <td><?=($orderdtl->is_homedelivery==0)?'No':'Yes' ?></td>
                        </tr>                                    
                    </tbody>
                </table>
            </div>


                    </div>
                    



                    







                </div>
            </div>










 

        </div>
        
    </div>
 











              
            
<?php    
    include('inc/footer.php');

?>

 