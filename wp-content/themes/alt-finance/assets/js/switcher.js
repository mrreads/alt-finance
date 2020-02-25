var buttons = document.querySelectorAll('.page-service-switcher > .switcher-act > .s-a');
var contents = document.querySelectorAll('.page-service-switcher > .switcher-content > .s-c');

for (var i = 0; i < buttons.length; i++) 
{
    buttons[i].addEventListener('click', function () 
    {
        for (var j = 0; j < buttons.length; j++) 
        {
            if (i == j) 
            {
                buttons[j].classList.add('active');
                contents[j].style.display = 'block';
            } 
            else 
            {
                buttons[j].classList.remove('active');
                contents[j].style.display = 'none';
            }
        }
    });
}