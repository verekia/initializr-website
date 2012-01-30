$(function(){

	/************
	    CONFIG
	 ************/
	var config = {
		/* allModules:[
		            'h5bp-content',
		            'izr-responsive',
		            'boot-responsive',
		            'modernizr',
		            'html5shiv',
		            'respond',
		            'h5bp-htaccess',
		            'h5bp-nginx',
		            'h5bp-webconfig',
		            'jquerymin',
		            'jquerydev',
		            'h5bp-chromeframe',
		            'h5bp-analytics',
		            'izr-applemediaqueries',
		            'less',
		            'h5bp-build',
		            'h5bp-iecond',
		            'h5bp-coloredselection',
		            'h5bp-favicon',
		            'h5bp-appletouchicons',
		            'h5bp-scripts',
		            'h5bp-robots',
		            'h5bp-humans',
		            'h5bp-404',
		            'h5bp-adobecrossdomain'
		            ], */
		defaultModules:{
			blank: [
			        'h5bp-content',
			        'modernizr',
			        'jquerymin',
			        'h5bp-chromeframe',
		            'h5bp-analytics',
		            'h5bp-iecond',
		            'h5bp-coloredselection',
		            'h5bp-favicon',
		            'h5bp-appletouchicons',
		            'h5bp-scripts',
		            'h5bp-robots',
		            'h5bp-humans',
		            'h5bp-404',
		            'h5bp-adobecrossdomain'
		            
			        ],
			initializr: [
			             'izr-responsive'
			             ],
			bootstrap: [
			            'boot-responsive'
			            ]
		},
		baseUrl:'http://localhost:8888/builder?'
	};
	
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

	
	$('#preconfig-blank').click(function(){
		fillDefaultModules('blank');
	});

	$('#preconfig-initializr').click(function(){
		fillDefaultModules('initializr');
	});
	
	$('#preconfig-bootstrap').click(function(){
		fillDefaultModules('bootstrap');
	});
	
	/*********
	   LOGIC
	 *********/
	
	function fillDefaultModules(type){
		$('input').attr('checked', false);
		for (var i = 0, curModule; curModule = config.defaultModules[type][i++];){
			$('input[value=' + curModule +']').attr('checked', true);
		};
		update();
	}
	
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

		$('#preview-url').val(config.baseUrl + 'print&' + params);
		$('#download-url').val(config.baseUrl + params);	
		
		$('#preview-link').attr('href', config.baseUrl + 'print&' + params);
		$('#download-link').attr('href', config.baseUrl + params);	
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
