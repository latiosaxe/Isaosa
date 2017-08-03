// GLOBAL: TC, $
TC.main = (function(){
    var _$redactor_text
    ;
    var _init = function _init(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        _$redactor_text = $('.redactor-text');
        _$redactor_text.redactor();
    };
    return {
        init: function init(){
            _init();
        }
    }
})();
