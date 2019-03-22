@extends('layouts.app')
@section('content')
<section>    
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -20px">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/cr4/fw.jpg" alt="Los Angeles" style="height: 600px" >
    </div>

    <div class="item">
      <img src="images/cr4/fw1.jpg" alt="Chicago" style="height: 600px" >
    </div>

    <div class="item">
      <img src="images/cr4/thumb-1920-628278.jpg" alt="New York" style="height: 600px" >
    </div>
  </div>
</div>
    </div> </div> </section>
  <!-- Left and right controls 
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>--
</div><!--<div class="home">
  <a href="#v"  >
            <button >
           lets Start
            </button></a>
</div>-->
<div class="container" style=" margin-top: 50px">
  <div class="row">
    <div class="col-md-10 ">
      <iframe width="1000" height="515" src="https://www.youtube.com/embed/Zh4F3sZNLqA"
          frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  
  <h3 style="color: #913D88;font-family: 'Courgette', cursive;">recycling in minutes</h3>
    </div>
  </div>
  <div class="row" style="margin-top: 20px">
    <div class="col-md-8">
      <h1 style="color: #69F0AE;font-size: 40px;margin-bottom: 30px;border-bottom: 8px dotted #E0E0E0 ;padding: 10px;text-align: left;font-family: 'Courgette', cursive ;">
        WHAT WE DO...?
      </h1>
       </div>
 
     </div>
       <div class="row">
         <div class="col-md-8"> 
 <img src="images/fw3.jpg" width="600" alt="image">

         <p style="line-height: 1.8;margin-top: 20px">We manage and facialtate the process of transfer of rubbish from customer to factories of recycling. Now you can get rid of any Garbage you have sitting in your house.
</br>
just Fill out our order form and we will get back to you 
within the hour with .and enjoy a clean environment and clean House we save you time and effort just ask us.
</div>
      
      <div class="col-md-4" style="margin-top: -50px;
      ">
  <section id="facts">
 <ul class="list-group" style="background-color: #DCEDC8;
  margin-top: 50px">
            <li class="list-group-item text-muted" style="background-color: #F48FB1">Information and facts
 <i class="fa fa-dashboard fa-1x"></i></li>

            <li class="list-group-item text-right"  ><span class="pull-left"  ><strong><a href="/informationandfacts" style="text-decoration: none;">some things you did not know you can recycle</a> </strong></span>
             </li>
            <li class="list-group-item text-right" ><span class="pull-left" ><strong><a href="/informationandfacts/recyclingmagic"  style="text-decoration: none;">Recycling magic</a> </strong></span> </li>
            
            <li class="list-group-item text-right" ><span class="pull-left" ><strong><a href="/informationandfacts/reduce-population" style="text-decoration:none;">easy ways to reduce population</a> </strong></span> </li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
          </ul> 
  </section>
</div>
 </div>
               
  <div class="row">
    <div class="col-md-11 " >
             
       <h3 style="color: #69F0AE;font-size: 40px;margin-bottom: 30px;border-bottom: 8px dotted #E0E0E0 ;padding: 10px;text-align: left;font-family: 'Courgette', cursive ;">Recycling Gallery </h3>
     </div></div>
<div class="row">
    <div class="col-md-12 " >
          <div id ="description"  >
          <div class="content-img" style="margin-left: 50px">

          <div class="img1" style="display: inline">  <a href="/recycling gallery/steal">
         <img src="images/jpg/Capture5.jpg" alt="paper"   style="width:15%;height: 25% "></a></div>
         
          
        
          <div class="img2" style="display: inline"> <a href="/recycling gallery/glass">
          <img src="images/jpg/Capture1.jpg" alt="paper" style="width:30%;height: 25% "></a>
        
          </div>
         
          <div class="img3" style="display: inline"> <a href="/recycling gallery/plastic">
          <img src="images/jpg/Capture9.jpg" alt="paper" style="width:30%;height: 25%"></a></div>
           
        
               <div class="img4" style="display: inline"> <a href="/recycling gallery/aluminum">
           <img src="images/jpg/alu.jpg" alt="paper"
                style="width:15%;height: 25% "></a>
           </div>
        
</br>

          <div class="img5"style="display: inline"><a href="/recycling gallery/plastic_bages">
          <img src="images/jpg/Capture4.jpg" alt="paper" class="img1" 
          style="width:15%;height: 60% ;margin-top: 10px"></a></div>
         
           
              <div class="img6" style="display: inline" class="content-img"> <a href="/recycling gallery/paper">
        <img src="images/jpg/Capturej.jpg" alt="paper" class="img1"  style="width:30%;height: 25% ;margin-top: -170px" ></a>
        
        </div>
         
        <div class="img7" style="display: inline"> <a href="/recycling gallery/cartons">
             <img src="images/jpg/Capture8.jpg" alt="paper"  style="width:30%;height: 27% ;margin-top: -170px"></a></div>
           
           <div class="img8" style="display: inline"> <a href="/recycling gallery/electronics">
           <img src="images/jpg/Capture7 (1).jpg" alt="paper"  class="img1" style="width:15%;height: 25% ;margin-top: -170px"></a></div>
                    </div>
         
          <div class="img9" style="display: inline" >
           <a href="/recycling gallery/househould">
        <img src="images/jpg/Capture11.jpg" alt="paper" class="img1"  style="width:35%;height: 30% ;
        margin-top: -365px;margin-left: 230px"></a>
        
        </div>
        
          <div class="img10" style="display: inline"> <a href="/recycling gallery/food">
        <img src="images/jpg/Capture6.jpg" alt="paper" class="img1"  style="width:15%;height: 30% ;
        margin-top: -405px;margin-left: 660px"></a>
        
        </div>
        <div class="img11" style="display: inline" > <a href="/recycling gallery/food">
        <img src="images/jpg/Capture12.jpg" alt="paper" class="img1"  style="width:15%;height: 30% ;
        margin-top: -440px;margin-left: 870px"></a>
        
        </div>
               
      </div>
</div> </div>
 

    <div class="row" style="margin-left: 0">
      <div class="col-md-10">
         <h1 style="font-family: 'Courgette', cursive;border-bottom:8px dotted #E0E0E0 ;padding: 5px;text-align: left;color: #64B5F6">WHY YOU SHOULD CHOOSE US</h1>     

      </div>
    </div>
    <div class="row" style="margin-left: 50px">
  <div class="col-md-6" style="padding: 10px">  
       <i class="fa fa-tag fa-5x" aria-hidden="true" style="color: #64B5F6">  </i>
       <p> <strong>Great Low Prices</strong>
       Competitive<br>  No hidden surcharges of any kind!</p>
</div>  
    
    
<div class="col-md-6" style="padding: 10px">
      
      <i class="fa fa-pencil fa-4x" aria-hidden="true" style="color: #64B5F6"></i>

       <p> <strong>Easy Online Ordering</strong>  Fill out our contact<br>  form and we will get back to you
       <br>within the hour with a full quote.</p>
     </div>
</div>
  <div  class="row" style="margin-left: 50px">
      <div class="col-md-6" style="padding: 10px">
      <i class="fa fa-clock-o fa-4x" aria-hidden="true" style="color: #64B5F6"></i>

       <p> <strong>EAST TO FIND SHOP</strong> We're going
       to build <br> a shop in every small area, so we'll get you quick.
 <br>
       Service available 7 days a week​.</p>
 </div>      
       
<div class="col-md-6" style="padding: 10px">

         <i class="fa fa-phone fa-4x" aria-hidden="true" style="color: #64B5F6"></i>
       <p> <strong>Telephone Support</strong> We care about our customers
       <br>and strive to make your experience
       <br>with us the best ever. We are available
       <br>24h for any questions and problems you may have.</p>
     
       </div>      
    </div>

</div>




     
    
      
      
 
  @endsection
