<div class="container is-fluid mb-6">
 <div class="has-text-centered mb-5"> 
    <h1 class="title is-3 has-text-info"> 
        <br><br> 
        <i class="fas fa-search"></i>Lista de categorias</h1>
    <h2 class="subtitle">Encuentra la categoria que buscas</h2>
</div>

<div class="box">
    <?php
        require_once "./php/main.php";

        # Eliminar categoria #
        if(isset($_GET['category_id_del'])){
            require_once "./php/categoria_eliminar.php";
        }

        if(!isset($_GET['page'])){
            $pagina=1;
        }else{
            $pagina=(int) $_GET['page'];
            if($pagina<=1){
                $pagina=1;
            }
        }

        $pagina=limpiar_cadena($pagina);
        $url="index.php?vista=category_list&page="; /* <== */
        $registros=15;
        $busqueda="";

        # Paginador categoria #
        require_once "./php/categoria_lista.php";
    ?>
</div>