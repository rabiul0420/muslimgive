<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">{{ $package->title }} - {{ $package->price }}৳</h5>
</div>
<div class="modal-body">
<img src="{{ $package->image }}" alt="">

<h3>Features</h3>
<ul class="pricing-content list-unstyled">
    @php $features = unserialize($package->features) @endphp
    @foreach($features as $feature)
        <li>
            <i class="fa fa-star"></i> {{ $feature }}
        </li>
    @endforeach
</ul>

{!! $package->detail !!}
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>