
// Load up myImage.
var myImage = new Image();
myImage.src = '/svg/house3.svg';
myImage.width = '287';
myImage.height = '175';
// Render our SVG image to the canvas once it loads.
myImage.onload = function(){
    context.drawImage(myImage,0,0);
}