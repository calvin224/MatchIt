const searchBar = document.querySelector(".users .search input"),
    searchButton = document.querySelector(".users .search button");

searchButton.onclick  = ()=>{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchButton.classList.toggle("active");
}