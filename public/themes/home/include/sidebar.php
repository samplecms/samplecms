

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand animated infinite swing" ><?php echo db_config('home');?></a>
    </div>

   

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         
         <?php 
    $menu = [
    'Home'=>'home/posts/index',
     
    
    ];
    $arr = url_array();
    $current = $arr['module'].'/'.$arr['controller'];
    foreach ($menu as $k=>$v){
    ?>
    <li <?php if(strpos($v,$current)!==false){echo "class='active'";} ?> 

    > <a   href="<?php echo url($v);?>"><?php echo __($k);?></a></li>
    
    <?php }?>
   
      </ul>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

 