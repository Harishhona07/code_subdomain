function growHeading() {
    var heading=document.getElementsByClassName("heading")[0];
    heading.style.transform="scale(1.1)";
    heading.style.transition="0.5s ease"
    heading.style.color="blue"; 
}
function shrinkHeading() {
    var heading=document.getElementsByClassName("heading")[0];
    heading.style.transform="scale(1)";
    heading.style.transition="0.5s ease";
    heading.style.color="black";
    }