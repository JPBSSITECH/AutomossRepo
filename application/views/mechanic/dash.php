<?php 
    $this->load->view('mechanic/inc/headerv3');
?>


              <div class="row">
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-3 col-6">
                      <div class="card card-2 count_card count_card_pink">
                        <div class="card__icon">
                          <i class="fas fa-bolt"></i>
                        </div>
                        <p class="card__count">
                          <span class="count-number">10</span>
                        </p>
                        <h2 class="card__title">Wheels</h2>
                      </div>
                    </div>
                    <div class="col-md-3 col-6">
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
                    <div class="col-md-3 col-6">
                      <div class="card card-2 count_card count_card_orange">
                        <div class="card__icon">
                          <i class="fas fa-bolt"></i>
                        </div>
                        <p class="card__count">
                          <span class="count-number">10</span>
                        </p>
                        <h2 class="card__title">Sell Vehicle</h2>
                      </div>
                    </div>
                    <div class="col-md-3 col-6">
                      <div class="card card-2 count_card count_card_green">
                        <div class="card__icon">
                          <i class="fas fa-bolt"></i>
                        </div>
                        <p class="card__count">
                          <span class="count-number">10</span>
                        </p>
                        <h2 class="card__title">Services</h2>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 mobile_flex">
                      <div class="card ai-card mobile_w_100">
                        <p>Order</p>
                        <div class="ai-content">
                          <div>
                            <h2>54</h2>
                          </div>
                          <span class="badge bg-warning rounded-pill"
                            >+18.71 %</span
                          >
                        </div>
                      </div>
                      <div class="card ai-card ai_card_margin mobile_w_100">
                        <p>Order</p>
                        <div class="ai-content">
                          <div>
                            <h2>54</h2>
                          </div>
                          <span class="badge bg-warning rounded-pill"
                            >+18.71 %</span
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 pl-0 mobile_mt_4">
                      <div class="card ai-card bg_white h-100">
                        <canvas id="lineChart"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="dashboard_title">
                      <h4>Recent Emails</h4>
                    </div>
                    <table class="table_container">
                      <thead>
                        <tr>
                          <th><h1>Img</h1></th>
                          <th><h1>Name</h1></th>
                          <th><h1>Ordered Date</h1></th>
                          <th><h1>Product Price</h1></th>
                          <th><h1>Status</h1></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img
                              src="Basic_Ui__28186_29.jpg"
                              class="table_img"
                            />
                          </td>
                          <td>XYZ</td>
                          <td>9518</td>
                          <td>6369</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="Basic_Ui__28186_29.jpg"
                              class="table_img"
                            />
                          </td>
                          <td>XYZ</td>
                          <td>7326</td>
                          <td>10437</td>
                          <td>
                            <span class="badge bg-warning">Inactive</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="Basic_Ui__28186_29.jpg"
                              class="table_img"
                            />
                          </td>
                          <td>XYZ</td>
                          <td>4162</td>
                          <td>5327</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="Basic_Ui__28186_29.jpg"
                              class="table_img"
                            />
                          </td>
                          <td>XYZ</td>
                          <td>4162</td>
                          <td>5327</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="Basic_Ui__28186_29.jpg"
                              class="table_img"
                            />
                          </td>
                          <td>XYZ</td>
                          <td>4162</td>
                          <td>5327</td>
                          <td><span class="badge bg-success">Active</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-5 bg_blue mobile_mt_4">
                  <div class="row">
                    <div class="card project-card">
                      <h5>Formation Status</h5>
                      <div class="industry">
                        <span
                          >Estimated Processing - 4 to 5 Business Days
                        </span>
                      </div>

                      <div class="progress-section">
                        <div class="progress-header">
                          <span>Project progress</span>
                          <span>84%</span>
                        </div>
                        <div class="progress-bar">
                          <div class="progress" style="width: 84%"></div>
                        </div>
                      </div>

                      <div class="card-footer p-0">
                        <button class="select-report">View Status</button>
                      </div>
                    </div>
                  </div>
                  <div class="book-reviews mt-4">
                    <div class="dashboard_title">
                      <h4>Your To Do List</h4>
                    </div>
                    <div class="todo-container">
                      <div class="todo-item">
                        <div class="icon_flex">
                          <i class="fas fa-calendar-check todo-icon"></i>
                        </div>
                        <div class="todo-text">
                          <p class="todo-title">Run payroll</p>
                          <p class="todo-date">Mar 4 at 6:00 PM</p>
                        </div>
                      </div>

                      <div class="todo-item">
                        <div class="icon_flex">
                          <i class="fas fa-clock todo-icon"></i>
                        </div>
                        <div class="todo-text">
                          <p class="todo-title">Review time off request</p>
                          <p class="todo-date">Mar 7 at 6:00 PM</p>
                        </div>
                      </div>

                      <div class="todo-item">
                        <div class="icon_flex">
                          <i class="fas fa-file todo-icon"></i>
                        </div>
                        <div class="todo-text">
                          <p class="todo-title">Sign board resolution</p>
                          <p class="todo-date">Mar 12 at 6:00 PM</p>
                        </div>
                      </div>

                      <div class="todo-item">
                        <div class="icon_flex">
                          <i class="fas fa-person todo-icon"></i>
                        </div>
                        <div class="todo-text">
                          <p class="todo-title">Finish onboarding Tony</p>
                          <p class="todo-date">Mar 12 at 6:00 PM</p>
                        </div>
                      </div>

                      <div class="highlight-card">
                        <p class="highlight-title">Board meeting</p>
                        <p class="highlight-text">
                          Feb 22 at 6:00 PM<br />
                          You have been invited to attend a meeting of the Board
                          Directors.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


<?php    
    
    $this->load->view('mechanic/inc/footerv3');
?>
           