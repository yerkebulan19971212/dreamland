<html>
<head>
    <style>
        body{
            background: #00589F;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00589F', endColorstr='#0073CF', GradientType=0);
            background: -webkit-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
            background: -moz-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
            background: -ms-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
            background: -o-linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
            background: linear-gradient(to bottom, #00589F 50%, #0073CF) !important;
            color: white;
        }

        div.well{
            height: 250px;
        }

        .Absolute-Center {
            margin: auto;
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
        }

        .Absolute-Center.is-Responsive {
            width: 50%;
            height: 50%;
            min-width: 200px;
            max-width: 400px;
            padding: 40px;
        }

        #logo-container{
            margin: auto;
            margin-bottom: 10px;
            width:200px;
            height:30px;
            background-image:url('http://placehold.it/200x30/000000/ffffff/&text=BRAND+LOGO');
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="Absolute-Center is-Responsive">
            <div id="logo-container"></div>
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <form action="" id="loginForm">
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input class="form-control" type="text" name='username' placeholder="username"/>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input class="form-control" type="password" name='password' placeholder="password"/>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-def btn-block">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
