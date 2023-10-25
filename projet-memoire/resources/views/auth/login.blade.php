@include("wellcom.menu.menu")
  <div class="untree_co-hero inner-page overlay" style="background-image: url('images/img-school-5-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Login</h1>

            </div>
          </div>
        </div>
      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->




  <div class="untree_co-section">
    <div class="container">

      <div class="row mb-5 justify-content-center">
        <div class="col-lg-5 mx-auto order-1" data-aos="fade-up" data-aos-delay="200">
          <form method="POST" action="{{ route('login') }}" class="form-box">
        @csrf
            <div class="row">
              <div class="col-12 mb-3">
               <!-- Email Address -->
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="form-control" />
              </div>
              <div class="col-12 mb-3">
                <!-- Password -->

                    <x-text-input id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="form-control" />
              </div>

              <div class="col-12 mb-3">
                <label class="control control--checkbox">
                  <span class="caption">Remember me</span>
                  <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                  <div class="control__indicator"></div>
                </label>
              </div>

              <div class="col-12">
                <x-primary-button class="btn btn-primary">
                {{ __('Log in') }}
            </x-primary-button>
              @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            
              </div>
            </div>
          </form>
        </div>
      </div>

      
    </div>
  </div> <!-- /.untree_co-section -->

  @include("wellcom.menu.menufin")