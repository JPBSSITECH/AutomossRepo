<?php    
    include('inc/header.php');

?>

<div class="page-content">
    <div class="container-fluid">

        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                            <!-- <a href="#" class="btn btn-danger" style="float:right;">Add</a>  -->
                            <!-- <?=base_url('admin/usedcar_add') ?> -->
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title">Booking List</h4> 
                    </div>
                </div>
            </div>
        </div>


        <div class="row" >

            <div class="col-xl-12">
                <div class="card" >
                    <div class="card-body" style=" min-height: 500px;"> 

                        <div class="row">
                            <div class="col-xl-12"> 


                                <div class="hstack gap-3"  style="margin-bottom: 10px;">    
                                        <input  type="text"  placeholder="Search by product / Customer"  id="search" class="form-control me-auto" />

                                         <input  type="text" name="customer_daterange" id="daterange" placeholder="Select Date Range " 
                                        value=""   class="form-control me-auto"> 
                                   

                                        <span class="btn btn-danger" onclick="load_data()">Search</span>
                                        <a href="?reset=Y" class="btn btn-outline-danger">Reset</a>
                                        <span class="me-auto" ></span>
                                        <span class="me-auto" ></span>
                                        <a href="?export=Y" class="btn btn-outline-danger"><i class="fa fa-file-excel-o" aria-hidden="true"></i></a>


                                </div>

                            </div>
                        </div>

                        

                        <div class="table-responsive">
                        <table class="table" style="margin-bottom: 43px;">
                            <thead>
                                <tr>
                                    <th scope="col">Sl No.</th>
                                    <th scope="col"></th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Contact</th>
                                    
                                    <th scope="col">Price</th>
                                    <th scope="col">Home Delivery</th>                                     
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="box_holdr" id="box_holdr"></tbody>    
                        </table>

                        <div id="paging"></div>


                        </div>





                    </div>
                </div>
            </div>
        </div>











              
            
<?php    
    include('inc/footer.php');

?>

<link href="https://automoss.in/bscombined.css?v=90" rel="stylesheet">
<script src="https://automoss.in/paginator.js"></script>


<style type="text/css">
    .highlight{
        background-color: #f00;
    }
</style>
 <script type="text/javascript">
    var limit = <?=$limit ?>;
    var lnk_edit = '<?=base_url('admin/') ?>';



        $(document).ready(function(){
            load_data();
            //console.log(lst);
        });

        function load_data(offset='',init_num=0){
                  var uur = '?getdata=Y';

                  var src =  $('#search').val();                 
                  if(src!=""){
                    if(src.length>1){
                      uur += '&search='+src;
                    }
                  }

                  var daterange = $('#daterange').val();
                  if (daterange) {
                    var dates = daterange.split(' - '); // Split the range into start and end dates
                    var min_date = dates[0];
                    var max_date = dates[1];

                    uur += '&min_date=' + encodeURIComponent(min_date);
                    uur += '&max_date=' + encodeURIComponent(max_date);
                  }









                  /////NEW CODE for upset----
                  if(offset!="" && offset>0){
                    uur += '&offset='+offset;
                  }
                     
                  $("#box_holdr").html('<tr><td colspan="7"><i class="fa fa-spinner fa-spin fa-2x fa-fw"></i></td></tr>');

                    //console.log(uur);


                     $.get(uur, function(data){
                            //console.log(data);
                            if (data.status === 0) {
                                $("#box_holdr").html('<tr><td colspan="4">No data found...</td></tr>');
                                $("#paging").html('');
                            } else {
                                looper(data.data, 'box_holdr', init_num);

                                var options = {
                                    currentPage: data.current_page,
                                    totalPages: data.page_count,
                                    size:"normal",
                                    alignment:"left",
                                    onPageClicked: function(e,originalEvent,type,page){
                                        console.log("Go to page: "+page);
                                        var num = page;
                                        var st_num = (num-1)*limit;            
                                        load_data(num,st_num);
                                    }
                                }
                                $('#paging').bootstrapPaginator(options);
                                 

                            }
                    });
        }

        function looper(info,divid,st_no=0){
            m =``; var t=0;

            $.each(info, function(k, v) {                
                
                  t++;
                  vtt = st_no+t;
                    m +=`<tr id="line_`+vtt+`" style="position:relative;">`;
                    m +=` <td>`+vtt+`</td>  `;
                    m +=` <td><img class="border-radius-5" src="`+v.thumb+`" alt="service-icon" style="width: 55px;"></td>  `;
                    m +=` <td>

                                <span>`+v.product_name+`</span><br>
                                <span>Quantity : `+v.qty+`</span>


                    </td>  `;


                    

                    //m +=` <td>`+formatDate(v.created_on)+`</td> `;
                    m +=` <td>

                            <span class="fw-bold">🚹 `+v.shipping_name+`</span><br>
                            <span>📞`+v.shipping_phone+`</span><br>
                            <span>📍`+v.shipping_address+`</span>  

                    </td> `;
                    m +=` <td>`+v.sub_total+`</td> `;
                    m +=` <td> `+(v.is_homedelivery==1?`Home Delivery`:`No`)+`  </td> `;
                    m +=` <td> `+(v.delivery_status==1?`Delivered`:`Pending`)+`  </td> `;

                     
                   
                                   
                    
                    




                    m +=`<td>
                        <a  target="_blank" href="order_details/`+v.id+`"  ><i class="fa fa-eye"></i></a> `;
                         
                         if(v.delivery_status==1){
                            m +=` <a  target="_blank" href="/product_bill/`+v.order_id+`"  ><i class="fa fa-download"></i></a> `; 
                         }
                         
                         
                     m +=`</td>`;
                    m +=`</tr>`;
                   
              }); 
            m +=``;
            $("#"+divid).html(m);
        }



function formatDate(dateString) {
    const date = new Date(dateString);
    const options = { day: '2-digit', month: 'short', year: 'numeric' };
    return date.toLocaleDateString('en-GB', options).replace(',', '');
}
 </script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
        <script src="https://cdn.jsdelivr.net/npm/moment/min/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

        <script>
            // $(function () {
            //   $('#daterange').daterangepicker({
            //     locale: {
            //       format: 'YYYY-MM-DD'
            //     },
            //     // startDate: moment().subtract(7, 'days'),
            //     // endDate: moment()
            //      autoUpdateInput: false,
            //   }, function (start, end) {
            //     console.log("Selected range: " + start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
            //   });
            // });
        </script>


        <script>
          $(function () {
            $('#daterange').daterangepicker(
              {
                locale: {
                  format: 'YYYY-MM-DD',
                },
                autoUpdateInput: false, // Prevent auto-filling the input
              },
              function (start, end) {
                // Update the input manually when a date range is selected
                $('#daterange').val(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
                console.log(
                  'Selected range: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD')
                );
              }
            );

            // Optional: Clear the input field on cancel
            $('#daterange').on('cancel.daterangepicker', function () {
              $(this).val('');
            });
          });
        </script>
