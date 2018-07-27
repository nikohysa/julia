

let Board = function (widget) {
	let self = this;
	self.widget = $(widget);
	self.events();
}

Board.prototype.events = function () {
	let self = this;
	self.widget.find('[data-element=board-story]').each(function () {
		new BoardStory(this);
	})
	self.widget.find('.scrum-column').sortable({});

}

let BoardStory = function (widget) {
	let self = this;
	self.widget = $(widget);
	self.id = self.widget.data('story-id');
	self.storyState_id = self.widget.parents('.scrum-column').data('state-id');
	self.addEvents();
}
BoardStory.prototype.addEvents = function () {
	let self = this;
	self.widget.on('click', function () {
		$('.clicked').removeClass('clicked');
		self.widget.addClass('clicked');
	})
	self.widget.draggable({
		connectToSortable: '.scrum-column',
		opacity: 0.7,
		stop: function (event, ui) {
			self.storyState_id = self.widget.parents('.scrum-column').data('state-id');
			self.update();
		}
	});
	self.widget.find('[data-element=expand]').on('click', function () {
		self.openPopup();
	})

};
BoardStory.prototype.update = function () {
	let self = this;
	jQuery.ajax({
		url: '/stories/update/' + self.id,
		data: {
			status_id: self.storyState_id
		},
		method:"POST"
	}).done(function (response) {
		new Notifications().addNotification(new Notification("Story updated","success","#"))
	})
}
BoardStory.prototype.openPopup = function () {
	debugger
	$('body').append(
		"<div id=\"exampleModalLive\" class=\"modal fade \" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLiveLabel\" style=\"display: none;\" aria-hidden=\"true\">\n" +
		"  <div class=\"modal-dialog\" role=\"document\">\n" +
		"    <div class=\"modal-content\">\n" +
		"      <div class=\"modal-header\">\n" +
		"        <h5 class=\"modal-title\" id=\"exampleModalLiveLabel\">Modal title</h5>\n" +
		"        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">\n" +
		"          <span aria-hidden=\"true\">×</span>\n" +
		"        </button>\n" +
		"      </div>\n" +
		"      <div class=\"modal-body\">\n" +
		"        <p>Woohoo, you're reading this text in a modal!</p>\n" +
		"      </div>\n" +
		"      <div class=\"modal-footer\">\n" +
		"        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>\n" +
		"        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>\n" +
		"      </div>\n" +
		"    </div>\n" +
		"  </div>\n" +
		"</div>"
	).modal();
}

new Board('[data-widget=scrumboard]');
