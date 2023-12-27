<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
  font-family: "Poppins", sans-serif;
}
body {
  background-image: linear-gradient(
    to left bottom,
    #051937,
    #05162f,
    #051327,
    #040f1f,
    #010a18
  );

  background-size: 800%;
  animation: animateClr 1s infinite cubic-bezier(0.62, 0.28, 0.23, 0.99);
}
input[type="text"],
input[type="email"],
input[type="tel"],
textarea {
  border: none;
  border-bottom: 2px solid rgb(128, 126, 126);
  background: transparent;
  outline: none;
  width: 100%;
  text-transform: capitalize;
  padding: 1rem 0.4rem;
}
.aside {
  background-image: linear-gradient(
    to left bottom,
    #051937,
    #002350,
    #002d69,
    #003684,
    #01409f
  );
  animation: animateClr 5s infinite cubic-bezier(0.62, 0.28, 0.23, 0.99);
  background-size: 400%;
}

@keyframes animateClr {
  0% {
    background-position: 0% 50%;
  }

  50% {
    background-position: 100% 50%;
  }

  100% {
    background-position: 0% 50%;
  }
}

ion-icon:not([name="logo-codepen"]) {
  border: 1px solid currentColor;
  border-radius: 20%;
  padding: 1rem;
}

    </style>
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>