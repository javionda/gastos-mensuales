<h1>Gastos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Tipo</th>
      <th>Created at</th>
      <th>Importe</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($gastos_list as $gastos): ?>
    <tr>
      <td><a href="<?php echo url_for('gastos/show?id='.$gastos->getId()) ?>"><?php echo $gastos->getId() ?></a></td>
      <td><?php echo $gastos->getNombre() ?></td>
      <td><?php echo $gastos->getDescripcion() ?></td>
      <td><?php echo $gastos->getTipo() ?></td>
      <td><?php echo $gastos->getCreatedAt() ?></td>
      <td><?php echo $gastos->getImporte() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('gastos/new') ?>">New</a>
