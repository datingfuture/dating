
<?php use App\User; ?>





@extends('layouts.frontview.master')



@section('content')


   



    <div class="col-md-8">
        


        <h1>Shooted Messages</h1>



        <table id="replies" class="table table-dark">
            
         <thead>
          <tr>
             <th>Name</th>
             <th>Location</th>
             <th>Response</th>
             <th>Date/Time</th>
          </tr>


         </thead>

          <tbody>


             @foreach($shooted_messages as $smsg)


                <?php
                  $nameofreceiver = User::getNameofsender($smsg->receiver_id);
                  $cityofreceiver = User::getCityofsender($smsg->receiver_id); 
                ?>






             <th>{{ $nameofreceiver }}</th>

             <th>{{ $cityofreceiver }}</th>


             <th>{{ $smsg->message }}</th>

             <th>{{ $smsg->created_at }}</th>



             @endforeach
          </tbody>










        </table>
    </div>

 



@endsection
























































