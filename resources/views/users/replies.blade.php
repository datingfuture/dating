
<?php use App\User; ?>





@extends('layouts.frontview.master')



@section('content')


   



    <div class="col-md-8">
        


        <h1>Replies</h1>



        <table id="replies" class="table table-dark">
            
         <thead>
          <tr>
             <th>Name</th>
             <th>Location</th>
             <th>Response</th>
             <th>Date/Time</th>
             <th>Actions</th>
          </tr>


         </thead>

          <tbody>


            @foreach($replies as $reply)


             <?php
             $nameofsender = User::getNameofsender($reply->sender_id);
             $cityofsender = User::getCityofsender($reply->sender_id);
             $usernameofsender = User::getUsernameofuser($reply->sender_id);

             $encoded_message = encrypt($reply->message);

             ?>




            <tr>
             <th @if($reply->viewed==0) style="font-weight:bold; color: #9FC3FF;" @endif>{{ $nameofsender }}</th>

             <th @if($reply->viewed==0) style="font-weight:bold; color: #9FC3FF;" @endif>{{ $cityofsender }}</th>

             <th @if($reply->viewed==0) style="font-weight:bold; color: #9FC3FF;" @endif>{{ substr($reply->message,0,10) }}<a title="View Details of Reply" data-toggle="modal" data-target="#myReplies{{ $reply->id }}">...</a></th>
            

             <th @if($reply->viewed==0) style="font-weight:bold; color: #9FC3FF;" @endif>{{ $reply->created_at }}</th>

              <th>
                  
                   <a title="View Details of Reply" href="#"><i class="fa fa-file-text" aria-hidden="true"></i></a>

                  &nbsp;

              


                    <a rel="{{ $reply->id }}" rel1="delete-reply" class="deleteReply" href="javascript:"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;</a>
                           
                  <a href="{{ url('contact/'.$usernameofsender.'?encoded_message='.$encoded_message)}}" target="_blank">
                    <i class="fa fa-reply" aria-hidden="true"></i>&nbsp;

                  </a>
                  

                  <button class="btn btn-primary" data-toggle="modal" data-target="#myReplies{{ $reply->id }}">View Details</button>

                     <!-- CONTACT MODAL -->
                      <div class="modal fade text-dark" id="myReplies{{ $reply->id }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Replies Details</h5>
                              <button class="close" data-dismiss="modal">
                                <span>&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="form-group">
                                  <label for="name">{{ $reply->message }}</label>
                                  <input type="text" class="form-control">
                                </div>
                               
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button class="btn btn-primary btn-block">Submit</button>
                            </div>
                          </div>
                        </div>
                      </div>







              </th>


          </tr>

             @endforeach
          </tbody>










        </table>
    </div>

 



@endsection


















































































































