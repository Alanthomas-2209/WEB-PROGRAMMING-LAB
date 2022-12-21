function validation() {
    var name =
        document.forms.RegForm.name.value;
    var department =
        document.forms.RegForm.Department.value;
    var address =
        document.forms.RegForm.Address.value;
        let btn =document.getElementById("btn")
    let blood =document.getElementsByName("blood_group")
    let Dname=document.getElementsByName("Docname")
    //console.log(blood)							
    var regName = /\d+$/g;								

    if (name == "" || regName.test(name)) {
        window.alert("Please enter your name properly.");
        name.focus();
        return false;
    }

    if (address == "") {
        window.alert("Please enter your address.");
        address.focus();
        return false;
    }

    if (blood == "") {
        window.alert("Please enter your blood group.");
        address.focus();
        return false;
    }
    if (department.selectedIndex == -1) {
        alert("Please enter Department.");
        what.focus();
        return false;
    }
    if (Dname == "" || regName.test(Dname)) {
        window.alert("Please enter your Doctor name properly.");
        name.focus();
        return false;
    }
    window.alert("patient Id :12345");
    return true;
}