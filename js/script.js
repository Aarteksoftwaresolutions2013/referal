function popup_display(){  $('.popup_container').show(500);}function lgSignup(){        $('.popup_container').hide(500);     $('.popup_container2').show(500); }function signupLg(){        $('.popup_container2').hide(500);    $('.popup_container').show(500);      }function forpass(){        $('.popup_container').hide(500);    $('.popup_container3').show(500);      }function popup_hide(){     $('.popup_container').hide(500);$('.popup_container2').hide(500);$('.popup_container3').hide(500);  }function popup_hide2(){     $('.popup_container3').hide(500); $('.popup_container').hide(500);$('.popup_container2').hide(500);  }function popup_hide1(){    $('.popup_container2').hide(500); $('.popup_container').hide(500);$('.popup_container3').hide(500);  }function popupSignup_display(){    $('.popup_container2').show(500);  }
function Referafriend(){
    $('.popup').fadeOut(100);
  $('.popup_container').fadeIn(500);
  $('.referafrieend').fadeIn(500);  
}  function checkEmail(str) {        if (str=="")        {        document.getElementById("emailError").innerHTML="";        return;        }         if (window.XMLHttpRequest)         {        xmlhttp=new XMLHttpRequest();        } else        {         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");        }        xmlhttp.onreadystatechange=function()        {        if (xmlhttp.readyState==4 && xmlhttp.status==200) {                    if(xmlhttp.responseText=="Already Exist"){                              document.getElementById("signup").disabled=true;               document.getElementById("emailError").innerHTML=xmlhttp.responseText;                         }            else{               document.getElementById("signup").disabled=false;                document.getElementById("emailError").innerHTML="";            }        }        }        xmlhttp.open("GET","ajaxValidation.php?q="+str,true);        xmlhttp.send();        }         function checkUser(str) {                if (str=="")                {                document.getElementById("userAlready").innerHTML="";                return;                }                 if (window.XMLHttpRequest)                 {                xmlhttp=new XMLHttpRequest();                } else                {                 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");                }            xmlhttp.onreadystatechange=function()            {                if (xmlhttp.readyState==4 && xmlhttp.status==200) {                    if(xmlhttp.responseText=="Already Exist"){                                              document.getElementById("signup").disabled=true;                       document.getElementById("userAlready").innerHTML=xmlhttp.responseText;                                         }                    else{                       document.getElementById("signup").disabled=false;                        document.getElementById("userAlready").innerHTML="";                    }                }            }        xmlhttp.open("GET","ajaxValidation.php?u="+str,true);        xmlhttp.send();        }  function checkEmailAvailable(str) {                     if (str=="")                {                document.getElementById("forPass").innerHTML="";                return;                }                 if (window.XMLHttpRequest)                 {                xmlhttp=new XMLHttpRequest();                } else                {                 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");                }            xmlhttp.onreadystatechange=function()            {                if (xmlhttp.readyState==4 && xmlhttp.status==200) {                    if(xmlhttp.responseText=="Email not registered yet"){                                              document.getElementById("frPass").disabled=true;                       document.getElementById("forPass").innerHTML=xmlhttp.responseText;                                         }                    else{                       document.getElementById("frPass").disabled=false;                        document.getElementById("forPass").innerHTML="";                    }                }            }        xmlhttp.open("GET","ajaxValidation.php?f="+str,true);        xmlhttp.send();        } function showScore(str) {      var text="Your current score is- ";                     if (str=="")                {                document.getElementById("scoreContainer").innerHTML="";                return;                }                 if (window.XMLHttpRequest)                 {                xmlhttp=new XMLHttpRequest();                } else                {                 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");                }            xmlhttp.onreadystatechange=function()            {                if (xmlhttp.readyState==4 && xmlhttp.status==200) {                                                               document.getElementById("scoreContainer").innerHTML=text+xmlhttp.responseText;                                                                            }            }        xmlhttp.open("GET","ajaxValidation.php?s="+str,true);        xmlhttp.send();        }         

