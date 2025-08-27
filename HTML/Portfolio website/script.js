document.addEventListener('scroll', function() {
  const portfolioText = document.querySelector('.portfolio-text1 , Opis');
  const scrollPosition = window.scrollY || window.pageYOffset;

  if (scrollPosition > 100) {
    portfolioText.style.opacity = '1';
  } else {
    portfolioText.style.opacity = '0';
  }
});
