import Macy from 'macy';
const homePage = document.querySelector('.home-page');
const singleServicePage = document.querySelector('.single-service-page');
if (homePage || singleServicePage) {
  const testimonialGroup = Macy({
    container: '#testimonial-group',
    columns: 3,
    trueOrder: true,

    breakAt: {
      800: {
        columns: 1,
      },
    },
  });
}
