(() => {
  // assets/js/modules/header.js
  var menuMobileHandler = document.querySelector(".btn-menu-mobile");
  var mobileMenu = document.querySelector(".mobile-menu-bg");
  var btnClose = document.querySelector(".btn-close-menu");
  var header = document.querySelector("header");
  if (header) {
    menuMobileHandler.addEventListener("click", () => {
      mobileMenu.classList.toggle("show");
    });
    btnClose.addEventListener("click", () => {
      mobileMenu.classList.toggle("show");
    });
  }

  // assets/js/modules/ajax-form.js
  function objectifyFormArray(formArray) {
    var returnArray = {};
    for (var i = 0; i < formArray.length; i++) {
      returnArray[formArray[i]["name"]] = formArray[i]["value"];
    }
    return returnArray;
  }
  jQuery(document).ready(($) => {
    const contactUsForm = $("#contact-us-form");
    const contactUsInput = document.querySelectorAll(
      "#contact-us-form div .data"
    );
    const contactUsFormSubmit = $("#contact-us-form #contact-us-form-submit");
    $(contactUsForm).on("submit", (e) => {
      e.preventDefault();
      const formDataArray = $(contactUsForm).serializeArray();
      const formData = objectifyFormArray(formDataArray);
      if (!formData.agreement)
        formData.agreement = "false";
      $.ajax({
        url: cyn_head_script.url,
        type: "post",
        data: {
          action: "send_contact_us_form",
          _nonce: cyn_head_script.nonce,
          data: formData
        },
        success: (res) => {
          console.warn(res);
          contactUsInput.forEach((el) => {
            el.value = "";
          });
          $(contactUsFormSubmit).text("Sent!");
          setTimeout(() => {
            $(contactUsFormSubmit).text("Send Message");
          }, 1e3);
        },
        error: (err) => {
          console.error(err);
          $(contactUsFormSubmit).removeClass("pending");
          $(contactUsFormSubmit).addClass("error");
        }
      });
    });
  });

  // assets/js/modules/faq.js
  var btnCategoryGroup = document.querySelectorAll(".btn-category");
  var containerQuestion = document.querySelectorAll(".container-question");
  var btnQuestionGroup = document.querySelectorAll(".btn-question");
  var questionContent = document.querySelectorAll(".question-content");
  btnCategoryGroup.forEach((btnCat) => {
    btnCat.addEventListener("click", (e) => {
      const mustActivateEl = e.target.parentElement.parentElement;
      mustActivateEl.toggleAttribute("active");
    });
  });
  btnQuestionGroup.forEach((btnQuestion) => {
    btnQuestion.addEventListener("click", (e) => {
      const mustActivateContainer = e.target.parentElement;
      mustActivateContainer.toggleAttribute("active");
    });
  });
})();
