    <?php
        require 'aheader.html';
    ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                                <li class="nav-item  active">
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
    <section class="caviar-regular-page section-padding-100">
        <div class="container">
            <div class="row justify-content-center" style="justify-content: center; text-align: center; float:center;">
                <div class="col-12 col-md-12">
                    <div class="post-title">
                        <h2>📃 International Exhibition Vocational Attendance Form </h2>
                    </div>
                    <br><br>
                    <form id="myForm" action="" method="POST">
                        <label for="nama">Name:</label><br>
                        <input type="text" id="nama" name="nama" required><br>
                        <label for="instansi">Organization:</label><br>
                        <input type="text" id="instansi" name="instansi" required><br>
                        <label for="asal">Country of Origin:</label><br>
                        <input type="text" id="asal" name="asal" required><br>
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" required><br>
                        <label for="wa">WhatsApp:</label><br>
                        <div style="width: 100%;">
                            <select id="kode" name="kode" required style="width: 100%; padding: 5px;">
                            </select>
                            <input type="number" id="wa" name="wa" required style="width: 100%; padding: 5px;"><br><br>
                        </div>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
        require 'afooter.html';
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
    <script>
        function populateCountryCodes() {
            const countryCodes = [
                { code: '+1', name: 'United States' },
                { code: '+44', name: 'United Kingdom' },
                { code: '+91', name: 'India' },
                { code: '+81', name: 'Japan' },
                { code: '+62', name: 'Indonesia' },
                { code: '+86', name: 'China' },
                { code: '+49', name: 'Germany' },
                { code: '+33', name: 'France' },
                { code: '+55', name: 'Brazil' },
                { code: '+61', name: 'Australia' },
                { code: '+7', name: 'Russia' },
                { code: '+34', name: 'Spain' },
                { code: '+39', name: 'Italy' },
                { code: '+52', name: 'Mexico' },
                { code: '+27', name: 'South Africa' },
                { code: '+82', name: 'South Korea' },
                { code: '+90', name: 'Turkey' },
                { code: '+46', name: 'Sweden' },
                { code: '+31', name: 'Netherlands' },
                { code: '+47', name: 'Norway' },
                { code: '+41', name: 'Switzerland' },
                { code: '+48', name: 'Poland' },
                { code: '+351', name: 'Portugal' },
                { code: '+32', name: 'Belgium' },
                { code: '+36', name: 'Hungary' },
                { code: '+30', name: 'Greece' },
                { code: '+420', name: 'Czech Republic' },
                { code: '+386', name: 'Slovenia' },
                { code: '+385', name: 'Croatia' },
                { code: '+354', name: 'Iceland' },
                { code: '+353', name: 'Ireland' },
                { code: '+372', name: 'Estonia' },
                { code: '+371', name: 'Latvia' },
                { code: '+370', name: 'Lithuania' },
                { code: '+45', name: 'Denmark' },
                { code: '+358', name: 'Finland' },
                { code: '+0', name: 'Other' },
                { code: '+64', name: 'New Zealand' },
                { code: '+66', name: 'Thailand' },
                { code: '+84', name: 'Vietnam' },
                { code: '+63', name: 'Philippines' },
                { code: '+65', name: 'Singapore' },
                { code: '+60', name: 'Malaysia' },
                { code: '+95', name: 'Myanmar' },
                { code: '+856', name: 'Laos' },
                { code: '+855', name: 'Cambodia' },
                { code: '+880', name: 'Bangladesh' },
                { code: '+977', name: 'Nepal' },
                { code: '+94', name: 'Sri Lanka' },
                { code: '+93', name: 'Afghanistan' },
                { code: '+98', name: 'Iran' },
                { code: '+964', name: 'Iraq' },
                { code: '+962', name: 'Jordan' },
                { code: '+972', name: 'Israel' },
                { code: '+968', name: 'Oman' },
                { code: '+963', name: 'Syria' },
                { code: '+961', name: 'Lebanon' },
                { code: '+966', name: 'Saudi Arabia' },
                { code: '+973', name: 'Bahrain' },
                { code: '+974', name: 'Qatar' },
                { code: '+965', name: 'Kuwait' },
                { code: '+971', name: 'United Arab Emirates' },
                { code: '+92', name: 'Pakistan' },
                { code: '+20', name: 'Egypt' },
                { code: '+212', name: 'Morocco' },
                { code: '+213', name: 'Algeria' },
                { code: '+216', name: 'Tunisia' },
                { code: '+218', name: 'Libya' },
                { code: '+249', name: 'Sudan' },
                { code: '+254', name: 'Kenya' },
                { code: '+255', name: 'Tanzania' },
                { code: '+256', name: 'Uganda' },
                { code: '+260', name: 'Zambia' },
                { code: '+263', name: 'Zimbabwe' },
                { code: '+267', name: 'Botswana' },
                { code: '+232', name: 'Sierra Leone' },
                { code: '+237', name: 'Cameroon' },
                { code: '+233', name: 'Ghana' },
                { code: '+234', name: 'Nigeria' },
                { code: '+355', name: 'Albania' },
                { code: '+1684', name: 'American Samoa' },
                { code: '+376', name: 'Andorra' },
                { code: '+244', name: 'Angola' },
                { code: '+1264', name: 'Anguilla' },
                { code: '+672', name: 'Antarctica' },
                { code: '+1268', name: 'Antigua and Barbuda' },
                { code: '+54', name: 'Argentina' },
                { code: '+374', name: 'Armenia' },
                { code: '+297', name: 'Aruba' },
                { code: '+43', name: 'Austria' },
                { code: '+994', name: 'Azerbaijan' },
                { code: '+1242', name: 'Bahamas' },
                { code: '+1246', name: 'Barbados' },
                { code: '+375', name: 'Belarus' },
                { code: '+501', name: 'Belize' },
                { code: '+229', name: 'Benin' },
                { code: '+1441', name: 'Bermuda' },
                { code: '+975', name: 'Bhutan' },
                { code: '+591', name: 'Bolivia' },
                { code: '+387', name: 'Bosnia and Herzegovina' },
                { code: '+246', name: 'British Indian Ocean Territory' },
                { code: '+673', name: 'Brunei Darussalam' },
                { code: '+359', name: 'Bulgaria' },
                { code: '+226', name: 'Burkina Faso' },
                { code: '+257', name: 'Burundi' },
                { code: '+1', name: 'Canada' },
                { code: '+238', name: 'Cape Verde' },
                { code: '+1345', name: 'Cayman Islands' },
                { code: '+236', name: 'Central African Republic' },
                { code: '+235', name: 'Chad' },
                { code: '+56', name: 'Chile' },
                { code: '+61', name: 'Christmas Island' },
                { code: '+672', name: 'Cocos (Keeling) Islands' },
                { code: '+57', name: 'Colombia' },
                { code: '+269', name: 'Comoros' },
                { code: '+242', name: 'Congo' },
                { code: '+243', name: 'Congo, Democratic Republic of the' },
                { code: '+682', name: 'Cook Islands' },
                { code: '+506', name: 'Costa Rica' },
                { code: '+53', name: 'Cuba' },
                { code: '+357', name: 'Cyprus' },
                { code: '+253', name: 'Djibouti' },
                { code: '+1767', name: 'Dominica' },
                { code: '+1849', name: 'Dominican Republic' },
                { code: '+593', name: 'Ecuador' },
                { code: '+503', name: 'El Salvador' },
                { code: '+240', name: 'Equatorial Guinea' },
                { code: '+291', name: 'Eritrea' },
                { code: '+251', name: 'Ethiopia' },
                { code: '+500', name: 'Falkland Islands (Malvinas)' },
                { code: '+298', name: 'Faroe Islands' },
                { code: '+679', name: 'Fiji' },
                { code: '+594', name: 'French Guiana' },
                { code: '+689', name: 'French Polynesia' },
                { code: '+241', name: 'Gabon' },
                { code: '+220', name: 'Gambia' },
                { code: '+995', name: 'Georgia' },
                { code: '+350', name: 'Gibraltar' },
                { code: '+299', name: 'Greenland' },
                { code: '+1473', name: 'Grenada' },
                { code: '+590', name: 'Guadeloupe' },
                { code: '+1671', name: 'Guam' },
                { code: '+502', name: 'Guatemala' },
                { code: '+224', name: 'Guinea' },
                { code: '+245', name: 'Guinea-Bissau' },
                { code: '+592', name: 'Guyana' },
                { code: '+509', name: 'Haiti' },
                { code: '+504', name: 'Honduras' },
                { code: '+852', name: 'Hong Kong' },
                { code: '+354', name: 'Iceland' },
                { code: '+964', name: 'Iraq' },
                { code: '+353', name: 'Ireland' },
                { code: '+972', name: 'Israel' },
                { code: '+81', name: 'Japan' },
                { code: '+962', name: 'Jordan' },
                { code: '+7', name: 'Kazakhstan' },
                { code: '+254', name: 'Kenya' },
                { code: '+686', name: 'Kiribati' },
                { code: '+383', name: 'Kosovo' },
                { code: '+965', name: 'Kuwait' },
                { code: '+996', name: 'Kyrgyzstan' },
                { code: '+856', name: 'Laos' },
                { code: '+371', name: 'Latvia' },
                { code: '+961', name: 'Lebanon' },
                { code: '+266', name: 'Lesotho' },
                { code: '+231', name: 'Liberia' },
                { code: '+218', name: 'Libya' },
                { code: '+423', name: 'Liechtenstein' },
                { code: '+370', name: 'Lithuania' },
                { code: '+352', name: 'Luxembourg' },
                { code: '+853', name: 'Macao' },
                { code: '+389', name: 'Macedonia, The Former Yugoslav Republic of' },
                { code: '+261', name: 'Madagascar' },
                { code: '+265', name: 'Malawi' },
                { code: '+60', name: 'Malaysia' },
                { code: '+960', name: 'Maldives' },
                { code: '+223', name: 'Mali' },
                { code: '+356', name: 'Malta' },
                { code: '+692', name: 'Marshall Islands' },
                { code: '+596', name: 'Martinique' },
                { code: '+222', name: 'Mauritania' },
                { code: '+230', name: 'Mauritius' },
                { code: '+262', name: 'Mayotte' },
                { code: '+52', name: 'Mexico' },
                { code: '+691', name: 'Micronesia, Federated States of' },
                { code: '+373', name: 'Moldova, Republic of' },
                { code: '+377', name: 'Monaco' },
                { code: '+976', name: 'Mongolia' },
                { code: '+382', name: 'Montenegro' },
                { code: '+1664', name: 'Montserrat' },
                { code: '+212', name: 'Morocco' },
                { code: '+258', name: 'Mozambique' },
                { code: '+95', name: 'Myanmar' },
                { code: '+264', name: 'Namibia' },
                { code: '+674', name: 'Nauru' },
                { code: '+977', name: 'Nepal' },
                { code: '+31', name: 'Netherlands' },
                { code: '+687', name: 'New Caledonia' },
                { code: '+64', name: 'New Zealand' },
                { code: '+505', name: 'Nicaragua' },
                { code: '+227', name: 'Niger' },
                { code: '+234', name: 'Nigeria' },
                { code: '+683', name: 'Niue' },
                { code: '+672', name: 'Norfolk Island' },
                { code: '+47', name: 'Norway' },
                { code: '+968', name: 'Oman' },
                { code: '+92', name: 'Pakistan' },
                { code: '+680', name: 'Palau' },
                { code: '+970', name: 'Palestinian Territory, Occupied' },
                { code: '+507', name: 'Panama' },
                { code: '+675', name: 'Papua New Guinea' },
                { code: '+595', name: 'Paraguay' },
                { code: '+51', name: 'Peru' },
                { code: '+63', name: 'Philippines' },
                { code: '+48', name: 'Poland' },
                { code: '+351', name: 'Portugal' },
                { code: '+974', name: 'Qatar' },
                { code: '+242', name: 'Republic of the Congo' },
                { code: '+262', name: 'Reunion' },
                { code: '+40', name: 'Romania' },
                { code: '+7', name: 'Russia' },
                { code: '+250', name: 'Rwanda' },
                { code: '+590', name: 'Saint Barthelemy' },
                { code: '+290', name: 'Saint Helena, Ascension and Tristan Da Cunha' },
                { code: '+1869', name: 'Saint Kitts and Nevis' },
                { code: '+1758', name: 'Saint Lucia' },
                { code: '+590', name: 'Saint Martin' },
                { code: '+508', name: 'Saint Pierre and Miquelon' },
                { code: '+1784', name: 'Saint Vincent and the Grenadines' },
                { code: '+685', name: 'Samoa' },
                { code: '+378', name: 'San Marino' },
                { code: '+239', name: 'Sao Tome and Principe' },
                { code: '+966', name: 'Saudi Arabia' },
                { code: '+221', name: 'Senegal' },
                { code: '+381', name: 'Serbia' },
                { code: '+248', name: 'Seychelles' },
                { code: '+232', name: 'Sierra Leone' },
                { code: '+65', name: 'Singapore' },
                { code: '+421', name: 'Slovakia' },
                { code: '+386', name: 'Slovenia' },
                { code: '+677', name: 'Solomon Islands' },
                { code: '+252', name: 'Somalia' },
                { code: '+27', name: 'South Africa' },
                { code: '+500', name: 'South Georgia and the South Sandwich Islands' },
                { code: '+211', name: 'South Sudan' },
                { code: '+34', name: 'Spain' },
                { code: '+94', name: 'Sri Lanka' },
                { code: '+249', name: 'Sudan' },
                { code: '+597', name: 'Suriname' },
                { code: '+47', name: 'Svalbard and Jan Mayen' },
                { code: '+268', name: 'Swaziland' },
                { code: '+46', name: 'Sweden' },
                { code: '+41', name: 'Switzerland' },
                { code: '+963', name: 'Syrian Arab Republic' },
                { code: '+886', name: 'Taiwan, Province of China' },
                { code: '+992', name: 'Tajikistan' },
                { code: '+255', name: 'Tanzania, United Republic of' },
                { code: '+66', name: 'Thailand' },
                { code: '+670', name: 'Timor-Leste' },
                { code: '+228', name: 'Togo' },
                { code: '+690', name: 'Tokelau' },
                { code: '+676', name: 'Tonga' },
                { code: '+1868', name: 'Trinidad and Tobago' },
                { code: '+216', name: 'Tunisia' },
                { code: '+90', name: 'Turkey' },
                { code: '+993', name: 'Turkmenistan' },
                { code: '+1649', name: 'Turks and Caicos Islands' },
                { code: '+688', name: 'Tuvalu' },
                { code: '+256', name: 'Uganda' },
                { code: '+380', name: 'Ukraine' },
                { code: '+971', name: 'United Arab Emirates' },
                { code: '+44', name: 'United Kingdom' },
                { code: '+1', name: 'United States' },
                { code: '+598', name: 'Uruguay' },
                { code: '+998', name: 'Uzbekistan' },
                { code: '+678', name: 'Vanuatu' },
                { code: '+39', name: 'Vatican City' },
                { code: '+58', name: 'Venezuela, Bolivarian Republic of' },
                { code: '+84', name: 'Vietnam' },
                { code: '+1284', name: 'Virgin Islands, British' },
                { code: '+1340', name: 'Virgin Islands, U.S.' },
                { code: '+681', name: 'Wallis and Futuna' },
                { code: '+967', name: 'Yemen' },
                { code: '+260', name: 'Zambia' },
                { code: '+263', name: 'Zimbabwe' }
            ];
            const select = document.getElementById('kode');
            countryCodes.forEach(country => {
                const option = document.createElement('option');
                option.value = country.code;
                option.textContent = `${country.code} (${country.name})`;
                select.appendChild(option);
            });

            $('#kode').select2({
                placeholder: 'Pilih kode negara',
                allowClear: true
            });
        }

        window.onload = populateCountryCodes;
    </script>
    <script>
	 $(document).ready(function() {
         	window.location.href = 'international.php';
	 });
        // $(document).ready(function(){
        //     $('#myForm').submit(function(event){
        //         event.preventDefault();
        //         var nama = $('#nama').val();
        //         var email = $('#email').val();
        //         var wa = $('#wa').val();
        //         var kode = $('#kode').val();
        //         var instansi = $('#instansi').val();
        //         var asal = $('#asal').val();
        //         sessionStorage.setItem('email', email);
        //         $.ajax({
        //             url: 'simpan.php',
        //             method: 'POST',
        //             data: {
        //                 nama: nama,
        //                 email: email,
        //                 wa: wa,
        //                 kode: kode,
        //                 instansi: instansi,
        //                 asal: asal
        //             },
        //             success:function(response){
        //                 var linkurl = "international.php";
        //                 window.open(linkurl, '_self');
        //             }
        //         });
        //     });
        // });
    </script>