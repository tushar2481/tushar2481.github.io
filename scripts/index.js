function nmap() {
    document.getElementById('tool_name').setAttribute('value', 'nmap');
    document.getElementById('ip1').placeholder = "Enter IP Address";
    document.getElementById('ip2').placeholder = "Number of threads (1-5)";
    document.getElementById('ip3').placeholder = "Verbose Mode (yes/no)";
    document.getElementById('ip1').style.display = 'block';
    document.getElementById('ip2').style.display = 'block';
    document.getElementById('ip3').style.display = 'block';
    document.getElementById('sub-btn').style.display = 'block'; 
}

function assetfinder() {
    document.getElementById('ip1').placeholder = "Enter Domain Name";
    document.getElementById('tool_name').setAttribute('value', 'assetfinder');
    document.getElementById('ip1').style.display = 'block';
    document.getElementById('ip2').style.display = 'none';
    document.getElementById('ip3').style.display = 'none';
    document.getElementById('sub-btn').style.display = 'block';
}

function dnsenum() {
    document.getElementById('tool_name').setAttribute('value', 'dnsenum');
    document.getElementById('ip1').placeholder = "Enter Domain Name";
    document.getElementById('ip2').placeholder = "Enable Zone Transfer? (Y/n)";
    document.getElementById('ip3').placeholder = "Enable Verbose Mode? (Y/n)";
    document.getElementById('ip1').style.display = 'block';
    document.getElementById('ip2').style.display = 'block';
    document.getElementById('ip3').style.display = 'block';
    document.getElementById('sub-btn').style.display = 'block';
}
