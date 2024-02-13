let btn_Password = document.getElementById('btn-password');
let btn_email = document.getElementById('btn-email');
let input_password = document.getElementById('exampleInputPassword1');
let input_email = document.getElementById('exampleInputEmail1');
let api = "https://api.hunter.io/v2/email-finder?domain=reddit.com&first_name=Alexis&last_name=Ohanian&api_key=3f58cbf5e2a0294fbdbcdf934e59f322c3bd0bb0";

// if btn password was clicked
// input password become visible and input email become hidden
// else 
// input email become visible and input password become hiden

btn_Password.addEventListener('click', () => {

    input_password.style.display = "block";
    input_email.style.display = "none";
    btn_Password.style.display = "none";
    btn_email.style.display = "block";

})
btn_email.addEventListener('click', () => {
    
    input_email.style.display = "block";
    input_password.style.display = "none";
    btn_Password.style.display = "block";
    btn_email.style.display = "none";

})
