var OpSet = "+ - * /";

//Basic Buttons
for (i = 1; i <= 9; i++)
{
    document.getElementById("basic-buttons-area").innerHTML += " <button class=\"basic-button\" onclick='ChangeValue(" + i + "); style=\"grid-area: num" + i + "\";'> " + i + " </button>";
}


function Clear()
{
    document.getElementById("bar").innerHTML = "";
}
//Functionality
function ChangeValue(i)
{
    if (document.getElementById("bar").innerHTML.includes("Type in a Number to Start...")) { Clear();}

    //Variables
    var lastElement = document.getElementById("bar").innerHTML[document.getElementById("bar").innerHTML.length - 1];
    var LastIsOp = false;
    var LastIsNull = false;

    //If last element is an operation && You Type an operation
    if (OpSet.includes(lastElement)) LastIsOp = true;
    if (lastElement == "") LastIsNull = true;

    //Insert Ops In a row (invalid)
    if ((LastIsOp || LastIsNull) && OpSet.includes(i)) { alert("Bad Expression -\nLast element is an operator");}

    //Insert Numbers After Numbers 
    else if (!LastIsOp && !OpSet.includes(i))
    {
        document.getElementById("bar").innerHTML += i;
    }
    //Insert
    else
    {
        document.getElementById("bar").innerHTML += (" " + i);
    }

    
}
function Backspace()
{
    var BarText = document.getElementById("bar").innerHTML;

    if (!OpSet.includes(BarText[BarText.length - 1])) {
        document.getElementById("bar").innerHTML =
            BarText.replace(BarText[BarText.length - 1], "");
    }
    else
    {
        document.getElementById("bar").innerHTML =
            BarText.slice(0, BarText.lastIndexOf(BarText[BarText.length]) - 1);
    }

}
function Solve()
{
    try
    {
        if (isNaN(eval(document.getElementById("bar").innerHTML))) { alert("Bad Expression -\nNot a Number (Nan)"); }
        else { document.getElementById("bar").innerHTML = eval(document.getElementById("bar").innerHTML); }
    }
    catch(mistake)
    {
        alert("Bad Expression -\n" + mistake.message);
    }
    document.getElementById("bar").style.animation = "none";
    document.getElementById("bar").offsetHeight;
    document.getElementById("bar").style.animation = null;
    document.getElementById("bar").style.animation = "500ms equal-anim forwards";
}