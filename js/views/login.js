directory.LoginView = Backbone.View.extend({
	initialize: function() {
		console.log('Initialize Login View');
	}, 
	events: {
		"click #loginButton": "login"
	},
	render: function() {
		$(this.el).html(this.template());
		return this;
	},
	login: function(event) {
		event.preventDefault();
		var url = 'api/login';
		var formValues = {
				user: $('#login_user').val(),
				pass: $('#login_password').val()
			};
		console.log('AJAX started');
		$.ajax({
			url: url,
			type: 'POST',
			dataType: 'json',
			data: formValues,
			success: function(data) {
				console.log('Success');
				directory.router.navigate('/home', {trigger:true});
				if(data.error) {
					console.log(data.error.text);
				}
			}
		});
	}
});