<div class="form-group">
      <label for="{{$id??''}}">{{$label??''}}</label>
      <input type="{{$type??'text'}}" class="form-control" id="{{$id??$name}}" 
      placeholder="{{$placeholder??''}}" name="{{$name??''}}" >
      @error($name)
      <div class="text-danger">{{$message}}</div> 
      @enderror
</div>