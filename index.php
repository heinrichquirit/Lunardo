<!-- HTML version specified in header -->
<?php 
    $title = "Index";
    include_once('includes/header.php');
?>
    <body>
        <?php
            include_once('includes/logo.php');
            include_once('includes/nav.php');
        ?>
        <div class="parallax">
            <main>
                <div class="nav-seperator"></div>
                <section id="about-us">
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
                                <img src="media/about-us-room.jpg" class="img-thumbnail" alt="New Cinema" width=500px height=343px/>
                            </div>
                        </div>
                </section>
                <div class="section-seperator" style="text-align: center;">
                    <p>Seperator 1</p>
                </div>
                <section id="pricing">
                    <a name="pricing"><h1 style="color: #51585E;">Seats Pricing</h1></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Seat Type</th>
                                <th>Seat Code</th>
                                <th>All Day (Mon-Wed), 12PM Weekdays</th>
                                <th>All other times</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Standard Adult</th>
                                <td>STA</td>
                                <td>$14.00</td>
                                <td>$19.80</td>
                            </tr>
                            <tr>
                                <th>Standard Concession</th>
                                <td>STP</td>
                                <td>$12.50</td>
                                <td>$17.50</td>
                            </tr>
                            <tr>
                                <th>Standard Child</th>
                                <td>STC</td>
                                <td>$11.00</td>
                                <td>$15.30</td>
                            </tr>
                            <tr>
                                <th>First Class Adult</th>
                                <td>FCA</td>
                                <td>$24.00</td>
                                <td>$30.00</td>
                            </tr>
                            <tr>
                                <th>First Class Concession</th>
                                <td>FCP</td>
                                <td>$22.50</td>
                                <td>$27.00</td>
                            </tr>
                            <tr>
                                <th>First Class Child</th>
                                <td>FCC</td>
                                <td>$21.00</td>
                                <td>$24.00</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <div style="position:relative;">
                    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
                    </div>
                </div>
                <div class="section-seperator"></div>
                <section id="now-showing">
                    <a name="now-showing"><h1 style="color: #FFFFFF;">Now Showing</h1></a>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="movie-panel">
                                    <div class="movie-poster">
                                        <img src="media/movie-poster-avengers.jpg"/>
                                    </div>
                                    <div class="movie-title">
                                        Avengers: Endgame (M)
                                        <br/><br/>
                                    </div>
                                    <div class="movie-times">
                                        Mon: --:--<br/>
                                        Tue: --:--<br/>
                                        Wed: 9:00pm - 12:30am<br/>
                                        Thu: 9:00pm - 12:30am<br/>
                                        Fri: 9:00pm - 12:30am<br/>
                                        Sat: 6:00pm - 9:30pm<br/>
                                        Sun: 6:00pm - 9:30pm<br/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="movie-panel">
                                    <div class="movie-poster">
                                        <img src="media/movie-poster-wedding.jpg"/>
                                    </div>
                                    <div class="movie-title">
                                        Top Ending Wedding (MA)
                                        <br/><br/>
                                    </div>
                                    <div class="movie-times">
                                        Mon: 6:00pm - 8:15pm<br/>
                                        Tue: 6:00pm - 8:15pm<br/>
                                        Wed: --:--<br/>
                                        Thu: --:--<br/>
                                        Fri: --:--<br/>
                                        Sat: 3:00pm - 5:15pm<br/>
                                        Sun: 3:00pm - 5:15pm<br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-6">
                                <div class="movie-panel">
                                    <div class="movie-poster">
                                        <img src="media/movie-poster-dumbo.jpg"/>
                                    </div>
                                    <div class="movie-title">
                                        Dumbo The Elephant (G)
                                        <br/><br/>
                                    </div>
                                    <div class="movie-times">
                                        Mon: 12:00pm - 1:45pm<br/>
                                        Tue: 12:00pm - 1:45pm<br/>
                                        Wed: 6:00pm - 7:45pm<br/>
                                        Thu: 6:00pm - 7:45pm<br/>
                                        Fri: 6:00pm - 7:45pm<br/>
                                        Sat: 12:00pm - 1:45pm<br/>
                                        Sun: 12:00pm - 1:45pm<br/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="movie-panel">
                                    <div class="movie-poster">
                                        <img src="media/movie-poster-prince.jpg"/>
                                    </div>
                                    <div class="movie-title">
                                        The Happy Prince (R)
                                        <br/><br/>
                                    </div>
                                    <div class="movie-times">
                                        Mon: --:--<br/>
                                        Tue: --:--<br/>
                                        Wed: 12:00pm - 2:30am<br/>
                                        Thu: 12:00pm - 2:30am<br/>
                                        Fri: 12:00pm - 2:30am<br/>
                                        Sat: 9:00pm - 11:30pm<br/>
                                        Sun: 9:00pm - 11:30pm<br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
<?php include_once('includes/footer.php'); ?>