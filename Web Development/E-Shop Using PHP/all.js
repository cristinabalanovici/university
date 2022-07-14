function displayCategoryFilter() {
    var x = document.getElementById("categoryFilter");
    var y = document.getElementById("categoryLabel");
    
    if (x.style.display == "block"){
        y.style.color = "var(--element)";
        x.style.display = "none";
    }
    else {
        y.style.color = "var(--text)";
        x.style.display = "block";
    }

    hideOthersBesides("category");
}

function hideOthersBesides(whereElement) {
    var varCatFil = document.getElementById("categoryFilter");
    var varRoomFil = document.getElementById("roomFilter");
    var varColFil = document.getElementById("colorFilter");
    var varMatFil = document.getElementById("materialFilter");
    var lblCatFil = document.getElementById("categoryLabel");
    var lblRoomFil = document.getElementById("roomLabel");
    var lblColFil = document.getElementById("colorLabel");
    var lblMatFil = document.getElementById("materialLabel");

    if (whereElement == "category"){
        varRoomFil.style.display = "none";
        varColFil.style.display = "none";
        varMatFil.style.display = "none";
        lblRoomFil.style.color = "var(--element)";
        lblColFil.style.color = "var(--element)";
        lblMatFil.style.color = "var(--element)";
    }
    else {
        if(whereElement == "room") {
            lblCatFil.style.color = "var(--element)";
            lblColFil.style.color = "var(--element)";
            lblMatFil.style.color = "var(--element)";
            varCatFil.style.display = "none";
            varColFil.style.display = "none";
            varMatFil.style.display = "none";
        }
        else {
            if(whereElement=="color"){
                lblRoomFil.style.color = "var(--element)";
                lblCatFil.style.color = "var(--element)";
                lblMatFil.style.color = "var(--element)";
                varRoomFil.style.display = "none";
                varCatFil.style.display = "none";
                varMatFil.style.display = "none";
            }
            else {
                if(whereElement=="material"){
                    lblRoomFil.style.color = "var(--element)";
                    lblColFil.style.color = "var(--element)";
                    lblCatFil.style.color = "var(--element)";
                    varRoomFil.style.display = "none";
                    varColFil.style.display = "none";
                    varCatFil.style.display = "none";
                }
            }
        }
    }
}

function displayRoomFilter() {
    var x = document.getElementById("roomFilter");
    var y = document.getElementById("roomLabel");
    if (x.style.display == "block"){
        y.style.color = "var(--element)";
        x.style.display = "none";
    }
    else {
        y.style.color = "var(--text)";
        x.style.display = "block";
    }

    hideOthersBesides("room");
}

function displayColorFilter() {
    var x = document.getElementById("colorFilter");
    var y = document.getElementById("colorLabel");
    if (x.style.display == "block"){
        y.style.color = "var(--element)";
        x.style.display = "none";
    }
    else {
        y.style.color = "var(--text)";
        x.style.display = "block";
    }

    hideOthersBesides("color");
}

function displayMaterialFilter() {
    var x = document.getElementById("materialFilter");
    var y = document.getElementById("materialLabel");
    if (x.style.display == "block"){
        y.style.color = "var(--element)";
        x.style.display = "none";
    }
    else {
        y.style.color = "var(--text)";
        x.style.display = "block";
    }

    hideOthersBesides("material");
}
