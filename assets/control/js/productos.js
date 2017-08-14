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
                    table_1: $("#table_1").val(),
                    table_2: $("#table_2").val(),
                    table_3: $("#table_3").val(),
                    table_4: $("#table_4").val(),
                    table_5: $("#table_5").val(),
                    table_6: $("#table_6").val(),
                    table_7: $("#table_7").val(),
                    table_8: $("#table_8").val(),
                    table_9: $("#table_9").val(),
                    table_10: $("#table_10").val(),
                    table_1_copy: $("#table_1_copy").val(),
                    table_2_copy: $("#table_2_copy").val(),
                    table_3_copy: $("#table_3_copy").val(),
                    table_4_copy: $("#table_4_copy").val(),
                    table_5_copy: $("#table_5_copy").val(),
                    table_6_copy: $("#table_6_copy").val(),
                    table_7_copy: $("#table_7_copy").val(),
                    table_8_copy: $("#table_8_copy").val(),
                    table_9_copy: $("#table_9_copy").val(),
                    table_10_copy: $("#table_10_copy").val(),
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
                    table_1: $("#table_1").val(),
                    table_2: $("#table_2").val(),
                    table_3: $("#table_3").val(),
                    table_4: $("#table_4").val(),
                    table_5: $("#table_5").val(),
                    table_6: $("#table_6").val(),
                    table_7: $("#table_7").val(),
                    table_8: $("#table_8").val(),
                    table_9: $("#table_9").val(),
                    table_10: $("#table_10").val(),
                    table_1_copy: $("#table_1_copy").val(),
                    table_2_copy: $("#table_2_copy").val(),
                    table_3_copy: $("#table_3_copy").val(),
                    table_4_copy: $("#table_4_copy").val(),
                    table_5_copy: $("#table_5_copy").val(),
                    table_6_copy: $("#table_6_copy").val(),
                    table_7_copy: $("#table_7_copy").val(),
                    table_8_copy: $("#table_8_copy").val(),
                    table_9_copy: $("#table_9_copy").val(),
                    table_10_copy: $("#table_10_copy").val(),
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
                // document.location.href = TC.control_url+'productos'
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
