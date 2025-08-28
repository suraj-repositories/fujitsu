document.addEventListener('DOMContentLoaded', function () {
    initLoginThemeSelection(".login-themes-container", '.theme-box');
    initForgotPasswordThemeSelection(".forgot-password-themes-container", '.theme-box');


});

function initLoginThemeSelection(parentSelector, childSelector) {
    const checkboxes = document.querySelectorAll(`${parentSelector} input[type='checkbox']`);


    const elements = document.querySelectorAll(`${parentSelector} ${childSelector}`);
    if (!elements) {
        return;
    }

    elements.forEach(element => {
        element.addEventListener('click', () => {
            if (checkboxes) {
                checkboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });
            }
            elements.forEach(e => {
                e.classList.remove('checked-grayscale')
                    e.classList.remove('checked-border');
            });

            element.classList.add('checked-grayscale');
            element.classList.add('checked-border');

            const checkChild = element.querySelector("input[type='checkbox']");
            if (checkChild) {
                checkChild.checked = !checkChild.checked;
                const enalbleId = checkChild.getAttribute('data-enable-id');
                enableTheme('login', enalbleId);
            }
        });
    });
}
function initForgotPasswordThemeSelection(parentSelector, childSelector) {
    const checkboxes = document.querySelectorAll(`${parentSelector} input[type='checkbox']`);


    const elements = document.querySelectorAll(`${parentSelector} ${childSelector}`);
    if (!elements) {
        return;
    }

    elements.forEach(element => {
        element.addEventListener('click', () => {
            if (checkboxes) {
                checkboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });
            }
            elements.forEach(e => {
                e.classList.remove('checked-grayscale')
                    e.classList.remove('checked-border');
            });

            element.classList.add('checked-grayscale');
            element.classList.add('checked-border');

            const checkChild = element.querySelector("input[type='checkbox']");
            if (checkChild) {
                checkChild.checked = !checkChild.checked;
                const enalbleId = checkChild.getAttribute('data-enable-id');
                enableTheme('forgot-password', enalbleId);
            }
        });
    });
}

function enableTheme(type, enableId){
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch(route('superadmin.settings.auth.theme-settings.change.index'), {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'x-csrf-token': csrfToken
        },
        body: JSON.stringify({ type: type, enable_id: enableId })
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
