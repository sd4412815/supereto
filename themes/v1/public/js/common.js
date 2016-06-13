/**
 * Created by yuan on 16-6-13.
 */
function check_mobile(mobile) {
    var re = /^1\d{10}/;
    if(re.test(mobile)){
        return true;
    }else{
        return false;
    }
}