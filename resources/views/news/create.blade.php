@if ($errors->all())
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
			@endforeach
		</div>
	@endif
<form method="post" action="{{ route('news.store') }}">
    @csrf
    <input type="text" name="title" placeholder="название статьи">
    <input type="text" name="content"  placeholder="контент">
    <input type="text" name="user_name" placeholder="имя юзера">
    <button type="submit">Отправить</button>
</form>