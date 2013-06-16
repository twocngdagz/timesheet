window.LoginView = new Backbone.View.extend({
	initialize: function() {
		console.log('Initialize Login View');
		this.template = template[LoginView];
	}, 
	
	render: function() {
		$(this.el).html(this.template());
		return this;
	}
});