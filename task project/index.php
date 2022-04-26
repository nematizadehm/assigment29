<?php

include "header.php";
include "database.php";

$notes = $db->query("SELECT * FROM taskdata")
?>

<div class="container">
                    <form method="post" action="add_note_process.php">         
                        <label for="exampleInputPassword1" class="form-label"> تسک خود را وارد کنید</label>
                        <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Comments</label>
                        </div>
                        
                        <label for="exampleInputPassword1" class="form-label"> رنگ را انتخاب کنید</label>
                        <div class="form-floating">
                            <input type="color" name="color" value="#063d7c" >
                        </div>
                        <label for="exampleInputPassword1" class="form-label"> تاریخ را انتخاب کنید</label>
                        <div class="col-3">
                            <input type="date" value="" name="date" >
                        </div>
                        <label for="exampleInputPassword1" class="form-label"> زمان را انتخاب کنید</label>
                        <div class="col-3">
                        <input type="time" value="" name="time" >
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">ذخیره</button>
                    </form>
 </div>

    
    
       
<?php

include "footer.php"

?>

