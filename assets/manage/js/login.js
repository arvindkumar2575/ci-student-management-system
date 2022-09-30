let validation = {};
validation.email = (email)=>{
    var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(email==null && email==undefined){
        return false;
    }else if(email.match(emailRegex)){
        return true;
    }else{
        return false;
    }
}
validation.password = (password)=>{
    if(password==null && password==undefined){
        return false;
    }else if(password.length>8 && password.length<20){
        return true;
    }else{
        return false;
    }
},
validation.text = (text,len=null)=>{
    if(text==null && text==undefined){
        return false;
    }else if(text!="" && text.length>=len){
        return true;
    }else{
        return false;
    }
}

// console.log("arvind")
let currentURL = window.location.href

$("#form-login").submit(function(e){
    e.preventDefault();
    let url = manageURL_API+'/loginAuth'
    let data = {}
    data.username = $(this).find("input[name=email]").val();
    data.password = $(this).find("input[name=password]").val();
    data.form_type = $(this).find("input[name=form-type]").val();
    let emailValidator = validation.email(data.username);
    let passwordValidator = validation.password(data.password);
    if(emailValidator && passwordValidator){
        common.ajaxCall(url,"GET",data,(res)=>{
            if(res.status){
                window.location.href=currentURL+"/user/dashboard"
            }
        },(err)=>{
            console.log(err)
        })
    }
});

$("#form-signup").submit(function(e){
    e.preventDefault();
    let url = manageURL_API+'/loginAuth'
    let data = {}
    data.first_name = $(this).find("input[name=first_name]").val();
    data.last_name = $(this).find("input[name=last_name]").val();
    data.email = $(this).find("input[name=email]").val();
    data.password = $(this).find("input[name=password]").val();
    data.form_type = $(this).find("input[name=form-type]").val();
    let firstNameValidator = validation.text(data.first_name,2)
    let lastNameValidator = validation.text(data.last_name,2)
    let emailValidator = validation.email(data.email)
    let passwordValidator = validation.password(data.password)
    console.log(data)
    if(firstNameValidator && lastNameValidator && emailValidator && passwordValidator){
        common.ajaxCall(url,"POST",data,(res)=>{
            if(res.status){
                alert("signup")
                //window.location.href=currentURL+"/user/dashboard"
            }
        },(err)=>{
            console.log(err)
        })
    }
});

$("#form-forget-password").submit(function(e){
    e.preventDefault();
    let form =$(this);
    let url =form.attr('action')
    let data = {}
    data.email = $(this).find("input[name=email]").val();
    data.form_type = $(this).find("input[name=form-type]").val();
    let emailValidator = validation.email(data.email);
    console.log(url)
    console.log(data)
    if(emailValidator && passwordValidator){
        
    }
});

