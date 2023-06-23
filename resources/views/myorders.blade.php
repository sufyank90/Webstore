@extends('master')
@section("content")
<style>
    /* Import Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    /* Apply custom font family */
    h4 {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .product-info h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 500;
    }
</style>

<div class="custom-product">
    <div class="row">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                <h4 class="mb-4">My Orders</h4>
                @foreach($orders as $item)
                <div class="row searched-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <div class="product-info">
                            <h2>{{$item->name}}</h2>
                            <h5><b>Delivery status:</b> <i>{{$item->status}}</i></h5>
                            <h5><b>Address:</b> <i>{{$item->address}}</i></h5>
                            <h5><b>Payment Status:</b> <i>{{$item->payment_status}}</i></h5>
                            <h5><b>Payment Method:</b> <i>{{$item->payment_method}}</i></h5>
                        </div>
                    </div>
                    
                </div>
                @endforeach

            </div>
            
        </div>
    </div>
</div>

@endsection
