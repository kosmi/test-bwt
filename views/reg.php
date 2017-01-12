<div class="reg">
    <div class="container">
        <div class="row main">
            <div class="panel-heading">
                <div class="panel-title text-center">
                    <h1 class="title">Company Name</h1>
                    <hr />
                </div>
            </div> 
            <div class="main-login main-center">
                <form class="form-horizontal" method="post" action="index.php?page=4" enctype='multipart/form-data'>

                    <div class="form-group">
                        <label for="login" class="cols-sm-2 control-label">First name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="login" id="name"  placeholder="Enter your Name"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="login" class="cols-sm-2 control-label">Last name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="login" id="name"  placeholder="Enter your Name"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="checkbox-inline"><input type="checkbox" value="">Male</label>
                        <label class="checkbox-inline"><input type="checkbox" value="">Female</label>
                    </div>             
                    <div class="form-group ">
                        <button type="submit" name='adduser' class="btn btn-primary btn-lg btn-block login-button">Register</button>
                    </div>

                    <div class="login-register">
                        <a href="index.php">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>	

