let buttons = document.querySelectorAll('.page-service-switcher > .switcher-act > .s-a');
let contents = document.querySelectorAll('.page-service-switcher > .switcher-content > .s-c');

for (let i = 0; i < buttons.length; i++) 
{
    buttons[i].addEventListener('click', function () 
    {
        for (let j = 0; j < buttons.length; j++)
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