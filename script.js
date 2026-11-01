
window.addEventListener("load", function () {
    alert("Welcome to My Personal Portfolio Website!");
});

function updateDateTime() {
    const now = new Date();

    const dateElement = document.getElementById("datetime");

    if (dateElement) {
        dateElement.innerHTML = now.toLocaleString();
    }
}

updateDateTime();
setInterval(updateDateTime, 1000);

function toggleMode() {
    document.body.classList.toggle("dark-mode");

    const button = document.getElementById("modeBtn");

    if (document.body.classList.contains("dark-mode")) {
        button.innerHTML = "Light Mode";
    } else {
        button.innerHTML = "Dark Mode";
    }
}

function goToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}
