<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Paystack Lite Sample</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #fff;
            padding: 10px 25px;
            font-size: 13px;
            border-radius:5px;
            height: 40px;
            background: #333;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
            Paystack Lite Sample
            </div>

            <div class="links">
                <a id="paymentBtn" class="btn btn-lg" href="#">Pay With Paystack</a>
            </div>
        </div>
    </div>

    @paystack

    <script>
        var amount = 1000;
        var email = 'customer@email.com';
        var meta = {
            custom_fields: [{
                    display_name: "Name",
                    variable_name: "name",
                    value: "My Customer"
                },
                {
                    display_name: "Mobile Number",
                    variable_name: "mobile_number",
                    value: "+2348012345678"
                }
            ]
        };

        document.getElementById('paymentBtn').onclick = function() {
            //display checkout form
            payWithPaystack(amount, email, meta, onPaymentCompleted, onPaymentCancelled);
        };

        function onPaymentCompleted(response) {
            alert('Payment completed :)');
            console.log(resposne);
        }

        function onPaymentCancelled() {
            alert('Payment cancelled!');
        }
    </script>
</body>

</html>