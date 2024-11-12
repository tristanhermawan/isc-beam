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
      .news-item {
        display: flex;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #f3f5fa;
      }

      .news-img {
        width: 30%;
        object-fit: cover;
        object-position: left;
        transition: transform 0.3s ease-in-out;
        margin: 5px;
      }

      .news-img:hover {
        transform: scale(1.1);
      }

      .news-details {
        width: 70%;
        padding: 15px;
        margin: 5;
        padding-top: 0;
        background-color: #ffffff;
      }

      .news-details h3 {
        margin-top: 0;
      }

      .additional-info {
        display: flex;
        justify-content: space-between;
      }

      @media (max-width: 768px) {
        .news-item {
          flex-direction: column;
        }

        .news-img {
          width: 100%;
        }

        .news-details {
          width: 100%;
          padding: 5px;
          margin: 5px;
          background-color: #ffffff;
          font-size: 12px;
          font-family: 'Poppins', sans-serif;
          font-weight: bold;
        }
      }
    </style>
    <style>
        .search-container {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            margin-bottom: 20px;
        }

        .search-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .search-container {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            margin-bottom: 20px;
        }

        .search-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #search-input {
            width: 70%;
            padding: 10px;
            margin-right: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        #search-btn {
            width: 30%;
            padding: 10px 15px;
            border: none;
            background-color: #1e56dc;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Untuk layar HP dan Tablet */
        @media (max-width: 992px) {
            .search-bar {
                flex-direction: column;
            }

            #search-input,
            #search-btn {
                width: 100%;
                margin: 5px 0; /* Menambahkan margin agar tombol terpisah */
            }
        }

        /* Style tambahan untuk judul berita */
        .berita-judul {
            transition: color 0.3s ease; /* Efek transisi warna tulisan */
            cursor: pointer; 
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
            margin-bottom: 20px;
        }
        .xbutton-panel button {
            padding: 20px 80px;
            font-size: 16px;
            cursor: pointer;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
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
        <div class="xcontainer">
            <h2>Vocational Virtual Exhibition</h2>
            <div class="xbutton-panel">
                <button onclick="rotate('item1')">Service</button>
                <button onclick="rotate('item2')">Goods</button>
                <button onclick="rotate('item3')">Project Ideas</button>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 style="color: #0b1ea0; text-align: center; ">Service</h2>
                <!-- Kolom Pencarian -->
                <div class="search-container">
                    <div class="search-bar">
                        <input type="text" id="search-input" placeholder="Search for works..." class="search-input">
                        <button id="search-btn" class="search-btn"><i class="fa fa-search"></i> Search </button>
                    </div>
                    <br>
                </div>
                <!-- Daftar List Berita -->
                <div class="row news-list" id="newsList">
                  <!-- ... Daftar berita ... -->
                </div>
            </div>
        </div>
        </div>
    </section>

    <?php
        require 'afooter.html';
    ?>
    <script type="text/javascript">
        function rotate(itemx) {
            switch (itemx) {
                case 'item1':
                    window.location.href = "international-list1.php";
                    break;
                case 'item2':
                    window.location.href = "international-list2.php";
                    break;
                case 'item3':
                    window.location.href = "international.php";
                    break;
                default:
                    window.location.href = "international.php";
                    break;
            }
        }
    </script>
    <script>
        // Data Berita
        const berita = [
            {
                judul: 'Services 1',
                ringkasan: 'Di lingkungan produksi pangan olahan, AMR dapat terjadi akibat penggunaan antibiotik yang tidak sesuai dengan ketentuan dan faktor lingkungan yang tercemar. '
            },
            {
                judul: 'Services 2',
                ringkasan: 'Mengingat besarnya potensi AMR pada lingkungan produksi pangan, pengendalian pada pangan dilakukan secara bersama.'
            },
            {
                judul: 'Services 3',
                ringkasan: 'Pembahasan dalam rangka penyusunan pedoman tersebut telah sampai kepada tahapan konsultasi publik yang merupakan salah satu tahapan yang harus dilaksanakan'
            },
            {
                judul: 'Services 4',
                ringkasan: 'Pembahasan dalam rangka penyusunan pedoman tersebut telah sampai kepada tahapan konsultasi publik yang merupakan salah satu tahapan yang harus dilaksanakan'
            }
            // Tambahkan berita lainnya di sini
        ];

        function tampilkanBerita(beritaArr) {
          const newsList = document.getElementById('newsList');
          newsList.innerHTML = '';

          beritaArr.forEach(function (berita, index) {
              const newsItem = document.createElement('div');
              newsItem.classList.add('col-lg-6', 'col-md-6', 'col-sm-12', 'col-xs-12', 'news-item');

              newsItem.innerHTML = `
                  <div class="news-item">
                      <br>
                      <img src="img/awards-img/log1.png" alt="Gambar Berita ${index + 1}" class="img-fluid news-img" data-id="${index + 1}">
                      <div class="news-details">
                          <h3 class="berita-judul">${berita.judul}</h3>
                          <p>${berita.ringkasan}</p>
                      </div>
                  </div>
              `;

              newsList.appendChild(newsItem);

              // Menambahkan event listener untuk setiap judul berita
              const judulBerita = newsItem.querySelector('.berita-judul');
              judulBerita.addEventListener('mouseenter', function () {
                  judulBerita.style.color = '#1e56dc'; // Mengubah warna tulisan menjadi biru ketika kursor mendekati
              });

              judulBerita.addEventListener('mouseleave', function () {
                  judulBerita.style.color = ''; // Mengembalikan warna tulisan ke semula setelah kursor meninggalkan judul berita
              });
          });
        }


        // Event listener untuk pencarian saat tombol 'Cari' ditekan
        document.getElementById('search-btn').addEventListener('click', function () {
            const searchTerm = document.getElementById('search-input').value.toLowerCase();
            const filteredBerita = berita.filter(function (berita) {
                return berita.judul.toLowerCase().includes(searchTerm) || berita.ringkasan.toLowerCase().includes(searchTerm);
            });

            tampilkanBerita(filteredBerita);
        });

        // Tampilkan berita awal saat halaman dimuat
        tampilkanBerita(berita);
    </script>