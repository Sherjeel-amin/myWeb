function validation()
{
    if(document.getElementById("fname").value.trim()=="")
    {
        alert("Please enter your name")
        return false;
    }
    if(document.getElementById("contact").value.trim()=="")
    {
        alert("Please enter your contact")
        return false;
    }
    if(document.getElementById("message").value.trim()=="")
    {
        alert("Please enter your message")
        return false;
    }
}