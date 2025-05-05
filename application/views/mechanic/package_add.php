<?php    
    
    $this->load->view('mechanic/inc/headerv3');
?>

<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>


<style>
#map {
    height: 400px;
    width: 890px;
}

.form-check-input:checked {
    background-color: #ED1D24;
    border-color: #ED1D24;
}

.form-check-input {
    accent-color: #ED1D24;
}

.form-check-input:focus {
    outline: 2px solid #ED1D24;
    box-shadow: 0 0 4px #ED1D24;
}

.primary__btn {
    border-radius: 0.5rem !important;
}

.animated_btn {
    position: relative;
    overflow: hidden;
    padding: 2px 20px;
    font-size: 12px;
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
}

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

<div class="container">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-12 p-3 d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;
    border-radius: 10px;">

            <h2 class="pl_0 title_3d"><?=$heading ?></h2>

            <a href="<?=base_url('mechanic/package_list') ?>" class="contact__form--btn animated_btn" type="submit">
                <span>back</span></a>


        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">

            <form method="post">
                <div class="card-body" style="flex-direction: column;">
                    <div class="row map pt-0 mt-0">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="city_id">Services (master)</label>
                                        <select class="contact__form--input" id="package" name="master_id">
                                            <option value="" selected disabled>Select </option>
                                            <?php foreach ($allpack as $dd) { ?>
                                            <option value="<?= $dd->id ?>"><?= $dd->name ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="fname">Price <span
                                                class="contact__form--label__star"></span></label>
                                        <input class="contact__form--input" name="mrp_price" placeholder="Enter Price"
                                            type="number">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="mname">Offer Price</label>
                                        <input class="contact__form--input" name="offer_price"
                                            placeholder="Enter Offer price" type="number">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="mname">Service Duration</label>
                                    <input class="contact__form--input" name="service_duration"
                                        placeholder="Service Duration in Hour" type="number">
                                </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="card shadow-lg p-3" style="height: 200px; overflow-y: auto;"
                                id="package-details">
                                <h3 class="">Select a package to see details here...</h3>
                            </div>
                        </div>
                        <div class="row mt-4">


                           
                            <div class="col-md-12">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="message">Info</label>
                                    <textarea class="contact__form--input" name="offer_text"
                                        placeholder="Enter your message" rows="4" style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_homeservice"
                                        checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Home Service
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="contact__form--btn animated_btn" type="submit">
                                <span>Submit</span></button>
                        </div>




                    </div>













                </div>
        </div>
    </div>
    </form>


</div>















<?php    
    
    $this->load->view('mechanic/inc/footerv3');
?>


<script>
$(document).ready(function() {
    $('#package').on('change', function() {
        let packageId = $(this).val(); // Get selected package ID

        if (packageId) {
            $.ajax({
                url: '<?= base_url("mechanic/get_package_details") ?>',
                type: 'POST',
                data: {
                    package_id: packageId
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        // Populate the package details in the card
                        let details = `
                                <h2 class="text-danger mb-3">Package Details</h2>
                                <h2><strong>Package Name:</strong> ${response.data.name}</p>
                                <p><strong>Info:</strong> ${response.data.info}</p>
                            `;
                        $('#package-details').html(details);
                    } else {
                        $('#package-details').html(
                            '<p>No details found for the selected package.</p>');
                    }
                },
                error: function() {
                    $('#package-details').html(
                        '<p>Error fetching package details. Please try again later.</p>'
                    );
                }
            });
        } else {
            $('#package-details').html('<p>Select a package to see details here...</p>');
        }
    });
});
</script>