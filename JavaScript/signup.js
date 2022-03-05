const signupForm = document.querySelector(".signup form"),
continueButton = signupForm.querySelector(".button input");

signupForm.onsubmit = (e)=>{
    e.preventDefault(); 
}

continueButton.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/SignUp.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
            }
        }
    }
    let formData = new FormData(signupForm);
    xhr.send(formData);
}