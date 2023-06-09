function validateForm() {   
    var password = document.signupform.password;
    var confirm_password = document.signupform.confirm_password;
    var user_name = document.signupform.user_name;
    var email = document.signupform.email;

    if (password.value !== confirm_password.value) {
        alert("Passwords do not match.");
        return false;
    }

    if (user_name.value.trim() === "") {
        alert("First Name is required! Please input a First Name.");
        return false;
    }

    if (email.value.trim() === "") {
        alert("Email is required! Please input an Email.");
        return false;
    }

    if (password.value.trim() === "") {
        alert("Password required! Please input a Password.");
        return false;
    }

    //Password should not be lower than eight (8) characters
    if (password.value.length < 8) {
        alert("Password should be at least 8 characters long.");
        return false;
    }
    return true;

} 

