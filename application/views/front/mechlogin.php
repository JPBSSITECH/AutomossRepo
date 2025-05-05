<?php
  include('inc/header.php');
?>

<style type="text/css">
.hidden_div {
    display: none;
}



.custom-btn {
    width: 130px;
    height: 40px;
    color: #fff;
    border-radius: 5px;
    padding: 10px 25px;
    font-family: 'Lato', sans-serif;
    font-weight: 500;
    background: transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;

    box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
        7px 7px 20px 0px rgba(0, 0, 0, .1),
        4px 4px 5px 0px rgba(0, 0, 0, .1);
    outline: none;
}

.btn-12 {
    position: relative;
    right: 20px;
    bottom: 20px;
    border: none;
    box-shadow: none;
    width: 130px;
    height: 40px;
    line-height: 42px;
    -webkit-perspective: 230px;
    perspective: 230px;
}

.btn-12 span {
    background: rgb(0, 172, 238);
    background: linear-gradient(0deg, rgba(0, 172, 238, 1) 0%, rgba(2, 126, 251, 1) 100%);
    display: block;
    position: absolute;
    width: 130px;
    height: 40px;
    box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
        7px 7px 20px 0px rgba(0, 0, 0, .1),
        4px 4px 5px 0px rgba(0, 0, 0, .1);
    border-radius: 5px;
    margin: 0;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all .3s;
    transition: all .3s;
}

.btn-12 span:nth-child(1) {
    box-shadow:
        -7px -7px 20px 0px #fff9,
        -4px -4px 5px 0px #fff9,
        7px 7px 20px 0px #0002,
        4px 4px 5px 0px #0001;
    -webkit-transform: rotateX(90deg);
    -moz-transform: rotateX(90deg);
    transform: rotateX(90deg);
    -webkit-transform-origin: 50% 50% -20px;
    -moz-transform-origin: 50% 50% -20px;
    transform-origin: 50% 50% -20px;
}

.btn-12 span:nth-child(2) {
    -webkit-transform: rotateX(0deg);
    -moz-transform: rotateX(0deg);
    transform: rotateX(0deg);
    -webkit-transform-origin: 50% 50% -20px;
    -moz-transform-origin: 50% 50% -20px;
    transform-origin: 50% 50% -20px;
}

.btn-12:hover span:nth-child(1) {
    box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
        7px 7px 20px 0px rgba(0, 0, 0, .1),
        4px 4px 5px 0px rgba(0, 0, 0, .1);
    -webkit-transform: rotateX(0deg);
    -moz-transform: rotateX(0deg);
    transform: rotateX(0deg);
}

.btn-12:hover span:nth-child(2) {
    box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
        7px 7px 20px 0px rgba(0, 0, 0, .1),
        4px 4px 5px 0px rgba(0, 0, 0, .1);
    color: transparent;
    -webkit-transform: rotateX(-90deg);
    -moz-transform: rotateX(-90deg);
    transform: rotateX(-90deg);
}


.account__login--input {
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}
</style>

<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg"
        style="background-image: url('<?= base_url() ?>assets/img/carbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="<?= base_url() ?>"
                                    style="color: white;">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span style="color: white;">Account</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start login section  -->
    <div class="login__section section--padding">
        <div class="container">

            <div class="login__section--inner">
                <div class="row row-cols-md-2 row-cols-1 d-flex  ">



                    <div class="col"
                        style=" background-image: url(<?=base_url() ?>mech-bg.png?b=1); background-repeat:no-repeat; background-size: 80%;">

                    </div>
                    <div class="col">
                        <div class="account__login">
                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title mb-10">Continue as a Mechanic!</h2>
                            </div>



                            <?php
                                          ///////////////////////////////////////////////////////////
                                          $err = $this->session->flashdata('error');
                                          if(!empty($err))
                                          {
                                              echo '<strong class="text-danger"> ❌ Ops!! '.$err.'</strong>';
                                              unset($_SESSION['error']);
                                           }
                                          $scs = $this->session->flashdata('success');
                                          if(!empty($scs))
                                          {
                                              echo '<strong class="text-success"> ✅ '.$scs.'</strong>';
                                              unset($_SESSION['success']);
                                            
                                         
                                          }
                                          ////////////////////////////////////////////////////////
                                          ?>













                            <!--  <form method="post"> -->
                            <div class="account__login--inner">



                                <label>
                                    <input class="account__login--input" value="<?=@$_SESSION['mech_uname'] ?>"
                                        name="uname" id="uname" placeholder="Enter Your Email Addres" type="email"
                                        required>
                                </label>


                                <label id="otpholder" class="hidden_div">


                                    <div class="input-group">
                                        <input class="account__login--input form-control" id="otp" name="otp"
                                            placeholder="Enter Your OTP" type="password">
                                        <button type="button" onclick="showpass()" class="btn btn-secondary "
                                            style="height: 52px; width: 10%; outline: none; background: #6c757d; ">
                                            <i id="akhi" class="fa fa-eye"></i>
                                        </button>
                                    </div>
                                </label>

                                <button class="custom-btn btn-12" id="continue"
                                    onclick="sendotp()"><span>Click!</span><span>Continue</span></button>
                                <button class="custom-btn btn-12 hidden_div"
                                    id="verify"><span>Click!</span><span>Verify</span></button>






                                <!-- <button class="account__login--btn primary__btn" id="continue"
                                    onclick="sendotp()">Continue</button>
                                <button class="account__login--btn primary__btn hidden_div" id="verify">Verify</button> -->





                            </div>
                            <p class="account__login--signup__text mt-5 text-end">Are You a Customer? <button
                                    type="submit"><a href="<?= base_url()?>login">Login Here</a></button></p>


                            <!-- </form> -->
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
    <!-- End login section  -->
</main>






<?php
    include('inc/footer.php');
 ?>
<script type="text/javascript">
function showpass() {
    var x = document.getElementById("otp");
    if (x.type === "password") {
        x.type = "text";
        $('#akhi').attr('class', 'fa fa-eye-slash');
    } else {
        x.type = "password";
        $('#akhi').attr('class', 'fa fa-eye');
    }
}
</script>



<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script>
function sendotp() {
    ///console.log('kkkkkkkkkkkkk');

    const email = $("#uname").val();
    if (!email) {
        alert("Please enter your email address.");
        return;
    }


    const data = {
        uname: email
    };

    //console.log('kkkkkkkkkkkkk===1');


    // Make the POST API call
    $.ajax({
        url: "<?=api_link ?>auth/garagelogin_init",
        method: "POST",
        contentType: "application/json",
        data: JSON.stringify(data),
        success: function(response) {
            // console.log('-----jjjj-----');
            // console.log(response); 


            if (response.status == 1) {
                // Assuming the API responds successfully, toggle the visibility of elements

                $("#uname").prop("readonly", true);

                $("#otpholder").removeClass("hidden_div");
                $("#verify").removeClass("hidden_div");
                $("#continue").addClass("hidden_div");
            } else {
                alert("Error: " + response.message);
                console.error("Error:", response.message);
            }


        },
        error: function(xhr, status, error) {
            console.log('-----errrr-----');

            // Handle errors
            alert("Failed to send OTP. Please try again.");
            console.error("Error:", error);
        }
    });
}
</script>



<script>
document.getElementById("verify").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent default button behavior

    // Collect data from the form fields
    const uname = document.getElementById("uname").value;
    const otp = document.getElementById("otp").value;

    if (!uname || !otp) {
        alert("Please fill out all fields before submitting.");
        return;
    }

    var formData = new FormData();
    formData.append("uname", uname);
    formData.append("otp", otp);

    const form = document.createElement("form");
    form.method = "POST";

    // Append FormData entries as hidden inputs
    for (var [key, value] of formData.entries()) {
        const input = document.createElement("input");
        input.type = "hidden";
        input.name = key;
        input.value = value;
        form.appendChild(input);
    }

    // Append the form to the body and submit
    document.body.appendChild(form);
    form.submit();
});
</script>