var directory = {
		views: {},
		models: {},
		
		loadTemplates: function(view, callback) {
			var deferreds = [];
			$.each(view, function(index, view) {
				if (directory[view]) {
					deferreds.push($.get('tpl/' + view + '.html', function(data) {
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
		"": 'login',
		"home": "home"
	}, 
	
	initialize: function() {
		console.log('Router');
	},
	
	login: function() {
		if (!directory.loginView) {
			directory.loginView = new directory.LoginView();
			directory.loginView.render();
		} else {
			directory.loginView.delegateEvents();
		}
		$('#app').html(directory.loginView.el);
	},
	home: function() {
		console.log('This is home');
	}
});

$(document).on("ready", function() {
	directory.loadTemplates(['LoginView'],
		function() {
			directory.router = new directory.Router();
			Backbone.history.start();
		});
});