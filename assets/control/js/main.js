// GLOBAL: TC, $
TC.main = (function(){
    var _$redactor_text,
        _$newElement,
        _$showElement,
        formData
    ;
    var _init = function _init(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        _$redactor_text = $('.redactor-text');
        _$redactor_text.redactor();

        $(".image_url").on('change', function () {
            var file = $(this).val().split('.').pop();
            console.log(file);
            if(file=='png' || file=='jpg' || file=='PNG' || file=='JPG'){
                $(this).addClass('newImage');
            } else{
                $(this).val('');
                sweetAlert("Oops...", "El archivo no es valido, por favor intenta con un archivo PNG o JPG", "error");
            }
        });

        $(".file_url").on('change', function () {
            var file = $(this).val().split('.').pop();
            console.log(file);
            if(file=='pdf' || file=='PDF'){
                $(this).addClass('newFile');
            } else{
                $(this).val('');
                sweetAlert("Oops...", "El archivo no es valido, por favor intenta con un archivo PDF", "error");
            }
        });
    };

    var _createElement = function _createElement(array, url) {
        formData = new FormData();
        _$newElement = $("#newElement");
        _$newElement.submit(function(event){
            event.preventDefault();
            var slug =  $(this).data('slug');
            $.each(array, function (index, value) {
                if($("#"+value).is(':checkbox')){
                    if($("#"+value).is(":checked")){
                        formData.append(value, 1);
                    }else{
                        formData.append(value, 0);
                    }
                }else{
                    formData.append(value, $("#"+value).val());
                }
                if($("#"+value).hasClass('newImage')){
                    formData.append(value, $("#"+value)[0].files[0]);
                    console.log($("#"+value)[0].files[0])
                }
                if($("#"+value).hasClass('newFile')){
                    formData.append(value, $("#"+value)[0].files[0]);
                    console.log($("#"+value)[0].files[0])
                }
                if($("#"+value).hasClass('image_url')){
                    console.log(value);
                }else{
                }
            });

            if( $("#active").is(':checked') ){
                formData.append('active', 1);
            }else{
                formData.append('active', 0);
            }
            console.log(formData);
            $.ajax({
                url: TC.control_url + url,
                data: formData,
                type: 'post',
                dataType : 'JSON',
                contentType: false,
                processData: false
            }).success(function(data){
                console.log(data);
                document.location.href = TC.control_url + url
            }).error(function(data){
                console.log(data);
                // alert('Error al crear la nota');
            });
        });
    };
    var _editElement = function _createElement(array, url) {
        formData = new FormData();

        _$showElement = $("#showElement");
        _$showElement.submit(function(event){
            event.preventDefault();
            var slug =  $(this).data('slug');
            if (slug == null){
                var slug =  $(this).data('id');
            }
            $.each(array, function (index, value) {
                if($("#"+value).is(':checkbox')){
                    if($("#"+value).is(":checked")){
                        formData.append(value, 1);
                    }else{
                        formData.append(value, 0);
                    }
                }else{
                    formData.append(value, $("#"+value).val());
                }
                if($("#"+value).hasClass('newImage')){
                    formData.append(value, $("#"+value)[0].files[0]);
                    console.log($("#"+value)[0].files[0])
                }

                if($("#"+value).hasClass('newFile')){
                    formData.append(value, $("#"+value)[0].files[0]);
                    console.log($("#"+value)[0].files[0])
                }
                if($("#"+value).hasClass('image_url')){
                    console.log(value);
                }else{
                }
            });

            if( $("#active").is(':checked') ){
                formData.append('active', 1);
            }else{
                formData.append('active', 0);
            }

            console.log(TC.control_url + url+'Update/'+slug);
            $.ajax({
                url: TC.control_url + url+'Update/'+slug,
                data: formData,
                type: 'post',
                dataType : 'JSON',
                contentType: false,
                processData: false
            }).success(function(data){
                console.log(data);
                document.location.href = TC.control_url + url;
            }).error(function(data){
                console.log(data);
            });
        });
    };

    return {
        init: function init(){
            _init();
        },
        create: function init(array, url){
            _createElement(array, url);
        },
        edit: function init(array, url){
            _editElement(array, url);
        }
    }
})();
