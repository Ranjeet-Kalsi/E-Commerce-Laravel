<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}

?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="/">E-Comm</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item active"><a class="nav-link" href="#">Orders</a></li>
        </ul>
        <form class="form-inline my-2 my-lg-0 mi-auto" action="/search">
            <input class="form-control mr-sm-2 " id="search-box" name="query" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="/cartlist">Cart({{$total}})</a></li>
            @if(Session::has('user'))
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </li>
            @else
            <li><a href="/login">Login</a></li>
            @endif
        </ul>
    </div>
</nav>