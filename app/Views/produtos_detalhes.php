<?php 
echo $this->include('produtos_header', array('titulo' => $titulo));
?>
    <div id="content">
        <h1>Exibindo informacoes do produto: <?php echo $produto_id; ?></h1>
    </div>
<?php 
echo $this->include('produtos_footer');
?>