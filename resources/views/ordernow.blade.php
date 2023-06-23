@extends('master')
@section("content")
<div class="custom-product">

    <div class="row">
        <div class="col-sm-10">
            <div class="container">
                <div class="table-responsive mt-5">
                    <table class="table table-primary">

                        <tbody>
                            <tr class="">
                                <td scope="row">Amount</td>
                                <td>$ {{$total}}</td>
                            </tr>
                            <tr class="">
                                <td scope="row">Tax</td>
                                <td>$ 0</td>
                            </tr>
                            <tr class="">
                                <td scope="row">Delivery</td>
                                <td>$ 10</td>
                            </tr>
                            <tr class="">
                                <td scope="row">Total Amount</td>
                                <td>{{$total + 10}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <form action="/orderplace" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="address" class="form-label">Enter Your Address</label>
                                <textarea name="address" class="form-control" placeholder="Enter Your Address"
                                    required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Payment Method</label><br>
                                <div class="form-check">
                                    <input type="radio" value="cash" name="payment" id="onlinePayment"
                                        class="form-check-input">
                                    <label for="onlinePayment" class="form-check-label">Online Payment</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" value="cash" name="payment" id="cardPayment"
                                        class="form-check-input">
                                    <label for="cardPayment" class="form-check-label">Card Payment</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" value="cash" name="payment" id="cashOnDelivery"
                                        class="form-check-input">
                                    <label for="cashOnDelivery" class="form-check-label">Cash on Delivery</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Order Now</button>
                        </form>

                    </div>
                </div>
            </div>



        </div>
    </div>

</div>

@endsection