/**
 * Created by Paul on 5/9/2016.
 * Opted not to use this navigation control as bootstrap was short circuting my code however decided to leave the code here for future use as it is good to go!
 * Note I loaded this project with twitter bootstrap and rue the day as it gets in the way of my code.
 */

var navSelection = document.getElementById("navSelection");
var navSelections = navSelection.children;
var currentNav; //Current Brush selected

for(var i=0; i < navSelections.length; i++) {
    var navSelection = navSelections[i];
    if (i == 0) {
        currentNav = navSelection;
    }

    navSelection.addEventListener("click", function (evt) {

        this.className = "activeNavigation";
        currentNav.className = "";
        currentNav = this;

        console.log(currentNav);//just testing the code
    });

}

