<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/mainVoluntarioCadastrar.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper  p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-body">
                    <h2 style="margin-left: 30px;"><b>Cadastrar</b></h2>

                    <form method="POST" action="libSejaVoluntario.php">
                        <div class="form-row">
                            <div class="name">Titulo</div>
                            <div class="value">
                                <input class="input--style-6" type="text"  name="titulo">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Data</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" id="data" name="data">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Endereço</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="endereco">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Descrição</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" type="text" name="descricao"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="eventocadastro" value="FULL">
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Cadastrar Evento</button>
                        </div>
                        
                    </form>


                </div>
                
            </div>
        </div>
    </div>

    <!-- Main JS-->
    <script src="js/globalVoluntarioCadastrar.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    $(function($){
        $("#data").mask("99/99/9999");
    });
</script>

</body>
</html>