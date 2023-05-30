<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfólio do Desenvolvedor</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        </head>
    <body>
        <header class="header">
            <a href="{{route('site.index')}}"><img src="{{asset('img/logo.png')}}" alt="Logo" class="header__logo"></a>
            <nav class="header__nav">
            <ul class="header__nav--ul" id="show">
                <li class="header__nav--ul_li"><a href="#sobre-mim" class="header__nav--ul_li-a links">Sobre mim</a></li>
                <li class="header__nav--ul_li"><a href="#projetos" class="header__nav--ul_li-a links">Projetos</a></li>
                <li class="header__nav--ul_li"><a href="#habilidades" class="header__nav--ul_li-a links">Habilidades</a></li>
                <li class="header__nav--ul_li"><a href="#contato" class="header__nav--ul_li-a links">Contato</a></li>
            </ul>
            </nav>
            <div class="header__hamburger" id="hamburger">☰</div>
        </header>
        
    </body>
</html>