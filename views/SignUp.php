<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            require('./api/v1/title.php');
        ?>
    </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="./views/accets/css/style.css">
    <!-- <link rel="stylesheet" href="/views/accets/css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-black text-white">
    <main>
        <section class="my-2 py-5">
            <div class="contianer-fluid ps-5 pe-5">
                <div class="container p-5">
                    <div class="row bg-dark p-5 rounded-3">
                        <div class="col-4">
                            <img src="./views/accets/images/SignUp.jpg" class="rounded-3" alt="" srcset="" width="450rem">
                            <!-- <img src="./views/accets/images/SignIn.jpg" alt="" srcset="" width="400rem"> -->
                            <!-- <img src="./views/accets/images/about.jpg" alt="" srcset="" width="600rem"> -->
                        </div>
                        <div class="col-8 text-white">
                            <!-- <p class="fs-2 fw-bold">Register</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, culpa?</p>
                            <form action="" class="row g-3">
                                <div class="col-md-12">
                                    <label for="FirstName">First Name</label>
                                    <input type="text" class="form-control" placeholder="First name" id="FirstName" aria-label="First name">
                                </div>
                                <div class="col-md-12">
                                    <label for="Fname">Username Name</label>
                                    <input type="text" class="form-control" placeholder="First name" id="Fname" aria-label="First name">
                                </div>
                                <div class="col-md-12">
                                    <label for="Fname">First Name</label>
                                    <input type="text" class="form-control" placeholder="First name" id="Fname" aria-label="First name">
                                </div>
                                <div class="col-md-12">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com">
                                </div>
                            </form> -->
                            <div class="container px-5 ms-5">
                                <h1 class="text-center fw-bold">Nerds</h1>
                                <p class="text-center pt-2 fs-4">Create new account</p>
                                <!-- <h2 class="text-center pt-2 fs-3">Create new account</h2> -->
                                <form action="process_registration.php" class="p-5 pb-1 pt-3" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="firstName" name="firstName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="lastName" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="lastName" name="lastName" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <lable for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control mt-2" id="password" name="password" required>
                                    </div>
                                    <div class="form-check py-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <p>By creating your account, you agree to our <a href="#">Privacy Policy</a> and <a href="#">Terms of Use.</a></p>
                                        </label>
                                    </div>
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-primary px-5">Sign Up</button>
                                    </div>
                                    <p class="text-center pt-4">Already have an account? <a href="sign-in"  class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Sign In</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>