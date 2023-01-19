<?php
  require_once("login.php");
?>

<!------------------HTML----------------------------->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dynamic People's Association</title>
    <link rel="icon" type="image/x-icon" href="/img/dynamic.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="css/style.css" rel="stylesheet">
    <style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;

  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}


@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
}

    </style>
 
 </head>

  <body onload="myFunction()" style="margin:0;">

     <div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">            
      <div class="d-flex"> 
      <a href="about.html" class="btn btn-primary">About Us</a>              
      </div>
    </nav>

         <div class="bs-example  pt-4" >
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12 bg-white text-center">
                  <img class="m-3" src="img/dynamic.ico" alt="dynamic"> 
                  <h1 style="color: #309118;">Welcome to Dynamic People's Association</h1>
                  <p style="font-weight: bold;">Click the button below to login.</p>

                  <i class='far fa-hand-point-down' style='font-size:48px;color:red'></i><br>
                    <!-- Button trigger modal -->
                  <button type="button" class="btn btn-success btn-lg mb-4" data-toggle="modal" data-target="#exampleModal">Click Me!</button>
                    
                </div>
              </div>
            </div>
          </div>

            <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header justify-content-center">
                  <h1 class="modal-title fs-3" id="exampleModal">DPA Login Form</h1>
                  <!--<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>-->
                </div>
                <div class="modal-body">
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form2Example1" class="form-control" name="username" required/>
                      <label class="form-label" for="form2Example1">Username</label>
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example2" class="form-control" name="password" required/>
                      <label class="form-label" for="form2Example2">Password</label>
                    </div>
                  
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                          <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                      </div>
                  
                      <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                      </div>
                    </div>
                  
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                    
                   
                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Not a member? <a href="#!">Register</a></p>
                      <p>or sign up with:</p>
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                      </button>
                  
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                      </button>
                  
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                      </button>
                  
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                      </button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>

        <!--------------------------------------------------------------------------------------------------------------------------------->
    <script src="https://kit.fontawesome.com/50d75bf39a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
              'use strict'

              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.querySelectorAll('.needs-validation')

              // Loop over them and prevent submission
              Array.prototype.slice.call(forms)
                .forEach(function (form) {
                  form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                      event.preventDefault()
                      event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                  }, false)
                })
            })()
      </script>

      <script type="text/javascript">
      $(document).on('click', '.formsubmitbutton', function(e) {
          e.preventDefault();
          $.ajax({
              type: "POST",
              url: $(".form").attr('action'),
              data: $(".form").serialize(),
              success: function(response) {
                  if (response === "success") {
                        window.reload;
                  } else {
                        alert("invalid username/password.  Please try again");
                  }
              }
          });
      });
      </script>

      <!-- This js script loads the website after the loading is complete-->
 <script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
  </body>

  <!--<footer class="bg-light text-center text-black p-4">-->

  <footer class="bg-light text-center">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form5Example27" class="form-control" />
              <label class="form-label" for="form5Example27">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
  </div>
  <!-- Grid container -->

  <!-- Grid container -->
  <div class="container p-4">
      
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="https://www.facebook.com/profile.php?id=100088309059486" 
        target="_blank"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>
      
            <!-- WhatsApp -->
            <a
        class="btn text-white btn-floating m-1"
        style="background-color: green;"
        href="https://chat.whatsapp.com/GssVkkdDEB961tTKimv5bU"
        target="blank"
        role="button"
        ><i class="fab fa-whatsapp"></i
      ></a>
      
      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->


   <!-- Copyright -->
   <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
   Copyright&#169; 2022 @ Dynamic People Association. All rights reserved. | Designed by Timosky
  </div>
  <!-- Copyright -->

  </footer>
  
</div>       
</html>