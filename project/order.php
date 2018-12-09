<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Order Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css"  href="homepage.css" />
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:#e67e22
            }
            h1:after{
                width: 100px;
                height: 2px;
                background-color: #e67e22;
                display: block;
                content: "";
                margin:0 auto;
                margin-top:30px;
            }
            h2{
                color:#e67e22
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
        <!-- order page -->
        <div class="jumbotron">
        <form action="process.php" method="post" enctype="multipart/form-data">
            <h1 class="text-center">ORDER PAGE</h1>
            
                <div class="container">
                    <div class="order-form">
                        <div class="main-div">
                            <div class="panel">
                                <h2>Place Your Order</h2>
                            </div>
                            <form id="Login">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="customer_name "id="inputName" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="phone_num"id="inputPhone_num" placeholder="Phone number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address_cust" id="inputaddress" placeholder="Delivery Address" required>
                                </div>
                                <div class="form-group"> 
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <input type="text" id="last_24" name="menu" class="form-textbox validate[required]" size="50" value="" data-component="last" required="" />
                                        <label class="form-sub-label" for="last_24" id="sublabel_last" style="min-height:13px"> Menu name </label>
                                    </span>
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <input type="text" id="suffix_24" name="quantity_item" class="form-textbox" size="30" value="" data-component="suffix" required="" />
                                        <label class="form-sub-label" for="suffix_24" id="sublabel_suffix" style="min-height:13px"> Quantity </label>
                                    </span> 
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                        <input type="text" id="suffix_24" name="total_item" class="form-textbox" size="30" value="" data-component="suffix" required="" />
                                        <label class="form-sub-label" for="suffix_24" id="sublabel_suffix" style="min-height:13px"> Total </label>
                                    </span> 
                                </div> 
                                <div class="form-group">  
                                    <div id="cid_2" class="form-input-wide">
                                        <div style="margin-left:1000px" class="form-buttons-wrapper">
                                            <button id="input_2" type="submit" class="form-submit-button form-submit-button-steel" data-component="button">
                                            Place Order
                                            </button>
                                        </div>
                                    </div> 
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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

