window.Router = Backbone.Router.extend({
	routes: {
		"": "login"
	}, 
	login: function(){
		if (!this.loginView){
			this.loginView = new LoginView();
			this.loginView.render();
		} else {
			this.loginView.delegateEvents();
		}
		$('#app').html(this.loginView.el);
	}
	
});

templateLoader.load('LoginView');
(function (){
	app = new Router();
	Backbone.history.start();
});