import Macy from 'macy';

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
