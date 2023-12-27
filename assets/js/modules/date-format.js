import moment from 'moment';

jQuery(document).ready(($) => {
  $('#date')
    .on('change', function () {
      const datePicked = moment(this.value);
      const dateFormatted = datePicked.format(
        this.getAttribute('data-date-format')
      );

      this.setAttribute(
        'data-date-value',
        dateFormatted === 'Invalid date' ? 'MM-DD-YYYY' : dateFormatted
      );
    })
    .trigger('change');
});
