<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <!-- App favicon -->
       
        <script src="https://use.fontawesome.com/aa11bf52c3.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300;400;500&family=Exo:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">

        <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> -->


<style type="text/css">
    

    .submit{
        background-color: #5867dd;
         border-color: #5867dd;
    }
    .submit:hover{
        
        color: #fff;
        background-color: #384ad7;
        border-color: #384ad7;
    }
    
    body, h1, h2, h3, h4, h5, h6,  {
      font-family: Arial, Helvetica, sans-serif;
    }
    p{
        font-family: Arial, Helvetica, sans-serif;
    }

    @media screen and (max-width: 600px) {
      div.example {
        height: 350px;
      }
    }
    
</style>
    </head>

    <body class="auth-body-bg">







        
        <div>
            <div class="container-fluid p-0 vh-100"  >

                <div class="row g-0 vh-100">
            
                    <div class="col-xl-7 example" style=" background: url(<?=base_url('adminbg.png')?>); background-size: cover;background-repeat: no-repeat; ">
                        <div class="auth-full-bg pt-lg-5 p-4" >
                            <div class="w-100">
                                <div class="bg-overlay" ></div>
                                <div class="d-flex h-100 flex-column">
    
                                     <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <div class="text-center">
                                                    
                                                 
                                                    <div dir="ltr">
                                                         <div >
                                                            <div class="item">
                                                                <div class="py-3">
                                                                  
                                                                    <div>
                                                                       
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
    
                                                            <div class="item">
                                                                <div class="py-3">
                                                                  
                                                                    <div>
                                                                       
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div> 
                    </div>
                    

                   
                    <div class="col-xl-5 vh-100" style=" background-color: #daf3fa; background-size: cover;background-repeat: no-repeat; padding-top: 50px; ">
                        <div class="auth-full-page-content p-md-5 p-4" style="background-color: #daf3fa;">
                            <div class="w-100 p-5" >

                                <div class="text-center">
                                    
                                    
                                        <h2 style="margin-top:100px; color: black;"><b>We have received your request to change password. Please check your inbox.</b></h2>

                                       <!--  <p></p> -->
                                       
                                   
<?php

       // print_result($_SESSION);


                  ///////////////////////////////////////////////////////////
                  $err = $this->session->flashdata('error');
                  if(!empty($err))
                  {
                      echo ' '.$err.' ';
                      unset($_SESSION['error']);
                   }
                  $scs = $this->session->flashdata('success');
                  if(!empty($scs))
                  {
                     echo ' '.$scs.'  '; 
                     unset($_SESSION['success']);                 
                  }
                  ////////////////////////////////////////////////////////
?> 
                                </div>

                                

                              

                                

                                
                            </div>
                        </div>
                    </div> 
                
                </div>
           
        </div>
        
    </div>

 


    <script type="text/javascript">
        
        function showpass() {
          var x = document.getElementById("mypass");
          if (x.type === "password") {
            x.type = "text";
            $('#akhi').attr( 'class','fa fa-eye-slash');
          } else {
            x.type = "password";
            $('#akhi').attr( 'class','fa fa-eye');
          }
        }
    </script>






