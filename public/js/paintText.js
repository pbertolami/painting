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

    var hElement4 = document.getElementById('htranscript4');
    var strh4 = hElement4.innerHTML;
    var trimStrh4 = strh4.trim().split(/\s+/);

    var hElement5 = document.getElementById('htranscript5');
    var strh5 = hElement5.innerHTML;
    var trimStrh5 = strh5.trim().split(/\s+/);

    var pElement4 = document.getElementById('ptranscript4');
    var strp4 = pElement4.innerHTML;
    var trimStrp4 = strp4.trim().split(/\s+/);

    var pElement5 = document.getElementById('ptranscript5');
    var strp5 = pElement5.innerHTML;
    var trimStrp5 = strp5.trim().split(/\s+/);


            clear();

        for(i=0; i < trimStrh4.length; i++){
            var spanElementh4 = document.createElement("span");//create span elements for the number of words in the trimStr array of words
            spanElementh4.id = "word" + [ i];//create a unique id for each span element
            var textNodeh4 = document.createTextNode(trimStrh4[i] + " ");//create a textNode for each word in the trimStr array of words
            spanElementh4.appendChild(textNodeh4);//attach the nodes to the span elements
            htranscript4.appendChild(spanElementh4);//append the elements to the parent p "transcript"
            spanElementh4.addEventListener("mouseover", mOverh4, false);
        }
        for(i=0; i < trimStrh5.length; i++){
            var spanElementh5 = document.createElement("span");//create span elements for the number of words in the trimStr array of words
            spanElementh5.id = "word" + [ i];//create a unique id for each span element
            var textNodeh5 = document.createTextNode(trimStrh5[i] + " ");//create a textNode for each word in the trimStr array of words
            spanElementh5.appendChild(textNodeh5);//attach the nodes to the span elements
            htranscript5.appendChild(spanElementh5);//append the elements to the parent p "transcript"
            spanElementh5.addEventListener("mouseover", mOverh5, false);
        }
        for(i=0; i < trimStrp4.length; i++){
            var spanElementp4 = document.createElement("span");//create span elements for the number of words in the trimStr array of words
            spanElementp4.id = "word" + [ i];//create a unique id for each span element
            var textNodep4 = document.createTextNode(trimStrp4[i] + " ");//create a textNode for each word in the trimStr array of words
            spanElementp4.appendChild(textNodep4);//attach the nodes to the span elements
            ptranscript4.appendChild(spanElementp4);//append the elements to the parent p "transcript"
            spanElementp4.addEventListener("mouseover", mOverh6, false);
        }
        for(i=0; i < trimStrp5.length; i++){
            var spanElementp5 = document.createElement("span");//create span elements for the number of words in the trimStr array of words
            spanElementp5.id = "word" + [ i];//create a unique id for each span element
            var textNodep5 = document.createTextNode(trimStrp5[i] + " ");//create a textNode for each word in the trimStr array of words
            spanElementp5.appendChild(textNodep5);//attach the nodes to the span elements
            ptranscript5.appendChild(spanElementp5);//append the elements to the parent p "transcript"
            spanElementp5.addEventListener("mouseover", mOverh7, false);
        }


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
            document.getElementById('htranscript4').innerHTML = "";
            document.getElementById('htranscript5').innerHTML = "";
            document.getElementById('ptranscript4').innerHTML = "";
            document.getElementById('ptranscript5').innerHTML = "";
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
        function mOverh4(evt){
            evt.target.style.color ="#c08081";
        }
        function mOverh5(evt){
            evt.target.style.color ="#c08081";
        }
        function mOverh6(evt){
            evt.target.style.color ="#81c080";
        }
        function mOverh7(evt){
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

