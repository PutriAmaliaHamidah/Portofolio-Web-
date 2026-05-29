// Basic JS: smooth scrolling and optional interactivity
document.querySelectorAll('a[href^="#"]').forEach(link=>{
  link.addEventListener('click',function(e){
    const href = this.getAttribute('href');
    if(href.length>1){
      e.preventDefault();
      document.querySelector(href).scrollIntoView({behavior:'smooth',block:'start'});
    }
  });
});

// Simple image lazy-loading progressive enhancement
if('loading' in HTMLImageElement.prototype){
  document.querySelectorAll('img').forEach(img=>img.setAttribute('loading','lazy'));
}
