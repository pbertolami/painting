@extends('pages.layout')


@section('content')

    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h1 id="htranscript2">About The Company and Founder:</h1>
                <p id="ptranscript3">University Paint Pros was founded by Paul Bertolami of Brookfield Connecticut. We are registered as an LLC and are business insured. We specialize in deck maintenance and exterior house painting.
                    We pride ouselves in American ingenuity.</p>

                <h1 id="htranscript4">Exterior House Painting:</h1>
                <p id="ptranscript4">Exterior house painting is what we specialize in.  Our process follows a defined formula.
                    First we power wash the house, then we scrape off any loose paint looking for any damaged wood, then we sand down any rough spots,
                    we fill and repair any holes and replace damaged wood along the way, apply one coat of primer, caulk all joints, and finally paint the house.</p>
                <h1 id="htranscript5">Deck Staining:</h1>
                <p id="ptranscript5">The goal is to bring back the natural wood look, we use Benjamin Moore Arborcoat Semi transparent stain whith a protective clear coat.
                    We use a three step process: Remove the grey, stain the deck, and apply the clear coat.  First scrape any mold off and or power wash the deck, then we use Benjamin Moore "Restore" wood restorer.
                    We use gloves and a pump sprayer to apply it to the deck then we scrub it with a stiff bristle brush.
                    Then we spray on Benjamin Moore "Brighten" which brightens and neutralizes "Restore". We wait 48 hours for the wood to dry out.
                    After we use 80 grit sand paper and sweep off the dust.  Using a brush a roller and drop cloth we stain the floor first starting in the farthest corner.
                    One can apply the stain with a roller but be sure to smooth off with a brush.
                    We then apply to the rails with a drop cloth under neath so not to drop on the floor we just stained.  </p>
                <h2 id="htranscript">Paint America Beautiful!</h2>

                    <p id="transcript">Like many middle class families today I feel America has lost its way.
                    And while politicians on both sides argue about solutions the middle class is left to fend for themselves.
                    I feel strongly that a return to simplicity, and core values is necessary for we as a people to survive.  I believe in honesty, hard work, fair wages, free speech, and helping out people in need.
                    What we have forgotten is we cannot paper over, inflate out of, or offshore our problems.  Simply put we need to realize that hard work is required.  Hard workers will always be in demand.
                        This is what I believe in and what I want to instill in the next generation of workers.
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