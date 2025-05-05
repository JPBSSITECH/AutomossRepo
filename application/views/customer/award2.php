<?php    
    
    $this->load->view('customer/inc/header2');
?>




                    <div class="account__wrapper">
                        <div class="account__content">

                            <!-- ////////////////////////////// -->

                             <form method="post">
                                <div class="account__login--inner">
                                    <div class="row">  
                                            <?php $nm = (isset($cust_info->fname))?$cust_info->fname.' '.$cust_info->lname:'' ; ?>                                      
                                            
                                            <div class="col-md-6">                                                
                                                <input type="date" class="account__login--input" name="scedule_date" placeholder="Date" min="<?=date('Y-m-d') ?>"  required>
                                            </div>
                                            <div class="col-md-6">                                                
                                                <input type="time" class="account__login--input" name="scedule_time" placeholder="Time"  required>
                                            </div>





                                           

                                            


 



                                            <div class="col-md-6">                                        
                                                    <input class="account__login--input" type="text" name="cust_name" placeholder="Your Full Name" 
                                                    value="<?=$nm ?>"  required>
                                            </div>
                                            <div class="col-md-3">                                        
                                                    <input class="account__login--input" type="text" minlength="10" maxlength="10"  onkeyup="this.value = this.value.replace(/[^0-9]/g, '');"  name="cust_phone" placeholder="Phone Number" value="<?=$cust_info->phone ?>"   required> 
                                            </div>
                                            <div class="col-md-3">                                        
                                                    <input class="account__login--input" type="email" name="cust_email" placeholder="Email" value="<?=$cust_info->email ?>" required>
                                            </div>

                                    </div>



             
                                    <label for="description">
                                        <textarea class="account__login--input" name="description"  placeholder="Enter a brief description" required></textarea>
                                    </label>
                                   <hr style="border: 0; height: 2px; background: #000; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);">

                                    <div class="payment-option">
                                        <h3>Payment Option</h3>                                        
                                    </div>
                                    <div class="pay-at-garage">
                                        <label for="pay_at_garage">
                                            <input type="checkbox" checked name="payment_method" value="PAG" >
                                            Pay at Garage
                                        </label>
                                     </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <button type="submit" class="btn btn-danger btn-lg">Continue</button>
                                    </div>
                                </div>
                            </form>


                             









                            



 


                           <!-- ////////////////////////////// -->

                           




                             
                        </div>
                    </div>
                </div>
            </div>
        </section>












  


 


 


<?php    
    
    $this->load->view('front/inc/footer');
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