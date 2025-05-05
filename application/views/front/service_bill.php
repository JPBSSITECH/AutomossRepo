<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service Bill</title>
</head>
<body style="margin: 0; padding: 20px; font-family: Arial, sans-serif; background: url('https://www.transparenttextures.com/patterns/soft-wallpaper.png'); background-size: cover; background-position: center; color: #333;">
    <div style="max-width: 900px; margin: 20px auto; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
      
        <!-- Header Section -->
        <div style="text-align: center; padding: 20px; background-color: #ED1D24; color: white; border-radius: 12px 12px 0 0; display: flex; align-items: center; justify-content: space-between;">
            <img src="https://ssdemo.in/frontend/img/logo/automoss%20final%20demo%20(1).png" 
                 alt="Company Logo" 
                 style="background-color: white; padding: 5px; max-width: 50px; height: auto; margin-right: 20px; border-radius: 8px;">
            <div style="flex-grow: 1; text-align: center;">
                <h1 style="margin: 0; font-size: 30px;">SERVICE BILL</h1> 
            </div>
        </div>



        <!-- Content Section -->
        <div style="padding: 25px 30px; background-color: #f4f9ff; border-radius: 8px; margin-top: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05); display: flex; flex-direction: column;">
          <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
            <div>
              <p style="font-size: 16px; margin: 5px 0; text-align: left;"><strong>Bokking ID:</strong> <?=$book_info->booking_id?> </p>
              <!-- <p style="font-size: 16px; margin: 5px 0; text-align: left;"><strong>Supplier Name:</strong> BGM pvt.ltd </p> -->
            </div>
            <div style="text-align: right;">
              <p style="font-size: 16px; margin: 5px 0; font-weight: bold;">Booking Date:   <?= date('d M Y', strtotime($book_info->created_on)) ?>
 </p>
            </div>
          </div>
        </div>

        <!-- Address Section -->
        <div style="display: flex; justify-content: space-between; margin-top: 10px;">
            <div style="width: 48%; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);">
                <p style="font-size: 18px; font-weight: bold; margin: 0; padding-bottom: 8px;">CUSTOMER DETAILS:</p>
                <p style="font-size: 16px; margin: 5px 0;"><span style="font-weight: bold;">Name:</span> <?=$cust_info->fname?> <?=$cust_info->mname?> <?=$cust_info->lname?></p>
                <p style="font-size: 16px; margin: 5px 0;"><span style="font-weight: bold;">Email:</span> <?=$cust_info->email?></p>
                <p style="font-size: 16px; margin: 5px 0;"><span style="font-weight: bold;">Address:</span>  <?=$cust_info->address?> </p>
                <p style="font-size: 16px; margin: 5px 0;"><span style="font-weight: bold;">Contact No:</span>  <?=$cust_info->phone?> </p>
                <!-- <p style="font-size: 16px; margin: 5px 0;"><span style="font-weight: bold;">GSTIN No:</span> 21AAAAA0000A1Z5</p> -->
            </div>
            <div style="width: 48%; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);">
                <p style="font-size: 18px; font-weight: bold; margin: 0; padding-bottom: 8px;">GARAGE DETAILS :</p>
                <p style="font-size: 16px; margin: 5px 0;"><span style="font-weight: bold;">Name:</span> <?=$garage_info->fname?> <?=$garage_info->mname?> <?=$garage_info->lname?></p>
                <p style="font-size: 16px; margin: 5px 0;"><span style="font-weight: bold;">Email:</span><?=$garage_info->email?></p>
                <p style="font-size: 16px; margin: 5px 0;"><span style="font-weight: bold;">Address:</span> <?=$garage_info->address?></p>
                <p style="font-size: 16px; margin: 5px 0;"><span style="font-weight: bold;">Contact No:</span> <?=$garage_info->phone?></p>
                <!-- <p style="font-size: 16px; margin: 5px 0;"><span style="font-weight: bold;">GSTIN No:</span> 31AAAAA1000A1Z5</p> -->
            </div>
        </div>

        <!-- Raw Materials Information Section -->
        <div style="margin-top: 1px;">
            <h3 style="font-size: 22px; color: #333;">Service Information</h3>
            <hr style="border: 1px solid #ccc; margin-top: 1px;"/>
            <table style="width: 100%; border-collapse: collapse; margin-top: 1px;">
                <thead>
                    <tr style="background-color: #ED1D24; color: white; text-align: left;"> 
                        <th style="padding: 12px; font-size: 16px;">#</th>
                        <th style="padding: 12px; font-size: 16px;">Service Name</th>
                        <th style="padding: 12px; font-size: 16px;">Quantity</th>
                        <th style="padding: 12px; font-size: 16px;">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background-color: #f9f9f9;">
                        <td style="padding: 10px; font-size: 14px;">1:</td>
                        <td style="padding: 10px; font-size: 14px;"><?=$pkg_info->name?></td>
                        <td style="padding: 10px; font-size: 14px;">1</td>
                        <td style="padding: 10px; font-size: 14px;"><?=$book_info->quote_price?></td>
                    </tr>     
                     <!-- GST Row -->
                    <tr style="background-color: #ffffff;">
                        <td colspan="3" style="padding: 10px; font-size: 14px; text-align: right; font-weight: bold;">GST (<?=$book_info->gst_percent?>%):</td>
                        <td style="padding: 10px; font-size: 14px;">₹<?= $book_info->gst_amount  ?></td>
                    </tr>

                    <!-- Platform Fee Row -->
                    <tr style="background-color: #f9f9f9;">
                        <td colspan="3" style="padding: 10px; font-size: 14px; text-align: right; font-weight: bold;">Platform Fee(<?=$book_info->platform_fee_percent?>):</td>
                        <td style="padding: 10px; font-size: 14px;">₹<?= $book_info->platform_fee  ?></td> <!-- Replace 50 with dynamic platform fee if available -->
                    </tr>

                    <tr>
                        <td colspan="4" style="border-top: 2px solid #ddd;"></td>
                    </tr>

                    <!-- Subtotal Row -->
                    <tr style="background-color: #ffffff;">
                        <td colspan="3" style="padding: 10px; font-size: 14px; text-align: right; font-weight: bold;">
                            Subtotal:
                        </td>
                        <td style="padding: 10px; font-size: 14px; font-weight: bold;">₹<?= number_format($book_info->total_price, 2) ?></td>
                    </tr>   
                    <tr style="background-color: #ffffff;">
                    <td colspan="4" style="padding: 10px; font-size: 14px; text-align: left; font-style: italic; color: #555;">
                        <strong>Amount in Words:</strong> <?= ucwords(number_to_words($book_info->total_price)) ?> Only
                    </td>
                </tr>                                           
                </tbody>
            </table>
        </div>

        <!-- Footer Section -->
        <div style="text-align: center; margin-top: 10px; font-size: 16px; color: #888; padding: 20px; background-color: #f4f8fb; border-top: 2px solid #e3e7ed; border-radius: 0 0 12px 12px; display: flex;align-items: center;justify-content: space-between;">
            <p style="margin: 0; text-align: start;">This is a computer-based invoice and does not require a physical signature.</p>
            <p style="margin-top: 10px; font-weight: bold; text-align: end;">Authorized Signatory</p>
        </div>
    </div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
</html>