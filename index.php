<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="imagenes/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Digital</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <script src="js.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>

    <header>

        <section class="menu-principal">
           
                <img class="logo-marina" src="imagenes/LOGO MARINA.png" alt="logo marketing">
    
                <nav>
                    <!-- Botón menú hamburguesa -->
                    <div class="menu-toggle" id="menu-toggle">
                        <span class="menu-text" translate="no">Entrar</span>
                        <span></span>
                    </div>
                    <!-- Menú principal -->
                    <ul class="menu" id="menu">
                        <li><a href="index.php">COMEÇAR</a></li>
                        <li><a href="preço.php">PREÇOS</a></li>
                        <li><a href="3547301652">FORO</a></li>
                    </ul>
                </nav>
        </section>
        

    </header>


    <img class="banner" src="imagenes/banner6.jpg" alt="Banner Marketing Digital">

    <main>

        <audio id="mi-audio" autoplay loop muted>
            <source src="musica/musica relajante.mp3"  type="audio/mp3">
        </audio>

        <section class="principal">
            <h2 class="titulo-color">MARKETING DIGITAL</h2>

            <img class="imagen-centrada" src="imagenes/marketing_1.png" alt="Imagen de marketing digital">

            <p>
                O <strong>Marketing digital</strong> refere-se a todas as estratégias e ações de marketing realizadas no ambiente online para promover produtos, serviços ou marcas. Com o avanço da tecnologia e o crescimento do acesso à internet, o marketing digital tornou-se uma parte essencial das estratégias empresariais modernas.
            </p>

                <h1 class="marketing"><strong>Estratégias de Marketing Digital</strong> </h1>
                <p><strong>1-SEO (Otimização para Motores de Busca):</strong>  Consiste em otimizar sites e conteúdos para que apareçam nas primeiras posições dos resultados de busca, aumentando a visibilidade orgânica.</p>

                <p><strong>2-Marketing de Conteúdo:</strong> Envolve a criação e compartilhamento de conteúdo relevante e valioso para atrair e engajar um público-alvo específico. Exemplos incluem blogs, vídeos, infográficos e e-books.</p>

                <p><strong>Redes Sociais</strong>: Plataformas como Facebook, Instagram, LinkedIn e Twitter são utilizadas para engajar com o público, construir relacionamentos e promover produtos ou serviços.</p>

                <p><strong>Email Marketing:</strong> Estratégia que utiliza o envio de e-mails para comunicar-se diretamente com clientes e prospects, oferecendo conteúdos personalizados, promoções e novidades. </p>

                <p><strong>Publicidade Online (PPC):</strong>  Inclui anúncios pagos em plataformas como Google Ads e redes sociais, onde os anunciantes pagam por cada clique ou impressão de seus anúncios. </p>

                <p><strong>Marketing de Influência:</strong>  Colaborações com influenciadores digitais que possuem um grande número de seguidores, para promover produtos e serviços de maneira autêntica e eficaz. </p>
        
        </section>

        <section class="mapa">
                <h2 class="titulo-mapa">NOSSA LOCALIZAÇÃO</h2>
                <img src="imagenes/gif-bola.gif" alt="bola em movimento" class="bola">
                <p>Nosso estabelecimento está no coração da nossa cidade.</p>
                <div class="mapa-contenido">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.576404885434!2d-43.354542225493226!3d-21.757941797823666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989c9ec4671f99%3A0x4b3d6b7972c13f51!2sR.%20Santo%20Ant%C3%B4nio%2C%20515%20-%20Centro%2C%20Juiz%20de%20Fora%20-%20MG%2C%2036015-000!5e0!3m2!1sen!2sbr!4v1737298868655!5m2!1sen!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </section>

                <!-- Sección de formulario -->
        <section class="formulario-mayor">
        <div class="formulario">
        <h2><span class="titulo-formulario">Contate-nos</span></h2>
            <form action="procesar_formulario.php" method="POST" onsubmit="return validarFormulario()" >
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required> <br><br>

                <label for="sobrenome">Sobrenome:</label>
                <input type="text" id="sobrenome" name="sobrenome" required> <br><br>

                <label for="data_nascimiento">Data de nascimento:</label>
                <input type="date" id="data_nascimiento" name="data_nascimiento" required><br><br>

                <label for="pais">País:</label>
                <select id="pais" name="pais" required onchange="mostrarOtroPais()">
                        <option value="">Selecione um país</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Chile">Chile</option>
                        <option value="Colômbia">Colômbia</option>
                        <option value="Peru">Peru</option>
                        <option value="Paraguai">Paraguai</option>
                        <option value="Uruguai">Uruguai</option>
                        <option value="Estados Unidos">Estados Unidos</option>
                        <option value="Outro">Outro</option>
                </select><br><br>

                <div id="otro_pais_div" style="display: none;">
                        <label for="otro_pais">Escriba su país:</label>
                        <input type="text" id="otro_pais" name="otro_pais" placeholder="insira seu país"><br><br>
                </div>

                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" placeholder="Exemplo:Minas Gerais" required><br><br>

                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" placeholder="Exemplo:Belo Horizonte"  required><br><br>

                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" pattern="[0-9]{10}" placeholder="Exemplo:2733618200" required><br><br>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email"  placeholder="carlos@gmail.com"  required><br><br>

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>

                <button type="submit">Enviar</button>
            </form>    
        </div>

        </section>

    </main>

    <footer >
        <section class="footer-container" >

            <div class="imagen-laterales">
                <img class="logo-marina" src="imagenes/LOGO MARINA.png" alt="logo marketing">
                <p class="text-bajo-logo">&copy; 2025 Minha empresa. Todos os direitos reservados.</p>
            </div>

            <div class="informativo">
                <p>Endereço</p>
                <p>Rua Santo Antonio 515</p>
                <p>Juiz De Fora</p>
                <p>Minas Gerais</p>
                <p>Brazil</p>
            </div>

        </section>

    </footer>
    
</body>

</html>