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
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
                /* Float four columns side by side */
            
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
        <section class="w3-container w3-center" style="max-width:3000px">
            <h2 class="w3-wide">FOOD MENU CATEGORY</h2>
            <!-- section 1 -->
            <div class="row text-center">
                <div class="col-md-3">
                    <p class="lead" style="align:center"><b>RICE BASED</b></p><hr><br>
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\Jollof-Rice-768x432.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>JOLLOF RICE</b></h5>
                            <p>Price: #1200</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\spicy-vegan-fried-rice-6.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>FRIED RICE</b></h5>
                            <p>Price: #1500</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\coconut-rice-recipe.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>COCONUT RICE</b></h5>
                            <p>Price: #1000</p>
                            <a href="order.php" class="btn btn-primary">Order</a>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
          <!-- section 2 -->
        <section class="w3-container w3-center">
            <div class="row tex-center">
                <div class="col-md-2">
                    <p class="lead"><b>BEAN BASED</b></p><hr><br>
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\ewa-agoyin-40-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>EWA AGOYIN</b></h5>
                            <p>Price: #300</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\Moi moi.JPG" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>MOIN MOIN</b></h5>
                            <p>Price: #400</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
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
        </section>
             <!-- Section 3 -->
        <section class="w3-container w3-center" >     
            <div class="row text-center">
                <div class="col-md-2">
                    <p class="lead"><b>MEAT</b></p><hr><br>
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\Suya-Kebabs-Edited-e1433547189971.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>SUYA</b></h5>
                            <p>Price: #600</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\roast-chicken-with-crispy-skin-recipe.1024x1024.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>WHOLE CHICKEN</b></h5>
                            <p>Price: #2400</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class= "card" style= "width:15rem;">
                       <img class= "card-img-round" src="food\goat meat.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>GOAT MEAT</b></h5>
                            <p>Price: #800</p>
                            <a href="order.php" class="btn btn-primary">Order</a>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <!-- section 4 -->
        <section class="w3-container w3-center" >
            <div class="row text-center">
                <div class="col-md-2">
                    <p class="lead"><b>SOUPS</b></p><hr><br>
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\ewedu.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>EWEDU</b></h5>
                            <p>Price: #200</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">        
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\egusi-soup.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>EGUSI</b></h5>
                            <p>Price: #400</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\Ofe-Nsala.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title"><b>WHITE SOUP</b></h5>
                            <p>Price: #700</p>
                            <a href="order.php" class="btn btn-primary">Order</a>   
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\Afang-soup-16.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>AFANG SOUP</b></h5>
                            <p>Price: #500</p>
                            <a href="order.php" class="btn btn-primary">Order</a>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!-- Section 4 -->
        <section class="w3-container w3-center" >   
            <div class="row text-center">
                <div class="col-md-2">
                    <p class="lead"><b>YAM BASED</b></p><hr><br>
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\pounded yam and efo.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>POUNDED YAM</b></h5>
                            <p>Price: #400</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\amala.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>AMALA</b></h5>
                            <p>Price: #400</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
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
        </section>
            <!-- Section 5     -->
        <section class="w3-container w3-center" >
            <div class="row text-center">
                <p class="lead"><b>CASSAVA BASED</b></p><hr><br>
                <div class="col-md-2">
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\eba.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>EBA</b></h5>
                            <p>Price: #200</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
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
        </section>
        <!-- Section 6 -->
        <section class="w3-container w3-center">
            <div class="row">
                <p class="lead"><b>SIDE DISHES</b></p><hr><br>
                <div class="col-md-2">
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\dodo.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>DODO</b></h5>
                            <p>Price: #200</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class= "card" style= "width:15rem;">
                        <img class= "card-img-round" src="food\funkaso.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>FUNKASO</b></h5>
                            <p>Price: #200</p>
                            <a href="order.php" class="btn btn-primary">Order</a>
                        </div>
                    </div>
                    </div>
                </div>
        </section>
        <div class= "footer">
            <p clearfix>&copy;CopyRight<?=date("")?>mohfoods.com></p>
            <p>Designed by Oladeji Olamide</p>
        </div>
    </body>
</html>

