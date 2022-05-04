// 
document.addEventListener("DOMContentLoaded", function(event) { 
    loginPage();
});

window.onscroll = function () {
    myFunction()
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

// 
function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}

// Set the date we're counting down to
var countDownDate = new Date("Nov19, 2022 05:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function () {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
        minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);

$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

function loginPage() {
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");

    // 

    sign_in_btn.addEventListener("click", () => {
        container.classList.add("switch");
        setTimeout(function () {
            container.classList.remove("sign-up-mode")
        }, 1300);
        setTimeout(function () {
            container.classList.remove("switch")
        }, 2000);
    });

    sign_up_btn.addEventListener("click", () => {
        container.classList.add("switch");
        setTimeout(function () {
            container.classList.add("sign-up-mode")
        }, 1300);
        setTimeout(function () {
            container.classList.remove("switch")
        }, 2000);
    });
}