<?php 
    $title = "Index";
    include_once('includes/header.php');
?>
    <body>
        <header>
            <div>
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
                <section id="section-one">
                    <h2>Section 1</h2>
                    <p>This is section one</p>
                </section>
                <div class="section-seperator"></div>
                <section id="section-two">
                    <h2>Section 2</h2>
                    <p>This is section two</p>
                </section>
                <div class="section-seperator"></div>
                <section id="section-three">
                    <h2>Section 3</h2>
                    <p>This is section three</p>
                </section>
            </main>
        </div>
    </body>
<?php include_once('includes/footer.php'); ?>