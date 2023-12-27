function objectifyFormArray(formArray) {
  var returnArray = {};
  for (var i = 0; i < formArray.length; i++) {
    returnArray[formArray[i]['name']] = formArray[i]['value'];
  }
  return returnArray;
}

jQuery(document).ready(($) => {
  const contactUsForm = $('#contact-us-form');
  const contactUsInput = document.querySelectorAll(
    '#contact-us-form div .data'
  );

  const contactUsFormSubmit = $('#contact-us-form #contact-us-form-submit');

  $(contactUsForm).on('submit', (e) => {
    e.preventDefault();

    const formDataArray = $(contactUsForm).serializeArray();
    const formData = objectifyFormArray(formDataArray);
    if (!formData.agreement) formData.agreement = 'false';

    $.ajax({
      url: cyn_head_script.url,
      type: 'post',
      data: {
        action: 'send_contact_us_form',
        _nonce: cyn_head_script.nonce,
        data: formData,
      },
      success: (res) => {
        console.warn(res);
        contactUsInput.forEach((el) => {
          el.value = '';
        });
        $(contactUsFormSubmit).text('Sent!');
        setTimeout(() => {
          $(contactUsFormSubmit).text('Send Message');
        }, 1000);
      },
      error: (err) => {
        console.error(err);
        $(contactUsFormSubmit).removeClass('pending');
        $(contactUsFormSubmit).addClass('error');
      },
    });
  });
});

jQuery(document).ready(($) => {
  const serviceForm = $('#service-form');
  const serviceInput = document.querySelectorAll('#service-form .data');

  const serviceFormSubmit = $('#service-form #service-form-submit');

  $(serviceForm).on('submit', (e) => {
    e.preventDefault();

    const formDataArrayService = $(serviceForm).serializeArray();
    const formDataService = objectifyFormArray(formDataArrayService);

    $.ajax({
      url: cyn_head_script.url,
      type: 'post',
      data: {
        action: 'send_service_form',
        _nonce: cyn_head_script.nonce,
        data: formDataService,
      },
      success: (res) => {
        serviceInput.forEach((el) => {
          el.value = '';
        });
        $(serviceFormSubmit).text('Sent!');
        setTimeout(() => {
          $(serviceFormSubmit).text('Send Message');
        }, 1000);
      },
      error: (err) => {
        console.error(err);
        $(serviceFormSubmit).removeClass('pending');
        $(serviceFormSubmit).addClass('error');
      },
    });
  });
});

jQuery(document).ready(($) => {
  $('#resume-form').on('submit', (e) => {
    e.preventDefault();
    const form = e.currentTarget;
    const submitter = e.submitter;

    const formData = new FormData(form, submitter);
    formData.append('action', 'send_resume_form');
    formData.append('_nonce', cyn_head_script.nonce);

    $.ajax({
      type: 'POST',
      url: cyn_head_script.url,
      cache: false,
      processData: false,
      contentType: false,
      data: formData,

      success: (res) => {
        console.warn(res);
        form.reset();
        $(submitter).text('Sent!');
        setTimeout(() => {
          $(submitter).text('Send Message');
        }, 1000);
      },
      error: (err) => {
        console.error(err);
        $(submitter).removeClass('pending');
        $(submitter).addClass('error');
      },
    });
  });
});
