const characteristicsList = document.querySelector(".characteristicscontainer"),
    hobbiesinterestsList = document.querySelector(".interestscontainer");

setTimeout(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/OtherUserProfileCharacteristics.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                characteristicsList.innerHTML = data;
            }
        }
    }
    xhr.send();
});
setTimeout(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/OtherUserProfileHobbiesInterests.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                hobbiesinterestsList.innerHTML = data;
            }
        }
    }
    xhr.send();
});
