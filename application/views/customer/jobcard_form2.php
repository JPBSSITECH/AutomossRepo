 <?php

$this->load->view('customer/inc/headerv3');
?>
 <link href="<?= base_url() ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
 <script src="<?= base_url() ?>/slimcrop/slim/slim.kickstart.min.js"></script>


 <!-- ////////////////////////////// -->
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

.animated_btn {
    position: relative;
    overflow: hidden;
    padding: 10px 20px;
    font-size: 13px;
    text-transform: uppercase;
    border-radius: 5px;
    border: none;
    background-color: #dc3545;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.animated_btn2 {

    background-color: rgb(222, 222, 222);
    color: red;

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

    box-shadow: none;
    border-top: 5px solid red;
    border-bottom: 5px solid red;
}

.account__login--input {
    width: 100%;
    height: 50px;
    padding: 5px 15px;
    border-radius: 8px;
    font-size: 1.3rem;
    border: 1px solid var(--border-color);
}

.account__login--label {
    font-weight: 600;
    color: #2c2c2c;
    letter-spacing: 1px;
    font-size: 14px;
}

.sections__headings {
    margin-bottom: 0 !important;
    margin-top: 20px !important;
    border-left: 4px solid red;
    /* background: red; */
    border-radius: 10px;
    background: rgb(255, 0, 0);
    padding: 10px 10px 10px 0;
    background: rgb(0, 0, 0);
    background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(125, 0, 0, 1) 35%, rgba(255, 0, 0, 1) 100%);
    /* background: linear-gradient(90deg, rgba(255, 0, 0, 0.6560749299719888) 0%, rgba(213, 20, 20, 0.8521533613445378) 35%, rgba(0, 0, 0, 1) 100%); */
    color: white;
}

.mb-20 {
    margin-bottom: 1rem;
}

.mt-6 {
    margin-top: 2.5rem;
}

.recording_btn {
    padding: 10px 20px;
    font-size: 13px;
    color: white;
    background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(125, 0, 0, 1) 35%, rgba(255, 0, 0, 1) 100%);
    ;
}

.recording_btn.disabled,
.recording_btn:disabled {
    color: #fff;
    background-color: #ffc107;
    border-color: #ffc107;
}

/*animated button*/
 </style>

 <div class="row mb-5">
     <div class="sections__headings mb-30  d-flex justify-content-between align-items-center">
         <h2 class="mb-6 ps-3">Search for your service</h2>
         <a class="btn btn-danger btn-lg animated_btn animated_btn2" href="<?= base_url('customer/jobcard') ?>">
             <span>Back</span></a>
     </div>

 </div>
 <div class="row">
     <form method="post" style="padding:0;">
         <div class="account__login p-4 border-0" style="min-height: 300px;">
             <div class="account__login--inner">
                 <div class="row">


                     <div class="col-md-4">
                         <div class="contact__form--list mb-20">
                             <label class="account__login--label" for="job_heading"> Category <span
                                     class="contactform--label_star">*</span></label>
                             <select class="account__login--input" id="cat_id1" name="cat_id1" required>
                                 <option value="" disabled selected>Select category</option>

                             </select>
                         </div>
                     </div>

                     <div class="col-md-4">
                         <div class="contact__form--list mb-20">
                             <label class="account__login--label" for="job_heading">Sub Category </label>
                             <select class="account__login--input" id="cat_id2" name="cat_id2">
                                 <option value="" disabled selected>Select</option>

                             </select>
                         </div>
                     </div>


                     <div class="col-md-4">
                         <div class="contact__form--list mb-20">
                             <label class="account__login--label" for="job_heading">Sub Sub Category</label>
                             <select class="account__login--input" id="cat_id3" name="cat_id3">
                                 <option value="" disabled selected>Select</option>
                             </select>
                         </div>
                     </div>






                     <div class="col-md-4">
                         <label class="account__login--label" for="job_heading"> Car <span
                                 class="contactform--label_star">*</span></label>
                         <select class="account__login--input" name="car_manufacturer_id" id="manufacturer" required>
                             <option value="" disabled selected>Select Car</option>

                         </select>
                     </div>
                     <div class="col-md-4">
                         <label class="account__login--label" for="job_heading"> Model <span
                                 class="contactform--label_star">*</span></label>
                         <select class="account__login--input" name="car_model_id" id="model" required>
                             <option value="" disabled selected>Car Model</option>

                         </select>
                     </div>
                     <div class="col-md-4">
                         <label class="account__login--label" for="job_heading"> Fuel Type <span
                                 class="contactform--label_star">*</span></label>
                         <select class="account__login--input" name="car_fuel_type_id" required>
                             <option value="" disabled selected>Fuel Type</option>
                             <?php
foreach ($fuel_type as $cft) {
    $msl = '';
    if ($mydata->car_fuel_type_id == $cft->id) {
        $msl = 'selected';
    }
    echo '<option ' . $msl . ' value="' . $cft->id . '">' . $cft->name . '</option>';
}
?>
                         </select>
                     </div>



                     <div class="col-md-12">
                         <div class="contact__form--list mb-20">
                             <label class="account__login--label" for="job_heading"> Heading (What is this service
                                 About)
                                 <span class="contactform--label_star">*</span></label>
                             <input class="account__login--input" name="job_heading" required
                                 placeholder="Brief about the service you need" type="text">
                         </div>
                     </div>



















                     <div class="col-md-12">
                         <div class="contact__form--list mb-20">
                             <label class="account__login--label" for="job_info">Describe Your issue </label>
                             <!-- <input  type="text"> -->
                             <textarea class="account__login--input" style="height:120px;" name="job_info"
                                 placeholder="Explain all the issues need to be fixed in your car"></textarea>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="account__login--inner">
                 <div class="row">




                     <div class="col-md-3">
                         <div class="contact__form--list mb-20">
                             <label class="account__login--label" for="cust_address">Address*</label>
                             <input class="account__login--input" id="searchTextField" required name="cust_address"
                                 placeholder="Enter your address" type="text">
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="contact__form--list mb-20">
                             <label class="account__login--label" for="cust_lat">cust_lat</label>
                             <input class="account__login--input" onkeypress="return /[0-9.]/.test(event.key)"
                                 id="cityLat" name="cust_lat" placeholder="Enter cust_lat code" type="text">
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="contact__form--list mb-20">
                             <label class="account__login--label" for="cust_lon">cust_lon</label>
                             <input class="account__login--input" onkeypress="return /[0-9.]/.test(event.key)"
                                 id="cityLng" name="cust_lon" placeholder="Enter cust_lon code" type="text">
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="contact__form--list mb-20">
                             <label class="account__login--label" for="city_id">City</label>
                             <select class="account__login--input" id="city_id" name="city_id">
                                 <option value="" selected disabled>Select City</option>
                                 <?php
foreach ($city as $dd) {
    $dp = '';
    if (isset($mycity_id) && $mycity_id == $dd->id) {
        $dp = 'selected';
    }
    ?>
                                 <option <?= $dp ?> value="<?= $dd->id ?>"><?= $dd->name ?></option>
                                 <?php
}
?>
                             </select>
                         </div>
                     </div>

                 </div>
             </div>




             <div class="account__login--inner">


                 <div class="row">



                     <div class="col-md-6" style="float: left;">
                         <label class="account__login--label">Add Photo </label>

                         <div class="slim" style="width:160px; height:160px;" data-meta-user-id="1230" data-ratio="1:1"
                             data-size="840,840">

                             <?php
// $img_url = base_url('uploads/jobcard').$myinfo->thumb;
// if(@getimagesize($img_url))
// {
//      echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
// }
?>
                             <input class="account__login--input" type="file" name="thumb_img">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <label class="account__login--label">Add Another Photo </label>

                         <div class="slim" style="width:160px; height:160px;" data-meta-user-id="1230" data-ratio="1:1"
                             data-size="840,840">

                             <?php
// $img_url2 = base_url('uploads/jobcard').$myinfo->thumb2;
//  if(@getimagesize($img_url2))
//  {
//       echo '<img src="'.$img_url2.'" class="img-thumbnail" alt="avatar">';
//  }
?>
                             <input class="account__login--input" type="file" name="thumb_img2">
                         </div>
                     </div>


                     <div class="row mt-6">

                         <div class="col-md-4">

                             <label for="audioFile">Upload / Record Audio:</label>
                             <input type="file" class="account__login--input" name="audioFile" id="audioFile"
                                 accept="audio/*"><br><br>

                         </div>

                         <div class="col-md-4">
                             <label class="account__login--label" for="audioFile">Start Audio Recording:</label>
                             <button type="button" class="btn btn-warning recording_btn" id="startRecording">Start
                                 Recording</button>
                             <button type="button" class="btn btn-warning recording_btn" id="stopRecording"
                                 disabled>Stop Recording</button>

                         </div>
                         <div class="col-md-4">
                             <label class="account__login--label" for="audioFile">Play Audio Recording:</label>
                             <audio id="audioPlayback" controls></audio>
                             <input type="hidden" name="recordedAudio" id="recordedAudio">


                         </div>

                     </div>


                     <div class="row mt-6">
                         <div class="col-md-4">


                             <label class="account__login--label" for="audioFile">Upload / Record Video:</label>
                             <input class="account__login--input" type="file" name="videoFile" id="videoFile" accept="video/*">
                             <style type="text/css">
                             #videoPreview {
                                 display: none;
                             }

                             /* #videoPlayback {
                                 display: none;
                             } */
                             </style>
                         </div>
                         <div class="col-md-4">
                             <video id="videoPreview" style="width:80%;" autoplay muted></video><br>
                             <button type="button" class="btn recording_btn" id="startVideoRecording">Start Video Recording</button>
                             <button type="button" class="btn recording_btn" id="stopVideoRecording" style="margin-top:10px;" disabled>Stop Video Recording</button>
                             <!-- <video id="videoPlayback" style="width:80%;" controls></video> -->
                             <input type="hidden" name="recordedVideo" id="recordedVideo">

                         </div>
                         <div class="col-md-4">
                             <label class="account__login--label" for="audioFile">Play Video Recording:</label>

                             <video id="videoPlayback" style="width:80%;" controls></video>

                         </div>






                     </div>
                 </div>



             </div>

             <div class="text-center mt-6">
                 <button type="submit" class="btn btn-danger btn-lg animated_btn">Submit Now</button>

             </div>
         </div>
 </div>
 </div>




 </form>

 </div>































 <script type="text/javascript">
var feature = 'd_drop';
var cat_feature = 'cat_drop';
var d_cat_id = '<?= (isset($_GET['sc'])) ? spl_decode($_GET['sc']) : '' ?>';

var d_drop_id = <?= isset($mydata->car_manufacturer_id) ? (int)$mydata->car_manufacturer_id : 0 ?>;
var scnd_drop_id = <?= isset($mydata->car_model_id) ? (int)$mydata->car_model_id : 0 ?>;
 </script>


<!-- 
 <script type="text/javascript">
var feature = 'd_drop';
var cat_feature = 'cat_drop';
var d_cat_id = '<?= (isset($_GET['sc'])) ? spl_decode($_GET['sc']) : '' ?>';

var d_drop_id = <?= $mydata->car_manufacturer_id ?>;
var scnd_drop_id = <?= $mydata->car_model_id ?>;
 </script> -->

 <?php
$this->load->view('customer/inc/footerv3');
?>


 <script>
let mediaRecorder;
let audioChunks = [];
const startBtn = document.getElementById('startRecording');
const stopBtn = document.getElementById('stopRecording');
const audioPlayback = document.getElementById('audioPlayback');
const recordedAudioInput = document.getElementById('recordedAudio');

startBtn.addEventListener('click', async () => {
    const stream = await navigator.mediaDevices.getUserMedia({
        audio: true
    });
    mediaRecorder = new MediaRecorder(stream);

    mediaRecorder.ondataavailable = (e) => {
        audioChunks.push(e.data);
    };

    mediaRecorder.onstop = () => {
        const audioBlob = new Blob(audioChunks, {
            type: 'audio/webm'
        });
        const audioUrl = URL.createObjectURL(audioBlob);
        audioPlayback.src = audioUrl;

        // Convert audioBlob to base64 and save it in a hidden input
        const reader = new FileReader();
        reader.onloadend = () => {
            recordedAudioInput.value = reader.result.split(',')[1]; // Base64 string
        };
        reader.readAsDataURL(audioBlob);

        audioChunks = [];
    };

    mediaRecorder.start();
    startBtn.disabled = true;
    stopBtn.disabled = false;
});

stopBtn.addEventListener('click', () => {
    mediaRecorder.stop();
    startBtn.disabled = false;
    stopBtn.disabled = true;
});






// Video Recorder
let videoRecorder;
let videoChunks = [];
const videoPreview = document.getElementById('videoPreview');
const startVideoBtn = document.getElementById('startVideoRecording');
const stopVideoBtn = document.getElementById('stopVideoRecording');
const videoPlayback = document.getElementById('videoPlayback');
const recordedVideoInput = document.getElementById('recordedVideo');

startVideoBtn.addEventListener('click', async () => {
    $('#videoPlayback').hide();
    $('#videoPreview').show();
    const stream = await navigator.mediaDevices.getUserMedia({
        video: true,
        audio: true
    });

    videoPreview.srcObject = stream;
    videoPreview.play();

    videoRecorder = new MediaRecorder(stream);

    videoRecorder.ondataavailable = (e) => {
        videoChunks.push(e.data);
    };

    videoRecorder.onstop = () => {
        $('#videoPreview').hide();
        $('#videoPlayback').show();
        const videoBlob = new Blob(videoChunks, {
            type: 'video/webm'
        });
        const videoUrl = URL.createObjectURL(videoBlob);
        videoPlayback.src = videoUrl;

        // Convert videoBlob to base64 and save it in a hidden input
        const reader = new FileReader();
        reader.onloadend = () => {
            recordedVideoInput.value = reader.result.split(',')[1]; // Base64 string
        };
        reader.readAsDataURL(videoBlob);

        videoChunks = [];
        videoPreview.srcObject.getTracks().forEach(track => track.stop()); // Stop camera
    };

    videoRecorder.start();
    startVideoBtn.disabled = true;
    stopVideoBtn.disabled = false;
});

stopVideoBtn.addEventListener('click', () => {
    videoRecorder.stop();
    startVideoBtn.disabled = false;
    stopVideoBtn.disabled = true;
});
 </script>







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


 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?= g_map_api ?>&libraries=places">
 </script>

 <script type="text/javascript">
function initialize() {
    var input = document.getElementById('searchTextField');
    var autocomplete = new google.maps.places.Autocomplete(input);
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
        var place = autocomplete.getPlace();
        ////document.getElementById('city2').value = place.name;
        document.getElementById('cityLat').value = place.geometry.location.lat();
        document.getElementById('cityLng').value = place.geometry.location.lng();
        /*alert("This function is working!");
        alert(place.name);
        alert(place.address_components[0].long_name);*/

    });
}
google.maps.event.addDomListener(window, 'load', initialize);
 </script>


 <script>
// JSON data with 3 levels of categories
const data = <?= json_encode($catz) ?>;

// Function to populate the dropdown
function populateDropdown(jsonData, dropdownElement) {
    jsonData.forEach(category => {
        // Add category as an option group
        ////console.log('------------------->',category)
        const categoryOption = document.createElement("option");
        categoryOption.textContent = category.name;
        categoryOption.value = category.id;
        dropdownElement.appendChild(categoryOption);

        // Add subcategories
        if (category.child) {
            category.child.forEach(subcategory => {
                const subcategoryOption = document.createElement("option");
                subcategoryOption.textContent = ` --- ${subcategory.name}`;
                subcategoryOption.value = subcategory.id;
                dropdownElement.appendChild(subcategoryOption);

                // Add sub-subcategories
                if (subcategory.child) {
                    subcategory.child.forEach(subSubcategory => {
                        const subSubcategoryOption = document.createElement("option");
                        subSubcategoryOption.textContent = `  ------  ${subSubcategory.name}`;
                        subSubcategoryOption.value = subSubcategory.id;
                        dropdownElement.appendChild(subSubcategoryOption);
                    });
                }
            });
        }
    });
}

// Populate the dropdown with JSON data
const categoryDropdown = document.getElementById("cat_id");
populateDropdown(data, categoryDropdown);
 </script>