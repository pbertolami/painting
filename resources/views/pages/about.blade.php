@extends('pages.layout')


@section('content')

    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h1 id="htranscript2">About The Company and Founder:</h1>
                <p id="ptranscript3">University Paint Pros was founded by Paul Bertolami of Brookfield Connecticut. From the website to sweeping the office floors we do it all.
                    We pride ouselves in American ingenuity.</p>



                <h2 id="htranscript">Paint America Beautiful Again!</h2>

                    <p id="transcript">Like many middle class families today I feel America has lost its way.
                    And while politicians on both sides argue about solutions the middle class is left to fend for themselves.
                    I feel strongly that a return to simplicity, and core values is necessary for we as a people to survive.  I believe in honesty, hard work, fair wages, free speech, helping out people in need.
                    What we have forgotten is we cannot paper over, inflate out of, or offshore our problems.  Simply put we need to realize that hard work is required.  Hard workers will always be in demand.
                        This is what I want to instill in the next geneation of workers and why we take pride in what we do.
                    If you are a University Student we welcome you to apply just send me an email at pbertolami@aol.com.  If you are a potential customer give me a call, send me an email or text, or fill out the contact form.</p>
            </div>
            <div class="col-md-6">

                <div class="container">

                    <canvas id="pad2" width="500" height="500" style="border:1px solid #000000;" ></canvas>
                    <img src="images/badpaint.jpg" id="background" style="display: none;"/>
                </div>
                <br>
                <a class="btn btn-primary btn-lg btn-block" href='/contactform' role="button" style="background-color: #81c080;">Get a Quote</a>



            </div>
        </div>
    </div>
    <script src="/js/paintText.js"></script>
    <!--<script src="/js/scrollBar.js"></script>-->