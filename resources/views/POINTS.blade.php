@extends('layouts.app')
@section('content')
      <div class="container" style="background-color: #fff">
      <section style=" margin-left: 50px;margin-top: 50px;width: 600px;position: relative;
    text-align: center;
    color: white;
    font-size: 20px;border-bottom:  5px dotted #29B6F6;padding-bottom: 50px
    " >
      <div class="row">
        <div class="col-md-12">
    <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;">Earn from waste</h1>
      <img src="Original images/3CF5E3F600000578-4203620-image-a-1_1486560118182.jpg" width="100%" height="500" alt="" class="img-responsive">
        <div class="centered" style="position: absolute;
    top: 92%;
    left: 50%;
    transform: translate(-50%, -50%);"><a href="/points/earnfromwaste" style="color: white"><span style="background-color: #1976D2;padding: 10px;"> 5 ways to earn from waste </span></a></div>

    </div>
    </div>

    <div class="row" style="margin-top: 30px">
        <div class="col-md-6" style="position: relative;
    text-align: center;
    color: white;
    font-size: 20px">
      <img src="Original images/sorted-recyclables_103017_Rawpixel.com_shutterstock_591166076-300x230.jpg" width="100%" height="500" alt="" class="img-responsive">
      <div class="centered" style="position: absolute;
    top: 91%;
    left: 50%;
    transform: translate(-50%, -50%);width: 270px;background-color:#1976D2 "><a href="/points/earnfromwaste/junk-mail" style="color: white;width: 250px"><span style="padding: 10px;width: 100%"> Junk mail </span></a></div>

    </div>

     <div class="col-md-6" style="position: relative;
    text-align: center;
    color: white;
    font-size: 20px">
      <img src="Original images/household-recycling.jpg" width="100%" height="700px" alt="" class="img-responsive">
      <div class="centered" style="position: absolute;
    top: 91%;
    left: 50%;
    transform: translate(-50%, -50%);width: 270px;background-color:#1976D2"><a href="/points/earnfromwaste/sell-and-swap" style="color: white"><span style="padding: 10px;"> sell and swap </span></a></div>

    </div>
   </div>
      </section>

  <aside class="side1" style="margin-top: -740px;margin-left: 100px;width: 340px">
    
  <ul class="list-group" style="background-color: #DCEDC8">
            <li class="list-group-item text-muted" style="background-color: #F48FB1">Earn from waste
 <i class="fa fa-dashboard fa-1x"></i></li>

            <li class="list-group-item text-right"  ><span class="pull-left"  ><strong><a href="/points/earnfromwaste" style="text-decoration: none;">5 ways to earn from waste</a> </strong></span>
             </li>
            <li class="list-group-item text-right" ><span class="pull-left" ><strong><a href="/points/earnfromwaste/junk-mail"  style="text-decoration: none;">junk mail</a> </strong></span> </li>
            
            <li class="list-group-item text-right" ><span class="pull-left" ><strong><a href="/points/earnfromwaste/sell-and-swap" style="text-decoration:none;">sell and swap</a> </strong></span> </li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
          </ul> 
          
</aside>

<!--
      <section style=" margin-left: 200px;margin-top: 100px" >
<div class="money">
      <h1 style="color: #69F0AE;font-size: 30px;">Earn from waste</h1>
      <img src="Original images/3CF5E3F600000578-4203620-image-a-1_1486560118182.jpg" width="50%" height="500" alt="" >
    </div>
  </section>

-->



<section class="poi" style="margin-top: -50px">
<div class="container money2">
  <div class="row">
    <div class="col-md-12">
      <div class="p" style="text-align: center;">
        <p style="color: #F012BE;font-family: 'Courgette', cursive ;
"> Point</p>
        
 <div class="progress">
  <div class="progress-bar progress-bar-success active" role="progressbar" style="width:40%" aria-valuenow="10"
  aria-valuemin="0" aria-valuemax="100">
    
  </div>
  <div class="progress-bar progress-bar-warning active" role="progressbar" style="width:10%">
  </div>
  <div class="progress-bar progress-bar-danger active" role="progressbar" style="width:20%">
  </div>
                   </div>

       <h3 style="margin-top: 50px"><strong style=" border-radius: 50%;
  behavior: url(PIE.htc);
  /* remove if you don't care about IE8 */
  width: 36px;
  height: 36px;
  padding: 15px;
  background: #E6EE9C;
  border: 2px solid #666;
  color: #666;

  text-align: center;
  font: 32px Arial, sans-serif;">{{auth()->user()->points}}</strong> <br>
        </h3>
       
      </div>     
    </div>
    
    <div class="col-md-4 p1" >
      
        <a>
          <button style="background-color: #29B6F6">
            <i class="fa fa-gift" aria-hidden="true"></i>
            Get Gift
          </button>
        </a>
              </div>

        
          <div class="col-md-4 p11" >
        <a href="/exchange">
          <button style="background-color: #B39DDB">
            
            <i class="fa fa-credit-card " aria-hidden="true"></i>

            replace point

          </button>
        </a>
         </div>
    </div>
    
    
  </div>
</div>


</section>  

</div>
<script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script> 
</body>
</html>
@endsection