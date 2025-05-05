<?php    
include('inc/header.php');

?>

<div class="page-content">
    <div class="container-fluid">


        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                        <a href="<?=base_url('admin/servicecat_add') ?>" class="btn btn-danger" style="float:right;">Add</a>
                        <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title">Category List</h4>
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
                                    <input  type="text"  placeholder="Search Category" id="search" value="<?=@$_SESSION['sc_search']['searches'] ?>" name="searches" class="form-control me-auto" />


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
                                        <th scope="col">Category</th>
                                        <th scope="col">Sub Category</th>
                                        <th scope="col">Sub Sub Category</th>
                                        <th scope="col">Service Count</th>


                                        <th width="180" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($cat as $main) {
                                        $i++;
                                        ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><b><?= $main->name; ?></b></td>
                                            <td> </td>  
                                            <td> </td>  
                                            <td><?=$main->pack_count; ?></td>  
                                            <td>
                                                <a href="<?=base_url('admin/servicecat_edit/'.$main->id) ?>"  ><i class="fa fa-edit"></i></a>
                                                <?php  
                                                    if($main->pack_count==0){
                                                ?>
                                                <a class="text-danger"  onclick="return confirm('Are you sure you want to delete this item?');" href="<?=base_url('admin/servicecat_delete/'.$main->id) ?>"  ><i class="fa fa-trash"></i></a>
                                                <?php  
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php

                                        if (isset($main->child)) {
                                            foreach($main->child as $sub) {
                                                $i++;
                                                ?>
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td style="padding-left: 30px;"> </td>
                                                    <td><?= $sub->name; ?></td>
                                                    <td></td>
                                                    <td><?=@$sub->pack_count; ?></td>
                                                    <td>
                                                        <a href="<?=base_url('admin/servicecat_edit/'.$sub->id) ?>" 
                                                            ><i class="fa fa-edit"></i></a>
                                                        <?php  
                                                            if($main->pack_count==0){
                                                        ?>
                                                        <a class="text-danger" onclick="return confirm('Are you sure you want to delete this item?');" href="<?=base_url('admin/servicecat_delete/'.$sub->id) ?>"  ><i class="fa fa-trash"></i></a>
                                                        <?php  
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>


                                                <?php  
                                                    $chh = array_search_multidim($subcategories, 'parent_id', $sub->id);
                                                    foreach($chh as $subz) {
                                                        $i++;
                                                        ?>
                                                            <tr>
                                                                <th scope="row"><?=$i; ?></th>
                                                                <td style="padding-left: 30px;"> </td>
                                                                <td></td>
                                                                <td><?= $subz->name; ?></td>
                                                                <td><?=@$subz->pack_count; ?></td>

                                                                <td>
                                                                    <a href="<?=base_url('admin/servicecat_edit/'.$subz->id) ?>" ><i class="fa fa-edit"></i></a>
                                                                    <?php  
                                                                        if($main->pack_count==0){
                                                                    ?>
                                                                    <a class="text-danger" onclick="return confirm('Are you sure you want to delete this item?');" href="<?=base_url('admin/servicecat_delete/'.$subz->id) ?>" 
                                                                         ><i class="fa fa-trash"></i></a>
                                                                    <?php  
                                                                        }
                                                                    ?>
                                                                </td>
                                                            </tr>


                                                        <?php
                                                    }

                                                ?>






                                                <?php
                                            }
                                        }
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

