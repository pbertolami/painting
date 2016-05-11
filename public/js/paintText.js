/**
 * Created by Paul on 5/10/2016.
 */

window.onload = function(){
    var pElement = document.getElementById("transcript");//get the paragraph
    var str = pElement.innerHTML; //put all paragraph innnerHTML text into a string
    var trimStr = str.trim().split(/\s+/);//trim beginning and ending white space

    var hElement = document.getElementById("htranscript"); //get the h className
    var str1 = hElement.innerHTML;
    var trimStr1 = str1.trim().split(/\s+/);

    var hElement2 = document.getElementById("htranscript2"); //get the h className
    var str2 = hElement2.innerHTML;
    var trimStr2 = str2.trim().split(/\s+/);

    var pElement3 = document.getElementById("ptranscript3"); //get the h className
    var str3 = pElement3.innerHTML;
    var trimStr3 = str3.trim().split(/\s+/);


            clear();


        for(i=0; i < trimStr.length; i++){
            var spanElement = document.createElement("span");//create span elements for the number of words in the trimStr array of words
            spanElement.id = "word" + [ i];//create a unique id for each span element
            var textNode = document.createTextNode(trimStr[i] + " ");//create a textNode for each word in the trimStr array of words
            spanElement.appendChild(textNode);//attach the nodes to the span elements
            transcript.appendChild(spanElement);//append the elements to the parent p "transcript"
            spanElement.addEventListener("mouseover", mOver, false);
        }
        for(i=0; i < trimStr1.length; i++){
            var spanElement1 = document.createElement("span");//create span elements for the number of words in the trimStr array of words
            spanElement1.id = "text" + [ i];//create a unique id for each span element
            var textNode1 = document.createTextNode(trimStr1[i] + " ");//create a textNode for each word in the trimStr array of words
            spanElement1.appendChild(textNode1);//attach the nodes to the span elements
            htranscript.appendChild(spanElement1);//append the elements to the parent p "transcript"
            spanElement1.addEventListener("mouseover", mOver1, false);
        }
        for(i=0; i < trimStr2.length; i++){
            var spanElement2 = document.createElement("span");//create span elements for the number of words in the trimStr array of words
            spanElement2.id = "text2" + [ i];//create a unique id for each span element
            var textNode2 = document.createTextNode(trimStr2[i] + " ");//create a textNode for each word in the trimStr array of words
            spanElement2.appendChild(textNode2);//attach the nodes to the span elements
            htranscript2.appendChild(spanElement2);//append the elements to the parent p "transcript"
            spanElement2.addEventListener("mouseover", mOver2, false);
        }
        for(i=0; i < trimStr3.length; i++){
            var spanElement3 = document.createElement("span");//create span elements for the number of words in the trimStr array of words
            spanElement3.id = "text3" + [ i];//create a unique id for each span element
            var textNode3 = document.createTextNode(trimStr3[i] + " ");//create a textNode for each word in the trimStr array of words
            spanElement3.appendChild(textNode3);//attach the nodes to the span elements
            ptranscript3.appendChild(spanElement3);//append the elements to the parent p "transcript"
            spanElement3.addEventListener("mouseover", mOver3, false);
        }
        function clear(){
            document.getElementById('transcript').innerHTML = "";
            document.getElementById('htranscript').innerHTML = "";
            document.getElementById('htranscript2').innerHTML = "";
            document.getElementById('ptranscript3').innerHTML = "";
        }



        function mOver(evt){
            evt.target.style.color = "#81c080";
            //alert("Event handler" + evt.currentTarget.id + "user clicked on" + evt.target.id);
        };
        function mOver1(evt){
            evt.target.style.color = "#c08081";
        }
        function mOver2(evt){
            evt.target.style.color ="#c08081";
        }
        function mOver3(evt){
            evt.target.style.color ="#81c080";
        }

        //The below code draws a picture inpage into a cnavas and then I draw some text on that picture
            var myPad = document.getElementById("pad2");
            var context = myPad.getContext("2d");
            var background = document.getElementById('background');
            context.fillStyle = "white";
            context.font = "50px Serif";
            context.textAlign = "center";
            context.textBaseline = "middle";
            context.drawImage(background, 0, 0);
            context.fillText("Got Paint?", 250, 250);

    }

