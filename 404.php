<!--Start Document_head-->
<?php
include("./common/document_head.html");
?>
<!--End Document_head-->

<body style="background: linear-gradient(180deg, rgba(148, 153, 221, 0.1) 0%, rgba(0, 16, 255, 0.1) 100%);">
    <!--Start Header-->
        <div class="container">
            <!--Start Navbar-->
            <?php
                include("./common/navbar.html");
            ?>
            <!--End Navbar-->

            <!--Start Header content-->
            <div class="d-flex justify-content-center my-5" style="height:100vh">
                <div class="col-12 col-md-4  text-center">
                    <p class="text-primary fw-bold">404</p>
                    <h1 class="fw-bold">Page Not Found</h1>
                    <p class="">The page you are looking for doesn't exist or has been moved</p>
                    <a class="btn btn-danger" href="index.php" role="button">Back to Home</a>
                </div>
            </div>
            <!--End Header content-->
        </div>
    <!--End Header-->
    
    <!-- Start Document_footer-->
    <?php
        include("./common/document_footer.html")
    ?>
    <!-- Start Document_footer-->
</body>
</html>