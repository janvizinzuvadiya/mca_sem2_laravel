<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <style>

        .main-container
        {
            /* background-color:yellow; */
            
        }

        .left-div
        {
            width:700px;
            /* border:1px solid pink; */
            margin-top:40px;

        }
        .left-heading
        {
            font-size: 50px;

        }
        .left-intro
        {
            font-size: 100px;
        }
        .left-detail
        {

        }

        .right-div
        {
            
        }
        .right-image
        {
            /* height:600px;
            width:500px; */
            /* border:1px solid pink; */
                
        }
        .image
        {
            height:700px;
            width:600px;
        }

    </style>


</head>
<body>

    <div class="container mt-5">

        <div class="main-container d-flex">
            <div class="left-div pt-5 ps-5">
                <div class="left-text pt-5 ps-5">

                    <b class="left-heading">Hi, I'm Janvi Zinzuvadiya </b>
                    <h1 class="left-intro"> IT Engineer</h1>
                    <p class="left-detail mt-4 pt-3">Driven Software Engineer dedicated to building scalable, user-centric applications. I specialize in clean code and seamless UX, turning complex technical challenges into elegant digital solutions. Constantly learning, forever building</p>
                    <a href="{{ route('hello') }}">go </a>
                </div>
                <div class="left-button pt-5 ps-5">

                    <div class="d-flex gap-4 btn-group ">
                        <button class="btn btn-outline-primary" type="button">
                            <b>Projects</b><i class="bi bi-code-slash ps-2"></i>
                        </button>                        
                        <button class="btn btn-outline-dark" type="button">
                            <b>Hire Me</b><i class="bi bi-box-arrow-in-up-right ps-2"></i>
                        </button>                        
                    </div>

                    <div class="d-flex pt-5 gap-4">
                        <button class="btn btn-secondary border rounded-5" type="button">
                           <i class="bi bi-envelope-at"></i>
                        </button>   
                        <button class="btn btn-secondary border rounded-5" type="button">
                           <i class="bi bi-linkedin"></i>
                        </button>   
                        <button class="btn btn-secondary border rounded-5" type="button">
                           <i class="bi bi-github"></i>
                        </button>                                     
                        <button class="btn btn-secondary border rounded-5" type="button">
                           <i class="bi bi-whatsapp"></i>
                        </button> 
                        <button class="btn btn-secondary border rounded-5" type="button">
                           <i class="bi bi-github"></i>
                        </button>                   
                    </div>

                </div>
            </div>

            <div class="right-div pt-5">
                <div class="right-image">

                    <img class="image" src="{{ asset('images/prtgirl-nobg.png') }}">
                    
                </div>
            </div>

        </div> 

    </div>

</body>
</html>