<?php    
    
    $this->load->view('mechanic/inc/header2');
?>

<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet"> 
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>
  


<div class="container">
	<div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card shadow-lg">
                    <div class="card-body justify-content-between" style="padding: 8px 12px;">
                           <h2 style="padding-top:0px; margin-bottom:0px;" class="card-title"><?=$heading ?></h2>
                           <!-- <button class="btn btn-primary btn-lg">ADD</button> -->
                           <div class="text-start">
                        <!-- <a href="<?= base_url() ?>mechanic/package_add" class="contact__form--btn primary__btn" type="submit"> <span>Add</span></a> -->
                    </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg" >
            	<div class="row">
				    <div class="col-md-12">
				        <div class="card">
				            <div class="card-body">
				            <!-- Search Form -->
				           <div class="col-xl-12"> 
                        
                           
                            <div class="hstack d-flex gap-3" style="margin-bottom: 10px;">    
                                    <input class="contact__form--input"  placeholder="Search......" type="text" style="height: 40px;">
                                     
                                     <div class="text-start">
                        			<a class="contact__form--btn primary__btn" type="submit" style="height: 4rem;"> <span>Search</span></a>
                   					 </div>                             
                            </div>
                          
                         </div>
				            </div>
				        </div>
				    </div>
				</div>

                <div class="card-body mt-0 pt-0">
                    <!-- Table -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="bg-dark text-white">
                                <th>#</th>
                                <th>Job Heading</th>
                                <th>Description</th>
                                <th>Address</th>                                 
                                <th>Action</th>
                                <!-- <th>Status</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
                        	$i = 0;
                        	foreach ($dp as $dd) {
                        	$i++;
                        	?>
                            <tr>
                                <td><?=$i; ?></td>
                                <td><?=$dd->job_heading ?></td>
                                <td><?=$dd->job_info ?></td>
                                <td><?=$dd->cust_address ?></td>
                                <td>
                                <a href="<?= base_url() ?>mechanic/jobcard_details/<?=$dd->transaction_id ?>" class="text-dark" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                                <!-- <td><span class="badge bg-success">Active</span></td> -->
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
    
    $this->load->view('mechanic/inc/footer');
?>
