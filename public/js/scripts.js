function validate(form) {
    var text_fields = form.getElementsByTagName('input');
    var textarea = document.getElementById('form_about');
    var validated = true;

    for (var i = 0; i < text_fields.length; i++) {
        if (text_fields[i].type != 'submit') {
            validated = validated && (text_fields[i].value !== '');
        }
    }

    validated = validated && (textarea.value !== '');

    if (!validated) {
        alert('Fill the fields');
    }

    return validated;

}