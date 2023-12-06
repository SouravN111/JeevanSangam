<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .payment-container {
            background-color: #c11e5f;
            color: #000;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .payment-container h2 {
            margin: 0;
            padding: 0;
        }

        .form-group {
            margin-top: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 90%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .payment-button {
            margin-top: 20px;
        }

        .payment-button button {
            background-color: #000;
            color: #c11e5f;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_COOKIE["login"])){
    ?>
    <div class="payment-container">
        <h2>Payment Details</h2>
        <form action="payment_success.php" method="post">
            <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" name="card-number" required>
            </div>
            <div class="form-group">
                <label for="expiration-date">Expiration Date</label>
                <input type="text" id="expiration-date" name="expiration-date" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <div class="payment-button">
                <button type="submit">Pay Now</button>
            </div>
        </form>
    </div>
    <?php
    }
	else{
		header("location:login.php");
	}
    ?>
</body>
</html>
