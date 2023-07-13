@extends('master')
@section("content")
<div class="custom-product">
    <div class="container">
        <table class="table table-striped mt-5 mx-auto">
            <tbody>
                <tr>
                    <td>Price</td>
                    <td>{{$total}} Rs.</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td> 0 Rs.</td>
                </tr>
                <tr>
                    <td>Delivery </td>
                    <td>100 Rs.</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>{{$total+100}}</td>
                </tr>
            </tbody>
        </table>
        <form action=""></form>
        <div class="form-group">
            <textarea class="form-control" cols="30" rows="3" placeholder="Type your Address Here" required></textarea>
        </div>
        <div class="form-group">
            <label for="">Payment Mode</label>
            <p><input type="radio" name="payment"> <span>Online Payment</span></p>
            <p><input type="radio" name="payment"> <span>EMI</span></p>
            <p><input type="radio" name="payment"> <span>Cash On Delivery</span></p>

        </div>
        <button type="submit" class="btn btn-primary">Order Now</button>
        </form>
    </div>
</div>
@endsection