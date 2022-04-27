const modalCharacteristicsEdit = document.querySelector(".modalCharacteristicsEdit button"),
    modalHobbiesInterestsEdit = document.querySelector(".modalHobbiesInterestsEdit button"),
    modalBackgroundColourEdit = document.querySelector(".modalBackgroundColourEdit button"),
    modalProfileDetailsEdit = document.querySelector(".modalProfileDetailsEdit button"),
    modalGenderSeekingEdit = document.querySelector(".modalGenderSeekingEdit button"),
    modalBioEdit = document.querySelector(".modalBioEdit button"),
    modalGalleryPicturesEdit = document.querySelector(".modalGalleryPicturesEdit button"),
    characteristicsform = document.querySelector(".characteristicsform form"),
    hobbiesinterestsform = document.querySelector(".hobbiesinterestsform form"),
    backgroundcolourpickerform = document.querySelector(".backgroundcolourpickerform form"),
    profiledetailsform = document.querySelector(".profiledetailsform form"),
    genderseekingform = document.querySelector(".genderseekingform form"),
    bioform = document.querySelector(".bioform form"),
    gallerypicturesform = document.querySelector(".gallerypicturesform form");
let characteristicscheckboxes = document.querySelectorAll("input[type=checkbox][class='characteristicscheck']");
let characteristicsradiobtns = document.querySelectorAll("input[type=radio][class='characteristicscheck']");
let hobbiesinterestscheckboxes = document.querySelectorAll("input[type=checkbox][class='hobbiesinterestscheckbox']");

modalCharacteristicsEdit.onclick = ()=>{
    modalCharacteristics.classList.toggle("show");
    modalCharacteristicsEdit.classList.toggle("active");
}

modalHobbiesInterestsEdit.onclick = ()=>{
    modalHobbiesInterests.classList.toggle("show");
    modalHobbiesInterestsEdit.classList.toggle("active");
}

modalBackgroundColourEdit.onclick = ()=>{
    modalBackgroundColour.classList.toggle("show");
    modalBackgroundColourEdit.classList.toggle("active");
}

modalProfileDetailsEdit.onclick = ()=>{
    modalProfileDetails.classList.toggle("show");
    modalProfileDetailsEdit.classList.toggle("active");
}

modalGenderSeekingEdit.onclick = ()=>{
    modalGenderSeeking.classList.toggle("show");
    modalGenderSeekingEdit.classList.toggle("active");
}

modalBioEdit.onclick = ()=>{
    modalBio.classList.toggle("show");
    modalBioEdit.classList.toggle("active");
}

modalGalleryPicturesEdit.onclick = ()=>{
    modalGalleryPictures.classList.toggle("show");
    modalGalleryPicturesEdit.classList.toggle("active");
}

function getCheckedCharacteristics() {
    var checked = [];

    for (var i = 0; i < characteristicscheckboxes.length; i++) {
        var checkbox = characteristicscheckboxes[i];
        if (checkbox.checked) checked.push(checkbox.value);
    }

    for (var i = 0; i < characteristicsradiobtns.length; i++) {
        var radiobtn = characteristicsradiobtns[i];
        if (radiobtn.checked) checked.push(radiobtn.value);
    }

    return checked;
}

function getCheckedHobbiesInterests() {
    var checked = [];

    for (var i = 0; i < hobbiesinterestscheckboxes.length; i++) {
        var checkbox = hobbiesinterestscheckboxes[i];
        if (checkbox.checked) checked.push(checkbox.value);
    }

    return checked;
}

/*function getAge(birthDate) {
    var today = new Date();
    var age = (today.getFullYear() - birthDate.getFullYear());
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}*/
function calculate_age(dob) {
    var diff_ms = Date.now() - dob.getTime();
    var age_dt = new Date(diff_ms);

    return Math.abs(age_dt.getUTCFullYear() - 1970);
}
characteristicsform.onsubmit = (e)=>{
    e.preventDefault();
    var checked = getCheckedCharacteristics();
    let checkedCharacteristics = checked;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/Edit.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if(data === "success"){
                    location.href="Profile.php";
                }
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("checkedCharacteristics=" + checkedCharacteristics);
}

hobbiesinterestsform.onsubmit = (e)=>{
    e.preventDefault();
    var checked = getCheckedHobbiesInterests();
    let checkedHobbiesInterests = checked;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/Edit.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if(data === "success"){
                    location.href="Profile.php";
                }
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("checkedHobbiesInterests=" + checkedHobbiesInterests);
    location.href="Profile.php";
}

backgroundcolourpickerform.onsubmit = (e)=>{
    e.preventDefault();
    var checked = document.getElementById("colorpicker").value;
    let chosenBackgroundColour = checked;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/Edit.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if(data === "success"){
                    location.href="Profile.php";
                }
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("chosenBackgroundColour=" + chosenBackgroundColour);
    location.href="Profile.php";
}

profiledetailsform.onsubmit = (e)=>{
    e.preventDefault();
    let birthday = document.getElementById("birthday").value;
    let dateArray = birthday.split("-");
    let birthdateTimeStamp = new Date(dateArray[0],dateArray[1]-1,dateArray[2]);
    let cur = new Date();
    let diff = cur - birthdateTimeStamp;
    // This is the difference in milliseconds
    let age = Math.floor(diff/31557600000);
    let userLocation = document.getElementById("county").value;
    if(age >= 18){
        console.log(userLocation);
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "php/Edit.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    if(data === "success"){
                        location.href="Profile.php";
                    }
                }
            }
        }
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("age=" + age + "&" + "userLocation=" + userLocation);
        location.href="Profile.php";
    } else {
        alert("You must be at least 18 years old to join!");
    }
}

genderseekingform.onsubmit = (e)=>{
    e.preventDefault();
    let userGender = document.getElementById("gender").value;
    let userSeeking = document.getElementById("seeking").value;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/Edit.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if(data === "success"){
                    location.href="Profile.php";
                }
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("userGender=" + userGender + "&" + "userSeeking=" + userSeeking);
    location.href="Profile.php";
}

bioform.onsubmit = (e)=>{
    e.preventDefault();
    let userBio = document.getElementById("userbio").value;
    console.log(userBio);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/Edit.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if(data === "success"){
                    location.href="Profile.php";
                }
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("userBio=" + userBio);
    location.href="Profile.php";
}

gallerypicturesform.onsubmit = (e)=>{
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/Edit.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if(data === "success"){
                    location.href="Profile.php";
                }
            }
        }
    }
    let formData = new FormData(gallerypicturesform);
    xhr.send(formData);
    setTimeout(() =>{
        location.href="Profile.php";
    }, 1000);
}

var checks = document.querySelectorAll(".hobbiesinterestscheckbox");
var max = 12;
for (var i = 0; i < checks.length; i++)
    checks[i].onclick = selectiveCheck;
function selectiveCheck (event) {
    var checkedChecks = document.querySelectorAll(".hobbiesinterestscheckbox:checked");
    if (checkedChecks.length >= max + 1)
        return false;
}

// Get the modal
var modalCharacteristics = document.getElementById("modalCharacteristics");
var modalHobbiesInterests = document.getElementById("modalHobbiesInterests");
var modalBackgroundColour = document.getElementById("modalBackgroundColour");
var modalProfileDetails = document.getElementById("modalProfileDetails");
var modalGenderSeeking = document.getElementById("modalGenderSeeking");
var modalBio = document.getElementById("modalBio");
var modalGalleryPictures = document.getElementById("modalGalleryPictures");

