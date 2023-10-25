@include("wellcom.menu.menu")
  <div class="untree_co-hero inner-page overlay" style="background-image: url('images/img-school-5-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Register</h1>

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
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <div class="row">
              <div class="col-12 mb-3">
                <!-- Name -->
                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" placeholder="Full name" required autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="form-control" />
              </div>
              <div class="col-12 mb-3">
                <!-- Email Address -->
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="form-control" />
              </div>
              <div class="col-12 mb-3">
                <!-- Password -->
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="form-control" />
              </div>
              <div class="col-12 mb-3">
               <!-- Confirm Password -->
                    <x-text-input id="password_confirmation" class="form-control"
                                    type="password"
                                    name="password_confirmation"
                                    placeholder="Re-type Password"
                                     required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="form-control" />
              </div>

              <div class="col-12 mb-3">
                <a href="{{ route('login') }}">Already registered?</a>
              </div>

              <div class="col-12">
                <input type="submit" value="Send Message" class="btn btn-primary">
              </div>
            </div>
          </form>
        </div>
      </div>

      
    </div>
  </div> <!-- /.untree_co-section -->

  @include("wellcom.menu.menufin")