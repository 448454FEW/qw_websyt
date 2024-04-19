
document.addEventListener("DOMContentLoaded", function() {
    // Get the icon and check local storage for the theme preference
    var icon = document.getElementById("toggle-icon");
    var isDarkMode = localStorage.getItem("darkMode") === "true";

    // Set the initial theme based on local storage
    if (isDarkMode) {
        document.body.classList.add("dark-theme");
        icon.src = "imgs/dark theme icon/sun.png";
        document.documentElement.style.setProperty('--placeholder-color', '#cecac4');
    } else {
        document.body.classList.remove("dark-theme");
        icon.src = "imgs/dark theme icon/moon.png";
        document.documentElement.style.setProperty('--placeholder-color', '#262a2b');
    }

    // Toggle the theme on click and update local storage
    icon.onclick = function() {
        document.body.classList.toggle("dark-theme");
        isDarkMode = document.body.classList.contains("dark-theme");

        if (isDarkMode) {
            icon.src = "imgs/dark theme icon/sun.png";
            document.documentElement.style.setProperty('--placeholder-color', '#cecac4');
        } else {
            icon.src = "imgs/dark theme icon/moon.png";
            document.documentElement.style.setProperty('--placeholder-color', '#262a2b');
        }

        // Save the theme preference to local storage
        localStorage.setItem("darkMode", isDarkMode.toString());
    }
});
