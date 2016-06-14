
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/stylesheet.css">

    <title>Final Project</title>

</head>


<body>

        <div class="container">

            <canvas id="pad" width="800" height="500"></canvas>
            <br>
            </div>
                <div class="paintContainer">
                    <ul id="palette">
                        <li id="black" class="default" id="black" data-colorvalue="#000000" name="black"></li>
                        <li id="red" data-colorvalue="#ff0000" name="red"></li>
                        <li id="orange" data-colorvalue="#ffa500" name="orange"></li>
                        <li id="yellow" data-colorvalue="#ffff00" name="yellow"></li>
                        <li id="green" data-colorvalue="#00ff00" name="green"></li>
                        <li id="blue" data-colorvalue="#0000ff" name="blue"></li>
                        <li id="indigo" data-colorvalue="#4b0082" name="indigo"></li>
                        <li id="violet" data-colorvalue="#ff00ff" name="violet"></li>
                    </ul><br>
                    <ul id="selection">
                        <li id="brush1" class="default" id="pencil" data-brushvalue="1">Brush "X Small"</li>
                        <li id="brush2" data-brushvalue="4">Brush "Small"</li>
                        <li id="brush3" data-brushvalue="7">Brush "Medium"</li>
                        <li id="brush4" data-brushvalue="10">Brush "Large"</li>
                        <li id="brush5" data-brushvalue="13">Brush "X Large"</li>
                    </ul>

                    <p><a class="btn btn-primary btn-lg" href="/home" role="button" style="background-color:#86C0BA;">Home</a>
                        <a class="btn btn-primary btn-lg" href="/about" role="button" style="background-color:#86C0BA;">About</a>
                        <a class="btn btn-primary btn-lg" href="/contactform" role="button" style="background-color:#86C0BA;">Contact Us</a>
                        <a id="btnClear" class="btn btn-primary btn-lg" role="button" style="background-color:#86C0BA;">Clear</a>
                        <a id="btnCalc" value="capture" href="/paintcalculator" class="btn btn-primary btn-lg" role="button" style="background-color:#86C0BA;">Paint Calculator</a><p/>


                </div>
        </div>

    <div class="col-md-12">

    </div>





    <script type="text/javascript"  src="https://code.jquery.com/jquery-1.12.3.min.js"
            integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
            crossorigin="anonymous"></script>


    <script src="/js/mousemove.js"></script>
    <script src="/js/drawSVG.js"></script>
    <script src="/js/saveFunction.js"></script>

</body>
</html>









