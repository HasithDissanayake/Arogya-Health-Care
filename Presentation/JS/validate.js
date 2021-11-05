function check() {
    var email = document.getElementById('Email').Value;
    var password = document.getElementById('Pass').Value;

    if (email != '' && password != '') {
        // console.log('Not Empty');
        document.getElementById('buttonlog').disabled = false;
    } else {
        console.log('Empty');
    }
}

function emailcheck() {
    check();
}

function passcheck() {
    check();
}