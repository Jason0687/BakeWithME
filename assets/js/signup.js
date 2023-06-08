const form = document.querySelector('form');
const Full_Name = document.getElementById('input-field1');
const Email = document.getElementById('input-field2');
const Contact = document.getElementById('input-field3');
const Address = document.getElementById('input-field4');
const password = document.getElementById('input-field5');
const password2 = document.getElementById('input-field6');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputcontainer = element.parentElement;
    const errorDisplay = inputcontainer.querySelector('.error');

    errorDisplay.innerText = message;
    inputcontainer.classList.add('error');
    inputcontainer.classList.remove('success')
}

const setSuccess = element => {
    const inputcontainer = element.parentElement;
    const errorDisplay = inputcontainer.querySelector('.error');

    errorDisplay.innerText = '';
    inputcontainer.classList.add('success');
    inputcontainer.classList.remove('error');
};

const isValidEmail = Email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(Email).toLowerCase());
}



const validateInputs = () => {
    const Full_NameValue = Full_Name.value.trim();
    const EmailValue = Email.value.trim();
    const ContactValue = Contact.value.trim();
    const AddressValue = Address.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(Full_NameValue === '') {
        setError(Full_Name, 'Full Name is required');
    } else if (!isValidFull_Name(Full_NameValue)) {
        setError(Full_Name, 'Provide a valid Name');
    } else {
        setSuccess(Full_Name);
    }
    
    if(EmailValue === '') {
        setError(Email, 'Email is required');
    } else if (!isValidEmail(EmailValue)) {
        setError(Email, 'Provide a valid email address');
    } else {
        setSuccess(Email);
    }

    if(ContactValue === '') {
        setError(Contact, 'Please Enter your Contact Number');
    } else if (ContactValue < 11) {
        setError(Contact, 'Provide a valid Contact Number');
    } else {
        setSuccess(Contact);
    }

    if(AddressValue === '') {
        setError(Address, 'Address is Required');
    } else if (!isValidAddress(AddressValue)) {
        setError(Address, 'Provide a valid Address');
    } else {
        setSuccess(Address);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    if(password2Value === '') {
        setError(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't match");
    } else {
        setSuccess(password2);
    }

};


