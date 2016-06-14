/**
 * Currently decided not to use this function took the button off as well
 * Created by Administrator on 5/4/2016.
 */
//Please Note this function technically meets the JSON custom objects requirement of the final project,
//however it will only run if you have enough space in other words it wont run if you are trying to stringify
//the SVG file however it should run if you are just trying to stringify a freehand drawing.
//this file shows the code uncommented however the live web site shows the last two lines commented out
//Also I left my experimental code all commented out on the lower half of the page
/*
window.onload = function(){

    var myCanvas = document.getElementById("pad");
    var context = myCanvas.getContext('2d');

    btnSave.addEventListener("click", function (evt) {
        var d = new Date();
        var n = d.getTime();
        $('body').append("<IMG id='n' src="+canvas.toDataURL("image/jpeg")+">");
        var data = context.getImageData(0, 0, canvas.width, canvas.height);
        window.localStorage.setItem("myDataStringify",JSON.stringify(data));
        var rtnObject = JSON.parse(window.localStorage.getItem("myDataStringify"));

    },false);
}

*/

/*
//get reference to btnSave
var btnSave = document.getElementById("btnSave");
//add EventListener to btnSave
btnSave.addEventListener("click", function (evt){
    //var dataUri = canvas.toDataURL() throws an error of Tainted canvas so
    //I decided to use JSON
    var data = context.getImageData(0,0, canvas.width, canvas.height);
    console.log(data);
    //stringify the data

    //console.log stringify data to test
    console.log(window.localStorage.getItem("myDataStringify"));
    //return the object

    //console.log the returned object to test
    console.log(rtnObject);

    //save the image with HTML5 download attribute
    //var dataUri = canvas.toDataURL("image/jpeg");
    //create a unique identifier ie. timestamp
    //var now = new Date().getTime(); //today in milliseconds

    //set attributes href and download
    //this.setAttribute("download", "image" + now + ".jpg");
    //this.setAttribute("href", dataUri);

}, false);
    */