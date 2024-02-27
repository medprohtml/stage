import './bootstrap';
var menu=document.getElementById('menu')
console.log(menu)
var btn=document.getElementById('btn')
var nav=document.getElementById('nav')
console.log(btn)
console.log(nav)
btn.addEventListener('click',()=>{
    menu.classList.toggle('hidden')
    nav.classList.toggle('pb-60')
    nav.classList.toggle('pt-8')

    

})
setTimeout(function() {
  
    document.getElementById('message').classList.add('-top-24');
    document.getElementById('message').classList.remove('top-16');


}, 3000); // 3000 milliseconds = 3 seconds
