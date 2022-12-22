let submitBtn = document.querySelector("#go")
submitBtn.addEventListener('click',()=>{
    if(validation())
        window.location.href = "./registration/registration.html"
    else
        console.log(false);

})
function validation() {
    var fname =
        document.getElementById("first_name").value;
    var lname =
        document.getElementById("second_name").value;
    var email =
        document.getElementById("EMail").value;
    var password =
        document.getElementById("Password").value; 									
    var regName = /\d+$/g;								

    if (fname == "" || regName.test(fname)) {
        window.alert("Please enter your name properly.");
        fname.focus();
        return false;
    }

    if (lname == "" || regName.test(lname)) {
        window.alert("Please enter your name properly.");
        lname.focus();
        return false;
    }
    
    if (email == "") {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    
    if (password == "") {
        alert("Please enter your password");
        password.focus();
        return false;
    }

    if(password.length <6){
        alert("Password should be atleast 6 character long");
        password.focus();
        return false;

    }
    return true;
}