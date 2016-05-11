@extends('pages.layout')



@section('content')


    <hr>

    <form method="POST" action="/profiles/create" name="quoteform" id="quoteform" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                {{csrf_field()}}

                <div class="form-group">

                    <label for="first_name">First Name:</label>
                    <input type="text" placeholder="First Name" name="first_name" id="first_name" class="form-control" required>
                    <span class="hint" id="field1">*Required</span> <br>

                </div>

                <div class="form-group">

                    <label for="last_name">Last Name:</label>
                    <input type="text" placeholder="Last Name" name="last_name" id="last_name" class="form-control" required>
                    <span class="hint" id="field2">*Required</span> <br>

                </div>
                <div class="form-group">

                    <label for="email">Email:</label>
                    <input type="text" placeholder="Email" name="email" id="email" class="form-control" required>
                    <span class="hint" id="field2">*Required</span> <br>

                </div>


                <div class="form-group">

                    <label for="street">Street:</label>
                    <input type="text" placeholder="Street" name="street" id="street" class="form-control" required>
                    <span class="hint" id="field3">*Required</span> <br>

                </div>

                <div class="form-group">
                    <label for="zip">Zip/Postal Code:</label>
                    <input type="text" placeholder="Zip" name="zip" id="zip" class="form-control" required>
                    <span class="hint" id="field4">*Required</span> <br>
                </div>

                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" placeholder="City" name="city" id="city" class="form-control" required>
                    <span class="hint" id="field5">*Required</span> <br>
                </div>



                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" placeholder="State" name="state" id="state" class="form-control" required>
                    <span class="hint" id="field6">*Required</span> <br>
                </div>



                <hr>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input size="16" placeholder="Phone Number" type="text" name="phone" id="phone" pattern="^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$" class="form-control" required>
                    <span class="hint" id="field7">*Required</span> <br>
                </div>

                <div class="form-group">
                    <label for="squarefoot">Approximate Square Foot of House:</label>
                    <input type="text" placeholder="Square Feet" name="squarefoot" id="squarefoot" class="form-control" required>
                    <span class="hint" id="field8">*Required</span> <br>
                </div>

                <div class="form-group">
                    <label for="siding">Type of Siding:</label>
                    <input type="text" placeholder="Type of Siding" name="siding" id="siding" class="form-control" required>
                    <span class="hint" id="field9">*Required</span> <br>
                </div>

                <div class="form-group">
                    <label for="description">Tell me a little about the job and your availability when to contact you and when you would like us to start the project.</label>
                    <textarea type="text" name="description" id="description" class="form-control" rows="10" cols="40" maxlength="500" required></textarea>
                    <div id="charLimit">Limit: 500 characters. You have <span id="charsLeft">500</span>
                        left.</div><br>

                </div>


                <div class="form-group">
                    <button type="submit" id="btnQuote" name="btnQuote" class="btn btn-primary">Get a Quote</button>
                </div>
            </div>
        </div>
    </form>
    <script src="/js/formcontrols.js"></script>