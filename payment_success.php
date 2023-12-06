<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: "montserrat";
            background-color: #000; /* Black background */
            color: #fff; /* White text */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.1); /* Slightly transparent white background */
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3); /* Slightly transparent white box shadow */
        }

        h1 {
            color: #c11e5f; /* Theme color for headings */
        }

        p {
            font-size: 18px;
        }

        /* Add additional CSS styles for the header and footer here */
        header {
            background-color: #c11e5f; /* Theme color for the header */
            color: #fff;
            padding: 12px 40px;
            text-align: center;
            border-radius: 8px;
        }

        footer {
            background-color: #333; /* Dark gray for the footer */
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        button {
            background-color: #c11e5f; /* Theme color for the button */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h2>Payment Successful</h2>
    </header>
    <div class="container">
        <h1>Thank you for your payment</h1>
        <p>Your transaction was successful. You are now a member of JeevanSangam.</p>
        <a href="index.php"><button>Go to home</button></a>
    </div>
    <footer>
        &copy; 2023 JeevanSangam
    </footer>
</body>
</html>
