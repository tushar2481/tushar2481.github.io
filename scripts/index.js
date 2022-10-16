function nmap() {
    alert('[+] Your Selected Tool : Nmap');
    document.getElementById('ip1').style.display = 'block';
    document.getElementById('ip2').style.display = 'block';
    document.getElementById('ip3').style.display = 'block';
    document.getElementById('tool_name').value = "nmap";
    document.getElementById('ip1').placeholder = "Enter IP Address";
    document.getElementById('ip2').placeholder = "Number of threads (1-5)";
    document.getElementById('ip3').placeholder = "Verbose Mode (yes/no)";
}

function assetfinder() {
    alert('[+] Your Selected Tool : Assetfinder');
    document.getElementById('ip1').style.display = 'block';
    document.getElementById('ip2').style.display = 'none';
    document.getElementById('ip3').style.display = 'none';
    document.getElementById('tool_name').value = "assetfinder";
    document.getElementById('ip1').placeholder = "Enter Domain Name";
}

function dnsenum() {
    alert('[+] Your Selected Tool : DNSenum');
    document.getElementById('ip1').style.display = 'block';
    document.getElementById('ip2').style.display = 'block';
    document.getElementById('ip3').style.display = 'block';
    document.getElementById('tool_name').value = "dnsenum";
    document.getElementById('ip1').placeholder = "Enter Domain Name";
    document.getElementById('ip2').placeholder = "Enable Zone Transfer? (Y/n)";
    document.getElementById('ip3').placeholder = "Enable Verbose Mode? (Y/n)";
}
