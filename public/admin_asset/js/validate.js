$().ready(function() {
    $("#validateForm").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "name":{
                required: true,
                minlength: 5,
                maxlength: 100,
            },
            "category_id":{ required: true, },
            
            // "area":{ number: true, },
            // "password": {
            //     required: true,
            //     minlength: 8
            // },
            // "re-password": {
            //     equalTo: "#password",
            //     minlength: 8
                
            // }

            
        },
        messages: {
            "name": {
                required: "Không được để trống",
                minlength: "chiều dài từ 5 - 100 ký tự",
                maxlength: "chiều dài từ 5 - 100 ký tự",
            },
            "category_id": {
                required: "Không được để trống",
            },
            
            // "area": {
            //     number: "Nhập số 88 / 8.8",
            // },
            // "password": {
            //     required: "Bắt buộc nhập password",
            //     minlength: "Hãy nhập ít nhất 8 ký tự"
            // },
            // "re-password": {
            //     equalTo: "Hai password phải giống nhau",
            //     minlength: "Hãy nhập ít nhất 8 ký tự"
            // }
            
            
        }
    });
});