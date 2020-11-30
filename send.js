//const URL = 'send.php';

const send = document.getElementById('submit');



send.addEventListener('click', event => {
    const name = document.getElementById('callback_name').value;
    const phone = document.getElementById('callback_phone').value;
    const comment = document.getElementById('callback_comment').value;

    $.ajax({
        type: "POST",
        url: 'http://nn.otproffi-zhalyuzi.ru/nn/send_task/send.php',
        data: {
            name: name,
            phone: phone,
            comment: comment,
        },
        success: function() {
            alert("Отпраленно");
        },
    });
});