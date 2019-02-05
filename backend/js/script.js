function validVote(){
     var ck_name = /^[A-Za-z ]{3,20}$/;
     var  myRegExp = new RegExp(/\d{5}-\d{7}-\d/);
     var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i 
	 var voter_name = $('#voter_name').val();
   var email = $('#email').val();
	 var voter_father_name = $('#voter_father_name').val();
	 var voter_nic = $('#voter_nic').val();
	 var location_id = $('#location_id').val();

	 if(voter_name ==''){
       alert("Plase enter voter name");
       return false;
	 }else if (!ck_name.test(voter_name)) {
     alert("Plase enter valid  voter name");
       return false;
     }

     if(voter_father_name ==''){
       alert("Plase enter voter father name");
       return false;
	 }else if (!ck_name.test(voter_father_name)) {
     alert("Plase enter valid  voter father name");
       return false;
     }

     if(email ==''){
       alert("Plase enter voter email");
       return false;
   }else if (!ck_email.test(email)) {
     alert("Plase enter valid  voter email");
       return false;
     }

     if(voter_nic ==''){
       alert("Plase enter voter cnic number");
       return false;
	 }else if (!myRegExp.test(voter_nic)) {
     alert("Plase enter valid  voter voter cnic number");
       return false;
     }

     if(location_id ==''){
       alert("Plase enter voter location ");
       return false;
	 }


}

function validLocation(){
	 var ck_name = /^[A-Za-z ]{3,20}$/;
	var  location_name = $('#location_name').val();
	if(location_name ==''){
       alert("Plase enter  location name ");
       return false;
	 }else if (!ck_name.test(location_name)) {
     alert("Plase enter valid   location name ");
       return false;
     }
}

function valid_Na_pa(){
	 var ck_name = /^[A-Za-z0-9 ]{3,20}$/;
	var  na_pa_name = $('#na_pa_name').val();
	if(na_pa_name ==''){
       alert("Plase enter  NA/PA ");
       return false;
	 }else if (!ck_name.test(na_pa_name)) {
     alert("Plase enter valid   NA/PA ");
       return false;
     }
}

function condidate(){
  
     var ck_name = /^[A-Za-z ]{3,20}$/;
	 var condit_name = $('#condit_name').val();
	 var sign_id = $('#sign_id').val();
	 var locationid = $('#locationid').val();
	 var na_pa_id = $('#na_pa_id').val();

	 if(condit_name ==''){
       alert("Plase enter condidate name");
       return false;
	 }else if (!ck_name.test(condit_name)) {
     alert("Plase enter valid  condidate name");
       return false;
     }

     if(sign_id ==''){
       alert("Plase select sign");
       return false;
	 }
     

     if(locationid ==''){
       alert("Plase select  location ");
       return false;
	 }

     if(na_pa_id ==''){
       alert("Plase select NA/PA");
       return false;
	 }

}


