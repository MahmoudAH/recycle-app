<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   @include('partials.mainhead') 
   @yield('styles')

<body>
   @include('partials.nav')        
   <main class="py-4">
        @yield('content')
   </main>

    <button onclick="topFunction()" id="myBtn" title="Go to top">   <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </button>

   @include('partials.footer')


</script>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


<script type="text/javascript">
   function resetForm(registrationForm1)
   {
       var myForm = document.getElementById(registrationForm1);

       for (var i = 0; i < myForm.elements.length; i++)
       {
           if ('submit' != myForm.elements[i].type && 'reset' != myForm.elements[i].type)
           {
               myForm.elements[i].checked = false;
               myForm.elements[i].value = '';
               myForm.elements[i].selectedIndex = 0;
           }
       }
   }
</script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="js/jquery-3.2.1.min.js"></script>  
<script src="{{ asset('js/bootstrap.min.js') }}"></script>


<script src="js/bootstrap.min.js"></script> 
<script src="js/plugins
.js"></script> 
<script src="{{ asset('js/exchange.js') }}"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {

  // Check for click events on the navbar burger icon
  $(".navbar-burger").click(function() {

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").toggleClass("is-active");

  });
});
</script>
@yield('scripts')
</body>

</html>
