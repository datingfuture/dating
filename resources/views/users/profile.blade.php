@extends('layouts.frontview.master')
@section('content')


<div class="col-md-8">

<div id="layout">
  <div class="layout_inner">
    <div id="body_container">
     
      <div id="left_container">
        <div class="partner_search">
          <h2>Partner search</h2>
         
        </div>
        
      </div>
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


            @if(!empty($user_photo))
             <img src="{{ asset('images/'.$user_photo) }}" alt="" width="200" height="200" class="aboutus-img" />


            @else
            <img src="{{ asset('images/frontimg/photos/datingrtg.png') }}" alt="" />
            @endif

           




            <strong>Profile ID:</strong> {{ $userDetails->username }}<br>
            <strong>Name:</strong> {{ $userDetails->name }}<br>
             <strong>Genger:</strong> {{ $userDetails->details->gender }}<br>
            <strong>Marital Status:</strong> {{ $userDetails->details->marital_status }}<br>
            <strong>Age:</strong> <?php 
        

               echo $magic = date('Y') - date('Y',strtotime($userDetails->details->dob));
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
            <a href="{{ url('/contact/'.$userDetails->username) }}" style="color: red"><i class="fa fa-comment" aria-hidden="true" style="color: red;"></i>&nbsp;Contact Profile</a>


             </strong>


            <strong>Education & Career</strong><br>


               <strong>Highest Education:</strong> {{ $userDetails->details->hobbies }} <br>
             <strong>Occupation:</strong> {{ $userDetails->details->occupation }} 


              <strong>Highest Education:</strong> {{ $userDetails->details->about_myself }} <br>


               <strong>Highest Education:</strong> {{ $userDetails->details->about_partner }}

            


          <div><img src="{{ asset('images/'.$user_photo) }}" alt="" width="177" height="117" class="aboutus-img" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum varius, risus neque venenatis arcu, a semper massa mi eget ipsum.<br />
            <br />
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed odio et ante adipiscing lobortis. Quisqueeleifend, arcu a dictum varius, risus neque venenatis arcu, a semper massa mi eget ipsum. Proin sed odio et ante adipiscing lobortis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum varius, risus neque venenatis arcu, a semper massa mi eget ipsum. Proin sed odio et ante adipiscing lobortis. <br />
            <br />
            <br />

             <strong style="float:right;">
             <a href="{{ url('/contact/'.$userDetails->username) }}" style="color: red"><i class="fa fa-comment" aria-hidden="true" style="color: red;"></i>&nbsp;Contact Profile</a>


             </strong>



            <div class="clear"></div>
          </div>
          
            
           
           
        
          </div>
        
        </div>
      </div>
    </div>
  </div>
  <div id="footer">
    <div class="footer_link">
      <ul>
        
      </ul>
    </div>
  </div>
</div>

</div>
@endsection


















































