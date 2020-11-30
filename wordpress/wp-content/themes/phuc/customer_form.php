
<form class="flex bg-blue-900 p-2" action="customer_details.php" method="POST">
	<fieldset class="max-w-lg mx-auto p-2 border-2 rounded">
	<legend class="text-3xl text-white">Contact us!</legend>
		<label for="customer_name">Name</label>
		<input name="customer_name" type="text" value="">
	<div class="mt-1 flex rounded-md shadow-sm">
		<label class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
			Email @:
		</label>
		<input id="email" 
		name="customer_email" 
		type="email" 
		placeholder="youremail@somesite.com" 
		class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" >
	</div>
	<br>
		<textarea class="" cols="40" name="customer_msg" rows="5"></textarea>

		<input name="submit" type="submit" value="Submit">
</fieldset>
</form>


