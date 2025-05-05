 <?php    
    
    $this->load->view('customer/inc/headerv3');
?>


 

                            <!-- ////////////////////////////// -->


                           <div class="row">
                               <div class="col-md-5">
                                    <h2 class="mb-3">Search Id: <?=$this->uri->segment(3) ?></h2>

                                    <div class="card">
                                      <img   src="<?=$job->thumb ?>" onerror="this.onerror=null; this.src='https://automoss.in/nocar.png';" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#lightboxModal">
                                      <p class="text-center mt-2">click to view more</p>
                                       
                                      <div class="card-body">
                                        <h3 class=""><?= $job->job_heading;  ?></h3>
                                        <p class="card-text"><?=$job->job_info ?></p>
                                        <p class="card-text">Address: <?=$job->cust_address ?></p>


                                        <h5 class="">CAR: <?=$job->car_manufacturer ?> <?=$job->car_model ?> <?=$job->fuel_type ?></h5>

                                        
                                         <?php 
                                            if($job->jc_aud!=''){
                                                ?>
                                                    <audio controls>
                                                        <source src="<?=$job->jc_aud ?>" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                <?php

                                            }
                                        ?>
                                        

                                         <?php 
                                            if($job->jc_vid!=''){
                                                ?>
                                                    
                                                    <h5>Video Feature</h5>
                                                    <video controls width="100%">
                                                        <source src="<?=$job->jc_vid ?>" type="video/mp4">
                                                        Your browser does not support the video element.
                                                    </video>
                                                <?php

                                            }
                                        ?>

                                         


                                       
                                        
                                      </div>
                                    </div>
                               </div>
                               <div class="col-md-7">
                                   <h2 class="mb-3">Bids Received <?=(mycount($job_award)>0)?'<span style="color:#ED1D24">(AWARDED)</span>':'' ?></h2>
                                    <ul class="list-group"> 
                                        


                                        <!-- Bid Item 1 -->

                                        <?php 
                                        if(mycount($bids)>0){

                                            foreach ($bids as $bb) {
                                        
                                        ?>
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h3 class="mb-1">Garage Name: <?=$bb->garage_name ?></h3>
                                                    <p><?=StarRating($bb->rvz) ?> Based On <?=$bb->rv_count ?> reviews</p>
                                                    <p class="mb-1">Address: <?=$bb->garage_address ?></p>
                                                    <small>Additional Info: "<?=$bb->short_info ?>"</small>
                                                </div>
                                                <div>
                                                    <h3 class="text-success">&#8377;  <?=$bb->price ?></h3>
                                                    <?php 
                                                        if(mycount($job_award)>0) {
                                                            if($bb->is_awarded==1){
                                                                echo '<span style="color:#ED1D24">(AWARDED)</span>';
                                                            }
                                                        }else{
                                                    ?>
                                                        <a href="<?=base_url() ?>customer/awardbid/<?=$bb->bid_id ?>" class="btn primary__btn btn-sm">Award This Bid</a>
                                                    <?php 
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </li>
                                        <?php 
                                            }
                                            }else{
                                                ?>
                                                    <li class="list-group-item">
                                                            <div class="d-flex justify-content-between">
                                                                <div>
                                                                    <h5 class="mb-1">No Bids TIll Yet</h5>
                                                                    
                                                                </div>
                                                                 
                                                            </div>
                                                    </li>

                                                <?php
                                            }
                                        ?>

                                        

                                    </ul>
                               </div>
                           </div>
















 
        <div class="modal fade" id="lightboxModal" tabindex="-1" aria-labelledby="lightboxModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                     
                    <div class="modal-body text-center">
                        <div id="lightboxCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?=$job->thumb ?>" onerror="this.onerror=null; this.src='https://automoss.in/nocar.png';" alt="Car Secondary Image 1" class="img-fluid">
                                </div>

                                 <?php 
                                    if($job->thumb2!=''){
                                        ?>
                                            <div class="carousel-item">
                                                <img src="<?=$job->thumb2 ?>" alt="Car Secondary Image 2" class="img-fluid">
                                            </div>
                                        <?php

                                    }
                                ?>
                                
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 

                              












                           

                            



 


                           <!-- ////////////////////////////// -->

                            

 









  


 


 


<?php
    $this->load->view('customer/inc/footerv3');
?>


<script>
    // Initialize Chart.js
    const ctx = document.getElementById('patientsChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
          label: 'Customer',
          data: [12, 19, 3, 5, 2, 3, 7],
          backgroundColor: 'rgba(75, 192, 192, 0.6)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>