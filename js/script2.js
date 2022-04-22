$(function(){
    let searchform = document.querySelector(".search-form");
    document.querySelector("#btn").onclick = () => {
    searchform.classList.toggle("active");
}

const container = document.querySelector(".container"),
      signUp = document.querySelector(".signup-link"),
      login = document.querySelector(".login-link");

signUp.addEventListener("click", ( )=>{
    container.classList.add("active");
});
login.addEventListener("click", ( )=>{
    container.classList.remove("active");
});


});