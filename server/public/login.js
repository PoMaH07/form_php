'use strict'

var formManager = {
    name: document.querySelector('#username'),
    nameError: document.querySelector('#username + .auth__error'),
    email: document.querySelector('#useremail'),
    emailError: document.querySelector('#useremail + .auth__error'),
    phone: document.querySelector('#userphone'),
    phoneError: document.querySelector('#userphone + .auth__error'),
    password: document.querySelector('#userpass'),
    passwordError: document.querySelector('#userpass + .auth__error'),
    subscribe: document.querySelector('#usersubscribe'),
    sendBtn: document.querySelector('#sendbtn'),

};


formManager.valid = function() {

    var isNotError = true;

    if (!(/^[A-ZА-Я0-9\-\.\ ]{2,15}$/i.test(formManager.name.value))) {
        this.nameError.classList.remove('auth_error_hide');
        this.nameError.classList.add('auth_error_show');
        isNotError = false;
    }

    if (!(/^[a-z0-9.\-_]{1,15}@[a-z0-9.\-_]{1,25}\.[a-z]{1,10}$/i.test(formManager.email.value))) {
        this.emailError.classList.remove('auth_error_hide');
        this.emailError.classList.add('auth_error_show');
        isNotError = false;
    }

    if (!(/^(\+380|80|0|380){1,4}[0-9]{3,15}$/.test(formManager.phone.value))) {
        this.phoneError.classList.remove('auth_error_hide');
        this.phoneError.classList.add('auth_error_show');
        isNotError = false;
    }

    if (!(/^[A-ZА-Я0-9\-\.\ ]{2,15}$/i.test(formManager.password.value))) {
        this.passwordError.classList.remove('auth_error_hide');
        this.passwordError.classList.add('auth_error_show');
        isNotError = false;
    }
    
    return isNotError;
}

formManager.send = function() {

    if (!this.valid()) return null;

    var data = {
        name: this.name.value,
        email: this.email.value,
        phone: this.phone.value,
        password: this.password.value,
        subscribe: this.subscribe.checked,
    };

    fetch('/login', {
        method:'POST',
        body: JSON.stringify(data)
    });
};

formManager.setClearHandler = function() {
    var elements = document.querySelectorAll('.auth__text');
    elements.forEach(function(element){

        element.onclick = function () {
            this.nextElementSibling.classList.remove('auth_error_show');
            this.nextElementSibling.classList.add('auth_error_hide');
        }
    });
}
formManager.init = function() {
    this.sendBtn.onclick = this.send.bind(formManager);
    this.setClearHandler();
};

formManager.init();