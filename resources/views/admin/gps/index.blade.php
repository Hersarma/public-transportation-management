@extends('layouts.admin')
@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="px-4 py-2 pb-5 border-b border-gray-900">
  <h3 class="text-lg leading-6 font-medium text-gray-700">Lokacije svih vozila</h3>
</div>


	
		<iframe class="w-full h-screen" name="fmeeframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
		src="//followmee.com/maps.aspx?key=4bcbb4918caf34763c752d79045a993d&username=hersarma&type=2&function=currentforalldevices&z=21">
		</iframe>
	



@endsection