<h1>Listado productos</h1>
	
<table>
	
    <tr>

        <th>Referencia</th>

        <th>descripción</th>

        <th>Precio</th>

        <th>Stock</th>
    </tr>
    <?php foreach ($products as $product): ?>

    <tr>

        <td><?php echo $product['Product']['referencia']; ?></td>

        <td><?php echo $product['Product']['descripcion']; ?></td>

        <td><?php echo $product['Product']['precio']; ?></td>

        <td><?php echo $product['Product']['stock']; ?></td>

    </tr>

    <?php endforeach; ?>
	
    <?php unset($product); ?>

</table>