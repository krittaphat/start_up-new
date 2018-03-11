<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

  <!-- style -->
   <style type="text/css">
    body {

      background: url(https://media.istockphoto.com/photos/six-stems-of-wheat-on-a-white-background-picture-id157311390);
      background-size: cover;
   }      
  </style>  
</head>
<body>

<nav class="navbar navbar-inverse"  >
  <div class="container-fluid">
  <!--   <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div> -->
    <ul class="nav navbar-nav">
      <li class="active" >
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i class="fa fa-home"></i></a> 
      </li>
      <li >
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ข้อมูลส่วนตัวเกษตรกร</a>
      </li>
      <li>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ข้อมูลการผลิต</a>
      </li>
      <li>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ปัจจัยการผลิต</a>
      </li>
      <li>
     <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ข้อมูลพื้นที่เพาะปลูก</a>
      </li>
      <li>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ข้อมูลการขนส่งสินค้า</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" action="/action_page.php">
        <div class="input-group " >
          <input type="text" class="form-control" placeholder="Search...">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                 <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
        </div>
      </form>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
      
  
<div class="container">
  <h3 style="color: #000000">ข้อมูลพื้นที่เพาะปลูก</h3><br><br>
  <p>รายละเอียด :</p>
    <table class="table">
    <thead >
      <tr>
          <th>ขนาดพื้นที่เพาะปลูก(ไร่)</th>
          <th>จำนวนแปลงท่ีถือครองมีก่ีแปลง</th>
          <th>แหล่งเก็บนํ้าในพ้ืนท่ี (สระ เหมือง ร่องนํ้า)</th>
          <th>ครั้งสุดท้ายท่ีมีการใช้สารเคมี</th>
          <th>พิกัด GPS</th>

          
    </thead>

    <tbody>
      <tr>
        <td style="color: #000000">100</td>
        <td style="color: #000000">50</td>
        <td style="color: #000000">สระ</td>
        <td style="color: #000000">2550</td>
        <td >
          <button class="btn btn-warning" type="button">click</button>
        </td>
      </tr>
      <tr>
        <td style="color: #000000">200</td>
        <td style="color: #000000">150</td>
        <td style="color: #000000">เหมือง</td>
        <td style="color: #000000">2555</td>
        <td>
          <button class="btn btn-warning" type="button">click</button>
        </td>
      </tr>
      <tr>
        <td style="color: #000000">50</td>
        <td style="color: #000000">250</td>
        <td style="color: #000000">ร่องน้ำ</td>
        <td style="color: #000000">2552</td>
        <td style="color: #000000">
          <button class="btn btn-warning" type="button">click</button>
        </td>
      </tr>
      <tr>
        <td style="color: #000000">50</td>
        <td style="color: #000000">250</td>
        <td style="color: #000000">ร่องน้ำ</td>
        <td style="color: #000000">2552</td>
        <td style="color: #000000">
          <button class="btn btn-warning" type="button">click</button>
        </td>
      </tr>
       <tr>
        <td  style="color: #000000">200</td>
        <td  style="color: #000000">150</td>
        <td  style="color: #000000">เหมือง</td>
        <td  style="color: #000000">2555</td>
        <td>
          <button class="btn btn-warning" type="button">click</button>
        </td>
      </tr>
      <tr>
        <td  style="color: #000000">100</td>
        <td  style="color: #000000">50</td>
        <td  style="color: #000000">สระ</td>
        <td  style="color: #000000">2550</td>
        <td>
          <button class="btn btn-warning" type="button">click</button>
        </td>
      </tr>
      
     
    </tbody>
  </table>

      </div>
</div>

</body>
</html>


