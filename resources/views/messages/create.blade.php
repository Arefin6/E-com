
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('admincss')}}/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   

<main>
@include('admin.error')
            <h2 dash-titel>Add new Message here.</h2>
            <br>
            <form action="{{ route('message.store') }}"  enctype="multipart/form-data" method="post" >
            {{ csrf_field() }}    
            <div class="row">
                    <label>
                        Email: 
                    </label>
                   
                    <input type="text" placeholder="email"  name="email">
                    </div>
                   
                        
                    
                   <div class="row">

                    <label>Message</label>
                    <textarea type="text" placeholder="message" id="description" name="text" cols="30" rows="10"></textarea>
                
                   </div>
                   <br>
                   
                    <div class="Submit-btn" >
                        <input type="submit"  Value="Save" id="send" name="send">
                        <input type="reset"  Value="Clear" id="clear" name="clear">
                      </div>
            </form>
      
   
        </main> 

     