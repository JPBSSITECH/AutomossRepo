<?php    
include('inc/header.php');

?>

<div class="page-content">
    <div class="container-fluid">


        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                        <a href="<?=base_url('admin/product_add') ?>" class="btn btn-danger" style="float:right;">Add</a>
                        <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title">Poduct List</h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" >

            <div class="col-xl-12">
                <div class="card" >
                    <div class="card-body" style=" min-height: 500px;"> 

                        <div class="row">
                            <div class="col-xl-12"> 

                                <form method="post">
                                <div class="hstack gap-3"  style="margin-bottom: 10px;">    
                                    <input  type="text"  placeholder="Search Product" id="search"  value="<?=@$_SESSION['pp_search']['searches'] ?>"  name="searches" class="form-control me-auto" />


                                    <button type="submit" class="btn btn-danger"  >Search</button>
                                    <a href="?reset=Y" class="btn btn-outline-danger">Reset</a>


                                </div>
                                </form>

                            </div>
                        </div>

                        

                        <div class="table-responsive">
                            <table class="table" style="margin-bottom: 43px;">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Info</th>


                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($main as $mainz) {
                                        $i++;
                                        ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $mainz->name; ?></td>
                                            <td><?= character_limiter($mainz->product_info,30); ?></td>  
                                            <td>
                                                <a href="<?=base_url('admin/product_edit/'.$mainz->id) ?>" class="btn"><i class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Are you sure you want to delete this item?');" href="<?=base_url('admin/product_delete/'.$mainz->id) ?>" class="btn"><i class="fa fa-trash"></i></a>
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
        include('inc/footer.php');

        ?>

