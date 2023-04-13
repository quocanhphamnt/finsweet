<!--Start Document_head-->
<?php
include("./common/document_head.html");
?>
<!--End Document_head-->

<body>
    <!--Start Header-->
    <header class="header-nobg">
        <div class="container">
            <!--Start Navbar-->
            <?php
                include("./common/navbar.html");
            ?>
            <!--End Navbar-->

            <!--Start Header content-->

            <!--End Header content-->
        </div>
    </header>
    <!--End Header-->
    
    <!--Start Body-->
    <main class="main">
        <div class="container">
            <div class="my-5 pb-5 d-flex justify-content-center flex-wrap">
                <!-- Content -->
                <div class="header-content col-12 col-md-4">
                    <div class="d-flex flex-column">
                        <h1 class="display-4 fw-bold">Get in touch with us</h1>
                        <p class="fw-normal ">398 11th St, San Francisco</p>
                    </div>
                </div>
                <!--Start Form-->
                <form class="col-12 col-md-4">
                    <div class="d-flex flex-column">
                        <p class="fw-bold">We will get back to you as soon as possible.</p>
                        <div class="row g-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First Name" aria-label="First name" id="inputFirstName">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last Name" aria-label="Last name" id="inputLastName">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Work Email" aria-label="Work Email" id="inputWorkEmail">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Subject" aria-label="Subject" id="inputSubject">
                            </div>
                            <div class="form-floating col-12">
                                <textarea class="form-control" placeholder="Leave a comment here" id="inputMessage" style="height: 100px"></textarea>
                                <label for="inputMessage" class="text-secondary mx-2 p-2">Message</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger my-3">Submit</button>
                    </div>
                </form>
                <!--Start Form-->
            </div>
        </div>
    </main>
    <!--End Body-->

    <!--Start Footer-->
    <?php
        include("./common/footer.html");
    ?>
    <!--End Footer-->

    <!-- Start Document_footer-->
    <?php
        include("./common/document_footer.html")
    ?>
    <!-- Start Document_footer-->
</body>
</html>