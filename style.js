function validateForm(){
    let name = document.forms["form"]["name"].value;
    if(name == ""){
        alert("Item name required");
        return false;
    }
}