!function(a){function b(a){var b="method"in a?a.method:"get",c="queryURL"in a?a.queryURL:"",d="data"in a?a.data:"",e="success"in a?a.success:function(a){console.log("Successfully completed AJAX request.")},f="error"in a?a.error:function(a){console.log("Error during AJAX request.")},g=new XMLHttpRequest;g.onreadystatechange=function(){4===g.readyState&&(200===g.status?e(g.responseText,g.status):f(g.responseText,g.status))},"post"==b.toLowerCase()?(g.open(b,c,!0),g.setRequestHeader("Content-type","application/x-www-form-urlencoded"),g.send(d)):(g.open(b,c+(""==d?"":"?"+d),!0),g.send(null))}function c(a,b){var c=document.querySelector(".wrap"),d=document.createElement("div");"success"==a?d.className="updated notice is-dismissible":(a="error")?d.className="error notice is-dismissible":d.className="update-nag notice",d.innerHTML="<p>"+b+"</p>",c.insertBefore(d,c.firstElementChild.nextSibling)}a.PCF_FieldGroup=function(a){var b=function(a){var b=this,c="parentID"in a?a.parentID:null,d="childrenIDs"in a?a.childrenIDs:null;if(b.updateLogic="updateLogic"in a?a.updateLogic:function(a){a.toggleChildren()},b.updateEvent="updateEvent"in a?a.updateEvent:"click",b.el={},b.el.parent=document.getElementById(c),b.el.children=[],!b.el.parent)return!1;var e=null;d.forEach(function(a){e=document.getElementById(a).parentNode.parentNode;for(var c=0;c<e.children.length;c++)e.children[c].classList.add("pcf-child");b.el.children.push(e)}),b.el.parent&&b.el.parent.addEventListener(b.updateEvent,function(a){b.updateChildren()}),b.updateChildren()};return b.prototype.updateChildren=function(){var a=this;a.updateLogic(a)},b.prototype.toggleChildren=function(){this.el.children.forEach(function(a){a.classList.toggle("hidden")})},b.prototype.showChildren=function(){this.el.children.forEach(function(a){a.classList.remove("hidden")})},b.prototype.hideChildren=function(){this.el.children.forEach(function(a){a.classList.add("hidden")})},b}(),new PCF_FieldGroup({parentID:"pcf_reCaptcha_status",childrenIDs:["pcf_reCaptcha_site_key","pcf_reCaptcha_secret_key"],updateEvent:"change",updateLogic:function(a){"enabled"==a.el.parent.querySelector(":checked").value?a.showChildren():a.hideChildren()}}),new PCF_FieldGroup({parentID:"pcf_field_name_status_customize",childrenIDs:["pcf_field_name_required","pcf_field_name_placeholder"]}),new PCF_FieldGroup({parentID:"pcf_field_email_status_customize",childrenIDs:["pcf_field_email_required","pcf_field_email_placeholder"]}),new PCF_FieldGroup({parentID:"pcf_field_phone_status_customize",childrenIDs:["pcf_field_phone_required","pcf_field_phone_placeholder"]});var d=document.getElementById("send_test_email");if(d){var e=d.textContent;d.addEventListener("click",function(a){a.preventDefault(),d.classList.add("disabled"),d.textContent="Sending...",b({method:"get",queryURL:a.target.href.replace("options-general","admin-ajax")+"_ajax",success:function(a){d.classList.remove("disabled"),d.textContent=e,JSON.parse(a).success?c("success","Your test email has been successfully sent. Please check and make sure that you recieved it."):c("error","Oops, something went wrong and the email wasn't sent. Please check your server's email configuration. If you are running on localhost, please make sure that you have an email client installed.")},error:function(a){d.classList.remove("disabled"),d.textContent=e,c("error","Oops, something went wrong and we can't connect to the server. Please wait a moment and try reloading.")}})})}}(window);