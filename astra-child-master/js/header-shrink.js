document.addEventListener('scroll', function() {
  var header = document.getElementById('masthead');
  if (window.scrollY > 80) {
    header.classList.add('shrink');
  } else {
    header.classList.remove('shrink');
  }
});
