<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
         
            <div class="h1" > 
                  <!-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"> -->
                  <!-- <a href="#">   -->
                     <h1>Vinyl</h1>
                  <!-- </a> -->
            </div> 
        
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navi navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav marge me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Contact</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="#">Action</a></li>
                     <li><a class="dropdown-item" href="#">Another action</a></li>
                     <li><hr class="dropdown-divider"></li>
                     <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
               </li>
            </ul>
         
      </div>
      <div class="">
            <div class="user-info">
               <?php if (isset($_SESSION) && isset($_SESSION['user'])): ?>
                  <div>
                     <a href="me"><?= $_SESSION['user']['full_name'] ?></a>
                     <span>
                        <a href="logout">
                            <img src="images/logout.svg" id="logout" alt="logout" title="Log out" />
                        </a>
                     </span>
                  </div>
               <?php else: ?>
                  <div>
                     <a href="/login">Log in</a>&nbsp;&nbsp;|
                     <a href="/register">Register</a>
                  </div>
               <?php endif; ?>
            </div>
         </div>
      <!-- </div> 
         <form class="d-flex">
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success" type="submit">Search</button>
         </form>
      </div> -->
  </div>
</nav>


<!-- <nav class="navbar-expand-lg ">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-3"> -->
            <!-- <span class="guitar-icon"> -->
               <!-- <img src="../images/electric-guitar.svg"> -->
               <!-- <div class="h1"><h1>Vinyl</h1></div> -->
               

            <!-- </span> -->
         <!-- </div>
         <div class="col-md-6 " id="navbarNav">
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button> 
      
               <ul class="navbar-nav ">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
               </li>
               </ul>
           
         </div>
         <div class="col-md-3">
            <div class="user-info">
               <?php if (isset($_SESSION) && isset($_SESSION['user'])): ?>
                  <div>
                     <a href="me"><?= $_SESSION['user']['full_name'] ?></a>
                     <span>
                        <a href="logout">
                            <img src="images/logout.svg" id="logout" alt="logout" title="Log out" />
                        </a>
                     </span>
                  </div>
               <?php else: ?>
                  <div>
                     <a href="/login">Log in</a>&nbsp;&nbsp;|
                     <a href="/register">Register</a>
                  </div>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div> 
</nav> -->