var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}

window.addEventListener('scroll', function () {
  let header = document.querySelector('nav');

  header.classList.toggle('stick-top', this.window.scrollY>200)
})

