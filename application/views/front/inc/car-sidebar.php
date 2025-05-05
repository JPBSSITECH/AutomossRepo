<style>
    .form-control-range {
        -webkit-appearance: none;
        appearance: none;
        width: 100%;
        height: 8px;
        background: #e1c7c7;
        border-radius: 5px;
        outline: none;
        transition: background 0.3s ease;
    }

    .form-control-range::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 16px;
        height: 16px;
        background: #ED1D24;
        border-radius: 50%;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .form-control-range::-moz-range-thumb {
        width: 16px;
        height: 16px;
        background: #007bff;
        border-radius: 50%;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .form-control-range:active::-webkit-slider-thumb {
        background: #ED1D24;
    }

    .form-control-range:active::-moz-range-thumb {
        background: #ED1D24;
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
</style>

<div class="col-md-3">
<div class="group-form py-4 box_shodow border_top" style="border: 1px solid #ccc; padding: 20px;">
             
         <div class="group-form mt-4 py-4">
                    <h2 class="widget__title h3" >Price Range</h2>
                    <!-- <input type="range" id="price-range" class="form-control-range" min="0" max="5000" step="50" value="0" oninput="updatePriceValue(this.value)">
                    <div class="d-flex justify-content-between">
                        <span id="min-price">0</span>
                        <span id="max-price">5000</span>
                    </div>
                    <div class="mt-2">
                        <p>Selected Price: <span id="selected-price">0</span></p>
                    </div> -->

 
 

                    <div class="range-slider">
                        <div class="slider-track"></div>
                        <div class="slider-range" id="sliderRange"></div>
                        <input type="range" id="minRange" min="0" max="1000000" step="10000" value="0" oninput="updateSlider()">
                        <input type="range" id="maxRange" min="0" max="1000000" step="10000" value="1000000" oninput="updateSlider()">
                    </div>
                    <p>Range: ₹<span id="minValue">0</span> - ₹<span id="maxValue">25,000</span></p>



                </div>
       
    </div>

    
    <div class="group-form py-4 mt-4 box_shodow border_top" style="border: 1px solid #ccc; padding: 20px;">
        <!-- Collapsible Content -->
        <div id="collapsibleChecks2" class="checks mt-4" style="display: block;">
             
           <!-- <h4>Car Brands</h4> -->
             
             <?php
                foreach ($car_man as $dd) {
             ?>
             
             
             <div class="form-check animated_form_check">
              <input class="form-check-input animated_checkbox" type="checkbox" value="<?=$dd->id ?>" name="car[]" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                <?=$dd->name ?>
              </label>
            </div>
             
              <?php
                }
             ?>
             
            
        </div>

    </div>

     
</div>