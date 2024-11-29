<div id="nav-bar">
  <input id="nav-toggle" type="checkbox"/>
  <div id="nav-header"><a id="nav-title" href="https://codepen.io" target="_blank">UDONE<i class="fab fa-codepen"></i></a>
    <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
    <hr/>
  </div>
  <div id="nav-content">
    <hr/>
    <div class="nav-button"><i class="fas fa-images"></i><span>Domicilio</span></div>
    <div id="nav-content-highlight"></div>
  </div>
  <input id="nav-footer-toggle" type="checkbox"/>
  <div id="nav-footer">
    <div id="nav-footer-heading">
      <div id="nav-footer-avatar"><img src="../ejercicio/imagenes/Logo_Usuario.png"/></div>
      <div id="nav-footer-titlebox"><a id="nav-footer-title" href="https://codepen.io/uahnbu/pens/public" target="_blank"><?php echo $_SESSION['User']?></a><span id="nav-footer-subtitle"><?php echo $_SESSION['Nivel']?></span></div>
      <label for="nav-footer-toggle"><i class="fas fa-caret-up"></i></label>
    </div>
    <div id="nav-footer-content">
      <p>Una gatita que le gusta el mambo con los malos sale a bellaquear </p>
    </div>
  </div>
</div>