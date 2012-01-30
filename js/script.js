$(function(){
	
	var params;
	var modules = [];

	$('input').click(function(){
		updateUrls();
		updateModules();
	});

	
	function updateModules(){
		
	}
	
	function updateUrls(){
		params = '';
		$('input').each(function(){
			
			if ($(this).is(':checked'))
				params += $(this).val() + '&';
			
		});
	
		params = params.substring(0, params.length - 1);
		$('#preview-url').val('/builder?print&' + params);
		$('#download-url').val('/builder?' + params);	
	}	
	
	updateUrls();
	
});
