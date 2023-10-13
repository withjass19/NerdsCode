<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            require('./api/v1/title.php');
            echo $page_title;
        ?>
    </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="./views/accets/css/style.css">
    <!-- <link rel="stylesheet" href="/views/accets/css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-black text-white">
<?php require_once('./includes/header.php'); ?>
    <main>
        <section class="my-2 py-5">
            <div class="contianer-fluid ps-5 pe-5">
                <div class="container p-5">
                    <div class="row bg-dark p-5 rounded-3">
                        <div class="col-4">
                            <!-- <img src="./views/accets/images/SignUp.jpg" class="rounded-3" alt="" srcset="" width="450rem"> -->
                            <img src="./views/accets/images/SignIn.jpg" class="rounded-3" alt="" srcset="" width="450rem">
                            <!-- <img src="./views/accets/images/about.jpg" alt="" srcset="" width="600rem"> -->
                        </div>
                        <div class="col-8 text-white">
                            <div class="container px-5 mx-5">
                                <h1 class="text-center pt-5 fw-bold">Nerds</h1>
                                <p class="text-center pt-2 fs-4">Sign In</p>
                                <!-- <h2 class="text-center pt-2 fs-3">Create new account</h2> -->
                                <form action="./Config/database/config.php" class="p-5 pb-1 pt-3" method="POST">
                                    <div class="row">
                                    <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3 pt-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <p class="text-end"><a href="" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Forgot Password?</a></p>
                            </div>
                              <div class="col text-center mt-5">
                                        <button type="submit" class=" mt-5 btn btn-primary px-5">Sign In</button>
                                    </div>
                                    <p class="text-center pt-4">Don't have an account? <a href="sign-up"  class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Sign Up</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <?php require_once('./includes/Footer.php'); ?>
</body>
</html>