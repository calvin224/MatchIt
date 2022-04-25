// Button DOM
let tempbanbtn = document.getElementById("tempbanbtn");
let permbanbtn = document.getElementById("permbanbtn");
let unbanbtn = document.getElementById("unbanbtn");
let deletebtn = document.getElementById("deletebtn");

// Adding event listener to button
tempbanbtn.addEventListener("click", () => {
        var retVal = prompt("Enter ban length in hours");
        $.post('php/Banning.php', {
            retVal: retVal,
            btnValue: 1
        }, (response) => {
        });
        setTimeout(() =>{
            $.post('php/Banning.php', {
                btnValue: 2
            }, (response) => {
            });
        }, retVal);
});

permbanbtn.addEventListener("click", () => {
    var retVal = confirm("Permanently Ban User?");
    if(retVal == true) {
        $.post('php/Banning.php', {
            btnValue: 1
        }, (response) => {
        });
    }
});

unbanbtn.addEventListener("click", () => {
        var retVal = confirm("Confirm Unban?");
        if(retVal == true) {
            $.post('php/Banning.php', {
                btnValue: 2
            }, (response) => {
            });
        }
});

deletebtn.addEventListener("click", () => {
    var retVal = confirm("Confirm Deletion of User?");
    if(retVal == true) {
        $.post('php/Banning.php', {
            btnValue: 3
        }, (response) => {
        });
    }
});
