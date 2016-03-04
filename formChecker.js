function isValid()
{
	var item1 = document.getElementById("i1").value;
	var item2 = document.getElementById("i2").value;
	var item3 = document.getElementById("i3").value;

	var username = document.getElementById("un").value;
	var password = document.getElementById("pw").value;

	var shipOption = document.getElementsByName("shipping");
	
	var valid = true;

	if(item1 == "" || item2 == "" || item3 == "")
	{
		alert("All item quantities must have a numeric value");
		valid = false;
	}
	else if(item1 < 0 || item2 < 0 || item3 < 0)
	{
		alert("Item quantities may not be negative");
		valid = false;
	}
	else if(password == "")
	{
		alert("A password is required");
		valid = false;
	}
	else if(!username.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
	{
		alert("The username must be an email");
		valid = false;
	}
	else
	{
		var shipChecked = false;

		for(var i = 0; i < shipOption.length; i++)
		{
			if(shipOption[i].checked)
			{
				shipChecked=true;
				break;
			}
		}

		if(!shipChecked)
		{
			valid = false;
			alert("A shipping option must be selected");
		}
	}

	return valid;
}