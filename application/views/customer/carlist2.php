  <?php    
    
    $this->load->view('customer/inc/headerv3');
?>
  <style type="text/css">
.primary__btn {
    border-radius: 0.5rem !important;
}

.animated_btn {
    position: relative;
    overflow: hidden;
    padding: 5px 20px;
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

.title_3d {
    text-shadow: 0 13.36px 8.896px #482c2c, 0 -2px 1px #ffffff;
    text-transform: uppercase;

    color: #6b4040;
}

.table-wrapper {
    border-radius: 5px;
    border: 1px solid rgb(21, 94, 117);
}

tbody tr:nth-child(odd) {
    background-color: light-dark(rgba(0 0 0 / 0.05), rgba(255 255 255 / 0.1));
}

tbody tr:hover td {
    background-color: rgb(249, 240, 240);
}

th {
    padding: 0.25rem 0.75rem;
}

td {
    padding: 0.5rem 0.75rem;
    transition: background-color 150ms ease-in-out;
}

thead {
    background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%, rgba(252, 164, 255, 1) 100%, rgba(0, 0, 0, 1) 100%);
}

.cart__table--header__list {
    padding: 2rem 2rem 2rem 2rem;
    color: white;
}

.cart__table--body__list {
    border-bottom: 1px solid var(--border-color);
    padding: 2rem 2rem 2rem 2rem;
}

.cart__content--title a {
    color: blue;
    font-family: emoji;
}

.badge-beat {
    display: inline-block;
    padding: 5px 15px;
    background-color: #ff6347;
    color: white;
    border-radius: 12px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    animation: beat 2s infinite;
}


@keyframes beat {
    0% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.1);
    }

    100% {
        transform: scale(1);
    }
}
  </style>

<div class="row mb-5">
      <div class="col-12 p-3  d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;
      border-radius: 10px;">
          <h2 class="pl_0 title_3d">Car List To Sell</h2>
          <a class="btn btn-danger btn-lg animated_btn" href="<?=base_url('customer/addcar') ?>">Add</a>
      </div>
  </div>

  <!-- ///////////////////////////// -->
  <div class="row row-cols-1 mb--n30">
      <div class="alert alert-warning" role="alert">
          YOU ARE in <span class="fw-bold"><?=$mypackage->name ?></span> plan . You can add up to <span
              class="fw-bold"><?=$mypackage->listing_count ?></span> cars. <a
              href="<?=base_url('customer/upgradepack')?>" class="fw-bold" style="text-decoration: underline;">Upgrade
              Now</a>
      </div>

      <?php
                                if (mycount($carz) > 0) {
                                    foreach ($carz as $cc) {
                                ?>
      <div class="col mb-30">
          <div class="product__card product__list d-flex align-items-center">
              <div class="product__card--thumbnail product__list--thumbnail">
                  <a class="product__card--thumbnail__link display-block" href="#">
                      <img class="img-fluid" src="<?=$cc->thumb?>"
                          onerror="this.onerror=null; this.src='https://automoss.in/nocar.png';" alt="ss"
                          style="width: 230px;">
                      <!-- <img class="product__card--thumbnail__img product__secondary--img" src="<?=$cc->thumb?>" alt="ss" style="width: 200px;"> -->
                  </a>
              </div>
              <div class="product__card--content product__list--content">
                  <h3 class="product__card--title"><a href="#"><?=$cc->name ?></a></h3>
                  <div class="row mb-3">
                      <div class="col-3">
                          <div class="d-flex align-items-center">
                              <i class="fas fa-tachometer-alt" style="color: red; font-size: 13px;"></i>&nbsp;
                              <strong style="color: #898686">Redg.:&nbsp;</strong><?=$cc->year_of_registration ?>
                          </div>
                      </div>
                      <div class="col-3">
                          <div class="d-flex align-items-center">
                              <i class="fas fa-calendar-alt" style="color: red; font-size: 13px;"></i>&nbsp;
                              <strong style="color: #898686">Driven:&nbsp;</strong><?=$cc->kms_driven ?>
                          </div>
                      </div>
                      <div class="col-5">
                          <div class="d-flex align-items-center">
                              <i class="fas fa-user" style="color: red; font-size: 13px;"></i>&nbsp;
                              <strong style="color: #898686">Owner:&nbsp;</strong><?=$cc->owner_type ?>
                          </div>
                      </div>
                      <!-- <div class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <i class="fas fa-calendar-alt" style="color: red; font-size: 13px;"></i>&nbsp;
                                                                <strong style="color: #898686">RTO:&nbsp;</strong><?=$cc->rto ?>
                                                            </div>
                                                        </div>  -->
                  </div>
                  <a class="btn btn-danger btn-lg animated_btn"
                      href="<?=base_url()?>customer/carinfo/<?=$cc->car_slno ?>">View Details</a>
                  <a class="btn btn-danger btn-lg animated_btn"
                      href="<?=base_url()?>customer/editcar/<?=$cc->car_slno ?>">Edit Details</a>
                  <a class="btn btn-danger btn-lg animated_btn"
                      href="<?=base_url()?>customer/carinfo/<?=$cc->car_slno ?>">Leads (<?=$cc->lead_count ?>)</a>
              </div>
          </div>
      </div>
      <?php
                                    }
                                } else {
                                ?>
      <div class="col-12">
          <table class="table text-start" style="border: 2px dashed #ccc;  ">
              <tbody>
                  <tr class="py-4 px-3">
                      <td colspan="4" style="position:relative;  height: 220px;">
                          <!-- Lottie Animation -->
                          <div class="lottie-container mb-3" style="max-width: 150px;  position: absolute; right: 0;">
                              <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js">
                              </script>
                              <div id="lottie-no-cars"></div>
                          </div>
                          <h4 class="ml-2">Opps! No Data found.</h4>
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>

      <script>
      // Load Lottie Animation
      lottie.loadAnimation({
          container: document.getElementById('lottie-no-cars'),
          renderer: 'svg',
          loop: true,
          autoplay: true,
          path: 'https://automoss.in/Animation - 1734960613567.json'
      });
      </script>


      <?php
                                }
                                ?>



  </div>












  <!-- ///////////////////////////// -->






















  <?php    
    
    $this->load->view('customer/inc/footerv3');
?>









  <script type="text/javascript">
var limit = <?= $limit ?>;
var lnk_edit = '<?= base_url('admin/usedcar_edit/') ?>';

$(document).ready(function() {
    load_data();
});

function load_data(offset = '', init_num = 0) {
    var uur = '?getdata=Y';

    var src = $('#search').val();
    if (src != "") {
        if (src.length > 1) {
            uur += '&search=' + src;
        }
    }

    if (offset != "" && offset > 0) {
        uur += '&offset=' + offset;
    }

    $("#box_holdr").html('<div class="text-center"><i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> Loading...</div>');

    $.get(uur, function(data) {
        if (data.status === 0) {
            $("#box_holdr").html('<div class="text-center">No data found...</div>');
            $("#paging").html('');
        } else {
            looper(data.data, 'box_holdr', init_num);

            var options = {
                currentPage: data.current_page,
                totalPages: data.page_count,
                size: "normal",
                alignment: "left",
                onPageClicked: function(e, originalEvent, type, page) {
                    var num = page;
                    var st_num = (num - 1) * limit;
                    load_data(num, st_num);
                }
            };
            $('#paging').bootstrapPaginator(options);
        }
    });
}

function looper(info, divid, st_no = 0) {
    var m = ``;
    var t = 0;

    $.each(info, function(k, v) {
        t++;
        var vtt = st_no + t;

        m += `
                <div class="col mb-30" id="card_${vtt}">
                    <div class="product__card product__list d-flex align-items-center">
                        <div class="product__card--thumbnail product__list--thumbnail">
                            <a class="product__card--thumbnail__link display-block" href="#">
                                <img class="product__card--thumbnail__img product__primary--img" src="<?=api_link ?>uploads/cars/${v.thumb}" alt="${v.name}">
                                <img class="product__card--thumbnail__img product__secondary--img" src="<?=api_link ?>uploads/cars/${v.thumb}" alt="${v.name}">
                            </a>
                        </div>
                        <div class="product__card--content product__list--content">
                            <h3 class="product__card--title"><a href="#">${v.name}</a></h3>
                            <div class="row mb-3">
                                <div class="col-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-calendar-alt" style="color: red; font-size: 15px;"></i>&nbsp;
                                        <strong style="color: #898686">Year:&nbsp;</strong> ${v.year_of_manufacture || 'N/A'}
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-user" style="color: red; font-size: 15px;"></i>&nbsp;
                                        <strong style="color: #898686">Owner Type:&nbsp;</strong> ${v.owner_type || 'N/A'}
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-rupee-sign" style="color: red; font-size: 15px;"></i>&nbsp;
                                        <strong style="color: #898686">Price:&nbsp;</strong> ₹${parseFloat(v.price).toLocaleString() || 'N/A'}
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-tachometer-alt" style="color: red; font-size: 15px;"></i>&nbsp;
                                        <strong style="color: #898686">Km Driven:&nbsp;</strong> ${v.kms_driven || 'N/A'}
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-map-marker-alt" style="color: red; font-size: 15px;"></i>&nbsp;
                                        <strong style="color: #898686">RTO:&nbsp;</strong> ${v.rto || 'N/A'}
                                    </div>
                                </div>
                            </div>
                            <a class="product__card--btn primary__btn" href="${lnk_edit}${v.spl_encode}">Edit</a>
                            <a class="product__card--btn text-danger" onclick="return confirm_box_pro('Are you sure to delete?', '?prodelid=${v.spl_encode}', '${vtt}')">Delete</a>
                        </div>
                    </div>
                </div>
            `;
    });

    $(`#${divid}`).html(m);
}
  </script>