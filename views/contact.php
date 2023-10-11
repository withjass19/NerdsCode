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

<body class="bg-black">
    <main>
        <section class="contact">
            <div class="container-fluid my-5 py-5">
                <div class="container bg-dark text-white p-5">
                    <h1 class="text-center p-2">Contact Us</h1>
                    <p class="text-center pb-3">Or come and have a coffee with us.</p>
                    <div class="row p-3">
                        <div class="col-6">
                            <img src="./views/accets/images/code.jpg" alt="" srcset="" width="600rem">
                        </div>

                        <div class="col-6 px-4">
                            <form action="" class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                                </div>
                                <div class="col-md-6">
                                <!-- <label for="inputEmail4" class="form-label">Email</label> -->
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email address">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" id="typeNumber" class="form-control" placeholder="Phone number">
                                    <!-- <label class="form-label" for="typeNumber">Number input</label> -->
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 250px"></textarea>
                                    <label for="floatingTextarea2">Message</label>
                                </div>
                                <button type="button" class="btn btn-outline-info">Info</button>
                                <!-- <div class="col-md-12">
                                    <button type="button" class="btn btn-outline-info">Info</button>
                                </div>  -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>

</html>