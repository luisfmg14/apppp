<div class="row text-center">
<?php foreach ($datos as $key => $v) { ?>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="Recursos/imagen/<?php echo $v['pro_foto']; ?>" alt="">
          <div class="card-body">
            <h4 class="card-title"><?php echo $v['pro_nombre']; ?></h4>
            <p class="card-text"><?php echo $v['pro_descripcion'] ?></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Ver Mas</a>
          </div>
        </div>
      </div>  
<?php } ?>
    </div>
