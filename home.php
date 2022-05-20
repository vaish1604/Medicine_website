<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Rubic landing page.">
    <meta name="author" content="Devcrud">
    <title>MEDIKNOW</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Rubic main styles -->
	<link rel="stylesheet" href="assets/css/rubic.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

<nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#"><strong class="text-primary">MEDI</strong><span class="text-light">KNOW</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buying.php">Buy</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="header d-flex justify-content-center">
        <div class="container">
            <div class="row h-100 align-items-center">
                <div class="col-md-7">
                    <div class="header-content">
                        <h3 class="header-title"><strong class="text-primary">MEDI</strong><span class="text-light">KNOW</span></h3>
                        <h4 class="header-subtitle">Know About Your Medicines</h4>
                        <p>Search by your medicine name or symptom. <br> Buy your desired meds too</p>
                    </div>  
                </div>
                <div class="col-md-5 d-none d-md-block">
                    <form class="header-form" method="POST" action="results.php">
                        <div class="head">Search for <span class="text-primary">Medicines and Symptoms</span ></div>
                        <div class="body">
                            <div class="form-group">
                                <input type="text" class="form-control" name = "buyname" placeholder="Medicine or Symptom ..">
                            </div>
                            <button class="btn btn-primary btn-block" type="submit" onclick=result()>Submit</button>
                        </div> 
                    </form> 
                    <br><br>
                    <a class="btn btn-primary btn-block" href="buying.php">BUY</a>
                </div>
            </div>  
        </div>
    </header>
    <section class="section" id="contact">
        <div class="container text-center">
            <h6 class="display-4 has-line">CONTACT US</h6>
            <p class="mb-5 pb-2">Send us your Feedback!</p>

            <form>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group pb-1">
                            <input type="text" class="form-control" required placeholder="Name">            
                        </div>
                        <div class="form-group pb-1">
                            <input type="email" class="form-control" required placeholder="Email">          
                        </div>
                        <div class="form-group ">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <textarea name="" id="" cols="" rows="7" class="form-control" required placeholder="Message"></textarea>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block" value="Send Message">
            </form>
        </div>
    </section>
    <footer class="footer py-4 bg-dark text-light"> 
        <div class="container text-center">
            <p class="mb-4 small">Vaishnavi Shukla 20BAI1036</p>
            <p class="mb-4 small">Emmay Koushal 20BAI1210</p>
        </div>
    </footer>
	
	

    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <script src="assets/js/rubic.js"></script>
    <script>
        function result(){
            location.href='results.php'
        }
    </script>
</body>
</html>