<?php
    $this->load->view('customer/inc/headerv3');
?>



      
      <div class="row">
        <div class="col-md-7">
          <div class="dashboard_title">
            <h4>Subscription</h4>
          </div>
          <div class="row">

          <?php foreach ($packs as $dp): ?>
            <div class="col-md-4">
                <article class="card subscription_card card--1">
                    <div class="card__info-hover">
                        <svg class="card__like" viewBox="0 0 24 24">
                            <path fill="#000000"
                                d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                        </svg>
                        <div class="card__clock-info">
                            <svg class="card__clock" viewBox="0 0 24 24">
                                <path
                                    d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                            </svg>
                            <span class="card__time">1 Month </span> 
                        </div>
                    </div>
                    <div class="card__img" style="
                    background-image: url('https://wheelforcecentre.com/wp-content/uploads/2022/10/Where-I-can-find-best-luxury-car-repair-services.jpg');
                  "></div>

                    <a href="#" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                     
                        <h3 class="card__title"><?= $dp->name ?></h3>
                        <p class="card__price">₹<?= $dp->monthly_price ?><sub>/month</sub></p>
                       
                    </div>
                </article>
            </div>
            <?php endforeach; ?>





            <!-- <div class="col-md-4">
              <article class="card subscription_card card--1">
                <div class="card__info-hover">
                  <svg class="card__like" viewBox="0 0 24 24">
                    <path
                      fill="#000000"
                      d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z"
                    />
                  </svg>
                  <div class="card__clock-info">
                    <svg class="card__clock" viewBox="0 0 24 24">
                      <path
                        d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z"
                      /></svg
                    ><span class="card__time">1 month</span>
                  </div>
                </div>
                <div
                  class="card__img"
                  style="
                    background-image: url('https://via.placeholder.com/300x200');
                  "
                ></div>
             

                <a href="#" class="card_link">
                  <div class="card__img--hover"></div>
                </a>
                <div class="card__info">
                  <span class="card__category"> Premium</span>
                  <h3 class="card__title">Premium Plan</h3>
                  <p class="card__price">$19.99/month</p>
                  <span class="card__by">
                    <a href="#" class="card__author" title="author"
                      >Unlimited Access</a
                    >
                  </span>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="card subscription_card card--1">
                <div class="card__info-hover">
                  <svg class="card__like" viewBox="0 0 24 24">
                    <path
                      fill="#000000"
                      d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z"
                    />
                  </svg>
                  <div class="card__clock-info">
                    <svg class="card__clock" viewBox="0 0 24 24">
                      <path
                        d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z"
                      /></svg
                    ><span class="card__time">1 month</span>
                  </div>
                </div>
                <div
                  class="card__img"
                  style="
                    background-image: url('https://via.placeholder.com/300x200');
                  "
                ></div>

                <a href="#" class="card_link">
                  <div class="card__img--hover"></div>
                </a>
                <div class="card__info">
                  <span class="card__category"> Premium</span>
                  <h3 class="card__title">Premium Plan</h3>
                  <p class="card__price">$19.99/month</p>
                  <span class="card__by">
                    <a href="#" class="card__author" title="author"
                      >Unlimited Access</a
                    >
                  </span>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="card subscription_card card--1">
                <div class="card__info-hover">
                  <svg class="card__like" viewBox="0 0 24 24">
                    <path
                      fill="#000000"
                      d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z"
                    />
                  </svg>
                  <div class="card__clock-info">
                    <svg class="card__clock" viewBox="0 0 24 24">
                      <path
                        d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z"
                      /></svg
                    ><span class="card__time">1 month</span>
                  </div>
                </div>
                <div
                  class="card__img"
                  style="
                    background-image: url('https://via.placeholder.com/300x200');
                  "
                ></div>

                <a href="#" class="card_link">
                  <div class="card__img--hover"></div>
                </a>
                <div class="card__info">
                  <span class="card__category"> Premium</span>
                  <h3 class="card__title">Premium Plan</h3>
                  <p class="card__price">$19.99/month</p>
                  <span class="card__by">
                    <a href="#" class="card__author" title="author"
                      >Unlimited Access</a
                    >
                  </span>
                </div>
              </article>
            </div> -->
          </div>
          <div class="row mt-4">
            <div class="dashboard_title">
              <h4>Order Details</h4>
            </div>
            <table class="table_container">
              <thead>
                <tr>
                  <th><h1>Name</h1></th>
                  <th><h1>Ordered Date</h1></th>
                  <th><h1>Product Price</h1></th>
                  <th><h1>Status</h1></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>XYZ</td>
                  <td>9518</td>
                  <td>6369</td>
                  <td><span class="badge bg-success">Active</span></td>
                </tr>
                <tr>
                  <td>XYZ</td>
                  <td>7326</td>
                  <td>10437</td>
                  <td>
                    <span class="badge bg-warning">Inactive</span>
                  </td>
                </tr>
                <tr>
                  <td>XYZ</td>
                  <td>4162</td>
                  <td>5327</td>
                  <td><span class="badge bg-success">Active</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="dashboard_title">
              <h4>Total Count</h4>
            </div>
            <div class="col-md-6">
              <div class="card card-2 count_card count_card_pink">
                <div class="card__icon">
                  <i class="fas fa-bolt"></i>
                </div>

                <h2 class="card__title">Wheel</h2>
                <p class="card__count">
                  <span class="count-number">10</span>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-2 count_card count_card_blue">
                <div class="card__icon">
                  <i class="fas fa-bolt"></i>
                </div>

                <h2 class="card__title">Star Rating</h2>
                <p class="card__rating">
                  <span class="star-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </span>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-2 count_card count_card_orange">
                <div class="card__icon">
                  <i class="fas fa-bolt"></i>
                </div>

                <h2 class="card__title">Sell Vehicle</h2>
                <p class="card__count">
                  <span class="count-number">10</span>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-2 count_card count_card_green">
                <div class="card__icon">
                  <i class="fas fa-bolt"></i>
                </div>

                <h2 class="card__title">Services</h2>
                <p class="card__count">
                  <span class="count-number">10</span>
                </p>
              </div>
            </div>
          </div>
          <div class="book-reviews mt-2">
            <div class="dashboard_title">
                <h4>Wheel Details</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col" class="text-white">Order no.</th>
                            <th scope="col" class="text-white">wheel</th>
                            <th scope="col" class="text-white">Due Date</th>

                            <th scope="col" class="text-white">order details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Account">3412</td>
                            <td data-label="Amount">50</td>
                            <td data-label="Due Date">04/01/2016</td>

                            <td data-label="status">Active</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
      </div>
      
   



<?php
    $this->load->view('customer/inc/footerv3');
?>