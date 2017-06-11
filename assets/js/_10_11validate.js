function formValidation()
{
	var fname = document.registration.firstname;
	var lname = document.registration.lastname;
	var email = document.registration.email; 
	var uname = document.registration.username;
	var password = document.registration.password;
	var conpass = document.registration.cpassword;
		
	if(allLetter(fname)) 
	{
		if(lastname(lname)) 
		{
			if(ValidateEmail(email))  
			{
				if(username(uname)) 
				{
					if(passid_validation(password,7,12))  
					{ 
						if(confirmPass(conpass)) 
						{			     
							return true;															
						}
					}
				}
			}	
		}
	}
	return false;
} 

function contactformnew()
{
	var fname = document.contactform.firstname;
	var mname = document.contactform.middlename;
	var lname = document.contactform.lastname;
	var designation = document.contactform.designation;
	var address1 = document.contactform.address1;
	//var address2 = document.contactform.address2;
	var county = document.contactform.county;
	var city = document.contactform.city;
	var zipcode = document.contactform.zipcode;
	var linkcontact = document.contactform.linkcontact;
			
	if(allLetter(fname)) 
	{
		if(middlename(mname))
		{
			if(lastname(lname)) 
			{
				if(Design(designation))
				{
					if(Address1(address1))  
					{						
						if(zipcountryname(county)) 
						{
							if(zipcityname(city)) 
							{								
								if(Linkcontact(linkcontact))		     
								{
									return true;
								}
								    															
							}
						}
					}
				}		
			}
		}	
	}
	return false;
} 

function editform()
{
	var fname = document.editadminform.firstname;
	var lname = document.editadminform.lastname;
	var email = document.editadminform.email; 
	var uname = document.editadminform.username;
		
	if(allLetter(fname)) 
	{
		if(lastname(lname)) 
		{
			if(ValidateEmail(email))  
			{
				if(username(uname)) 
				{
					return true;																					
				}
			}	
		}
	}
	return false;
} 

function cityform()
{
	var county = document.citymanageform.county;
	var city = document.citymanageform.city;
			
	if(countryname(county)) 
	{
		if(cityname(city)) 
		{
			return true;																						
		}
	}
	return false;
} 

function addzip()
{
	var county = document.zipform.county;
	var city = document.zipform.city;
	var zipcode = document.zipform.zipcode;		
	
	if(zipcountryname(county)) 
	{
		if(zipcityname(city)) 
		{
			if(zipcodes(zipcode))
			{
				return true;
		    }																						
		}
	}
	return false;
} 

function designationform()
{
	var designation_name = document.designationmanageform.designation_name;
			
	if(Designation(designation_name)) 
	{
		return true;																						
	}
	return false;
} 

function issueform()
{
	var issue_name = document.issuemanageform.issue_name;
			
	if(Issue(issue_name)) 
	{
		return true;																						
	}
	return false;
} 

function loginForm()
{
	var user=document.login.username.value;
	var pass=document.login.password.value;
 
	if(user == '')
	{
		alert('Please Enter Username');
		document.login.username.focus();
		return false;
	}
 
	if(pass == '')
	{
		alert('Please Enter Password');
		document.login.password.focus();
		return false;
	}
}
	

	 
	 
function messagevalidation()
{
	var sname = document.sentmessage.subject;
	if(subjects(sname))
	{
		return true;	
	}		
	return false;  
}	
	 
	 
function subjects(sname)  
{		
	var letters = /^[a-zA-Z ]+$/;  
	if(sname.value == null || sname.value == "")
	{
		alert('Subject is required');  
		sname.focus();
		return false;  	
	}
	else if(!sname.value.match(letters))  
	{  
		alert('Subject must have alphanumeric characters only');  
		sname.focus();  
		return false;  
	}
	return true;
}  
	 
	 
function allLetter(fname)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(fname.value.match(letters))  
	{  
		return true;  
	}
	else if(fname.value == null || fname.value == "")
	{
		alert('Firstname is required');  
		fname.focus();
		return false;  	
	}
	else  
	{  
		alert('Firstname must have alphabet characters only');  
		fname.focus();  
		return false;  
	}  

}  
 
function lastname(lname)  
{   
	var letters = /^[a-zA-Z ]+$/;  
	if(lname.value.match(letters))  
	{  
	    return true;  
	}
	else if(lname.value == null || lname.value == "")
	{
		alert('Lastname is required');  
		lname.focus();
		return false;  	
	}	  
	else  
	{  
		alert('Lastname must have alphabet characters only');  
		lname.focus();  
		return false;  
	}  
}  

function Linkcontact(linkcontact)  
{   
	var letters = /^[a-zA-Z ]+$/;  
	if(linkcontact.value.match(letters))  
	{  
	    return true;  
	}
	else if(linkcontact.value == null || linkcontact.value == "")
	{
		alert('Linkcontact is required');  
		linkcontact.focus();
		return false;  	
	}	  
	else  
	{  
		alert('Linkcontact must have alphabet characters only');  
		linkcontact.focus();  
		return false;  
	}  
}  

function middlename(mname)  
{   
	var letters = /^[a-zA-Z ]+$/;  
	if(mname.value.match(letters))  
	{  
	    return true;  
	}
	else if(mname.value == null || mname.value == "")
	{
		alert('Middlename is required');  
		mname.focus();
		return false;  	
	}	  
	else  
	{  
		alert('Middlename must have alphabet characters only');  
		mname.focus();  
		return false;  
	}  
}  

function username(uname)  
{   
	var letters = /^([0-9]|[a-z])+([0-9a-z]+)$/i;  
	if(uname.value.match(letters))  
	{  
		return true;  
	}
	else if(uname.value == null || uname.value == "")
	{
		alert('Username is required');  
		uname.focus();  
		return false;  	
	}
	else  
	{  
		alert('Username must have alphanumeric characters only');  
		uname.focus();  
		return false;  
	}  
}         

function Address1(address1)  
{   
	
	if(address1.value == null || address1.value == "")
	{
		alert('Address1 is required');  
		address1.focus();  
		return false;  	
	}
	else  
	{  
		return true;
		
	}  
}         

function username(uname)  
{   
	var letters = /^([0-9]|[a-z])+([0-9a-z]+)$/i;  
	if(uname.value.match(letters))  
	{  
		return true;  
	}
	else if(uname.value == null || uname.value == "")
	{
		alert('Username is required');  
		uname.focus();  
		return false;  	
	}
	else  
	{  
		alert('Username must have alphanumeric characters only');  
		uname.focus();  
		return false;  
	}  
}         
		
function passid_validation(password,mx,my)  
{
	var passid_len = password.value.length;  
	if (passid_len == 0)  
	{  
		alert("Password should not be empty"); 
		password.focus();
		return false;  
	}  
	else if(passid_len >= my || passid_len < mx)
	{
		alert("Password length be between "+mx+" to "+my);  
		password.focus();
		return false;
	}
	else
	{
	     return true;	
	}
}  
	 	 
function ValidateEmail(email)
{	
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(email.value.match(mailformat))
	{
		return true;
	}
	else if(email.value == "" || email.value == null)
	{
		alert("Email is required");
		email.focus();
		return false;
	}
	else
	{
		alert("You have entered an invalid email address!");
		email.focus();
		return false;
	}
}
   
   
function ValidateDate(dayy)
{			
	var dateformat = /^(0[1-9]|[12][0-9]|3[01])[\- \/.](?:(0[1-9]|1[012])[\- \/.](19|20)[0-9]{2})$/ ;
	if(dayy.value.match(dateformat))
	{
		return true;
	}
	else if(dayy.value == "" || dayy.value == null)
	{
		alert("Date is required");
		dayy.focus();
		return false;
	}
	else
	{
		alert("You have To enter date Properly in dd/mm/yyyy format");
		dayy.focus();
		return false;
	}
}   

function confirmPass(conpass) 
{
	var pass = document.getElementById("pass1").value
	var confPass = document.getElementById("pass2").value
	if(pass != confPass) 
	{
		alert('Wrong confirm password !');
		conpass.focus();
		return false;
	}
	return true;
}

function countryname(county)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(county.value.match(letters))  
	{  
		return true;  
	}
	else if(county.value == null || county.value == "")
	{
		alert('Countyname is required');  
		county.focus();
		return false;  	
	}
	else  
	{  
		alert('Countyname must have alphabet characters only');  
		county.focus();  
		return false;  
	}  

}  

function Design(designation)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(designation.value.match(letters))  
	{  
		return true;  
	}
	else if(designation.value == null || designation.value == "0")
	{
		alert('please select designation name');  
		designation.focus();
		return false;  	
	}
		
}  

function Zipcode(zipcode)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(zipcode.value.match(letters))  
	{  
		return true;  
	}
	else if(zipcode.value == null || zipcode.value == "0")
	{
		alert('please select designation name');  
		zipcode.focus();
		return false;  	
	}
		
}  



function zipcountryname(county)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(county.value.match(letters))  
	{  
		return true;  
	}
	else if(county.value == null || county.value == "0")
	{
		alert('please select county');  
		county.focus();
		return false;  	
	}
		
}  

function zipcityname(city)  
{   	
	var letters = /^[0-9]*$/;  	
	
	if(city.value == null || city.value == "0")
	{
		alert('please select city');  
		city.focus();
		return false;  	
	}
	else
	{
	    return true; 	
	}	
	
	
}  

function cityname(city)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(city.value.match(letters))  
	{  
		return true;  
	}
	else if(city.value == null || city.value == "")
	{
		alert('Cityname is required');  
		city.focus();
		return false;  	
	}
	else  
	{  
		alert('Cityname must have alphabet characters only');  
		city.focus();  
		return false;  
	}  

}  



function Designation(designation_name)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(designation_name.value.match(letters))  
	{  
		return true;  
	}
	else if(designation_name.value == null || designation_name.value == "")
	{
		alert('Designation name is required');  
		designation_name.focus();
		return false;  	
	}
	else  
	{  
		alert('Designation name must have alphabet characters only');  
		designation_name.focus();  
		return false;  
	}  

}  

function Issue(issue_name)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(issue_name.value.match(letters))  
	{  
		return true;  
	}
	else if(issue_name.value == null || issue_name.value == "")
	{
		alert('Issue name is required');  
		issue_name.focus();
		return false;  	
	}
	else  
	{  
		alert('Issue name must have alphabet characters only');  
		issue_name.focus();  
		return false;  
	}  

}  

function zipcodes(zipcode)  
{   	
	var letters = /^[0-9]+$/;  	
	if(zipcode.value.match(letters))  
	{  
		return true;  
	}
	else if(zipcode.value == null || zipcode.value == "")
	{
		alert('Zipcode is required');  
		zipcode.focus();
		return false;  	
	}
	else  
	{  
		alert('Zipcode must have Numeric characters only');  
		zipcode.focus();  
		return false;  
	}  

}  
