let Notifications = function () {
	
}
let Notification = function(message, type, url) {
	let self = this;
	self.message = message;
	self.type = type;
	self.url = url;
	self.buildHTML();
}
Notification.prototype.buildHTML = function () {
	let self = this;
	self.html = "<div data-notify=\"container\" class=\"col-11 col-md-4 alert alert-"+self.type+" alert-with-icon animated fadeInDown\" data-element=\"notification\" role=\"alert\" data-notify-position=\"bottom-right\" style=\"display: inline-block; margin: 15px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; right: 20px; bottom: 20px;\">\n" +
		"\t\t\t<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\" style=\"position: absolute; right: 10px; top: 50%; margin-top: -9px; z-index: 1033;\"><i class=\"material-icons\"><span class=\"fas fa-times\"></span> </i></button>\n" +
		"\t\t\t<i data-notify=\"icon\" class=\"material-icons\"><span class=\"fas fa-bell\"></span> </i><span data-notify=\"title\"></span> <span data-notify=\"message\"> <a href=\"http://scrumboard.n.hysa.adevx7.bwss.local/settings\"> "+ self.message +"</a></span><a href=\"#\" target=\"_blank\" data-notify=\"url\"></a></div>"
}
Notifications.prototype.addNotification = function (notification) {
	$("body").append(notification.html);

	$('button[data-notify="dismiss"]').on('click', function () {
		$(this).parent('div[role="alert"]').remove();
	});

	$(function () {
		let elements = $('div[data-element="notification"]');
		elements.each(function () {
			let self = $(this);
			let prev = $(this).prev('div[data-element="notification"]');

			if (prev.length > 0) {
				self.css('bottom', parseInt(prev.css('bottom').substr(0,prev.css('bottom').indexOf('p'))) +70);
			} else {
				self.css('bottom', 20 + 'px');
			}
		})
	});

}
