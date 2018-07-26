
let Backlog = function() {
	$('[data-element=story]').each(function () {
		new Story(this);
	})
}

let Story = function (story) {
	let self = this;

	self.widget = $(story);
	self.id = self.widget.attr('data-element-id');

	self.assigned = self.widget.find('[data-control=assignedTo]');
	self.status = self.widget.find('[data-control=status]');
	self.sprint = self.widget.find('[data-control=sprint]');
	self.addEvents();
};
Story.prototype.addEvents = function () {
	let self = this;
	self.assigned.on('change', function () {
		self.updateAssignedTo();
	})
	self.status.on('change', function () {
		self.updateStatus();
	})
	self.sprint.on('change', function () {
		self.updateSprint();
	})
};
Story.prototype.updateAssignedTo = function () {
	let self = this;
	jQuery.ajax({
		url: '/stories/update/'+self.id,
		data: {
			user_id: self.assigned.val()
		},
		method: "POST",
	}).done(function (response) {
		new Notifications().addNotification(new Notification("Story updated","success","#"))
	});
};
Story.prototype.updateStatus = function () {
	let self = this;
	jQuery.ajax({
		url: '/stories/update/'+self.id,
		data: {
			status_id: self.status.val()
		},
		method:"POST",
	}).done(function (response) {
		new Notifications().addNotification(new Notification("Story updated","success","#"))
	})
}
Story.prototype.updateSprint = function () {
	let self = this;
	jQuery.ajax({
		url: '/stories/update/' + self.id,
		data: {
			sprint_id: self.sprint.val()
		},
		method:"POST"
	}).done(function (response) {
		new Notifications().addNotification(new Notification("Story updated","success","#"))
	})
}
/*INIT*/
new Backlog();
