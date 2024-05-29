<x-layout>

    <div class="profile container center">
        <form action="/profile" method="PUt" id="registration-form">
            @csrf
        
                <div>
					<img src="{{auth()->user()->avatar}}" class="mb-3 img-sm rounded-circle" alt="" style="height: 20vh; width:auto;">
				</div>
                <div class=>
                    <input type="file" name="avatar" class="mb-3">
                    @error('avatar')
                    <p class="alert small alert-danger shadow-sm">{{$message}}</p>
                    @enderror
                   
                    <div class="input">
                        <input name="password" class="mb-3 form-control" type="password" placeholder="Change your password" />
                        @error('password')<p class='m-0 small alert alert-danger shadow-sm'>
                            {{$message}}
                        </p>@enderror
                    </div>
                    <div class="input">
                        <input name="password_confirmation" class="form-control" type="password" placeholder="Confirm password" />
                    </div>
                </div>
                <div class="btnBox">
                    <button class="submitBtn">Submit</button>
                </div>
      
        
        </form>
    </div>


</x-layout>