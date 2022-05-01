<?php

include "header.php";
include "database.php";

$tasks_id = $_GET["task_id"];
$tasks = $db->query("SELECT * FROM taskdata WHERE id = $tasks_id")->fetch_assoc();
?>

<div class="container">
                    <form method="post" action="edit_task_proccess.php">         
                    <div class="mb-3">
                        <input type="text" name="title" value="<?php echo $tasks["title"]; ?>" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" name="text" value="" rows="3"><?php echo $tasks["text"]; ?></textarea>
                    </div>
               
                        <label for="exampleInputPassword1" class="form-label"> رنگ </label>
                        <div class="form-floating">
                            <input type="color" name="color" value="#063d7c" >
                        </div>
                        <label for="exampleInputPassword1" class="form-label"> تاریخ   </label>
                        <div class="col-3">
                            <input type="date" value="" name="date" >
                        </div>
                        <label for="exampleInputPassword1" class="form-label"> زمان   </label>
                        <div class="col-3">
                        <input type="time" value="" name="time" >
                        </div>
                        <br>
                        <input type="hidden" value="<?php echo $tasks["id"]; ?>" name="id">

                        <button type="submit" class="btn btn-primary">ذخیره</button>
                
                    </form>
 </div>

        <div class="row mt-5" >
           

        </div>
    
      
<?php

include "footer.php"

?>

