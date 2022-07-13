document.getElementById('toggleBtn').onclick = function () {
    this.classList.toggle('active');
    var x = document.getElementById("navbar");
    x.classList.toggle('checked');
}

window.onscroll = function() {
  var scroll = document.body.scrollLeft || document.documentElement.scrollLeft;
  var total = document.documentElement.scrollWidth - document.documentElement.clientWidth;
  document.getElementById("progressBar").style.width = ((scroll/total)*100) + "%";
};

window.onwheel = function(e) {
	var speed = parseInt(document.documentElement.clientWidth/5);
  window.scrollBy(Math.sign(e.deltaY)*speed,0);
};

var sections = document.querySelectorAll('section');
var options = {
rootMargin: '0px',
threshold: 0.00001
}
var callback = (entries) => {
entries.forEach((entry) => {
var target = entry.target;
if (entry.intersectionRatio >= 0.00001) {
target.classList.add("is-inview");
} else {
target.classList.remove("is-inview");
}
})
}
var observer = new IntersectionObserver(callback, options)
sections.forEach((section, index) => {
observer.observe(section)
})

window.addEventListener("scroll", function() {
  let pageX = window.pageXOffset;
  let main = document.getElementById('slowDiv');
  main.style.backgroundPosition = `-${pageX * .25}px -100px`
})

let pageX =window.scrollX;
let scrolledSoFar= document.getElementById('salut').offsetWidth + document.getElementById('slowDiv').offsetWidth + document.getElementById('about').offsetWidth;
let htmlProject = document.getElementById('html-proiect');
let cssProject = document.getElementById('css-proiect');
let jsProject = document.getElementById('js-proiect');
let htmlProjectContainer = document.getElementById('html-proj').offsetWidth + scrolledSoFar;
let cssProjectContainer = document.getElementById('css-proj').offsetWidth + scrolledSoFar + document.getElementById('html-proj').offsetWidth;
let jsProjectContainer = document.getElementById('js-proj').offsetWidth + scrolledSoFar + document.getElementById('html-proj').offsetWidth + document.getElementById('css-proj').offsetWidth;

const addHtmlClassOnScroll = () => htmlProject.classList.add("active-text");
const addCssClassOnScroll = () => cssProject.classList.add("active-text");
const addJsClassOnScroll = () => jsProject.classList.add("active-text");

const removeHtmlClassOnScroll = () => htmlProject.classList.remove("active-text");
const removeCssClassOnScroll = () => cssProject.classList.remove("active-text");
const removeJsClassOnScroll = () => jsProject.classList.remove("active-text");


window.addEventListener('scroll', function() {
  pageX = window.scrollX;
  if(pageX >= htmlProjectContainer){
    addHtmlClassOnScroll();
    if(pageX >= cssProjectContainer){
      addCssClassOnScroll();
      if(pageX >= jsProjectContainer){
        addJsClassOnScroll();
      }
      else {
        removeJsClassOnScroll();
      }
    }
      else {
        removeCssClassOnScroll();
      }
    }
    else {
      removeHtmlClassOnScroll();
    }
  })