<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Sriracha" rel="stylesheet">

    <title>Hello, world!</title>
    <style>
      html,body {
          height: 100%;
          font-family: 'Sriracha', cursive;
      }
      .cover-container {
          height: 100vh;
      }

      .flex-fill {
          flex: 1 1 auto;
      }
      .fs-100 {
        font-size: 100px;
      }
      body {
  margin: 0;
  background: #000;
}
video {
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
  background-size: cover;
  transition: 1s opacity;
}
.stopfade {
   opacity: .5;
}

#polina {
  font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
  font-weight:100;
  background: rgba(0,0,0,0.3);
  color: white;
  padding: 2rem;
  width: 33%;
  margin:2rem;
  float: right;
  font-size: 1.2rem;
}
h1 {
  font-size: 3rem;
  text-transform: uppercase;
  margin-top: 0;
  letter-spacing: .3rem;
}
#polina button {
  display: block;
  width: 80%;
  padding: .4rem;
  border: none;
  margin: 1rem auto;
  font-size: 1.3rem;
  background: rgba(255,255,255,0.23);
  color: #fff;
  border-radius: 3px;
  cursor: pointer;
  transition: .3s background;
}
#polina button:hover {
   background: rgba(0,0,0,0.5);
}

a {
  display: inline-block;
  color: #fff;
  text-decoration: none;
  background:rgba(0,0,0,0.5);
  padding: .5rem;
  transition: .6s background;
}
a:hover{
  background:rgba(0,0,0,0.9);
}
@media screen and (max-width: 500px) {
  div{width:70%;}
}
@media screen and (max-device-width: 800px) {
  html { background: url(https://thenewcode.com/assets/images/polina.jpg) #000 no-repeat center center fixed; }
  #bgvid { display: none; }
}
:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  /*
  background: #9CECFB;
  background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
  background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB); */
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}
.videoContainer {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

iframe {
  /* optional */
  width: 100%;
  height: 100%;
}
div.overlay {
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    background: #000;
    opacity: 0.6;
    filter: alpha(opacity = 50); /* required for opacity to work in IE */
}

div.overlay-middle {
    opacity: 0.8;
    filter: alpha(opacity = 50); /* required for opacity to work in IE */
}

    </style>
  </head>
  <body>

    <div class="videoContainer overlay">
        <iframe class="videoContainer__video" width="100%" height="100%" src="https://www.youtube.com/embed/vwLjMTUmlp8?autoplay=1&mute=1&enablejsapi=1&controls=0&fs=0&loop=1&rel=0&showinfo=0&disablekb=1s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>



    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="container-fluid cover-container text-center d-flex flex-column">
              <div class="row align-items-center justify-content-center flex-fill">
                  <div class="row col-md-4">
                      <div class="col-md-1"></div>
                      <div class="col-md-10" align="left">
                        <div class="col-sm-12 mx-auto">
                          <div class="card card-signin my-5 overlay-middle">
                            <div class="card-body">
                              <h5 class="card-title text-center">Sign In</h5>
                              <form class="form-signin">
                                <div class="form-label-group">
                                  <input type="email" id="login-username" class="form-control" placeholder="Email address">
                                  <label for="login-username">Email address</label>
                                </div>

                                <div class="form-label-group">
                                  <input type="password" id="login-password" class="form-control" placeholder="Password">
                                  <label for="login-password">Password</label>
                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="button">Sign in</button>
                                <hr class="my-4">
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>


                  <div class="row col-md-8">
                      <div class="col-md-1"></div>
                      <div class="col-md-10" align="left">
                        <div class="col-sm-12 mx-auto">
                          <div class="card card-signin my-5 overlay-middle">
                            <div class="card-body">
                              <h5 class="card-title text-center">Register</h5>
                              <form class="form-signin">
                                <div class="row">

                                  <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Prefix
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Mr.</a>
                                      <a class="dropdown-item" href="#">Ms.</a>
                                      <a class="dropdown-item" href="#">Mrs.</a>
                                    </div>
                                  </div>

                                    <!--  <div class="col">
                                    <div class="form-label-group">
                                      <input type="text" id="reg-prefix" class="form-control" placeholder="Email address">
                                      <label for="reg-prefix">Prefix</label>
                                    </div>
                                  </div>  -->

                                  <div class="col">
                                    <div class="form-label-group">
                                      <input type="text" id="reg-firstname" class="form-control" placeholder="Email address">
                                      <label for="reg-firstname">Firstname</label>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-label-group">
                                      <input type="text" id="reg-lastname" class="form-control" placeholder="Email address">
                                      <label for="reg-lastname">Lastname</label>
                                    </div>
                                  </div>
                                </div>


                                  <div class="row">

                                    <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Gender
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Male</a>
                                        <a class="dropdown-item" href="#">Female</a>
                                        <a class="dropdown-item" href="#">Other</a>
                                      </div>
                                    </div>

                                  <div class="col">
                                    <div class="form-label-group">
                                  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                                  <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
                                  <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />

                                  <input id="datepicker" type="text" class="form-control" placeholder="bdate" >
                                  <!--<label for="reg-bdate">Birth Day</label>-->
                                  <script>
                                      $('#datepicker').datepicker({
                                          uiLibrary: 'bootstrap4'
                                      });
                                  </script>
                                  </div>
                                </div>

                                  <div class="col">
                                    <div class="form-label-group">
                                  <input type="text" id="reg-age" class="form-control" placeholder="Age">
                                  <label for="reg-age">Age</label>
                                  </div>
                                  </div>
                                </div>

                                  <div class="row">
                                    <div class="col">
                                  <div class="form-label-group">
                                    <input type="email" id="reg-address" class="form-control" placeholder="address">
                                    <label for="reg-address">Address</label>
                                  </div>
                                </div>
                                  <div class="col">
                                    <div class="form-label-group">
                                      <input type="email" id="reg-phone" class="form-control" placeholder="phone">
                                      <label for="reg-phone">Phone</label>
                                    </div>
                                  </div>
                                </div>





                                <div class="form-label-group">
                                  <input type="email" id="reg-email" class="form-control" placeholder="Email address">
                                  <label for="reg-email">Email address</label>
                                </div>

                                <div class="form-label-group">
                                  <input type="text" id="reg-username" class="form-control" placeholder="Email address">
                                  <label for="reg-username">Username</label>
                                </div>
                                <div class="form-label-group">
                                  <input type="password" id="reg-password" class="form-control" placeholder="Password">
                                  <label for="reg-password">Password</label>
                                </div>
                                <div class="form-label-group">
                                  <input type="password" id="reg-confirm-password" class="form-control" placeholder="Password">
                                  <label for="reg-confirm-password">Confirm Password</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="button">Register</button>
                                <hr class="my-4">
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>

  <script>

  </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </body>
</html>
