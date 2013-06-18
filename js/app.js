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
		directory.headerView = new directory.HeaderView();
		directory.navigationView = new directory.NavigationView();
		directory.welcomeView = new directory.WelcomeView();
		directory.homescreenshotView = new directory.HomeScreenshotView();
		directory.calendarView = new directory.CalendarView();
		directory.hometimesheetView = new directory.HomeTimesheetView();1
		directory.headerView.render();
		directory.navigationView.render();
		directory.welcomeView.render();
		directory.calendarView.render();
		directory.homescreenshotView.render();
		directory.hometimesheetView.render();
		$('#app').html(directory.headerView.el);
		$(directory.navigationView.el).appendTo('#app');
		$(directory.welcomeView.el).appendTo('#first-row');
		$(directory.homescreenshotView.el).appendTo('#first-row');
		$(directory.calendarView.el).appendTo('#second-row');
		$(directory.hometimesheetView.el).appendTo('#second-row');
	}
});

$(document).on("ready", function() {
	directory.loadTemplates(['LoginView', 'HeaderView', 'NavigationView','WelcomeView','HomeScreenshotView',
	                         'CalendarView','HomeTimesheetView'],
		function() {
			directory.router = new directory.Router();
			Backbone.history.start();
		});
});