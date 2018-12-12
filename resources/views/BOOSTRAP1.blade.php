<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
    <link rel="stylesheet"  href="css/bootstrap.min.css"  />
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <!-- <script src="jquery-3.3.1.js"></script>  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="main.js"></script>
   
<style>


/*table{
    border-collapse: collapse;
}*/
/*td{
    border: 1px solid blue;
    border-collapse: collapse;
}*/
</style>   
</head>
<body>
<!-- <img src="{{URL::asset("1.jpg")}}" height="400"> -->
<img src="{{ asset('1.jpg') }}" >


        <form action="/action_page.php">
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd">
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        <iframe frameborder="0" width="480" height="270" src="https://www.dailymotion.com/embed/video/x6wvb6j" allowfullscreen allow="autoplay"></iframe>
        <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Indicates a successful or positive action.
      </div>
    <div class="alert alert-success">
         <p>succes <a href="#"  class="alert-link"> mon alerte</a></p> 
    </div>
        <a href="#" class="alert-link">read this message</a>
  <div class="container-fluid">
      <div class="alert alert-success">
        <p>c'est un succes</p>
      </div>
      <div class="alert alert-info">
    <p>c'est une alerte</p> <a href="#" class="alert-link">liens</a>
      </div>
      <div class="alert alert-danger">
      <p>danger</p>
    </div>
      <div class="alert alert-warning">
      <p>attention</p>
      </div>
  </div>

  <!--  <div class="embed-responsive embed-responsive-16by9">
           <iframe src="https://www.youtube.com/embed/cu4CZ4A6wmU" class="embed-responsive-item"></iframe>
    </div>
    <div class="embed-responsive embed-responsive-4by3">
      <iframe src="https://www.youtube.com/embed/cu4CZ4A6wmU" class="embed-responsive-item"></iframe>
    </div>
-->       
        <div class="container">
           <div class="page-header">
            <p>mon entete de page</p>
           </div>
           <div class="jumbotron">
               <h2>mon jumbotron dans mon container</h2>

           </div>
        </div>
        <div class="jumbotron"> 
           <h2>mon jumbotron hors de mo container</h2>
        </div>

     <!--   <div class="container">
                <h2>Responsive Embed</h2>
                <p>Create a responsive video and scale it nicely to the parent element with an 16:9 aspect ratio</p>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/cu4CZ4A6wmU" class="embed-responsive-item" frameborder="1" allow="accelerometer; autoplay"></iframe>
                </div>

                 <div class="embed-responsive embed-responsive-4by3">
                     <iframe src="https://www.youtube.com/embed/cu4CZ4A6wmU" classe="embed-responsive-item"></iframe>

                 </div> --> 
               



                <div class="container">
                <h2>Image Gallery</h2>
                <p>The .thumbnail class can be used to display an image gallery.</p>
                <p>The .caption class adds proper padding and a dark grey color to text inside thumbnails.</p>
                <p>Click on the images to enlarge them.</p>
       <div class="row">
           <div class="col-md-4 thumbnail" >
           <a href="images/supermarché.jpg">
             <img src="images/supermarché.jpg">        
        
          <div class="caption">
              <p>ma premiere image</p>
          </div>
        </a>
        </div>
          <div class="col-md-4 thumbnail">
             <a href="images/supermarché.jpg">
             <img src="images/supermarché.jpg">
             
             <div class="caption"><p>ma deuxieme image </p></div>
            </a>
          </div>
           <div class="col-md-4 thumbnail">
               <!--<div class="thumbnail">-->
                   <a href="images/supermarché.jpg">
                   <img src="images/supermarché.jpg">
                   <div class="caption"><p>mon toirsieme image</p></div>
                </a>

               

           </div>
        </div>    
     </div>



       
   




        <img src="images/chambre-charles.jpg" class="img-thumbnail img-responsive" width="100" height="100">
        <div class="container">
                
                <table class="table table-striped table-bordered table-condensed">
                        <th>image</th>
                        <th>prenom</th>
                        <th>email</th>
                <tr class="success">
                    <td>image coins arrondis avec classe ".img-rounded":</td>
                    <td> <img src="images/cartier-charles.jpg" class="img-rounded" height=100></td>
                    <td>niacadie@gmail.com</td>
                </tr>
                <tr class="active">
                        <td><p>image en rond avec classe ".img-circle"</p>
                        </td>
                        <td class="text-center" > <img src="images/chambre-charles.jpg" class="img-circle" height=100></td>
                        <td>ni@gmail.com</td>
                    </tr>
                    <tr class="active">
                            <td><p>image en vignette avec classe ".img-thumbnail"</p>
                            </td>
                            <td class="text-center" > <img src="images/chambre-charles.jpg" class="img-thumbnail" height="100" width="100"></td>
                            <td>ni@gmail.com</td>
                        </tr>
                
                </table>
                <h2>Rounded Corners</h2>
                           
                
                    
              </div>
    <div class="container"> 
        <table class="table table-bordered table-condensed table-hover ">
    <th>nom</th>
    <th>prenom</th>
    <th>email</th>
    <tr class="success">
        <td>niacadie</td>
        <td>charles</td>
        <td>niacadie@gmail.com</td>
    </tr>
    <tr class="infos">
            <td>niac</td>
            <td>chami</td>
            <td>ni@gmail.com</td>
        </tr>
    
    </table>

    </div>
    <div>
        <dl class="dl-horizontal container">
            <dt>entree</dt>
                <dd>carotte</dd>
                <dd>mais</dd>
            <dt>dessert</dt>
                <dd>fruits</dd>
                <dd>coco</dd>     
        </dl> 
    </div>
    
    
      
</body>
</html>