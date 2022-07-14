function setInputError(inputElement, message) {
    inputElement.classList.add("input-error");
    inputElement.parentElement.querySelector(".input-error-message").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove(".input-error");
    inputElement.parentElement.querySelector(".input-error-message").textContent = "";
}
document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");

    document.querySelector("#linkCreateAccount").addEventListener("click", element => {
        element.preventDefault();
        loginForm.classList.add("hidden");
        createAccountForm.classList.remove("hidden");
    });

    document.querySelector("#linkLogin").addEventListener("click", element => {
        element.preventDefault();
        loginForm.classList.remove("hidden");
        createAccountForm.classList.add("hidden");
    });

    document.querySelectorAll(".input").forEach(inputElement =>{
        inputElement.addEventListener("blur", e => {
            if(e.target.id === "signupUsername" && e.target.value.length > 0 && e.target.value.length < 5) {
                setInputError(inputElement, "Username must be at least 5 characters in length");
            }
        });

        inputElement.addEventListener("input", e => {
            clearInputError(inputElement);
        });
    });
});