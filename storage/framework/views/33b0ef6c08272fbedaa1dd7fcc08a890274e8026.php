<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->

</head>

<body>
<style>
    .feather-eye-off {
  display: none;
}
</style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
                </li>

            </ul>

        </div>
    </nav>
    <br>
    <br>



    <?php if(Session::has('status')): ?>
        <br>

        <div class="container">
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
        </div>
    <?php endif; ?>
    <br>
    <br>
    <?php echo $__env->yieldContent('content'); ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>

    <script>
        const eye = document.querySelector(".feather-eye");
        const eyeoff = document.querySelector(".feather-eye-off");
        const passwordField1 = document.querySelector("input[name=password]");

        const eyon = document.querySelector(".eyon");
        const eyoff = document.querySelector(".eyoff");
        const passwordField2 = document.querySelector("input[name=password_confirmation]");
        eye.addEventListener("click", () => {
            eye.style.display = "none";
            eyeoff.style.display = "block";

            passwordField1.type = "text";
        });

        eyeoff.addEventListener("click", () => {
            eyeoff.style.display = "none";
            eye.style.display = "block";

            passwordField1.type = "password";
        });


        eyon.addEventListener("click", () => {
            eyon.style.display = "none";
            eyoff.style.display = "block";

            passwordField2.type = "text";
        });

        eyoff.addEventListener("click", () => {
            eyoff.style.display = "none";
            eyon.style.display = "block";

            passwordField2.type = "password";
        });
    </script>
</body>

</html>
<?php /**PATH /home/kigamekun/authLaravel/resources/views/layouts/guest.blade.php ENDPATH**/ ?>