<x-layout>

<div class="container-fluid">
    <div class="row">
		<div class="col-md-2 sidebar" style="height: 85vh; background: #231F20;">
		
				<div >
					<img src="{{auth()->user()->avatar}}" class=" mt-3 img-fluid rounded-circle" alt="">
				</div>
				
				<div>
						<h4>
                        {{auth()->user()->username}}</h4>
				</div>
				<div>
						Developer
				</div>
			
				<div>
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
			
				<div class="mt-2 mb-2">
					<a href="/profile">
                        <button class="btn btn-success btn-sm"> Account Settings</button>
                    </a>
				</div>
				
			   
           		<div>
					<a href="/logOut">
						<button type="button" class="btn btn-danger btn-sm">Logout
						</button>
					</a>
				</div>
		</div>
			
		<div class="col-md-9 ml-2" style="height: 85vh; background: #231F20;">
				
 			<h1>Book Seat</h1>
			<div>
 			<form action="/seat" method="POST">
	 		@csrf
	 
	 			<input type="date" name="date" placeholder="Date">
	 			<input type="number" name="seatNo" placeholder="Seat No">
	 			<button >Submit</button>
	 		</form>
			</div>
	 		<h1>Book Room</h1>
			<div>
	 		<form action="/room" method="POST">
			@csrf
	
	 			<input type="date" name="date" placeholder="Date" >
	 			<input type="number" name="roomNo" placeholder="Room No">
	 			<input type="time" name="timefrom" placeholder="From">
	 			<input type="time" name="timeto" placeholder="To">
	 			<button >Submit</button>
			</form>
			</div>
 	
		</div>

		
	</div>
</div>



</x-layout>