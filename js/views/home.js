directory.HeaderView = Backbone.View.extend({
	initialize: function() {
		console.log('Initialize Header View');
	}, 
	render: function() {
		$(this.el).html(this.template());
		return this;
	}
});


directory.NavigationView = Backbone.View.extend({
	initialize: function() {
		console.log('Initialize Navigation View');
	}, 
	render: function() {
		$(this.el).html(this.template());
		return this;
	}
});


directory.WelcomeView = Backbone.View.extend({
	initialize: function() {
		console.log('Initialize Welcome View');
	}, 
	render: function() {
		$(this.el).html(this.template());
		return this;
	}
});


directory.HomeScreenshotView = Backbone.View.extend({
	initialize: function() {
		console.log('Initialize Home Screenshot View');
	}, 
	render: function() {
		$(this.el).html(this.template());
		return this;
	}
});


directory.CalendarView = Backbone.View.extend({
	initialize: function() {
		console.log('Initialize Calender View');
	}, 
	render: function() {
		$(this.el).html(this.template());
		return this;
	}
});

directory.HomeTimesheetView = Backbone.View.extend({
	initialize: function() {
		console.log('Initialize Home Timesheet View');
	},
	events: {
		"click #save": "save"
	}, 
	render: function() {
		$(this.el).html(this.template());
		return this;
	},
	save: function() {
		console.log('save event');
	}
});


