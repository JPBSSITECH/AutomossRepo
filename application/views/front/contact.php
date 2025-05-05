<?php
  include('inc/header.php');
?>

    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg"style="background-image: url('<?= base_url() ?>assets/img/carbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="<?= base_url()?>" style="color: white;">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span style="color: white;">Contact Us</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start contact section -->
        <section class="contact__section section--padding">
            <div class="container">
                <div class="contact__section--heading text-center mb-40">
                    <h2 class="contact__section--heading__maintitle">Get In Touch</h2>
                    <!-- <p class="contact__section--heading__desc">Beyond more stoic this along goodness this sed wow manatee mongos flusterd impressive man farcrud opened.</p> -->
                </div>
                <div class="main__contact--area position__relative">
                    <div class="contact__form">
                        <h3 class="contact__form--title mb-30">Contact Me</h3>
                        <form method="post"  >
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input1">First Name <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="firstname" id="   " placeholder="Your First Name" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input2">Last Name <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="lastname" id="" placeholder="Your Last Name" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input3">Phone Number <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="number" id="input3" onkeypress="return /[0-9]/i.test(event.key)" minlength="10" maxlength="10" placeholder="Phone number" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="input4">Email <span class="contact__form--label__star">*</span></label>
                                        <input class="contact__form--input" name="email" id="input4" placeholder="Email" type="email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__form--list mb-15">
                                        <label class="contact__form--label" for="input5">Write Your Message <span class="contact__form--label__star">*</span></label>
                                        <textarea class="contact__form--textarea" name="message" id="input5" placeholder="Write Your Message" required ></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="contact__form--btn primary__btn" type="submit"> <span>Submit Now</span></button>  
                        </form>
                    </div>
                    <div class="contact__info border-radius-5">
                     <div class="contact__info--items">
                        <h3 class="contact__info--content__title text-white mb-15">Contact Us</h3>
                        <div class="contact__info--items__inner d-flex">
                            <div class="contact__info--icon">
                                <!-- Font Awesome Phone Icon -->
                                <i class="fas fa-phone" style="font-size: 30px; color: currentColor;"></i>
                            </div>
                            <div class="contact__info--content">
                                <p class="contact__info--content__desc text-white"> 
                                    <a href="tel:<?=$common->phone ?>"><?=$common->phone ?></a>   
                                </p>
                               <!--  <p class="contact__info--content__desc text-white"> 
                                    <a href="tel:<?=$common->sec_phone ?>"><?=$common->sec_phone ?></a>   
                                </p> -->
                            </div>
                        </div>
                    </div>

                    <div class="contact__info--items">
                        <h3 class="contact__info--content__title text-white mb-15">Email Address</h3>
                        <div class="contact__info--items__inner d-flex">
                            <div class="contact__info--icon">
                                <!-- Font Awesome Email Icon -->
                                <i class="fas fa-envelope" style="font-size: 31px; color: currentColor;"></i>
                            </div>
                            <div class="contact__info--content">
                                <p class="contact__info--content__desc text-white">
                                    <a href="mailto:info@example.com"><?=$common->email ?></a>
                                </p> 
                            </div>
                        </div>
                    </div>

                    <div class="contact__info--items">
                        <h3 class="contact__info--content__title text-white mb-15">Office Location</h3>
                        <div class="contact__info--items__inner d-flex">
                            <div class="contact__info--icon">
                                <!-- Font Awesome Building Icon -->
                                <i class="fas fa-building" style="font-size: 31px; color: currentColor;"></i>
                            </div>
                            <div class="contact__info--content">
                                <p class="contact__info--content__desc text-white"> <?=$common->address ?>.</p> 
                            </div>
                        </div>
                    </div>

                        <div class="contact__info--items">
                            <h3 class="contact__info--content__title text-white mb-15">Follow Us</h3>
                            <ul class="contact__info--social d-flex">
                                <li class="contact__info--social__list">
                                    <a class="contact__info--social__icon" target="_blank" href="<?= $common->facebook ?>">
                                        <!-- Font Awesome Facebook Icon -->
                                        <i class="fab fa-facebook" style="font-size: 16px; color: currentColor;"></i>
                                        <span class="visually-hidden">Facebook</span>
                                    </a>

                                </li>
                                <li class="contact__info--social__list">
                                 <a class="contact__info--social__icon" target="_blank" href="<?= $common->twitter ?>">
                                    <!-- Font Awesome Twitter Icon -->
                                    <i class="fab fa-twitter" style="font-size: 16px; color: currentColor;"></i>
                                    <span class="visually-hidden">Twitter</span>
                                </a>

                                </li>
                                <li class="contact__info--social__list">
                                    <a class="contact__info--social__icon" target="_blank" href="<?= $common->instagram?>">
                                        <!-- Font Awesome Instagram Icon -->
                                        <i class="fab fa-instagram" style="font-size: 16px; color: currentColor;"></i>
                                        <span class="visually-hidden">Instagram</span>
                                    </a>

                                </li>
                                <li class="contact__info--social__list">
                                 <a class="contact__info--social__icon" target="_blank" href="<?= $common->youtube?>">
                                    <!-- Font Awesome YouTube Icon -->
                                    <i class="fab fa-youtube" style="font-size: 16px; color: currentColor;"></i>
                                    <span class="visually-hidden">YouTube</span>
                                </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End contact section -->
        





    </main>
  <?php
  include('inc/footer.php');
?>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


     
<script type="text/javascript">
<?php
  ///////////////////////////////////////////////////////////
  $err = $this->session->flashdata('error');
  if(!empty($err))
  {
        ?> 
        $(document).ready(function(){
          Swal.fire("Ohh!", "<?=$err ?>", "warning");
        });
        <?php
        unset($_SESSION['error']);
   }
  $scs = $this->session->flashdata('success');
  if(!empty($scs))
  {
     ?> 
        $(document).ready(function(){
             Swal.fire("Great!", "<?=$scs ?>", "success")
                .then((result) => {
                    if (result.isConfirmed) {
                         
                        window.location.href = "<?=base_url() ?>";  
                    }
                });
        });
    <?php
    unset($_SESSION['success']); 
  }
  ////////////////////////////////////////////////////////
  ?>
</script>