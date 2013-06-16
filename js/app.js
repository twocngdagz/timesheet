var directory = {
		views: {},
		models: {},
		
		loadTemplate: function(views, callback) {
			
			var deferreds = [];
			$.each(view, function(index, view) {
				if (directory[view]) {
					deferreds.push($.get('tpl' + view + '.html', function(data) {
						directory[view].prototype.template = _.template(data);
					}, 'html'));
				} else {
					alert(view + " not found");
				}
			});
			
			$.when.apply(null, deferreds).done(callback);
		}
};

directory.Router = Backbone.Router.extend({
	routes: {
		"": 'login'
	}, 
	
	initialize: function() {
		console.log('Router');
	},
	
	login: function() {
		if (!directory.loginView) {
			directory.loginView = new directory.LoginView();
			directory.loginViwe.render();
		} else {
			directory.loginView.delegateEvents();
		}
		this.$content.html(directory.loginView.el);
	}
});

$(document).on("ready", function() {
	directory.loadTemplates(['LoginView'],
		function() {
			directory.Router = new directory.Router();
			Backbone.history.start();
		});
});