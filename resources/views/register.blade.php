<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              {{-- <form> --}}

                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" id="form1Example13" class="form-control form-control-lg" name="name"/>
                    <label class="form-label" for="form1Example13">Name</label>
                  </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form1Example13" class="form-control form-control-lg" name="email" />
                  <label class="form-label" for="form1Example13">Email address</label>
                </div>

                <!-- Phone Number input -->
                <div class="form-outline mb-4">
                    <input type="number" id="form1Example13" class="form-control form-control-lg" name="phone_number" />
                    <label class="form-label" for="form1Example13">Phone Number</label>
                  </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example23" class="form-control form-control-lg" name="password"/>
                  <label class="form-label" for="form1Example23">Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="signup()">Sign up</button>
              {{-- </form> --}}
            </div>
          </div>
        </div>
      </section>

      <script src="/js/auth/register.js"></script>
</body>
</html>
