<!doctype html>
<html lang="en">

<head>
    <title>Gautam Solar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="images/logo.png" width="150" height="150"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                </ul>
            </div>
        </nav>
        <br><br><br><br>
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <!-- Form -->
                    <form class="form-example" action="" method="POST">
                        <!-- Input fields -->
                        <div class="form-group mb-4 text-center h3 text-info">
                            <label for="Customername">Customer Name</label>
                            <input type="text" class="form-control username" id="Customername" placeholder="Customer Name..." name="Customername">
                        </div>
                        <div class="form-group mb-4 text-center h3 text-info">
                            <label for="Electricitybill">Electricity Bill</label>
                            <input type="text" class="form-control password" id="Electricitybill" placeholder="Electricitybill..." name="Electricitybill">
                        </div>
                        <div class=" mb-4 text-center">
                            <button type="submit" class="btn btn-primary btn-customized">Generate Proposal</button>
                        </div>
                        <!-- End input fields -->
                    </form>
                    <!-- Form end -->
                </div>
            </div>
        </div>
        <!-- PHP CODE -->
        <?php
        if (isset($_POST["Customername"]) && isset($_POST["Electricitybill"])) {
            $Customername = $_POST["Customername"];
            $Electricitybill = $_POST["Electricitybill"];

            $Totalunit = $Electricitybill * 8;
            date_default_timezone_set('Asia/Kolkata');
            $date = date('d-m-Y', time());
            $time = date('H:i:s', time());

            echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('resultModal'), {
                    keyboard: false
                });
                myModal.show();
            });
          </script>";
        }
        ?>

        <!-- Code for pop-up -->

        <div class="modal fade" id="resultModal" tabindex="-1" aria-labelledby="resultModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="resultModalLabel">Thank You For Visiting!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Customer Name: <?php echo $Customername; ?></p>
                        <p>Electricity Bill: <?php echo $Electricitybill; ?></p>
                        <p>Total Units (8 Units Per Bill): <?php echo $Totalunit; ?></p>
                        <p>Date: <?php echo $date; ?></p>
                        <p>Time: <?php echo $time; ?></p>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <main></main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>