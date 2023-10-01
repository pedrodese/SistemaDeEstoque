<h1>Editar Produto</h1>

<?php if(!empty($warning)): ?>
    <div class="warning"><?php echo $warning; ?></div>
<?php endif; ?>



<form method="POST" class="form">

    
    <input type="text" placeholder="Insira um novo Código de Barras" name="cod" value="<?php echo $info['cod'];?>" required /><br/><br/>

    
    <Input type="text" placeholder="Insira um novo nome" name="name" value="<?php echo $info['name']?>" required/><br><br>

    
    <input type="text" placeholder="Insira um novo preço" name="price" value="<?php echo  number_format($info['price'], 2, ',' , '.')?>" required/><br><br>

    
    <input type="text" placeholder="Insira a nova quantidade" name="quantity" value="<?php $info['quantity']?>" required/><br><br>

    
    <input type="text" placeholder="Insira a nova quantidade minima" name="min_quantity" value="<?php echo $info['min_quantity']?>" required/><br><br>

    <button type="submit" class="btn btn-lg btn-dark text-center" value="Salvar">Salvar Mudanças</button>


</form>