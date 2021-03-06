<?php

include "header.php";
include "database.php";

$tasks = $db->query("SELECT * FROM taskdata")
?>

<div class="container">
                    <form method="post" action="add_task.php">         
                    <label for="exampleInputPassword1" class="form-label"> عنوان خود را وارد کنید</label>
                        <div class="form-floating">
                        <input type="text" name="title" class="form-control " data-bs-toggle="collapse" data-bs-target="#collapseWidthExample">
                        <label for="floatingTextarea">title</label>
                        </div>

                       <label for="exampleInputPassword1" class="form-label"> تسک خود را وارد کنید</label>
                        <div class="form-floating">
                        <input type="text" name="text" class="form-control " data-bs-toggle="collapse" data-bs-target="#collapseWidthExample">
                        <label for="floatingTextarea">task</label>
                        </div>
                        <div  class="d-flex justify-content-around">
                                    <label for="exampleInputPassword1" class="form-label"> رنگ </label>
                                    <div class="col-3">
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
                                    
                        </div>    
                        <br>
                                <div class="d-flex justify-content-center">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                         <button type="submit" class="btn btn-primary ">ذخیره</button>        
                                    </div>
                                
                                </div>
                    </form>
 </div>

        <div class="row mt-5" >
            <?php foreach ($tasks as $task): ?>
                <div class=" col-lg-3 col-md-6 col-sm-12 col-12 position-relative">
                    <div class="card text-white mb-3 text-start" style="background:<?php echo $task["color"] ?>; ">
                        <div class="card-header stroke "> <h4 class="d-block"><?php echo $task["title"] ?> </h4>
                        </div>
                        <div class="card-body ">
                            <h5 class="card-text mb-3 stroke " id="text_note"><?php echo $task["text"] ?></h5>
                            <p class="card-text mb-2 stroke fs-6"> <i class="far fa-alarm-clock"><!-- icon --></i> <?php echo $task["time"] ?> </p>
                            <p class="card-text  stroke fs-6"><i class="far fa-calendar-alt"><!-- icon --></i>  <?php echo $task["date"] ?> </p>
                        </div>
                        <div class="card-footer d-flex justify-content-around">
                        <a class="btn-sm btn-outline-light " href="edit_task.php?task_id=<?php echo $task["id"] ?>"> <i class="far fa-edit stroke"><!-- icon --></i></a>
                        <a class="btn-sm btn-outline-light " href="delete_task.php?task_id=<?php echo $task["id"] ?>"> <i class="far fa-trash stroke"><!-- icon --></i></a>
                         </div>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
    
      
<?php

include "footer.php"

?>

