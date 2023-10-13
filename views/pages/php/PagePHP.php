<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/java.css">
    <link rel="stylesheet" href="../views/pages/java/java.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            .start-java{
    width: 85%;
    height: 40em;
    background-image: url('./views/accets/images/Card1.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    opacity: .7;
    filter: blur(1.4px);
    -webkit-filter: blur(1.4px);
    position: absolute; 
    z-index: 0;
}
.start-java1{
    width: 85%;
    height: 40em;
    position: absolute; 
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.start-java2{
    width: 85%;
    height: auto;
    position: absolute; 
    z-index: 1;
    display: flex;
    justify-content: left;
    align-items:left;
    text-align: left;
}
.footer{
    position: relative;
    top: 100rem;
    z-index: 1;
}
        </style>
</head>
<body class="bg-black">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
            <?php require_once('./includes/header.php'); ?>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col">
                <div class="container fluid">
            <div class="container">
                <div class="row bg-primary start-java"></div>
                <div class="row text-white start-java1">
                    <div class="col">
                        <p class="fs-1 fw-bold">PHP</p>
                        <p class="fs-4 fw-semibold">Basic</p>
                        <p class="fs-6 fw-normal pb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex possimus praesentium consequatur numquam quia blanditiis, <br> dolor perspiciatis dignissimos dicta qui?</p>
                        <button type="button" class="btn btn-outline-warning px-5 py-2 fw-medium border-2 rounded-pill">Start Course</button>
                    </div>
                </div>
                <div class="row p-5 pt-0 bg-white start-java2" style="top: 85%">
                    <div class="col-12 mb-3 pb-4 pt-4 border-bottom border-black">
                        <button type="button" class="btn btn-outline-dark fw-bold px-5 border-2 rounded-pill">Java</button>
                        <button type="button" class="btn btn-outline-dark fw-bold ms-4 px-5 border-2 rounded-pill">Basic</button>
                    </div>
                    <div class="col-12 pt-3">
                        <p class="fw-bold fs-3">About this Course</p>
                    </div>
                    <div class="col-8">
                        <p class="lh-lg text-secondary pe-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate perferendis eligendi quos alias soluta quaerat quisquam ipsum iusto adipisci repudiandae. Voluptatum voluptate repellendus, ut nam quasi a officiis, non enim corporis similique laborum natus, nostrum magni cupiditate rem commodi velit. Aut libero at quisquam eius! Atque repellendus, temporibus et eos provident, maxime dolorem omnis ut necessitatibus quibusdam debitis amet ipsa distinctio illum harum velit non cumque dolorum quas accusantium architecto. Doloribus, reprehenderit inventore laboriosam sunt esse quos quae fugiat expedita soluta? Nostrum, voluptatem! Praesentium esse exercitationem, tempore adipisci veritatis, cupiditate molestias culpa, voluptatum vero qui officiis nostrum totam ratione error.</p>
                        <p class="lh-lg text-secondary pe-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem atque consequatur totam dolores nobis alias architecto ipsa ab repellendus eius magnam deleniti, culpa fugit laboriosam, vel qui, ea repellat ex!</p>
                    </div>
                    <div class="col-4">
                        <p class="h4">Teacher
                        <i class="fa fa-user-circle float-end p-2 pt-3 pe-5 me-3 fs-1" aria-hidden="true"></i>
                        </p>
                        <p class="h6 ps-0 pb-0 p-2">Jatin Negi </p>
                        <p class="pt-2 lh-base">I am a developer / mentor seeking to make this world better than it was yesterday. I am a proud father. You can find me around Internettown as craigsdennis.</p>
                    </div>
                    <div class="col-8 pt-5">
                        <p class="fs-5 fw-semibold">What you'll learn</p>
                        <p class="fs-6 text-secondary pe-5"><i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;Write programs in the Java programmming language</p>
                        <p class="fs-6 text-secondary pe-5"><i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;Use the console to interact with users</p>
                        <p class="fs-6 text-secondary pe-5"><i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;Use basic dtat types to store and name data</p>
                        <p class="fs-6 text-secondary pe-5"><i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;Use conditionals and looping to control program flow</p>
                    </div>
                    <div class="col-12"></div>
                    <div class="col-1 ms-5 pt-5">
                        <p class="fs-3 fw-bold p-3 ms-2 text-secondary border border-4 border-dark-subtle rounded-circle">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </p>
                    </div>
                    <div class="col-7 pt-5 ps-4">
                        <div class="row">
                            <div class="col ps-4">
                                <p class="fs-4 fw-semibold">Getting Started with PHP</p>
                                <p class="fw-normal">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime est atque quis nostrum ipsum, placeat aliquam, eveniet soluta facere vel error dolor illum perspiciatis officia blanditiis! Optio ipsum sequi eligendi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
        </div>
        <div class="row">
            <div class="col footer">
            <?php require_once('./includes/Footer.php'); ?>
            </div>
        </div>
    </div>

    <!-- <main class="bg-black"> -->
        
        <!-- <div class="container-fluid position-absolute" style="top: 85%">
            <div class="container bg-white">
                <div class="row px-5 py-3 align-items-center">
                    <div class="col-12 border-bottom border-black">
                        <button type="button" class="btn btn-outline-dark fw-bold ms-4 px-5 border-2 rounded-pill">Java</button>
                    </div>
                    <div class="col-12 ">
                        <p class="fw-bold fs-3">About this Course</p>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </main> -->
    
</body>
</html>