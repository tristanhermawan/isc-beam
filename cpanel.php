<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/core-img/unjfe.ico" type="image/ico" />
  <title>Data Tabel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
        <h2 class="text-center mb-4">Data Registrasi</h2>
        <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "db_unj";
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
          }
          $sql = "SELECT nama, email, wa, instansi, asal, tdi FROM form ORDER BY tdi DESC";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            echo "<table id='example' class='table table-striped table-bordered table-responsive'>";
            echo "<thead><tr><th>No</th><th>Name</th><th>Email</th><th>WhatsApp</th><th>Organization</th><th>Country of Origin</th><th>Date Time</th></tr></thead>";
            echo "<tbody>";
            $no = 1;
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $no++ . "</td><td>".$row["nama"]."</td><td>".$row["email"]."</td><td>".$row["wa"]."</td><td>".$row["instansi"]."</td><td>".$row["asal"]."</td><td>".$row["tdi"]."</td></tr>";
            }
            echo "</tbody></table>";
          } else {
            echo "0 hasil";
          }
          $conn->close();
        ?>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
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
          "pageLength": 5,
          "language": {
          "emptyTable": "Tidak ada data.."
          },
          "order": [
            [0, "asc"]
          ]
          } );
      } );
  </script>
</body>
</html>


      