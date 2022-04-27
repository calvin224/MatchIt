const searchIcon = document.querySelector(".search button"),
    usersList = document.querySelector(".users-list"),
    findTable = document.querySelector(".find-list"),
    form = document.querySelector(".login form"),
    continueBtn = form.querySelector(".button input");
    var checkboxes = document.querySelectorAll("input[type=checkbox]");

searchIcon.onclick = ()=>{
  modal.classList.toggle("show");
  searchIcon.classList.toggle("active");
}

function getChecked() {
  var checked = [];

  for (var i = 0; i < checkboxes.length; i++) {
    var checkbox = checkboxes[i];
    if (checkbox.checked) checked.push(checkbox.value);
  }

  return checked;
}

form.onsubmit = (e)=>{
  e.preventDefault();
}

continueBtn.onclick = ()=>{
  var checked = getChecked();
  let searchTerm = checked;
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/findusersearch.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        findTable.innerHTML = data;
      }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}
// Get the modal
var modal = document.getElementById("myModal");

setTimeout(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "php/findusers.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        findTable.innerHTML += data;
      }
    }
  }
  xhr.send();
});
