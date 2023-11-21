const btnCategoryGroup = document.querySelectorAll('.btn-category');
const containerQuestion = document.querySelectorAll('.container-question');

const btnQuestionGroup = document.querySelectorAll('.btn-question');
const questionContent = document.querySelectorAll('.question-content');

btnCategoryGroup.forEach((btnCat) => {
  btnCat.addEventListener('click', (e) => {
    const mustActivateEl = e.target.parentElement.parentElement;
    mustActivateEl.toggleAttribute('active');
  });
});

btnQuestionGroup.forEach((btnQuestion) => {
  btnQuestion.addEventListener('click', (e) => {
    const mustActivateContainer = e.target.parentElement;
    mustActivateContainer.toggleAttribute('active');
  });
});
