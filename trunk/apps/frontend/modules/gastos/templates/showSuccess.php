<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $gastos->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $gastos->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $gastos->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Tipo:</th>
      <td><?php echo $gastos->getTipo() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $gastos->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Importe:</th>
      <td><?php echo $gastos->getImporte() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('gastos/edit?id='.$gastos->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('gastos/index') ?>">List</a>
