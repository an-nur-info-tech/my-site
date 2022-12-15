  AOS.init();

  
//Animation scroll 
const observer=new IntersectionObserver(entries=>{
  entries.forEach(entry=>{
          if(entry.isIntersecting){
                  entry.target.classList.add('scroll-anim')
          }else{
                  entry.target.classList.remove('scroll-anim')
          }
  })
});

const hiddenElements=document.querySelectorAll('#hidden')
hiddenElements.forEach(element=>{
  observer.observe(element);
})

