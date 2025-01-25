document.addEventListener('DOMContentLoaded', () => {
  const flashMessage = document.querySelectorAll('.flash-message');
  flashMessage.forEach((message) => {
    message.classList.add('show');
  })
  setTimeout(() => {
    flashMessage.forEach((message) => {
      message.classList.add('hide');
      setTimeout(() => {
        message.style.display = 'none'
      }, 500);
    })
  }, 5000);
});

document.addEventListener('DOMContentLoaded', () => {
  const deleteButtons = document.querySelectorAll('[data-bs-target="#delete"]');
  const confirmButton = document.getElementById('confirmDelete');
  let selectedId = null;

  deleteButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
      selectedId = button.dataset.id;
    });
  });

  confirmButton.addEventListener('click', () => {
    window.location.href = '/admin/delete/' + selectedId;
  })
});