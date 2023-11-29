const selectHandler = document.querySelector('.category-mobile select');
const optionSelect = document.querySelectorAll(
  '.category-mobile select option'
);

if (selectHandler && optionSelect) {
  selectHandler.addEventListener('change', (e) => {
    optionSelect.forEach((el) => {
      if (el.value === e.target.value) {
        window.location = el.dataset.uri;
      }
    });
  });
}
