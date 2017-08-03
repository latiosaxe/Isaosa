/* GLOBAL TC, $ */
TC.blog = (function(){
    var _$newStadium,
        _$showPost,
        formData
        ;

    var _init = function _init(){
        formData = new FormData();


        _$newStadium = $("#newPost");
        _$newStadium.submit(function(event){
            event.preventDefault();
            var data = {
                title: $("#title").val(),
                description: $("#description").val(),
                body: $("#body").val(),
                image: $("#image").val()
            };
            $.ajax({
                url: TC.control_url+'blog',
                data: data,
                type: 'post'
            }).success(function(){
                document.location.href = TC.control_url+'blog'
            }).error(function(data){
                console.log(data);
               // alert('Error al crear la nota');
            });
        });


        _$showPost = $("#showPost");
        _$showPost.submit(function(event){
            event.preventDefault();
            var active = 0;
            if( $("#active").is(':checked')){active = 1;}


            var id =  $(this).data('id');
            var newImage =  $(this).data('img');

            formData.append("title", noValue( $("#title").val() ) );
            formData.append("description", noValue( $("#description").val() ) );
            formData.append("body", noValue( $("#body").val() ) );
            formData.append("active", active );

            if(newImage == 1){
                formData.append("new_image", 1 );
                appendIfFile('image');
            }

            console.info(formData);

            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

            var request = new XMLHttpRequest();
            request.addEventListener("load", reqListener);
            request.open("post", TC.control_url+'blogImage/'+id);
            request.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
            request.send(formData);

            // $.ajax({
            //     url: TC.control_url+'blogImage/'+id,
            //     data: formData,
            //     type: 'post',
            //     processData: false,
            //     contentType: false
            // }).success(function(){
            //     // document.location.href = TC.control_url+'blog'
            // }).error(function(){
            //     alert('Error al actualizar la nota');
            // });
        });

        $(".newImage").on('change', function () {
            _$showPost.data('img', 1);
            console.log("Nueva imagen");
        });

        function reqListener () {
            console.log(this.responseText);
            var response = JSON.parse(this.responseText);
            console.log(response);
            if(response.status == 'ok'){
                document.location.href = TC.control_url+'blog';
            }else{
                alert('Error al actualizar la nota');
            }
        }


        $(".fakeFileInput .text").on('click', function () {
            var input = $(this).closest('.fakeFileInput').find('.hidden');
            input.trigger('click');
        });
        $(".fakeFileInput input").on('change', function () {
            var file = $(this).val().split('.').pop();
            console.log(file);
            if(file=='png' || file=='jpg' || file=='PNG' || file=='JPG'){
                console.log('Si se permite');
                $(this).closest('.fakeFileInput').find('p').remove();
                $(this).closest('.fakeFileInput').append('<p>'+ $(this).val().split(/(\\|\/)/g).pop() +'</p>');
            } else{
                sweetAlert("Oops...", "El archivo no es valido, por favor intenta con un archivo PNG o JPG", "error");
            }
        });

        function appendIfFile(file_id ) {
            var file = document.querySelector('#' + file_id).files[0];
            console.log(file);
            if (typeof file === 'undefined' || !file) {
                console.log("No hay " + file_id );
            }else{
                var ext = file.name.split('.').pop();
                if(ext=="pdf" || ext=="docx" || ext=="doc" || ext=='png' || ext=='jpg'){
                    console.info(file_id, file);
                    formData.append(file_id, file);
                    console.log("Si", ext);
                    return true;
                } else{
                    formData.append(file_id, 'Sin archivo');
                    console.log("No", ext);
                    return false;
                }
            }
        }

        function noValue(input){
            if(input.length == 0){
                return 'Sin valor'
            }else{
                return input;
            }
        }
    };

    return {
        init: function init(){
            _init();
        }
    }
})();
