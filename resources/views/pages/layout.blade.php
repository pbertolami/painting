<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">-->

    <style>
        #navSelection {
            list-style-type: none;
            margin-right: 5%;
            padding: 0;
            overflow: hidden;
            background-color: #6c9a9d;
            position: fixed;
            top: 0;
            width: 90%;
        }

        .navli {
            float: left;
        }
        .navTitle {
            float: right;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

    </style>
</head>


<body style="background-color:#FFF3B8;">


        <div id="navbar">

            <ul id="navSelection" class="nav navbar-nav">

                    <li class="navli"><a href="/">Home<br></a></li>
                    <li class="navli"><a href="/about">About<br></a></li>
                    <li class="navli"><a href="/contactform">Contact<br></a></li>
                    <li class="navli"><a href="/paintcalculator">Paint Calculator<br>Color Theory</a></li>
                    <li class="navli"><a href="/paint">Have Fun<br></a></li>
                    <li class="navTitle"><a href=""> University Paint Pros 203-818-1859<br></a></li>
            </ul>
        </div>


    @yield('content')


</body>
<script type="text/javascript"  src="https://code.jquery.com/jquery-1.12.3.min.js"
        integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
        crossorigin="anonymous"></script>
<script src="/js/navigation.js"></script>

</html>
