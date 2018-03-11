<!DOCTYPE html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 
 <style type="text/css">
    body {
    background: url(https://png.pngtree.com/thumb_back/fw800/back_pic/02/67/06/85578c746f8616c.jpg);
      background-size: cover;
   }      
  </style>  
</head>
<body>

<
    <div class="container"  >    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">ลงชื่อเข้าใช้</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">ลืมรหัสผ่าน</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> จำรหัสผ่านของฉัน
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <a id="btn-login" href="#" class="btn btn-success">เข้าสู่ระบบ  </a>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Facebook</a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                          
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            สมัครสมาชิก
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"></div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">เข้าสู่ระบบ</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
          
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">ชื่อ</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="กรุณากรอกชื่อ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">นามสกุล</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="กรุณากรอกนามสกุล">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="กรุณากรอกอีเมล">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">รหัสผ่าน</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="กรุณากรอกรหัสผ่าน">
                                    </div>
                                </div>
                                    

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp ยืนยันข้อมูล</button>
                                        <span style="margin-left:8px;"></span>  
                                    </div>
                                </div>
                    
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
    
</body>
</html>