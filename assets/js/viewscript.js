const overview = document.querySelector('div.overview');
const liOverview = document.querySelector('.lioverview');
liOverview.addEventListener('mouseenter',function(){
  overview.style.display = "flex";
})


liOverview.addEventListener('mouseleave',function(){
  overview.style.display = "none";
})

const mesin = document.querySelector('div.mesin');
const limesin = document.querySelector('.limesin');


limesin.addEventListener('mouseenter',function(){
  mesin.style.display = "flex";
})


limesin.addEventListener('mouseleave',function(){
  mesin.style.display = "none";
})
