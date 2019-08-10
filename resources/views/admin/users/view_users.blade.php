@extends('admin.master')
@section('content')


         <!-- INVERSE/DARK TABLE -->
        <table class="table">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Registered on</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>


                @foreach($users as $user)
                <tr>
                    
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['created_at'] }}</td>

                    <td>
                        
                 @if(!empty($user['details']['id']))
                    <button class="btn btn-primary" data-toggle="modal" data-target="#contactModal{{ $user['id'] }}">View Details</button>


                    
                    <button class="btn btn-danger" data-toggle="modal" data-target="#viewPhotos{{ $user['id'] }}">View Photos</button>






    <!-- CONTACT MODAL -->

   <div class="modal fade text-dark" id="contactModal{{ $user['id'] }}">
      <div class="modal-dialog">
        <div class="modal-content">


            <div class="modal-header">
            <h5 class=modal-title>User Details</h5>

              <button class="close" data-dismiss="modal">
                
                <span>&times;</span>
            </button>
             
           
            </div>


            <div class="modal-body">


                 <input class="userStatus" rel="{{ $user['id'] }}" type="checkbox" data-toggle="toggle"  data-on="Enabled" data-off="Disabled" @if($user['details']['status']=="1") checked @endif> 

          

              
             <table class="table">
           

              <tr>

              <td width="40%" align="left" valign="top" class="body"><strong> Date of Birth: </strong></td>

             <td width="60%" align="left" valign="top">{{ $user['details']['dob'] }}</td>

                </tr>

             <tr>

            <td align="left" valign="top" class="body"><strong> Gender: </strong></td>

            <td align="left" valign="top">

            {{ $user['details']['gender'] }}

            </td>

            </tr>



            <tr>

            <td align="left" valign="top" class="body"><strong> Height: </strong></td>

            <td align="left" valign="top">

            {{ $user['details']['height'] }}

            </td>

            </tr>


            <tr>

            <td align="left" valign="top" class="body"><strong> Marital Status: </strong></td>

            <td align="left" valign="top">

             {{ $user['details']['marital_status'] }}

            </td>

            </tr>


             <tr>

            <td align="left" valign="top" class="body"><strong> Body Type: </strong></td>

            <td align="left" valign="top">

            {{ $user['details']['body_type'] }}

            </td>

          </tr>


          <tr>

            <td align="left" valign="top" class="body"><strong> City: </strong></td>

            <td align="left" valign="top">{{ $user['details']['city'] }}</td>

        </tr>

        <tr>

         <td align="left" valign="top" class="body"><strong> State: </strong></td>

        <td align="left" valign="top">{{ $user['details']['state'] }}</td>

        </tr>

        <tr>

        <td align="left" valign="top" class="body"><strong> Country: </strong></td>

        <td align="left" valign="top">

            {{ $user['details']['country'] }}

        </td>

        </tr>

        <tr>

        <td align="left" valign="top" class="body"><strong> Languages: </strong></td>

        <td align="left" valign="top">

            {{ $user['details']['languages'] }}

        </td>

        </tr>

        <tr>

         <td align="left" valign="top" class="body"><strong> Hobbies: </strong></td>

        <td align="left" valign="top">

        {{ $user['details']['hobbies'] }}

        </td>

        </tr>

         <tr>

        <td colspan="2">

        <h6 class="inner">Education & Career</h6>

         </td>

        </tr>

         <tr>

        <td align="left" valign="top" class="body"><strong> Highest Education: </strong></td>

        <td align="left" valign="top">{{ $user['details']['education'] }}</td>

        </tr>

        <tr>

        <td align="left" valign="top" class="body"><strong> Occupation: </strong></td>

        <td align="left" valign="top">

        {{ $user['details']['occupation'] }}

         </td>

        </tr>

        <tr>

        <td align="left" valign="top" class="body"><strong> Income: </strong></td>

        <td align="left" valign="top">

        {{ $user['details']['income'] }}

        </td>

        </tr>

       <tr>

       <td colspan="2">

         <h6 class="inner">About Myself</h6>

        </td>

        </tr>

        <tr>

        <td align="left" valign="top" class="body"><strong> About Myself: </strong></td>

        <td align="left" valign="top">

        {{ $user['details']['about_myself'] }}

        </td>

        </tr>

        <tr>

        <td colspan="2">

        <h6 class="inner">About My Preferred Partner</h6>

        </td>

        </tr>

        <tr>

        <td align="left" valign="top" class="body"><strong> Partner Details: </strong></td>

        <td align="left" valign="top">

        {{ $user['details']['about_partner'] }}

        </td>

        </tr>




        </table>
            </div>


            <div class="modal-footer">
             
             <button class="btn btn-primary btn-block">Submit</button>

            </div>

        </div>

      </div>

   </div>
                @endif



                    </td>


                     <td>
                        
                @if(!empty($user['photos'][0]['image']))
                   


            

    <!-- CONTACT MODAL -->

   <div class="modal fade text-dark" id="viewPhotos{{ $user['id'] }}">
      <div class="modal-dialog">
        <div class="modal-content">


            <div class="modal-header">
            <h5 class=modal-title>User</h5>

            <button class="close" data-dismiss="modal">
                
                <span>&times;</span>
            </button>

            </div>
              
           

            <div class="modal-body">
              
            <table width="100%" cellpadding="10" cellspacing="10">

           <tr>
          
            @foreach($user['photos'] as $photo)
            <td><table>
            <td width="100px" align="left" valign="top" class="body"><img src="{{ url('images',$photo['image']) }}"></td>

            <td width="60%" align="left" valign="top">


                <input class="userPhotoStatus" rel="{{ $photo['id'] }}" type="checkbox" data-toggle="toggle"  data-on="Enabled" data-off="Disabled" @if($photo['status']=="1") checked @endif></td>


                                                       

            </table>
            </td>

            @endforeach
            </div>


            <div class="modal-footer">
             
           

            </div>

        </div>

      </div>

   </div>
                @endif



                    </td>



                </tr>
                
                @endforeach
            </tbody>
        </table>
        <br>


@endsection