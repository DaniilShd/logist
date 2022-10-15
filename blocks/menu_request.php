<nav class="navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd; padding: 20px;">
  <a class="navbar-brand" href="index.php">Логистическая компания</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse flex-row justify-content-md-end" id="navbarCollapse">
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
    <ul class="nav-menu nav navbar-nav flex-row justify-content-end flex-nowrap">
      <li class="nav-item">
        
              <a class="btn btn-warning" style="cursor: pointer; margin-right: 20px;" onclick="history.back();">Назад</a>
          </li>
          <li class="nav-item">
              <a class="btn btn-danger"  href="logout.php">Выйти</a>
          </li>
      </ul>

  </div>
</nav>


