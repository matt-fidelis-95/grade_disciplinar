<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link(('Novo Curso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cursos index large-9 medium-8 columns content">
    <h3>Cursos</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>Criado em</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cursos as $curso): ?>
            <tr>
                <td><?= $this->Number->format($curso->id) ?></td>
                <td><?= $this->Html->link($curso->nome, ['action' => 'view', $curso->id]) ?></td>
                <td><?= $curso->created ?></td>
                <td><?= $this->Html->link('Editar', ['action'=>'edit', $curso->id]) ?>
                    <?= $this->Form->postLink('Apagar', ['action' => 'delete', $curso->id],
                        ['confirm' => __('Tem certeza que deseja excluir {0}?', $curso->nome)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>