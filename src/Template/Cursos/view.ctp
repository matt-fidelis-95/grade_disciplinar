<!--Arquivo: src/Template/Cursos/view.ctp-->
<h3><?= h($curso->id)?></h3>
<table class="vertical-table">
    <tr>
        <th scope="row">Nome</th>
        <td><?= h($curso->nome)?></td>
    </tr>
    <tr>
        <th scope="row">Email</th>
        <td><?= h($curso->email)?></td>
    </tr>
    <tr>
        <th scope="row">Id</th>
        <td><?=$this->Number->format($curso->id)?></td>
    </tr>
    <tr>
        <th scope="row">Criado em</th>
        <td><?= $curso->created?></td>
    </tr>
    <tr>
        <th scope="row">Atualizado em</th>
        <td><?=$curso->updated?></td>
    </tr>
</table>