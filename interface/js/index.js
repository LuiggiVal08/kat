import { formatInput, useState, validInput, notification, validData, fetchAPI, redirect } from "./modules/global.js";

const [ value, setValue ] = useState(0);
const [ active, setActive ] = useState(false);

const box_before__login = document.getElementById("box_before__login");
const box_before__register = document.getElementById("box_before__register");

const contentForm = document.querySelector(".contentFormulariosLoginRegister");

const formLogin = document.getElementById("form-security__login");
const formRegister = document.getElementById("form-security__register");

const btn__formLogin = box_before__login.querySelector("button");
const btn__formRegister = box_before__register.querySelector("button");

//#region Change-form

const toogleFunctionLoginRegister = () => {
    box_before__login.classList.toggle("active");
    box_before__register.classList.toggle("active");
    contentForm.classList.toggle("active");
    // setValue(value() + 10)
    // console.log(value());
    // setActive(!active())
    // console.log(active());
};

btn__formLogin.addEventListener("click", () => toogleFunctionLoginRegister());

btn__formRegister.addEventListener("click", () => toogleFunctionLoginRegister());

//#region Valid-inpus-login

const loginUser = formLogin.querySelector('input[name="user"]');
loginUser.addEventListener("input", (e) => {
    const input = e.target;
    input.value = formatInput.userEmail(input.value);
    validInput(input, "userEmail");
});

const loginPass = formLogin.querySelector(`input[name="pass"]`);

loginPass.addEventListener("input", (e) => {
    const input = e.target;
    input.value = formatInput.password(input.value);
    validInput(input, "password");
});

//#region Valid-input-register

formRegister.querySelector('input[name="name"]').addEventListener("input", (e) => {
    const input = e.target;
    input.value = formatInput.name(input.value);
    validInput(input, "name");
});
formRegister.querySelector('input[name="lastname"]').addEventListener("input", (e) => {
    const input = e.target;
    input.value = formatInput.name(input.value);
    validInput(input, "name");
});
formRegister.querySelector('input[name="email"]').addEventListener("input", (e) => {
    const input = e.target;
    input.value = formatInput.email(input.value);
    console.log(validInput(input, "email"));
});
formRegister.querySelector('input[name="user"]').addEventListener("input", (e) => {
    const input = e.target;
    input.value = formatInput.username(input.value);
    validInput(input, "username");
});
formRegister.querySelector('input[name="dni"]').addEventListener("input", (e) => {
    const input = e.target;
    input.value = formatInput.dni(input.value);
    validInput(input, "dni");
});

formRegister.querySelector('input[name="dni"]').addEventListener("blur", (e) => {
    const input = e.target;
    input.value = formatInput.dni(input.value);
});

const registerPass = formRegister.querySelector('input[name="pass"]');
const registerConfirmPass = formRegister.querySelector('input[name="confirmPass"]');

registerPass.addEventListener("input", (e) => {
    const input = e.target;
    input.value = formatInput.password(input.value);
    validInput(input, "password");
});

registerConfirmPass.addEventListener("input", (e) => {
    const input = e.target;
    console.log(registerPass.value);
    input.value = formatInput.password(input.value);
    if (validInput(input, "password") && input.value !== registerPass.value) {
        input.classList.remove("valid");
        input.classList.add("no-valid");
    } else {
        input.classList.add("valid");
        input.classList.remove("no-valid");
    }
});

//#region Handle-Submits

formLogin.addEventListener("submit", function (event) {
    event.preventDefault();
    const formData = new FormData(formLogin);

    // Crear un objeto para almacenar los datos del FormData
    const postData = {};

    // Recorrer el objeto FormData y asignar los datos al objeto postData
    for (let [ key, value ] of formData.entries()) {
        postData[ key ] = value;
    }

    if (
        loginPass.value == " " || loginUser.value == " " ||
        !validInput(loginPass, "password") || !validInput(loginUser, "userEmail")
    ) {
        notification("Por favor completa los campos correctamente", "error");
    } else {
        fetchAPI('http://localhost/kat/api/login', {
            method: 'POST',
            // credentials: 'include',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(postData)
        })
            .then(data => {
                // console.log('Respuesta del servidor:', data);
                if (data.status == 'error') {
                    notification(data.message, 'error');
                } else {
                    redirect('');
                    console.log(data.data);
                }
            })
            .catch(error => {
                console.error('Error en la solicitud:', error);
            });
    }
});

formRegister.addEventListener("submit", function (event) {
    // Previene el comportamiento por defecto del formulario, que es recargar la página
    event.preventDefault();
    const validFormData = (formData) => {
        const name = formData.get('name');
        const lastname = formData.get('lastname');
        const user = formData.get('user');
        const email = formData.get('email');
        const dni = formData.get('dni');
        const pass = formData.get('pass');
        const confirmPass = formData.get('confirmPass');

        if ((validData(name, 'name') && validData(lastname, 'name') && validData(user, 'username') && validData(email, 'email') && validData(dni, 'dni') && validData(pass, 'password') && pass == confirmPass) &&
            (name != '' && lastname != '' && user != '' && email != '' && dni != '' && pass != '' && confirmPass != '' && pass == confirmPass)) {
            return true;

        } else {
            notification("Por favor completa los campos correctamente", "error");
            return false;
        }
    };

    const formData = new FormData(event.target);
    if (validFormData(formData)) {

        const postData = {};

        // Recorrer el objeto FormData y asignar los datos al objeto postData
        for (let [ key, value ] of formData.entries()) {
            if (key == 'dni') {
                postData[ key ] = value.replace(/\s/g, '');;
            } else {
                postData[ key ] = value;
            }

        }

        fetchAPI('http://localhost/kat/api/register', {
            method: 'POST',
            credentials: 'include',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(postData)
        }).then(data => {
            if (data.status == 'error') {
                notification(data.message, 'error');
            } else {
                redirect('');
                // console.log(data.data);
            }

        })
            .catch(error => {
                console.error('Error en la solicitud:', error);
            });
    }


});
