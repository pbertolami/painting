/**
 * Created by Administrator on 5/4/2016.
 */

var canvas = document.getElementById("pad");
var context = canvas.getContext("2d");

var mouseDown = false; //set mouseDown to false
var posX =0;
var posY =0;
context.strokeStyle = "#000000"; //black line

//make sure canvas background has a color
context.fillStyle = '#FFF3B8';
context.fillRect(0,0,canvas.width,canvas.height);



function getMousePos(canvas,evt){
    var rect = canvas.getBoundingClientRect();
    //alert ("theTop: " + rect.top +", theLeft: " + rect.left + ", theRight: " + rect.right+ ", theBottom: " + rect.bottom);//this is just test code
    return{
        x: evt.clientX - rect.left,
        y: evt.clientY - rect.top
    };
}

//event listener when a user places the mouse down on canvas
canvas.addEventListener("mousedown", function(evt){
    mouseDown = true; //set mouseDown to true when you mousedown

    var mousePos = getMousePos(canvas, evt);
    posX = mousePos.x;
    posY = mousePos.y;
    context.beginPath();
    context.lineWidth = brushWidth; //Decided to put this line of code under brush.event listener could cause problems later
    context.lineJoin = context.lineCap = 'round';
    context.moveTo(posX, posY);
});
//event listener when a user lifts mouse up
canvas.addEventListener("mouseup", function(evt){
    mouseDown = false; //set mouseDown to false
});
//event listener when the user moves the mouse around
canvas.addEventListener("mousemove", function(evt){
    if(mouseDown){
        //posX = evt.offsetX;
        //posY = evt.offsetY;
        var mousePos = getMousePos(canvas, evt);
        posX = mousePos.x;
        posY = mousePos.y;
        context.lineTo(posX, posY);
        context.stroke();
    }
});

//clear function
var clearBtn = document.getElementById("btnClear");
clearBtn.addEventListener("click", function(evt){
    canvas.width = canvas.width; //clears the canvas

    //reset canvas background to whitespace or other color
    context.fillStyle = "#FFF3B8";
    context.fillRect(0,0, canvas.width,canvas.height);
});
//palette
var palette = document.getElementById("palette");
var colors = palette.children;
var currentColor; //current active swatches

for(var i=0; i < colors.length; i++){
    var color = colors[i];
    if(i==0){
        currentColor = color;
    }
    //when a color is clicked on, I used jquery to get this
    color.addEventListener("click", function (evt){
        this.className = "default"; //give the swatch a class of "default", triggering the css border
        currentColor.className = ""; //remove the "default" class from the previously selected color
        currentColor = this; //set this to the current color so next time we'll take "default" off of this.

        context.strokeStyle = $(this).data('colorvalue'); //set the background color for the canvas.
    });
}
//Brushes

var selection = document.getElementById("selection");
var brushes = selection.children;
var currentBrush; //Current Brush selected
var brushWidth;
for(var i=0; i < brushes.length; i++) {
    var brush = brushes[i];
    if (i == 0) {
        currentBrush = brush;
    }
    //when a brush is clicked on, I used jquery to get this
    brush.addEventListener("click", function (evt) {

        this.className = "default"; //give the brush a class of "default", triggering the css border
        currentBrush.className = ""; //remove the "default" class from the previously selected brush
        currentBrush = this; //set this to the current brush so next time we'll take "default" off of this.
        brushWidth = $(this).data('brushvalue'); //set the line width for the canvas.
        console.log(brushWidth);//just testing the code
    });

}

