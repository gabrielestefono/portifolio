<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfólio do Desenvolvedor</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header class="headeradmin">
    <a href="<?=$BASE_URL?>"><img src="assets/img/logo.png" alt="Logo" class="headeradmin__logo"></a>
    <nav class="headeradmin__nav">
      <ul class="headeradmin__nav--ul" id="show">
        <li class="headeradmin__nav--ul_li"><a href="admin.php?pag=sobre-mim.php&type=1" class="headeradmin__nav--ul_li-a links">Sobre mim</a></li>
        <li class="headeradmin__nav--ul_li"><a href="admin.php?pag=projetos.php&type=1" class="headeradmin__nav--ul_li-a links">Projetos</a></li>
        <li class="headeradmin__nav--ul_li"><a href="admin.php?pag=habilidade.php&type=1" class="headeradmin__nav--ul_li-a links">Habilidades</a></li>
        <li class="headeradmin__nav--ul_li"><a href="admin.php?pag=contato.php&type=1" class="headeradmin__nav--ul_li-a links">Contato</a></li>
      </ul>
    </nav>
    <div class="headeradmin__hamburger" id="hamburger">&#9776;</div>
  </header>