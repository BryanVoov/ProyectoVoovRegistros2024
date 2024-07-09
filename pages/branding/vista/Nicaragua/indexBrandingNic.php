<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Analytics Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: white;
            color: black;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            padding-top: 20px;
            border-right: 1px solid #dee2e6;
        }
        .sidebar a {
            color: black;
            display: flex;
            align-items: center;
            padding: 10px 15px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #f8f9fa;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .card-analytics {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .card-analytics .card {
            flex: 1;
            margin-right: 10px;
        }
        .card-analytics .card:last-child {
            margin-right: 0;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="sidebar-header text-center mb-4">
            <h4>Dashboard</h4>
        </div>
        <a href="/adminvoov/pages/branding/vista/Nicaragua/website.php"><i class="fas fa-globe" style="color: #1abc9c;"></i> Web</a>
        <a href="/adminvoov/pages/branding/vista/Nicaragua/facebook.php"><i class="fab fa-facebook" style="color: #3b5998;"></i> Facebook</a>
        <a href="/adminvoov/pages/branding/vista/Nicaragua/instagram.php"><i class="fab fa-instagram" style="color: #e4405f;"></i> Instagram</a>
        <a href="/adminvoov/pages/branding/vista/Nicaragua/youtube.php"><i class="fab fa-youtube" style="color: red;"></i> YouTube </a>
        <a href="/adminvoov/pages/branding/vista/Nicaragua/gmb.php"><i class="fab fa-google" style="color: #1da1f2;"></i> GMB </a>
        <a href="/adminvoov/pages/branding/vista/Nicaragua/website.php"><i class="fab fa-google" style="color: red;"></i> Google</a>
        <a href="/adminvoov/pages/branding/vista/Nicaragua/linkedin.php"><i class="fab fa-linkedin" style="color: #0077b5;"></i> LinkedIn</a>
        <a href="/adminvoov/pages/branding/vista/Nicaragua/tiktok.php"><i class="fab fa-tiktok" style="color: #bd081c;"></i> TikTok</a>
        <a href="/adminvoov/pages/branding/vista/Nicaragua/email.php"><i class="fas fa-envelope" style="color: #1da1f2;"></i> Email</a>
    </div>

    <div class="main-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Web Analytics</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <button class="btn btn-primary"><i class="fas fa-calendar-alt"></i> 1 jun 2024 - 30 jun 2024</button>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid mt-4">
            <div class="card-analytics">
                <div class="card text-center text-white bg-info">
                    <div class="card-body">
                        <h3 class="card-title">2445</h3>
                        <p class="card-text">Páginas vistas</p>
                    </div>
                </div>
                <div class="card text-center text-white bg-success">
                    <div class="card-body">
                        <h3 class="card-title">2079</h3>
                        <p class="card-text">Visitas</p>
                    </div>
                </div>
                <div class="card text-center text-white bg-danger">
                    <div class="card-body">
                        <h3 class="card-title">2012</h3>
                        <p class="card-text">Visitantes</p>
                    </div>
                </div>
                <div class="card text-center text-white bg-warning">
                    <div class="card-body">
                        <h3 class="card-title">0</h3>
                        <p class="card-text">Publicaciones</p>
                    </div>
                </div>
                <div class="card text-center text-white bg-secondary">
                    <div class="card-body">
                        <h3 class="card-title">0</h3>
                        <p class="card-text">Comentarios</p>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <canvas id="analyticsChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('analyticsChart').getContext('2d');
            var analyticsChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['1 Jun', '5 Jun', '9 Jun', '13 Jun', '17 Jun', '21 Jun', '25 Jun', '29 Jun'],
                    datasets: [
                        {
                            label: 'Páginas vistas',
                            data: [50, 100, 150, 200, 250, 300, 350, 400],
                            borderColor: 'rgba(54, 162, 235, 1)',
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            fill: false
                        },
                        {
                            label: 'Visitas',
                            data: [30, 80, 120, 160, 210, 260, 300, 350],
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            fill: false
                        },
                        {
                            label: 'Visitantes',
                            data: [20, 60, 100, 130, 170, 210, 250, 300],
                            borderColor: 'rgba(255, 99, 132, 1)',
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            fill: false
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Web Analytics'
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Date'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Count'
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
