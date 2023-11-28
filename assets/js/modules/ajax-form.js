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
    if (!formDataService.agreement) formDataService.agreement = 'false';

    $.ajax({
      url: cyn_head_script.url,
      type: 'post',
      data: {
        action: 'send_service_form',
        _nonce: cyn_head_script.nonce,
        data: formDataService,
      },
      success: (res) => {
        console.warn(res);
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
  const resumeForm = $('#resume-form');
  const resumeInput = document.querySelectorAll('#resume-form .data');

  const resumeFormSubmit = $('#resume-form #resume-form-submit');

  $(resumeForm).on('submit', (e) => {
    e.preventDefault();

    const formDataArrayResume = $(resumeForm).serializeArray();
    const formDataResume = objectifyFormArray(formDataArrayResume);

    if (!formDataResume.agreement) formDataResume.agreement = 'false';

    $.ajax({
      url: cyn_head_script.url,
      type: 'post',
      data: {
        action: 'send_resume_form',
        _nonce: cyn_head_script.nonce,
        data: formDataResume,
      },
      success: (res) => {
        console.warn(res);
        resumeInput.forEach((el) => {
          el.value = '';
        });
        $(resumeFormSubmit).text('Sent!');
        setTimeout(() => {
          $(resumeFormSubmit).text('Send Message');
        }, 1000);
      },
      error: (err) => {
        console.error(err);
        $(resumeFormSubmit).removeClass('pending');
        $(resumeFormSubmit).addClass('error');
      },
    });
  });
});
