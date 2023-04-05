<div class="contenedorGlobalProducto">
    <div class="contenedorProducto">
        <div class="parteArriba">
            <div class="btnIcono">
                <!-- <i class="fa fa-heart-o" aria-hidden="true"></i> -->
                <i class="fa-duotone fa-maximize" aria-hidden="true"></i>
            </div>

            <?php 
                if ($row_Productos['descuento'] > 0){
                    ?>
                        <div class="bannerDescuento">
                            <span><?php echo $row_Productos['descuento']; ?>% off</span>
                        </div>
                    <?php
                }
            ?>
            

            <div class="btnExpandir">
                <i class="fa-thin fa-up-right-and-down-left-from-center"></i>
            </div>

            <img src="Assets/Productos/<?php echo $row_Productos['nombre_archivo']; ?>" alt="<?php echo $row_Productos['titulo']; ?>" title="Ca">
        </div>
        <div class="parteAbajo">
            <div class="row-1">
                <span><?php echo $row_Productos['categoria']; ?></span>
            </div>
    
            <div class="row-2">
                <span><?php echo $row_Productos['titulo']; ?></span>
            </div>
    
            <div class="row-3"></div>
    
            <div class="row-4">
                <?php 
                    if ($row_Productos['descuento'] > 0){
                        ?>
                            <span>$<?php echo $row_Productos['precio'] - ($row_Productos['descuento']/100 * $row_Productos['precio']); ?></span>
                            <span class="tachado">$<?php echo $row_Productos['precio']; ?></span>

                        <?php
                    }
                    else{
                        ?>
                            <span>$<?php echo $row_Productos['precio']; ?></span>
                        <?php
                    }

                ?>
            </div>
        </div>
    </div>
</div>