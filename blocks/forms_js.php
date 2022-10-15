<script>

    function openFormQuestionsEdit() {
        $('#formQuestionsEdit').modal({
            backdrop: 'static',
            keyboard: false
        })
        $('#formQuestionsEdit').modal('show');

    }

    <?php
    if(isset($_GET['red_question_id']))
    {
    ?>
    document.addEventListener('DOMContentLoaded', function(){ // Аналог $(document).ready(function(){
        openFormQuestionsEdit();
    });

    <?php
    }
    ?>

    function openFormTematikaEdit() {
        $('#formTematikaEdit').modal({
            backdrop: 'static',
            keyboard: false
        })
        $('#formTematikaEdit').modal('show');

    }

    <?php
    if(isset($_GET['red_tematika_id']))
    {
    ?>
    document.addEventListener('DOMContentLoaded', function(){ // Аналог $(document).ready(function(){
        openFormTematikaEdit();
    });

    <?php
    }
    ?>

    function openFormClassificatorEdit() {
        $('#formClassificatorEdit').modal({
            backdrop: 'static',
            keyboard: false
        })
        $('#formClassificatorEdit').modal('show');

    }

    <?php
    if(isset($_GET['red_infoblok_id']))
    {
    ?>
    document.addEventListener('DOMContentLoaded', function(){ // Аналог $(document).ready(function(){
        openFormClassificatorEdit();
    });

    <?php
    }
    ?>

    function openFormInfoblokiEdit() {
        $('#formInfoblokiEdit').modal({
            backdrop: 'static',
            keyboard: false
        })
        $('#formInfoblokiEdit').modal('show');

    }

    <?php
    if(isset($_GET['red_infoblok_type_id']))
    {
    ?>
    document.addEventListener('DOMContentLoaded', function(){ // Аналог $(document).ready(function(){
        openFormInfoblokiEdit();
    });

    <?php
    }
    ?>

    function openFormGreetingsEdit() {
        $('#formGreetingsEdit').modal({
            backdrop: 'static',
            keyboard: false
        })
        $('#formGretingsEdit').modal('show');

    }

    <?php
    if(isset($_GET['red_greetings_id']))
    {
    ?>
    document.addEventListener('DOMContentLoaded', function(){ // Аналог $(document).ready(function(){
        openFormGreetingsEdit();
    });

    <?php
    }
    ?>

</script>