/* GLOBAL TC, $ */
TC.services = (function(){
    var _$newStadium,
        _$showStadium
        
        ;
    var _init = function _init(){
        _$newStadium = $("#newService");

        _$newStadium.submit(function(event){
            event.preventDefault();

            var data = {
                    name: $("#name").val(),
                    description: $("#description").val(),
                    body: $("#body").val(),
                    category_id: $("#category_id").val()
                };
            $.ajax({
                url: TC.control_url+'servicios',
                data: data,
                type: 'post'
            }).success(function(){
                document.location.href = TC.control_url+'servicios'
            }).error(function(data){
                // console.log(data);
               alert('Error al crear el servicio');
            });
        });


        _$showStadium = $("#showService");
        _$showStadium.submit(function(event){
            event.preventDefault();

            var active = 0;
            if( $("#active").is(':checked')){active = 1;}


            var id =  $(this).data('id'),
                data = {
                    name: $("#name").val(),
                    description: $("#description").val(),
                    body: $("#body").val(),
                    category_id: $("#category_id").val(),
                    active: active
                };

            $.ajax({
                url: TC.control_url+'servicios/'+id,
                data: data,
                type: 'put'
            }).success(function(){
                document.location.href = TC.control_url+'servicios'
            }).error(function(){
                alert('Error al actualizar el servicio');
            });
        });


    };

    return {
        init: function init(){
            _init();
        }
    }
})();
