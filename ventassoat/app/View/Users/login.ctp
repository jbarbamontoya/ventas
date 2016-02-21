    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('Seguros Soat', array('controller' => 'users', 'action' => 'login'), array('class' => 'navbar-brand')) ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php echo $this->Form->create('User', array('class' => 'navbar-form navbar-right')); ?>
            <div class="form-group">
              <?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Usuario')); ?>
            </div>
            <div class="form-group">
              <?php echo $this->Form->input('password', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Contraseña')); ?>
            </div>
            <?php echo $this->Form->button('Acceder', array('class' => 'btn btn-success')); ?>
            <?php echo $this->Form->end(); ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenidos...</h1>
        <p> Es el Seguro Obligatorio de Accidentes de Tránsito (SOAT),  que cubre las lesiones corporales y muerte que tú, tus acompañantes y los peatones puedan sufrir a consecuencia de  un accidente de tránsito. Todo vehículo automotor, así no tenga placa de rodaje, debe contar con un SOAT, independientemente de cualquier otro tipo de seguro que tenga contratado..</p>
        
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Seguro AutoTotal</h2>
          <p>Es el seguro para vehículos de uso particular a Todo Riesgo, que protege tu vehículo ante posibles daños o pérdidas que este pueda sufrir o pueda ocasionar a otros </p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Seguro Vehicular de Responsabilidad Civil Frente a Terceros</h2>
          <p>Este seguro  te ofrece la más completa cobertura ante accidentes que causen daños materiales y personales en el que se vea involucrado un auto, una camioneta, un camión o hasta un remolcador.  </p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Seguro Pack Vehicular</h2>
          <p>Es el seguro vehicular exclusivamente para automóviles y camionetas de uso particular en el cual podrás escoger coberturas permitiendo proteger tu vehículo de acuerdo a tus necesidades. Las coberturas que te brinda este producto son:  Robo Total, Destrucción Total por Choque, Daños Parciales por Choque  y Responsabilidad Civil.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; La Positiva Seguros 2016</p>
      </footer>
    </div> <!-- /container -->
