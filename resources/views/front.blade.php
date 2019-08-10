@extends('layouts.frontview.master')
@section('content')

       <!-- EXPLORE SECTION -->

    
        <div class="col-md-6">
          <h3>All Users</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore reiciendis, voluptate at alias laborum odit aliquid
            tempore perspiciatis repudiandae hic?</p>
          
         <?php $count=1; ?> 

          @foreach($fresh_users as $user)



          @if(!empty($user->details) && $user->details->status == 1)

         

         @if($count<=6)
         <div class="col-md-4">

          <div class="profile_box first"> <span class="photo"><a href="#"><img src="" alt="" /></a></span>



         {{ $count }}


            @foreach($user->photos as $key => $photo)
                      @if($photo->default_image == "Yes")
                        <?php $user_photo = $user->photos[$key]->image; ?>
                      @else
                        <?php $user_photo = $user->photos[0]->image; ?>
                      @endif
              @endforeach

             @if(!empty($user_photo))
                  <span><a href="{{ url('profile/'.$user->username) }}"><img class="card-img-top" src="{{ asset('images/'.$user_photo) }}" alt="" /></a></span>
            @endif
            



            <p class="left">Name:</p>
            <p class="right">{{ $user->name }}</p>
            <p class="left">Age:</p>
            <p class="right">{{ $user->details->dob }}Years</p>
            <p class="left">Location:</p>
            <p class="right">@if(!empty($user->details->city)) {{ $user->details->city }} @endif</p>
            <p class="left">Interest:</p>
            <p class="right">Dating</p>
            <a href="#"><img src="{{ asset('images/frontend_images/') }}" alt=""  /></a> 


          </div>

        </div>

        <?php $count = $count+1;  ?>
        @endif
        @endif

        @endforeach  







              






        
      </div>





            @if(!empty($user_photo))
               <span class="photo"><a href="{{ url('profile/'.$user->username) }}"><img src="{{ 'images',$user_photo }}" alt="" /></a></span>
            @endif


        </div>
   
      




@endsection