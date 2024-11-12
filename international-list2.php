    <?php
        require 'aheader.html';
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-tfBGQ2OcZI4xNRqNjilQmVDyHM7DctGMbncuBJtS4rm3XgZCr8IzpoEkJLkgdw5V4yNJw1Iv0OcPxfStC/ubg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <style>
          #xbox {
            width: 100%;
            height: 90vh;
            border-radius: 50px;
          }
          .glide__wrapper {
            padding: 10vh 0;
          }
          .glide__track {
            overflow: visible;
            height: 90vh;
          }
          .glide__slide {
            -webkit-transition: all 200ms ease;
            transition: all 20ms ease;
            -webkit-transform-origin: 50% 50%;
                    transform-origin: 50% 50%;
            -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
          }
          .glide__slide.active {
            -webkit-transform: scale(1.02);
                    transform: scale(1.02);
          }
          .glide__slide.pre {
            -webkit-transform: perspective(50em) rotateY(15deg);
                    transform: perspective(50em) rotateY(15deg);
          }
          .glide__slide.following {
            -webkit-transform: perspective(50em) rotateY(-15deg);
                    transform: perspective(50em) rotateY(-15deg);
          }
          .glide--horizontal .glide__bullets {
            bottom: 25%;
          }

          #glide__arrows .glide__arrow {
              background-color: #ff8c42;
              color: #fff;
              border: none;
              padding: 10px 16px;
              border-radius: 60px;
              cursor: pointer;
              margin: 0 5px;
              font-weight: bold;
              font-size: 30px;
              font-family: 'Poppins', sans-serif;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 1); 
              opacity: 0.8;
          }

          #glide__arrows .glide__arrow:hover {
            background-color: #081781; 
          }

          .glide__wrapper {
            width: 100%;
            padding-top: 0px;
            padding-bottom: 0px;
            margin-top: 1px;
            margin-bottom: 1px;
          }

          .glide__slide {
            list-style: none;
            text-align: center;
            font-size: 12px;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            font-weight: bold;
            position: relative;
          }

          .image-container {
            position: relative;
            width: 100%;
            height: 70vh;
            border-radius: 50px;
            overflow: hidden;
            background-position: center;
            background-size: cover;
          }

          .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.1);
          }

          .image-info {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 1;
            background-color: rgba(255, 255, 255, 1); 
            padding: 20px;
            border-radius: 10px;
          }

          .icon {
            margin-right: 5px;
          }
    </style>
    <style>
        .xcontainer {
            text-align: center;
            padding: 20px;
        }

        .xbutton-panel {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .xbutton-panel button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            box-sizing: border-box;
            width: 100%;
            max-width: 100%;
            flex: 1 1 100%;
        }

        .xbutton-panel button:hover {
            background-color: darkorange;
            transform: scale(1.1);
        }

        .page-content {
            display: none;
        }

        .page-content.active {
            display: block;
        }

        @media (min-width: 600px) and (max-width: 899px) {
            .xbutton-panel button {
                flex: 1 1 calc(50% - 10px);
                max-width: calc(50% - 10px);
            }
        }

        @media (min-width: 900px) {
            .xbutton-panel button {
                flex: 1 1 calc(16.6667% - 10px);
                max-width: calc(16.6667% - 10px);
            }
        }
    </style>
    <style>
        .ycontainer {
            text-align: center;
            padding: 20px;
        }
        .ybutton-panel {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        .ybutton-panel button {
            padding: 10px 30px;
            font-size: 16px;
            cursor: pointer;
            background-color: #6495ed;
            font-weight: bold;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .ybutton-panel button:hover {
            background-color: darkorange;
            transform: scale(1.1);
        }
    </style>
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/jedrzejchalubek/glidejs/8eabfbb9/dist/css/glide.core.min.css'>
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/jedrzejchalubek/glidejs/8eabfbb9/dist/css/glide.theme.min.css'>
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
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="logout()">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="caviar-regular-page section-padding-100" style="justify-content: center; text-align: center; float:center;">
        <div class="xcontainer">
            <h2>Vocational Virtual Exhibition</h2>
            <div class="xbutton-panel">
                <button onclick="rotate('item1')">The Best Services Project</button>
                <button onclick="rotate('item2')">The Best Goods Project</button>
                <button onclick="rotate('item3')">The Best Project Idea</button>
                <button onclick="rotate('item4')">All Project</button>
            </div>
        </div>
        <div class="glide" id="Glide">
            <div class="glide__arrows" id="glide__arrows">
              <button class="glide__arrow prev" data-glide-dir="<"><i class="fa fa-backward" aria-hidden="true"></i> prev</button>
              <button class="glide__arrow next" data-glide-dir=">">next <i class="fa fa-forward" aria-hidden="true"></i></button>
            </div>
            <div class="glide__wrapper">
              <h2 style="color: #0b1ea0; text-align: center; ">The Best Project Idea</h2>
              <ul class="glide__track">
                <li class="glide__slide">
                  <div class="image-container" style="background-image: url('img/list/i1.png');">
                    <div class="image-overlay"></div>
                    <div class="image-info">
                      <div style="font-size: 24px; font-weight: bold; color:#4b5f71;">"Marketlead Will Bring You to The Best Seat"</div>
                      <div style="font-size: 18px; color:#0b1ea0;">1. Felisha Azzahra<br>2. Ghinal Ilmi Alqudduus<br>3. Muhammad Zidnan Nuuro<br>4. Ryan Delfasa<br><br></div>
                      <div class="ybutton-panel">
                        <button onclick="openurlx(1)"><i class="fa fa-whatsapp" aria-hidden="true"></i></button>
                        <button onclick="openurlx(2)"><i class="fa fa-youtube-play" aria-hidden="true"></i></button>
                        <button onclick="openurlx(3)">View Project</button>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="image-container" style="background-image: url('img/list/s2.png');">
                    <div class="image-overlay"></div>
                    <div class="image-info">
                      <div style="font-size: 24px; font-weight: bold; color:#4b5f71;">"Standard Operating Procedure Meeting Minutes"</div>
                      <div style="font-size: 18px; color:#0b1ea0;">1. Jennah Marsha Sanjaya<br>2. Thabita Salsabila Putri<br>3. Lutfiah Nur Azizah<br>4. Wulan Okatavia Febriyant<br><br></div>
                      <div class="ybutton-panel">
                        <button onclick="openurlx(4)"><i class="fa fa-whatsapp" aria-hidden="true"></i></button>
                        <button onclick="openurlx(5)"><i class="fa fa-youtube-play" aria-hidden="true"></i></button>
                        <button onclick="openurlx(6)">View Project</button>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="image-container" style="background-image: url('img/list/i3.png');">
                    <div class="image-overlay"></div>
                    <div class="image-info">
                      <div style="font-size: 24px; font-weight: bold; color:#4b5f71;">"Accounting System at Jakarta State University"</div>
                      <div style="font-size: 18px; color:#0b1ea0;">1. Asmila Agustina<br>2. Dewi Salsabila<br>3. Hany Rosalina<br>4. Sella Azzahra D.T<br><br></div>
                      <div class="ybutton-panel">
                        <button onclick="openurlx(7)"><i class="fa fa-whatsapp" aria-hidden="true"></i></button>
                        <button onclick="openurlx(8)"><i class="fa fa-youtube-play" aria-hidden="true"></i></button>
                        <button onclick="openurlx(9)">View Project</button>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <ul class="glide__bullets"></ul>
        </div>
    </section>
    <?php
        require 'afooter.html';
    ?>
    <script type="text/javascript">
      function rotate(itemx) {
        switch (itemx) {
          case 'item1':
              window.location.href = "international.php";
              break;
          case 'item2':
              window.location.href = "international-list1.php";
              break;
          case 'item3':
              window.location.href = "international-list2.php";
              break;
          case 'item4':
              window.location.href = "international-list3.php";
              break;
          default:
              window.location.href = "international-list3.php";
              break;
        }
      }

      function openurlx(cid){
        switch (cid) {
          case 1:
              window.open("https://wa.me//6289603588324"); 
              break;
          case 2:
              window.open("https://youtu.be/V086W2_S-Uo?feature=shared"); 
              break;
          case 3:
              window.open("https://drive.google.com/open?id=1PczxUINWpHdcA-0gsDCthXssVjohaKOO"); 
              break;
          case 4:
              window.open("https://wa.me//6281288438502"); 
              break;
          case 5:
              window.open("https://youtu.be/KgaWgdVrNOI?si=62RRaRG8PC00ARYu"); 
              break;
          case 6:
              window.open("https://drive.google.com/open?id=1pqmf95_1FDw_od8-4W_us4hyq3VDhXHy"); 
              break;
          case 7:
              window.open("https://wa.me//6281946666895"); 
              break;
          case 8:
              window.open("https://youtu.be/3xqtAhKcyU8?si=fsluyghdT4Vv9pdQ"); 
              break;
          case 9:
              window.open("https://drive.google.com/open?id=1s6XIfiVHOaJVjPu7z8ZWxskgbnfwk_FJ"); 
              break;
          default:
              window.open(""); 
              break;
        }
      }
    </script>
    <script src='https://cdn.rawgit.com/jedrzejchalubek/glidejs/8eabfbb9/dist/glide.min.js'></script>
    <script>
      $(document).ready(function(){
        cekmail();
        $('html,main').animate({scrollTop:$('.xcontainer').offset().top}, 1500);
      });

      function cekmail(){
        var email = sessionStorage.getItem('email');
        if(email === null) {
          window.location.href = 'form.php';
        }
      }

      function logout(){
        sessionStorage.removeItem('email');
        location.reload();
      }

      function coverflow(i, el) {
          el.removeClass('pre following')
          .nextAll()
              .removeClass('pre following')
              .addClass('following')
          .end()
          .prevAll()
              .removeClass('pre following')
              .addClass('pre');
      }
        
      $('#Glide').glide({
          type: 'carousel',
          startAt: 1,
          animationDuration: 500,
          paddings: '25%',
          swipeThreshold: false,
          afterInit: function (event) {
              coverflow(event.index, event.current);
          },
          afterTransition: function (event) {
              coverflow(event.index, event.current);
          }
      });
    </script>