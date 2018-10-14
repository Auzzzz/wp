function increaseValue() {
    var value = parseInt(document.getElementById('qty').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('qty').value = value;
}

function decreaseValue() {
    var value = parseInt(document.getElementById('qty').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('qty').value = value;
}

function visa() {
    var x = document.getElementById("card").value;
    var visaregex = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
    var valid = false;

    if(visaregex.test(x)){
        valid = true;
    }

    if(valid){
       document.getElementById("visap").innerHTML = "VISA";
    }
}