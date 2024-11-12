    <?php
        require 'aheader.html';
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-tfBGQ2OcZI4xNRqNjilQmVDyHM7DctGMbncuBJtS4rm3XgZCr8IzpoEkJLkgdw5V4yNJw1Iv0OcPxfStC/ubg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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

        @media (max-width: 992px) {
            .search-bar {
                flex-direction: column;
            }

            #search-input,
            #search-btn {
                width: 100%;
                margin: 5px 0;
            }
        }

        .berita-judul {
            transition: color 0.3s ease;
            cursor: pointer; 
        }
    </style>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: justify; 
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
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
                flex: 1 1 calc(26.6667% - 10px);
                max-width: calc(26.6667% - 10px);
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
                                    <a class="nav-link" href="isc/202406/" target="_blank">Past Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="registration.php">Registration</a>
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
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h2>Vocational Virtual Exhibition</h2>
              <div class="xbutton-panel">
                  <button onclick="rotate('item1')">The Best Project</button>
                  <!-- <button onclick="rotate('item2')">The Best Goods Project</button>
                  <button onclick="rotate('item3')">The Best Project Idea</button> -->
                  <button onclick="rotate('item4')">All Project</button>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <h2 style="color: #0b1ea0; text-align: center; ">All Project</h2>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <button class="btn btn-warning" id="reload1" onclick="resethal()" style="float:center; font-size: 14px; color:#4682B4; font-weight: bold;"><i class="fa fa-refresh"></i> Reload Table </button>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
              <?php
                  $url = "https://spreadsheets.google.com/tq?key=1IzupMtixRTt7fVnabGCLvG3lBiS66r0x960ILmt-njU&gid=333045674&tq=SELECT%20B,M,L,N,P,O,R,S&tqx=out:json";
                  $json_data = file_get_contents($url);
                  if ($json_data === FALSE) {
                      die("Gagal mengambil data dari Google Sheets.");
                  }
                  $json_data = preg_replace('/^.*?({.*}).*$/s', '$1', $json_data);
                  $data = json_decode($json_data, true);
                  if ($data === NULL) {
                      die("Gagal mengurai data JSON: " . json_last_error_msg());
                  }
                  echo "<table id='example' class='table table-striped table-bordered table-responsive'>";
                  echo "<thead><tr><th>No</th><th>Name</th><th>University</th><th>Phone Number</th><th>Major</th><th>Product</th><th>Poster/Ebook</th><th>Youtube Link</th></tr></thead>";
                  echo "<tbody>";
                  $rows = $data['table']['rows'];
                  $no = 1;
                  foreach ($rows as $row) {
                      $a = isset($row['c'][0]['v']) ? $row['c'][0]['v'] : '';
                      $b = isset($row['c'][1]['v']) ? $row['c'][1]['v'] : '';
                      $c = isset($row['c'][2]['v']) ? $row['c'][2]['v'] : '';
                      $d = isset($row['c'][3]['v']) ? $row['c'][3]['v'] : '';
                      $e = isset($row['c'][4]['v']) ? $row['c'][4]['v'] : '';
                      $f = isset($row['c'][5]['v']) ? $row['c'][5]['v'] : '';
                      $g = isset($row['c'][6]['v']) ? $row['c'][6]['v'] : '';
                      $h = isset($row['c'][7]['v']) ? $row['c'][7]['v'] : '';

                      echo '<tr><td>' . $no++ . '</td><td>' . $a . '</td><td>' . $b . '</td><td>' . $c . '</td><td>' . $d . '</td><td>- ' . $f . ' -<br>' . $e . '</td><td><div class="ybutton-panel"><button onclick="openurlx(\'' . $g . '\')"><i class="fa fa-book" aria-hidden="true"></i> Poster/Ebook</button></div></td><td><div class="ybutton-panel"><button onclick="openurlx(\'' . $h . '\')"><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</button></div></td></tr>';
                  }
                  echo "</tbody></table>";
              ?>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
        </div>
    </section>
    <?php
        require 'afooter.html';
    ?>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          //cekmail();
          $('html,main').animate({scrollTop:$('.xbutton-panel').offset().top}, 1500);
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
          window.open(cid);
        }
    </script>
    <script>
      $(document).ready(function() {
        $('#example').DataTable( {
            "processing": true,
            "pageLength": true,
            "paging": true,
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
              {
                extend: "copy",
                    className: "btn-sm"
                  },
                  {
                    extend: "csv",
                    className: "btn-sm"
                  },
                  {
                    extend: "excel",
                    className: "btn-sm"
                  },
                  {
                    extend: "pdf",
                    className: "btn-sm"
                  },
                  {
                    extend: "print",
                    className: "btn-sm"
                  },
                  ],
            "pageLength": 10,
            "language": {
            "emptyTable": "Tidak ada data.."
            },
            "order": [
              [0, "asc"]
            ]
            } );
        } 
      );

      function resethal(){
        location.reload();
      }
    </script>