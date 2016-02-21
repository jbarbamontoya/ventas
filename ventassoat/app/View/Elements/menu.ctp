    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
    
   <?php echo $this->Html->link('VentasSoat', array('controller' => 'ventas', 'action' => 'index'), array('class' => 'navbar-brand' )); ?>

        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <?php if($current_user['role'] == 'admin'): ?>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Lista Usuarios', array('controller' => 'users', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nuevo Usuario', array('controller' => 'users', 'action' => 'add')) ?></li>
              </ul>
            </li>
        

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Lista Clientes', array('controller' => 'clientes', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nuevo Cliente', array('controller' => 'clientes', 'action' => 'add')) ?></li>
              </ul>
            </li>
<?php endif; ?>

           <?php if($current_user['role'] == 'admin'): ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clases<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Lista Clases', array('controller' => 'clases', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nueva Clase', array('controller' => 'clases', 'action' => 'add')) ?></li>
              </ul>
            </li>
            <?php endif; ?>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ventas <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Lista Ventas', array('controller' => 'ventas', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nueva Venta', array('controller' => 'ventas', 'action' => 'add')) ?></li>
                <li><?php echo $this->Html->link('Buscar póliza', array('controller' => 'ventas', 'action' => 'search')) ?></li>
                <li class="divider"></li>
                <li class="dropdown-header">Indicadores</li>
                <li><?php echo $this->Html->link('Ventas incorrectas', array('controller' => 'ventas_incorrectas', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Total de ventas', array('controller' => 'total_deventas', 'action' => 'add')) ?></li>                   
              </ul>
            </li>

<?php if($current_user['role'] == 'admin'): ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tarifas <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Lista tarifas', array('controller' => 'tarifas', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nueva Tarifa', array('controller' => 'tarifas', 'action' => 'add')) ?></li>
           
              </ul>
            </li>



           
            <li><?php echo $this->Html->link('Lista de Usos', array('controller' => 'ordens', 'action' => 'index')); ?></li>
            <?php endif; ?>
          </ul>
          
          <?php echo $this->Form->create('Platillo', array('type' => 'GET', 'class' => 'navbar-form navbar-left', 'url' => array('controller' => 'platillos', 'action' => 'search'))); ?>
          <div class="form-group">
              <?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'id' => 's', 'class' => 'form-control s', 'autocomplete' => 'off', 'placeholder' => 'Buscar póliza...')); ?>
          </div>
          <?php echo $this->Form->button('Buscar', array('div' => false, 'class' => 'btn btn-primary')); ?>
          <?php echo $this->Form->end(); ?>
          
          
            <ul class="nav navbar-nav navbar-right">
              <li>
                <?php echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout')); ?>
              </li>
            </ul>          
          
        </div>
      </div>
    </div>