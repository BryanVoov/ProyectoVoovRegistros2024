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
        <a href="/adminvoov/pages/branding/vista/USA/website.php"><i class="fas fa-globe" style="color: #1abc9c;"></i> Web</a>
        <a href="/adminvoov/pages/branding/vista/USA/facebook.php"><i class="fab fa-facebook" style="color: #3b5998;"></i> Facebook</a>
        <a href="/adminvoov/pages/branding/vista/USA/instagram.php"><i class="fab fa-instagram" style="color: #e4405f;"></i> Instagram</a>
        <a href="/adminvoov/pages/branding/vista/USA/youtube.php"><i class="fab fa-youtube" style="color: red;"></i> YouTube </a>
        <a href="/adminvoov/pages/branding/vista/USA/gmb.php"><i class="fab fa-google" style="color: #1da1f2;"></i> GMB </a>
        <a href="/adminvoov/pages/branding/vista/USA/google.php"><i class="fab fa-google" style="color: red;"></i> Google</a>
        <a href="/adminvoov/pages/branding/vista/USA/linkedin.php"><i class="fab fa-linkedin" style="color: #0077b5;"></i> LinkedIn</a>
        <a href="/adminvoov/pages/branding/vista/USA/tiktok.php"><i class="fab fa-tiktok" style="color: #bd081c;"></i> TikTok</a>
        <a href="/adminvoov/pages/branding/vista/USA/email.php"><i class="fas fa-envelope" style="color: #1da1f2;"></i> Email</a>
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
            <button class="btn btn-primary mt-4" data-toggle="modal" data-target="#enterDataModal">Enter data</button>

<!-- Modal -->
<div class="modal fade" id="enterDataModal" tabindex="-1" role="dialog" aria-labelledby="enterDataModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="enterDataModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="enterDataForm" method="post" action="/adminvoov/pages/branding/controller/USA/insertYoutubeData.php">
                    <div class="form-group">
                        <label for="fecha">Register Date</label>
                        <input type="month" class="form-control" id="fecha" name="fecha" required>
                    </div>
                    <div class="form-group">
                        <label for="totalSubscribers">Total Subscribers</label>
                        <input type="number" class="form-control" id="totalSubscribers" name="totalSubscribers" required>
                    </div>
                    <div class="form-group">
                        <label for="newSubscribers">New Subscribers</label>
                        <input type="number" class="form-control" id="newSubscribers" name="newSubscribers" required>
                    </div>
                    <div class="form-group">
                        <label for="nVideos"># of videos</label>
                        <input type="number" class="form-control" id="nVideos" name="nVideos" required>
                    </div>
                    <div class="form-group">
                        <label for="totalViews">Total Views</label>
                        <input type="number" class="form-control" id="totalViews" name="totalViews" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="insertYoutubeData">Save changes</button>
                    </div>
                </form>
        </div>
    
    </div>
</div>
</div>

<div class="container mt-4">
        <!-- Date Range Filter Form -->
        <div class="card mt-5">
            <div class="card-header">
                <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="row mb-0">
                    <div class="form-group col-md-2">
                        <label>From Date</label>
                        <input type="date" class="form-control" name="fromDate" value="<?php echo isset($_GET['fromDate']) ? htmlspecialchars($_GET['fromDate']) : ''; ?>" onchange="this.form.submit()">
                    </div>
                    <div class="form-group col-md-2">
                        <label>To Date</label>
                        <input type="date" class="form-control" name="toDate" value="<?php echo isset($_GET['toDate']) ? htmlspecialchars($_GET['toDate']) : ''; ?>" onchange="this.form.submit()">
                    </div>
                    <div class="form-group col-md-2 align-self-end">
                        <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="btn btn-secondary btn-block">Reset</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Div to Display Table and Graph -->
        <div id="dataDisplay" class="mt-4">
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "adminvoov";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch filter parameters
            $fromDate = isset($_GET['fromDate']) ? $_GET['fromDate'] : '';
            $toDate = isset($_GET['toDate']) ? $_GET['toDate'] : '';

            // Fetch distinct months within the date range
            $sqlMonths = "SELECT DISTINCT DATE_FORMAT(fecha, '%b-%Y') as month FROM  youtubeNic";
            if ($fromDate && $toDate) {
                $sqlMonths .= " WHERE fecha BETWEEN '$fromDate' AND '$toDate'";
            }
            $sqlMonths .= " ORDER BY fecha";

            $resultMonths = $conn->query($sqlMonths);
            $months = [];
            while ($row = $resultMonths->fetch_assoc()) {
                $months[] = $row['month'];
            }

            // Fetch data for each metric
            $metrics = [
                "Total Subscribers" => "totalSubscribers",
                "New Subscribers" => "newSubscribers",
                "# of videos" => "nVideos",
                "Total Views" => "totalViews",
            ];

            $metricData = [];
            foreach ($metrics as $label => $column) {
                $metricData[$label] = [];
                foreach ($months as $month) {
                    $metricData[$label][$month] = 0;
                }
            }

            foreach ($metrics as $label => $column) {
                $sqlData = "SELECT DATE_FORMAT(fecha, '%b-%Y') as month, SUM({$column}) as total FROM  youtubeNic";
                if ($fromDate && $toDate) {
                    $sqlData .= " WHERE fecha BETWEEN '$fromDate' AND '$toDate'";
                }
                $sqlData .= " GROUP BY month ORDER BY fecha";

                $resultData = $conn->query($sqlData);
                while ($row = $resultData->fetch_assoc()) {
                    $metricData[$label][$row['month']] = $row['total'];
                }
            }
            ?>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Metric</th>
                            <?php foreach ($months as $month) {
                                echo "<th>{$month}</th>";
                            } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($metrics as $label => $column) {
                            echo "<tr><td>{$label}</td>";
                            foreach ($months as $month) {
                                echo "<td>" . (isset($metricData[$label][$month]) ? $metricData[$label][$month] : 0) . "</td>";
                            }
                            echo "</tr>";
                        } ?>
                    </tbody>
                </table>
            </div>

            <div class="card mt-4">
                <div class="card-body" style="height: 400px;"> <!-- Ensure the height is set correctly -->
                    <canvas id="analyticsChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Hidden elements to pass data to JavaScript -->
    <div id="chartData" style="display:none;"><?php echo json_encode($metricData); ?></div>
    <div id="chartLabels" style="display:none;"><?php echo json_encode($months); ?></div>

    <!-- Include the external JavaScript file -->
    <script src="charts/chartInitYoutube.js"></script>  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
</body>
</html>
