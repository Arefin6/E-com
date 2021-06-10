@extends('layouts.frontendMaster')
@section('content')
<div class="blog-top">

</div>
<br><br>

<div class="container-fluid">
    <div class="row">
      <div class="col-sm-3" >
        <!--------------------blog Cetagory------------------------------>
        <div class="blog-cat">
            <p>Categories</p>
            <ul>
                <li>
                    <a href="">mobile</a>

                </li>
                <li>
                    <a href="">Tv</a>
                </li>
                <li>
                    <a href="">Vigitable</a>
                </li>
                <li>
                    <a href="">soibin oil</a>
                </li>
                <li>
                    <a href="">
                        Furits
                    </a>
                </li>
                <li>
                    <a href="">
                        fession
                    </a>
                </li>
            </ul>
            
        </div>
          <!--------------------end blog Cetagory------------------------------>


            <!--------------------Recent post----------------------------->
            <div class="recentpost">
                
                <p>recent posts</p>

                <ul>
                    <li>
                        <a href=""> Designers Use Line Drawings <br>
                          <i id="date"> May 30, 2018 </i> </a>

                    </li>
                    <li>
                        <a href="">Attached To The Design <br>
                            <i id="date"> May 30, 2018 </i> </a>

                    </li>
                    <li>
                        <a href=""> Designers Use Line Drawings <br>
                            <i id="date"> May 30, 2018 </i> </a>

                    </li>
                    <li>
                        <a href=""> Designers Use Line Drawings <br>
                            <i id="date"> May 30, 2018 </i></a>

                    </li>
                </ul>
               
            </div>
            <!--------------------end Recent post----------------------------->

            <!--------------------social media----------------------------->
            <div class="socal_bmedia">
                <p>social media</p>
                <ul>
                    <li>
                        <a href=""><i class="fab fa-facebook"></i></a>

                    </li>
                    <li>
                        <a href=""><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fab fa-google"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>

            <div class="video_media">
                <p>video post</p>
                <!-------------------------------vdeio card--------------------------->
                <div class="card" style="width: 18rem; border: none; margin-top: 20px;">
                    <video   controls>
                        <source src="smoke.mp4" type="video/mp4">
                        
                        Your browser does not support the video tag.
                      </video>
                    <div class="card-body">
                      <h5 class="card-title blog-card-title">Designers Use Line Drawings</h5>
                      <div class="card-date">
                          <ul>
                              <li>
                             <i class="far fa-user"></i> <span class="card-adcv">Admin</span>  

                              </li>
                              <li>
                                  <i class="far fa-calendar"></i> <span class= "card-adcv">may,30,2021</span>
                                

                              </li>
                              <li>
                                <i class="far fa-comment"></i> <span class="card-adcv">comment</span>
                              </li>
                          </ul>
                        </div>
                          
                      
                     
                    </div>
                  </div>
                <!-------------------------------vdeio card--------------------------->
            </div>



      </div>
      <!----------------------------------------------------blog posts-------------------------------------------------->
      <div class="col-sm-9" >
        <div class="container-fluid">
            <div class="row">
                <!-------------------------------------------card1------------------------------------------->
                @if($posts->count()>0)
                   
                   @foreach($posts as $post)
                <div class="col-sm-6" style="margin-top: 25px;">
                    <div class="card" style="width: 25rem; border: none;">
                        <img src="{{ asset('/'. $post->featured) }}" class="card-img-top" alt="..." style="height: 290px;">
                        <div class="card-body">
                          <h5 class="card-title blog-card-title">{{$post->title}}</h5>
                          <div class="card-date">
                              <ul>
                                  <li>
                                 <i class="far fa-user blog-user"></i> <span class="card-adc">Admin</span>  

                                  </li>
                                  <li>
                                      <i class="far fa-calendar blog-user"></i> <span class= "card-adc">{{$post->created_at->format('d/m/Y')}}</span>
                                    

                                  </li>
                                  <li>
                                    <i class="far fa-comment blog-user"></i> <span class="card-adc">comment</span>
                                  </li>
                              </ul>
                            </div>
                              
                          <p class="card-text"> {{ str_limit($post->content, 60) }}</p>
                          <a href="#" class="read-btn "> 
                              <span class="read-btn-desing" >Countinue reading</span> <i class="fas fa-arrow-right"></i>
                               </a>
                        </div>
                      </div>
                  </div>

                  <!-------------------------------------------end card1------------------------------------------->
                  @endforeach
                
                @else
                    <tr>
                    		<th colspan="5" class="text-center">No Posts Yet..</th>
                    </tr>
                 @endif   
                            
                     
              
<!-------------------------------------------endcard2------------------------------------------->
<!-------------------------------------------card3------------------------------------------->


              
<!-------------------------------------------end card4------------------------------------------->


            </div>
          </div>
      </div>
<!----------------------------------------------------end blog posts-------------------------------------------------->
 
    
@endsection 