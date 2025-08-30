<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
        }

        .checkout-container {
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
            gap: 20px;
        }

        /* Left Section */
        .checkout-form {
            flex: 2;
            background: #fff;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .checkout-form h3 {
            margin-bottom: 10px;
            font-size: 18px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }


        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background: #fff;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .shipping-method,
        .payment-method,
        .billing-address {
            margin-top: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background: #fafafa;
        }

        .radio-option {
            margin-bottom: 10px;
        }

        .radio-option input {
            margin-right: 8px;
        }

        /* Right Section */
        .order-summary {
            flex: 1;
            background: #fff;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            height: fit-content;
        }

        .order-summary h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .total {
            font-weight: bold;
            font-size: 16px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        .discount-code {
            display: flex;
            margin: 10px 0;
        }

        .discount-code input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
        }

        .discount-code button {
            padding: 8px 12px;
            border: none;
            background: #0070f3;
            color: #fff;
            cursor: pointer;
            border-radius: 0 4px 4px 0;
        }

        .pay-btn {
            width: 100%;
            padding: 12px;
            border: none;
            background: #0070f3;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 15px;
        }

        .footer-links {
            margin-top: 15px;
            font-size: 13px;
            text-align: center;
        }

        .footer-links a {
            margin: 0 8px;
            color: #0070f3;
            text-decoration: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .checkout-container {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <div class="checkout-container">

        <!-- Left Section -->
        <div class="checkout-form">
            <h3>Contact</h3>
            <div class="form-group">
                <label>Email or mobile phone number</label>
                <input type="text" placeholder="Enter your email or phone">
            </div>

            <h3>Delivery</h3>
            <div class="form-group">
                <label>Country/Region</label>
                <select name="country" id="country"></select>
                <select>
                    <option>Pakistan</option>
                </select>
            </div>
            <div class="form-group">
                <label>City</label>
                <select id="city"></select>
                <select>
                    <option value="karachi">Karachi</option>
                    <option value="lahore">Lahore</option>
                    <option value="islamabad">Islamabad</option>
                    <option value="peshawar">Peshawar</option>
                    <option value="quetta">Quetta</option>
                </select>
                </optgroup>


                </select>
            </div>

            <div class="form-group">
                <label>First Name</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label>Postal Code</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text">
            </div>

            <div class="shipping-method">
                <h3>Shipping Method</h3>
                <p>Home Delivery — Rs.150</p>
            </div>

            <div class="payment-method">
                <h3>Payment</h3>
                <div class="radio-option">
                    <input type="radio" name="payment" checked> PayFast (Debit/Credit/Wallet/Bank)
                </div>
                <div class="radio-option">
                    <input type="radio" name="payment"> Cash on Delivery (COD)
                </div>
            </div>

            <div class="billing-address">
                <h3>Billing Address</h3>
                <div class="radio-option">
                    <input type="radio" name="billing" checked> Same as shipping address
                </div>
                <div class="radio-option">
                    <input type="radio" name="billing"> Use a different billing address
                </div>
            </div>

            <button class="pay-btn">Pay Now</button>

            <div class="footer-links">
                <a href="#">Refund policy</a> |
                <a href="#">Shipping</a> |
                <a href="#">Privacy policy</a> |
                <a href="#">Terms of service</a>
            </div>
        </div>

        <!-- Right Section -->

        <?php
        $conn = mysqli_connect("localhost", "root", "", "clothing_store");
        if (!$conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        $sql= mysqli_query($conn, "SELECT * FROM cart WHERE product_id= cart.product_id");
        while($row = mysqli_fetch_assoc($sql)) {
           
              // add product total
           $total = $row['total'];
    $shipping = $row['shipping'];
            
              
            ?>
        <div class="order-summary"  >
            <h3>Order Summary</h3>
            <img style="height:64px; width: 64px; object-fit: cover;" src="<?php echo $row['image']; ?>" alt="">
            <p><?php echo $row['name']; ?></p>
            <div class="summary-item">
                <span>Subtotal</span>
                <span><?php echo $row['total']; ?></span>
            </div>
            <div class="summary-item">
                <span>Shipping</span>
                <span><?php echo "PKR " . $row['shipping']; ?></span>
            </div>
            <?php 
} 

$newtotal = $total + $shipping;
?>
            <div class="discount-code">
                <input type="text" placeholder="Discount code">
                <button>Apply</button>
            </div>
            <div class="summary-item total">
                <span>Total</span>
                <span>Pkr <?php echo $total+$shipping   ; ?></span>
            </div>
        </div>

    </div>

</body>

</html>