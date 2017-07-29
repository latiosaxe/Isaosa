/* GLOBAL TC, $ */
TC.products = (function(){
    var _$newStadium,
        _$showStadium
        
        ;
    var _init = function _init(){
        _$newStadium = $("#newProducts");

        _$newStadium.submit(function(event){
            event.preventDefault();

            var data = {
                    name: $("#name").val(),
                    formula: $("#formula").val(),
                    description: $("#description").val(),
                    body: $("#body").val(),
                    characteristics: $("#characteristics").val(),
                    parentcategory_id: $("#category_id").val(),
                };
            $.ajax({
                url: TC.control_url+'categorias',
                data: data,
                type: 'post'
            }).success(function(){
                document.location.href = TC.control_url+'categorias'
            }).error(function(data){
                console.log(data);
               // alert('Error al crear la nota');
            });
        });


        _$showStadium = $("#showProducts");
        _$showStadium.submit(function(event){
            event.preventDefault();

            var active = 0;
            if( $("#active").is(':checked')){active = 1;}


            var id =  $(this).data('id'),
                data = {
                    name: $("#name").val(),
                    parentcategory_id: $("#category_id").val(),
                    active: active
                };

            $.ajax({
                url: TC.control_url+'categorias/'+id,
                data: data,
                type: 'put'
            }).success(function(){
                document.location.href = TC.control_url+'categorias'
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
