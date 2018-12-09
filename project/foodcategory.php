<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Food Menu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="main.js"></script>
        <link href="bootstrap.min.css" rel="stylesheet">
        <style>
            .features h3{
                margin:10px;
            }
            h3:after{
                width: 100px;
                height: 2px;
                background-color: #e67e22;
                display: block;
                content: "";
                margin:0 auto;
                margin-top:30px;
            }
            h4{
                color:#e67e22;
                margin:15px;
            }
            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
                padding: 20px;
                text-align: center;
                background-color: #f1f1f1;
            }
             
        </style>
    </head>
    <body>
        <script src = "jquery-3.3.1.min.js"></script>
            <script src = "popper.min.js"></script>
            <script src="bootstrap.min.js"> </script>
        <!-- NavBar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
                <img class="navbar-brand" src="food/newlogo.JPG" alt="mylogo"/>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="homepage.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Admin</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!-- Different categories -->
    <div class=jumbotron>
        <section class="features">
            <h3 class="text-center">FOOD MENU CATEGORY</h3>
        <!-- FOR RICE -->
            <h4 class="text-center">RICE BASED</h4>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-3">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\Jollof-RIce-1.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title"><b>JOLLOF RICE</b></h5>
                            <p>Price: #1200</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\image-22.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>FRIED RICE</b></h5>
                                <p>Price: #1500</p>
                                <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\coconutrice.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>COCONUT RICE</b></h5>
                                <p>Price: #1000</p>
                                <a href="order.php" class="btn btn-primary">Order</a>   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\ofada-rice-plantain.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>OFADA RICE</b></h5>
                                <p>Price: #1000</p>
                                <a href="order.php" class="btn btn-primary">Order</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- FOR BEANS -->
            <h4 class="text-center" >BEANS BASED</h4>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\ewa-agoyin-40-3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>EWA AGOYIN</b></h5>
                                <p>Price: #300</p>
                                <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\moinmoinlove.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>MOIN MOIN</b></h5>
                                <p>Price: #400</p>
                                <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\Akara-9.jpg" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title"><b>AKARA</b></h5>
                                <p>Price: #100</p>
                                <a href="order.php" class="btn btn-primary">Order</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- FOR MEAT -->
            <h4 class="text-center">MEAT</h4>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\Suya-Kebabs-Edited-e1433547.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>SUYA</b></h5>
                                <p>Price: #600</p>
                                <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\roast-chicken-with-crispy-skin-recipe.1024x1024.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>WHOLE CHICKEN</b></h5>
                                <p>Price: #2400</p>
                                <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\goatmeat.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>GOAT MEAT</b></h5>
                                <p>Price: #800</p>
                                <a href="order.php" class="btn btn-primary">Order</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- FOR SOUPS -->
        <h4 class="text-center">MEAT</h4>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-3">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\ewedu.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>EWEDU</b></h5>
                                <p>Price: #200</p>
                                <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\Afang-soup-16.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>AFANG</b></h5>
                                <p>Price: #400</p>
                                <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\Ofe-Nsala.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>WHITE SOUP</b></h5>
                                <p>Price: #700</p>
                                <a href="order.php" class="btn btn-primary">Order</a>   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\edikaikon.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>EDIKAIKON</b></h5>
                                <p>Price: #700</p>
                                <a href="order.php" class="btn btn-primary">Order</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- YAM BASED -->
        <h4 class="text-center">YAM BASED</h4>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\pounded-yam.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>POUNDED YAM</b></h5>
                                <p>Price: #400</p>
                                <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\amala.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>AMALA</b></h5>
                                <p>Price: #400</p>
                                <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\asar0.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>PORRIAGE</b></h5>
                                <p>Price: #800</p>
                                <a href="order.php" class="btn btn-primary">Order</a>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- CASSAVA BASED  -->
        <h4 class="text-center">CASSAVA BASED</h4>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\eba.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>EBA</b></h5>
                                <p>Price: #200</p>
                                <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\fufu.jpg" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title"><b>FUFU</b></h5>
                                <p>Price: #200</p>
                                <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- SIDE DISHES -->
        <h4 class="text-center">SIDE DISHES</h4>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\dodo.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>DODO</b></h5>
                                <p>Price: #200</p>
                                <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class= "card" style= "width:15rem;">
                            <img class= "card-img-round" src="food\funkasooo.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>FUNKASO</b></h5>
                                <p>Price: #200</p>
                                <a href="order.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
    <!-- fOOTER -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark text-center" >
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="container">
			        <div class="row row-padded">
				        <div class="col-md-12 text-center" style="color:white">
					        <p class="to-animate">&copy; 2018 DUFUNA-FEM <br> Designed by OLADEJI OLAMIDE</p>
			            </div>
			        </div>
            </div>
	        </div>    
        </div> 
    </nav>   
    </body>
</html>