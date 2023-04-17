const carouselContainer = document.querySelector('.carousel-container');
const prevBtn = document.querySelector('.carousel-control-services.prev');
const nextBtn = document.querySelector('.carousel-control-services.next');

prevBtn.addEventListener('click', () => {
  carouselContainer.scrollBy({ left: -carouselContainer.offsetWidth, behavior: 'smooth' });
});

nextBtn.addEventListener('click', () => {
  carouselContainer.scrollBy({ left: carouselContainer.offsetWidth, behavior: 'smooth' });
});