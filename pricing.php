<!--Start Document_head-->
<?php
include("./common/document_head.html");
?>
<!--End Document_head-->

<body>
    <!--Start Header-->
    <header class="header">
        <div class="container">
            <!--Start Navbar-->
            <?php
                include("./common/navbar.html");
            ?>
            <!--End Navbar-->

            <!--Start Header content-->
                <div class="row mt-5" id="headerPricing">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-9">
                            <div class="d-flex flex-column justify-content-centert text-center my-5 ">
                                <h1 class="fw-bold">Pricing</h1>
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae nunc vitae neque .</p>
                            </div>
                        </div>
                    </div>
                </div>
            <!--End Header content-->
        </div>
    </header>
    <!--End Header-->
    
    <!--Start Body-->
    <main class="main">
        <div class="container">
            <!--Start Pricing Section-->
            <section class="row" id="pricing">
                <div class="d-flex flex-wrap justify-content-center">
                    <!--Pricing Card 1-->
                    <div class="col-lg-3 m-3 p-5" id="cardPricing">
                        <div class="d-flex flex-column flex-wrap">
                            <h2 class="fw-bold">Launch</h2>
                            <h2 class="fw-bold">$<strong class="fs-1">19</strong>/mo</h2>
                            <p class="">Integer proin ac, lectus proin egestas ultricies.</p>
                            <ul class="list-unstyled">
                                <li class="list-item"><i class="bi bi-check-lg me-2 text-primary fw-bold fs-5"></i>1GB of storage</li> 
                                <li class="list-item my-2"><i class="bi bi-check-lg me-2 text-primary fw-bold fs-5"></i>1 user</li>
                                <li class="list-item my-2"><i class="bi bi-check-lg me-2 text-primary fw-bold fs-5"></i>50 tasks</li>
                                <li class="list-item my-2 invisible"><i class="bi bi-check-lg me-2 text-primary fw-bold fs-5"></i>Text Here</li>
                                <li class="list-item my-2 invisible"><i class="bi bi-check-lg me-2 text-primary fw-bold fs-5"></i>Text Here</li>
                            </ul>
                            <button type="button" class="btn btn-outline-primary btn-lg">Get Started</button>
                        </div>
                    </div>
                    <!--Pricing Card 2-->
                    <div class="col-lg-3 m-3 p-5" id="cardPricingHot">
                        <div class="d-flex flex-column flex-wrap">
                            <h2 class="fw-bold">Startup</h2>
                            <h2 class="fw-bold">$<strong class="fs-1">49</strong>/mo</h2>
                            <p class="">Integer proin ac, lectus proin egestas ultricies.</p>
                            <ul class="list-unstyled">
                                <li class="list-item"><i class="bi bi-check-lg me-2 text-danger fw-bold fs-5"></i>10GB of storage</li> 
                                <li class="list-item my-2"><i class="bi bi-check-lg me-2 text-danger fw-bold fs-5"></i>3 users</li>
                                <li class="list-item my-2"><i class="bi bi-check-lg me-2 text-danger fw-bold fs-5"></i>500 tasks</li>
                                <li class="list-item my-2"><i class="bi bi-check-lg me-2 text-danger fw-bold fs-5"></i>24/7 support</li>
                                <li class="list-item my-2 invisible"><i class="bi bi-check-lg me-2 text-danger fw-bold fs-5"></i>Text Here</li>
                            </ul>
                            <button type="button" class="btn btn-danger btn-lg">Get Started</button>
                        </div>
                    </div>
                    <!--Pricing Card 3-->
                    <div class="col-lg-3 m-3 p-5" id="cardPricing">
                        <div class="d-flex flex-column">
                            <h2 class="fw-bold">Growth</h2>
                            <h2 class="fw-bold">$<strong class="fs-1">79</strong>/mo</h2>
                            <p class="">Integer proin ac, lectus proin egestas ultricies.</p>
                            <ul class="list-unstyled">
                                <li class="list-item"><i class="bi bi-check-lg me-2 text-primary fw-bold fs-5"></i>100GB of storage</li> 
                                <li class="list-item my-2"><i class="bi bi-check-lg me-2 text-primary fw-bold fs-5"></i>Unlimited users</li>
                                <li class="list-item my-2"><i class="bi bi-check-lg me-2 text-primary fw-bold fs-5"></i>Unlimited tasks</li>
                                <li class="list-item my-2"><i class="bi bi-check-lg me-2 text-primary fw-bold fs-5"></i>24/7 support</li>
                                <li class="list-item my-2"><i class="bi bi-check-lg me-2 text-primary fw-bold fs-5"></i>Priority</li>
                            </ul>
                            <button type="button" class="btn btn-outline-primary btn-lg">Get Started</button>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Pricing Section-->
            
            <!--Start FAQ Section-->
            <div class="row my-5">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-7">
                        <h1 class="fw-bold">FAQ</h1>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <table class="table table-borderless">
                                    <tr>
                                        <th class="column-1"></th>
                                        <th class="column-2"></th>
                                      </tr>
                                    <tr>
                                        <td class="text-primary fw-bold">01</td>
                                        <td class="fw-bold"><a class="link-underline link-underline-opacity-0 text-black" data-bs-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse1">Maecenas efficitur scelerisque lorem?</a></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="collapse" id="collapse1">Nillam bibendum diam diam, maximus malesuada tortor volutpat sit amet. Curabitur volutpat feugiat tellus, sit amet faucibus massa vulputate lobortis. Vestibulum malesuada ex dolor,</td>
                                    </tr>
                                </table>
                            </li>
                            <li class="list-group-item">
                                <table class="table table-borderless">
                                    <tr>
                                        <th class="column-1"></th>
                                        <th class="column-2"></th>
                                      </tr>
                                    <tr>
                                        <td class="text-secondary fw-bold">02</td>
                                        <td class="fw-bold"><a class="link-underline link-underline-opacity-0 text-black" data-bs-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2">Pellentesque ultricies nulla sit amet ipsum kra pellentesque?</a></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="collapse" id="collapse2">Nillam bibendum diam diam, maximus malesuada tortor volutpat sit amet. Curabitur volutpat feugiat tellus, sit amet faucibus massa vulputate lobortis. Vestibulum malesuada ex dolor,</td>
                                    </tr>
                                </table>
                            </li>
                            <li class="list-group-item">
                                <table class="table table-borderless">
                                    <tr>
                                        <th class="column-1"></th>
                                        <th class="column-2"></th>
                                      </tr>
                                    <tr>
                                        <td class="text-secondary fw-bold">03</td>
                                        <td class="fw-bold"><a class="link-underline link-underline-opacity-0 text-black" data-bs-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3">Nullam bibendum diam diam, maximus malesuada?</a></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="collapse" id="collapse3">Nillam bibendum diam diam, maximus malesuada tortor volutpat sit amet. Curabitur volutpat feugiat tellus, sit amet faucibus massa vulputate lobortis. Vestibulum malesuada ex dolor,</td>
                                    </tr>
                                </table>
                            </li>
                            <li class="list-group-item">
                                <table class="table table-borderless">
                                    <tr>
                                        <th class="column-1"></th>
                                        <th class="column-2"></th>
                                      </tr>
                                    <tr>
                                        <td class="text-secondary fw-bold">04</td>
                                        <td class="fw-bold"><a class="link-underline link-underline-opacity-0 text-black" data-bs-toggle="collapse" href="#collapse4" aria-expanded="false" aria-controls="collapse4">Vivamus eleifend nec felis vel auctor?</a></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="collapse" id="collapse4">Nillam bibendum diam diam, maximus malesuada tortor volutpat sit amet. Curabitur volutpat feugiat tellus, sit amet faucibus massa vulputate lobortis. Vestibulum malesuada ex dolor,</td>
                                    </tr>
                                </table>
                            </li>
                            <li class="list-group-item">
                                <table class="table table-borderless">
                                    <tr>
                                        <th class="column-1"></th>
                                        <th class="column-2"></th>
                                      </tr>
                                    <tr>
                                        <td class="text-secondary fw-bold">05</td>
                                        <td class="fw-bold"><a class="link-underline link-underline-opacity-0 text-black" data-bs-toggle="collapse" href="#collapse5" aria-expanded="false" aria-controls="collapse5">Vivamus eleifend nec felis vel auctor?</a></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="collapse" id="collapse5">Nillam bibendum diam diam, maximus malesuada tortor volutpat sit amet. Curabitur volutpat feugiat tellus, sit amet faucibus massa vulputate lobortis. Vestibulum malesuada ex dolor,</td>
                                    </tr>
                                </table>
                            </li>
                          </ul>
                    </div>
                </div>
            </div>
            <!--End FAQ Section-->

            <!--Start Testiimonials Section-->
            <div class="row my-5">
                <div class="d-flex justify-content-center">
                    <h1 class="col-lg-9 display-5 fw-bold">Customer Testimonials</h1>
                </div>
                <article class="d-flex flex-wrap align-items-center justify-content-center testiimonial">
                    <!--Testiimonial 1-->
                    <div class="card col-lg-3 m-2">
                        <div class="card-header mt-4 border-0 d-flex flex-wrap">
                            <img class="align-self-center rounded-circle" src="img/user-comment1.jpg" width="70" height="70">
                            <div class="">
                                <p class="fw-bold mx-3">Breanna Parker</p>
                                <div class="d-flex flex-wrap align-items-center justify-content-center">
                                    <i class="bi bi-star-fill text-danger"></i>
                                    <i class="bi bi-star-fill text-danger"></i>
                                    <i class="bi bi-star-fill text-danger"></i>
                                    <i class="bi bi-star-fill text-danger"></i>
                                    <i class="bi bi-star-half text-danger"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col">
                                    <p class="bold">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut ornare gravida tempor. Nunc tristique libero eget nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testiimonial 2-->
                    <div class="card col-lg-3 m-2">
                        <div class="card-header mt-4 border-0 d-flex flex-wrap">
                            <img class="align-self-center rounded-circle" src="img/user-comment2.jpg" width="70" height="70">
                            <div class="">
                                <p class="fw-bold mx-3">Ana Oleynkova</p>
                                <div class="d-flex flex-wrap align-items-center justify-content-center">
                                    <i class="bi bi-star-fill text-danger"></i>
                                    <i class="bi bi-star-fill text-danger"></i>
                                    <i class="bi bi-star-fill text-danger"></i>
                                    <i class="bi bi-star-fill text-danger"></i>
                                    <i class="bi bi-star-half text-danger"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col">
                                    <p class="bold">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla in viverra leo. Vestibulum eleifend dictum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testiimonial 3-->
                    <div class="card col-lg-3 m-2">
                        <div class="card-header mt-4 border-0 d-flex flex-wrap">
                            <img class="align-self-center rounded-circle" src="img/user-comment3.jpg" width="70" height="70">
                            <div class="">
                                <p class="fw-bold mx-3">Andy Smith</p>
                                <div class="d-flex flex-wrap align-items-center justify-content-center">
                                    <i class="bi bi-star-fill text-danger"></i>
                                    <i class="bi bi-star-fill text-danger"></i>
                                    <i class="bi bi-star-fill text-danger"></i>
                                    <i class="bi bi-star-fill text-danger"></i>
                                    <i class="bi bi-star-half text-danger"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col">
                                    <p class="bold">Curabitur sed tincidunt dui. Suspendisse dignissim consequat enim eu feugiat. Suspendisse vehicula sem non enim tristique, in rhoncus nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <!--End Testiimonials Section-->
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