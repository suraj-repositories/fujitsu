document.addEventListener('DOMContentLoaded', () => {
    enableUniqueField('#createUsername');
    enableUniqueField('#uniqueEmail');
});


function enableUniqueField(inputSelector){
    const input = document.querySelector(inputSelector);
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    if (!input) return;
    const parent = input.parentElement;

    let debounceTimer;

    input.addEventListener('keyup', () => {
        clearTimeout(debounceTimer);

        debounceTimer = setTimeout(() => {
            const payload = {};
            payload[input.name] = input.value;

            const queryString = new URLSearchParams(payload).toString();

            fetch(`/register/exists?${queryString}`, {
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                }
            })
            .then(response => response.json())
            .then(data => {
                if(data.exists === true){
                    input.classList.add('invalid');
                    const error = parent.querySelector('.validation-error');
                    if(!error){
                        const err = document.createElement('small');
                        err.classList.add('validation-error');
                        err.textContent = `This ${input.name} already exists!`;
                        parent.appendChild(err);
                    }
                }else{
                    input.classList.remove('invalid');
                    const error = parent.querySelector('.validation-error');
                    if(error){
                        error.remove();
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

        }, 300);
    });
}


