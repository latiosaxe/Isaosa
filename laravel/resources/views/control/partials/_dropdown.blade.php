<?php
$none_preselected = 'selected';
$options_html = '';
$preselected_id = (int)$item->{$slug};
foreach( $list as $item_list ){
	$preselected = '';
	if( $item_list->id == $preselected_id ){
		$preselected = 'selected';
		$none_preselected = '';

	}
	$options_html .= "<option value='{$item_list->id}' {$preselected} >{$item_list->name}</option>";
}
?>
<div class="form-group">
	<label for="{{$slug}}" class="control-label">{{$name}}</label>
    <select name="{{$slug}}" id="{{$slug}}" class="form-control">
        <option value="-1" disabled {{$none_preselected}}></option>
        {!! $options_html !!}
    </select>
</div>
