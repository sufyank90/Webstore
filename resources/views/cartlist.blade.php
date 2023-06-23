@extends('master')
@section("content")
<div class="custom-product">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="trending-wrapper">
                <h4>Result for Products</h4>
                @if(count($products) > 0)
                <a class="btn btn-success mb-3" href="ordernow">Order Now</a>
                @else
                <p>No products available.</p>
                @endif

                @foreach($products as $item)
                <div class="row searched-item cart-list-devider">
                    <div class="col-md-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image img-fluid" src="{{$item->gallery}}" alt="{{$item->name}}">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="product-info">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>
                @endforeach

                @if(count($products) > 0)
                <a class="btn btn-success mt-3" href="ordernow">Order Now</a>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
