<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id='main-title'><?=$currentPost['title']?></h1>
            <p id="post-description"><?=$currentPost['description']?></p>
            <div class="img-container">
                <img src="<?=$BASE_URL?>/img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, ab totam sapiente similique, dolorum, hic dolor numquam fuga rem consequatur earum. Deleniti eos nulla ducimus qui quos! Rem, dolores deleniti.
            Perspiciatis debitis dolores consequatur natus at. Recusandae dignissimos minus nihil, quod molestiae quaerat magni porro nostrum voluptas tempore minima in impedit placeat nam deleniti debitis nisi optio! Facere, dicta ipsam.
            Quam aut eveniet corrupti excepturi tempore inventore a eaque nostrum dolorum voluptas, tenetur beatae, earum laboriosam libero consectetur recusandae sequi explicabo repudiandae temporibus nulla rerum? Ipsum atque porro omnis exercitationem.
            Possimus incidunt, veritatis sequi, tempore nisi culpa ipsum consequatur consequuntur officiis soluta aperiam? Voluptatibus quo officiis, saepe, illum nam nemo laudantium sunt fugit temporibus odit sapiente nulla alias ad aliquam?
            Mollitia eligendi assumenda incidunt itaque in, exercitationem quia voluptatibus saepe distinctio vero recusandae esse! Incidunt praesentium, ad pariatur soluta delectus est. Consectetur numquam id suscipit tempora doloremque atque veritatis esse.</p>
            <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, ab totam sapiente similique, dolorum, hic dolor numquam fuga rem consequatur earum. Deleniti eos nulla ducimus qui quos! Rem, dolores deleniti.
            Perspiciatis debitis dolores consequatur natus at. Recusandae dignissimos minus nihil, quod molestiae quaerat magni porro nostrum voluptas tempore minima in impedit placeat nam deleniti debitis nisi optio! Facere, dicta ipsam.
            Quam aut eveniet corrupti excepturi tempore inventore a eaque nostrum dolorum voluptas, tenetur beatae, earum laboriosam libero consectetur recusandae sequi explicabo repudiandae temporibus nulla rerum? Ipsum atque porro omnis exercitationem.
            Possimus incidunt, veritatis sequi, tempore nisi culpa ipsum consequatur consequuntur officiis soluta aperiam? Voluptatibus quo officiis, saepe, illum nam nemo laudantium sunt fugit temporibus odit sapiente nulla alias ad aliquam?
            Mollitia eligendi assumenda incidunt itaque in, exercitationem quia voluptatibus saepe distinctio vero recusandae esse! Incidunt praesentium, ad pariatur soluta delectus est. Consectetur numquam id suscipit tempora doloremque atque veritatis esse.</p>        
        </div>
        <aside id="nav-container">
            <h3 id="tags-list">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                   <li><a href="#"><?=$tag?></a></li>
                <?php endforeach; ?>   
            </ul>
            <h3 id='categorias-title'>Categorias</h3>
            <ul id="categories-list">
            <?php foreach($currentPost as $categories): ?>
                   <li><a href="#"><?=$categories?></a></li>
                <?php endforeach; ?> 
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>
