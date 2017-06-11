

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
				if(uniqueaddemail())
			    {									
					if(username(uname)) 
					{					
						if(uniqueadduser())
						{
							if(passid_validation(password,5,12))  
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
				if(uniqueeditemail())
			    {									
					if(username(uname)) 
					{					
						if(uniqueedituser())
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

function userform()
{
	var uname = document.edituserform.username;
	var email = document.edituserform.email;
	var password = document.edituserform.password;
	var conpass = document.edituserform.cpassword;
	var profile = document.edituserform.profile;	
	var fname = document.edituserform.firstname;
	var lname = document.edituserform.lastname;
	var umsex   = document.edituserform.msex;
	var ufsex   = document.edituserform.fsex;
	var dayy = document.edituserform.birth_date;
	var rel = document.edituserform.religion;
	var moth = document.edituserform.mothertongue;
	var liv = document.edituserform.livingin;
	var address1 = document.edituserform.address1;
	var contact_no = document.edituserform.contact_no;
			
	if(username(uname)) 
	{
		if(uniqueadduser())
		{
			if(ValidateEmail(email))  
			{
				if(uniqueaddemail())
			    {										 
					if(passid_validation(password,5,12))  
					{ 
						if(confirmPass(conpass)) 
						{
							if(Profile(profile)) 
							{
								if(allLetter(fname)) 
								{	
									if(lastname(lname)) 
									{
										if(validsex(umsex,ufsex))
										{																		
											if(ValidateDate(dayy)) 
											{
												if(Religion(rel)) 
												{
													if(Mother(moth)) 
													{
														if(Living(liv)) 
														{																
															if(Address1(address1)) 
															{
																if(Contactno(contact_no))
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

function editusermanageform()
{
	var uname = document.edituserform.username;
	var email = document.edituserform.email;
	var password = document.edituserform.password;
	var conpass = document.edituserform.cpassword;
	var profile = document.edituserform.profile;	
	var fname = document.edituserform.firstname;
	var lname = document.edituserform.lastname;
	var umsex   = document.edituserform.msex;
	var ufsex   = document.edituserform.fsex;
	var dayy = document.edituserform.birth_date;
	var rel = document.edituserform.religion;
	var moth = document.edituserform.mothertongue;
	var liv = document.edituserform.livingin;
	var address1 = document.edituserform.address1;
	var contact_no = document.edituserform.contact_no;
			
	if(username(uname)) 
	{
		if(ValidateEmail(email))  
		{				 
			if(passid_editvalidation(password,5,12))  
			{ 
				if(confirmPass(conpass)) 
				{
					if(Profile(profile)) 
					{
						if(allLetter(fname)) 
						{	
							if(lastname(lname)) 
							{
								if(validsex(umsex,ufsex))
								{																		
									if(ValidateDate(dayy)) 
									{
										if(Religion(rel)) 
										{
											if(Mother(moth)) 
											{
												if(Living(liv)) 
												{
																
													if(Address1(address1)) 
													{
														if(Contactno(contact_no))
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
						}		
					}	
				}						
			}								
			
		}
	}
	return false;
} 

function profileform()
{
	var fname = document.editprofileform.firstname;
	var lname = document.editprofileform.lastname;
	var email = document.editprofileform.email; 
	var uname = document.editprofileform.username;
	var password = document.editprofileform.password;
	var conpass = document.editprofileform.cpassword;
		
	if(allLetter(fname)) 
	{
		if(lastname(lname)) 
		{
			if(ValidateEmail(email))  
			{
				if(username(uname)) 
				{
					if(passprofileid_validation(password,5,12))  
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


function uniqueedituser()
{
var uname = document.getElementById('username').value;
var id = document.getElementById('edit_hidden_id').value;

	var check = '';
		$.ajax({
		type:"post",
		async:false,
		url:"../checkedituser",
		data:"username="+uname+'&id='+id,
		success:function(data){
								if(data==0)
								
										{																						
											check = 1;
										}
										else
										{											
											check = 0; 
										}
							  }
			   });			   
	if(check)
	return true;
	else
	alert("Username Already Exist");
	return false;
}

function uniqueeditemail()
{
var email = document.getElementById('email').value;
var id = document.getElementById('edit_hidden_id').value;

	var check = '';
		$.ajax({
		type:"post",
		async:false,
		url:"../checkeditemail",
		data:"email="+email+'&id='+id,
		success:function(data){
								if(data==0)
								
										{																						
											check = 1;
										}
										else
										{											
											check = 0; 
										}
							  }
			   });			   
	if(check)
	return true;
	else
	alert('Email Already Exist');
	return false;
}

function uniqueadduser()
{
	var uname = document.getElementById('username').value;
//var id = document.getElementById('edit_hidden_id').value;
  //  var strurl = "http://localhost/codeIgniter/admin/adminmanagment/checkadduser" 
    var strurl = window.location.protocol+"//"+window.location.host+"/codeIgniter/admin/adminmanagment/checkadduser";

	var check = '';
		$.ajax({
		type:"post",
		async:false,
		url:strurl,
		data:"username="+uname,
		success:function(data){
								if(data==0)
								
										{																						
											check = 1;
										}
										else
										{											
											check = 0; 
										}
							  }
			   });			   
	if(check)
	return true;
	else
	alert("Username Already Exist");
	return false;
}

function uniqueaddemail()
{
var email = document.getElementById('email').value;
//var id = document.getElementById('edit_hidden_id').value;
  //  var strurl = "http://localhost/codeIgniter/admin/adminmanagment/checkaddemail"     
    var strurl = window.location.protocol+"//"+window.location.host+"/codeIgniter/admin/adminmanagment/checkaddemail";
	var check = '';
		$.ajax({
		type:"post",
		async:false,
		url: strurl,
		data:"email="+email,
		success:function(data){
								if(data==0)								
										{																						
											check = 1;
										}
										else
										{											
											check = 0; 
										}
							  }
			   });			   
	if(check)
	return true;
	else
	alert('Email Already Exist');
	return false;
}

function mothertongueform()
{
	var mothertongue_name = document.mothertonguemanageform.mothertongue_name;
			
	if(Mothers(mothertongue_name)) 
	{
		return true;																						
	}
	return false;
} 

function religionform()
{
	var religion_name = document.religionmanageform.religion_name;
			
	if(Religions(religion_name)) 
	{
		return true;																						
	}
	return false;
}

	function casteform()
	{
		var relli = document.castemanageform.religion_name ;
		var caste_name = document.castemanageform.caste_name ;
				
		if(Reli(relli)) 
		{
			if(Castes(caste_name))
			{
				return true;
			}																							
		}
		return false;
	}

function validsex(umsex,ufsex)  
{  
	x=0;  
	  
	if(umsex.checked)   
	{  
		x++;  
	} 
	if(ufsex.checked)  
	{  
		x++;   
	}  
	if(x==0)  
	{  
	alert('Select Male/Female');  
	umsex.focus();  
	return false;  
	}  
	else  
	{  
	
	return true;
	}  
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
		alert('Address is required');  
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

function passid_editvalidation(password,mx,my)  
{
	var passid_len = password.value.length;  
	if (passid_len == 0)  
	{  
		return true;  
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

function passprofileid_validation(password,mx,my)  
{
	var passid_len = password.value.length;  
	if (passid_len == 0)  
	{  
		return true;
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
	var dateformat = /^(0[1-9]|[12][0-9]|3[01])[\- \/.](?:(0[1-9]|1[012 hjhj  ])[\- \/.](19|20)[0-9]{2})$/ ;
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

function Reli(relli)  
{   
	
	var letters = /^([0-9]|[a-z])+([0-9a-z]+)$/i;  	
	if(relli.value.match(letters))  
	{  
		  return true;
	}
	else if(relli.value == null || relli.value == "0")
	{
		alert('please select Religion');  
		relli.focus();
		return false;  	
	}
	else
	{
		return true;
	}	
	
		
}



function Religion(rel)  
{   
	var letters = /^[a-zA-Z ]+$/;  	
	if(rel.value.match(letters))  
	{  
		return true;  
	}
	else if(rel.value == null || rel.value == "0")
	{
		alert('please select Religion');  
		rel.focus();
		return false;  	
	}	
	
		
}

function Mother(moth)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(moth.value.match(letters))  
	{  
		return true;  
	}
	else if(moth.value == null || moth.value == "0")
	{
		alert('please select Mother Tongue');  
		moth.focus();
		return false;  	
	}
		
}

function Living(liv)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(liv.value.match(letters))  
	{  
		return true;  
	}
	else if(liv.value == null || liv.value == "0")
	{
		alert('please select Where You Living ');  
		liv.focus();
		return false;  	
	}
			
} 

function Profile(profile)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(profile.value.match(letters))  
	{  
		return true;  
	}
	else if(profile.value == null || profile.value == "0")
	{
		alert('please select Profile ');  
		profile.focus();
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

function Castes(caste)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(caste.value.match(letters))  
	{  
		return true;  
	}
	else if(caste.value == null || caste.value == "")
	{
		alert('Castename is required');  
		caste.focus();
		return false;  	
	}
	else  
	{  
		alert('Castename must have alphabet characters only');  
		caste.focus();  
		return false;  
	}  

}  



function Mothers(mothertongue_name)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(mothertongue_name.value.match(letters))  
	{  
		return true;  
	}
	else if(mothertongue_name.value == null || mothertongue_name.value == "")
	{
		alert('Mothertongue name is required');  
		mothertongue_name.focus();
		return false;  	
	}
	else  
	{  
		alert('Mothertongue name must have alphabet characters only');  
		mothertongue_name.focus();  
		return false;  
	}  

}  

function Religions(religion_name)  
{   	
	var letters = /^[a-zA-Z ]+$/;  	
	if(religion_name.value.match(letters))  
	{  
		return true;  
	}
	else if(religion_name.value == null || religion_name.value == "")
	{
		alert('Religion Name is required');  
		religion_name.focus();
		return false;  	
	}
	else  
	{  
		alert('Religion Name must have alphabet characters only');  
		religion_name.focus();  
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

function Zender(zen)  
{   	
	var letters = /^[0-9]+$/;  	
	if(zen.value.match(letters))  
	{  
		return true;  
	}
	else if(zen.value == null || zen.value == "")
	{
		alert('Please Choose Zender');  
		zen.focus();
		return false;  	
	}
	else  
	{  
		alert('Zender must have Numeric characters only');  
		zen.focus();  
		return false;  
	}  

}  

function Contactno(contact_no)  
{   	
	var letters = /^[0-9]+$/;  	
	if(contact_no.value.match(letters))  
	{  
		return true;  
	}
	else if(contact_no.value == null || contact_no.value == "")
	{
		alert('Contact No is required');  
		contact_no.focus();
		return false;  	
	}
	else  
	{  
		alert('Contact must have Numeric characters only');  
		contact_no.focus();  
		return false;  
	}  

}  
