<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Side </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="admin/assadmin/ets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />



    <style>
       .div_center {
        margin: auto;
        width: 50%;
    }

    .font_sive {
        font-size: 20px;
        padding-bottom: 10px;
        justify-content: center;
    }

    .text-color {
        color: rgb(173, 24, 24);
        padding-bottom: 10px;
        margin: auto;
    }

    label {
        display: flex;
        justify-content: left; /* Center label text horizontally */
        align-items: center; /* Center label and input vertically */
        margin-bottom: 10px;
    }

    .div_desgin {
        padding-top: 10px;
        text-align: center;
    }

    /* Adjust input width */
    input, select {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    .div-center {
        text-align: center;
        font-weight: 20px;
    }

    /* Style for file input */
    input[type="file"] {
        display: flexbox;
    }

        .custom-file-upload {
            border: 1px solid #cccccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">

                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close float-right" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session()->get('message') }}
                </div>
                @endif

                <div class="div_center">
                    <h2 class="font_sive">Add Product</h2>
                    <form action="{{ url('add_product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_desgin">
                            <label for="title">Title</label>
                            <input class="text-color" type="text" required="" name="title"
                                placeholder="Enter Your Title Here">
                        </div>
                        <div class="div_desgin">
                            <label>User</label>
                            <select class="text-color" required="" name="user_id">
                                <option value="" selected="">Add a user here</option>
                                @foreach ($users as  $users)
                                <option value="{{$users->id}}">{{$users->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="div_desgin">
                            <label>Description</label>
                            <input class="text-color" type="text" required=""
                                placeholder="Description" name="description">
                        </div>
                        <div class="div_desgin">
                            <label>Quantity</label>
                            <input class="text-color" type="number" name="quantity" min="0">
                        </div>

                        <div class="div_desgin">
                            <label>Price</label>
                            <input class="text-color" type="number" required="" name="price" placeholder="price">
                        </div>

                        <div class="div_desgin">
                            <label>Discount_price</label>
                            <input class="text-color" type="number"required="" name="dic_price" placeholder="Dis_price Here">
                        </div>
                        <div class="div-center">
                            <label>image</label>
                            <input class="text-color" name="image" type="file" required="">
                        </div>

                        <div class="div_desgin">
                            <input type="submit" value="add Product" required="" class="btn btn-danger">
                        </div>

                    </form>
                </div>
            </div>

            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
        <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
        <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
        <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="admin/assets/js/off-canvas.js"></script>
        <script src="admin/assets/js/hoverable-collapse.js"></script>
        <script src="admin/assets/js/misc.js"></script>
        <script src="admin/assets/js/settings.js"></script>
        <script src="admin/assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="assets/js/dashboard.js"></script>
        <!-- End custom js for this page -->
</body>

</html>
