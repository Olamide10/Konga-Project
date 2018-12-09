<script> 
    function validateForm() {
         //validate firstname
        var name = document.regForm.firstname;
          if (name.value == "") {
          alert("Please input your firstname");
          name.focus();
          return false;
          }
          //validate lastname
        var name = document.regForm.lastname;
          if (name.value == "") {
          alert("Please input your lastname");
          name.focus();
          return false;
          }
          //validate Email
        var email = document.forms["regForm"]["email"];
            if (email.value == "") {
            alert("Please input your email address");
             email.focus();
                return false;
             }
             //validate Password
        var password = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");
        password.onfocus = function(){
          document.getElementById("message").style.display = "block";
        }
        password.onblur = function(){
          document.getElementById("message").style.display = "none";
        }
        password.onkeyup = function(){
          var lowerCaseLetters = /[a-z]/g;
          if (password.value.match(lowerCaseLetters)){
            letter.classList.remove("invalid");
            letter.classList.add("valid");
          }else {
          letter.classList.remove("valid");
          letter.classList.add("invalid");
          }
        var upperCaseLatters = /[A-Z]/g;
        if(password.value.match(upperCaseLatters)){
          capital.classList.remove("invalid");
          capital.classList.add("valid");
        }else {
          capital.classList.remove("valid");
          capital.classList.add("invalid");
        }
        var numbers = /[0-9]/g;
        if(password.value.match(number)){
          number.classList.remove("invalid");
          number.classList.add("valid");
        }else{
          number.classList.remove("valid");
          number.classList.add("invalid")
        }
        if(password.value.length>=8){
          length.classList.remove("invalid");
          length.classList.add("valid");
        }else {
          length.classList.remove("valid");
          length.classList.add("invalid")
        }
        }
        //validate phonenumber   
        var phone = document.regForm.phonenumber
        if (phone.value == "" || isNaN(phone.value)) {
        alert("Phone number should be numeric.");
        phone.focus();
        return false;
        }
        if (phone.value.length != 11) {
        alert( "Phone number should be exactly 11 digits.");
        phone.focus();
        return false;
        }
        //validate tribe
        var tribe = document.regForm.tribe;
        if (tribe.value == "-1") {
        alert("Please select your tribe");
        return false;
        }
        return true;
        //validate gender
        function checkgender(){}
        var gender= form.querySelectorAll('input[name="gender"]: checked');
        if (!gender.length){
          alert('You must select male or female');
          return false;
          }
        //validate country
        var country= document.regForm.Country;
        if(document.regForm.country.value == "-1"){
          alert ("Please provide your country!");
          return false;
        }
          return(true)
</script>