function nmap() {
    alert('[+] Your Selected Tool : Nmap');
    document.getElementById('ip1').style.display = 'block';
    document.getElementById('ip2').style.display = 'block';
    document.getElementById('ip3').style.display = 'block';
    document.getElementById('ip4').style.display = 'block';
    document.getElementById('ip1').placeholder = "Enter IP Address";
    document.getElementById('ip2').placeholder = "Enable Stealth Scan? (Y/n)";
    document.getElementById('ip3').placeholder = "EEnable Script Scan? (Y/n)";
    document.getElementById('ip4').placeholder = "Output File Name";
}

function assetfinder() {
    alert('[+] Your Selected Tool : Assetfinder');
    document.getElementById('ip1').style.display = 'block';
    document.getElementById('ip2').style.display = 'none';
    document.getElementById('ip3').style.display = 'none';
    document.getElementById('ip4').style.display = 'none';
    document.getElementById('ip1').placeholder = "Enter Domain Name";
}

function dnsenum() {
    alert('[+] Your Selected Tool : DNSenum');
    document.getElementById('ip1').style.display = 'block';
    document.getElementById('ip2').style.display = 'block';
    document.getElementById('ip3').style.display = 'block';
    document.getElementById('ip4').style.display = 'block';
    document.getElementById('ip1').placeholder = "Enter Domain Name";
    document.getElementById('ip2').placeholder = "Enable Zone Transfer? (Y/n)";
    document.getElementById('ip3').placeholder = "Enable Verbose Mode? (Y/n)";
    document.getElementById('ip4').placeholder = "Output File Name";
}