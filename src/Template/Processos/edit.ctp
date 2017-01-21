<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $processo->id_processo],
                ['confirm' => __('Tem certeza que quer excluir o processo # {0}?', $processo->id_processo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Processos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="processos form large-9 medium-8 columns content">
    <?= $this->Form->create($processo) ?>
    <fieldset>
        <legend><?= __('Editar Processo') ?></legend>
        <?php
            echo $this->Form->input('nome_processo', array('label' => 'Nome e Data de Modificação do Processo'));
        ?>  
            
            <?php echo $this->Form->date('modified', array('label' => 'Data Modificação')); ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>


<h3><?= __('Processos') ?></h3>