@section('notifications')
	@foreach(session('notifications') as $notification)))

	<div data-notify="container"
		 class="col-11 col-md-4 alert alert-{{$notification['type']}} alert-with-icon animated fadeInDown" role="alert"
		 data-notify-position="bottom-right"
		 style="display: inline-block;
    margin: 15px auto;
    position: fixed;
    transition: all 0.5s ease-in-out 0s;
    z-index: 1031;
    bottom: 20px;
    right: 20px;">
		<button type="button" aria-hidden="true" class="close" data-notify="dismiss"
				style="position: absolute; right: 10px; top: 50%; margin-top: -9px; z-index: 1033;"><i class="material-icons"><span
						class="fas fa-times"></span> </i></button>
		<i data-notify="icon" class="material-icons"><span class="fas fa-bell"></span> </i><span data-notify="title"></span> <span
				data-notify="message"> <a href="{{url($notification['url'])}}"> {{$notification['message']}}</a></span><a
				href="#" target="_blank" data-notify="url"></a></div>
	@endforeach
	<script type="text/javascript">
		$('button[data-notify="dismiss"]').on('click', function () {
			$(this).parent('div[role="alert"]').remove();
		})
	</script>
@section('notifications')
