<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Detalhes do Paciente</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <style>
        <?php include '../public/css/style.css'; ?>
        <?php include '../public/css/bootstrap.min.css'; ?>
        <?php include '../public/css/paciente.css'; ?>
    </style>


    <!-- Template Stylesheet -->
    <link href="../public/css/style.css" rel="stylesheet">
    <link href="../public/css/paciente.css" rel="stylesheet">
</head>

<body>

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href=../../ class="navbar-brand p-0">
            <h1 class="m-0 text-primary"></i>Sickstem Administrativo</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href=../public/principal.html class="nav-item nav-link active">Página Inicial</a>
                <a href="#sobre" class="nav-item nav-link">Sobre</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Consulta</a>
                    <div class="dropdown-menu m-0">
                        <a href=/consulta/cadastrar_view class="dropdown-item">Cadastrar Consulta</a>
                        <a href=/listar_consultas class="dropdown-item">Listar Consultas</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paciente</a>
                    <div class="dropdown-menu m-0">
                        <a href=/paciente/cadastrar_view class="dropdown-item">Cadastrar Paciente</a>
                        <a href=/listar_pacientes class="dropdown-item">Listar Paciente</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Médico</a>
                    <div class="dropdown-menu m-0">
                        <a href="/medico/cadastrar_view" class="dropdown-item">Cadastrar Médico</a>
                        <a href="/listar_medicos" class="dropdown-item">Listar Médicos</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Relatórios</a>
                    <div class="dropdown-menu m-0">
                        <a href="/relatorios/consultas" class="dropdown-item">Detalhes de consultas</a>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
        <a href="appointment.html" class="btn btn-primary py-2 px-4 ms-3">Login</a>
        </div>
    </nav>
    <!-- Navbar End -->
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12">
                <div class="border rounded-3 p-5  mt-5 shadow box-area">
                    <h1 id="detalhes">Detalhes do Paciente</h1>
                    <p><strong>Nome Completo:</strong> <?= htmlspecialchars($paciente->nome_completo) ?></p>
                    <p><strong>CPF:</strong> <?= htmlspecialchars($paciente->cpf) ?></p>
                    <p><strong>Data de Nascimento:</strong> <?= htmlspecialchars($paciente->data_nascimento) ?></p>
                    <p><strong>Sexo:</strong> <?= htmlspecialchars($paciente->sexo === 'M' ? 'Masculino' : 'Feminino') ?></p>
                    <p><strong>Telefone:</strong> <?= htmlspecialchars($paciente->telefone) ?></p>
                    <p><strong>Nome da Mãe:</strong> <?= htmlspecialchars($paciente->nome_mae) ?></p>
                    <p><strong>Nome do Responsável:</strong> <?= htmlspecialchars($paciente->nome_responsavel) ?></p>
                    <p><strong>Telefone do Responsável:</strong> <?= htmlspecialchars($paciente->telefone_responsavel) ?></p>
                    <p><strong>Convênio:</strong> <?= htmlspecialchars($paciente->convenio) ?></p>
                    <p><strong>Plano de Saúde:</strong> <?= htmlspecialchars($paciente->plano_saude) ?></p>

                    <a href="/listar_pacientes" class='btn btn-primary'>Voltar à Lista</a>
                </div>
                
            </div>

        </div>
    </div>

    <!-- <a href='/paciente/editar_view/{$paciente->id}'>Editar Paciente</a> -->
</body>

</html>