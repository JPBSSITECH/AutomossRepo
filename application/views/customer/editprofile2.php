<?php    
    
    $this->load->view('customer/inc/headerv3');
?>

<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>

<style>
/* Style for the title */
.sections__headings--maintitle {
    position: relative;
    font-size: 2.5rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    /* text-shadow: 0px 4px 3px rgba(0, 0, 0, 0.4), 0px 8px 13px rgba(0, 0, 0, 0.1), 0px 18px 23px rgba(0, 0, 0, 0.1); */
    display: inline-block;
    opacity: 0;
    animation: fadeIn 1s ease-out forwards;

    font-size: 22px !important;
    text-transform: uppercase !important;
    text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4), 0px 7px 10px rgba(0, 0, 0, 0.1), 0px 8px 12px rgba(0, 0, 0, 0.1);

}



.pl_0 {
    padding-left: 0 !important;
}

.border_bottom_0 {
    border-bottom: 0 !important;
}

.sections__headings--maintitle::after {
    content: "";
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 3px;
    background-color: rgb(255 0 0);
    transition: width 0.3s ease-in-out;
    width: 5%;

}


.sections__headings--maintitle:hover::after {
    width: 100%;
}


@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(-30px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
<style>
.animated_btn {
    position: relative;
    overflow: hidden;
    padding: 10px 20px;
    font-size: 18px;
    text-transform: uppercase;
    border-radius: 5px;
    border: none;
    background-color: #dc3545;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Wave Animation */
.animated_btn::before {
    content: '';
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.6);

    transform: scale(0);
    animation: wave 3s infinite;

    pointer-events: none;

    top: 50%;
    left: 50%;
    width: 100px;

    height: 100px;


}


@keyframes wave {
    0% {
        transform: scale(0);
        opacity: 1;
    }

    50% {
        transform: scale(2);

        opacity: 0.3;

    }

    100% {
        transform: scale(4);

        opacity: 0;

    }
}

.account__login {
    border-radius: 8px;

    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    border-top: 5px solid red;
    border-bottom: 5px solid red;
}

.contact__form--input {
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}

.contact__form--label {
    font-weight: 600;
    color: #2c2c2c;
    letter-spacing: 1px;
    font-size: 14px;
}

/*animated button*/
</style>
<style>
.contact__form--input {
    width: 100%;
    height: 50px;
    padding: 5px 15px;
    border-radius: 8px;
    font-size: 1.3rem;
    border: 1px solid var(--border-color);
}

.profile_photo {

    width: 150px;
    height: 150px;

}

.profile_photo img {
    border-radius: 50%;
    height: 100%;
    width: 100%;
}

.profile_photo_section {
    display: flex;
    justify-content: center;
    margin-bottom: 40px;
    flex-direction: column;
    align-items: center;
}

.Profile_name span {
    text-transform: capitalize;
    font-weight: 600;
    color: #ff0000;
    margin-top: 10px;
    padding: 10px;
    background: #cecece91;
    border-radius: 8px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
</style>
<style>
.title_3d {
    text-shadow: 0 13.36px 8.896px #482c2c, 0 -2px 1px #ffffff;
    text-transform: uppercase;

    color: #6b4040;
}

.profile_form input,
select {
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}

.profile_form label {
    font-weight: 600;
}

.mb-6 {
    margin-bottom: 30px !important;
    margin-top: 20px !important;
    border-left: 4px solid red;
    /* background: red; */
    border-radius: 10px;
    background: rgb(255, 0, 0);
    padding: 10px 0;
    background: rgb(0, 0, 0);
    background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(125, 0, 0, 1) 35%, rgba(255, 0, 0, 1) 100%);
    /* background: linear-gradient(90deg, rgba(255, 0, 0, 0.6560749299719888) 0%, rgba(213, 20, 20, 0.8521533613445378) 35%, rgba(0, 0, 0, 1) 100%); */
    color: white;
}
</style>



<div class="row mb-5">
    <div class="col-12 p-3 text-center">
        <h2 class="sections__headings--maintitle pl_0 ">Edit Your Profile</h2>
        <!-- <a class="wishlist__cart--btn primary__btn" href="<?=base_url('customer/jobcard_add2') ?>">Add</a> -->
    </div>
</div>

<!-- ////////////////////////////// -->

<form method="post">
    <div class="account__login--inner">

        <div class="sections__headings mb-30">
            <h2 class="mb-6 ps-3" style="border-left: 4px solid red;">Personal Information</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="contact__form--list mb-20">
                    <label class="contact_form--label" for="fname">First Name <span
                            class="contactform--label_star">*</span></label>
                    <input class="contact__form--input" name="fname" value="<?=$info->fname ?>"
                        placeholder="Enter your first name" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact__form--list mb-20">
                    <label class="contact__form--label" for="mname">Middle Name</label>
                    <input class="contact__form--input" name="mname" value="<?=$info->mname ?>"
                        placeholder="Enter your middle name" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact__form--list mb-20">
                    <label class="contact__form--label" for="lname">Last Name</label>
                    <input class="contact__form--input" name="lname" value="<?=$info->lname ?>"
                        placeholder="Enter your last name" type="text">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact__form--list mb-20">
                    <label class="contact_form--label" for="email">Email <span
                            class="contactform--label_star">*</span></label>
                    <input class="contact__form--input" name="email" value="<?=$info->email ?>"
                        placeholder="Enter your email" type="email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact__form--list mb-20">
                    <label class="contact__form--label" for="phone">Phone</label>
                    <input class="contact__form--input" name="phone" value="<?=$info->phone ?>"
                        placeholder="Enter your phone number" type="text">
                </div>
            </div>
        </div>
        <div class="sections__headings mb-30">
            <h2 class="mb-6 ps-3" style="border-left: 4px solid red;">Address Information:</h2>
        </div>
        <div class="contact__form--inner">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="address">Address</label>
                        <input class="contact__form--input" id="address" name="address" value="<?=$info->address ?>"
                            placeholder="Enter your address" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="zip">ZIP Code*</label>
                        <input class="contact__form--input" id="zip" name="zip" value="<?=$info->zip ?>" required
                            placeholder="Enter ZIP code" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact__form--list mb-20">
                        <label class="contact__form--label" for="city_id">City</label>
                        <select class="contact__form--input" id="city_id" required name="city_id">
                            <option value="" selected disabled>Select City</option>
                            <?php
                                                 foreach ($city as $dd) {
                                                    $sel ='';
                                                    if(isset($info->city_id) && $info->city_id ==  $dd->id ){
                                                        $sel ='selected';
                                                    }
                                                ?>
                            <option <?=$sel ?> value="<?= $dd->id ?>"><?= $dd->name ?></option>
                            <?php
                                                 }
                                                ?>
                        </select>
                    </div>
                </div>

            </div>
        </div>
        <div class="form-group ">
            <div class="col-md-12 mb-4" style="float: left;">
                <label>Thumbnail (600X600)</label>

                <div class="slim" style="width:150px; height:150px;" data-meta-user-id="1230" data-ratio="1:1"
                    data-size="600,600">

                    <?php
                                                 $img_url = @$info->thumb;
                                                 if(isset($img_url) && $img_url!=""){
                                                  if(@getimagesize($img_url))
                                                  {                                                                                      
                                                       echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
                                                  }                                                      
                                                  }                                                      
                                                 ?>
                    <input type="file" name="thumb_img">
                </div>
            </div>
        </div>




        <div class="text-center mt-4 pb-4">
            <button class="btn btn-danger btn-lg animated_btn" style="font-size: 18px;padding: 5px 30px;" type="submit">
                <span>Update Profile</span></button>
        </div>
    </div>
</form>



















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