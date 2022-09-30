let common = {};

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