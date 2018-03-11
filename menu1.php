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
  <h3 style="color: #000000">ข้อมูลส่วนตัวเกษตรกร</h3><br><br>
  <p>ตารางข้างล่างคือข้อมูลของเกษตรกรที่มีอยู่ในพื้นที่ทั้งหมด :</p>
    <table class="table">
    <thead >
      <tr>
          <th>ลำดับ</th>
          <th>ชื่อ </th>
          <th>สกุล </th>
          <th>ที่อยู่</th>
          <th>อายุ</th>
          <th>จำนวนสมาชิกในครอบครัว(คน)</th>
          <th>ระยะการทำเกษตรอินทรีย์(ปี)</th>
          <th>แรงบันดาลใจที่สินใจมาทำเกษตรอินทรีย์</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>1</td>
        <td>ทองดี </td>
        <td>คำแท้แน่นอน</td>
        <td>21 ม.10 ต.เวียง อ.เมือง จ.พะเยา </td>
        <td>30</td>
        <td>4</td>
        <td>10</td>
        <td>เพราะมีรายได้ที่ดีกว่าเกษตรเคมี</td>
      </tr>
      
     <tr>
        <td>2</td>
        <td>ทองดี </td>
        <td>คำแท้แน่นอน</td>
        <td>21 ม.10 ต.เวียง อ.เมือง จ.พะเยา </td>
        <td>30</td>
        <td>4</td>
        <td>10</td>
        <td>เพราะมีรายได้ที่ดีกว่าเกษตรเคมี</td>
      </tr>
      <tr>
        <td>3</td>
        <td>ทองดี </td>
        <td>คำแท้แน่นอน</td>
        <td>21 ม.10 ต.เวียง อ.เมือง จ.พะเยา </td>
        <td>30</td>
        <td>4</td>
        <td>10</td>
        <td>เพราะมีรายได้ที่ดีกว่าเกษตรเคมี</td>
      </tr>
      <tr>
        <td>1</td>
        <td>ทองดี </td>
        <td>คำแท้แน่นอน</td>
        <td>21 ม.10 ต.เวียง อ.เมือง จ.พะเยา </td>
        <td>30</td>
        <td>4</td>
        <td>10</td>
        <td>เพราะมีรายได้ที่ดีกว่าเกษตรเคมี</td>
      </tr>
      <tr>
        <td>1</td>
        <td>ทองดี </td>
        <td>คำแท้แน่นอน</td>
        <td>21 ม.10 ต.เวียง อ.เมือง จ.พะเยา </td>
        <td>30</td>
        <td>4</td>
        <td>10</td>
        <td>เพราะมีรายได้ที่ดีกว่าเกษตรเคมี</td>
      </tr>
    </tbody>
  </table>

      </div>
</div>

</body>
</html>


