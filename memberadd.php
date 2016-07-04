
<html>
<head>
  <meta charset="UTF-8">

</head>

<body>

  <?php include("configDb.php") ?>

  <style>
  		#content{
  			width: auto;
  			height: 790px;
  			margin: 0 auto;
  		}

    .frm-news{ /*class with dot*/
      width: 900px;
      height: auto;
      padding: 30px;
      border: 2px solid #999999;
      border-radius: 20px;
    }

    .frm-displaynews{
      width: 7px;
      height: auto;
      background-color: #d9edf7;
      margin: 5px auto 10px auto; /*up right down left (in order)*/
      padding: 30px;
      border: 2px solid #999999;
  }

  </style>


      <div class="container">
      <div class="frm-news">
      <form name="formadd" action="memberinsert.php" method="post" enctype="multipart/form-data">
        <label for="addNewsForm"><h3> เพิ่มสมาชิกใหม่ </h3></label>&nbsp;
        <table width="90%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><br>username :
            <input type="text" class="control-form" name="username" id="username" placeholder="username" style="width:30%"></td>
          </tr>
          <tr>
            <td><br>password :
            <input type="text" class="control-form" name="password" id="password" placeholder="password" style="width:30%"></td>
          </tr>
          <tr>
            <tr>
              <td><br>position :
              <input type="text" class="control-form" name="position" id="position" placeholder="position" style="width:10%"></td>
            </tr>
        </table>
          <br><input type="submit" value="submit" name="submit" id="submit" class="btn btn-success">
      </form>
      </div>
    </div>
</bordy>
</html>
