// Hero Banner
const swiper = new Swiper('#main-banner', {
  // configure Swiper to use modules
  // modules: [Navigation],
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// Feature Banners
const featureSwiper = new Swiper('.c-feature-items .swiper', {
  touchMove: true,
  spaceBetween: 30,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

featureSwiper.on('slideChange', updateNavs);

function updateNavs() {
  // Nav Buttons
  for (const btn of navButtons) {
    btn.classList.remove('active');
  }

  const currentButton = navButtons[featureSwiper.activeIndex];
  currentButton.classList.add('active');
}

/** @type {HTMLButtonElement[]} navButtons */
const navButtons = document.querySelectorAll('.c-feature-nav [data-to]');

for (const navButton of navButtons) {
  navButton.addEventListener('click', (e) => {
    featureSwiper.slideTo(Number(navButton.dataset.to));
  });
}

// Nav
const prevButtons = document.querySelectorAll('.c-feature-item-action [data-task=prev]');

for (const prevButton of prevButtons) {
  prevButton.addEventListener('click', () => {
    featureSwiper.slidePrev();
  });
}

const nextButtons = document.querySelectorAll('.c-feature-item-action [data-task=next]');

for (const nextButton of nextButtons) {
  nextButton.addEventListener('click', () => {
    featureSwiper.slideNext();
  });
}

updateNavs();

