$(function(){

		
	
	/************
	   VARIABLES
	 ************/
	
	var params;
	var modules = [];

	/**********
	   EVENTS
	 **********/	

	$('input').click(function(){
		update();
	});

	
	/*********
	   LOGIC
	 *********/
	
	function update(){
		updateModules();
		updateUrls();
	}
	
	function updateModules(){
		modules = [];
		$('input').each(function(){
			if ($(this).is(':checked'))
				modules.push($(this).val());
		});
		replaceSpecialModules();
	}
	
	function replaceSpecialModules(){
		if (modules.indexOf('jquerymin') != -1 && modules.indexOf('jquerydev') != -1){
			modules.remove('jquerymin');
			modules.remove('jquerydev');
			modules.push('jquery');
		}

		if (modules.indexOf('modernizr') != -1 && modules.indexOf('respond') != -1){
			modules.remove('modernizr');
			modules.remove('respond');
			modules.push('modernizrrespond');
		}
		
		
	}
	
	function updateUrls(){
		
		params = '';
		
		for (var i = 0, curModule; curModule = modules[i++];){
			params += curModule + '&';
		}
		
		params = params.substring(0, params.length - 1);

		$('#preview-url').val('/builder?print&' + params);
		$('#download-url').val('/builder?' + params);	
	}	

	/***********
	   HELPERS
	 ***********/
	
	if (!Array.indexOf){
		Array.prototype.indexOf = function(searchedElement){
			for (var i = 0; i < this.length; i++){
				if (this[i] === searchedElement)
					return i;
			};
			return -1;
		};
	}
	
	Array.prototype.remove = function(searchedElement){
		var i = this.indexOf(searchedElement);
		if (i != -1)
			this.splice(i, 1);
	};
	
	/***********
	    MAIN
	 ***********/
	
	update();
	
});
