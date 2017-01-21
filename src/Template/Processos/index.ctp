<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Processo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="processos index large-9 medium-8 columns content">
    <h3><?= __('Processos') ?></h3>
    
    <?php 

            echo $this->Form->create();
            echo $this->Form->input('nome_processo', ['placeholder' => 'Nome do Processo', 'label' => 'Buscar Processo']);
            //echo $this->Form->input('q');
            echo $this->Form->button('Filtrar', ['type' => 'submit']);
            echo $this->Form->end();
    ?>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_processo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_processo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($processos as $processo): ?>
            <tr>
                <td><?= $this->Number->format($processo->id_processo) ?></td>
                <td><?= h($processo->nome_processo) ?></td>
                <td><?= h($processo->created) ?></td>
                <td><?= h($processo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $processo->id_processo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $processo->id_processo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $processo->id_processo], ['confirm' => __('Are you sure you want to delete # {0}?', $processo->id_processo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
