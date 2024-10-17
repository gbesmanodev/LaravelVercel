<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
        }

        .dashboard-title {
            font-family: 'Poppins', sans-serif;
            color: #0D6EFD;
            margin-top: 3rem;
            font-size: 2.5rem;
        }

        .card {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInCard 0.6s ease forwards;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            padding: 2rem;
            text-align: center;
        }

        .stat-title {
            font-size: 1.5rem;
            color: #6c757d;
            font-weight: 600;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            color: #0D6EFD;
            margin-top: 10px;
        }

        /* Animation Effects */
        @keyframes fadeInCard {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Adjust card width to be more square-like and reduce spacing */
        .col-lg-3 {
            max-width: 280px; /* Set a bigger max-width for larger squares */
            margin-left: 10px;
            margin-right: 10px;
        }

        /* Remove space between columns for tighter tile-like display */
        .row {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
    @include('owner/partials/aside')
        <div class="main p-3">
            <div class="text-center">
                <h1 class="dashboard-title">
                Hello! {{ $user->firstname }} {{ $user->lastname }}
                </h1>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-sm-12 col-md-8 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <span class="stat-title">Reviews</span>
                            <div class="stat-value">{{ $reviewCount }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <span class="stat-title">Destinations</span>
                            <div class="stat-value">{{ $destinationCount }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <span class="stat-title">Pending Applications</span>
                            <div class="stat-value">{{ $applicationCount }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <span class="stat-title">Rejected Applications</span>
                            <div class="stat-value">{{ $declinedCount }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
