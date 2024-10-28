<P class="radio{{ $package->id  }}">{{ $package->title  }} - <span class="price">{{ $package->price  }} <input type="hidden" name="package_id" value="{{ $package->id  }}"> </span>
    <a href="#" data-type="package" data-id="{{ $package->id  }}" class="remove"><i class="fa fa-times-circle"></i></a>
</P>
