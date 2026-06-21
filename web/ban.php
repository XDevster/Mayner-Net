<?php 
    require_once '../include/config.php';

    if(!isset($_SESSION['user'])){
        header("Location: login.php");
    }

    $data = mysqli_fetch_assoc(mysqli_query($db, 'SELECT * FROM users WHERE id = ' .$_SESSION['user']['user_id']));

    if($data['ban'] != 1){
        $_SESSION['user']['ban'] = 0;
        header("Location: index.php");
    }

    $bandata = mysqli_fetch_assoc(mysqli_query($db, 'SELECT * FROM banlist WHERE user_id = ' .$_SESSION['user']['user_id']));

?>

<html>
<head>
    <?php include '../include/html/head.php'; ?>
    <title>Бан аккаунта</title>
</head>
<body>
    <div class="main_app">
        <div class="main">
  <script>
    // Функция для генерации случайного цвета
    function getRandomColor() {
      var letters = '0123456789ABCDEF';
      var color = '#';
      for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
      }
      return color;
    }

    // Изменение цвета фона при загрузке страницы
    document.body.style.backgroundColor = getRandomColor();
  </script>
            <h1>Ваш Аккаунт Был Удалён!!!</h1>

     
            <?php if(!empty($bandata['reason'])): ?>
                <h3>По причине: <?php echo($bandata['reason']); ?></h3>
            <?php else: ?>
                <h3>По не известной причине</h3>
            <?php endif; ?>
                        <a href="http://mayner-net.42web.io/web/logout.php">
                          <button>Выйти из аккаунта</button>
                          </a>
                                                  <a href="http://mayner-net.42web.io/web/rulesforban.php">
                                                                            <button>прочитать правила</button>
                                                                                                      </a>
<h>Контакты разроботчика: Discord: matveymayner</h>
        </div>
    </div>
</body>
</html>
<?php mysqli_close($db);