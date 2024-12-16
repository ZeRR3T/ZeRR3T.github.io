emailjs.init("0i2CquX_SBb2cuOcJEzkr"); // Этот ID будет вашим виртуальным почтальоном
document.getElementById('contact-me__form').addEventListener('submit', function(event) {
    event.preventDefault(); // Не обновляйте страницу, пока сообщение не отправлено
    emailjs.sendForm('your_service_id', 'your_template_id', this)
        .then(function() {
        alert('Сообщение успешно отправлено!');
    }, function(error) {
        alert('Ошибка отправки: ' + error);
    });
});
