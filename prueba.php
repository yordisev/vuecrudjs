<?php include 'includes/navbar.php' ?>
        <div class="container">                
            <div class="row">       
                <div class="col">        
                    <button @click="btnAlta" class="btn btn-success" title="Nuevo"><i class="fas fa-plus-circle fa-2x"></i></button>
                </div>
                <div class="col text-right">                        
                    <h5>Stock Total: <span class="badge badge-success">{{totalStock}}</span></h5>
                </div>    
            </div>                
           
        </div>        
        <?php include 'includes/footer.php' ?>