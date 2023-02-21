/* Smooth Scroll */
const links = document.querySelectorAll(".nav-links li a");

links.forEach((link) => {
link.addEventListener("click", (e) => {
e.preventDefault();
const href = link.getAttribute("href");
const target = document.querySelector(href);

target.scrollIntoView({
  behavior: "smooth",
  block: "start"
});
});
});

window.addEventListener('scroll', fadeIn)
function fadeIn()
{
  let animation=document.querySelectorAll('.fadeIn');
   for (let i=0; i<animation.length; i++)
    {
     let windowheight=window.innerHeight;
     let top=animation[i].getBoundingClientRect().top;
     if (top < windowheight)
     {
       animation[i].classList.add('visible');
     }
     
}
}
