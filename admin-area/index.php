<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dash Board</title>

    <!-- bootstrap CSS links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css filese -->
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <!-- nav bar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/Logo.jpg" class="logo-image" alt="logo" />
                <nav class="navbar navbar-expand-lg p-0">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="nav-link">Welcome Guest</a></li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex justify-content-between align-items-center">
                <div class="px-3">
                    <a href="#"><img class="admin-image" src="../images/logo2.jpg" alt="" /></a>
                    <p class="text-center text-light">Admin Name</p>
                </div>
                <div class="button text-center px-3">
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">Insert Product</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">View Products</a> </button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info m-1 p-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info m-1 p-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">Logout</a></button>
                </div>
            </div>
        </div>

        <!-- fourth child -->
        <div class="container my-5">
            <?php
            if (isset($_GET['insert_category'])) {
                include('insert_categories.php');
            }
            if (isset($_GET['insert_brand'])) {
                include('insert_brands.php');
            }
            ?>
        </div>
        <!-- last child -->
        <div class="bg-infor p-3 text-center footer">All rights reserved.</div>
    </div>
    </div>

    <!-- bootstrap ja link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>