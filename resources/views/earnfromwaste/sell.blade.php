@extends('layouts.app')
@section('content')
      <section style=" margin-left: 200px;margin-top: 80px;width: 600px;
    " >
      <div class="row">
        <div class="col-md-10">
         <h1 style="color: #69F0AE;font-size: 50px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;">Sell and earn...</h1>

      <img 
      src="../../Original images/500581_300x300.jpg"  alt="" s>
         <p style="line-height: 1.8;margin-top: 40px">If your items are good quality why not turn them into cash? There are lots of ways to do this.. 
    <div>
    <img src="Original images/sorted-recyclables_103017_Rawpixel.com_shutterstock_591166076-300x230.jpg" width="200" height="500" alt="" >
    </div>
    </div>
    </div>

    <div class="row" >
     <div class="col-md-12" style="margin-bottom: 20px">
      <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;">
       </span></h1>
  <div style="margin-left: 30px">
   <p style="line-height: 1.8;">1- Sell your unwanted items online at places like eBay, <a href="https://www.facebook.com/"  target="_blank">Facebook</a> , Gumtree and Preloved.</p>
   </br>
   <p style="line-height: 1.8;">2- Nearly new sales are a great place to sell your clothes, textiles and shoes.</p>
</br>
   <p style="line-height: 1.8;">3- Some shops will buy second hand clothes such as evening wear and vintage items.</p>
</br>
   <p style="line-height: 1.8;">4- Take your items to local car boots or bring and buy sales..</p>
</br>
   <p style="line-height: 1.8;">5- Visit the high street - shops like <a href=""  target="_blank">Cash Convertors</a> and CeX often buy your unwanted electricals.</p>

 </div>
</div>
</div></section>

  <aside class="side1" style="margin-top:-900px ">
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