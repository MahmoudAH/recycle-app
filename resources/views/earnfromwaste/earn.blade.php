@extends('layouts.app')
@section('content')
      <section style=" margin-left: 200px;margin-top: 80px;width: 600px;height: 100%
    " >
      <div class="row">
        <div class="col-md-12">
    <div class="video">
       <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;">Earn from waste</h1>
      <iframe  style="margin-top: 30px;margin-bottom:60px" width="400" height="315" src="https://www.youtube.com/embed/ZSpqCVOOjwQ"
              frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
     
    </div>
    
    </div>
    </div>

    <div class="row" >
     <div class="col-md-12" style="margin-bottom: 30px">
      <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><span style="border-radius: 100%;padding: 10px;background-color: #F06292">
       1</span> Aluminum Cans</h1>
  <p>This is probably the first thing that comes to mind when you think about making money from your trash. In fact, “According to the Aluminum Association, Americans earn nearly $1 billion a year from recycling aluminum cans”. The national average is $0.50 per pound and it takes about 34 cans to equal a pound. While you’re not going to get rich from recycling your aluminum cans, it is an easy way to add some cash to your wallet while cleaning up your community.

Check out the Alcoa site to find a recycling center near you</p>
</div>
</div>
<div class="row">
     <div class="col-md-12" style="margin-bottom: 30px">
      <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><span style="border-radius: 100%;padding: 10px;background-color: #F06292">
       2</span> Cooking Oil</h1>
  <p>Did you know that you can turn your old cooking oil into cash? Well, you can. There’s a company called EnviroTek that will come and collect your used cooking oil and turn it into biodiesel. The pay is $1 per gallon and if you refer a restaurant grease account they’ll send you an additional $25. Only downside, this company only collects in Vermont and New Hampshire … however, you may be able to find a company in your area that has a similar program.</p>
</div></div>
<div class="row">
     <div class="col-md-12" style="margin-bottom: 30px">
      <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><span style="border-radius: 100%;padding: 10px;background-color: #F06292">
       3</span> Reclaimed Wood</h1>
  <p>Have you just remodeled your home? Do you flip houses? Or do you have an old barn that needs to be removed? Then consider selling your old reclaimed wood for cash. Antique Beams and Boards will pay you money for your ash, elm, hickory, maple, walnut, and white oak wood. To get a quote shoot them an email with length, sizes, type of wood if known, and photos. Antique Beams and Boards has an A+ rating with the Better Business Bureau.
</p>
</div></div>
<div class="row">
     <div class="col-md-12" style="margin-bottom: 30px">
      <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><span style="border-radius: 100%;padding: 10px;background-color: #F06292">
       4</span> Aluminum Cans</h1>
  <p>This is probably the first thing that comes to mind when you think about making money from your trash. In fact, “According to the Aluminum Association, Americans earn nearly $1 billion a year from recycling aluminum cans”. The national average is $0.50 per pound and it takes about 34 cans to equal a pound. While you’re not going to get rich from recycling your aluminum cans, it is an easy way to add some cash to your wallet while cleaning up your community.

Check out the Alcoa site to find a recycling center near you</p>
</div></div>

<div class="row">
     <div class="col-md-12" style="margin-bottom: 30px">
      <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><span style="border-radius: 100%;padding: 10px;background-color: #F06292">
       5</span> Used Ink Cartridges</h1>
  <p> 
Working from home you go through a good amount of ink cartridges … but did you know that can you sell those old cartridges for cash?! At the eCycle Group you can send in your used ink cartridges (and cell phones) for quick cash. Just sign up on their website and a pre-paid envelope will be sent to your home. Just ship your items back and get paid via check. One thing I really like about the eCycle Group is that they have a price list, so you know exactly how much your empty cartridges are worth. Please note, you must send in 20 items at at time, so you may need to save your cartridges up for an extended time period before you can ship them off.</p>
</div></div>
      </section>

  <aside class="side1" style="margin-top:-1900px ">
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






<script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script> 
</body>
</html>
@endsection