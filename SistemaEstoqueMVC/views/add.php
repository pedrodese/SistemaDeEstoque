<h1 class="mb-5">Adicionar Produto</h1>

<?php if(!empty($warning)): ?>
    <div class="warning"><?php echo $warning; ?></div>
<?php endif; ?>

<form method="POST" class="form" style="border-radius: 20px;">

    <input type="text" class="form-control-lg" placeholder="Digite o codigo de barras:" name="cod" required /><br/><br/>
    
    <input type="text" class="form-control-lg" placeholder="Digite o nome do produto:" name="name" required /><br/><br/>

    <input type="text" class="form-control-lg" placeholder="Digite o preço do produto:" name="price" required /><br/><br/>

    <input type="text" class="form-control-lg" placeholder="Digite a quantidade do produto:" name="quantity" required /><br/><br/>

    <input type="text" class="form-control-lg" placeholder="Digite a quantidade minima do produto:" name="min_quantity" required /><br/><br/>

    <button type="submit" class="btn btn-lg btn-dark text-center" value="Adicionar Produto">Adicionar Produto</button>


</form>

<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_add.js"></script>