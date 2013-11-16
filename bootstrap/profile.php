<!DOCTYPE html>
<html>
    <head>
        <meta charsest="utf-8"/>
        <title>Form</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <style type="text/css">
                p{
                    width: 130px;
                    float: left;
                    text-align: left;
                    margin-right: 15px;
                    display: block;
                }
                .menu{
                    margin: 20px;
                }
            
            </style>
</head>
<body>
    <!--Drop down menu-->
    <div class="menu">
        <div class="navbar navbar-static">
            <div class="navbar-inner">
                <a href="#" class="brand">UBC Grad Manager</a>
                <ul role="navigation" class="nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="form2.html">Form</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Annual Reports<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Annual Report 1</a></li>
                            <li><a href="#">Annual Report 2</a></li>
                            <li><a href="#">Annual Report 3</a></li>
                            <li><a href="#">Annual Report 4</a></li>
                            <li><a href="#">Annual Report 5</a></li>
                            <li><a href="#">Annual Report 6</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--Form-->
        <div class="menu">
    <form class="well" id="form">
        <p>Student ID</p>
        <input type="text" class="span3"/>
        <br>
        
        <p>Name</p>
        <input type="text" class="span3" placeholder="First name"/> &nbsp;
        <input type="text" class="span3" placeholder="Last name"/>
        <br>
        
        <p>Degree</p>
        <div class="btn-group" data-toggle="buttons-radio">
            <button type="button" class="btn btn-primary">MSc.</button>
            <button type="button" class="btn btn-primary">PhD.</button>
        </div>
        <br><br>
        
        <p>Supervisors</p>
        <input type="text" class="span3" placeholder="First name"/> &nbsp;
        <input type="text" class="span3" placeholder="Last name"/>
        <br><p></p>
        <input type="text" class="span3" placeholder="First name"/> &nbsp;
        <input type="text" class="span3" placeholder="Last name"/>
        <br>
        
        <p>Supervisors' emails</p>
        <input type="text" class="span3" placeholder="e.g. supervisor1@ubc.ca"/>
        <br><p></p>
        <input type="text" class="span3" placeholder="e.g. supervisor2@ubc.ca"/>
        <br>
        
        <p>Program</p>
        <div class="btn-group" data-toggle="buttons-radio">
            <button type="button" class="btn btn-primary">IGSO</button>
            <button type="button" class="btn btn-primary">IGS</button>
            <button type="button" class="btn btn-primary">MATH</button>
        </div>
        <br><br>
        
        <p>Room</p>
        <div class="btn-group" data-toggle="buttons-radio">
            <button type="button" class="btn btn-primary">ART</button>
            <button type="button" class="btn btn-primary">ASC</button>
            <button type="button" class="btn btn-primary">SCI</button>
            <button type="button" class="btn btn-primary">FIP</button>
            <button type="button" class="btn btn-primary">EME</button>
        </div>
        <br><br><p></p>
        <input type="text" class="span3" placeholder="Room #"/>
        <br>
        
        <p>Scholarship</p>
        <input type="text" class="span3" placeholder="UGR/EGF/Other"/>
        <br>
        
        <p>GTA</p>
        <input type="text" class="span3" placeholder="First name"/>
        <br>

        <br>
        <button class="btn btn-primary">Submit</button>
        <button class="btn">Clear</button>
    </form>
      </div>


</body>
</html>
