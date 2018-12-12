<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <!-- inserer boostrap-->
    <link rel="stylesheet" href=""{{URL:asset("bootstrap-3.3.7-dist/css/bootstrap.min.css")}}">
    <!-- inserer jquery-->
<script src="{{URL:asset("bootstrap-3.3.7-dist/js/jquery-3.3.1.js")}}"></script>
<!-- inserer jquery boostrap-->
<script src="{{URL:asset("bootstrap-3.3.7-dist/js/bootstrap.js")}}"></script>
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">




<style>

 
</style>
</head>
<body> 
<ul class="nav nav-tabs  nav-justified"> 
  <li class="active"><a href="">Home</a></li>
  <li class="dropdown">
    <a href="" class="dropdown-toggle" data-toggle="dropdown">Menu 1<span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="">Menu 2.1</a></li>
        <li><a href="">Menu 2.1</a></li>
        <li><a href="">Menu 3.1</a></li>
  
  
    </ul>
  
  </li>
  <li><a href="">Menu 2</a></li>
  <li><a href="">Menu 3</a></li>

</ul>







<div class="btn-group btn-group-vertical">
<button class="btn btn-info">info1</button>
<button class="btn btn-info">info2 </button>
</div>



<ul class="breadcrumb">
<li class="previous"><a href="" >1</li></a>
<li><a href="" >1</li></a>
<li><a href="" >1</li></a>
</ul>

 <div class="progress">
   <div class="progress-bar  progress-bar-info progress-bar-striped" style="width:70%" ></div>


 </div>




  <div class="container">
   <div class="panel-group id="accordion"" >
     <div class="panel panel-default" >
      <div class="panel-heading">
      <h2 class="panel-title"><a href="#cola1" data-toggle="collapse" data-parent="#accordio"><h4>collapse group 1</h4></a>  </h2>
      </div>
      <div id="cola1" class="collapse">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </div>
    </div>
   </div>
   <div class="panel-group" id="accordion">
      <div class="panel panel-default">
       <div class="panel-heading">
       <h2><a href="#cola2" data-toggle="collapse" data-parent="#accordion"><h4>collapse group 1</h4></a>  </h2>
       </div>
       <div id="cola2" class="collapse">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
       </div>
     </div>
    </div>
  </div>  




  <div class="container">
 <h2>collapsible list group</h2>
 <div>click on the collapsible panel to open and close it</div>
 <div class="panel-group">
   <div class="panel panel-default">
   <div class="panel panel-heading">
     <a href="#colp" id="" data-toggle="collapse"> collapsible list group</a> </div>
     <div  id="colp" class="collapse">
     <ul id=""  class="list-group">
       <li class="list-group-item">one</li>
     </ul>
     <div class="panel-footer">footer</div>
    </div>
    
 </div>
</div>





  <div class="panel panel-primary">
   <div class="panel-heading">header</div>
   <div class="panel-body">the body</div>
   <div class="panel-footer">the footr</div>
  </div>  
  <div class="dropdown" >
<buttton class="btn btn-primary dropdown-toggle" data-toggle="dropdown"   >dropdown</buttton>
<ul class="dropdown-menu-right">
  <li><button>ff</button></li>
  <li><button>vv</button></li>
</ul>
</div>
<!---<button data-target="#demo" data-toggle="collapse">appuyer</button>
<button id="demo" class="collapse-in">jthdrr</button>->



<!--


<button data-target="#demo" data-toggle="collapse"  >arreter</button>

  <div class="collapse in" id="demo" >
    <div class="list-group">
        <a href="#" class="list-group-item">First item</a>
        <a href="#" class="list-group-item">Second item</a>
        <a href="#" class="list-group-item">Third item</a>
      </div>
  
    </div>
-->

  <div class="panel panel-info" >
    <div class="panel-heading">un header</div>
    <div class="panel-body">un body</div>
    <div class="panel-footer">le footer</div>
  </div>

</div>


  <div class="container-fluid">
    <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" id="menu1"  data-toggle="dropdown" >sony<span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu "   role="menu"  aria-labelledby="menu1" >
        <li><a href="" role="menuitem">a</a></li>
        <li class="disable"><a href="" role="menuitem">a</a></li>
        <li class="dropdown-header">divider</li>
        <li><a href="" role="menuitem">d</a></li>
        </ul>
          </div>    
        </div>
  <p class="lead alert alert-warning">salut tttttout le monde</p>
  <p class="text-capitalize tout LE">salut out LE</p>
    <a href="" class="bg-primary">2</a>
   <div class="container">
      <h2>Pagination - Active State</h2>
      <p>Add class .active to let the user know which page he/she is on:</p>
      <ul class="pagination">
        <li><a href="boostrap2.html">1</a></li>
        <li class="active"><a href="boostrap1.html">2</a></li>
        <li class="active"><a href="#" >3</a></li>
        <li><a href="#">4</a></li>
       
        <li><a href="#">5</a></li>
      </ul>
     
   <ul class="pagination">
     <li ><span><span class="caret"></span></span><a href="">1</a></li>
     <li ><a href="" class="bg-primary">2</a></li>
     <li ><a href="">3</a></li>
     <li ><a href="">4</a></li>
     <li> <a href=""><span class="caret"></span></a></li>
   </ul>
   <span class="caret"></span>
   <p class="bg-success">4444</p>
   </div>


    <div class="progress">
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuemin="10px" aria-valuenow="50px" aria-valuemax="90px" style="width:40% "></div>
       <span class="sr-only">10</span>
      </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success" role="progresssbar"  aria-valuemin="10px" aria-valuenow="50px" aria-valuemax="100px" style="width:50% "></div>
       <span class="sr-only">120</span>
      </div>
  <div class="btn-group">
    <button class="btn btn-primary">Sony</button>
    <button class="btn btn-primary">Apple</button>
    <button class="btn btn-primary">Itel</button>
    <div class="btn-group">
    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" ><span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="">Tablet</a></li>
      <li><a href="">Portable</a></li>
    </ul>
  </div>
    <span class="badge">2</span>
    <span class="label label-default">default</span>
  </div>
 <div class="progress">
  <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuenow="60" aria-valuemax="100" style="width:10% "></div>
 
 <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuenow="50" aria-valuemax="100" style="width:50% "></div>
 </div>
 </body>
</html>