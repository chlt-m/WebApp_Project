document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("openPop").addEventListener("click", function () {
        document.querySelector(".pop").style.display = "flex";
    });

    document.getElementById("can").addEventListener("click", function () {
        document.querySelector(".pop").style.display = "none";
    });
});