<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/java.css">
    <!-- <link rel="stylesheet" href="../views/pages/java/java.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <style>
            *{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
}
.start-java{
    width: 85%;
    height: 20em;
    /* background-image: url('../../accets/images/Card1.jpeg'); */
    /* background-image: url('./Card1.jpeg'); */
    background-image: url('./views/accets/images/Card1.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
       /* border: 2px solid red; */
}
.java{
    position: relative;
    z-index: 1;
    opacity: 1;
    /* 1 */
}
.hide{
    display: none;
}
.show{
    display: block;
}
</style>
</head>
<body class="bg-black">
    <main>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col start-java"></div>
                </div>
                <div class="row p-5 pt-0 bg-white start-java2" style="top: 85%" id="starterpage">
                    

                    <!-- links -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" id='link1'>Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id='link2'>Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id='link3'>Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id='link4'>Disabled</a>
                        </li>
                    </ul>
                    <!-- 1 -->
                    <section class="col-12 pt-5 Tutorial show section" id="Tutorial" name="Tutorial">
                        <!-- <p>Introduction</p> -->
                        <h1 class="p-2"><strong>Introduction</strong></h1>
                        <h3 class="p-2"><strong>What is Java ?</strong></h3>
                        <p class="p-2 px-4">Java was developed by Sun Microsystems in the year of 1996 and it's a high level, object oriented programming
                            <p class="p-2 px-4">Java is a high-level, object oriented programming language.</p>
                            <hr />
                            <h4 class="p-2" id="what_is"><strong>What can I do with it? What are the applications of java?</strong></h4>
                            <h4 class="p-2" id="what_is"><strong>What can you do with it? What are the applications of java?</strong></h4>
                            <h4 class="p-2"><strong>History of Java :</strong></h4>
                            <p class="p-2 px-4">Sun Microsystems Inc was founded in May 1982 by James Gosling and his team at
                                Palo Alto Research Center (PARC). The company's first product was the Green Project, which led to Sun's acquisition of Pix
                                Silicon Graphics Computer Systems (SGCS). The company created the first version of Sun's
                                Carnegie Mellon University to work on the programming language that would eventually become Java. The first public version of Java was released in
                                the University of California, Los Angeles (UCLA). The main aim of this company was to develop an efficient, high level programming language which
                                Stony Brook University to work on an improved version of the C Programming Language.......</p>
                               <p class="p-2 px-4"> Silicon Graphics Computer Systems (SGCS). The company created the first version of the Java platform
                                Carnegie Mellon University in Pittsburgh, USA to develop this language.</p>
                                <!-- Introduction -->
                                <!-- What is java? -->
                                <img src="{{accets('images/code.jpg')}}" alt="">
                    </section>
                    <!-- 2 -->
                    <section class="col-12 pt-5 Questions section" id="Questions" >
                        <h3>Question</h3>
                    </section>
                    <!-- 3 -->
                    <section class="col-12 pt-5 Notes section" id="Notes" >
                        <h3>Notes</h3>
                    </section>
                    <!-- 4 -->
                    <section class="col-12 pt-5 Query section" id="Query">
                        <h3>Query</h3>
                    </section>


                </div>
            </div>
        </div>
    </main> 

    <script src="./views/accets/js/script.js"></script>
</body>
</html>