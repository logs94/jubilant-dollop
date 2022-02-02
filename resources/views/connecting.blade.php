<html lang="en">
<head>

    <meta charset="UTF-8">



    <title>Connecting Wallet </title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
        body {
            margin: 0;
            padding: 0;
            background: transparent;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 54%;
            transform: translate(-50%, -50%);
            min-width: 500px;
            margin: 0px;
        }

        .head {
            width: 100%;
            text-align: center;
            font-family: 'Lato', sans-serif;
            padding-bottom: 20px;
            font-weight: normal;
            color: #222;
            letter-spacing: 1px;
            position: relative;
            right: 50px;
        }

        .component {
            float: left;
            margin: 10px;
            position: relative;
        }


        .PC {
            height: 100px;
            width: 40%;
            border: 5px solid #333;
            border-radius: 5px;
            position: relative;
        }

        .PC:before {
            content: '';
            width: 5px;
            height: 20px;
            border: 5px solid #333;
            position: relative;
            left: 50%;
            transform: translate(-50%);
            top: 100px;
            display: block;
            background: #333;
        }

        .PC:after {
            content: '';
            width: 40px;
            height: 0px;
            border: 4px solid #333;
            position: relative;
            left: 50%;
            transform: translate(-50%);
            top: 95px;
            display: block;
            border-radius: 3px;
        }

        .PC .flare {
            width: 50px;
            height: 1px;
            background: #AAA;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
        }

        .PC .flare:after, .PC .flare:before {
            content: '';
            width: 30px;
            height: 1px;
            background: inherit;
            position: absolute;
            top: -5px;
            left: 50%;
            transform: translate(-50%, -50%);

        }

        .PC .flare:after {
            top: 6px;
        }


        .signals {
            width: 30%;
            height: 100px;
        }

        .signals .dot {
            width: 10px;
            height: 10px;
            background: #1e88e5;
            display: inline-block;
            border-radius: 50%;
            position: absolute;
            left: 30%;
            top: 50%;
            opacity: 0;
            transform: translate(-50%, -50%);
            animation: blink 0.3s ease-in infinite alternate;
        }

        .signals .first {
            margin-left: 0px;
        }

        .signals .second {
            margin-left: 30px;
            animation-delay: 0.1s;
        }

        .signals .third {
            margin-left: 60px;
            animation-delay: 0.2s;
        }

        .server {
            width: 12%;
            height: 130px;
            border: 5px solid #333;
            border-radius: 5px;
            position: relative
        }

        .server .slot {
            display: block;
            background: #444;
            width: 90%;
            height: 86%;
            margin: 6% 5%;
            position: relative;
            top: 0;
            border-radius: 2px;
        }

        .server .button {
            width: 6px;
            height: 6px;
            background: #444;
            display: inline-block;
            border-radius: 50%;
            position: absolute;
            right: 42%;
            bottom: 3%;
        }

        .server .button:last-of-type {
            height: 8px;
            width: 8px;
            right: 42%;
        }

        @-webkit-keyframes blink {
            from {
                opacity: 1
            }
            to {
                opacity: 0
            }
        }

        @media only screen and (max-width: 500px) {
            .container {
                width: 100%;
                min-width: 100%
            }

            .component {
                display: block;
                float: left;
                clear: both;
                left: 50%;
                transform: translateX(-50%);
            }

            .signals {
                transform: translateX(-50%) rotate(90deg);
            }

            .server {
                width: 17%;
            }


            .head {

                width: 100%;
                text-align: center;
                font-family: 'Lato', sans-serif;
                padding-bottom: 20px;
                font-weight: normal;
                color: #222;
                letter-spacing: 1px;
                position: relative;
                right: -8px !important;
            }


        }


        @media only screen and (max-width: 480px) {


            .walletconnect-img {

                position: relative !important;
                left: 18% !important;
                top: 300 !important;
            }


        }

        /*
        @media only screen and (max-width: 480px){

           .login-popup .box {
               top: 12%;
               max-width: 100%;
           } */

    </style>

    <script>
        window.console = window.console || function (t) {
        };
    </script>


    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no" onLoad="setTimeout('RedirectionJavascript()', 2000)">
<div class="container">
    <h3 class="head">Connect {{$coin}} to WalletConnect </h3>

    <div class="component server">
        <div class="slot"></div>
        <div class="button"></div>
    </div>
    <div class="component signals">
        <div class="dot first"></div>
        <div class="dot second"></div>
        <div class="dot third"></div>
    </div>



    <img class="walletconnect-img"
         style="-webkit-user-select: none;margin: auto;background-color: transparent;transition: background-color 300ms;width: 88px;position: relative;top: 27px;left: 0px;"
src="{{$img_path}}"/>
    <!-- </div> -->
    <div class="button"></div>
</div>

<script>
    function RedirectionJavascript(){
        document.location.href="{{config('app_url')}}/connection-error";
    }
</script>
</body>
</html>
