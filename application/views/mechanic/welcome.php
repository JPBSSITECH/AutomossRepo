<?php    
    
    $this->load->view('mechanic/inc/headerv3');
?>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
.body {
    background: linear-gradient(to right,
            white 0%,
            white 50%,
            black 0%,
            black 50%);
    height: 100vh;
}

.welcome {
    color: white;
    white-space: nowrap;
    font-size: 6rem;
    line-height: 6rem !important;
    position: absolute;
    top: 50%;
    left: 59%;
    transform: translate(-50%, -50%);
}

.welcome::before {
    content: attr(data-heading);
    position: absolute;
    left: 0;
    color: black;
    width: 50%;
    overflow: hidden;
}

.welcome_description p:first-of-type {
    position: absolute;
    top: 63%;
    left: 45%;
    transform: translate(-50%, -50%);
}

.welcome_description p:last-of-type {
    position: absolute;
    top: 63%;
    left: 75%;
    transform: translate(-50%, -50%);
    color: white;
    font-weight: 200;
}

.welcome_description p {
    margin-bottom: 5px;
    font-weight: 600;
}

.welcome_para {
    position: absolute;
    top: 63%;
    left: 45%;
    transform: translate(-50%, -50%);
}
</style>

<div class="container body">
    <div class="row">
        <div class="col-md-12">




            <h2 class="welcome" data-heading="Welcome to Automoss">Welcome to Automoss</h2>
            <?php  
                  if($myinfo->is_approved==0){
                ?>

            <div class="welcome_description">
                <p>Your profile is under review.</p>

                <p>You can access to the panel post approval.</p>

                <?php  
                  }else{
                    echo '<p class="welcome_para">Your profile is approved.</p>';
                  }
                ?>





            </div>


        </div>
    </div>
</div>




<?php    
    
    $this->load->view('mechanic/inc/footerv3');
?>