'use strict'

var userName = document.querySelector('#username');
var userNameError = document.querySelector('#username + .auth_error_hide');

var userEmail = document.querySelector('#useremail');
var userEmailError = document.querySelector('#useremail + .auth_error_hide');

var userPhone = document.querySelector('#userphone');
var userPhoneError = document.querySelector('#userphone + .auth_error_hide');

var userPass = document.querySelector('#userepass');
var userSubscribe = document.querySelector('#usersubscribe');

var sendBtn = document.querySelector('#sendbtn');



function send() {

    var isError = false;

    if (!(/^[A-ZА-Я0-9\-\.\ ]{2,15}$/i.test(userName.value))) {
        userNameError.classList.remove('auth_error_hide');
        userNameError.classList.add('auth_error_show');
        isError = true;
    }

    if (!(/^[a-z0-9.\-_]{1,15}@[a-z0-9.\-_]{1,25}\.[a-z]{1,10}$/i.test(userEmail.value))) {
        userEmailError.classList.remove('auth_error_hide');
        userEmailError.classList.add('auth_error_show');
        isError = true;
    }

    if (!(/^(\+380|80|0|380){1,4}[0-9]{3,15}$/.test(userPhone.value))) {
        userPhoneError.classList.remove('auth_error_hide');
        userPhoneError.classList.add('auth_error_show');
        isError = true;
    }
    
    if(isError) return null;

    var data = {
        name: userName.value,
        email: userEmail.value,
        password: userPass.value,
        subscribe: userSubscribe.value,
    }

    fetch('/login', {
        method:'POST',
        body: JSON.stringify(data)
    });
}

sendBtn.onclick = send;

function setClearHandler () {
    var elements = document.querySelectorAll('.auth__text');
    elements.forEach(function(element){

        element.onclick = function () {
            this.nextElementSibling.classList.remove('auth_error_show');
            this.nextElementSibling.classList.add('auth_error_hide');
        }
    });
}
setClearHandler();