
const items = document.querySelectorAll('.c-portfolio-item');

for (const item of items) {
  const imagesWrapper = item.querySelector('.c-portfolio-images');

  const swiper = new Swiper(imagesWrapper, {
    touchMove: true,
    loop: true,
    spaceBetween: 15,
  });

  const prev = item.querySelector('[data-task=prev]');
  const next = item.querySelector('[data-task=next]');
  const pageCurrent = item.querySelector('.c-page__current');

  prev.addEventListener('click', () => {
    swiper.slidePrev();
  });

  next.addEventListener('click', () => {
    swiper.slideNext();
  });

  swiper.on('slideChange', () => {
    let i = (swiper.realIndex + 1).toString();

    if (i.length === 1) {
      i = '0' + i;
    }

    pageCurrent.textContent = i;
  });
}


