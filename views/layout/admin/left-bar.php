		<div class="span3 hidden-phone">
			<ul id="sidebar" class="nav nav-tabs nav-stacked">
				<li>
					<a href="<?php echo BASE_URL . 'admin/ordenes'; ?>">
		                <i class="icon-shopping-cart icon-large"></i> 
		                Ordenes
		            </a>
				</li>
				<li>
					<a href="<?php echo BASE_URL . 'admin/categorias'; ?>">
		                <i class="icon-folder-close icon-large"></i> 
		                Catalogo
		            </a>
				</li>
				<li>
					<a href="<?php echo BASE_URL . 'admin/clientes'; ?>">
		                <i class="icon-user icon-large"></i> 
		                Clientes
		            </a>
				</li>
				<?php if ( Session::get('operador')['rol'] == 'administrador'): ?>
				<li>
					<a href="<?php echo BASE_URL . 'admin/reportes'; ?>">
		                <i class="icon-bar-chart icon-large"></i> 
		                Reportes
		            </a>
				</li>				
				<li>
					<a href="<?php echo BASE_URL . 'admin/empleados'; ?>">
		                <i class="icon-group icon-large"></i> 
		                Empleados
		            </a>
				</li>
				<?php endif; ?>
        	</ul>
		</div>