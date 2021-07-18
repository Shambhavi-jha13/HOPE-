<style>

.navbar{
    margin-top: 0px;
    margin-bottom: 0px;
    padding-top: 0px;
    padding-bottom: 0px;
}

.navbar-toggler{
    border-color: #000 !important;
}
.fas{
    margin-right: 4px;
}

.navbar-brand{
    margin-left: 50px;
}

.navbar-nav{
    margin-right: 40px;
}

.nav-link {
    flex: 1;
    color: #f6dfeb;
    border: 1px solid black;
    color: #000;

}

.btn-grad {
    margin: 10px;
    padding: 10px 20px !important;
    text-align: center;
    transition: 0.5s;
    background-size: 200% auto;
    color: #000 !important;
    box-shadow: 0 0 10px #000;
    display: block;
    border: 2px solid #000;
    border-radius: 10px;
}

.btn-grad:hover {
    border: 2px solid #DA0037;
    box-shadow: 0 0 15px #DA0037;
    color: #DA0037;
    transition: 1s;
}

.new{
    margin-top: 0px;
    margin-bottom: 0px;
}

@media screen and (max-width: 767px){
    .navbar-brand{
        margin-left: 5px;
    }
} 
</style>

<!-- navigation header --> 
<nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <div class="row">
                        <div class="col-2 col-md-3">       
                            <img src="HOPE.png" style="width: 105px;" class="img-logo" alt="Hope">
                        </div>
                        
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto w-100 justify-content-end">
                        
                        <li class="nav-item">
                            <a class="nav-link btn-grad" href="Impact.php"><i class="fas fa-handshake"></i>Impact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-grad" href="connect_page.php" ><i class="fas fa-globe-africa"></i>Connect</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
<hr class="new">   
