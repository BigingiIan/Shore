<?php
class layouts {
    public function header($config){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
            
            <title>Shore Industries</title>

            <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

            <!-- Bootstrap core CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            
            <!-- Custom styles for this template -->
            <link href="product.css" rel="stylesheet">
        </head>

        <body>
            <?php
            }


            public function nav($config){
            ?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class= "navbar-brand" href="#"><?php echo $config['site_name'] ?? 'Shore'; ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           <?php
                           if (!empty($config['nav_items'])) {
                            foreach ($config['nav_items'] as $item) {
                                echo '<li class="nav-item">
                                        <a class="nav-link" href="' . $item['link'] . '">' . $item['label'] . '</a>
                                    </li>';
                            }
                           } else {
                            echo "<li class='nav-item'><a class='nav-link' href='/'>Home</a></li>
                                  <li class='nav-item'><a class='nav-link' href='/about'>About</a></li>
                                  <li class='nav-item'><a class='nav-link' href='/services'>Services</a></li>
                                  <li class='nav-item'><a class='nav-link' href='/contact'>Contact</a></li>";
                           }
                            ?>
                        </ul>

                    <!-- Profile Dropdown -->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i> Profile
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/profile">View Profile</a></li>
                                <li><a class="dropdown-item" href="/settings">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li> 
                    </ul>
                    <form class="d-flex" role="search" method="GET" action="/search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> 
                </div>
            </nav>
            <?php
            }


            public function banner($config) {
            ?>
            <section class="py-3 text-center-container bg-light">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h2 class="fw-light">Join Us Today!</h2>
                        <p class="lead text-muted">Create an account to access exclusive features and stay updated with our latest news.</p>
                        <p>
                            <a href="signup.php" class="btn btn-primary btn-sm">Create Account</a>
                            <a href="login.php" class="btn btn-secondary btn-sm">Sign In</a>
                        </p>
                    </div>
                </div>
            </section>
            <?php
            }


            public function content($config){
            ?>
                <div class="container mt-4">
                    <div class="p-5 mb-4 bg-light rounded-3">
                        <div class="container-fluid py-5">
                            <h1 class="display-5 fw-bold">
                                <?php echo $config['heading'] ?? 'Welcome to Shore Industries'; ?>
                            </h1>
                            <p class="col-md-8 fs-4">
                                <?php echo $config['text'] ?? 'We provide innovative solutions to enhance your business.'; ?>
                                </p>
                            <a class="btn btn-primary btn-ig" href=<?php echo $config['button_link'] ?? '#'; ?> role="button">
                                <?php echo $config['button_text'] ?? 'Learn More'; ?>
                            </a>
                        </div>

                    <!-- Example row of content -->
                    <div class="row">
                        <div class="col-md-4">
                            <h2><?php echo $config['col1_heading'] ?? 'Our Mission'; ?></h2>
                            <p><?php echo $config['col1_text'] ?? 'Dedicated to exellence and customer satisfaction.'; ?></p>
                        </div>
                        <div class="col-md-4">
                            <h2><?php echo $config['col2_heading'] ?? 'Our Products'; ?></h2>
                            <p><?php echo $config['col2_text'] ?? 'High-quality, reliable and affordable.'; ?></p>
                        </div>
                        <div class="col-md-4">
                            <h2><?php echo $config['col3_heading'] ?? 'Contact Us'; ?></h2>
                            <p><?php echo $config['col3_text'] ?? 'Contact us today to learn more about our services.'; ?></p>
                    </div>

                    <hr>
                
            </div> <!-- /container -->
            <?php
            }


            public function form_frame($config, $ObjForms = null){
                if ($ObjForms === null) {
                    require_once 'Forms/forms.php';
                    $ObjForms = new forms();
                }
            ?>
                <div class="container mt-4">
                    <div class="row">
                        <?php
                        $current_page = basename($_SERVER['PHP_SELF']);
                        if ($current_page === 'login.php') {
                            echo '<div class="col"><h2>Login</h2></div>';
                        } elseif ($current_page === 'signup.php') {
                            echo '<div class="col"><h2>Sign Up</h2></div>';
                        } else {
                            echo '<div class="col"><h2>Form</h2></div>';
                        }
                        ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                if ($current_page === 'login.php') {
                                    $ObjForms->login_form();
                                } elseif ($current_page === 'signup.php') {
                                    $ObjForms->signup_form();
                                } else {
                                    echo '<p>No form available.</p>';
                                }
                                ?>
                            </div>
                    </div>
                </div>

            <?php
            }
            public function footer($config){
            ?>
            </main>
            <footer class="container">
                <p>&copy; Shore Industries</p>
            </footer>
             
            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script>window.jQuery || document.write('<script src="/static/js/jquery-slim.min.js"><\/script>')</script>
            <!-- <script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/popper.min.js"></script> -->
            <script src="../../dist/js/bootstrap.min.js"></script>
            <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
            <script src="../../assets/js/vendor/holder.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

            <!-- Custom Script for form validation -->
            <script>
            (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            })()
            </script>

        </body>
        </html>
        <?php
    }
}