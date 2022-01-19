<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ILogin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="./welcome.php">Home <span class="sr-only">(current)</span></a>
    </li>';
if (!$loggedin) {
  echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="./login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./signup.php">Signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contact.php">ContactUs</a>
      </li>
      ';
}
if ($loggedin) {
  echo '
  <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
  <a href="/login/logout.php"><button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3  hover:bg-blue-200 rounded text-base mt-1 mt-0">
  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
  <path d="M5 12h14M12 5l7 7-7 7"></path>
  </svg>Logout
</button></a>
</div>
';
}
echo '</ul>
    
  </div>
  </div>
</nav>';
?>