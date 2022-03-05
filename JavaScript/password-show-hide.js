const passwordField = document.querySelector(".form input[type='password']"),
toggleButton = document.querySelector(".form .field i");

toggleButton.onclick = ()=>{
    if(passwordField.type == "password"){
        passwordField.type = "text";
        toggleButton.classList.add("active");
    }else{
        passwordField.type = "password";
        toggleButton.classList.remove("active");
    }
}