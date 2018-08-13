<?php
	
	//宣告一個 link 變數，並執行連結資料庫函式，連結結果會帶入 link 當中
	
	$link = mysqli_connect("localhost", "root", "b0642074", "pp_db");
	
	
	if (mysqli_connect_errno())
	{
		//有錯誤就代表連線失敗
		echo '無法連線資料庫 :<br/>' . mysqli_connect_errno();
	}
	else
	{
		//設定連線編碼為UTF-8
		mysqli_query($link, "SET NAMES utf8");
		
  }
    
	
	$sql = "SELECT * FROM `train`";
	$result = mysqli_query($link, $sql);
	$datas = array();
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$datas[]= $row;
		}
	}
?>


<?php if(!empty($datas)):?>
		<?php foreach($datas as $user):?>
      <div class="card w-75 mx-auto mt-5">
        <h5 class="card-header text-light bg-secondary"><?php echo "{$user['title']}"?>
        <footer class="blockquote-footer float-right text-light"><?php echo "{$user['publish_date']}"?></footer>
        </h5>
        <div class="card-body">
          <!--h5 class="card-title"></h5-->
          <p class="card-text"><?php echo "{$user['article']}"?></p>
          <a href="<?php echo "{$user['link']}"?>" target="_blank" class="btn btn-secondary float-right ">前往教學網頁</a>
        </div>
      </div>

		<?php endforeach;?>
  <?php endif?>