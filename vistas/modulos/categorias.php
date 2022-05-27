<!-- CONTENT HEADER -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Administrar Categorias</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"> <a href="/index.php">Inicio</a></li>
                    <li class="breadcrumb-item active">Gestot Categorias</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT HEADER -->

<!-- CONTENT -->
<section class="content">

</section>

<script>

    $(document).ready(function(){

    })

    $.ajax({
        url: "ajax/categorias.ajax.php",
        method: "GET",
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta){
            console.log(respuesta)
        }


    })
</script>


<!--
    <form>

<div class="card-body">
    <div class="row">

        <div class="col-6">
            <label for="formGroupExampleInput">Nombres</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ingrese nombres completos ">
        </div>

        <div class="col-6">
            <label for="formGroupExampleInput">codigo</label>
            <input type="number" class="form-control" id="formGroupExampleInput" placeholder="ingrese codigo">
        </div>

        <div class="col-6">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>

        <div class="col-6">
            <label for="inputPass" >Password</label>
            <input type="password" class="form-control" id="inputPass" placeholder="Pass">
        </div>

    </div>

    </div>

    <div class="card-body">

    <button type="submit" class="btn btn-primary">Confirm</button>

    </div>
</form> -->

