<div class="col-12">
    <?php foreach($allGames as $game) {  ?>
                    <?php echo $game->id; ?> -
                    <?php echo $game->referee; ?> -
                    <?php echo $game->date; ?> -
                    <div class="right">
                        <a href="<?php echo $helper->url("games","borrar"); ?>&id=<?php echo $game->id; ?>" class="btn btn-danger">Borrar</a>
                    </div>
                    <hr/>
    <?php } ?>

</div>