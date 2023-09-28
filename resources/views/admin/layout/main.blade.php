<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Informasi Kepegawaian</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../asset/img/simpeg2.png" rel="icon" style="width: 100px;">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/css/all.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../asset/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../asset/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../asset/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../asset/css/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../asset/css/style.css" rel="stylesheet">

</head>

<body>

    @include('admin.layout.header')

    <div class="container-fluid">
        <div class="row">
            @include('admin.layout.sidebar')
            <main class="col-md-10 ms-sm-auto px-md-4" style="margin-top: 20px;">

                @yield('container')
                <footer id="footer" class="footer">
                    <div class="copyright">
                        &copy; Copyright <strong><span>AMANDA SEPTIANI</span></strong> - 2001092041
                    </div>
                </footer><!-- End Footer -->
            </main>

        </div>
    </div>


    </footer><!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../asset/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../../asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="..././asset/vendor/chart.js/chart.umd.js"></script>
    <script src="../../asset/vendor/echarts/echarts.min.js"></script>
    <script src="../../asset/vendor/quill/quill.min.js"></script>
    <script src="../../asset/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../../asset/vendor/tinymce/tinymce.min.js"></script>
    <script src="../../asset/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../asset/js/main.js"></script>

</body>

</html>