function mode_change(value) {
    var abc = value;
    if (abc == 1) {
        document.getElementById('bdy').style.backgroundColor = 'black';
        document.getElementById('navbar').style.backgroundColor = '#1A1919';
        document.getElementById('navbar').style.color = 'white';
        document.getElementById('nav-text').style.color = '#FF004D';
        document.getElementById('recon-title').style.color = '#FF004D';
        document.getElementById('ip1').style.backgroundColor = '#95D3FF';
        document.getElementById('ip2').style.backgroundColor = '#95D3FF';
        document.getElementById('ip3').style.backgroundColor = '#95D3FF';
        document.getElementById('ip4').style.backgroundColor = '#95D3FF';
        // document.getElementById('tool').style.backgroundColor = '#FF114A';
        // document.getElementById('select-btn').style.backgroundColor = '#FF114A';
        // document.getElementById('submit').style.backgroundColor = '#FF114A';

        document.getElementById('ip1').style.color = 'white';
        document.getElementById('ip2').style.color = 'white';
        document.getElementById('ip3').style.color = 'white';
        document.getElementById('ip4').style.color = 'white';
        document.getElementById("logo-img").src = "/img/Dark/2.png";

        document.getElementById('chkbx').value = 2;
    }

    if (abc == 2) {
        document.getElementById('bdy').style.backgroundColor = 'white';
        document.getElementById('navbar').style.backgroundColor = '#dbd8d8';
        document.getElementById('navbar').style.color = 'black';
        document.getElementById('nav-text').style.color = '#0E0064';
        document.getElementById('recon-title').style.color = 'black';
        document.getElementById('ip1').style.backgroundColor = '#dbd8d8';
        document.getElementById('ip2').style.backgroundColor = '#dbd8d8';
        document.getElementById('ip3').style.backgroundColor = '#dbd8d8';
        document.getElementById('ip4').style.backgroundColor = '#dbd8d8';
        document.getElementById('tool').style.backgroundColor = '#0E0064';
        document.getElementById('select-btn').style.backgroundColor = '#0E0064';
        document.getElementById('submit').style.backgroundColor = '#0E0064';
        document.getElementById('ip1').style.color = 'black';
        document.getElementById('ip2').style.color = 'black';
        document.getElementById('ip3').style.color = 'black';
        document.getElementById('ip4').style.color = 'black';
        document.getElementById("logo-img").src = "/img/1.png";
        document.getElementById('chkbx').value = 1;
    }
}