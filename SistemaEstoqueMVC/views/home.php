<table border="0" width="100%">
    <tr class="bg-dark text-light">
        <th>Código do Produto</th>
        <th>Nome do Produto</th>
        <th>Preço Unitário.</th>
        <th>Quantidade em Estoque</th>
        <th>Ações</th>
    </tr>

    <?php foreach($list as $item): ?>
        <tr>
            <td><?php echo $item['cod']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td>R$<?php echo number_format($item['price'] , 2, ',' , '.'); ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td>
                <a href="<?php echo BASE_URL;?>home/edit/<?php echo$item['id']; ?>">Editar</a>
            </td>
        </tr>
    <?php endforeach; ?>    

</table>




<script type="text/javascript">
    document.getElementById("busca").focus();
</script>