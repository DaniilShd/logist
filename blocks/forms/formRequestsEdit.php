
<div class="modal bs-example-modal-lg" id="formUsersEdit" tabindex="-1" role="dialog">

<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <strong>
                Редактировать позицию №<?php echo $item->id;?>
            </strong>
            <form action="index.php?red_request_id=<?php echo $item->id;?>" method ="POST"  enctype="multipart/form-data">

                <div class="form-group mt-3">
                <label>Вид</label>

                <?php
                if(strcasecmp($item->paranepara, "Отгрузка") == 0)
                {
                    echo '<select class="form-select" aria-label="Default select example" name="paranepara">'.
                        '<option selected value="Отгрузка">Отгрузка</option>'.
                        '<option value="Закупка">Закупка</option>'.
                    '</select>';
                } elseif(strcasecmp($item->paranepara, "Закупка") == 0) {
                    echo '<select class="form-select" aria-label="Default select example" name="paranepara">'.
                    '<option value="Отгрузка">Отгрузка</option>'.
                    '<option selected value="Закупка">Закупка</option>'.
                '</select>';
                }else {
                    echo '<select class="form-select" aria-label="Default select example" name="paranepara">'.
                    '<option value="Отгрузка">Отгрузка</option>'.
                    '<option value="Закупка">Закупка</option>'.
                '</select>';
                }
               
                    ?>
                </div>


                


                </div>


                <input hidden name="creator"
                value = 
                <?php
echo $_SESSION['logged_user']['login'];
                ?>
                >
                


                <button type="submit" class="btn btn-success" name="request">Сохранить</button>
                <?php echo "<a href='index.php'  class='btn btn-outline-primary' style='float: right;'>Отмена</a>"; ?>
            </form>
        </div>
    </div>
</div>

</div>
