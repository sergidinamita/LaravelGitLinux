$(document).ready(function() 
{
    // Add an input event listener to the "Nom del propietari" input
    $('#nomPropietari').on('input', function() {
        validarNom();
    });

    $("#email").on("input", function() {
        validarEmail();
    });

    $("#password").on("input", function() {
        validarContrasenya();
    });

    $("#password2").on("input", function() {
        validarContrasenya2();
    });

    const form = $('#cocacolaEspuma');
    const enviarBtn = $('#loginBtn');

    form.on('input', function () {
        validarFormulariLogin();
    });

    // form.on('submit', function (e) {
    //     e.preventDefault();
    //     if (validarFormulariLogin()) 
    //     {
    //         mostrarMissatge();
    //     }
    // });

    function validarFormulariLogin() 
    {
        // Aquí realitzaràs les teves altres validacions i actualitzaràs els missatges d'error

        // Example: Check if all required fields are filled
        var formIsValid = false;

        formIsValid = validarEmail() && validarContrasenya();


        // Enable or disable the submit button based on form validity
        $("#loginBtn").prop("disabled", !formIsValid);

        return formIsValid;
    }

    function validarFormulariRegister()
    {
        // Example: Check if all required fields are filled
        var formIsValid = false;

        formIsValid = validarNom() && validarEmail() && validarContrasenya() && validarContrasenya2();
        // Enable or disable the submit button based on form validity
        $("#loginBtn").prop("disabled", !formIsValid);

        return formIsValid;
    } 

    function mostrarMissatge() 
    {
        alert("Has iniciat sessió correctament");
    }

    function validarNom()
    {
        var correcte = false;

        // Get the value of the input
        var nomPropietariValue = $("#nom").val();

        // Check if the value is blank
        if (nomPropietariValue.trim() === '') 
        {
            // Display an error message
            $('#nomError').text('El nom del usuari no pot estar amb blanc');
        } else 
        {
            // Clear the error message
            $('#nomError').text('');
            correcte = true;
        }

        return correcte;
    }

    function validarEmail()
    {
        var correcte = false;

        var emailInput = $("#email").val();
        var emailError = $("#emailError");

        // Regular expression for basic email validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (emailRegex.test(emailInput)) 
        {
          // Valid email format
          emailError.text("");
          correcte = true;
        } 
        else 
        {
          // Invalid email format
          emailError.text("El email no està en el format correcte");
        }

        return correcte;
    }

    function validarContrasenya()
    {   
        var correcte = false;

        var passInput = $("#password").val();
        var passError = $("#passwordError");

        // Regular expression for basic email validation
        var passRegex = /^.{8,}$/;

        if (passRegex.test(passInput)) 
        {
          // Valid email format
          passError.text("");
          correcte = true;
        } 
        else 
        {
          // Invalid email format
          passError.text("La contrasenya no compleix els requisits");
        }

        return correcte;
    }

    function validarContrasenya2()
    {   
        var correcte = false;

        var passInput = $("#password2").val();
        var passError = $("#password2Error");

        if (passInput == $("#password").val()) 
        {
          // Valid email format
          passError.text("");
          correcte = true;
        } 
        else 
        {
          // Invalid email format
          passError.text("La contrasenya no es igual");
        }

        return correcte;
    }
});