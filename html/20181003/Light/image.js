var a = document.getElementById("light");
function TurnOn(){
    console.log(a.src="https://www.w3schools.com/js/pic_bulbon.gif");
}
function TurnOff(){
    a.src="https://www.w3schools.com/js/pic_bulboff.gif";
    console.log(a);
}
function OnOff(){
    if (a.src==="https://www.w3schools.com/js/pic_bulboff.gif"){
        a.src="https://www.w3schools.com/js/pic_bulbon.gif";
        console.log(a.src);
    }
    else {a.src="https://www.w3schools.com/js/pic_bulboff.gif";
    console.log(a.src);}
}