document.addEventListener('DOMContentLoaded', function () {

    enableTagify();
    enableTelephoneInput();
    enableFieldLock();

});

function enableTagify() {
    const r = document.querySelectorAll("input[name=drag-sort]");

    r.forEach(input => {
        const a = new Tagify(input);
        new DragSort(a.DOM.scope, {
            selector: "." + a.settings.classNames.tag,
            callbacks: { dragEnd: () => a.updateValueByDOMTags() }
        });
    });
}

function enableTelephoneInput() {
    const countryCodeFields = document.querySelectorAll(".country-input");

    countryCodeFields.forEach(field => {
        const iti = window.intlTelInput(field, {
            utilsScript: "/assets/libs/intl-tel-input/build/js/utils.js",
            initialCountry: "auto",
            geoIpLookup: function (callback) {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => callback(data.country_code))
                    .catch(() => callback("us"));
            }
        });

        field.addEventListener("countrychange", function (event) {
            const selectedCountryData = iti.getSelectedCountryData();

            const dialCode = selectedCountryData.dialCode;
            const countryName = selectedCountryData.name;

            if (dialCode != undefined && countryName != undefined) {
                field.value = `${countryName} (+${dialCode})`;
            }
        });
    });
}

function enableFieldLock() {
    const lockButtons = document.querySelectorAll('#form-fields input[type="checkbox"]');

    lockButtons.forEach(button => {
        const accordionBtn = document.querySelector(button.getAttribute('data-field-target'));
        const lock = accordionBtn.querySelector('.lock-icon');
        const accordionItem = accordionBtn.closest('.accordion-item');
        let accordionContent;

        if (accordionItem) {
            accordionContent = accordionItem.querySelector('.hs-accordion-content');

        }

        button.addEventListener('change', function () {

            if (this.checked) {
                accordionBtn.disabled = false;
                lock.classList.add('hidden');
            } else {
                accordionBtn.disabled = true;
                lock.classList.remove('hidden');

                accordionItem.classList.remove('active');
                accordionContent.style.display = 'none';


            }
        });
    });

}
