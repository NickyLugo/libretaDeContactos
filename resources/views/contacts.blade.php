<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Input Group with Icons</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Input Group with Icons</h2>
        <!-- Input group example with icon -->
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Nombre(s)" aria-label="Nombre(s)" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon2">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-user"></i>
            </span>
            <input type="text" class="form-control" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="basic-addon3">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-calendar"></i>
            </span>
            <input type="date" class="form-control" placeholder="Fecha de Nacimiento" aria-label="Fecha de Nacimiento" aria-describedby="basic-addon4">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-user-secret"></i>
            </span>
            <input type="text" class="form-control" placeholder="Alias" aria-label="Alias" aria-describedby="basic-addon5">
        </div>

        <input type="hidden" id="status" name="status" value="1">

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (optional, for Bootstrap features) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
