<label>{{ $var_type }} Package</label>

<div style="margin-bottom: 20px" class="funkyradio">
   @foreach($packages as $package)
   <div class="funkyradio-primary">
      <input type="radio" name="radio" id="radio{{ $package->id }}"/>
      <label class="package-add" data-id="{{ $package->id }}" for="radio{{ $package->id }}">
         {{ $package->title  }}<br>
         {{ $package->price  }}
      </label>
       <p class="deatil"><a href="#" class="package-detail" data-id="{{$package->id}}" data-toggle="modal" data-target="#packageDetail">Detail</a></p>
   </div>
   @endforeach
</div>

