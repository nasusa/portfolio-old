@if (Session::has('success'))
<div class="success flashmessage animated slideInRight">
	<strong>
      <i class="fa fa-check-circle fa-lg fa-fw"></i> Success |  
    </strong>
	{{ Session::get('success') }}
</div>
@endif

@if (Session::has('info'))
<div class="info flashmessage animated slideInRight">
	<strong>
      <i class="fa fa-info-circle fa-lg fa-fw"></i> Info |
    </strong>
	{{ Session::get('info') }}
</div>
@endif

@if (Session::has('warning'))
<div class="warning flashmessage animated slideInRight">
	<strong>
      <i class="fa fa-question-triangle fa-lg fa-fw"></i> Warning |  
    </strong>
	{{ Session::get('warning') }}
</div>
@endif

@if (count($errors) > 0)
<div class="error flashmessage animated slideInRight">
	<div>
		<strong class="center">
			<i class="fa fa-exclamation-circle fa-lg fa-fw"></i> Error |
		</strong>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
</div>
@endif