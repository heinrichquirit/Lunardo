<?php 
    $title = "Index";
    include_once('includes/header.php');
?>
    <body>
        <header>
            <div id="header-logo">
                <img src='media/lunar.png' alt='Lunardo logo' height=120/>
                <h1>Lunardo</h1>
            </div>
        </header>
        <nav>
            <ul>
                <li><a>About Us</a></li>
                <li><a>Prices</a></li>
                <li><a>Now Showing</a></li>
            </ul>
        </nav>
        <div class="parallax">
            <main>
                <div class="nav-seperator"></div>
                <section class="bgimg-1">
                    <h2>Section 1</h2>
                    <p>This is section one</p>
                </section>
                <div style="position:relative;">
                    <!-- <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"> -->
                    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
                    </div>
                </div>
                <div class="section-seperator"></div>
                <section class="bgimg-2">
                    <h2>Section 2</h2>
                    <p>This is section two</p>
                </section>
                <div style="position:relative;">
                    <!-- <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"> -->
                    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
                    </div>
                </div>

                <div class="section-seperator"></div>
                <section class="bgimg-3">
                    <h2>Section 3</h2>
                    <p>This is section three</p>
                </section>
            </main>
        </div>
    </body>
<?php include_once('includes/footer.php'); ?>