/* GLOBAL TC, $ */
TC.products = (function(){
    var _$newStadium,
        _$showStadium
        
        ;
    var _init = function _init(){
        _$newStadium = $("#newProduct");

        _$newStadium.submit(function(event){
            event.preventDefault();

            var data = {
                    name: $("#name").val(),
                    formula: $("#formula").val(),
                    description: $("#description").val(),
                    body: $("#body").val(),
                    characteristics: $("#characteristics").val(),
                    category_id: $("#category_id").val(),
                    position: $("#position").val()
                };
            $.ajax({
                url: TC.control_url+'productos',
                data: data,
                type: 'post'
            }).success(function(){
                document.location.href = TC.control_url+'productos'
            }).error(function(data){
                // console.log(data);
               alert('Error al crear el producto');
            });
        });


        _$showStadium = $("#showProduct");
        _$showStadium.submit(function(event){
            event.preventDefault();

            var active = 0;
            if( $("#active").is(':checked')){active = 1;}


            var id =  $(this).data('id'),
                data = {
                    name: $("#name").val(),
                    formula: $("#formula").val(),
                    description: $("#description").val(),
                    body: $("#body").val(),
                    characteristics: $("#characteristics").val(),
                    category_id: $("#category_id").val(),
                    position: $("#position").val(),
                    active: active
                };

            $.ajax({
                url: TC.control_url+'productos/'+id,
                data: data,
                type: 'put'
            }).success(function(){
                document.location.href = TC.control_url+'productos'
            }).error(function(){
                alert('Error al actualizar el producto');
            });
        });


    };

    return {
        init: function init(){
            _init();
        }
    }
})();
