// JavaScript and RegExp
//
function validate()
{
 // -=-=-=-=-=-=-=-=-=-
 // PHONE
 // -=-=-=-=-=-=-=-=-=-
 //
 document.getElementById("phonelabel").innerHTML = "<label for=\"phone\" id=\"phonelabel\">Phone number * [(999)999-9999]</label>";
 var ele = document.getElementById("phone");

 // get rid of leading and trailing blanks
 var s = trimit(document.getElementById("phone").value);
 ele.value = s;
 if( s == "" )
 {
    alert( "Please provide the phone number!" );
    document.getElementById("phonelabel").innerHTML += " <span class=\"error\"> ERROR: number empty</span>";
    ele.focus();
    return false;
 }
 else
 {
  	var re = /^(\(\d{3}\)|\d{3})[- .]?\d{3}[ -.]?[0-9]{4}$/;
    var r = new RegExp(re, 'g');
    if (r.test(s)==false) {
    	alert("Please prvide a valid phone number!");
        document.getElementById("phonelabel").innerHTML += " <span class=\"error\"> ERROR: invalid phone format</span>";
        ele.select();
    	return false;
    }
 }

 // -=-=-=-=-=-=-=-=-=-
 // AUTHOR
 // -=-=-=-=-=-=-=-=-=-
 //
 document.getElementById("authorlabel").innerHTML = "<label for=\"author\" id=\"authorlabel\">Author * [First Last]</label>";
 ele = document.getElementById("author");

 // get rid of leading and trailing blanks
 s = trimit(document.getElementById("author").value);
 ele.value = s;

 if( document.getElementById("author").value == "" )
 {
    alert( "Please provide the author name!" );
    document.getElementById("authorlabel").innerHTML += " <img src=\"css/error.png\" />";
    document.getElementById("author").focus();
    return false;
 }
 else
 {
 	var re = /^([A-Za-z])+(\s+)([A-Za-z]+)$/;
    var s = document.getElementById("author").value;
    if (s.match(re)==null) {
    	alert("Please provide the author name!");
    	document.getElementById("author").focus();
    	return false;
    }
 }

 // -=-=-=-=-=-=-=-=-=-
 // CITY. TODO: add validation
 // -=-=-=-=-=-=-=-=-=-
 //
 if( document.getElementById("city").value == "" )
 {
    alert( "Please provide the city!" );
    document.getElementById("city").focus();
    return false;
 }
 // -=-=-=-=-=-=-=-=-=-
 // STATE. TODO: add validation
 // -=-=-=-=-=-=-=-=-=-
 //
 if( document.getElementById("state").value == "" )
{
    alert( "Please provide the state!" );
    document.getElementById("state").focus();
    return false;
 }
 // -=-=-=-=-=-=-=-=-=-
 // ZIP. TODO: add validation
 // -=-=-=-=-=-=-=-=-=-
 //
 if( document.getElementById("zip").value == "" )
 {
    alert( "Please provide the postal code!" );
    document.getElementById("zip").focus();
    return false;
 }

 return( true );
}

function trimit(s)
{
 var news = s.replace(/\s+/g," ");
 news = news.replace(/^\s+/g,"");
 news = news.replace(/\s+$/g,"");

 return news;
}
