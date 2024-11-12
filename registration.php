    <?php
        require 'aheader.html';
    ?>
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="home.php"><img src="img/logisc.png" style="max-width: 30vh;" alt="" title="" /></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="program.php">Program</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="papers.php">Papers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="speakers.php">Speakers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="isc/202406/" target="_blank">Past Events</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home">Registration<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="form.php">Exhibition</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="abstract.php">Review</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://journal.unj.ac.id/unj/index.php/isc-beam/" target="_blank">Procceding</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="caviar-food-menu section-padding-150 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="food-menu-title">
                        <h2>2024</h2>
                    </div>
                </div>

                <div class="col-10" style="justify-content: center; text-align: center; float:center;">
                    <div class="caviar-projects-menu">
                        <img src="img/awards-img/unjlogo.png" alt="" style="width:20%;height:20%;">
                        <div class="text-center portfolio-menu">
                            <button class="active" data-filter="*"><h2>@ISC-BEAM 2024</h2></button>
                        </div>
                    </div>
                    <div class="caviar-menu-slides owl-carousel clearfix" style="justify-content: center; text-align: center; float:center;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn caviar-btn" onclick="window.open('https://bit.ly/3rdisc-beam', '_blank')"><span></span> Registration for Full Paper & Colloquium </button><br><br>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn caviar-btn" onclick="window.open('https://docs.google.com/document/d/1-4BYJvqMHvtFr32Y0qSgqKu8cHNvGVxF/edit?usp=drive_link&ouid=101033536771475131585&rtpof=true&sd=true', '_blank')"><span></span> Full Paper Template </button><br><br>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn caviar-btn" onclick="window.open('https://docs.google.com/document/d/1M6QIaHl4lk-267FSlwt7ddlNo-LdHnfg1N4k_kns0RA/edit?usp=sharing', '_blank')"><span></span> e-Poster </button><br><br>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn caviar-btn" onclick="window.open('https://journal.unj.ac.id/unj/index.php/isc-beam/', '_blank')"><span></span> Proceeding ISC-BEAM </button><br><br>
                            </div>
			                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn caviar-btn" onclick="window.open('', '_blank')"><span></span> Payment confirmation </button><br><br>
                            </div>
			                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn caviar-btn" onclick="window.open('', '_blank')"><span></span> Flowchart </button><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        require 'afooter.html';
    ?>