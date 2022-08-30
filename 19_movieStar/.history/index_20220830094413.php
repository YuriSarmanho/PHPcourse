<?php
    require_once("templates/header.php");
?>

<div id="main-container" class="container-fluid">
    <h2 class="section-titl">Filmes novos</h2>
    <p class="section-descripti">Veja as críticas dos últimos filmes adicionados no MovieStar</p>
    <div class="movies-container">
        <div class="card movie-card">
            <div c
            lass="card-img-top" style="background-image: url('<?=$BASE_URL?>img/movies/movie_cover.jpg');"></div>
        </div>
    </div>
    <div class="movies-container"></div>
    <h2 class="section-titl">Ação</h2>
    <p class="section-descripti">Veja os melhores filmes de ação</p>
    <div class="movies-container"></div>
    <h2 class="section-titl">Comédia</h2>
    <p class="section-descripti">Veja os melhores filmes de comédia</p>
    <div class="movies-container"></div>
</div>
  
<?php
    require_once("templates/footer.php");
?>