<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>NOOREDDIN</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="logo" class="navbar-brand" href="#">NOOREDDIN</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/index.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/cv.html">Resume</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/myinterests.html">My Interests</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/mycity.html">My City</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/culture.html">Cultural Heritage</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact.html">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link" href="/login.html">Login</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
    </header>


    

    <main>
        <div class="container">
            <div class="form_item d-flex align-items-center">
                <label class="form-lable fw-bold m-0 p-0">name:</label>
                <div class="form-control-plaintext ms-2 p-0">
                    <?php
                        echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
                    ?>
                </div>
            </div>
            <!-- Name -->
            <div class="form_item d-flex align-items-center">
                <label class="form-label fw-bold m-0 p-0">Email:</label>
                <div class="form-control-plaintext ms-2 p-0">
                    <?php
                        echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
                    ?>
                </div>
            </div>
            <!-- Email -->
            <div class="form_item d-flex align-items-center">
                <label class="form-label fw-bold m-0 p-0">Gender:</label>
                <div class="form-control-plaintext ms-2 p-0">
                    <?php
                        echo htmlspecialchars($_POST['gender'], ENT_QUOTES, 'UTF-8');
                    ?>
                </div>
            </div>
            <!-- Gender -->
            <!-- Contact Info -->
            <div class="form_item d-flex align-items-center">
                <label class="form-label fw-bold m-0 p-0">Contact reason:</label>
                <div class="form-control-plaintext ms-2 p-0">
                    <?php
                        echo htmlspecialchars($_POST['reason'], ENT_QUOTES, 'UTF-8');
                    ?>
                </div>
            </div>
            <!-- Contact reason -->
            <div class="form_item">
                <label class="form-label fw-bold m-0 p-0">Details:</label>
                <div class="form-control-plaintext ms-1 p-0">
                    <?php
                        echo htmlspecialchars($_POST['details'], ENT_QUOTES, 'UTF-8');
                    ?>
                </div>
            </div>
        </div>
    </main>
    
    <footer class="footer">
        <p class="footer-title">Copyrights @ <span>NOOREDDIN RABIE</span></p>
        <div class="social-icons">
            <a href="https://www.linkedin.com/in/nooreddinrabie/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="#"target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#"target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#"target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>
</html>