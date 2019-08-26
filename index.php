<!-- HTML version specified in header -->
<?php 
    $title = "Index";
    include_once('includes/header.php');
?>
    <!-- About Us
         Seats Pricing
         Now Showing
        
        just want to make sure that 
        everyone understands that 
        assignment 2 asks you to develop
        a SINGLE page (ie just index.php) 
        and the navigation links are to
        take the customer to sections 
        inside the main element of 
        the index.php page.
        -->
    <body>
        <?php
            include_once('includes/logo.php');
            include_once('includes/nav.php');
        ?>
        <div class="parallax">
            <main>
                <div class="nav-seperator"></div>
                <section class="bgimg-1">
                    <h1>Now Showing</h1>
                    <!-- <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="card">
                                    <div class="card-header">
                                        Avengers: Endgame
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                            2
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                            3
                            </div>
                            <div class="col-sm">
                            4
                            </div>
                        </div>
                    </div> -->
                    <div class="card-group">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Panel title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                            <small class="text-muted">Last updated 5 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Panel title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Panel title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                            <small class="text-muted">Last updated 1 min ago</small>
                            </div>
                        </div>
                        </div>
                </section>
                <div style="position:relative;">
                    <!-- <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"> -->
                    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
                    </div>
                </div>
                <div class="section-seperator"></div>
                <section class="bgimg-2">
                    <h2>Seats Pricing</h2>
                    <p>This is section two</p>
                </section>
                <div style="position:relative;">
                    <!-- <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"> -->
                    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
                    </div>
                </div>
                <div class="section-seperator"></div>
                <section class="bgimg-3">
                    <a name="about"><h1 color="#FFFFFF">About Us</h1></a>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                            <p>The Lunardo Cinema has a just made a 
                                grand come back for its re-opening! After
                                long and hardworking hours for months on end, we have
                                extensively improved and renovated almost every
                                feature that we offer!</p>
                            </div>
                            <div class="col-sm">
                                <img src="media/about-us1.jpg" class="img-thumbnail" alt="New Cinema" width=500px height=343px>
                            </div>
                        </div>
                </section>
            </main>
        </div>
    </body>
<?php include_once('includes/footer.php'); ?>