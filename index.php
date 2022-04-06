<?php     
$servername = "localhost";
$username = "root";
$password = "";
$dbname="3gin-food-webapp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}





?>


<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <title> SKORA </title>
    <link href="product.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="">
</head>

<body>

    <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2 d-none d-md-inline-block" href=""
            style="font-size: 30px; background: linear-gradient(to right, #F17228 50%, #FFB30E 50%); background-clip: text;  -webkit-background-clip: text;-webkit-text-fill-color: transparent;">3GIN
        </a>
        <a class="py-2 d-none d-md-inline-block" href="" style="margin: top 20px;font: size 16px;">DELIVER TO<img
                src="img/delivericon.jpg" width="40" height="40">Current Location Mińsk Mazowiecki, PL</a>
        <a class="py-2 d-none d-md-inline-block" href=""><img src="img/loopa.png" width="30" height="30">SEARCH FOOD:<button
                style="margin-left:20px; box-shadow: 1.5px 1.5px 2px 1.5px #FFB800;"><img src="img/user.png" width="30"
                    height="30">Login</button></a>
    </nav>

    <main>
        <div class="gl">
            <div class="container px-5">
                <div class="row gx-5 ">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-left text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Are you starving?</h1>
                            <p>Within a few clicks, find meals that are accessible near you</p>
                            <div class="card text-center">
                                <div class="card-header">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="true" href="#">Delivery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Pickup</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <input class="form-control" type="text" placeholder="Enter Your Address">
                                    <button type="search" class="btn btn-danger">Find Food</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
              <?php foreach ($danie1 as $i) {
                echo  "<div class='col'>\n";
                echo "<div class='card' style='width: 18rem;'>\n";
                echo "<img class='card-img-top' src='$i[0]' alt='Card image cap'>\n";
                echo "<div class='card-body'>\n";
                echo "<h5 class='card-title'>$i[1]</h5>\n";
                echo  "<p class='card-text'></p>\n";
                echo "<a href='#' class='btn btn-primary tomek' >$i[2]</a>\n";
                echo   "</div>\n";
                echo"</div>\n";
                
              echo"</div>\n";
            };
              ?>
              
               
              
              
             
              
           

             
        </div>

        <div id="howdoes">
          <h2>How does it work</h2>
          <div class="container-fluid">
          <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3 justify-content-between">
          <div class="col-1">
          <img src="img/Vector.png">
          <p class="upper_text">Select location</p>
          <p class="bottom_text">Choose the location where your food will be delivered.</p>
          </div>
          <div class="col-1">
          <img src="img/menu 2.png">
          <p class="upper_text">Choose order</p>
          <p class="bottom_text">Check over hundreds of menus to pick your favorite food</p>
          </div>
          <div class="col-1">
          <img src="img/tom.png">
          <p class="upper_text">Pay advanced</p>
          <p class="bottom_text">It's quick, safe, and simple. Select several methods of payment</p>
          </div>
          <div class="col-1">
          <img src="img/ok.png">
          <p class="upper_text">Enjoy meals</p>
          <p class="bottom_text">Food is made and delivered directly to your home.</p>
          </div>
          </div>
          </div>
          </div>
        </div>
                
        <div id="popular_items">
                <h2>Popular items</h2>
                <div class="row">
                  <div class="col">
                    <img src="img/Arrow Left.png" style="margin-top:100px;">
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/dzik.png">
                      <div class="card-body">
                        <p class="card-text czarne">Cheese Burger</p>
                        <p class="card-text zlote"><img src="img/.png"> Burger Arena</p>
                        <p class="card-text czarne">$3.88</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn">Order Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/Rectangle 336.png">
                      <div class="card-body">
                        <p class="card-text czarne">Toffe's Cake</p>
                        <p class="card-text zlote"><img src="img/.png"> Top Sticks</p>
                        <p class="card-text czarne">$4.00</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn">Order Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/doncake.png">
                      <div class="card-body">
                        <p class="card-text czarne">Dancake</p>
                        <p class="card-text zlote"><img src="img/.png"> Cake World</p>
                        <p class="card-text czarne">$1.99</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn">Order Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/sandw.png">
                      <div class="card-body">
                        <p class="card-text czarne">Crispy Sandwich</p>
                        <p class="card-text zlote"><img src="img/.png"> Fastfood Dine</p>
                        <p class="card-text czarne">$3.00</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn">Order Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/.png">
                      <div class="card-body">
                        <p class="card-text czarne">Thai Soup</p>
                        <p class="card-text zlote"><img src="img/supa.png"> Essa</p>
                        <p class="card-text czarne">$2.79</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn">Order Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                      <img src="img/Arrow Right.png" style="margin-top:100px;">
                  </div>
                </div>
              </div>
            

          <div id="featured">
            <h1>Featured Restaurants</h1>
            <div class="container-fluid">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
              <div class="col">
                <div class="card">
                  <img src="img/Food Photo.png" class="obraz">
                  <div class="card-body">
                    <p class="card-text" id="black"><img src="img/pa2.png" class="icon"></p>
                    <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn tomorrow">Opens tomorrow</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="img/paramaxil.png" class="obraz">
                  <div class="card-body">
                    <p class="card-text" id="black"><img src="img/pa3.png" class="icon"></p>
                    <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn tomorrow">Opens tomorrow</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="img/paramaxil2.png" class="obraz">
                  <div class="card-body">
                    <p class="card-text" id="black"><img src="img/pa4.png" class="icon"></p>
                    <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn tomorrow">Opens now</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="img/paramaxil3.png" class="obraz">
                  <div class="card-body">
                    <p class="card-text" id="black"><img src="img/pa5.png" class="icon"></p>
                    <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn tomorrow">Opens now</button>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </br>
              </br>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                <div class="col">
                  <div class="card">
                    <img src="img/paramaxil4.png" class="obraz">
                    <div class="card-body">
                      <p class="card-text" id="black"><img src="img/pa6.png" class="icon"></p>
                      <div class="d-flex justify-content-between align-items-center">
                      <button type="button" class="btn tomorrow">Opens now</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="img/paramaxil5.png" class="obraz">
                     <div class="card-body">
                      <p class="card-text" id="black"><img src="img/pa7.png" class="icon"></p>
                      <div class="d-flex justify-content-between align-items-center">
                      <button type="button" class="btn tomorrow">Opens now</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="img/param.png" class="obraz">
                    <div class="card-body">
                      <p class="card-text" id="black"><img src="img/pa8.png" class="icon"></p>
                      <div class="d-flex justify-content-between align-items-center">
                      <button type="button" class="btn tomorrow">Opens now</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="img/param1.png" class="obraz">
                    <div class="card-body">
                      <p class="card-text" id="black"><img src="img/pa9.png" class="icon"></p>
                      <div class="d-flex justify-content-between align-items-center">
                      <button type="button" class="btn tomorrow">Opens now</button> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="dol">
                <button>View all</button>
              </div>
              </div>
              
            <div id="search">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-9">
                <h2>Search by Food</h2>
                </div>
              <div id="napis">
                <p >View all<img src="img/lewy.png" class="strzalki"> <img src="img/prawy .png" class="strzalki"></p>
              </div>
              
              <div class="row">
                <div class="col">
                 <img src="img/pizzuania.png" class="picture">
                 <p class="opis">Pizza</p>
                </div>

                <div class="col">
                  <img src="img/burgir.png" class="picture">
                  <p class="opis">Burger</p>
                 </div>

                 <div class="col">
                  <img src="img/nudle.png" class="picture">
                  <p class="opis">Noodles</p>
                 </div>
                 
                 <div class="col">
                  <img src="img/Food Phqoto.png" class="picture">
                  <p class="opis">Sub-sandwich</p>
                 </div>

                 <div class="col">
                  <img src="img/makaroni.png" class="picture">
                  <p class="opis">Chowmein</p>
                 </div>
              </div>
            </div>
          </div>
        </div>
            
            


    
              

      
          
            
                  
                
              
    </main>
    <div id="nadfooter">
      <h2>Are you ready to order with the best deals?</h2>
      <br>
      <button>PROCEED TO ORDER</button>
    </div>
    </main>
      <div class="footer">
        <div class="container-fluid">
        <div class="row" >
          <div class="col" style="margin-top: 70px;">
            <h1 class="whiteh1">Our top cities</h1>
            <div class="row">
            <div class="col">
            <ul>
              <li>San Francisco</li>
              <li>Miami</li>
              <li>San Diego</li>
              <li>East Bay</li>
              <li>Long Beach</li>
            </ul>
          </div>
          <div class="col">
            <ul>
              <li>Los Angeles</li>
              <li>Washington DC</li>
              <li>Seattle</li>
              <li>Portland</li>
              <li>Nashville</li>
            </ul>
          </div>
          <div class="col">
            <ul>
              <li>New York City</li>
              <li>Orange County</li>
              <li>Atlanta</li>
              <li>Charlotte</li>
              <li>Denver</li>
            </ul>
          </div>
          <div class="col">
            <ul>
              <li>Chicago</li>
              <li>Phoenix</li>
              <li>Las Vegas</li>
              <li>Sacramento</li>
              <li>Oklahoma City</li>
            </ul>
          </div>
          <div class="col">
            <ul>
              <li>Columbus</li>
              <li>New Mexico</li>
              <li>Albuquerque</li>
              <li>Sacramento</li>
              <li>New Orleans</li>
            </ul>
          </div>
          </div>
        </div>
      </div>
      <hr style="width:90%;text-align:left;margin-left:0; color: #424242;">
        <div class="row">
        <div class="col col-1">
          <h1 class="whiteh1">Company</h1>
          <ul>
            <li>About us</li>
            <li>Team</li>
            <li>Careers</li>
            <li>Blog</li>
          </ul>
        </div>
        <div class="col col-1">
          <h1 class="whiteh1">Contact</h1>
          <ul>
            <li>Help & Support</li>
            <li>Partner with us</li>
            <li>Ride with us</li>
          </ul>
        </div>
        <div class="col col-1">
          <h1 class="whiteh1">Legal</h1>
          <ul>
            <li>Terms & Conditions</li>
            <li>Refund & Cancellation</li>
            <li>Privacy Policy</li>
            <li>Cookie Policy</li>
          </ul>
        </div>
        <div class="col social">
          <h1 class="whiteh1">FOLLOW US</h1>
          <br>
          <ul>
            <li><img src="img/instagram.png" width="24" style="width: 24px;"></li>
            <li><img src="img/fb.png" width="32" style="width: 24px;"></li>
            <li><img src="img/twitter.png" width="" style="width: 24x;"></li>
            <br>
            <br>
            <li>Receive exclusive offers in your mailbox</li>
            <br>
            <br>
            <li><input class="text" type="text" placeholder="Enter Your Email"><button>Subscribe</button></li>
          </ul>
        </div>
        <hr style="width:90%;text-align:left;margin-left:0; color: #424242;">
        <div class="row">
          <div class="col-3">
            <p>All rights Reserved Your Company, 2021</p>
          </div>
          <div class="col-8" style="text-align:right;">
            <p>All rights Reserved Your Company, 2021</p>
          </div>
        </div>
      <div class="clearfix"></div>
      </div>
      </div>
    </div>
      

</body>


</html>