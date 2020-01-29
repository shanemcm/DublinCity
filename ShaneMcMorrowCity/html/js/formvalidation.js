
function validateForm() {
    var x = document.forms["contactform"]["mobile"].value;
    if (x == "") {
      alert("Mobile number must be provided");
      document.contactform.mobile.focus() 
      return false;
    }
  }