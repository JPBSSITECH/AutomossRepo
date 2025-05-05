<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $heading ?></title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #2C3E50;
            color: white;
            padding: 20px;
            border-radius: 12px 12px 0 0;
        }
        .header img {
            max-width: 50px;
            padding: 10px;
            background: white;
            border-radius: 8px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            flex-grow: 1;
            text-align: center;
        }
        .details, .billing-info, .footer {
            margin-top: 20px;
        }
        .details div, .billing-info div {
            padding: 10px;
            background: #f9f9f9;
            margin-bottom: 10px;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #2C3E50;
            color: white;
            text-align: left;
        }
        .total-row {
            font-weight: bold;
            background-color: #f7f7f7;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <img src="https://ssdemo.in/frontend/img/logo/automoss%20final%20demo%20(1).png" alt="Company Logo">
            <h1><?= $heading ?></h1>
        </div>

        <!-- Customer and Garage Details -->
        <div class="details">
            <!-- <div>
                <strong>Customer Details:</strong><br>
                <p>Name: <?= isset($customer->name) ? $customer->name : 'N/A' ?></p>
                <p>Email: <?= isset($customer->email) ? $customer->email : 'N/A' ?></p>
                <p>Phone: <?= isset($customer->phone) ? $customer->phone : 'N/A' ?></p>
                <p>Address: <?= isset($customer->address) ? $customer->address : 'N/A' ?></p>
            </div> -->
            <div>
                <strong>Garage Details:</strong><br>
                <p>Name: <?= $garage_info->fname ?> <?= $garage_info->mname ?> <?= $garage_info->lname ?></p>
                <p>Email: <?=$garage_info->email ?></p>
                <p>Phone: <?=$garage_info->phone ?></p>
                <p>Address: <?=$garage_info->address ?></p>
            </div>
        </div>

        <!-- Billing Information -->
        <div class="billing-info">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>GST (<?= $pp->gst_percent ?>%)</th>
                        <th>Platform Fee</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><?= $pp->product_name ?></td>
                        <td><?= $pp->qty ?></td>
                        <td>₹<?= number_format($pp->price, 2) ?></td>
                        <td>₹<?= number_format($pp->gst_amount, 2) ?></td>
                        <td>₹<?= number_format($pp->platform_fee, 2) ?></td>
                        <td>₹<?= number_format($pp->sub_total, 2) ?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="total-row">
                        <td colspan="6" style="text-align: right;">Grand Total:</td>
                        <td>₹<?= number_format($pp->sub_total, 2) ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <p>This is a computer-generated bill and does not require a signature.</p>
        </div>
    </div>
</body>
</html>
