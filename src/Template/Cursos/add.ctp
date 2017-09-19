<!-- src/Template/Cursos/add.ctp-->
<?= $this->Form->create($curso)?>
<fieldset>
    <legend>Adicionar Curso</legend>
    <?php
        echo $this->Form->control('nome');
        echo $this->Form->control('email');
    ?>
</fieldset>
<?=$this->Form->button('Salvar')?>
<?=$this->Form->end()?>
