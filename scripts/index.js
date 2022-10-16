function nmap() {
    nmap1();
    document.getElementById('ip1').style.display = 'block';
    document.getElementById('ip2').style.display = 'block';
    document.getElementById('ip3').style.display = 'block';
    document.getElementById('sub-btn').style.display = 'block'; 
}

function assetfinder() {
    assetf1();
    document.getElementById('ip1').style.display = 'block';
    document.getElementById('ip2').style.display = 'none';
    document.getElementById('ip3').style.display = 'none';
    document.getElementById('sub-btn').style.display = 'block';
}

function dnsenum() {
    dnse1();
    document.getElementById('ip1').style.display = 'block';
    document.getElementById('ip2').style.display = 'block';
    document.getElementById('ip3').style.display = 'block';
    document.getElementById('sub-btn').style.display = 'block';
}

function nmap1(){   
    document.getElementById('tool_name').setAttribute('value', 'nmap');
    document.getElementById('ip1').placeholder = "Enter IP Address";
    document.getElementById('ip2').placeholder = "Number of threads (1-5)";
    document.getElementById('ip3').placeholder = "Verbose Mode (yes/no)";
}

function assetf1(){
    document.getElementById('ip1').placeholder = "Enter Domain Name";
    document.getElementById('tool_name').setAttribute('value', 'assetfinder');
}

function dnse1(){
    document.getElementById('tool_name').setAttribute('value', 'dnsenum');
    document.getElementById('ip1').placeholder = "Enter Domain Name";
    document.getElementById('ip2').placeholder = "Enable Zone Transfer? (Y/n)";
    document.getElementById('ip3').placeholder = "Enable Verbose Mode? (Y/n)";
}
