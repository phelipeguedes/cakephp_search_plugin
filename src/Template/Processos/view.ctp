
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Processo'), ['action' => 'edit', $processo->id_processo]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Processo'), ['action' => 'delete', $processo->id_processo], ['confirm' => __('Tem certeza que deseja deletar # {0}?', $processo->id_processo)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Processos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Processo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="processos view large-9 medium-8 columns content">
    <h3><?= h($processo->id_processo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Processo') ?></th>
            <td><?= h($processo->nome_processo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Processo') ?></th>
            <td><?= $this->Number->format($processo->id_processo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($processo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($processo->modified) ?></td>
        </tr>
    </table>
</div>
