<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <style>

    </style>

    
</head>
<body>

    <div class="container mt-5">

        <div class="main-container d-flex">
          
            <div class="left-div pt-5  ">
                <div class="left-image p-2">
                    <img class="image border rounded-5" src="{{ asset('images/abtgirl.jpg') }}">
                </div>
            </div>

            <div class="right-div pt-5 ps-5 pe-4">
                <div class="about-heading ps-3 pt-3">
                    <i class="bi bi-stars fs-5"> About Me </i>
                </div>

                <div class="about-para pt-4 ps-3">
                    <p class="fs-6">  Welcome to my portfolio! I'm Flora Gate, an IT engineer with a passion for innovative technology solutions. With a solid background in software development, network systems, cybersecurity, etc. I specialize in creating efficient, scalable, and secure systems that drive real-world impact. My journey in IT has been fueled by a love for problem-solving and a constant desire to learn and evolve with the tech landscape. As the owner of this site, I’m dedicated to showcasing my projects and sharing my expertise to help businesses and individuals achieve their tech goals. Let’s connect and see how I can assist in turning your vision into a technical reality!
                    </p>
                </div>

                <div class="ps-3 pt-3 p-2">
                    <button class="btn btn-info rounded-5">
                        <i class="px-3">Read My Full Story</i>
                        <i class="bi bi-box-arrow-in-right btn btn-light rounded-5"></i>
                    </button>
                </div>

                <div class="ps-3 pt-3 p-1 gap-1  row">
                    <div class="bg-light p-3 rounded-3 col-6">
                        <button class="btn bg-white rounded-2">
                            <i class="bi bi-envelope-at"></i>
                        </button>
                        <h1 class="fs-6 pt-3"> References </h1>
                        <small class="pt-0 text-secondary">go through my proffesional journey</small>
                    </div>                              
                    <div class="bg-light p-3 rounded-3 col-6">
                        <button class="btn bg-white rounded-2">
                            <i class="bi bi-envelope-at"></i>
                        </button>   
                        <h1 class="fs-6 pt-3"> Projects </h1>
                        <small class="pt-0 text-secondary">connect with me on github</small>
                    </div>          
                </div>

            </div>      

        </div> 

    </div>

</body>
</html>