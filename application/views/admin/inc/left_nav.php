<?php
    $ur2 = $this->uri->segment(2);
?>
<!-- Sidemenu Area -->
        <div class="flapt-sidemenu-wrapper">
            <!-- Desktop Logo -->
            <div class="flapt-logo">
                <a href="<?=base_url('') ?>">
                    <span style="font-size: 22px; font-weight: bolder; color: #fff;">ADMINPANEL</span>
                </a>
            </div>

            <!-- Side Nav -->
            <div class="flapt-sidenav" id="flaptSideNav">
                <!-- Side Menu Area -->
                <div class="side-menu-area">
                    <!-- Sidebar Menu -->
    <nav>
        <ul class="sidebar-menu" data-widget="tree">
            <!-- <br> -->
            <li class="menu-header-title"></li> 
            <li <?=($ur2==''  || $ur2=='index')?'class="active"':''  ?>
             ><a href="<?=base_url('admin') ?>"><i class='bx bx-home-heart'></i><span>Dashboard</span></a></li>

              
            

            

             
            <?php
            $cstf_urlz = array('customer','usedcar','jobcard','carselllead','carsellpackage','reviews','car_booking_list','usedcar_add','usedcar_edit','jobcard_details'); 
            ?>
            <li class="treeview   <?=(in_array($ur2, $cstf_urlz))?' menu-open ':''  ?>">
                <a href="javascript:void(0)"><i class="fa fa-street-view"></i> <span>Customer & Car</span> <i
                        class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu"  <?=(in_array($ur2, $cstf_urlz))?' style="display: block;" ':''  ?> >

                     <li <?=($ur2=='customer')?'class="active"':''  ?> >
                        <a href="<?=base_url('admin/customer') ?>">Customer</a></li>



                    <li <?=($ur2=='usedcar')?'class="active"':''  ?> >
                        <a href="<?=base_url('admin/usedcar') ?>">Sell Car List</a></li>

                    <!-- <li <?=($ur2=='car_booking_list')?'class="active"':''  ?> ><a href="<?=base_url('admin/car_booking_list') ?>">Car Booking</span></a></li> -->

                    <li <?=($ur2=='carselllead')?'class="active"':''  ?> > <a href="<?=base_url('admin/carselllead') ?>">Buy Car Lead</a></li>

                    <li <?=($ur2=='jobcard')?'class="active"':''  ?> ><a href="<?=base_url('admin/jobcard') ?>"><span>Live Bookings</span></a></li> 
                    <li <?=($ur2=='reviews')?'class="active"':''  ?> > <a href="<?=base_url('admin/reviews') ?>">Reviews</a></li> 
                    <li <?=($ur2=='carsellpackage')?'class="active"':''  ?> > <a href="<?=base_url('admin/carsellpackage') ?>">Car Sell Package</a></li>

            

                     
                    
                </ul>
            </li>


            <?php
            $cstf_urlz = array('garage','servicepackage','servicepackage_add','servicepackage_edit','servicecat','servicecat_add','servicecat_edit','garage','booking_list','garage_package','booking_details','cancel_booking','garage_package_add','servicePackage_add','garage_details','garage_package_edit',
                'product_orders','order_details'

                ); 
            ?>
            <li class="treeview   <?=(in_array($ur2, $cstf_urlz))?' menu-open ':''  ?>">
                <a href="javascript:void(0)"><i class="fa fa-tags"></i> <span>Garage & Packages</span> <i
                        class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu"  <?=(in_array($ur2, $cstf_urlz))?' style="display: block;" ':''  ?> >
 
                    

                    <li <?=($ur2=='garage')?'class="active"':''  ?> > <a href="<?=base_url('admin/garage') ?>">Garage</a></li>
                    <li <?=($ur2=='garage_package')?'class="active"':''  ?> > <a href="<?=base_url('admin/garage_package') ?>">Garage Package</a></li>
                    <li <?= in_array($ur2, ['servicepackage', 'servicePackage_add']) ? 'class="active"' : '' ?>><a href="<?=base_url('admin/servicepackage') ?>">Services (Master)</a></li>
                    <li <?= in_array($ur2, ['servicecat', 'servicecat_add']) ? 'class="active"' : '' ?>><a href="<?=base_url('admin/servicecat') ?>">Service Category Hierarchy</a></li>

                    <li <?=($ur2=='booking_list')?'class="active"':''  ?> ><a href="<?=base_url('admin/booking_list') ?>"><span>Booking Lists</span></a></li>

                    <li <?=($ur2=='product_orders')?'class="active"':''  ?> ><a href="<?=base_url('admin/product_orders') ?>"><span>Product Orders</span></a></li>


                    
                </ul>
            </li>

            <?php
            $stf_urlz = array('ecombrand','ecomcategory','ecomcategory_add','ecomcategory_edit','product','product_add','product_edit'); 
            ?>
            <li class="treeview   <?=(in_array($ur2, $stf_urlz))?' menu-open ':''  ?>">
                <a href="javascript:void(0)"><i class="fa fa-cog"></i> <span>Spare Parts</span> <i
                        class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu"  <?=(in_array($ur2, $stf_urlz))?' style="display: block;" ':''  ?> >

                     <li <?=($ur2=='ecombrand')?'class="active"':''  ?> >
                        <a href="<?=base_url('admin/ecombrand') ?>">Brand</a></li>

                        <li <?=($ur2=='ecomcategory')?'class="active"':''  ?> >
                        <a href="<?=base_url('admin/ecomcategory') ?>">Category</a></li>

                        <li <?=($ur2=='product')?'class="active"':''  ?> >
                        <a href="<?=base_url('admin/product') ?>">Product</a></li>




                    
                       

                     


                        
                </ul>
            </li>


           


            
            




            <li class="menu-header-title">Setups</li>
            <?php
            $stf_urlz = array('staffrole','staff','staff_edit','staff_add','userrole'); 
            ?>
            <li class="treeview d-none  <?=(in_array($ur2, $stf_urlz))?' menu-open ':''  ?>">
                <a href="javascript:void(0)"><i class="fa fa-cog"></i> <span>Staff Management</span> <i
                        class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu"  <?=(in_array($ur2, $stf_urlz))?' style="display: block;" ':''  ?> >

                     <li <?=($ur2=='staff')?'class="active"':''  ?> >
                        <a href="<?=base_url('admin/staff') ?>">Staff</a></li>



                    <li <?=($ur2=='staffrole')?'class="active"':''  ?> >
                        <a href="<?=base_url('admin/staffrole') ?>">Staff Role</a></li>

                       

                     


                        
                </ul>
            </li>


            <?php
            $mst_urlz = array('city','servicecat','manufacturer','carmodel','fueltype','emailtemplate','emailengine','smstemplate','smsengine','features','featurecategory');
            ?>
            <li class="treeview   <?=(in_array($ur2, $mst_urlz))?' menu-open ':''  ?>">
                <a href="javascript:void(0)"><i class="fa fa-cog"></i> <span>Master Settings</span> <i
                        class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu"  <?=(in_array($ur2, $mst_urlz))?' style="display: block;" ':''  ?> >
                    <li <?=($ur2=='city')?'class="active"':''  ?> >
                        <a href="<?=base_url('admin/city') ?>">City</a></li>

                    

                     <li <?=($ur2=='manufacturer')?'class="active"':''  ?> >
                    <a href="<?=base_url('admin/manufacturer') ?>">Manufacturer</a></li>

                    <li <?=($ur2=='carmodel')?'class="active"':''  ?> >
                    <a href="<?=base_url('admin/carmodel') ?>">Car Model</a></li>

                    <li <?=($ur2=='fueltype')?'class="active"':''  ?> >
                    <a href="<?=base_url('admin/fueltype') ?>">Fuel Type</a></li>

                    <li <?=($ur2=='emailengine')?'class="active"':''  ?> >
                    <a href="<?=base_url('admin/emailengine') ?>">Email Engine</a></li> 

                   <!--  <li <?=($ur2=='emailtemplate')?'class="active"':''  ?> >
                    <a href="<?=base_url('admin/emailtemplate') ?>">Email Templates</a></li>

                    

                    <li <?=($ur2=='smstemplate')?'class="active"':''  ?> >
                    <a href="<?=base_url('admin/smstemplate') ?>">Sms Templates</a></li>


                    <li <?=($ur2=='smsengine')?'class="active"':''  ?> >
                    <a href="<?=base_url('admin/smsengine') ?>">Sms Engine</a></li> -->

                    <!-- <li <?=($ur2=='features')?'class="active"':''  ?> >
                    <a href="<?=base_url('admin/features') ?>">Features</a></li>

                     <li <?=($ur2=='featurecategory')?'class="active"':''  ?> >
                    <a href="<?=base_url('admin/featurecategory') ?>">Feature Category</a></li> -->

                    


                    




                     


                        
                </ul>
            </li>

            




            <!-- <li class="menu-header-title">Blogs & pages</li> -->
           <!--  <?php
            $blg_urlz = array('blog_list','blog','blog_edit');
            ?>
            <li class="treeview   <?=(in_array($ur2, $blg_urlz))?' menu-open ':''  ?>">
                <a href="javascript:void(0)"><i class="fa fa-cog"></i> <span>Blogs</span> <i
                        class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu"  <?=(in_array($ur2, $blg_urlz))?' style="display: block;" ':''  ?> >
                    <li <?=($ur2=='blog_list')?'class="active"':''  ?> >
                        <a href="<?=base_url('admin/blog_list') ?>">Blog List</a></li>
                    <li <?=($ur2=='blog')?'class="active"':''  ?> >
                        <a href="<?=base_url('admin/blog') ?>">Add Blog</a></li>
                </ul>
            </li> -->




<!-- 
            <?php
            $stt_urlz = array('analytics','rbt','seo_list','seo_add','seo_edit');
            ?>
            <li class="treeview   <?=(in_array($ur2, $stt_urlz))?' menu-open ':''  ?>">
                <a href="javascript:void(0)"><i class="fa fa-cog"></i> <span>Seo Settings</span> <i
                        class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu"  <?=(in_array($ur2, $stt_urlz))?' style="display: block;" ':''  ?> >
                    <li <?=($ur2=='analytics')?'class="active"':''  ?> >
                        <a href="<?=base_url('admin/analytics') ?>">Analytics</a></li>
                    <li <?=($ur2=='rbt')?'class="active"':''  ?> >
                        <a href="<?=base_url('admin/rbt') ?>">Robots TXT</a></li>


                    <li <?=($ur2=='seo_list')?'class="active"':''  ?> >
                        <a href="<?=base_url('admin/seo_list') ?>">Page Wise Seo</a></li>


                        
                </ul>
            </li> -->





             


            <li <?=($ur2=='site_settings')?'class="active"':''  ?> ><a href="<?=base_url('admin/site_settings') ?>"><i class='fa fa-lock'></i><span>Web Master</span></a></li>
            
            <li><a href="<?=base_url('admin/logout') ?>"><i class="bx bx-power-off font-20" aria-hidden="true"></i><span>Logout</span></a></li>



        </ul>






    </nav>
                </div>
            </div>
        </div>