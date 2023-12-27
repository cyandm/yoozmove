import Macy from 'macy';
const homePage = document.querySelector('.home-page');
const singleServicePage = document.querySelector('.single-service-page');
const testimonialGroupCon = document.querySelector('#testimonial-group');

if ((homePage || singleServicePage) && testimonialGroupCon) {
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
