/**
 * Created by Administrator on 5/8/2016.
 */
window.onload = function() {
    'use strict';
    var theForm = document.getElementById("quoteform"); //set up variable for the form

    first_name.addEventListener("keyup", function (evt) {
        var fname = theForm.elements["first_name"].value;
        if (fname.length < 1) {
            this.parentNode.getElementsByTagName("span")[0].style.display = "inline";

        } else {
            //hide html
            this.parentNode.getElementsByTagName("span")[0].style.display = "none";
        }
        return false;

    }, false);

    last_name.addEventListener("keyup", function (evt) {
        var lname = theForm.elements["last_name"].value;
        if (lname.length < 1) {
            this.parentNode.getElementsByTagName("span")[0].style.display = "inline";

        } else {
            //hide html
            this.parentNode.getElementsByTagName("span")[0].style.display = "none";
        }
        return false;

    }, false);

    street.addEventListener("keyup", function (evt) {
        var fstreet = theForm.elements["street"].value;
        if (fstreet.length < 1) {
            this.parentNode.getElementsByTagName("span")[0].style.display = "inline";

        } else {
            //hide html
            this.parentNode.getElementsByTagName("span")[0].style.display = "none";
        }
        return false;

    }, false);
    zip.addEventListener("keyup", function (evt) {
        var fzip = theForm.elements["zip"].value;
        if (fzip.length < 1) {
            this.parentNode.getElementsByTagName("span")[0].style.display = "inline";

        } else {
            //hide html
            this.parentNode.getElementsByTagName("span")[0].style.display = "none";
        }
        return false;

    }, false);
    city.addEventListener("keyup", function (evt) {
        var fcity = theForm.elements["city"].value;
        if (fcity.length < 1) {
            this.parentNode.getElementsByTagName("span")[0].style.display = "inline";

        } else {
            //hide html
            this.parentNode.getElementsByTagName("span")[0].style.display = "none";
        }
        return false;

    }, false);
    state.addEventListener("keyup", function (evt) {
        var fstate = theForm.elements["state"].value;
        if (fstate.length < 1) {
            this.parentNode.getElementsByTagName("span")[0].style.display = "inline";

        } else {
            //hide html
            this.parentNode.getElementsByTagName("span")[0].style.display = "none";
        }
        return false;

    }, false);

    email.addEventListener("keyup", function (evt) {
        var femail = theForm.elements["email"].value;
        if (femail.length < 1) {
            this.parentNode.getElementsByTagName("span")[0].style.display = "inline";

        } else {
            //hide html
            this.parentNode.getElementsByTagName("span")[0].style.display = "none";
        }
        return false;

    }, false);
    siding.addEventListener("keyup", function (evt) {
        var fsiding = theForm.elements["siding"].value;
        if (fsiding.length < 1) {
            this.parentNode.getElementsByTagName("span")[0].style.display = "inline";

        } else {
            //hide html
            this.parentNode.getElementsByTagName("span")[0].style.display = "none";
        }
        return false;

    }, false);
    squarefoot.addEventListener("keyup", function (evt) {
        var fsquarefoot = theForm.elements["squarefoot"].value;
        if (fsquarefoot.length < 1) {
            this.parentNode.getElementsByTagName("span")[0].style.display = "inline";

        } else {
            //hide html
            this.parentNode.getElementsByTagName("span")[0].style.display = "none";
        }
        return false;

    }, false);



    //this funciton limits the text input of the text area to 500 characters with a char countdown
    description.addEventListener("keydown", function (evt) {

        var charsInput = parseInt(document.getElementById("description").value.length);//get the length of the input
        console.log(charsInput);
        var charMax = 500;//set the max input to 500
        var charsLeft = charMax - charsInput; //compute the characters left to populate
        document.getElementById("charsLeft").innerHTML = charsLeft;//display html of dynamic number of characters left


        return false;
    }, false);

    //this is my phone validation using regex
    var phone = document.getElementById("phone");
    phone.addEventListener("blur", function (evt) {
        console.log("keyup", evt.target.value);
        var value = evt.target.value
        var pattern1 = /^(\d{3})(\d{3})(\d{4})$/; //2037750065
        var pattern2 = /^[(](\d{3})[)](\d{3})[-](\d{4})$/; //(203)775-0065
        var pattern3 = /^(\d{3})[-.!@#$%^&*](\d{3})[-.!@#$%^&*](\d{4})$/; //203.775.0065, 203@775#0065 etc.
        var a, b, c;
        if (pattern1.test(value)) {
            console.log("valid pattern1", value);
            a = value.substr(0, 3);
            b = value.substr(3, 3);
            c = value.substr(6, 4);
            evt.target.value = a + "-" + b + "-" + c; //or phone.value = a+"-"b+"-"c; this reformats the number
            this.parentNode.getElementsByTagName("span")[0].style.display = "none";
        }
        else if (pattern2.test(value)) {
            console.log("valid pattern2", value)
            a = value.substr(1, 3);
            b = value.substr(5, 3);
            c = value.substr(9, 4);
            evt.target.value = a + "-" + b + "-" + c; //or phone.value = a+"-"b+"-"c; this reformats the number
            this.parentNode.getElementsByTagName("span")[0].style.display = "none";
        }
        else if (pattern3.test(value)) {
            console.log("valid pattern3", value)
            a = value.substr(0, 3);
            b = value.substr(4, 3);
            c = value.substr(8, 4);
            evt.target.value = a + "-" + b + "-" + c; //or phone.value = a+"-"b+"-"c; this reformats the number
            this.parentNode.getElementsByTagName("span")[0].style.display = "none";
        }
        else {
            alert("Whoops something is wrong phone must use numbers, only or numbers with delimiters such as (203)775-0065, 203-775-0065, or 2037750065");
        }
        return false;

    }, false);
}



