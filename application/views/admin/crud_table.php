<?php  
    $this->load->view('admin/inc/header');
?>
<style type="text/css">
 .pagination li  a {
    border-radius: 30px; padding: 10px 20px; background: #a59c9c; color: #000;
    color: #fff;
    font-weight: bold;
    float: right; margin-right: 5px;
/*    margin-top: 10px;*/
}   
.pagination li.active a {
    background: #ff4452; color: #fff; 
     
}   

.pagination {
    float: right;
}

.disabled_ln{
    background: #ccc;
}
.hide_action{
    display: none;
}
</style>

<div class="page-content">
    <div class="container-fluid">

        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                            <?php
                            if(isset($basics->addbtn) && $basics->addbtn == 1){
                            ?>
                                <a href="<?=base_url($basics->pg_baseurl) ?>/add" class="btn btn-danger" style="float:right;">Add</a>
                            <?php
                            }
                            ?>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title"><?=@$basics->formtitle  ?></h4>
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
                        <?php
                            if(isset($basics->issearch) && $basics->issearch==1){
                                $plc = (isset( $basics->issearch_placeholder ))?$basics->issearch_placeholder:"Search ".$basics->formtitle;
                        

                                // print_result($_SESSION);


                        ?>

                           
                            <div class="hstack gap-3"  style="margin-bottom: 10px;">    
                                    <input  type="text" name="<?=$basics->pageslug ?>_qry" placeholder="<?=@$plc ?>" id="search" 
                                    value="<?=@$_SESSION[$basics->pageslug.'_qry']  ?>"   class="form-control me-auto"> 

                                    <?php 
                                    if(isset($basics->is_daterange) && $basics->is_daterange==1){
                                    ?>
                                        <input  type="text" name="<?=$basics->pageslug ?>_daterange"   id="daterange" 
                                        value="<?=@$_SESSION[$basics->pageslug.'_daterange']  ?>" placeholder="Select Date Range"   class="form-control me-auto"> 

                                    <?php 
                                    }
                                    ?>


                                    <span class="btn btn-danger" onclick="load_data()">Search</span>
                                    <a href="?reset=Y" class="btn btn-outline-danger">Reset</a> 
                                    

                                    <?php 
                                    if(isset($basics->is_export) && $basics->is_export==1){
                                    ?>
                                        <span class="me-auto" ></span>
                                        <span class="me-auto" ></span>
                                        <a href="?export=Y" class="btn btn-outline-danger"><i class="fa fa-file-excel-o" aria-hidden="true"></i></a>

                                    <?php 
                                    }
                                    ?>

                                
                            </div>
                          
                        <?php
                            }
                        ?>
                    </div>
                </div>
                        

                         
                        
                         <div class="table-responsive">
                            <table class="table bordered-table" style="margin-bottom: 43px;">
                                <thead>
                                    <tr>                                      
                                        <th>#</th>
                                            <?php
                                              foreach($lst as $l){

                                                 
                                                echo ' <th style="'.@$l->list_style.'" >'.$l->label.'</th>';
                                              }
                                            ?>                                          
                                        <th>Actions</th>
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
        <!-- end row -->

        
       
    </div> <!-- container-fluid -->
</div>
               
<?php  
     $this->load->view('admin/inc/footer');
?>

 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

 
 
<link href="<?=base_url() ?>bscombined.css?v=90" rel="stylesheet">
<script src="<?=base_url() ?>paginator.js"></script>


<?php 
if(isset($basics->is_daterange) && $basics->is_daterange==1){
?>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
        <script src="https://cdn.jsdelivr.net/npm/moment/min/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

       <!--  <script>
            $(function () {
              $('#daterange').daterangepicker({
                locale: {
                  format: 'YYYY-MM-DD'
                },
                startDate: moment().subtract(30, 'days'),
                endDate: moment() 

                // startDate: null,        // No default start date
                //  endDate: null  
              }, function (start, end) {
                $('#daterange').val(start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                console.log("Selected range: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
              });


              // Optional: Clear the input field on cancel
                $('#daterange').on('cancel.daterangepicker', function () {
                  $(this).val('');
                });




            });
        </script> -->

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




<?php 
}
?>






<script type="text/javascript">
var limit = <?=$limit ?>;
var lst = <?=json_encode($lst) ?>;
var list_actions = <?=json_encode($list_actions) ?>;
var lnk_edit = '<?=base_url($basics->pg_baseurl.'/edit/'); ?>';

$(document).ready(function(){
    load_data();
    //console.log(lst);
    //console.log(list_actions);
});


 

function load_data(offset='',init_num=0){
  var uur = '?getdata=Y';
  var src =  $('#search').val();
 
  if(src!=""){
    if(src.length>1){
      // uur += '&search='+src;
      uur += '&search=' + encodeURIComponent(src); // Use encodeURIComponent for safety
    }
  }

    <?php 
    if(isset($basics->is_daterange) && $basics->is_daterange==1){
    ?>

              var daterange = $('#daterange').val();
              if (daterange) {
                var dates = daterange.split(' - '); // Split the range into start and end dates
                var min_date = dates[0];
                var max_date = dates[1];

                uur += '&min_date=' + encodeURIComponent(min_date);
                uur += '&max_date=' + encodeURIComponent(max_date);
              }

    <?php 
    }
    ?>

  





  /////NEW CODE for upset----
  if(offset!="" && offset>0){
    uur += '&offset='+offset;
  } 

  console.log('Fetching data from:  '+uur);  
  $("#box_holdr").html('<tr><td colspan="7"><i class="fa fa-spinner fa-spin fa-2x fa-fw"></i></td></tr>');

     $.get(uur, function(data){
        console.log(data);
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
    m =``;
 
                var t=0;
                $.each(info, function(k, v) {                
                    
                      t++;
                      vtt = st_no+t;
                      m +=`
                        <tr id="line_`+vtt+`" style="position:relative;">
                            <td>`+vtt+`</td> `;

                           //m +=` <td>`+v.name.toUpperCase()+`</td> `;
                             
                           $.each(lst, function(k_ll, v_ll) {
                                var pout = wordSwitcher(v_ll.db_nm,v); 
                                pout = cleanAndLimitText(pout);


                                m +=` <td>`+pout+`</td> `;
                           });  
                        m +=`<td>`;


                            <?php
                            if(isset($basics->editbtn) && $basics->editbtn == 1){
                            ?>
                                 m +=`<a href="`+lnk_edit+v.spl_encode+`"  ><i class="fa fa-pencil"></i></a>`;
                            <?php
                            }
                            ?>
                         
                              
                         m +=`<a class="text-danger"
                              onclick="return confirm_box_pro('Are you sure to  delete?','?prodelid=`+v.spl_encode+`','`+vtt+`')"  ><i class="fa fa-trash"></i></a>`; 

                                $.each(list_actions, function(k_ac, v_ac) {                                      
                                    var poutx = wordSwitcher(v_ac.db_nm,v,'Y');                                   
                                    m +=` <a class="`+v_ac.class_nm+`" href="`+v_ac.url_path+`/`+poutx+`"  >`+v_ac.label+`</a> `;
                               }); 
                        m +=`</td>
                          </tr>
                      `;
                  }); 
    m +=``;
    $("#"+divid).html(m);
}



function cleanAndLimitText(input) {
    const textWithoutTags = input.replace(/<\/?[^>]+(>|$)/g, "");
    const words = textWithoutTags.split(/\s+/).slice(0, 20);
    return words.join(" ");
}

 



function wordSwitcher(word, indata = {}) {
    let data = word;
    let vo = data;
    let matches = data.match(/{{%(.*?)%}}/g) || [];
    let uniq = [...new Set(matches)];
    let r = uniq.join('+');
    let rv = r.split('+');

    

    rv.forEach(u => {
        let pp = u;
        u = u.replace('{{%', '').replace('%}}', '');

        if (u !== '') {
            let orgdata = indata[u] !== undefined ? indata[u] : '-:: ' + u + ' ::-';
            vo = vo.replace(new RegExp(pp, 'gi'), orgdata);
        }
    });
    

     
    
    return htmlEntityDecode(vo);
}

function htmlEntityDecode(str) {
    let textarea = document.createElement('textarea');
    textarea.innerHTML = str;
    return textarea.value;
}

</script>
