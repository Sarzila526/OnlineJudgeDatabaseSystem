function getData() 
{
	const  uname = fomData.uname.value;
	const pass  = fomData.pass.value;

			if (uname=== "" || pass === "") 
			{
				alert("Please fill up the form properly alart lgn");
				document.getElementById("msg1").innerHTML = "Please fill up the form properly";
				return false;
			}

	return true;

}