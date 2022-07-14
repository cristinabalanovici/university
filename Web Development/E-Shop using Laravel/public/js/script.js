document.getElementById('toggleBtn').onclick = function () {
    this.classList.toggle('active');
    var x = document.getElementById("navbar");
    x.classList.toggle('checked');
}

function openNav() {
    document.getElementById("prod-nav").style.height="100vh";
}

function closeNav() {
    document.getElementById("prod-nav").style.height="0%";
}

function showArrow() {
    document.getElementById("arrow-right").style.opacity="1";
}

function hideArrow() {
    document.getElementById("arrow-right").style.opacity="0";
}

function openCart() {
    document.getElementById("cart-container").style.width="40vw";
}

function closeCart() {
    document.getElementById("cart-container").style.width="0";
}