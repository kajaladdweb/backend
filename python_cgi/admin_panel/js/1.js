
        function validation()
        {
             
             var name=document.getElementById("name").value;
             var email=document.getElementById("email").value;
             var password=document.getElementById("password").value;
             var mobile=document.getElementById("mobile").value;
             var confirm_pwd=document.getElementById("confirm_pwd").value;

             var reg= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

           

            {
                if(name=="")
                {
                    document.getElementById('nm').innerHTML="** Please fill the name";
                    return false;
                }
                if(!isNaN(name))
                {
                    document.getElementById('nm').innerHTML="** Integer are not allowed";
                    return false;
                }

                if((name.length<5) ||(name.length>10)){
                    document.getElementById('nm').innerHTML="** Please fill the Valid length";
                    return false;
                } 

                if(email==""){
                    document.getElementById('em').innerHTML="** Please fill the Email Id";
                    return false;
                } 
                if(!email.match(reg))
                {
                  document.getElementById('em').innerHTML="** Please fill the valid Email Id";
                  return false;
                }

                if(password==""){
                    document.getElementById('pwd').innerHTML="** Please fill the password";
                    return false;
                } 
                if((password.length<3) ||(password.length>10)){
                    document.getElementById('pwd').innerHTML="** Please fill the Valid length betwwn 5 to 10";
                    return false;
                } 

             
                if(confirm_pwd==""){
                    document.getElementById('cn_pwd').innerHTML="** Please fill the password";
                    return false;
                } 

               
             
                if(password!=confirm_pwd)
                {
                    document.getElementById('cn_pwd').innerHTML="** password not match";
                }

                if(mobile=="")
                {
                    document.getElementById('mob').innerHTML="** Please fill the name";
                    return false;
                }
                if(isNaN(mobile))
                {
                    document.getElementById('mob').innerHTML="** Strings are not allowed";
                    return false;
                }

                if(mobile.length!=10){
                    document.getElementById('mob').innerHTML="** Please fill the Valid length";
                    return false;
                } 

            }


        }
