function mobile() {
    if (screen.width < 800) {
        location.href = "http://m.trus7s3c.tech/";
    }
}
let x = screen.width;
function mid_nav(x) {
    document.getElementById('products').style.marginRight = (x * 2.5 / 100) + "px";
}
mid_nav(x);
function openSignup() {
    document.getElementById('lgin').style.display = "block";
    document.getElementById('lgin').style.zIndex = 5;
}
function closeSignup() {
    document.getElementById('lgin').style.display = "none";
}