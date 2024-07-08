<!DOCTYPE html>
<html lang="html">
<head>
    <meta charset="javascript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart
    </title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style>
        .contaner{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid green;
        }
        .content-wrapper{
            gap: 10px
        }
    </style>

</head>
<body>

<div class="container">
    <h1 class="text-center">Shopping Cart</h1>
    
    <!-- Display items in the cart -->
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through cart items -->
            {{-- Example item, replace with actual logic --}}
            <tr>
                <td>Product Name</td>
                <td>1</td>
                <td>$50</td>
            </tr>
        </tbody>
    </table>
</div>
<script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>

    
</body>
</html>