<style>
.modal-backdrop.in {
    display: none!important;
}
</style>
      <!-- Header: Logo and Main Nav -->
      <header>
         <!--<div id="navOne" class="navbar navbar-wp navbar-contrasted" role="navigation">-->
         <div id="navOne" class="navbar navbar-default " role="navigation">
            <div class="container">
               <div class="navbar-header">
                  <!--<button type="button" class="navbar-toggle navbar-toggle-aside-menu">
                     <i class="fa fa-outdent icon-custom"></i>
                     </button>-->
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <!--<h1>CLIENT LOGO HERE</h1> -->
                  <a class="navbar-brand visible-lg" href="index.php" title="Chelra">
                  <img src="img/cocomat.light.png" alt="Chelra" style='height: 35px;'>
                  </a>
                  <a class="navbar-brand visible-md" href="index.php" title="Chelra">
                  <img src="img/cocomat.light.png" alt="Chelra" style='height: 35px;'>
                  </a>
                  <a class="navbar-brand visible-sm " href="index.php" title="Chelra">
                  <img src="img/cocomat.light.png" alt="Chelra" style='height: 35px;'>
                  </a>
                  <a class="navbar-brand visible-xs " href="index.php" title="Chelra">
                  <img src="img/cocomat.light.png" alt="Chelra" style='height: 35px;'>
                  </a>
               </div>
               <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                     <li><a href="index.php">Home</a></li>
                     <li><a href="browse-works.php">Browse</a></li>
                     <!-- artists  -->
                     <li>
                        <a href="artists.php">Artists</a>
                     </li>
                     <!-- services  -->
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Services</a>
                        <ul class="dropdown-menu">
                           <li><a href="services-art-consulting.php">Art Consulting</a></li>
						         <li><a href="commissioned-work.php">Commissioned Work</a></li>
						   
                        </ul>
                     </li>
                     <!--  info  -->
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Info</a>
                        <ul class="dropdown-menu">
                           <li><a href="info-contact-info.php">Contact Gallery</a></li>
                           <li><a href="info-about.php">About Chelra</a></li>
                           <li><a href="info-update.php">Update Your Address</a></li>
                        </ul>
                     </li>
                     <!--  search --> 
                     <li class="dropdown animate-click" data-animate="animated fadeInUp" style="z-index:500;">
                        <a href="#" class="dropdown-toggle dropdown-form-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                        <ul class="dropdown-menu dropdown-menu-user animate-wr">
                           <li id="dropdownForm">
                              <div class="dropdown-form">
                                 <form action="browse-works.php" method="get" class="form-horizontal form-default form-inline search-box">
                                    <div class="input-group">
                                       <div class="col-xs-4">
                                          <input type="text" id="keyword" name="keyword" class="form-control" placeholder="keywords...">
                                       </div>
                                       <span class="input-group-btn">
                                       <button class="btn btn-two" type="submit">Go!</button>
                                       </span>
                                    </div>
                                 </form>                               
                              </div>
                           </li>
                        </ul>
                     </li>               
                  </ul>
               </div>
               <!--/.nav-collapse -->
            </div>
         </div>
      </header>