<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Processos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="processos form large-9 medium-8 columns content">
    <?= $this->Form->create($processo) ?>
    <fieldset>
        <legend><?= __('Add Processo') ?></legend>
        <?php
            echo $this->Form->input('nome_processo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
