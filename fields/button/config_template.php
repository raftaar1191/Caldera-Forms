<div class="caldera-config-group">
	<label><?php _e('Type'); ?></label>
	<div class="caldera-config-field">
		<select id="buttontype_{{_id}}" class="block-input field-config field-button-type" name="{{_name}}[type]">
		<option value="submit" {{#is type value="submit"}}selected="selected"{{/is}}><?php _e('Submit'); ?></option>
		<option value="button" {{#is type value="button"}}selected="selected"{{/is}}><?php _e('Button', 'caldera-forms'); ?></option>
		<option value="next" {{#is type value="next"}}selected="selected"{{/is}}><?php _e('Next Page', 'caldera-forms'); ?></option>
		<option value="prev" {{#is type value="prev"}}selected="selected"{{/is}}><?php _e('Previous Page', 'caldera-forms'); ?></option>
		<option value="reset" {{#is type value="reset"}}selected="selected"{{/is}}><?php _e('Reset', 'caldera-forms'); ?></option>
		</select>
	</div>
</div>
<div class="caldera-config-group">
	<label><?php _e('Class', 'caldera-forms'); ?></label>
	<div class="caldera-config-field">
		<input type="text" class="block-input field-config" name="{{_name}}[class]" value="{{class}}">
	</div>
</div>
<div id="event{{_id}}" style="display:{{#is type value="button"}}block{{else}}none{{/is}};">
	
	<div class="caldera-config-group">
		<label><?php _e('Click Target', 'caldera-forms'); ?></label>
		<div class="caldera-config-field">
			<input type="text" class="block-input field-config" name="{{_name}}[target]" value="{{target}}">
			<p class="description"><?php _e('Selector or callback function to push form values on click.', 'caldera-form'); ?></p>
		</div>
	</div>


</div>
{{#script}}
jQuery(function($){
	
	$('#buttontype_{{_id}}').on('change', function(){

		if( this.value === 'button' ){
			$('#event{{_id}}').show();
		}else{
			$('#event{{_id}}').hide();
		}

	});

});
{{/script}}