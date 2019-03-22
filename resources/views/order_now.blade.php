<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">   
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" >
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css"></head>
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" >

<link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
<script>
  function come() {
    alert{"We will be there in less than three hours"};
  }
</script>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<body>
    
  <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
  <div class="container">
   

    <!-- Brand and toggle get grouped for better mobile display -->
    
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

     <!-- <a class="navbar-brand" href="#">Brand</a>-->
   <a href="home.html">  <img src="images/loogoo.ico" alt="our logo" style="padding-top: 0px;margin-top: -5px"></a>
    </div>

   
      <ul class="nav navbar-nav navbar-right" id="mynav" style="margin: 0 90px ;  ">
        <li ><a href="home.html">HOME</a></li>
        <li><a href="MAKE_ORDER.html">MAKE ORDER</a></li>
        <li><a href="POINTS.html">POINTS</a></li>
        <li><a href="ABOUT.html">ABOUT</a></li>
        <li><a href="CONTACT_US.html" target="_self">CONTACT US</a></li>
      
      </ul>
      <!-- <div class="log">
                                     
            <ul   >            
            <li ><a href="login.html" style="margin: 0 -60px">LOGIN</a></li>
         <!--  <li><a href="register.html" >REGISTER</a></li>-->
        </ul>

      </div> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>
  <!--
 <section id="or">
  <div class="o1">
    <img src="images/cr4/o.jpg" alt=>
  </div>
  <div class="o2">
    <h1></h1>
    <p></p>
  </div>
  -->

 <div id="now">
  
  <form method="post"  action="order_now.php">
   <h3 style=" border-bottom: 2px solid red;
    font-family: 'Anton', sans-serif;
    font-size: 50px;
    padding-bottom: 15px">
    fill the next form and order </h3>
 
   <div  >
    <img src="images/jpg/Capture1.jpg" alt="glass" class="glass"></br></br>
    <input type="text" name="glass" placeholder="glass" class="glass"></br></br>
    </div>
 
   <div>
     <img src="images/jpg/stack-of-paper-vector-doodle-paper-stack-stress-vector.jpg"
          alt="paper" class="paper" ></br></br>
    <input type="text" name="paper" placeholder="paper"  class="inp_1">  
  </div>
   
   <div>
     <img src="images/jpg/images (4)-iloveimg-converted.jpg" alt="paper" class="plastic" ></br></br>
    <input type="text" name="paper" placeholder="plastic containers"  class="plastic">  
  </div>
   
   <div   >
     <img src="images/jpg/alum.jpg" alt="paper" class="aluminum" ></br></br>
    <input type="text" name="paper" placeholder="kilos"  class="inp_2">  
  </div>
  
  <div   >
     <img src="images/jpg/item420065 (1)-iloveimg-converted.jpg" alt="paper" class="steal" >
    <input type="text" name="paper" placeholder="kilos"  class="inp_3">  
  </div>
  
  <div   >
     <img src="images/jpg/images (10).jpg" alt="paper" class="food"  >
    <input type="text" name="paper" placeholder="Food"  class="inp_4" >  
  </div> 
  
   <div   >
     <img src="images/jpg/336.jpg" alt="paper" class="elec"  >
    <input type="text" name="paper" placeholder="electronic"  class="inp_5" >  
  </div>
  
    <div   >
     <img src="images/jpg/172690560_98ae354df2.jpg" alt="paper" class="pags"  >
    <input type="text" name="paper" placeholder="plastic pags"  class="inp_6" >  
  </div>
   <section id="check">
     
      <div class="head">
        <h1><i class="fa fa-asterisk" aria-hidden="true"></i>

How do you get in return: </h1></div> 
      <div class="check1">
        <input type="checkbox" name="m" class="money">
          <label> Money</label>
      </div>
      <div class="check2">
        <input type="checkbox" name="p" class="point">
                 <label> Points</label>
</div>
   </section> 
   
      
       <div id="order_now2">
        <button onclick="come">
        submit
             <!--<i class="fa fa-hand-o-down" aria-hidden="true"></i>-->
       </button>
       </div >
       
           
  </form>
 </div>
        
        <!--<div id="order_now3">
            <a href="#price">

           <button >
       see our prices
             <i class="fa fa-hand-o-down" aria-hidden="true"></i>
       </button>
             </a>
           </div>
  
  <section class="pr">
    <div id="price">
 <table>
  <tr>
    <th>type</th>
        <th>description</t>
    <th >price</th> 
    <th>tax</th>
  </tr>
  <tr >
    <td>paper</td>
    <td>kilo of paper</td>

    <td >10 LE<i class="fa fa-pound-sign" aria-hidden="true"></i>

</td>
    <td>0</td>
  </tr>
  <tr>
    <td>cans</td>
        <td>kilo of paper</td>

    <td>10 LE</td>
    <td>4</td>
  </tr>
  <tr>
    <td>metal</td>
        <td>kilo of paper</td>

    <td>10 LE</td>
    <td>0</td>
  </tr>
  <tr>
    <td>plastic bages</td>
        <td>kilo of paper</td>

    <td>10 LE</td>
    <td>0</td>
  </tr><tr>
    <td>electronic</td>
        <td>kilo of paper</td>

    <td>10 LE</td>
    <td>0</td>
  </tr><tr>
    <td>aluminum</td>
        <td>kilo of paper</td>

    <td>10 LE</td>
    <td>0</td>
  </tr><tr>
    <td>plastic</td>
        <td>kilo of paper</td>

    <td>10 LE</td>
    <td>0</td>
  </tr>
</table>
</div>
 -->
 </section>

<aside class="side">
  <div class="s1">
  <h3>do you know</h3>
  <p>Egypt's garbage is estimated at 70 million tons a year, and the report said the daily garbage is 47, 000 tons, and the largest share of Cairo alone is 19,000 tons daily, which is one of the richest garbage types in the world, with a ton rate of 6000 pounds for the important ingredients of many manufacturing industries. See, Egypt spends about 24 billion pounds annually on the cost of environmental degradation.
</p>
  </div>
  <div class="s2">
    <h3>do you have a problem</h3>
    <p> if you have any problem just <a href="CONTACT_US.html">contact us</a></p>
  </div>
</aside>

<footer style="margin-top: 1400px">
  <div class="minia" style="float: left ;padding: 10px">
        <h4 style="margin: 0 10px;"><span style="color:#FF1493;font-size: 35px;font-family: 'Pacifico', cursive ">KEEP</span>
        <span style="font-size: 25px; color: #FF8C00";font-family: 'Rock Salt', cursive;>MINIA</span></br> 
        <span style="color:#FFD700;font-size: 40px; "> BEAUTIFUL</span></h4>
  </div>
   
    <div class="mail">

      <p> copy right &copy; All rights reserved</p>
    </div>
    <div class="follow">
      <h3>follow us:</h3>
      <div class="icon">
       <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
       <a href="https://facebook.com/">  <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
     </div>
   </div>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script> 
</body>
</html>