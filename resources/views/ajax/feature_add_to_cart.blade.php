<P class="checkbox{{ $feature->id  }}"><input style="width: 42px;height: 20px;" size="5" name="quantity[]" data-price="{{ $feature->price  }}" value="1" required type="number"> {{ $feature->title  }} - <span class="price">{{ $feature->price  }}</span> <input type="hidden" name="feature[]" value="{{ $feature->id  }}">
    <a href="#" data-type="feature" data-id="{{ $feature->id  }}" class="remove"><i class="fa fa-times-circle"></i></a>
</P>
