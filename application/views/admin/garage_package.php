<?php    
    include('inc/header.php');

?>

<div class="page-content">
    <div class="container-fluid">

        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                            <a href="<?=base_url('admin/garage_package_add') ?>" class="btn btn-danger" style="float:right;">Add</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title">Garage Package</h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" >

            <div class="col-xl-12">
                <div class="card" >
                    <div class="card-body" style=" min-height: 500px;"> 

                        

                        <div class="table-responsive">
                        <table class="table" style="margin-bottom: 43px;">
                            <thead>
                                <tr>
                                    <th scope="col">Sl No.</th>
                                    <th scope="col">Package Name</th>
                                    <th scope="col">Service Cat Count</th>
                                    <th scope="col">Product Cat Count</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i=0;
                                    foreach($gp as $r){
                                    $i++;
                                ?>
                                <tr>
                                    <th scope="row"><?= $i;  ?></th>
                                    <td><?= $r->name;  ?></td>
                                    <td><?= $r->category_count;  ?></td>
                                    <td><?= $r->ecom_category_count;  ?></td>
                                    <td>
                                      <a href="<?=base_url('admin/garage_package_edit/'.$r->id) ?>" class="text-primary"><i class="fa fa-edit"></i></a>

                                      <a onclick="return confirm('Are you sure you want to delete this item?');"  href="<?=base_url('admin/garage_package_delete/'.$r->id) ?>" class="text-danger" ><i class="fa fa-trash"></i></a>
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
        </div>











              
            
<?php    
    include('inc/footer.php');

?>