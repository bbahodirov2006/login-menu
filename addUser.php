<?php
include 'inc/header.php';
Session::CheckSession();
$sId =  Session::get('roleid');
if ($sId === '1') { ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addUser'])) {

  $userAdd = $users->addNewUserByAdmin($_POST);
}

if (isset($userAdd)) {
  echo $userAdd;
}


 ?>


 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Yangi Foydalanuvchi qo'shish</h3>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="name">Ismingiz</label>
                  <input type="text" name="name"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="username">Foydalanuvchi nomingiz</label>
                  <input type="text" name="username"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Gmail pochtangiz</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="mobile">Telefon raqamingiz</label>
                  <input type="text" name="mobile"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Parolingiz</label>
                  <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label for="sel1">Foydalanuvchi rolini tanlang</label>
                    <select class="form-control" name="roleid" id="roleid">
                      <option value="1">Admin</option>
                      <option value="2">Tahrirlovchi</option>
                      <option value="3">Faqat foydalanuvchi</option>

                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" name="addUser" class="btn btn-success">Ro'yxatdan O'tish</button>
                </div>


            </form>
          </div>


        </div>
      </div>

<?php
}else{

  header('Location:index.php');



}
 ?>

  <?php
  include 'inc/footer.php';

  ?>
