@extends('layouts.app')
@section('content')
      <section style=" margin-left: 200px;margin-top: 80px;width: 600px;
    " >
      <div class="row">
        <div class="col-md-10">
         <h1 style="color: #69F0AE;font-size: 40px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;">JUNK mail</h1>

      <img 
      src="../../Original images/junk_mail_pile_600327097.jpg"  alt="" s>
         <p style="line-height: 1.8;margin-top: 20px">Many households will receive a considerable amount of unwanted or junk mail during the course of the year. A lot of direct mail is poorly targeted and irrelevant and quite often is thrown straight in the bin. 
    <div>
    <img src="Original images/sorted-recyclables_103017_Rawpixel.com_shutterstock_591166076-300x230.jpg" width="200" height="500" alt="" >
    </div>
    </div>
    </div>

    <div class="row" >
     <div class="col-md-12" style="margin-bottom: 30px">
      <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><span style="border-radius: 100%;padding: 10px;background-color: #F06292;">
       1</span> how to earn from junk mail..?</h1>
  <p style="line-height: 1.8;">Learn to love your junk mail. The Small Business Knowledge Center will pay you for your junk mail that pertains to the insurance, financial, mortgage, banking, lending, credit, telecommunications, and travel industries. Simply sign up to become a consumer panelist and then send your qualifying mail in pre-paid envelopes weekly. 
</br>
  For each piece of mail that you send in you’ll earn points that can be redeemed for gift cards. 
</br></br>
The Small Business Knowledge Center has an A+ rating with the Better Business Bureau.</p>
</div>
</div>
<div class="row">
     <div class="col-md-12" style="margin-bottom: 30px">
      <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><span style="border-radius: 100%;padding: 10px;background-color: #F06292">
       2</span> how to reduce junk mail..?</h1>
       <h3>There are two steps that can be taken to reduce this type of mail and we would advise you to do both:</h3></br>
 <div style="margin-left: 30px">
   <p style="line-height: 1.8;">1- Register with the Your Choice preference scheme: the 'Your Choice' preference scheme is run by the Direct Marketing Association and allows you to ask distribution companies that are members of the Association to stop delivering unaddressed mail to your home.</p>
   </br>
   <p style="line-height: 1.8;">2- Opt out of the Royal Mail's Door-to-Door service: Door to Door is the Royal Mail's service that delivers unaddressed mail. Registering to opt out of this service will stop these items being delivered to your door within six weeks.</p>

 </div>
</div></div>
      </section>

  <aside class="side1" style="margin-top:-1200px ">
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