document.querySelector('img.hidden-nav-button').addEventListener('click', (event) => {
    if (document.querySelector('.menu').style.display == "none")
    {
        document.querySelector('.menu').style.display = "block";
    }
    else
    {
        document.querySelector('.menu').style.display = "none";
    }
})
