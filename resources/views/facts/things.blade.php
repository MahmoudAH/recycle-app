@extends('layouts.app')
@section('content')
    
    <div class="container things" style="margin-top: 80px">
        <div class="col-md-8">
         <h1 style="color: #69F0AE;font-size: 40px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;font-family: 'Courgette', cursive ;">some things you may did not know you can recycle</h1>

      <img 
      src="../../Original images/DIY-Projects-with-recycled-things.jpg"  alt="" s>
         <p style="line-height: 1.8;margin-top: 20px">So you’ve got a recycling routine that works for you. You know it inside and out and there’s not one empty plastic milk bottle or food can in sight in the kitchen – they’re all patiently waiting to be colleced for recycling. The job is done! But is it really?
</br></br>

A new survey from Recycle Now looked at why people recycle and what areas of the home we need to get better at recycling in. One of the rooms that has a lot of easily recyclable products in, is the bathroom. 
    
      <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><i class="fa fa-bandcamp" aria-hidden="true"></i>
 Bathroom recycling</h1>

 <h3>There are lots of items in the bathroom waiting to be recycled that can make a huge difference. For instance, if everyone in the UK recycled one toothpaste box, it would save enough energy to run a fridge in over 2,000 homes for a year. Here's a handy list to remind you :</h3></br>
 <div style="margin-left: 30px">
  <p style="line-height: 1.8;color: black">
    <i class="fa fa-adjust" aria-hidden="true"></i>
Toothpaste boxes - flatten </p>
<p style="line-height: 1.8;color: black"> <i class="fa fa-adjust" aria-hidden="true"></i>

Toilet roll tubes - flatten</p>
  <p style="line-height: 1.8;color: black">
    <i class="fa fa-adjust" aria-hidden="true"></i>
Plastic shampoo and conditioner bottles - empty and rinse items, replace lids/tops
 </p>  <p style="line-height: 1.8;color: black">
    <i class="fa fa-adjust" aria-hidden="true"></i>
Bleach bottles - empty, replace lid </p>  <p style="line-height: 1.8;color: black">
    <i class="fa fa-adjust" aria-hidden="true"></i>
Bathroom cleaners - rinse and replace the trigger spray  </p>  <p style="line-height: 1.8;color: black">
    <i class="fa fa-adjust" aria-hidden="true"></i>
Toothpaste boxes - flatten </p>
</div>

     
 <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><i class="fa fa-bandcamp" aria-hidden="true"></i>
 Recycling in the bedroom</h1>

       <h3>f everyone in the UK recycled one aluminium deodorant aerosol, enough energy would be saved to run a TV in over 151,000 homes for a year. Amazing isn't it? Items to look out for include:</h3></br>
 <div style="margin-left: 30px">
  <p style="line-height: 1.8;color: black">
    <i class="fa fa-adjust" aria-hidden="true"></i>
Empty tissue boxes - remove any plastic insert and flatten
</p>
<p style="line-height: 1.8;color: black"> <i class="fa fa-adjust" aria-hidden="true"></i>

Old magazines
</p>
  <p style="line-height: 1.8;color: black">
    <i class="fa fa-adjust" aria-hidden="true"></i>
Empty deodorant aerosols and hairspray - ensure empty and remove plastic caps (recycle with plastics) 
 </p>  
</div>


 <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><i class="fa fa-bandcamp" aria-hidden="true"></i>
Moving on to the living room...
</h1>

       <h3>Did you know that it takes seven days for a recycled newspaper to come back as newspaper again? You could be reading your favourite newspaper on recycled paper in no time at all! In this room you can often find these items for recycling:

</h3></br>
 <div style="margin-left: 30px">
  <p style="line-height: 1.8;color: black">
    <i class="fa fa-adjust" aria-hidden="true"></i>
Envelopes
</p>
<p style="line-height: 1.8;color: black"> <i class="fa fa-adjust" aria-hidden="true"></i>

Newspapers
</p>
  <p style="line-height: 1.8;color: black">
    <i class="fa fa-adjust" aria-hidden="true"></i>
Cardboard packaging from online shopping - remove packaging tape and flatten to save space in your recycling bin </p>  
</div>
</br>
<h3>
  Even air fresheners can make a difference - if one aluminium air freshener aerosol is recycled by everyone in the UK; enough energy could be saved to vacuum over 876,000 homes for a year – that’s a lot of tidy homes!
</h3>

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