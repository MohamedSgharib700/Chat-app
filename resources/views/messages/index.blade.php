@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <h2> Online Users </h2>
                <hr>

                <h4 id="offline-users"> No Online Users </h4>

                <ul class="list-group" id="online-users">



                </ul>

            </div>

            <div class="col-md-9 d-flex-column style= height: 80vh;">

              <div class="h-100 bg_white mb-4 p-5" id="chat" style="overflow-y:scroll;">

                  @foreach($messages as $message)

                      <div class="mt-4 w-50 text-white p-3 rounded {{ auth()->user()->id == $message->user_id ? 'float-right bg-primary' : 'float-left bg-warning'}}">

                        <p> {{ $message->body }} </p>

                      </div>

                      <div class="clearfix"></div>

                  @endforeach

              </div>

              <form action="" class="d-flex">

                <input type="text" name="" data-url="{{route('messages.store')}}" style="margin-right: 10px" class="flex-column" id="chat-text">

                  <button class="btn btn-primary" id="submit"> Send </button>

              </form>

            </div>

        </div>







@endsection
