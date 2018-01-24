@extends('layouts.app')

@section('content')
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Create User</h4>
            <span></span>
        </div>
    </div><!-- Page Top -->

    <div class="panel-content">

                    {!! Form::open(['route' => 'users.store']) !!}

                        @include('users.fields')
                        @include('users.profile_fields')
                        @include('users.submit')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div><!-- Panel Content -->

    <script>
        // var number = Math.floor(Math.random() * 1E2);

        // var password = "password";
        // var price = Math.floor(Math.random() * 2E3);
        // var quantity = Math.floor(Math.random() * 1E3);
        // var model = Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
        // var name = "Harry Balls " + number;
        // var username = name.replace(/\s+/g, '');
        // var email = number + "testing@fake.com";
        // var sku = Math.floor(Math.random() * 1E6);
        // var upc = Math.random().toString().slice(-6);

        // var keywords = "Aenean, commodo, ligula, eget, dolor, Aenean massa";
        // var details = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.";
        // var descrip = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. " +
        //     "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, " +
        //     "pretium quis, sem. Nulla consequat massa quis enim.";
        // document.getElementById("name").value = name;
        // document.getElementById("password").value = password;
        // document.getElementById("email").value = email;
        // document.getElementById("username").value = username;
        // // document.getElementById("subtitle").value = "subtitle goes here";
        // // document.getElementById("details").value = details;
        // // document.getElementById("description").value = descrip;
        // document.getElementById("password_confimation").value = password;

    </script>
@endsection
