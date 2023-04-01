function sendData(reg) {
			const mname = formData.mname.value;
			const lname = formData.lname.value;
			const  uname = formData.uname.value;
			const pass  = formData.pass.value;


			if (mname === "" || lname === ""||uname=== ""||pass=== "") {
				alert("Please fill up the form properly alart reg");
				document.getElementById("message2").innerHTML = "Please fill up the form properly"
				return false;
			}
return true;
			
			//document.getElementById("f1").reset();
		}