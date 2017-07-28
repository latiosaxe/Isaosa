/* GLOBAL TC, $ */
TC.blog = (function(){
    var _$newStadium,
        _$showStadium
        
        ;
    var _init = function _init(){
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


        _$showStadium = $("#showPost");
        _$showStadium.submit(function(event){
            event.preventDefault();

            var active = 0;
            if( $("#active").is(':checked')){active = 1;}


            var id =  $(this).data('id'),
                data = {
                    title: $("#title").val(),
                    description: $("#description").val(),
                    body: $("#body").val(),
                    active: active
                };

            $.ajax({
                url: TC.control_url+'blog/'+id,
                data: data,
                type: 'put'
            }).success(function(){
                document.location.href = TC.control_url+'blog'
            }).error(function(){
                alert('Error al actualizar la nota');
            });
        });


    };

    return {
        init: function init(){
            _init();
        }
    }
})();
