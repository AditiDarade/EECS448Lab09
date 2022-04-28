function FormCheckerFunction() 
{
//Validates the input from the customer before submitting
//Quantities cannot be blank or negative (zero is fine)
//Username must be in the form of an email address (name@domain.com)
//password field cannot be blank
//We do not have a database to check against, so the password can be anything
//They must pick a shipping option

  //check for user name
  let msg="";
  var userName= document.getElementById("userID").value;
  if(userName=="")
  {
    msg=msg+" please enter User name. \n";
  }
  else
  {
    let result = userName.includes("@");
    if(!result)
    {
      msg=msg+" please enter User name as emailId. \n";
    }
  }
  //console.log(msg);
  //make sure password is not blank
  var UserPassword= document.getElementById("UserPassword").value;
  if(UserPassword=="")
  {
    msg=msg+" please enter Password. \n";
  }
  //make sure shipping option is selected
  var checked_shipM = document.querySelector('input[name = "shipM"]:checked');
  if(checked_shipM == null)
    {  //Alert, nothing was checked.
      msg=msg+" please select shipping option. \n";
    } 
  //make sure need to select at least three items of different prices
  var checkboxItems = document.querySelectorAll('input[type="checkbox"]:checked');
  if(checkboxItems.length<3)
  {
    msg=msg+" please select at least three items of different prices. \n";
  }

  //make sure quantity is not blank or negative
    for(var x=0; x<checkboxItems.length; x++)
    {
      let cbId=checkboxItems[x].id;
      cbId=cbId.replace('itemCost','');
      let itemQtyId="itemQty"+cbId;
      console.log(cbId);
      console.log(itemQtyId);
      var itemQty= document.getElementById(itemQtyId).value;
      if(itemQty==null || itemQty=="")
      {
        msg=msg+" please enter selected Item quantity. \n";
      }
      console.log(itemQty);
    }
    if(msg!="")
    {
      alert(msg);
      return false; // don't submit the form
    }
    else
    {
      return true; // submit the form
    }
    
  }