@extends('pages.layout')


@section('content')
<style>
    label{
        display: inline-block;
        float: left;
        clear: left;
        width: 100px;
        text-align: left;
    }
    #height {
        display: inline-block;
        float: left;
        width: 150px;
    }
    #width{
        display: inline-block;
        float: left;
        width: 150px;
    }
    button{
        display: inline-block;
        float: left;
        width: 50px;
        height:25px;
    }
    #qwindows{
        display: inline-block;
        float: left;
        width: 50px;
    }
    #doors{
        display: inline-block;
        float: left;
        width: 50px;
    }
    #btnCalc{
        display: inline-block;
        float: left;
        clear: left;
        width: 250px;
    }
    p{
        clear: left;
    }
    #gallons {
        display: inline-block;
        float: left;
        width: 150px;
    }
    #sqrfeet{
        display: inline-block;
        float: left;
        width: 150px;
    }
    #chartContainer1{
        display: inline-block;
        float: left;
    }
    #chartContainer2{
        display: inline-block;
        float: left;
    }
    #chartContainer3{
        display: inline-block;
        float: left;
    }


</style>
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">
    window.onload = function() {

        function calculate() {
            'use strict';
            var gallons;
            var sqrfeet;
            var totalwindows = document.getElementById('qwindows').value;
            var totaldoors = document.getElementById('doors').value;
            var sqrfeetperwindow = 15;
            var sqrfeetperdoor = 21;
            var height = document.getElementById('height').value;
            var width = document.getElementById('width').value;
            var totalsqrfeetwindows;
            var totalsqrfeetdoors;
            totalsqrfeetwindows = sqrfeetperwindow * totalwindows;
            totalsqrfeetdoors = sqrfeetperdoor * totaldoors;
            sqrfeet = (height * width) - totalsqrfeetdoors - totalsqrfeetwindows;
            gallons = sqrfeet/350;
            document.getElementById('sqrfeet').value = sqrfeet;
            document.getElementById('gallons').value = gallons;



        }

        function subnumberwindows() {
            var quantity = document.getElementById('qwindows').value;
            var qwindowsvalue = parseInt(quantity);
            if(qwindowsvalue >0) {

                qwindowsvalue--;
                document.getElementById('qwindows').value = qwindowsvalue;
            }else{
                alert("You cannot have negative windows silly! Try again Thanks!")
            }
        }

        function addnumberwindows() {
            var quantity = document.getElementById('qwindows').value;
            var qwindowsvalue = parseInt(quantity);
                if (qwindowsvalue < 100) {

                    qwindowsvalue = qwindowsvalue + 1;
                    document.getElementById('qwindows').value = qwindowsvalue;
                } else {
                    alert("Sorry the number of windows is too high for this application to work")
                }
        }

        function subnumberdoors(){
            var quantity =document.getElementById('doors').value;
            var qdoorsvalue = parseInt(quantity);
                if(qdoorsvalue >0){
                    qdoorsvalue--;
                    document.getElementById('doors').value = qdoorsvalue;
                }else{
                    alert("You cannot have negative doors silly! Try again.")
                }
        }
        function addnumberdoors(){
            var quantity = document.getElementById('doors').value;
            var qdoorsvalue = parseInt(quantity);
            if(qdoorsvalue <50){
                qdoorsvalue = qdoorsvalue + 1;
                document.getElementById('doors').value = qdoorsvalue;
            }else{
                alert("Sorry the number of doors is too high for this applicaiton to work!")
            }
        }



            btnPlus.addEventListener("click", function (evt) {
            addnumberwindows();
        });
        btnMinus.addEventListener("click", function (evt) {
            subnumberwindows();
        });
        btndoorMinus.addEventListener("click", function (evt) {
            subnumberdoors();
        });
        btndoorPlus.addEventListener("click", function (evt) {
            addnumberdoors();
        });
        btnCalc.addEventListener("click", function (evt) {
            calculate();
        });

        CanvasJS.addColorSet('primary',
            [//color set array
                    "#0000FF",
                    "#FFFF00",
                    "#FF0000"
             ]);
        CanvasJS.addColorSet('secondary',
            [//color set array
                    '#0000FF',
                    '#00FF00',
                    '#FFFF00',
                    '#FFA500',
                    '#FF0000',
                    '#FF00FF'
            ]);
        CanvasJS.addColorSet('tertiary',
                [//color set array
                    '#0000FF',
                    '#007FFF',
                    '#00FFFF',
                    '#00FF7F',
                    '#00FF00',
                    '#7FFF00',
                    '#FFFF00',
                    '#FFA500',
                    '#FF0000',
                    '#FF007F',
                    '#FF00FF'
                ]);
    var chart1 = new CanvasJS.Chart("chartContainer1",
            {
                colorSet: "primary",
                backgroundColor:'#FFF3B8',
                title:{
                    text: "Primary Colors"
                },
                data: [
                    {
                        type: "doughnut",
                        dataPoints: [

                            {  y: 33, indexLabel: "Blue" },
                            {  y: 33, indexLabel: "Yellow" },
                            {  y: 33, indexLabel: "Red" }
                        ]
                    }
                ]
            });

    chart1.render();

        var chart2 = new CanvasJS.Chart("chartContainer2",
                {
                    colorSet: "secondary",
                    backgroundColor:'#FFF3B8',
                    title:{
                        text: "Secondary Colors"
                    },
                    data: [
                        {
                            type: "doughnut",
                            dataPoints: [
                                {  y: 17, indexLabel: "Blue" },
                                {  y: 17, indexLabel: "Green" },
                                {  y: 17, indexLabel: "Yellow" },
                                {  y: 17, indexLabel: "Orange" },
                                {  y: 17, indexLabel: "Red" },
                                {  y: 17, indexLabel: "Purple" }
                            ]
                        }
                    ]
                });

        chart2.render();

        var chart3 = new CanvasJS.Chart("chartContainer3",
                {
                    colorSet: "tertiary",
                    backgroundColor:'#FFF3B8',
                    title:{
                        text: "Tertiary Colors"
                    },
                    data: [
                        {
                            type: "doughnut",
                            dataPoints: [
                                {  y: 8, indexLabel: "Blue" },
                                {  y: 8, indexLabel: "Azure"},
                                {  y: 8, indexLabel: "Cyan"},
                                {  y: 8, indexLabel: "Spring Green"},
                                {  y: 8, indexLabel: "Green" },
                                {  y: 8, indexLabel: "Chartreuse Green"},
                                {  y: 8, indexLabel: "Yellow"},
                                {  y: 8, indexLabel: "Orange"},
                                {  y: 8, indexLabel: "Red"},
                                {  y: 8, indexLabel: "Rose"},
                                {  y: 8, indexLabel: "Magenta"},
                                {  y: 8, indexLabel: "Purple" }
                            ]
                        }
                    ]
                });

        chart3.render();
        }
</script>
<div class="row">
    <div class="col-md-4">
<h1>Exterior House Paint Calculator</h1>
    <p>Input the height and width of one side of the house. The typical height of a two story house is between 25 to 30 feet.</p>
    <fieldset>
        <label for="height">Total Height</label>
        <input id="height" class="heightInput" type="text" pattern="[0-9]*" maxlength="3" name="height" placeholder="Feet"><br>
        <label for="width">Total Width</label>
        <input id="width" class="widthInput" type="text" pattern="[0-9]*" maxlength="3" name="width" placeholder="Feet">
        <label for="windows">Windows</label><br>
        <button type="button" class="plus_minus" id="btnMinus">-</button>
        <input id="qwindows" class="windowInput" type="text" pattern="[0-9]*" maxlength="3" name="windows" value="0">
        <button type="button" class="plus_minus" id="btnPlus">+</button>

        <label for="doors">Doors</label><br>
        <button type="button" class="plus_minus" id="btndoorMinus">-</button>
        <input id="doors" class="doorInput" type="text" pattern="[0-9]*" maxlength="3" name="doors" value="0">
        <button type="button" class="plus_minus" id="btndoorPlus">+</button><br>
        <button type="button" id="btnCalc" name="calc" tabindex="-1">Calculate</button><br>
        <p>The results of this calculation are for one coat of product.
            It assumes one gallon will cover approximately 350 square feet.
            The calculation is based on 3'x7' doors and 3'x5' windows. To ensure optimal coverage, we recommend rounding up to the nearest gallon.
        </p>
        <p>The paint calculator is intended to provide the user with the approximate amount of product needed for a project.
            Product requirements will vary according to factors such as application method and surface condition.
        </p>
        <label for="gallons">Gallons:</label>
        <input id="gallons" class="gallonsOutput" type="text" pattern="[0-9]*" name="gallons" placeholder="Gallons Needed"><br>
        <label for="sqrfeet">Sqr Feet:</label>
        <input id="sqrfeet" class="sqrfeetOutput" type="text" pattern="[0-9]*" name="sqrfeet" placeholder="Sqr Feet">


    </fieldset>
    </div>
    <div class="col-md-8">
        <h1>Color Theory</h1>
        <p>Color theory is a huge topic that covers a multitude of topics, concepts, and definitions.
        I am just going to cover the basics just enough to get you into trouble. Everyone probably vaguely remembers the color wheel from grade school.
        The color wheel was first developed by Isaac Newton in 1666 as a circular diagram of colors.
            It was Sir Isaac Newton's experiments with white light that led him to the discovery of the visible spectrum of light.
        He passed light through a prism and the result was a spectrum of colors including red, orange, yellow, green, blue, indigo, and violet.
        Some remember memorizing the phrase ROY G BIV from science class to help remember the sequence of these colors.
        Today color theorists have divided colors into three seperate color wheels primary colors, secondary colors, and tertiary colors.
        </p><p><B>Primary Colors:</B> Red, yellow, and blue.</p><p>Primary colors are the three colors that cannot be mixed or formed by any combination of other colors.
        Also, all other colors can be derived from these three primary colors by mixing.</p>
        <p><b>Secondary Colors:</b> Green, orange, and purple.</p><p>These colors are formed by mixing the primary colors.
        Red and yellow make orange. Red and blue make purple. Yellow and blue make green.</p>
        <p><b>Tertiary Colors:</b> Yellow-orange, red-orange, red-purple, blue-purple, blue-green, and yellow-green.</p>
        <p>Tertiary colors are formed by  mixing a primary color with a secondary color.</p>

        <div id="chartContainer1" style="height: 200px; width: 33%;">
        </div>
        <div id="chartContainer2" style="height: 200px; width: 33%;">
        </div>
        <div id="chartContainer3" style="height: 200px; width: 33%;">
        </div>
        <p>Color schemes can be based on complementary colors or even analagous colors.
            Complimentary colors are any two colors which are directly opposite each other on the color wheel.
        Analagous colors are any three colors which are side by side each other on the color wheel.</p>

    </div>

    </div>



