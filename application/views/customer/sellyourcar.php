<?php    
    
    $this->load->view('customer/inc/header');
?>

<style type="text/css">
    .primary__btn{
        border-radius: 0.5rem !important;
    }
</style>
  


<div class="container">

    <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card shadow-lg">
                    

                    <div class="card-body justify-content-between" style="padding: 8px 12px;">
                           <h2 style="padding-top:0px; margin-bottom:0px;" class="card-title">List Of Cars</h2>
                            
                           <div class="text-start">
                               <!--  <a href="<?=base_url('customer/jobcard_add') ?>" class="contact__form--btn primary__btn" type="submit"> <span>Add</span></a> -->
                            </div>
                    </div>









                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg" >
                 

                <div class="card-body mt-0 pt-2">
                    <!-- Table -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="bg-dark text-white">
                                <th>#</th>
                                <th>Name</th>
                               <th>Info</th>
                                <!-- <th>Address</th> -->
                                <th>Status</th>
                                <th>Leads</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    $i=0;
                                    foreach($car as $r){
                                    $i++;
                                ?>
                                <tr>
                                    <th scope="row"><?= $i;  ?></th>
                                    <td><?= $r->name;  ?></td>
                                    <td><?= $r->info;  ?></td>
                                    
                                    <!-- <td><?= $r->cust_address;  ?></td> -->
                                    <td><?=($r->status==1)?'Active':'Completed';  ?></td>
                                    <td><?= $r->cc_count;  ?></td>
                                     <td>
                                        <a href="<?= base_url() ?>customer/jobcard_details/<?=$r->id ?>"   title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>



                                   
                                </tr>
                                <?php
                                }
                                ?>
                            <!-- <tr>
                                <td>2</td>
                                <td>No data found</td>
                                <td>No data found</td>
                                <td>No data found</td>
                                
                            </tr> -->
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php    
    
    $this->load->view('customer/inc/footer');
?>
