@extends('layouts.app')
@section('content')
    
    <div class="container things" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8">
         <h1 style="color: #69F0AE;font-size: 40px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;font-family: 'Courgette', cursive ;">Easy ways to reduce population</h1>

      <div class="video">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/OasbYWF4_S8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
       
      <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"></h1>

 <h3>Putting the right stuff in the right bin is important. The wrong stuff is called contamination and when contaminated loads of recycling are found, it can potentially result in the whole lorry full being sent to landfill.</h3></br>
 <img 
      src="../../Original images/7b3328740c628fcd620d78a5020dc265.jpg
"  alt="" >
     
 <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;"><i class="fa fa-bandcamp" aria-hidden="true"></i>
 some tips to help reduce population in your bin:
</h1>

      </br>
 <div style="margin-left: 30px">
  <p style="line-height: 1.8;color: black">
    <i class="fa fa-adjust" aria-hidden="true"></i>
Leave metal caps and lids on glass jars and bottles
</p>
<p style="line-height: 1.8;color: black"> <i class="fa fa-adjust" aria-hidden="true"></i>

Don't forget to recycle items from all rooms in the house - e.g. shampoo bottles from the bathroom
</p>
  <p style="line-height: 1.8;color: black">
    <i class="fa fa-adjust" aria-hidden="true"></i>
Empty and rinse all containers
 </p>  
</div>
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