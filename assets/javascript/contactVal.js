jQuery(document).ready(function($) {
    var nom = $('#nom');
    nom.change(function() {
        if(nom.val() != '') {
            nom.css('border', '2px solid #93C820');
        }
        else {
            nom.css('border', '2px solid red');
        }
    });
    var phone = $('#phone');
    phone.change(function() {
        if(phone.val() != '' && $.isNumeric(phone.val())) {
            phone.css('border', '2px solid #93C820');
        }
        else {
            phone.css('border', '2px solid red')
        };
    });
    var object = $('#object');
    object.change(function() {
        if(object.val() != '') {
            object.css('border', '2px solid #93C820');
        }
        else {
            object.css('border', '2px solid red');
        }
    });
    var msgContact = $('#msgContact');
    msgContact.change(function() {
        if(msgContact.val() != '') {
            msgContact.css('border', '2px solid #93C820');
        }
        else {
            msgContact.css('border', '2px solid red');
        }
    });
    form.submit(function(event) {
        var $this = this;
        event.preventDefault();
        if(nom.val() != '' && phone.val() != '' && $.isNumeric(phone.val()) && object.val() != '') {
            $this.submit();
        }
    });
})