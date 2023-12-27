@extends ('layouts.app')

@section ('title','contact Page')
@section('content')



<div class="container">
  <div class="bg-light">
    <div class="row mt-5">
      <div class="col-lg-8 col-md-12 p-5 bg-white rounded-3">
        <div class="d-flex mb-3 flex-column">
          <h1 class="h5 text-capitalize my-4">What service You need ?</h1>
          <div class="d-flex flex-wrap">
          </div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @if (session('msg'))
        <div class="alert alert-success">
          {{session('msg') }}
        </div>
        @endif


        <form class="row mb-3" method="post" action="send">
          @csrf
          <div class="col-md-6 p-3">
            <input placeholder="first name" type="text" name="name" id="" value="{{old ('name')}}" />
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 p-3">
            <input placeholder="phone" type="tel" name="phone" id="" value="{{ old('phone') }}" />
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 p-3">
            <input placeholder="Subject" type="text" name="subject" id="" value="{{ old('subject') }}" />
            @error('subject')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 p-3">
            <input placeholder="E-mail" type="email" name="email" id="" value="{{ old('email') }}" />
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <textarea name="message" placeholder="write your message" id="" cols="30" rows="1">{{old ('message')}}</textarea>
          <div class="text-end mt-4">
            <input class="btn px-4 py-3 btn-outline-dark" type="submit" value="Send Message" />
            @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </form>
      </div>
      <div class="col-lg-4 col-md-12 text-white aside px-4 py-5">
        <div class="mb-5">
          <h1 class="h3">Contact Information</h1>
          <p class="opacity-50">
            <small>
              Fill out the from and we will get back to you whitin 24 hours
            </small>
          </p>
        </div>
        <div class="d-flex flex-column px-0">
          <ul class="m-0 p-0">
            <li class="d-flex justify-content-start align-items-center mb-4">
              <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                <ion-icon name="call"></ion-icon>
              </span>
              <span>+134 1234 1234</span>
            </li>
            <li class="d-flex align-items-center r mb-4">
              <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                <ion-icon name="mail"></ion-icon>
              </span>
              <span>Help@contact.com</span>
            </li>
            <li class="d-flex justify-content-start align-items-center mb-4">
              <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                <ion-icon name="pin"></ion-icon>
              </span>
              <span>52 Buddy Ln Conway, <br />
                Arkansas(AR), 72032
              </span>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
</div>


@endsection