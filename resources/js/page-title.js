let pageServicesTitles = document.querySelectorAll('.c-main > .page-service-title');

if (pageServicesTitles)
{
    pageServicesTitles.forEach(element => 
    {
        element.querySelector('h2').addEventListener('click', function()
        {
            element.querySelector('h2').nextElementSibling.style.maxHeight = '900px';
            setTimeout(() => {
                element.querySelector('h2').nextElementSibling.style.opacity = '1';
                lement.querySelector('h2').nextElementSibling.style.maxHeight = '100%';
            }, 500);
        });
    });
}
