<!-- Contenido principal -->
<div class="contenido-principal">
	<div class="container">
		<div class="row-fluid">

			<!-- navegacion -->
			<?php require_once ROOT.'views\layout\admin\left-bar.php'; ?>
			<!-- fin navegacion -->

			<div class="span9">
				<?php require_once ROOT.'views\admin\catalogo\catalogo_menu.php'; ?>
				<!--fin nav catalogo -->

				<div class="pag-subtitulo">
					<h3>Categorias en <?= $c['producto_categoria_nombre']; ?></h3>
				</div>

				<a href="<?= BASE_URL.'admin/categorias_add' ?>" class="boton boton-acept">Añadir categoria</a> 

				<div class="tabla-datos">
					<table class="table table-striped table-bordered" id="tabla-result">
						<thead>
							<tr>
								<th>Categoria</th>
								<th style="width:5%">Mostrado</th>
								<th style="width:5%">Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($categorias as $c): ?>
								<tr>
									<td>
										<a href="<?= BASE_URL.'admin/categoria/'.$c['producto_categoria_id']; ?>">
										<?= $c->producto_categoria_nombre ?>
										</a>
									</td>

									<td style="text-align:center;">
										<?php if ( $c['producto_categoria_estado'] == 'A' ): ?>
											<i class="icon-ok"></i><p style="display:none">A</p>
										<?php else: ?>
											<i class="icon-remove"></i><p style="display:none">D</p>
										<?php endif ?>
									</td>

									<td>
										<div class="btn-group">
											<a href="<?= BASE_URL.'admin/categorias_update/'.$c['producto_categoria_id'] ?>" class="btn" title="Editar">
												<i class="icon-pencil"></i>
											</a>
											<a href="<?= $c['producto_categoria_id'] ?>" class="btn" title="Borrar">
												<i class="icon-trash"></i>
											</a>
										</div>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				
			</div>

		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		Catalogo.deleter("a[title='Borrar']", "/admin/categoria_delete/");
		$('#tabla-result').dataTable( Catalogo.tableOpt );
	});
</script>