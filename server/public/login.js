'use strict'

var userName = document.querySelector('#username');
var userEmail = document.querySelector('#useremail');
var userPass = document.querySelector('#userepass');
var userSubscribe = document.querySelector('#usersubscribe');
var sendBtn = document.querySelector('#sendbtn');

function send() {

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