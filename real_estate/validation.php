<script type="text/javascript">
function validateForm()
{
var alphanumericExp = /^[0-9a-zA-Z ]+$/;
var kb= /^[a-zA-Z ]+$/;
var city=/^[a-zA-Z./ ]+$/;
var alphabetExp= /^[a-zA-Z]+$/;
var numericExp= /^[0-9]+$/;
var emailExp=/^[\w\_\.]+\@[\w\_\.]+\.[\w]{2,3}$/;
var phoneno = /^\d{10}$/;
var CustomerID=document.myform.CustomerID.value;
if(CustomerID==null || CustomerID=="")
    {
        alert("please fill your ID");
     return false;
  }
var UserName=document.myform.UserName.value;
if(UserName==null || UserName=="")
    {
        alert("please fill your UserName");
     return false;
  }
  else if(!UserName.match(alphanumericExp))
    {
        alert("invalid UserName expression");
        return false;
    }
var FirstName=document.myform.FirstName.value;
if(FirstName==null || FirstName=="")
    {
        alert("please fill your FirstName");
     return false;
  }
  else if(!FirstName.match(kb))
    {
        alert("invalid FirstName expression");
        return false;
    }
var LastName=document.myform.LastName.value;
if(LastName==null || LastName=="")
    {
        alert("please fill your LastName");
     return false;
  }
  else if(!LastName.match(kb))
    {
        alert("invalid LastName expression");
        return false;
    }
var Address=document.myform.Address.value;
if(Address==null || Address=="")
    {
        alert("please fill your Address");
     return false;
  }
  else if(!Address.match(city))
    {
        alert("invalid Address expression");
        return false;
    }
var City=document.myform.City.value;
if(City==null || City=="")
    {
        alert("please fill your City");
     return false;
  }
  else if(!City.match(city))
    {
        alert("invalid City expression");
        return false;
    }
var PhoneNumber=document.myform.PhoneNumber.value;
if(PhoneNumber==null || PhoneNumber=="")
    {
        alert("please fill your PhoneNumber");
     return false;
  }
  else if(!PhoneNumber.match(phoneno))
    {
        alert("please enter 10 digit phone number");
        return false;
    }
var Email=document.myform.Email.value;
if(Email==null || Email=="")
    {
        alert("please fill your  valid Email");
     return false;
  }
  else if(!Email.match(emailExp))
    {
        alert("Please make sure you’ve entered a valid email address.");
        return false;
    }
  
var Password=document.myform.Password.value;
if(Password==null || Password=="")
    {
        alert("please fill your password");
     return false;
  }
  else if(Password.length<6)
    {
        alert("your password shoud be minimum of 6 character");
        return false;
    }
  else if(!Password.match(alphanumericExp))
    {
        alert("invalid pasword expression");
        return false;
    }
var ConfirmPassword=document.myform.ConfirmPassword.value;
if(ConfirmPassword != Password)
    {
        alert("password confirmation does not the same");
     return false;
  }
  return true;
  }
</script>