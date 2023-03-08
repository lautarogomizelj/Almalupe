<form action="lista_productos.php?o=" method="get" id="myForm1">
    <th class="sub">Id categoria 
        <button type="input" name="sort" value="id_producto">
            <?php 
                if ($orden_pred == "id_producto") 
                { 
                    if (($_SESSION['contador_sort'] % 2) == 0)
                    { ?>
                        <i class="fas fa-sort-amount-up" id="bien"></i>
                    <?php 
                    } else
                    { ?>
                        <i class="fas fa-sort-amount-down-alt" id="bien"></i>
                    <?php 
                    } ?> 
                <?php 
                }else
                { ?>
                    <i class="fas fa-sort-amount-down-alt"></i>
                <?php 
                } ?> 
        </button>
    </th>

    <th class="sub">Nombre 
        <button type="submit" name="sort" value="titulo">
            <?php 
                if ($orden_pred == "titulo") 
                {
                    if (($_SESSION['contador_sort'] % 2) == 0)
                    { ?>
                        <i class="fas fa-sort-amount-up" id="bien"></i>
                    <?php 
                    } else
                    { ?>
                        <i class="fas fa-sort-amount-down-alt" id="bien"></i>
                    <?php 
                    } ?> 
                <?php 
                }else 
                { ?>
                    <i class="fas fa-sort-amount-down-alt"></i>
                <?php 
                } ?> 
        </button type="submit"></i>
    </th>

    <th class="sub">Categoria 
        <button type="submit" name="sort" value="categoria">
            <?php 
                if ($orden_pred == "categoria") 
                { 
                    if (($_SESSION['contador_sort'] % 2) == 0)
                    { ?>
                        <i class="fas fa-sort-amount-up" id="bien"></i>
                    <?php 
                    } else
                    { ?>
                        <i class="fas fa-sort-amount-down" id="bien"></i>
                    <?php 
                    } ?> 
                <?php 
                }else 
                { ?>
                    <i class="fas fa-sort-amount-down"></i>
                <?php 
                } ?> 
        </button type="submit"></i>
    </th>
</form>

<th class="sub">Imagen</th>
<th class="sub">Acciones</th>