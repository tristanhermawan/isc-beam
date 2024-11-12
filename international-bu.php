    <?php
        require 'aheader.html';
    ?>
    <style type="text/css">
        .menux {
          perspective: 1000px;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .itemx {
          margin: 0 20px;
          cursor: pointer;
          transition: transform 0.5s;
        }

        .itemx:hover {
           transform: rotateY(0deg) scale(1.4);
        }

        @media (max-width: 768px) {
            .menux {
                display: flex;
                flex-direction: column;
            }

            .menux .col-lg-4 {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="home.php">ISC-BEAM</a>
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
                                    <a class="nav-link" href="more.php">More</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="registration.php">Registration</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="galleries.php">Galleries</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home">Exhibition<span class="sr-only">(current)</span></a>
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
    <section class="caviar-regular-page section-padding-100" style="justify-content: center; text-align: center; float:center;">
        <div class="row">
            <div class="col-12 menu-heading">
                <div class="section-heading text-center">
                    <h2>Vocational Virtual Exhibition</h2>
                </div>
            </div>
        </div>
        <div class="menux">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="itemx" id="item1" onclick="rotate('item1')">
                    <img src="img/galeri/1.png" alt="Image 1">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="itemx" id="item2" onclick="rotate('item2')">
                    <img src="img/galeri/2.png" alt="Image 2">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="itemx" id="item3" onclick="rotate('item3')">
                    <img src="img/galeri/3.png" alt="Image 3">
                </div>
            </div>
        </div>
    </section>

    <?php
        require 'afooter.html';
    ?>
    <script type="text/javascript">
        // function rotate(itemx) {
        //   let selectedItem = document.querySelector('.' + itemx);
        //   switch (itemx) {
        //     case 'item1':
        //         selectedItem.style.transform = "rotateX(180deg)";
        //       break;
        //     case 'item2':
        //         selectedItem.style.transform = "rotateY(90deg)";
        //       break;
        //     case 'item3':
        //         selectedItem.style.transform = "rotateY(180deg)";
        //       break;
        //     default:
        //         selectedItem.style.transform = "rotateX(180deg)";
        //       break;
        //   }
        // }
        function rotate(itemx) {
            let selectedItem = document.getElementById(itemx);
            switch (itemx) {
                case 'item1':
                    selectedItem.style.transform = "rotateX(80deg)";
                    break;
                case 'item2':
                    selectedItem.style.transform = "rotateX(80deg)";
                    break;
                case 'item3':
                    selectedItem.style.transform = "rotateX(80deg)";
                    break;
                default:
                    selectedItem.style.transform = "rotateX(80deg)";
                    break;
            }
        }
    </script>