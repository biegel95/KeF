<?php
  $pdo = Database::conexao();
  $stmt = $pdo->prepare('SELECT * FROM banner order by ordem asc');
  $stmt->execute();
?>

<div id="myCarousel" class="carousel slide banner" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php $count = 0; ?>
    <?php foreach ($stmt as $row) { ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>" class="<?php if ($count == 0) { ?>active<?php } ?>"></li>
    <?php
      $count++; 
    } 
    ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php foreach ($stmt as $row) { ?>
      <div class="item <?php if ($count == 0) { ?>active<?php } ?>">
        <img src="../imagem/<?php echo $row['imagem']; ?>" alt="<?php echo $row['titulo']; ?>">
      </div>
    <?php } ?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="design">
	<img src="../imagem/design.png">
</div>