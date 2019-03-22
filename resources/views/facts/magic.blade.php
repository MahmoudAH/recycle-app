@extends('layouts.app')
@section('content')
    
    <div class="container things" style="margin-top: 80px">
        <div class="col-md-8">
         <h1 style="color: #69F0AE;font-size: 40px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;font-family: 'Courgette', cursive ;">Recycling magic</h1>

      <img 
      src="../../Original images/MEDIUM.jpg"  alt="" s>
         <p style="line-height: 1.8;margin-top: 20px;color: black">Metals and glass can be recycled again and again and to highlight this we’ve teamed up with a magician to perform some mind-boggling street magic tricks to show how recycling metal and glass packaging items can be transformed into new things.


      <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><i class="fa fa-bandcamp" aria-hidden="true"></i>
 Did you know?
</h1>

 <h3>In the UK alone, we use over half a million tonnes of metal packaging and nearly 2 million tonnes of glass packaging per year. Thanks to your efforts, a lot is being recycled but there's still a lot more to do .</h3></br>
 <div style="margin-left: 30px">
  <p style="line-height: 1.8;color: black">
    <i class="fa fa-adjust" aria-hidden="true"></i>
Metal and glass packaging items you can recycle from home:

 </p>
</div>

     
 <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><i class="fa fa-bandcamp" aria-hidden="true"></i>
 Drinks cans
</h1>

       <h3>Drinks cans such as cola and lemonade are usually made from aluminium, and it’s estimated the UK recycles over 85,000 tonnes of aluminium packaging each year.</h3></br>
       <h2 style="font-style:bold;font-family: 'Courgette', cursive ;">Fact: If everyone in the UK was able to recycle just one more drinks can, it would save enough energy to power an electric train from Leeds to Brighton (and back) 6,000 times. </h2>
 

 <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><i class="fa fa-bandcamp" aria-hidden="true"></i>
Food tins
</h1>

       <h3>Steel tins which are used for soups, beans, pulses, pet foods and tomatoes are widely recycled.

</h3></br>
<h2 style="
font-style: bold;font-family: 'Courgette', cursive ;">
  Fact: If we recycled all the steel we use in a year, it would save enough energy to make nearly 135,000 return electric train journeys between London and Edinburgh.

</h2>

 <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><i class="fa fa-bandcamp" aria-hidden="true"></i>
Glass bottles 
</h1>

       <h3>Brown, green or clear – glass comes in all different shapes, colours sizes and can be used as packaging for wine, ketchup containers, beer bottles, and olive oil.
</h3></br>
<h2 style="
font-style: bold;font-family: 'Courgette', cursive ;"">Fact: If everyone in the UK recycled all the glass we use, it would save enough energy to chill 56 bottles of wine each day for every UK household. 
</h2>

</div>
  
<div class="col-md-4">
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
</div>
<script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script> 
</body>
</html>
@endsection