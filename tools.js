function reset_tool() {
    document.getElementById('ip1').style.display = 'none';
    document.getElementById('ip2').style.display = 'none';
    document.getElementById('ip3').style.display = 'none';
    document.getElementById('ip4').style.display = 'none';
}
function tool_select(value) {
    if (value == 1) {
        // visibility
        document.getElementById('ip1').style.display = 'inline-flex';
        document.getElementById('ip2').style.display = 'inline-flex';
        document.getElementById('ip3').style.display = 'inline-flex';
        document.getElementById('ip4').style.display = 'inline-flex';
        // change placeholder
        document.getElementById('ip1').placeholder = 'Enter IPv4';
        document.getElementById('ip2').placeholder = 'Port to Scan';
        document.getElementById('ip3').placeholder = 'Stealth Scan? (Y/n)';
        document.getElementById('ip4').placeholder = 'Output File Name';
    }
    if (value == 2) {
        // visibility
        document.getElementById('ip1').style.display = 'inline-flex';
        document.getElementById('ip2').style.display = 'none';
        document.getElementById('ip3').style.display = 'none';
        document.getElementById('ip4').style.display = 'inline-flex';
        // change placeholder
        document.getElementById('ip1').placeholder = 'Enter Domain Name';
        document.getElementById('ip2').placeholder = 'b';
        document.getElementById('ip3').placeholder = 'c';
        document.getElementById('ip4').placeholder = 'Output File Name';
    }
    if (value == 3) {
        // visibility
        document.getElementById('ip1').style.display = 'inline-flex';
        document.getElementById('ip2').style.display = 'inline-flex';
        document.getElementById('ip3').style.display = 'inline-flex';
        document.getElementById('ip4').style.display = 'inline-flex';
        // change placeholder
        document.getElementById('ip1').placeholder = 'Enter IPv4';
        document.getElementById('ip2').placeholder = 'Port to Scan';
        document.getElementById('ip3').placeholder = 'Aggression Level';
        document.getElementById('ip4').placeholder = 'Output File Name';
    }
}

function open_dropdown() {
    document.getElementById('dropdown-content').style.display = "block";
}

function close_dropdown() {
    document.getElementById('dropdown-content').style.display = "none";
}

function abc() {
    alert(1);
}