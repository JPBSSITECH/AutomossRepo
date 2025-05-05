<?php    
    include('inc/header.php');

?>

<div class="page-content">
    <div class="container-fluid">

        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                            <a href="<?=base_url('admin/seo_add') ?>" class="btn btn-danger" style="float:right;">Add</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title">Seo List</h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style="margin-bottom:50px;">

            <div class="col-xl-12">
                <div class="card" >
                    <div class="card-body" style=" min-height: 500px;"> 

                        

                        <div class="table-responsive">
                        <table class="table" style="margin-bottom: 43px;">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sl No.</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Url</th> 
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $i=0;
                                            foreach($seoies as $r){
                                            $i++;
                                        ?>
                                            <tr>
                                                <th scope="row"><?= $i;  ?></th>
                                                <td><?= $r->title;  ?></td>
                                                <td><?= $r->url;  ?></td>
                                                <td>
                                                    <a href="<?=base_url('admin/seo_edit/'.$r->si_id) ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?=base_url('admin/seo_delete/'.$r->si_id) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                     
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

  