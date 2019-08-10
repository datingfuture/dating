@extends('layouts.frontview.master')
@section('content')

       <!-- EXPLORE SECTION -->

    
        <div class="col-md-6">
          <h3>Explore & Connect</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore reiciendis, voluptate at alias laborum odit aliquid
            tempore perspiciatis repudiandae hic?</p>
          
        
           <?php $count=1; ?>


          @foreach($searched_users as $user)



          @if(!empty($user->details) && $user->details->status == 1)


             <?php 
              $age = date('Y') - date('Y',strtotime($user->details->dob));
             ?>


              @if($age>=$minimumyears && $age<=$maximumyears)
              


           @if($count<=4)



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


                @else
                      <span class="photo"><a href="#"><img src="{{ asset('images/frontimg/photos/datingrtg.png') }}" alt="" /></a></span>


                @endif
            



            <p class="left">Name:</p>
            <p class="right">{{ $user->name }}</p>
            <p class="left">Age:</p>
            <p class="right">

             <?php
                        echo $diff = date('Y') - date('Y',strtotime($user->details->dob)); 
                      ?> Yrs.
               
                {{ $user->details->dob }} Yrs


            </p>
            <p class="left">City:</p>
            <p class="right">@if(!empty($user->details->city)) {{ $user->details->city }} @endif</p>
            <p class="left"></p>
            <p class="right">@if(!empty($user->details->country)) {{ $user->details->country }} @endif</p>


            <p class="left">Interest:</p>
            <p class="right">Dating</p>
            <a href="#"><img src="{{ asset('images/frontend_images/') }}" alt="" class="more_1" /></a> 


          </div>

        </div>


         <?php $count = $count+1; ?>
       @endif
       @endif

       @endif

        @endforeach  






            
              






       
      </div>





             @if(!empty($user_photo))
                <span class="photo"><a href="{{ url('profile/'.$user->username) }}"><img src="{{ 'images',$user_photo }}" alt="" /></a></span>
            @endif


        </div>
   
      




@endsection