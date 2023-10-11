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
    <div class="container-fluid">
                <div class="container text-center py-5">
                    <h1 class="p-3 text-white">Featured Courses</h1>
                    <p class="mx-5 px-5 pb-3 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Explicabo iusto ducimus a atque nemo eveniet magnam fuga at impedit quidem, obcaecati distinctio
                        rerum consectetur rem assumenda error harum in accusantium!</p>
                    <div class="row">
                        <div class="col p-5 d-flex justify-content-around">
                            <div class="card" style="width: 22rem;">
                                <img src="./views/accets/images/Card3.png" alt="" class="card-mg-top p-lg-4 rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">JAVA Programming</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <a href="#" class="btn btn-primary">Enroll</a>
                                </div>
                            </div>
                            <div class="card" style="width: 22rem;">
                                <img src="./views/accets/images/Card2.jpg" alt="" class="card-mg-top p-lg-4 rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">Web Technology using PHP</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <a href="#" class="btn btn-primary">Enroll</a>
                                </div>
                            </div>
                            <div class="card" style="width: 22rem;">
                                <img src="./views/accets/images/Card3.png" alt="" class="card-mg-top p-lg-4 rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">Database Management</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <a href="#" class="btn btn-primary">Enroll</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>
</html>