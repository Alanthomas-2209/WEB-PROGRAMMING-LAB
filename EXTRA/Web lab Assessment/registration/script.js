function validation() {
    var name =
        document.querySelector('#name')
    var department =
        document.querySelector('#department')
    var address =
        document.querySelector("#address")
        let btn =document.getElementById("btn")
    let blood =document.getElementsByName("blood_group")
    let Dname=document.getElementsByName("Docname")							
    var regName = /\d+$/g;								
    if (name.value.trim() == "" || regName.test(name.value)) {
        window.alert("Please enter your name properly.");
        name.focus();
        return false;
    }

    if (address.value == "") {
        window.alert("Please enter your address.");
        address.focus();
        return false;
    }

    // if (blood == "") {
    //     window.alert("Please enter your blood group.");
    //     address.focus();
    //     return false;
    // }
    // if (department.selectedIndex == -1) {
    //     alert("Please enter Department.");
    //     what.focus();
    //     return false;
    // }
    // if (Dname == "" || regName.test(Dname)) {
    //     window.alert("Please enter your Doctor name properly.");
    //     name.focus();
    //     return false;
    // }
    window.alert("patient Id :12345");
    return true;
}