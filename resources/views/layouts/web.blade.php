<!DOCTYPE html>
<html>

<head>
    <title>Kheng Dental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }

        .table-shadow {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }


        .navbar-brand,
        .nav-link,
        .my-form,
        .login-form {
            font-family: Raleway, sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }


        .content {
            display: fixed;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
            height: 100vh;
        }

        .popup {

            margin-top: auto;
            padding: 20px;
        }


        .ml-auto {
            margin-left: auto !important;
        }

        .navbar-nav .nav-link {
            color: #000000;
        }
    </style>
</head>

<body>

    <ul class="nav nav-tabs flex">
        <li class="nav-item">
            <a class="nav-link" href="dashboard">Kheng Dental</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false">List</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('doctors.index') }}">Doctors</a></li>
                <li><a class="dropdown-item" href="{{ route('clerks.index') }}">Clerks</a></li>
                <li><a class="dropdown-item" href="{{ route('patients.index') }}">Patients</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Invoices</a></li>
                <li><a class="dropdown-item" href="#">Prescription</a></li>
                <li><a class="dropdown-item" href="#">Dental Services</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Appointment</a>
        </li>
        <li class="nav-item ml-auto">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </li>
    </ul>

    <div class="popup">
        @yield('popup')

        <div class="content">
            @yield('content')

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
