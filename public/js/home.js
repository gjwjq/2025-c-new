const $ = e => document.querySelector(e)
const $$ = e => [...document.querySelectorAll(e)]
const left = $('.leftB');
const right = $('.rightB');
const box = $('.slideWrap');
const notices = $$('.notiWrap li');
const count = $('.notiNum')
let num = 1;

left.onclick = () => {
  if(num<2) return 
  num--
  count.textContent = num
  box.style.transform = `translateY(${(num - 1) * -300}px)`
}

right.onclick = () => {
  if(num>4) return 
  num++
  count.textContent = num
  box.style.transform = `translateY(${(num - 1) * -300}px)`
}