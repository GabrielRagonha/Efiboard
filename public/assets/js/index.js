function themeVerify() {
    const themeBtn = document.querySelector("#navbar-theme");
    const body = document.querySelector("body");
    let theme = localStorage.getItem("theme");

    if (!theme) {
        window.matchMedia("(prefers-color-scheme: dark)")
            ? localStorage.setItem("theme", "dark")
            : localStorage.setItem("theme", "light");

        theme = localStorage.getItem("theme");
    }

    theme == "dark"
        ? (themeBtn.checked = true && body.classList.toggle("dark"))
        : (themeBtn.checked = false) && body.classList.toggle("light");
}

function themeToggle() {
    const themeBtn = document.querySelector("#navbar-theme");
    const body = document.querySelector("body");

    themeBtn.addEventListener("click", function () {
        body.classList.toggle("dark");

        document.querySelector("body.dark")
            ? localStorage.setItem("theme", "dark")
            : localStorage.setItem("theme", "light");
    });
}

document.addEventListener("DOMContentLoaded", function () {
    themeVerify();
    themeToggle();
});
