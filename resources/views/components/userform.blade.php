<form action="{{route('store.user')}}" class="was-validated" method="post">
  @csrf
    {{-- <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username"
       name="uname" > 
       @error('uname')
      <div class="text-danger">{{$message}}</div> 
      @enderror
    </div>--}}

      {{--use input component--}}
    <x-uikit.input label="Username" name="uname" id="uname" 
    placeholder="Enter username" />
      
    {{-- <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password"
       name="pswd" >
      @error('pswd')
      <div class="text-danger">{{$message}}</div> 
      @enderror
    </div> --}}
    <x-uikit.input type="password" label="Password" name="pswd" id="pswd"
    placeholder="Enter password" />

    {{-- <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Email" 
      name="email" value="{{old('email')}}" >
      @error('email')
      <div class="text-danger">{{$message}}</div> 
      @enderror
    </div> --}}
    <x-uikit.input type="email" label="Email" name="email" id="email" 
    placeholder="Enter Email" />

    <div class="form-group">
      <label for="Address">Address:</label>
      <textarea class="form-control" name="address">
      </textarea>
      @error('address')
      <div class="text-danger">{{$message}}</div> 
      @enderror
    </div> 
    

    {{-- <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" 
      name="phone">
      @error('phone')
      <div class="text-danger">{{$message}}</div> 
      @enderror
    </div> --}}
    <x-uikit.input label="Phone" name="phone" id="phone" placeholder="Enter Phone Number" />

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" >
         I agree on blabla.
         @error('remember')
      <div class="text-danger">{{$message}}</div> 
      @enderror
      </label>
    </div> 
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>