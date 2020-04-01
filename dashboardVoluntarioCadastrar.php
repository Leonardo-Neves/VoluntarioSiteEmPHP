<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style type="text/css">
    
    .form-margin {
      margin: 30px;
    }

    .btn_roxo {
        background-color: #352961;
    }
    .text-color {
      color: white;
    }

  </style>
</head>
<body>
    <div class="container">
        <div class="card card-6">

            <div class="form-margin">

                <h2><b>Cadastrar</b></h2>
                <br/>
                <form method="POST" action="libSejaVoluntario.php">
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="titulo">Titulo</label>
                            <input class="form-control" type="text" name="titulo">
                        </div>
                        <div class="form-group col-6">
                            <label class="data">Data</label>
                            <input class="form-control" type="text" id="data" name="data">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="endereco">Endereço</label>
                            <input class="form-control" type="text" name="endereco">
                        </div>
                        <div class="form-group col-6">
                            <label class="codigo">Código</label>
                            <input class="form-control" type="text" name="codigo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="descricao">Descrição</label>
                        <textarea class="form-control" type="text" name="descricao"></textarea>
                    </div>
                    <input type="hidden" name="eventocadastro" value="FULL">
                    <button class="btn btn_roxo text-color" type="submit"><b>Cadastrar Evento</b></button>  
                </form>   
            </div>        
        </div>
    </div>

</body>
</html>