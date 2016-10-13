function validateForm() {
    var x = document.forms["firstname"]["fname"].value;
    if (x == null || x == "") {
        alert("First name must be filled out");
        return false;
    }
}