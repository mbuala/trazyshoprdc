$(document).ready(function()
{
    $("#register-form").validate({
        rules:
        {
            nom: {
                required: true,
                minlength: 3
            },
            motdepasse: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            confirme_mot_passe: {
                required: true,
                equalTo: '#motdepasse'
            },
            email: {
                required: true,
                email: true
            },
        },
        messages:
        {
            nom: "Enter un nom valide !",
            motdepasse:{
                required: "mot de passe est obligatoire",
                minlength: "votre mot de passe doit contenir au moins  8 Characters"
            },
            email: "Entrer l'adresse Email valide !",
            confirme_mot_passe:{
                required: "Retaper votre mot de passe",
                equalTo: "le mot de passe ne corerspond pas"
            }
        },
        submitHandler: submitForm
    });
    /* validation */

    /* form submit */
    function submitForm()
    {
        var data = $("#register-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'fonction/inscrire.php',
            data : data,
            beforeSend: function()
            {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success :  function(data)
            {
                if(data==1){

                    $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Desolé, l\'adresse email existe deja !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
                else if(data=="registered")
                {
                    $("#btn-submit").html('Signing Up');
                    $("#success").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Felicititation, vous serez redirigez dans 5 seconde pour vous connectez !</div>');

                    setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("login.php"); }); ',5000);

                }
                else{

                    $("#error").fadeIn(1000, function(){

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
            }
        });
        return false;
    }
    /* form submit */

});