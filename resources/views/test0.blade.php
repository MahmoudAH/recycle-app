
 <div class="contactus">
      <form id="contact" method="POST" action="{{ url('contactus') }}">
           @csrf
           <h1>
            CONTACT US
           </h1>
           <p>if there any qustion do not hesitate and send immediately</p>
        <hr>
            <div style="padding: 20px">
            
            <h3>Name</h3>

            <i class="fa fa-user" aria-hidden="true"></i>
            <input style="height: 46px" type="text" name="name" value="{{ old('name') }}" placeholder="write your name" required class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                
                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
        </div>
            <div style="padding: 20px">
            <h3>Telephone</h3>
            <i class="fa fa-phone" aria-hidden="true"></i>
            <input style="height: 46px" type="Tel" name="telephone" value="{{ old('telephone') }}" placeholder="write your number" required class="form-control {{ $errors->has('telephone') ? ' is-invalid' : '' }}">
            @if ($errors->has('telephone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                
        </div>
            <div style="padding: 20px">
            <h3>Email</h3>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input style="height: 46px" type="email"  name="email" value="{{ old('email') }}" placeholder="write your email" required class="form-control" {{ $errors->has('email') ? ' is-invalid' : '' }}">
                
                 @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div>
            <div style="padding: 20px">
         <h3>Message</h3>
         <textarea cols="30" rows="10" name="message" value="{{ old('message') }}" required
         class="form-control" {{ $errors->has('message') ? ' is-invalid' : '' }}"></textarea>  
          @if ($errors->has('message'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif              
       </div>
       <button type="submit">Submit</button>
       
    </form>
</section>
</div>
<script src="js/jquery-3.2.1.min.js"></script>  
  <script src="js/bootstrap.min.js"></script> 
</body>
</html>
@endsection

-->

