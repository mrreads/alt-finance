document.querySelector('img.hidden-nav-button').addEventListener('click', (event) => {
    if (document.querySelector('nav.menu').style.display == "none")
    {
        document.querySelector('nav.menu').style.display = "block";
    }
    else
    {
        document.querySelector('nav.menu').style.display = "none";

    }
})