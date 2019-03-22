@extends('layouts.no-footer-app')
@section('content')
 <!--<div id="now">-->
  <div class="container" style=" margin-left: 80px;">
    @include('partials.error')
<div class="row">
        <div class="col-md-8 fact">
    <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;font-family: 'Courgette', cursive ;">Information and facts</h1>
      <img src="Original images/DIY-Projects-with-recycled-things.jpg" width="100%" height="500" alt="" >
        <div class="centered" style="position: absolute;
    top: 92%;
    left: 50%;
    transform: translate(-50%, -50%);"><a href="/informationandfacts" style="color: white;text-decoration: none;"><span style="background-color: #1976D2;padding: 10px;"> some things you may did not know you can recycle </span></a></div>

    </div>
    <div class="col-md-4">
<section id="facts">
    
  <ul class="list-group" style="background-color: #DCEDC8;
  margin-top: 50px">
            <li class="list-group-item text-muted" style="background-color: #F48FB1">Information and facts
 <i class="fa fa-dashboard fa-1x"></i></li>

            <li class="list-group-item text-right"  ><span class="pull-left"  ><strong><a href="/informationandfacts" style="text-decoration: none;">some things you did not know you can recycle</a> </strong></span>
             </li>
            <li class="list-group-item text-right" ><span class="pull-left" ><strong><a href="informationandfacts/recyclingmagic"  style="text-decoration: none;">Recycling magic</a> </strong></span> </li>
            
            <li class="list-group-item text-right" ><span class="pull-left" ><strong><a href="/informationandfacts/reduce-population" style="text-decoration:none;">easy ways to reduce population</a> </strong></span> </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
          </ul> 
       </section>   

    </div>
    </div>
  </div>
    
 <div class="container" style="margin-left: 0;margin-bottom: 80px">
  <form id="now" method="POST" action="{{url('makeorder'),auth()->user()->id }}" >
                        @csrf   

   
  <div class="row">
    <div class="col-md-10">
      <h3 style=" border-bottom: 5px dotted #03A9F4;
    font-family: 'Anton', sans-serif;
    font-size: 50px;
    padding-bottom: 15px;font-family: 'Courgette', cursive">
    Fill the next form and order: </h3>
    </div>
  </div>
   <div class="row" style="margin-top: 10px">
     <div class="col-md-6">
        <img src="images/jpg/Capture1.jpg" alt="glass" class="img-responsive glass"></br></br>
       <input type="text" style="height: 45px" name="glass" placeholder="glass" class="glass form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  required style="margin-top: -40px">
       </br></br>
@if ($errors->has('glass'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('glass') }}</strong>
                                    </span>
                                @endif
     </div>
   
     <div class="col-md-6">
        <img src="images/jpg/stack-of-paper-vector-doodle-paper-stack-stress-vector.jpg"
          alt="paper" class="img-responsive paper" ></br></br>
        <input type="text" name="paper" placeholder="paper"  class="inp_1" required style="margin-top: 0px">  
     </div>
</div>  
   <!-- row2-->
   <div class="row" style="margin-top: -30px">
     <div class="col-md-6">
        <img src="images/jpg/images (4)-iloveimg-converted.jpg" alt="plastic-containers" class="img-responsive plastic" ></br></br>
        <input type="text" name="plastic_containers" placeholder="plastic containers"  class="plastic"> 
     </div>

     <div class="col-md-6">
       <img src="images/jpg/alum.jpg" alt="kanz-containers" class="img-responsive aluminum" ></br></br>
       <input type="text" name="kanz_containers" placeholder="kanz-containers"  class="inp_2" style="margin-top: -10px"> 
     </div>
</div>
   <!-- row3-->
   <div class="row" style="margin-top: 20px">
        <div class="col-md-6" >
           <img src="images/jpg/item420065 (1)-iloveimg-converted.jpg" alt="steal" class="img-responsive steal" >
           <input type="text" name="steal" placeholder="steal"  class="inp_3"  style="margin-top: 30px"> 
        </div>

     <div class="col-md-6">
         <img src="images/jpg/images (10).jpg" alt="food" class="img-responsive food"  >
         <input type="text" name="food" placeholder="Food"  class="inp_4" style="margin-top: 30px">  
     </div>
</div> 
   <!-- row4-->
   <div class="row" style="margin-top: 20px">
    <div class="col-md-6">

         <img src="images/jpg/336.jpg" alt="paper" class="img-responsive elec"  >
         <input type="text" name="electronic" placeholder="electronic"  class="inp_5" style="margin-top: 30px">  
     </div>

     <div class="col-md-6">
        <img src="images/jpg/172690560_98ae354df2.jpg" alt=" paper" class="img-responsive pags"  >
        <input type="text" name="plastic_bages" placeholder="plastic pages"  class="inp_6" style="margin-top: 30px">  
  
     </div>
  </div>
<div class="row" style="margin-top: 50px;padding: 10px">
  <div class="col-md-8">
 <i class="fa fa-asterisk  start" aria-hidden="true" style="color: red"></i>
       <select  name="city" class="place form-control{{ $errors->has('email') ? ' is-invalid' : ''}}" required style="height: 50px">
            <option selected="" disabled="" > Select address</option>
            <option>shalby</option>
            <option>shahen city</option>
            <option>a5sa5</option>
            <option>taha hussein</option>
            <option>adnan</option>
            <option>ma7ta</option>
            <option>damaris</option>
            <option>cornis street</option></select>
   </div>
</div>       
   
        
        
<div class="row" style="padding: 10px">
  <div class="col-md-8">
     <i class="fa fa-asterisk  start2" aria-hidden="true"  style="color: red"></i>
       <select  name="return" class="form-control return2" placeholder="How do you get in return" required style="height: 50px">
            <option selected="" disabled=""> How do you get in return</option>
            <option value="money">MONEY</option>
            <option value="points">POINTS</option>
            
        </select>
  </div>
</div>
       

<div class="row" style="padding: 10px">
  <div class="col-md-8">
               <i class="fa fa-asterisk  start2" aria-hidden="true" style="color: #FF6E40"></i>

           <input type="text" name="instructions" placeholder="Any Special Instructions here" class="form-control inst" style="width: 100%;
  height: 50px; 
" optional>
  
  </div>
</div>
 <div class="row" style="text-align: center;margin-left:400px">
   <div class="col-md-4">
     <div id="order_now2">
     <button onclick="come" >
          <a ><span class="glyphicon glyphicon-chevron-right"></span>ORDER NOW</a>
        
             <!--<i class="fa fa-hand-o-down" aria-hidden="true"></i>-->
       </button></div>
   </div>
 </div>
                     
  </form>
  <div class="row" style="float: right;margin-right: -350px;
  margin-top: -150px">
    <div class="col-md-3">
      <aside class="side">
  <h3 style="border-bottom: 1px solid #013243;font-family: 'Courgette', cursive ;">Did you know :</h3>
  <p>Egypt's garbage is estimated at 70 million tons a year, and the report said the daily garbage is 47,
  000 tons, and the largest share of Cairo alone is 19,000 tons daily, which is one of the richest garbage
  types in the world, with a ton rate of 6000 pounds for the important ingredients of many manufacturing industries. See, Egypt spends about 24 billion pounds annually on the cost of environmental degradation.
</p>
    <h3 style="border-bottom: 1px solid #013243;font-family: 'Courgette', cursive ;">Do you have a problem</h3>
    <p> if you have any problem just <a href="/contactus">contact us</a></p>
</aside>

    </div>
  </div>
 </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>  
  <script src="js/bootstrap.min.js"></script> 
</body>
</html>
@endsection