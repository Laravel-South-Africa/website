@extends('layouts.landing')

@section('content')
    <h3 class="mb-2">Welcome!</h3>
    <p class="mb-3">Laravel South Africa is a community organization focused on education, inspiration and opportunity for developers using the Laravel PHP framework.</p>
    <p class="mb-3">Our mission is to advance the reach of Laravel in South Africa, equipping developers to take advantage of everything the ecosystem has to offer.</p>
    <p class="mb-5">We're still in the early stages, but you can sign up here to receive updates from us when we go live with the main site.</p>

    <form action="{{route('signup')}}" method="post">
        @csrf
        <div class="input-group input-group-newsletter">
            <input type="email" class="form-control" name="email" placeholder="Enter email..." aria-label="Enter email..." aria-describedby="submit-button">
            <div class="input-group-append">
                <input type="submit" class="btn btn-secondary" value="Keep me updated" id="submit-button">
            </div>
        </div>
    </form>

    <p class="mt-5 mb-1">You can also find us on:</p>
    <p class="mb-1"><a style="color:orange; font-weight: bold;" href="https://zatech.co.za/">zatech.co.za</a> #laravel</p>
    <p class="mb-1"><a style="color:orange; font-weight: bold;" href="https://github.com/Laravel-South-Africa">github.com/laravel-south-africa</a></p>
@endsection
