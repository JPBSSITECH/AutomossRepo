// var base_url = "https://automoss.in/";

var nodata = `

            <div class="container mt-5 d-flex justify-content-center">
                  <div class="card" style="width: 80%; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    <div class="row g-0">
                      <!-- Image Section -->
                      <div class="col-md-4 d-flex align-items-center justify-content-center bg-light">
                        <img 
                          src="https://automoss.in/nopic.png" 
                          alt="No Data Found" 
                          class="img-fluid rounded-circle p-3" 
                          style="max-width: 100px; height: 100px;">
                      </div>
                      <!-- Text Section -->
                      <div class="col-md-8">
                        <div class="card-body">
                          <h3 class="card-title text-muted">No Data Found</h3>
                          <p>Try looking into some other parameters</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>




 `;

//let incart = JSON.parse(localStorage.getItem("incart")) || [];

//////////////////CITY MODAL POPUP:-----------------
function cityopenModal() {
  load_city();
  $("#citymodal").modal("show");
}
function load_city(offset = "", init_num = 0) {
  var uur = base_url + "getinfo/city";

  $.get(uur, function (data) {
    console.log(data);
    if (data.status === 0) {
      $("#city-grid").html("No data found...");
    } else {
      //looper(data.data, 'box_holdr', init_num);
      var mm = ``;
      data.data.map(function (ct) {
        mm +=
          `
                        <a href="` +
          ct.ctlink +
          `" class="city-item">
                            <img src="` +
          base_url +
          `assets/img/city_logo.png" alt="Delhi" class="city-icon">
                            <span class="city-name">` +
          ct.name +
          `</span>
                        </a>


                    `;
      });

      $("#city-grid").html(mm);
    }
  });
}

//////////////////CITY MODAL POPUP:-----------------

function debounce(func, delay) {
  let timer;
  return function (...args) {
    clearTimeout(timer);
    timer = setTimeout(() => func.apply(this, args), delay);
  };
}

$(document).ready(function () {
  if (typeof page_nm !== "undefined" && page_nm === "home") {
    load_data();
  }

  if (typeof page_nm !== "undefined" && page_nm === "servicedetails") {
    load_servicedata();

    $("input[name='categories[]']").on("change", function () {
      load_servicedata();
    });
  }

  if (typeof page_nm !== "undefined" && page_nm === "carlist") {
    load_car_data();

    $("input[name='car[]']").on("change", function () {
      load_car_data();
    });
  }

  if (typeof page_nm !== "undefined" && page_nm === "spareparts") {
    load_spareparts_data();

    $("input[name='categories[]']").on("change", function () {
      load_spareparts_data();
    });
  }

  if (typeof feature !== "undefined" && feature === "d_drop") {
    d_drop();
  }
  if (typeof cat_feature !== "undefined" && cat_feature === "cat_drop") {
    cat_drop();
  }
});

function load_spareparts_data() {
  var car_url = base_url + "getinfo/sparepart?g=1";

  var selectedCategories = [];
  $("input[name='categories[]']:checked").each(function () {
    selectedCategories.push($(this).val());
  });
  var categoriesQuery =
    selectedCategories.length > 0
      ? "&catz=" + selectedCategories.join(",")
      : "";
  car_url += categoriesQuery;

  var minValue = $("#minRange").val();
  car_url += "&min=" + minValue;

  var maxValue = $("#maxRange").val();
  car_url += "&max=" + maxValue;

  // minValue.textContent = minRange.value;
  //   maxValue.textContent = maxRange.value;

  console.log("--->HH Request URL:", car_url);

  // AJAX Call
  $("#productlist").html("Loading data...");

  var productQtyInCart = {};

  $.get(base_url + "get_product_quantity_incart", function (data) {
    try {
      let response = JSON.parse(data); // Ensure proper JSON parsing
      if (response.status === "success") {
        productQtyInCart = response.cart_quantities;
      } else {
        console.error("Error:", response.message);
      }
    } catch (error) {
      console.error("JSON Parse Error:", error);
    }

    // Now fetch car data AFTER the cart quantity is retrieved
    $.get(car_url, function (data) {
      console.log("------Data Fetched------", data);

      if (data.status === 0) {
        $("#productlist").html("No data found...");
      } else {
        spare_looper(data.data, "productlist", productQtyInCart);
      }
    });
  });
}

/*function spare_looper(cars, containerId) {
    var m = '';
    $.each(cars, function (k, v) {
        m += `
            <div class="col-md-4">
                <div class="card animated_card overflow-hidden border-0 shadow mb-4" style="width:100%;">
          
                    <div class="first">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="wishlist"><i class="fa fa-heart-o"></i></span>
                        </div>
                    </div>

                    <div class="last">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="wishlist" style="background: yellow;"><i class="fa fa-share-alt"></i></span>
                        </div>
                    </div>

                    <a href="${base_url}product_details/${v.spl_encode}">
                        <img src="`+ v.thumb + `" class="card-img-top animated_img" alt="Product Image" onerror="this.onerror=null; this.src='https://automoss.in/noprod.png';">
                    </a>
                    <div class="card-body bg-dark text-white card_body">
                        <h5 class="card-title fw-bold text-center">
                            `+ v.garage_name + `
                        </h5>
                          
                        <p class="card-text text-center">`+ v.name + ` ` + v.is + ` | ` + (incart.includes(v.id) ? "<i style='color:#f00;' class='fa fa-shopping-cart'></i>" : "") + `</p>
                        <p class="card-text">
                            <span class="text-dark text-white">
                                <strong class="price-badge">₹`+ v.offer_price + `</strong>
                            </span>
                            <span class="text-muted text-decoration-line-through">₹`+ v.mrp_price + `</span>
                        </p>
 
                        <div class="d-flex"> 
                            <a  href="`+ base_url + `product_details/` + v.spl_encode + `" style="font-size:1rem; padding: 2px 12px; font-size: 12px; margin-right:10px; " class="product__card--btn primary__btn">View Details</a>
                            <a style="font-size:1rem" href="`+ base_url + `addcart/` + v.spl_encode + `" class="product__card--btn primary__btn">Add` + (incart.includes(v.id) ? "ed" : "") + ` to Cart</a>
                        </div>
                            
                    </div>
                </div>
            </div>
        `;
    });
    $(`#${containerId}`).html(m);
}*/

function spare_looper(cars, containerId, productQtyInCart) {
  console.log("------Item Quantity in Cart------", productQtyInCart);
  var m = "";
  $.each(cars, function (k, v) {
    let quantity = productQtyInCart[v.id] || 1; // Get quantity or default to 1
    m += `
            <div class="col-md-4">
                <div class="card animated_card overflow-hidden border-0 shadow mb-4" style="width:100%;">
                    
                    <div class="first">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="wishlist"><i class="fa fa-heart-o"></i></span>
                        </div>
                    </div>

                    <div class="last">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="wishlist" style="background: yellow;"><i class="fa fa-share-alt"></i></span>
                        </div>
                    </div>

                    <a href="${base_url}product_details/${v.spl_encode}">
                        <img src="${
                          v.thumb
                        }" class="card-img-top animated_img" alt="Product Image" 
                            onerror="this.onerror=null; this.src='https://automoss.in/noprod.png';">
                    </a>
                    
                    <div class="card-body bg-dark text-white card_body">
                        <h5 class="card-title fw-bold text-center">${
                          v.garage_name
                        }</h5>
                          
                        <p class="card-text text-center">
                            ${v.name} ${v.is} | 
                            ${
                              incart.includes(v.id)
                                ? '<i class="fa fa-shopping-cart cart-icon"></i>'
                                : ""
                            }
                        </p>

                        <p class="card-text">
                            <span class="text-dark text-white">
                                <strong class="price-badge">₹${
                                  v.offer_price
                                }</strong>
                            </span>
                            <span class="text-muted text-decoration-line-through">₹${
                              v.mrp_price
                            }</span>
                        </p>
 
                        <div class="button_group text-center" data-id="${v.id}">
                            ${
                              incart.includes(v.id)
                                ? `
                                <div class="quantity-controls">
                                    <button class="btn btn-light px-3 rounded-pill" onclick="updateCart('${v.spl_encode}', 'decrease', '')">-</button>
                                    <span class="cart-quantity span_font" data-id="${v.id}">${quantity}</span>
                                    <button class="btn btn-light px-3 rounded-pill" onclick="updateCart('${v.spl_encode}', 'increase', '')">+</button>
                                </div>`
                                : `
                                <a href="javascript:void(0);" class="btn btn-light px-3 rounded-pill" onclick="updateCart('${v.spl_encode}', 'increase', 'addtocart')">Add To Cart</a>
                            `
                            }
                          

                            <a href="${base_url}cart" class="btn btn-light px-3 rounded-pill">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        `;
  });
  //<a href="${base_url}addcart/${v.spl_encode}" class="btn btn-light px-3 rounded-pill">Add To Cart</a>
  // Append to container
  $("#" + containerId).html(m);
}

//update cart

/*function updateCart(itemId, action) {
    $.ajax({
        url: base_url + "addcart/" + itemId + "/" + (action === "decrease" ? "m" : ""),
        type: "GET",
        dataType: "json",
        success: function (response) {
            console.log("Cart updated:", response);
            let butnControl = `<div class="quantity-controls">
                                <button class="btn btn-light px-3 rounded-pill" onclick="updateCart('${itemId}', 'decrease')">-</button>
                                <span class="cart-quantity span_font" data-id="${itemId}">1</span>
                                <button class="btn btn-light px-3 rounded-pill" onclick="updateCart('${itemId}', 'increase')">+</button>
                            </div>
                            <a href="${base_url}addcart/${itemId}" class="btn btn-light px-3 rounded-pill">Buy Now</a>
                            `; console.log(butnControl);

            if (response.status === "success") {
                // Update UI dynamically based on the new cart count from the response
                $(`.cart-count`).text(response.cart_count);
                let cartQuantityElement = $(`.cart-quantity[data-id="${response.item_id}"]`);

                if (action === "increase") {
                    cartQuantityElement.text(parseInt(cartQuantityElement.text()) + 1);
                    $(this).closest('.button_group').innerHTML(butnControl);
                    
                } else {
                    let newQty = parseInt(cartQuantityElement.text()) - 1;
                    if (newQty > 0) {
                        cartQuantityElement.text(newQty);
                    } else {
                        // Remove item UI if quantity reaches 0
                        cartQuantityElement.closest(".quantity-controls").replaceWith(`
                            <a href="${base_url}addcart/${itemId}" class="btn btn-light px-3 rounded-pill" onclick="updateCart('${itemId}', 'increase'); return false;">Add To Cart</a>
                        `);
                    }
                }
            } else {
                alert(response.message);
            }
        },
        error: function () {
            alert("Error updating cart. Please try again.");
        }
    });
}*/

function updateCart(itemId, action, btnText) {
  $.ajax({
    url:
      base_url + "addcart/" + itemId + "/" + (action === "decrease" ? "m" : ""),
    type: "GET",
    dataType: "json",
    success: function (response) {
      console.log("Cart updated:", response);

      if (response.status === "success") {
        let pid = response.item_id;
        // Update cart count in the navbar
        $(".cart-count").text(response.cart_count);

        let cartQuantityElement = $(`.cart-quantity[data-id="${pid}"]`);
        let buttonGroup = $(`.button_group[data-id="${pid}"]`);

        if (action === "increase") {
          if (btnText == "addtocart") {
            buttonGroup.html(`
                                <div class="quantity-controls">
                                    <button class="btn btn-light px-3 rounded-pill" onclick="updateCart('${itemId}', 'decrease', '')">-</button>
                                    <span class="cart-quantity span_font" data-id="${pid}">1</span>
                                    <button class="btn btn-light px-3 rounded-pill" onclick="updateCart('${itemId}', 'increase', '')">+</button>
                                </div>
                                <a href="${base_url}cart " class="btn btn-light px-3 rounded-pill">Buy Now</a>
                            `);
          } else {
            let val = parseInt(cartQuantityElement.html()) + 1;
            buttonGroup.html(`
                            <div class="quantity-controls">
                                <button class="btn btn-light px-3 rounded-pill" onclick="updateCart('${itemId}', 'decrease', '')">-</button>
                                <span class="cart-quantity span_font" data-id="${pid}">${val}</span>
                                <button class="btn btn-light px-3 rounded-pill" onclick="updateCart('${itemId}', 'increase', '')">+</button>
                            </div>
                            <a href="${base_url}cart" class="btn btn-light px-3 rounded-pill">Buy Now</a>
                        `);
          }
          cartQuantityElement.text(parseInt(cartQuantityElement.text()) + 1);
        } else {
          let newQty = parseInt(cartQuantityElement.text()) - 1;

          if (newQty > 0) {
            cartQuantityElement.text(newQty);
          } else {
            // If quantity reaches 0, show "Add to Cart" button again
            buttonGroup.html(`
                            <a href="javascript:void(0);" class="btn btn-light px-3 rounded-pill" onclick="updateCart('${itemId}', 'increase', 'addtocart'); return false;">Add To Cart</a>
                            <a href="${base_url}cart" class="btn btn-light px-3 rounded-pill">Buy Now</a>
                        `);
          }
        }
      } else {
        //alert(response.message);
        if (response.message == "User not logged in") {
          location.href = base_url + "login";
        }
      }
    },
    error: function () {
      alert("Error updating cart. Please try again.");
    },
  });
}

// var d_drop_id = 19;

// if d_drop_id is >0 make <option value="${manufacturer.id}">${manufacturer.name}</option> selcted having that id from below code

function cat_drop() {
  var uur = base_url + "getinfo/servicecat";
  //console.log("HH cat Request URL:", uur);

  $.get(uur, function (data) {
    //console.log(data);
    $.each(data.data, function (_, mmdata) {
      if (
        typeof d_cat_id !== "undefined" &&
        d_cat_id > 0 &&
        mmdata.id == d_cat_id
      ) {
        $("#cat_id1").append(
          `<option value="${mmdata.id}" selected>${mmdata.name}</option>`
        );
      } else {
        $("#cat_id1").append(
          `<option value="${mmdata.id}">${mmdata.name}</option>`
        );
      }
    });

    $("#cat_id1").change(function () {
      const selectedId = $(this).val();
      second_cat_drop(data, selectedId);
    });

    if (typeof d_cat_id !== "undefined" && d_cat_id > 0) {
      const selectedId = d_cat_id;
      second_cat_drop(data, selectedId);
    }
  });
}
function second_cat_drop(data, selectedId) {
  const mox = data.data.find((item) => item.id === selectedId);

  // Reset and Populate Model Dropdown
  $("#cat_id2")
    .html('<option value="">Select Sub Category</option>')
    .prop("disabled", !mox || mox.child.length === 0);
  if (mox && mox.child.length > 0) {
    $.each(mox.child, function (_, mminfo2) {
      if (
        typeof scnd_drop_id !== "undefined" &&
        scnd_drop_id > 0 &&
        mminfo2.id == scnd_drop_id
      ) {
        $("#cat_id2").append(
          `<option value="${mminfo2.id}" selected >${mminfo2.name}</option>`
        );
      } else {
        $("#cat_id2").append(
          `<option value="${mminfo2.id}">${mminfo2.name}</option>`
        );
      }
    });
  }

  $("#cat_id2").change(function () {
    const selectedId2 = $(this).val();
    third_cat_drop(data, selectedId, selectedId2);
  });
}

function third_cat_drop(data, selectedId, selectedId2) {
  var mox = data.data.find((item) => item.id === selectedId);
  //console.log('--------------------');
  //console.log(mox.child);
  var mox_ch = mox.child.find((item) => item.id === selectedId2);

  // Reset and Populate Model Dropdown
  $("#cat_id3")
    .html('<option value="">Select Cat</option>')
    .prop("disabled", !mox_ch || mox_ch.child.length === 0);
  if (mox_ch && mox_ch.child.length > 0) {
    $.each(mox_ch.child, function (_, mminfo2) {
      if (
        typeof scnd_drop_id !== "undefined" &&
        scnd_drop_id > 0 &&
        mminfo2.id == scnd_drop_id
      ) {
        $("#cat_id3").append(
          `<option value="${mminfo2.id}" selected >${mminfo2.name}</option>`
        );
      } else {
        $("#cat_id3").append(
          `<option value="${mminfo2.id}">${mminfo2.name}</option>`
        );
      }
    });
  }
}

/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////

function d_drop() {
  var uur = base_url + "getinfo/manufacturer";
  console.log("HH Request URL:", uur);

  $.get(uur, function (data) {
    console.log(data);
    $.each(data.data, function (_, manufacturer) {
      // $('#manufacturer').append(`<option value="${manufacturer.id}">${manufacturer.name}</option>`);
      if (
        typeof d_drop_id !== "undefined" &&
        d_drop_id > 0 &&
        manufacturer.id == d_drop_id
      ) {
        $("#manufacturer").append(
          `<option value="${manufacturer.id}" selected>${manufacturer.name}</option>`
        );
      } else {
        $("#manufacturer").append(
          `<option value="${manufacturer.id}">${manufacturer.name}</option>`
        );
      }
    });

    $("#manufacturer").change(function () {
      const selectedId = $(this).val();
      second_drop(data, selectedId);
    });

    if (typeof d_drop_id !== "undefined" && d_drop_id > 0) {
      const selectedId = d_drop_id;

      second_drop(data, selectedId);
    }
  });
}

function second_drop(data, selectedId) {
  const manufacturer = data.data.find((item) => item.id == selectedId);

  // Reset and Populate Model Dropdown
  $("#model")
    .html('<option value="">Select Model</option>')
    .prop("disabled", !manufacturer || manufacturer.model.length === 0);
  if (manufacturer && manufacturer.model.length > 0) {
    $.each(manufacturer.model, function (_, model) {
      // $('#model').append(`<option value="${model.id}">${model.name}</option>`);
      if (
        typeof scnd_drop_id !== "undefined" &&
        scnd_drop_id > 0 &&
        model.id == scnd_drop_id
      ) {
        $("#model").append(
          `<option value="${model.id}" selected >${model.name}</option>`
        );
      } else {
        $("#model").append(
          `<option value="${model.id}">${model.name}</option>`
        );
      }
    });
  }
}

function load_data() {
  var uur = base_url + "getinfo/sc";

  console.log("HH Request URL:", uur);

  // AJAX Call
  $("#catlist").html("loading");
  $.get(uur, function (data) {
    console.log(data);

    if (data.status === 0) {
      $("#catlist").html(" No data found...");
    } else {
      cat_looper(data.data, "catlist");
    }
  });
}
function cat_looper(info, divid) {
  m = ``;

  var t = 0;
  $.each(info, function (k, v) {
    t++;
    m +=
      ` 
                <div class="categories__card--style3 text-center">
                    <a class="categories__card--link" href="` +
      base_url +
      `service_details/` +
      curcity +
      `/` +
      v.urlslug +
      `">
                        <div class="categories__thumbnail">
                            <img class="categories__thumbnail--img" src="` +
      v.thumb +
      `" onerror="this.onerror=null; this.src='https://automoss.in/nocar.png';"  alt="categories-img">
                        </div>
                        <div class="categories__content style3">
                            <h2 class="categories__content--title">` +
      v.name +
      `</h2>
                            <span class="categories__content--subtitle"></span>
                        </div>
                    </a>
                </div>

          `;
  });
  m += ``;
  $("#" + divid).html(m);
}

// car list

function load_car_data() {
  var car_url = base_url + "getinfo/usedcar?g=1";
  console.log("HH Request URL:", car_url);

  var selectedCar = [];
  $("input[name='car[]']:checked").each(function () {
    selectedCar.push($(this).val());
  });
  var categoriesQuery =
    selectedCar.length > 0 ? "&carz=" + selectedCar.join(",") : "";
  car_url += categoriesQuery;

  var minValue = $("#minRange").val();
  car_url += "&min=" + minValue;

  var maxValue = $("#maxRange").val();
  car_url += "&max=" + maxValue;

  console.log("Car API Request URL:", car_url);

  // AJAX Call
  $("#carlist").html("Loading cars...");
  $.get(car_url, function (data) {
    console.log(data);

    if (data.status === 0) {
      $("#carlist").html(nodata);
    } else {
      car_looper(data.data, "carlist");
    }
  });
}

function car_looper(cars, containerId) {
  var m = "";
  $.each(cars, function (k, v) {
    m +=
      `
              <div class="col mb-30">
                                  <div class="product__card product__list d-flex align-items-center">
                                      <div class="product__list--thumbnail">
                                     
                                          <a class="product__card--thumbnail__link display-block"
                                             href="` +
      base_url +
      `cardetails/${v.car_slno || "N/A"}">
                                              <figure class="snip1170 blue">
                         
                      <img class="product__card--thumbnail__img product__primary--img" 
                           src="${v.thumb}" 
                           alt="${v.name}" 
                           onerror="this.onerror=null; this.src='https://automoss.in/nocar.png';">
                      <img class="product__card--thumbnail__img product__secondary--img" 
                           src="${v.thumb}" 
                           alt="${v.name}" 
                           onerror="this.onerror=null; this.src='https://automoss.in/nocar.png';">
                            <span>car for sell</span>
                                              </figure>
                                          </a>
                                      </div>
                      <div class="product__card--content product__list--content">
                       
                           <div class="row mb-3">
                                              <div class="col-6">
                                  <div class="d-flex align-items-center">
                                                      <div class="icon p-2">
                                                          <i class="fas fa-car" style="color: red; font-size: 15px;"></i>
                                                      </div>
                                                      <div class="details ml-auto p-2">
                                                          <span><strong style="color: #898686">Redg. On:&nbsp;</strong></span>
    
                                                          <span class="details_span"> ${
                                                            v.year_of_registration ||
                                                            "N/A"
                                                          }</span>
                                                      </div>
                                                  </div>
                                 
                                 <div class="d-flex align-items-center">
                                                      <div class="icon p-2">
                                                          <i class="fas fa-shield-alt"
                                                              style="color: red; font-size: 15px;"></i>
                                                      </div>
                                                      <div class="details ml-auto p-2">
                                      <strong style="color: #898686">Insurance:&nbsp;</strong> ${
                                        char_limiter(v.insurance, 3) || "N/A"
                                      }
                                  </div>
                              </div>
                             <div class="d-flex align-items-center">
                                                      <div class="icon p-2">
                                                          <i class="fas fa-gas-pump"
                                                              style="color: red; font-size: 15px;"></i>
    
                                                      </div>
                                                      <div class="details ml-auto p-2">
                                      <strong style="color: #898686">Fuel Type:&nbsp;</strong> ${
                                        v.fuel_type_name || "N/A"
                                      }
                                 </div>
                                                  </div>
                                              </div>
                                 <div class="col-6">
                                                  <div class="d-flex align-items-center">
                                                      <div class="icon p-2">
                                                          <i class="fas fa-tachometer-alt"
                                                              style="color: red; font-size: 15px;"></i>
    
                                                      </div>
                                                      <div class="details ml-auto p-2">
                                      <strong style="color: #898686">Km Driven:&nbsp;</strong> ${
                                        v.kms_driven || "N/A"
                                      }
                                  </div>
                              </div>
                             <div class="d-flex align-items-center">
                                                      <div class="icon p-2">
                                                          <i class="fas fa-file-alt"
                                                              style="color: red; font-size: 15px;"></i>
    
                                                      </div>
                                                      <div class="details ml-auto p-2">
                                      <strong style="color: #898686">RTO:&nbsp;</strong> ${
                                        v.rto || "N/A"
                                      }
                                  </div>
                                                  </div>
                                  <div class="d-flex align-items-center">
                                                      <div class="icon p-2">
                                                          <i class="fas fa-user-tie"
                                                              style="color: red; font-size: 15px;"></i>
    
                                                      </div>
                                                      <div class="details ml-auto p-2">
                                      <strong style="color: #898686">Owner:&nbsp;</strong> ${
                                        v.owner_type || "N/A"
                                      }
                                  </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="button_group">
                                           <a class="btn btn-light px-3 animated_btn" href="` +
      base_url +
      `carenq/${v.car_slno || "N/A"}">Send Inquiry</a>
                          <a class="btn btn-light px-3 animated_btn" href="` +
      base_url +
      `cardetails/${v.car_slno || "N/A"}">View Details</a>
                      </div>
                      </div>
                      <div class="product-card__promotion">
                       <span class=""><strong>₹${
                         parseFloat(v.price).toLocaleString() || "N/A"
                       }</strong></span>
                          </div>
    
                         
                  </div>
              </div>
          `;
  });
  $(`#${containerId}`).html(m);
}

function load_servicedata() {
  var uurz = base_url + "getinfo/servicepack?g=1";
  uurz += "&city_id=" + ct_id;
  //uurz +=   '&catz='+cat_id;

  var selectedCategories = [];
  $("input[name='categories[]']:checked").each(function () {
    selectedCategories.push($(this).val());
  });
  var categoriesQuery =
    selectedCategories.length > 0
      ? "&catz=" + selectedCategories.join(",")
      : "";
  uurz += categoriesQuery;

  var minValue = $("#minRange").val();
  uurz += "&min=" + minValue;

  var maxValue = $("#maxRange").val();
  uurz += "&max=" + maxValue;

  console.log("SERVICE Request URL:", uurz);

  // AJAX Call
  $("#itemlist").html("loading");
  $.get(uurz, function (data) {
    console.log("-----------------");
    console.log(data);
    console.log("----XXXX-------------");

    if (data.status === 0) {
      $("#itemlist").html(nodata);
    } else {
      service_looper(data.data, "itemlist");
    }
  });
}
function service_looper(info, divid) {
  m = ``;

  var t = 0;
  $.each(info, function (k, v) {
    t++;
    m +=
      ` <div class="col">
    <div class="product__card product__list mb-30">
        <div class="row">
            <div class="col-md-4">
                <div class="product__list--thumbnail">
                    <figure class="snip1170 blue">
                        <img src="` +
      v.thumb +
      `" alt="` +
      v.name +
      `" onerror="this.onerror=null; this.src='https://automoss.in/nopic.png';"
                            class="product__card--thumbnail__img product__primary--img">
                        <img src="` +
      v.thumb +
      `" alt="` +
      v.name +
      `" onerror="this.onerror=null; this.src='https://automoss.in/nopic.png';"
                            class="product__card--thumbnail__img product__secondary--img">
                    </figure>
                </div>
            </div>
            <div class="col-md-8" style="padding: 20px 40px 20px 10px;">
                <div class="product__card--contents">
                    <div class="row mb-3">
                        <div class="product__cards col-md-12">
                            <h3 class="font-weight-bold fs-3 Service_Title text">` +
      v.name +
      ` | By ` +
      v.garage +
      `</h3>
                            <h2 class="font-weight-bold fs-5" style="text-align: justify;line-height: 25px;">` +
      v.short_info +
      `</h2>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center service_content">
                                <div class="details ml-auto">
                                    <span class="spl_listss">
                                        ` +
      v.info +
      `
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button_group d-flex">
                        <div class="price">
                            <span class="old__price text-dark text-white">
                                <strong class="price-badges">₹` +
      v.offer_price +
      `</strong>
                            </span>
                            <span class="text-muted text-decoration-line-through">₹` +
      v.mrp_price +
      `</span>
                        </div>
                        <a href="` +
      base_url +
      `createbooking/` +
      v.spl_encode +
      `">
                            <button class="continue_btn"><span>Book Now</span>
                                <div class="liquid"></div>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card__promotion">
            <span><strong>₹` +
      v.offer_price +
      `</strong></span>
        </div>
    </div>
</div>

          `;
  });
  m += ``;
  $("#" + divid).html(m);
}

function char_limiter(str, limit) {
  if (typeof str !== "string" || typeof limit !== "number" || limit < 0) {
    throw new Error(
      "Invalid input: Provide a valid string and a positive number."
    );
  }
  return str.length > limit ? str.slice(0, limit) + "..." : str;
}
