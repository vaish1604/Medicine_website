<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Rubic landing page.">
    <meta name="author" content="Devcrud">
    <title>Sell Your Meds</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Rubic main styles -->
	<link rel="stylesheet" href="assets/css/rubic.css">
    
                                                               
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" onload="buy()">

    <nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#"><strong class="text-primary">MEDI</strong><span class="text-light">KNOW</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sell</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link btn btn-primary text-dark shadow-none ml-md-4" href="components.html">Components</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <header class="header d-flex justify-content-center">
        <div class="container">
            <div class="row h-100 align-items-center">
                <div class="col-md-7">
                    <div class="header-content">
                        <h3>Billing Address & Payment</h3>
                        <div class="column">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>
                                        Full Name
                                    </td>
                                    <td>
                                        <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required>
                                    </td>
                                    <td>
                                                Name on Card
                                            </td>
                                            <td>
                                                <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
                                            </td>
                                </tr>
                                <tr>
                                    <td>
                                        Email
                                    </td>
                                    <td>
                                        <input type="text" id="email" name="email" placeholder="example@example.com" required>
                                    </td>
                                    <td>
                                                Credit Card Number
                                            </td>
                                            <td>
                                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
                                            </td>
                                </tr>
                                <tr>
                                    <td>
                                        Address     
                                    </td>
                                    <td>
                                        <input type="text" id="adr" name="address" placeholder="Apt No., Building Name, Road Name, Area" required>
                                    </td>
                                    <td>
                                                Expiry Date
                                            </td>
                                            <td>
                                                <input type="text" id="expmonth" name="expmonth" placeholder="MM/YYYY" required>
                                            </td>
                                </tr>
                                <tr>
                                    <td>
                                        City
                                    </td>
                                    <td>
                                        <input type="text" id="city" name="city" placeholder="Chennai" required>
                                    </td>
                                    <td>
                                                CVV
                                            </td>
                                            <td>
                                                <input type="text" id="cvv" name="cvv" placeholder="352" required>
                                            </td>
                                </tr>
                                <tr>
                                    <td>
                                        Zip
                                    </td>
                                    <td>
                                        <input type="text" id="zip" name="zip" placeholder="600127" required>
                                    </td>
                                    <td></td><td></td>
                                </tr>
                            </thead>
                        </table>
                        
                            <label>
                            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                            </label>
                            <br>
                            <input type="submit" value="Continue to checkout" class="btn btn-primary btn-block" onclick=redirect()>
                        </form>
                    </div>
                    </div>  
                </div>
            </div>  
        </div>
    </header>
    <footer class="footer py-4 bg-dark text-light"> 
        <div class="container text-center">
            <p class="mb-4 small">Vaishnavi Shukla 20BAI1036</p>
            <p class="mb-4 small">Emmay Koushal 20BAI1210</p>
        </div>
    </footer>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Rubic js -->
    <script src="assets/js/rubic.js"></script>
    <script>
        function buy(){
            var name=localStorage.getItem("name");
            var price=localStorage.getItem("price");
            document.getElementById("tit").innerHTML="YOUR ";
            document.getElementById("t").innerHTML="<table><thead><tr><td>Name</td><td>Price</td><td>Quantity</td></tr><tr><td>"+name+"</td><td>"+price+"</td><td><select id='qty'><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td></tr></thead></table>";
        }
        function redirect(){
            location.href='thankyou.php'
        }
    </script>

</body>
</html>
