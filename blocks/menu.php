<nav class="navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd; padding: 20px;">
  <a class="navbar-brand" href="index.php">Логистическая компания</a>



  <!-- Переключатель на отгрузку и загрузку, тела находятся в requests -->
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" 
    id="Zagruzka-tab" 
    data-bs-toggle="pill" 
    data-bs-target="#Zagruzka" 
    type="button" 
    role="tab" 
    aria-controls="Zagruzka" 
    aria-selected="true">
    Закупка</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" 
    id="Otgruzka-tab" 
    data-bs-toggle="pill" 
    data-bs-target="#Otgruzka" 
    type="button" role="tab" 
    aria-controls="Otgruzka" 
    aria-selected="false">Отгрузка</button>
  </li>

</ul>



  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse flex-row justify-content-md-end" id="navbarCollapse1">
    <!--
    <ul class="navbar-nav mr-auto">
      
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">Выйти</a>
      </li>

      <?php
       if($_SESSION['logged_user']['admin'] == 1)
      echo '<a class="nav-link" href="editor.php">Редактор слов</button>';
      ?>
      <a class="nav-link" href="profile.php">Профиль</a>
      <a class="nav-link" href="vocabulary.php">Личный словарь</a>
    </ul>
-->
    <ul class="nav navbar-nav flex-row justify-content-md-center justify-content-start flex-nowrap">
          <li class="nav-item">
              <a class="btn btn-danger"  href="logout.php">Выйти</a>
          </li>
      </ul>

  </div>
</nav>