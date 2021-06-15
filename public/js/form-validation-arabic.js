$(document).ready(function () {
    custom_validation();
    $('#AlertMessage').delay(10000).fadeOut('slow');
});

function custom_validation() {
    var msg = "";
    var elements = document.getElementsByTagName("INPUT");

    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function (e) {
            if (!e.target.validity.valid) {
               
                switch (e.target.type) {
                    case 'text' :
                        e.target.setCustomValidity("الرجاء ملء هذا الحقل");
                        break;
                    case 'password' :
                        e.target.setCustomValidity("لا يمكن أن تكون كلمة المرور فارغة");
                        break;
                    case 'email' :
                        e.target.setCustomValidity("البريد الإلكتروني غير صحيحً");
                        break;
                    case 'select' :
                        e.target.setCustomValidity("dsfdsfsdf");
                        break;
                    case 'number' :

                        if (e.target.validity.rangeOverflow) {
                            e.target.setCustomValidity("الرجاء إدخال رقم أصغر من " + e.target.max);
                        } else if (e.target.validity.rangeUnderflow) {
                            e.target.setCustomValidity("الرجاء إدخال رقم اكبر من " + e.target.min);
                        } else {
                            e.target.setCustomValidity("الرجاء إدخال رقم");
                        }
                        break;
                    default :
                        e.target.setCustomValidity("الرجاء ملء هذا الحقل");
                        break;
                }
            }
        };
        elements[i].oninput = function (e) {
            e.target.setCustomValidity(msg);
        };
    }
    // var elements2 = document.getElementsByTagName("SELECT");
    //
    // for (var i = 0; i < elements2.length; i++) {
    //     elements2[i].oninvalid = function (e) {
    //         if (!e.target.validity.valid) {
    //             if (e.target.value == "" || e.target.value == 0) {
    //                 e.target.setCustomValidity("الرجاء إختيار خيار من القائمة");
    //             }
    //         }
    //     };
    //     elements2[i].oninput = function (e) {
    //         e.target.setCustomValidity(msg);
    //     };
    // }
}