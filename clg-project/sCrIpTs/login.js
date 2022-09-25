function validate() {
    var uname = document.getElementById('Uname').value;
    var pass = document.getElementById('Pass').value;
    if (uname == "" & pass != "") {
        document.getElementById('p1').style.color = "red";
        document.getElementById('p1').style.marginLeft = '100px';
        document.getElementById('p1').innerHTML = "Enter Username";
        document.getElementById('p2').innerHTML = ""; 
        return false;
    }
    if (pass == "" & uname != "") {
        document.getElementById('p2').style.color = "red";
        document.getElementById('p2').style.marginLeft = '100px';
        document.getElementById('p2').innerHTML = "Enter Password";
        document.getElementById('p1').innerHTML = "";
        return false;
    }
    if(uname == "" & pass == ""){
        document.getElementById('p2').style.color = "red";
        document.getElementById('p2').style.marginLeft = '100px';
        document.getElementById('p2').innerHTML = "Username & Password both are missing";
        return false;
    }
    return true;
}
function invalidate(){
    document.getElementById('p2').style.color = "red";
    document.getElementById('p2').style.marginLeft = '100px';
    document.getElementById('p2').innerHTML = "Invalid Username or Password";
    return false;
}