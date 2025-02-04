<div class="form-group">
    <label for="">{{$label}}</label>
    <input class="form-control" type="{{$type}}" name="{{$name}}"/>
    <span class="text-danger">
        {{-- @error('name')
            {{$message}}
            
        @enderror --}}
    </span>
</div>