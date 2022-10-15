<div class="modal bs-example-modal-lg" id="formRequest" tabindex="-1" role="dialog">

<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <strong>
                Добавить заявку
            </strong>
            <form action="index.php" method ="POST">

                <div class="form-group mt-3">
                    <label>Вид</label>
                    <select class="form-select" aria-label="Default select example" name="paranepara">
                        <option selected value="Отгрузка">Отгрузка</option>
                        <option value="Закупка">Закупка</option>
                        <!-- <option value="Закупка/отгрузка">Закупка/отгрузка</option> -->
                    </select>
<!--
                    <textarea
                        type="text"
                        class="form-control"

                        rows="1"
                        maxlength="255"
                        name="item[surname]"
                    ></textarea>
-->
                </div>

                <!-- <div class="form-group mt-3">
                    <label>Срочность</label>


                    <select class="form-select" aria-label="Default select example" name="srochnost">
                        <option selected value="Несрочная">Несрочная</option>
                        <option value="Средней срочности">Средней срочности</option>
                        <option value="Срочная">Срочная</option>
                    </select>
                    </div> -->
<!--
                    <textarea
                        type="text"
                        class="form-control"

                        rows="1"
                        maxlength="255"
                        name="item[firstname]"
                    ></textarea>
                </div>

                <div class="form-group mt-3">
                    <label> Отчество </label>
                    <textarea
                        type="text"
                        class="form-control"

                        rows="1"
                        maxlength="255"
                        name="item[lastname]"
                    ></textarea>
                </div>

                <div class="form-group mt-3">
                    <label> Логин </label>
                    <textarea
                            type="text"
                            class="form-control"

                            rows="1"
                            maxlength="255"
                            name="item[login]"
                    ></textarea>
                </div>

                <div class="form-group mt-3">
                    <label> email </label>
                    <textarea
                            type="text"
                            class="form-control"

                            rows="1"
                            maxlength="255"
                            name="item[email]"
                    ></textarea>
                </div>

                <div class="form-group mt-3">
                    <label> Пароль </label>
                    <textarea
                            type="text"
                            class="form-control"

                            rows="1"
                            maxlength="255"
                            name="item[password]"
                    ></textarea>
                    -->

                   
                

                <input hidden name="creator" value = <?php echo $_SESSION['logged_user']['login'];?>>
        

                <button type="submit" class="btn btn-success" name="request">Создать</button>
                <input type="button" value="Отмена" class="btn btn-outline-primary" style="float: right;" data-bs-dismiss="modal">
            </form>
        </div>
    </div>
</div>

</div>
