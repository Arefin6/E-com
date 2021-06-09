@extends('layouts.frontendMaster')
@section('content')                                   
    <div class="slder">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/farniture1.jpg" class="d-block w-100" alt="..." style="height: 450px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5 >BIGEST SEll</h5> 
                    <p > Easy to buy. </p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="images/Furniture2.jpg" class="d-block w-100" alt=""style="height: 450px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5 >Your fevorite Product</h5> 
                    <p > Easy to buy. </p>
                  </div>
              </div>
           
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <br>

          <!----------------------product slider---------------------->
          <div class="container-fluid">
            <div id="productSlider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="10000">
                    <div class="row" style="height: 240px;">
                        <div class="col-3">
                            <img src="img/p1.jpg" alt="" class="w-100 product" style="height: 240px;">
                        </div>
                        <div class="col-3">
                            <img src="img/p2.jpg" alt="" class="w-100 product" style="height: 240px;">
                        </div>
                        <div class="col-3">
                            <img src="img/p3.jpg" alt="" class="w-100 product" style="height: 240px;">
                        </div>
                        <div class="col-3">
                            <img src="img/p4.jpg" alt="" class="w-100 product"style="height: 240px;">
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <div class="row" style="height: 240px;">
                        <div class="col-3">
                            <img src="img/p1.jpg" alt="" class="w-100 product" style="height: 240px;">
                        </div>
                        <div class="col-3">
                            <img src="img/p2.jpg" alt="" class="w-100 product" style="height: 240px;">
                        </div>
                        <div class="col-3">
                            <img src="img/p3.jpg" alt="" class="w-100 product" style="height: 240px;">
                        </div>
                        <div class="col-3">
                            <img src="img/p4.jpg" alt="" class="w-100 product" style="height: 240px;">
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                        <div class="col-3" style="height: 240px;">
                            <img src="img/p1.jpg" alt="" class="w-100 product" style="height: 240px;">
                        </div>
                        <div class="col-3">
                            <img src="img/p2.jpg" alt="" class="w-100 product" style="height: 240px;">
                        </div>
                        <div class="col-3">
                            <img src="img/p3.jpg" alt="" class="w-100 product" style="height: 240px;">
                        </div>
                        <div class="col-3">
                            <img src="img/p4.jpg" alt="" class="w-100 product" style="height: 240px;">
                        </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#productSlider" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#productSlider" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
             </div>
          

    <!--------------------------------------->
    
      <br>
      <p class="arivel_titel">New Aravel</p>
      <div class="section1" > 
    <div class="new_arivel" >
 
        <div class="container" >
          <br>
          <div class="row slider">
       
           <div class="col-md-3 col-sm-6">
             <div class="product-grid">
                 <div class="product-image">
                     <a href="#" class="image">
                         <img class="pic-1" src="images/download.jpg">
                         <img class="pic-2" src="images/dove.jpg">
                     </a>
                     <span class="product-discount-label">-40%</span>
                     <ul class="product-links">
                         <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                         <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                         <li><a href="card.html" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                         <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                     </ul>
                 </div>
                 <div class="product-content">
                     <ul class="rating">
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                     </ul>
                     <h3 class="title"><a href="#">Dove sope</a></h3>
                     <div class="price"><span>$100.00</span> $60.00</div>
                 </div>
             </div>
           </div>
       
         <div class="col-md-3 col-sm-6">
           <div class="product-grid">
               <div class="product-image">
                   <a href="#" class="image">
                       <img class="pic-1" src="images/fogg1.jpg">
                       <img class="pic-2" src="images/fogg1.jpg">
                   </a>
                   <span class="product-discount-label">-40%</span>
                   <ul class="product-links">
                       <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                       <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                       <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                       <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                   </ul>
               </div>
               <div class="product-content">
                   <ul class="rating">
                       <li class="fas fa-star"></li>
                       <li class="fas fa-star"></li>
                       <li class="fas fa-star"></li>
                       <li class="fas fa-star"></li>
                       <li class="fas fa-star"></li>
                   </ul>
                   <h3 class="title"><a href="#">Dove sope</a></h3>
                   <div class="price"><span>$100.00</span> $60.00</div>
               </div>
           </div>
         </div>
       
       <div class="col-md-3 col-sm-6">
         <div class="product-grid">
             <div class="product-image">
                 <a href="#" class="image">
                     <img class="pic-1" src="images/flower.jpg">
                     <img class="pic-2" src="images/flower2.jpg">
                 </a>
                 <span class="product-discount-label">-40%</span>
                 <ul class="product-links">
                     <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                     <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                     <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                     <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                 </ul>
             </div>
             <div class="product-content">
                 <ul class="rating">
                     <li class="fas fa-star"></li>
                     <li class="fas fa-star"></li>
                     <li class="fas fa-star"></li>
                     <li class="fas fa-star"></li>
                     <li class="fas fa-star"></li>
                 </ul>
                 <h3 class="title"><a href="#">Dove sope</a></h3>
                 <div class="price"><span>$100.00</span> $60.00</div>
             </div>
         </div>
       </div>
             
    
       <div class="col-md-3 col-sm-6">
         <div class="product-grid">
             <div class="product-image">
                 <a href="#" class="image">
                     <img class="pic-1" src="images/lux.jpeg">
                     <img class="pic-2" src="images/dove.jpg">
                 </a>
                 <span class="product-discount-label">-40%</span>
                 <ul class="product-links">
                     <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                     <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                     <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                     <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                 </ul>
             </div>
             <div class="product-content">
                 <ul class="rating">
                     <li class="fas fa-star"></li>
                     <li class="fas fa-star"></li>
                     <li class="fas fa-star"></li>
                     <li class="fas fa-star"></li>
                     <li class="fas fa-star"></li>
                 </ul>
                 <h3 class="title"><a href="#">Dove sope</a></h3>
                 <div class="price"><span>$100.00</span> $60.00</div>
             </div>
         </div>
       </div>
       
          </div>
        </div>
       
       </div>
</div>

    

<br>
<div class="section3">
    <div class="banner">
        <br>
        <div class="font-ban">
            <h2 class="font-ban-h">Wellcome to our e-commers website.</h2>
            <h3 class="font-ban-h">Here you can easy to buy product.</h3>
            <h4 class="font-ban-h">join us</h4>
        </div>
       
    </div>
</div>

         <br>
                    
    <p class="deals_titel">deals of the day</p>
    <div class="Section2">
        <div class="deals" >
     
            <div class="container">
              <br><br>
             
              <div class="row slider">
           
               <div class="col-md-3 col-sm-6">
                 <div class="product-grid">
                     <div class="product-image">
                         <a href="#" class="image">
                             <img class="pic-1" src="images/lux.jpeg">
                             <img class="pic-2" src="images/dove.jpg">
                         </a>
                         <span class="product-discount-label">-40%</span>
                         <ul class="product-links">
                             <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                             <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                             <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                             <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                         </ul>
                     </div>
                     <div class="product-content">
                         <ul class="rating">
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                         </ul>
                         <h3 class="title"><a href="#">Dove sope</a></h3>
                         <div class="price"><span>$100.00</span> $60.00</div>
                     </div>
                 </div>
               </div>
           
             <div class="col-md-3 col-sm-6">
               <div class="product-grid">
                   <div class="product-image">
                       <a href="#" class="image">
                           <img class="pic-1" src="images/fogg-royal-500x500.jpeg">
                           <img class="pic-2" src="images/fogg-royal-500x500.jpeg">
                       </a>
                       <span class="product-discount-label">-40%</span>
                       <ul class="product-links">
                           <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                           <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                           <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                           <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                       </ul>
                   </div>
                   <div class="product-content">
                       <ul class="rating">
                           <li class="fas fa-star"></li>
                           <li class="fas fa-star"></li>
                           <li class="fas fa-star"></li>
                           <li class="fas fa-star"></li>
                           <li class="fas fa-star"></li>
                       </ul>
                       <h3 class="title"><a href="#">Dove sope</a></h3>
                       <div class="price"><span>$100.00</span> $60.00</div>
                   </div>
               </div>
             </div>
           
           
           <div class="col-md-4">
             <div class="product-grid">
                 <div class="product-image">
                     <a href="#" class="image">
                         <img class="pic-1" src="images/table2.png">
                         <img class="pic-2" src="images/table2.png">
                     </a>
                     <span class="product-discount-label">-40%</span>
                     <ul class="product-links">
                         <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                         <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                         <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                         <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                     </ul>
                 </div>
                 <div class="product-content">
                     <ul class="rating">
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                     </ul>
                     <h3 class="title"><a href="#">Dove sope</a></h3>
                     <div class="price"><span>$100.00</span> $60.00</div>
                 </div>
             </div>
           </div>
           
           
           
           <div class="col-md-3 col-sm-6">
             <div class="product-grid">
                 <div class="product-image">
                     <a href="#" class="image">
                         <img class="pic-1" src="images/char1.jpg">
                         <img class="pic-2" src="images/char1.jpg">
                     </a>
                     <span class="product-discount-label">-40%</span>
                     <ul class="product-links">
                         <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                         <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                         <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                         <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                     </ul>
                 </div>
                 <div class="product-content">
                     <ul class="rating">
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                     </ul>
                     <h3 class="title"><a href="#">Dove sope</a></h3>
                     <div class="price"><span>$100.00</span> $60.00</div>
                 </div>
             </div>
           </div>
           
           
           
           <div class="col-md-3 col-sm-6">
             <div class="product-grid">
                 <div class="product-image">
                     <a href="#" class="image">
                         <img class="pic-1" src="images/cloth.png">
                         <img class="pic-2" src="images/cloth.png">
                     </a>
                     <span class="product-discount-label">-40%</span>
                     <ul class="product-links">
                         <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                         <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                         <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                         <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                     </ul>
                 </div>
                 <div class="product-content">
                     <ul class="rating">
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                     </ul>
                     <h3 class="title"><a href="#">Dove sope</a></h3>
                     <div class="price"><span>$100.00</span> $60.00</div>
                 </div>
             </div>
           </div>
           
           
           
           <div class="col-md-3 col-sm-6">
             <div class="product-grid">
                 <div class="product-image">
                     <a href="#" class="image">
                         <img class="pic-1" src="images/lux.jpg">
                         <img class="pic-2" src="images/dove.jpg">
                     </a>
                     <span class="product-discount-label">-40%</span>
                     <ul class="product-links">
                         <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                         <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                         <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                         <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                     </ul>
                 </div>
                 <div class="product-content">
                     <ul class="rating">
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                     </ul>
                     <h3 class="title"><a href="#">Dove sope</a></h3>
                     <div class="price"><span>$100.00</span> $60.00</div>
                 </div>
             </div>
           </div>
           
           
           <div class="col-md-3 col-sm-6">
             <div class="product-grid">
                 <div class="product-image">
                     <a href="#" class="image">
                         <img class="pic-1" src="images/lux.jpeg">
                         <img class="pic-2" src="images/dove.jpg">
                     </a>
                     <span class="product-discount-label">-40%</span>
                     <ul class="product-links">
                         <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                         <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                         <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                         <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                     </ul>
                 </div>
                 <div class="product-content">
                     <ul class="rating">
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                     </ul>
                     <h3 class="title"><a href="#">Dove sope</a></h3>
                     <div class="price"><span>$100.00</span> $60.00</div>
                 </div>
             </div>
           </div>
           
           
           
           <div class="col-md-3 col-sm-6">
             <div class="product-grid">
                 <div class="product-image">
                     <a href="#" class="image">
                         <img class="pic-1" src="images/lux.jpeg">
                         <img class="pic-2" src="images/dove.jpg">
                     </a>
                     <span class="product-discount-label">-40%</span>
                     <ul class="product-links">
                         <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                         <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                         <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                         <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                     </ul>
                 </div>
                 <div class="product-content">
                     <ul class="rating">
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                     </ul>
                     <h3 class="title"><a href="#">Dove sope</a></h3>
                     <div class="price"><span>$100.00</span> $60.00</div>
                 </div>
             </div>
           </div>
           
           
           
           <div class="col-md-3 col-sm-6">
             <div class="product-grid">
                 <div class="product-image">
                     <a href="#" class="image">
                         <img class="pic-1" src="images/lux.jpeg">
                         <img class="pic-2" src="images/dove.jpg">
                     </a>
                     <span class="product-discount-label">-40%</span>
                     <ul class="product-links">
                         <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                         <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                         <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                         <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                     </ul>
                 </div>
                 <div class="product-content">
                     <ul class="rating">
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                     </ul>
                     <h3 class="title"><a href="#">Dove sope</a></h3>
                     <div class="price"><span>$100.00</span> $60.00</div>
                 </div>
             </div>
           </div>
           
               
           <div class="col-md-3 col-sm-6">
             <div class="product-grid">
                 <div class="product-image">
                     <a href="#" class="image">
                         <img class="pic-1" src="images/lux.jpeg">
                         <img class="pic-2" src="images/dove.jpg">
                     </a>
                     <span class="product-discount-label">-40%</span>
                     <ul class="product-links">
                         <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                         <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                         <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                         <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                     </ul>
                 </div>
                 <div class="product-content">
                     <ul class="rating">
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                     </ul>
                     <h3 class="title"><a href="#">Dove sope</a></h3>
                     <div class="price"><span>$100.00</span> $60.00</div>
                 </div>
             </div>
           </div>
           
           
           
           <div class="col-md-3 col-sm-6">
             <div class="product-grid">
                 <div class="product-image">
                     <a href="#" class="image">
                         <img class="pic-1" src="images/lux.jpeg">
                         <img class="pic-2" src="images/dove.jpg">
                     </a>
                     <span class="product-discount-label">-40%</span>
                     <ul class="product-links">
                         <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                         <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                         <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                         <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                     </ul>
                 </div>
                 <div class="product-content">
                     <ul class="rating">
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                         <li class="fas fa-star"></li>
                     </ul>
                     <h3 class="title"><a href="#">Dove sope</a></h3>
                     <div class="price"><span>$100.00</span> $60.00</div>
                 </div>
             </div>
           </div>
           
              </div>
            </div>
           
           </div>
    </div>



    <!---->
    <div class="section4">
        <div class="shopcatg">
            <p>Shop by category</p>
        </div>
         <br>
      

            
         <div class="container">

<section id="container">
    <div class="row">
        
      <div class="large-12 columns">
        <div class="owl-carousel owl-theme">
        @if($categories->count()>0)
                   
        @foreach($categories as $category)
          <div class="item">
            <div class="catagory-top">
         
                <img class="catagoryimg" src="{{ asset('/'. $category->image) }}" alt="">
             <div class="catname"> <p >{{$category->name}}</p> </div> 
        </div>
          </div>

                 @endforeach
                
                @else
                    <tr>
                    		<th colspan="5" class="text-center">No Categories Yet..</th>
                    </tr>
                 @endif   
          
        
          
          <div class="item">
            <h4>5</h4>
          </div>
          <div class="item">
            <h4>6</h4>
          </div>
          <div class="item">
            <h4>7</h4>
          </div>
          <div class="item">
            <h4>8</h4>
          </div>
          <div class="item">
            <h4>9</h4>
          </div>
          <div class="item">
            <h4>10</h4>
          </div>
          <div class="item">
            <h4>11</h4>
          </div>
          <div class="item">
            <h4>12</h4>
          </div>
        </div>
        


  </div>
</div>
    
</section>

</div>

    </div>
      

    </div>

                                    <!--------------------------Offer Banner------------------------->






<br>

                                  
                                                   
                                       <!------------best seling product---------------->
<div class="section6">

    <p class="selling_titel">Best seling product</p>

         <br>
         <div class="container">
            <div class="row">

              <div class="col">
                  <div class="h" style="width: 260px; ">  
                      <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" src="images/download.jpg">
                            <img class="pic-2" src="images/dove.jpg">
                        </a>
                        <span class="product-discount-label">-40%</span>
                        <ul class="product-links">
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <ul class="rating">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul>
                        <h3 class="title"><a href="#">Dove sope</a></h3>
                        <div class="price"><span>$100.00</span> $60.00</div>
                    </div>
                </div></div>
               </div>
               <!--------------------------------------------------------------------------------->

            
               <div class="col">
                  <div class="h" style="width: 260px;">  
                      <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" src="images/download.jpg">
                            <img class="pic-2" src="images/dove.jpg">
                        </a>
                        <span class="product-discount-label">-40%</span>
                        <ul class="product-links">
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <ul class="rating">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul>
                        <h3 class="title"><a href="#">Dove sope</a></h3>
                        <div class="price"><span>$100.00</span> $60.00</div>
                    </div>
                </div></div>
               </div>
               <!--------------------------------------------------------------------------------------->

               <div class="col">
                  <div class="h" style="width: 260px;">  
                      <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" src="images/download.jpg">
                            <img class="pic-2" src="images/dove.jpg">
                        </a>
                        <span class="product-discount-label">-40%</span>
                        <ul class="product-links">
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <ul class="rating">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul>
                        <h3 class="title"><a href="#">Dove sope</a></h3>
                        <div class="price"><span>$100.00</span> $60.00</div>
                    </div>
                </div></div>
               </div>
               <!----------------------------------------------------------->
               <div class="col">
                  <div class="h" style="width: 260px;">  
                      <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" src="images/download.jpg">
                            <img class="pic-2" src="images/dove.jpg">
                        </a>
                        <span class="product-discount-label">-40%</span>
                        <ul class="product-links">
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <ul class="rating">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul>
                        <h3 class="title"><a href="#">Dove sope</a></h3>
                        <div class="price"><span>$100.00</span> $60.00</div>
                    </div>
                </div></div>
               </div>
               <!--------------------------------------------------------------------------->

               <div class="col">
                  <div class="h" style="width: 260px;">  
                      <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" src="images/download.jpg">
                            <img class="pic-2" src="images/dove.jpg">
                        </a>
                        <span class="product-discount-label">-40%</span>
                        <ul class="product-links">
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <ul class="rating">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul>
                        <h3 class="title"><a href="#">Dove sope</a></h3>
                        <div class="price"><span>$100.00</span> $60.00</div>
                    </div>
                </div></div>
               </div>
               <!---------------------------------------------------------------------------->

               <div class="col">
                  <div class="h" style="width: 260px;">  
                      <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" src="images/download.jpg">
                            <img class="pic-2" src="images/dove.jpg">
                        </a>
                        <span class="product-discount-label">-40%</span>
                        <ul class="product-links">
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <ul class="rating">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul>
                        <h3 class="title"><a href="#">Dove sope</a></h3>
                        <div class="price"><span>$100.00</span> $60.00</div>
                    </div>
                </div></div>
               </div><!-------------------------------------------------------------------->

               <div class="col">
                  <div class="h" style="width: 260px;">  
                      <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" src="images/download.jpg">
                            <img class="pic-2" src="images/dove.jpg">
                        </a>
                        <span class="product-discount-label">-40%</span>
                        <ul class="product-links">
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <ul class="rating">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul>
                        <h3 class="title"><a href="#">Dove sope</a></h3>
                        <div class="price"><span>$100.00</span> $60.00</div>
                    </div>
                </div></div>
               </div>

               <!--------------------------------->

               <div class="col">
                  <div class="h" style="width: 260px;">  
                      <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1" src="images/download.jpg">
                            <img class="pic-2" src="images/dove.jpg">
                        </a>
                        <span class="product-discount-label">-40%</span>
                        <ul class="product-links">
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <ul class="rating">
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                            <li class="fas fa-star"></li>
                        </ul>
                        <h3 class="title"><a href="#">Dove sope</a></h3>
                        <div class="price"><span>$100.00</span> $60.00</div>
                    </div>
                </div></div>
               </div>
               <!----------------------------------->

              



            </div>
         </div>
<!-----------------------------------------------end card 4------------------------------------------------------------->
<!-----------------------------------------------end card 4------------------------------------------------------------->
                       
                              

     
      </div>
       </div>
    

   

     <br>
       <div class="section7">
        <div class="container">
            <div class="row">
              <div class="col" id="beauty_benner1">
                <img src="images/helmet.png" alt=""id="beauty_benner2_img">
              </div>
              <div class="col" id="beauty_benner2">
                <img src="images/cloth.png" alt="" id="beauty_benner2_img">
              </div>
           
            </div>
          </div>
                 <br>          
        
       </div>
       <div class="flash">
                   
        <p class="flash_titel">Flash Selling product</p>
       <div class="flash-time" style="margin-left: 40%;">
           <input type="datetime-local" name="" id="" style="text-align: center;">
       </div>
       <br>
        <div class="Section8">
            <div class="flashs" >
         
                <div class="container" >
                  
                 
                  <div class="row slider">
               
                   <div class="col-md-3 col-sm-6">
                     <div class="product-grid">
                         <div class="product-image">
                             <a href="#" class="image">
                                 <img class="pic-1" src="images/lux.jpeg">
                                 <img class="pic-2" src="images/dove.jpg">
                             </a>
                             <span class="product-discount-label">-40%</span>
                             <ul class="product-links">
                                 <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                 <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                 <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                 <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                             </ul>
                         </div>
                         <div class="product-content">
                             <ul class="rating">
                                 <li class="fas fa-star"></li>
                                 <li class="fas fa-star"></li>
                                 <li class="fas fa-star"></li>
                                 <li class="fas fa-star"></li>
                                 <li class="fas fa-star"></li>
                             </ul>
                             <h3 class="title"><a href="#">Dove sope</a></h3>
                             <div class="price"><span>$100.00</span> $60.00</div>
                         </div>
                     </div>
                   </div>
               
                 <div class="col-md-3 col-sm-6">
                   <div class="product-grid">
                       <div class="product-image">
                           <a href="#" class="image">
                               <img class="pic-1" src="images/flower3.jpg">
                               <img class="pic-2" src="images/flower3.jpg">
                           </a>
                           <span class="product-discount-label">-40%</span>
                           <ul class="product-links">
                               <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                               <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                               <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                               <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                           </ul>
                       </div>
                       <div class="product-content">
                           <ul class="rating">
                               <li class="fas fa-star"></li>
                               <li class="fas fa-star"></li>
                               <li class="fas fa-star"></li>
                               <li class="fas fa-star"></li>
                               <li class="fas fa-star"></li>
                           </ul>
                           <h3 class="title"><a href="#">Dove sope</a></h3>
                           <div class="price"><span>$100.00</span> $60.00</div>
                       </div>
                   </div>
                 </div>
               
               
               <div class="col-md-4">
                 <div class="product-grid">
                     <div class="product-image">
                         <a href="#" class="image">
                             <img class="pic-1" src="images/fogg-royal-500x500.jpeg">
                             <img class="pic-2" src="images/fogg-royal-500x500.jpeg">
                         </a>
                         <span class="product-discount-label">-40%</span>
                         <ul class="product-links">
                             <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                             <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                             <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                             <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                         </ul>
                     </div>
                     <div class="product-content">
                         <ul class="rating">
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                         </ul>
                         <h3 class="title"><a href="#">Dove sope</a></h3>
                         <div class="price"><span>$100.00</span> $60.00</div>
                     </div>
                 </div>
               </div>
               
               
               
               <div class="col-md-3 col-sm-6">
                 <div class="product-grid">
                     <div class="product-image">
                         <a href="#" class="image">
                             <img class="pic-1" src="images/table2.png">
                             <img class="pic-2" src="images/table2.png">
                         </a>
                         <span class="product-discount-label">-40%</span>
                         <ul class="product-links">
                             <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                             <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                             <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                             <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                         </ul>
                     </div>
                     <div class="product-content">
                         <ul class="rating">
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                         </ul>
                         <h3 class="title"><a href="#">Dove sope</a></h3>
                         <div class="price"><span>$100.00</span> $60.00</div>
                     </div>
                 </div>
               </div>
               
               
               
               <div class="col-md-3 col-sm-6">
                 <div class="product-grid">
                     <div class="product-image">
                         <a href="#" class="image">
                             <img class="pic-1" src="images/lux.jpeg">
                             <img class="pic-2" src="images/dove.jpg">
                         </a>
                         <span class="product-discount-label">-40%</span>
                         <ul class="product-links">
                             <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                             <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                             <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                             <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                         </ul>
                     </div>
                     <div class="product-content">
                         <ul class="rating">
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                         </ul>
                         <h3 class="title"><a href="#">Dove sope</a></h3>
                         <div class="price"><span>$100.00</span> $60.00</div>
                     </div>
                 </div>
               </div>
               
               
               
               <div class="col-md-3 col-sm-6">
                 <div class="product-grid">
                     <div class="product-image">
                         <a href="#" class="image">
                             <img class="pic-1" src="images/lux.jpg">
                             <img class="pic-2" src="images/dove.jpg">
                         </a>
                         <span class="product-discount-label">-40%</span>
                         <ul class="product-links">
                             <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                             <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                             <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                             <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                         </ul>
                     </div>
                     <div class="product-content">
                         <ul class="rating">
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                         </ul>
                         <h3 class="title"><a href="#">Dove sope</a></h3>
                         <div class="price"><span>$100.00</span> $60.00</div>
                     </div>
                 </div>
               </div>
               
               
               <div class="col-md-3 col-sm-6">
                 <div class="product-grid">
                     <div class="product-image">
                         <a href="#" class="image">
                             <img class="pic-1" src="images/lux.jpeg">
                             <img class="pic-2" src="images/dove.jpg">
                         </a>
                         <span class="product-discount-label">-40%</span>
                         <ul class="product-links">
                             <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                             <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                             <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                             <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                         </ul>
                     </div>
                     <div class="product-content">
                         <ul class="rating">
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                         </ul>
                         <h3 class="title"><a href="#">Dove sope</a></h3>
                         <div class="price"><span>$100.00</span> $60.00</div>
                     </div>
                 </div>
               </div>
               
               
               
               <div class="col-md-3 col-sm-6">
                 <div class="product-grid">
                     <div class="product-image">
                         <a href="#" class="image">
                             <img class="pic-1" src="images/lux.jpeg">
                             <img class="pic-2" src="images/dove.jpg">
                         </a>
                         <span class="product-discount-label">-40%</span>
                         <ul class="product-links">
                             <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                             <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                             <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                             <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                         </ul>
                     </div>
                     <div class="product-content">
                         <ul class="rating">
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                         </ul>
                         <h3 class="title"><a href="#">Dove sope</a></h3>
                         <div class="price"><span>$100.00</span> $60.00</div>
                     </div>
                 </div>
               </div>
               
               
               
               <div class="col-md-3 col-sm-6">
                 <div class="product-grid">
                     <div class="product-image">
                         <a href="#" class="image">
                             <img class="pic-1" src="images/lux.jpeg">
                             <img class="pic-2" src="images/dove.jpg">
                         </a>
                         <span class="product-discount-label">-40%</span>
                         <ul class="product-links">
                             <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                             <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                             <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                             <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                         </ul>
                     </div>
                     <div class="product-content">
                         <ul class="rating">
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                         </ul>
                         <h3 class="title"><a href="#">Dove sope</a></h3>
                         <div class="price"><span>$100.00</span> $60.00</div>
                     </div>
                 </div>
               </div>
               
                   
               <div class="col-md-3 col-sm-6">
                 <div class="product-grid">
                     <div class="product-image">
                         <a href="#" class="image">
                             <img class="pic-1" src="images/lux.jpeg">
                             <img class="pic-2" src="images/dove.jpg">
                         </a>
                         <span class="product-discount-label">-40%</span>
                         <ul class="product-links">
                             <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                             <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                             <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                             <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                         </ul>
                     </div>
                     <div class="product-content">
                         <ul class="rating">
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                         </ul>
                         <h3 class="title"><a href="#">Dove sope</a></h3>
                         <div class="price"><span>$100.00</span> $60.00</div>
                     </div>
                 </div>
               </div>
               
               
               
               <div class="col-md-3 col-sm-6">
                 <div class="product-grid">
                     <div class="product-image">
                         <a href="#" class="image">
                             <img class="pic-1" src="images/lux.jpeg">
                             <img class="pic-2" src="images/dove.jpg">
                         </a>
                         <span class="product-discount-label">-40%</span>
                         <ul class="product-links">
                             <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                             <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                             <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                             <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                         </ul>
                     </div>
                     <div class="product-content">
                         <ul class="rating">
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                             <li class="fas fa-star"></li>
                         </ul>
                         <h3 class="title"><a href="#">Dove sope</a></h3>
                         <div class="price"><span>$100.00</span> $60.00</div>
                     </div>
                 </div>
               </div>
               
                  </div>
                </div>
               
               </div>
        </div>

    

      </div>  


       <!---------------top brand--------------->
       <div class="section9">
        <div class="shopcatg">
            <p>TOP BRANDS</p>
        </div>
         <br>
         <div class="container">
            <section id="container">
                <div class="row">
                    
                  <div class="large-12 columns">
                    <div class="owl-carousel owl-theme">
                      <div class="item">
                        <div class=" top-band">
                     
                            <img class="catagoryimg" src="images/cocacola.png" alt="">
                         <div class="catname"> <p ></p> </div> 
                    </div>
                      </div>
                      <div class="item">
                        <div class="top-band">
                     
                            <img class="catagoryimg" src="images/uniliver.jpg" alt="">
                         <div class="catname"> <p ></p> </div> 
                    </div>
                      </div>
                      <div class="item">
                        <div class="top-band">
                     
                            <img class="catagoryimg" src="images/unnamed.png" alt="">
                         <div class="catname"> <p ></p> </div> 
                    </div>
                      </div>
                      <div class="item">
                        <div class="top-band">
                     
                            <img class="catagoryimg" src="images/daks.jpg" alt="">
                         <div class="catname"> <p ></p> </div> 
                    </div>
                      </div>
                      <div class="item">
                        <h4>5</h4>
                      </div>
                      <div class="item">
                        <h4>6</h4>
                      </div>
                      <div class="item">
                        <h4>7</h4>
                      </div>
                      <div class="item">
                        <h4>8</h4>
                      </div>
                      <div class="item">
                        <h4>9</h4>
                      </div>
                      <div class="item">
                        <h4>10</h4>
                      </div>
                      <div class="item">
                        <h4>11</h4>
                      </div>
                      <div class="item">
                        <h4>12</h4>
                      </div>
                    </div>
                    
     
    
              </div>
            </div>
                
        </section>
         </div>
     

</div>
           

               
           
                  
                    
              
      
  

     
@endsection
