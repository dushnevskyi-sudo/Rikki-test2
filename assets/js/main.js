// Minimal front-end behaviour: mobile nav toggle is handled inline in header.php.
// Demo forms (register/login) don't submit anywhere — just show a friendly note.
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('form[data-demo-form]').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var note = form.querySelector('.form-note');
      if (note) {
        note.textContent = 'This is a template form — no data is sent or stored.';
        note.style.color = 'var(--color-primary)';
      }
    });
  });
});
