
       

  function session(){
    var status = $("#status").html();
    status.toString();


    if (status == "You are logged in!"){
        document.getElementById("join").style.display= "none";
        document.getElementById("account").style.display= "block";
    
    } else if(status =="Log in now!"){
        document.getElementById("join").style.display= "block";
        document.getElementById("account").style.display= "none";

    }
    
  }

  session();
