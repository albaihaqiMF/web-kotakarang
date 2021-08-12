var item = document.getElementById("transition");

item !== null && setTimeout(() => {
    item.style.transitionDuration = "1s";
    item.style.opacity = "0";
}, 1000);
