
// console.log("arvind")
let currentURL = window.location.href

$("#form-login").submit(function(e){
    e.preventDefault();
    let url = manageURL_API+'/loginAuth'
    let data = {}
    data.username = $(this).find("input[name=email]").val();
    data.password = $(this).find("input[name=password]").val();
    data.form_type = $(this).find("input[name=form_type]").val();
    data.remember = $(this).find("input[name=remember]").is(':checked');
    let emailValidator = validation.email(data.username);
    let passwordValidator = validation.password(data.password);
    if(emailValidator && passwordValidator){
        common.ajaxCall(url,"GET",data,(res)=>{
            if(res.status){
                window.location.href=currentURL+"/"+res.id+"/dashboard"
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
    data.form_type = $(this).find("input[name=form_type]").val();
    data.gender_id = $(this).find("select[name=gender_id]").val();
    data.user_type = $(this).find("select[name=user_type]").val();
    data.details = JSON.stringify(data);
    let firstNameValidator = validation.text(data.first_name,2)
    let lastNameValidator = validation.text(data.last_name,2)
    let emailValidator = validation.email(data.email)
    let passwordValidator = validation.password(data.password)
    let genderIdValidator = validation.isNumber(data.gender_id)
    let userTypeValidator = validation.isNumber(data.user_type)
    console.log(data)
    if(firstNameValidator && lastNameValidator && emailValidator && passwordValidator && genderIdValidator && userTypeValidator){
        common.ajaxCall(url,"POST",data,(res)=>{
            if(res.status){
                window.location.href=manageURL
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
    data.form_type = $(this).find("input[name=form_type]").val();
    let emailValidator = validation.email(data.email);
    console.log(url)
    console.log(data)
    if(emailValidator && passwordValidator){
        
    }
});

