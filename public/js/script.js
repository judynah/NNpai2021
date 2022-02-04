const form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');
const confirmedPasswordInput = form.querySelector('input[name="confirmed_password"]');

// const confirmedPasswordInputSett = form.querySelector('input[name="setting-confirm-password"]');

function isEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

function arePasswordsSame(password, confirmedPassword) {
    return password === confirmedPassword;
}

function markValidation(element, condition) {
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid');
}

function validateEmail() {
    setTimeout(function () {
            markValidation(emailInput, isEmail(emailInput.value));
        },
        1000
    );
}

function validatePassword() {
    setTimeout(function () {
            const condition = arePasswordsSame(
                confirmedPasswordInput.previousElementSibling.value,
                confirmedPasswordInput.value
            );
            markValidation(confirmedPasswordInput, condition);
        },
        1000
    );
}

// function validatePasswordSett() {
//     setTimeout(function () {
//             const condition = arePasswordsSame(
//                 confirmedPasswordInputSett.previousElementSibling.value,
//                 confirmedPasswordInputSett.value
//             );
//             markValidation(confirmedPasswordInputSett, condition);
//         },
//         1000
//     );
// }

emailInput.addEventListener('keyup', validateEmail);
confirmedPasswordInput.addEventListener('keyup', validatePassword);

// confirmedPasswordInputSett.addEventListener('keyup', validatePasswordSett);

