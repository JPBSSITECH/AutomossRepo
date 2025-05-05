<?php    
    include('inc/header.php');

?>

<div class="page-content">
    <div class="container-fluid">

        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                            <a href="<?=base_url('admin/staff_add') ?>" class="btn btn-danger" style="float:right;">Add</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title">Staff List</h4>
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
                                        <input  type="text"  placeholder="Search Staff" id="search" class="form-control me-auto" />
                                   

                                        <span class="btn btn-danger" onclick="load_data()">Search</span>
                                        <a href="?reset=Y" class="btn btn-outline-danger">Reset</a>


                                </div>

                            </div>
                        </div>

                        

                        <div class="table-responsive">
                        <table class="table" style="margin-bottom: 43px;">
                            <thead>
                                <tr>
                                    <th scope="col">Sl No.</th>
                                    <th scope="col">User Type</th>
                                    <th scope="col">Staff Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    
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

<link href="https://quantumsoft.space/bscombined.css?v=90" rel="stylesheet">
<script src="https://quantumsoft.space/paginator.js"></script>


<style type="text/css">
    .highlight{
        background-color: #f00;
    }
</style>
 <script type="text/javascript">
    var limit = <?=$limit ?>;
    var lnk_edit = '<?=base_url('admin/staff_edit/') ?>';



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

                  /////NEW CODE for upset----
                  if(offset!="" && offset>0){
                    uur += '&offset='+offset;
                  }
                     
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
            m =``; var t=0;

            $.each(info, function(k, v) {                
                
                  t++;
                  vtt = st_no+t;
                    m +=`<tr id="line_`+vtt+`" style="position:relative;">`;
                    m +=` <td>`+vtt+`</td>  `;



                    m +=` <td>`+v.user_role+`</td> `;
                    m +=` <td>`+v.first_name+`</td> `;
                    m +=` <td>`+v.email+`</td> `;
                    m +=` <td>`+v.phone+`</td> `;
                    




                    m +=`<td>

                            <a href="`+lnk_edit+v.spl_encode+`"  ><i class="fa fa-pencil"></i></a> 
                            <a class="text-danger"  onclick="return confirm_box_pro('Are you sure to  delete?','?prodelid=`+v.spl_encode+`','`+vtt+`')"  ><i class="fa fa-trash"></i></a> 

                    </td>`;
                    m +=`</tr>`;
                   
              }); 
            m +=``;
            $("#"+divid).html(m);
        }

 </script>