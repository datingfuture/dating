@extends('layouts.frontview.master')
@section('content')



 <div class="col-md-8">
     
      <div id="right_container">
        <div style="padding:20px 15px 30px 15px;">
          <h1>{{ $userDetails->name }}</h1>


           @foreach($userDetails->photos as $key => $photo)
                      @if($photo->default_image == "Yes")
                        <?php $user_photo = $userDetails->photos[$key]->image; ?>
                      @else
                        <?php $user_photo = $userDetails->photos[0]->image; ?>
                      @endif
              @endforeach




          <div> 

            @if(!empty($user_photo))
         <img src="{{ asset('images/'.$user_photo) }}" alt="" width="177" height="117" class="aboutus-img" />


          @else
                      <img src="{{ asset('images/frontimg/photos/datingrtg.png') }}" alt="" />
              @endif


            <strong>Profile ID:</strong> {{ $userDetails->username }}<br>
            <strong>Name:</strong> {{ $userDetails->name }}<br>
             <strong>Genger:</strong> {{ $userDetails->details->gender }}<br>
            <strong>Marital Status:</strong> {{ $userDetails->details->marital_status }}<br>
            <strong>Age:</strong> <?php 
        

               echo $diff = date('Y') - date('Y',strtotime($userDetails->details->dob));
             ?> Yrs.<br>
            <strong>Height:</strong> {{ $userDetails->details->height }}<br>
            <strong>Body Type:</strong> {{ $userDetails->details->body_type }}<br>
            <strong>Complexion:</strong> {{ $userDetails->details->complexion }}<br>
            <strong>Languages:</strong> {{ $userDetails->details->languages }}<br>




            <strong>Hobbies:</strong> {{ $userDetails->details->hobbies }}

            <br />
             <strong>City:</strong> {{ $userDetails->details->city }}

            <br />

              <strong>State:</strong> {{ $userDetails->details->state }}

             <br />

              <strong>Country:</strong> {{ $userDetails->details->country }}
            <br />
            <br />


            <strong style="float:right;">
            <a href="#" style="color: red"><i class="fa fa-comment" aria-hidden="true" style="color: red;"></i>&nbsp;Contact Profile</a>


             </strong>


             <strong>Education & Career</strong><br>


               <strong>Highest Education:</strong> {{ $userDetails->details->hobbies }} <br>
             <strong>Occupation:</strong> {{ $userDetails->details->occupation }} 


              <strong>Highest Education:</strong> {{ $userDetails->details->about_myself }} <br>


               <strong>Highest Education:</strong> {{ $userDetails->details->about_partner }}



               @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_success') !!}</strong>
                </div>
                @endif  



               <form action="{{ url('contact/'.$userDetails->username) }}" method="post">{{ csrf_field() }}
               <textarea id="message" name="message" required=""></textarea><br>
            
               <input type="submit" value="Send Message">


               </form>

           
    </div>
  </div>


</div>
  



@endsection



























