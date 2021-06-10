<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>habibstor</title>
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"   ></script>
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/slick-theme.css">




<link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">

<script src="assets/vendors/jquery.min.js"></script>
<script src="assets/owlcarousel/owl.carousel.js"></script>
</head>
<body>
    <header class="header">
        <div class="container-fulied">
            <div class="row v-center">
                <div class="header-item item-left">
                    <div class="logo">
                        <a href="#"><i class="fas fa-shopping-basket"></i>E-Store<i></i> </a>
                    </div>
                </div>
                <!-- menu start here -->
                <div class="header-item item-center" >
                    <div class="menu-overlay">
                    </div>
                    <nav class="menu">
                        <div class="mobile-menu-head">
                            <div class="go-back"><i class="fa fa-angle-left"></i></div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="menu-main">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Shop</a>
                            </li>
            
                            <li>
                                <a href="#">Blog</a>
      
                             </li> 
                             <li>
                                <a href="#">Login</a>
      
                             </li> 
                             <li>
                                <a href="{{route('message.create')}}">Contact</a>
      
                             </li> 
                        </ul> 
                   </nav>

                </div>
                <div class="header-item item-right" >
                    <input type="search" name="" id="">
                    <button id="btn-header-srh"><i class="fas fa-search"></i></button>
                  
                    <a href="#"><i class="far fa-heart"></i></a>
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>         
             </div>
           </div>  
</header>               
                                       


 @yield('content')
 
          
<div class="section10">

    <footer>
        <div class="partone">
          <h2>social media:</h2>
          <div class="footermediah">
              <ul><li>
                  <a href=""><i class="fab fa-facebook-messenger" ></i></a>
              </li>
              <li>
                  <a href=""><i class="fab fa-whatsapp" ></i></a>
              </li>
              <li>
                  <a href=""><i class="fas fa-envelope" ></i></a>
              </li>
              <li>
                  <a href=""><i class="fab fa-twitter" ></i></a>
              </li>
              <li>
                  <a href=""><i class="fab fa-telegram" ></i></a>
              </li></ul>
          </div>
        </div>
        <div class="parttwo">

          <div class="container">
              <div class="row">
                <div class="col-sm">
                  <h3>E-store</h3>
                </div>
                <div class="col-sm">
                  <h4>Element</h4>
                  <div class="footerelement">
                      <ul>
                       <li>
                           <a href="">fession</a>
                       </li>
                       <li>
                           <a href="">fession</a>
                       </li>
                       <li>
                           <a href="">fession</a>
                       </li>
                       <li>
                           <a href="">fession</a>
                       </li>
                       <li>
                           <a href="">fession</a>
                       </li>
                      </ul>
                  </div>
                  
                </div>
                <div class="col-sm">
                 <h4>Information</h4>
                 <div class="footerinfo">
                  <ul>
                   <li>
                       <a href="">Contact us</a>
                   </li>
                   <li>
                       <a href="">Blog</a>
                   </li>
                   <li>
                       <a href="">About us</a>
                   </li>
                   <li>
                       <a href="">Social contact</a>
                   </li>
                   <li>
                       <a href="">fession</a>
                   </li>
                  </ul>
              </div>
                </div>
                <div class="col-sm">
                 <h4>Shop Cetagory</h4>
                 <div class="footercetagory">
                     <ul>
                      <li>
                          <a href="">fession</a>
                      </li>
                      <li>
                          <a href="">fession</a>
                      </li>
                      <li>
                          <a href="">fession</a>
                      </li>
                      <li>
                          <a href="">fession</a>
                      </li>
                      <li>
                          <a href="">fession</a>
                      </li>
                     </ul>
                 </div>
                </div>
              </div>
            </div>

      </div>
      <div class="partend">
           <p>
              Copyright © 2021 e-commerce. All rights reserved.
           </p>
      </div>
  </footer>
</div>

      <!-- footer -->
  
      <!-- vendors -->
     
      <script src="assets/vendors/highlight.js"></script>
      <script src="assets/js/app.js"></script>
      
      
   
      <script src="{{(asset(''))}}js/script.js"></script>
      <script src="js/owl.js"></script>
      <script src="js/code.js"></script>
      <script src="js/slick.js"></script>
      <script src="js/slider.js"></script>
       <script src="js/codeslick.js"></script>
       <script src="js/navbar.js"></script>
</body>
</html>
