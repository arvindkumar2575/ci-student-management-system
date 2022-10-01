let common = {};
let validation = {};

common.ajaxCall = (url,type,data,onSucces,onError,onComplete)=>{
    let r = {}
    r.url = url
    r.type = type
    r.dataType = "json"
    r.data = data
    r.success = onSucces
    r.error = onError
    r.complete = onComplete

    $.ajax(r)
}






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