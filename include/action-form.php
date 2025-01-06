<script>
  document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    var respuesta = grecaptcha.getResponse();
    if (!respuesta) {
      document.getElementById('response-message').innerHTML = '<p class="text-danger">Por favor, completa el captcha.</p>';
      return;
    }
    const submitButton = document.getElementById('submit-button');
    submitButton.disabled = true;

    const formData = new FormData(this);
    const xhr = new XMLHttpRequest();

    xhr.open('POST', 'ajax/ajax-action-contact-form.php', true);
    xhr.onload = function() {
      if (xhr.status === 200) {
        document.getElementById('response-message').innerHTML = `<p class="text-success">${xhr.responseText}</p>`;
        document.forms['contact-form'].reset();
      } else {
        document.getElementById('response-message').innerHTML = `<p class="text-danger">Error: ${xhr.statusText}</p>`;
      }
      submitButton.disabled = false;
    };

    xhr.onerror = function() {
      document.getElementById('response-message').innerHTML = '<p class="text-danger">Ocurrió un error, por favor intenta de nuevo.</p>';
      submitButton.disabled = false;
    };

    xhr.send(formData);
  });
</script>