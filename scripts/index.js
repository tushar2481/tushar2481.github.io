function nmap1() {
    document.getElementById('tool_name').setAttribute('value', 'nmap');
    document.getElementById('ip1').placeholder = "Enter IP Address";
    document.getElementById('ip2').placeholder = "Number of threads (1-5)";
    document.getElementById('ip3').placeholder = "Verbose Mode (yes/no)";
}

function assetf1() {
    document.getElementById('tool_name').setAttribute('value', 'assetfinder');
    document.getElementById('ip1').placeholder = "Enter Domain Name";
}

function dnse1() {
    document.getElementById('tool_name').setAttribute('value', 'nmap');
    document.getElementById('ip1').placeholder = "Enter Domain Name";
    document.getElementById('ip2').placeholder = "Zone Transfer? (yes/no)";
    document.getElementById('ip3').placeholder = "Verbose Mode (yes/no)";
}
