<?php

$none_preselected = 'selected';
$state_preselected_id = -1;
$options_a_html = '';
$options_b_html = '';
$preselected_id = (int)$item->{$slug};



foreach( $list_a as $item_list ){
	$preselected = '';
	if( $item_list->id == $preselected_id ){
		$preselected = 'selected';
		$none_preselected = '';
		$state_preselected_id = $item_list->{$slug_related};
	}
	$data_attribute = 'data-'.$slug_related.'="'.$item_list->{$slug_related}.'"';
	$options_a_html .= "<option value='{$item_list->id}' {$data_attribute} {$preselected} >{$item_list->name}</option>";
}
foreach( $list_b as $item_list ){
	$preselected = '';
	if( $item_list->id == $state_preselected_id ){
		$preselected = 'selected';
	}
	$options_b_html .= "<option value='{$item_list->id}' {$preselected}>{$item_list->name}</option>";
}

?>
<div class="form-group">
	<label for="{{$slug_related}}" class="control-label">{{$name_b}}</label>
	<select name="{{$slug_related}}" id="{{$slug_related}}" class="form-control">
		{!! $options_b_html !!}
	</select>
</div>
<div class="form-group">
	<label for="{{$slug}}" class="control-label">{{$name_a}}</label>
	<select name="{{$slug}}" id="{{$slug}}" class="form-control">
		<option value="-1" disabled {{$none_preselected}}></option>
		{!! $options_a_html !!}
	</select>
</div>

<script>
	$(document).ready(function () {
	    var main_id = '{{$slug}}';
	    var related_id = '{{$slug_related}}';
	    $('#'+related_id).on('change', function () {
            var ok_value = $(this).val();

            $('#'+main_id+' > option').each(function () {
				var $this = $(this),
					my_value = $this.data( related_id );
				if( ok_value == my_value ){
                    $this.prop({disabled:''}).show();
                }else{
				    if( $this.is(':selected') ){
                        $this.prop({selected:false})
					}
                    $this.prop({disabled:true}).hide();
				}
            });
        });
        $('#'+related_id).trigger('change');
    });
</script>
