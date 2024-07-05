<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secciones de usuario</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .section {
            display: none;
        }
        .container-100 {
            max-width: 500px;
            margin: 0 auto; /* Centers the container horizontally */
        }
        .input-group-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start; /* Align items at the top */
            margin-bottom: 1rem;
        }
        .input-group-half {
            width: 48%; /* Adjust as needed */
        }
        .input-group-date {
            width: 36%; /* Adjust as needed */
        }
        .input-group-space {
            width: 4%; /* Adjust as needed */
        }
        .input-group-alias {
            width: 60%; /* Adjust as needed */
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Show the selected section and hide others
            $('.section-selector').change(function() {
                var selectedSection = $(this).val();
                $('.section').hide();
                $('#' + selectedSection).show();
            });
        });
    </script>
</head>
<body>
    <h2>Información de contactos</h2>
    <form action="process_form.php" method="post">
        <div class="form-group">
            <label for="section">Selecciona una sección:</label>
            <select id="section" class="section-selector">
                <option value="personal">Datos Personales</option>
                <option value="phone">Agregar Teléfono(s)</option>
            </select>
        </div>

        <!-- Container for Personal Data Section -->
        <div id="personal" class="section container-100">

            <div class="input-group mb-3">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                    </svg>
                </span>
                <input type="text" class="form-control" placeholder="Nombre(s)" aria-label="Nombre(s)" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                </span>
                <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon2">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                        <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5"/>
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    </svg>
                </span>
                <input type="text" class="form-control" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="basic-addon3">
            </div>

            <div class="input-group-container">
                <div class="input-group input-group-date">
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" aria-label="Fecha de Nacimiento" aria-describedby="basic-addon4">
                        </div>
                    </div>
                </div>

                <div class="input-group input-group-space">
 
                </div>

                <div class="form-group">
                        <label for="alias">(apodo /¿de dónde lo conozco?):</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user-secret"></i></span>
                            <input type="text" class="form-control" placeholder="Alias" aria-label="Alias" aria-describedby="basic-addon5" name="alias">
                        </div>
                </div>
            </div>

            <input type="hidden" id="status" name="status" value="1">
        </div>

        <!-- Phone Numbers Section -->
        <div id="phone" class="section container-100">
            <div class="form-group">
                <label for="telefono1" class="phone-label">Teléfono 1 (Mobile):</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    <select class="form-control" id="telefono1-code" name="telefono1-code">
                        <option value="+54">+54 (Argentina)</option>
                        <option value="+61">+61 (Australia)</option>
                        <option value="+32">+32 (Belgium)</option>
                        <option value="+55">+55 (Brazil)</option>
                        <option value="+86">+86 (China)</option>
                        <option value="+20">+20 (Egypt)</option>
                        <option value="+33">+33 (France)</option>
                        <option value="+49">+49 (Germany)</option>
                        <option value="+30">+30 (Greece)</option>
                        <option value="+91">+91 (India)</option>
                        <option value="+62">+62 (Indonesia)</option>
                        <option value="+81">+81 (Japan)</option>
                        <option value="+82">+82 (South Korea)</option>
                        <option value="+60">+60 (Malaysia)</option>
                        <option value="+52">+52 (Mexico)</option>
                        <option value="+31">+31 (Netherlands)</option>
                        <option value="+64">+64 (New Zealand)</option>
                        <option value="+47">+47 (Norway)</option>
                        <option value="+48">+48 (Poland)</option>
                        <option value="+7">+7 (Russia)</option>
                        <option value="+65">+65 (Singapore)</option>
                        <option value="+34">+34 (Spain)</option>
                        <option value="+46">+46 (Sweden)</option>
                        <option value="+41">+41 (Switzerland)</option>
                        <option value="+27">+27 (South Africa)</option>
                        <option value="+44">+44 (UK)</option>
                        <option value="+1">+1 (USA)</option>
                        <option value="+63">+63 (Philippines)</option>
                        <option value="+90">+90 (Turkey)</option>
                    </select>
                    <input type="text" class="form-control" id="telefono1" name="telefono1" placeholder="Mobile" aria-label="Teléfono 1" aria-describedby="basic-addon6">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary add-phone" type="button">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div id="additional-phones"></div>
        </div>

        <!-- Hidden Status Field (always visible) -->
        <input type="hidden" id="status" name="status" value="1">

        <div class="form-group">
            <input type="submit" value="Guardar">
        </div>
    </form>

    <!-- Bootstrap JS and dependencies (optional, for Bootstrap features) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Show the selected section and hide others
            $('#section').change(function() {
                var selectedSection = $(this).val();
                $('.section').hide();
                $('#' + selectedSection).show();
            }).trigger('change'); // Trigger change to show the default section

            // Phone labels array
            var phoneLabels = ["Mobile", "Home", "Work", "Main", "Other"];

            // Add more phone number fields
            var phoneIndex = 2;
            $('.add-phone').click(function() {
                var phoneLabel = phoneLabels[phoneIndex - 1] || "Other";
                var phoneField = `
                    <div class="form-group">
                        <label for="telefono${phoneIndex}" class="phone-label">Teléfono ${phoneIndex} (${phoneLabel}):</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>

                        <select class="form-control" id="telefono1-code" name="telefono1-code">
                        
                            <option value="+54">+54 (Argentina)</option>
                            <option value="+61">+61 (Australia)</option>
                            <option value="+32">+32 (Belgium)</option>
                            <option value="+55">+55 (Brazil)</option>
                            <option value="+86">+86 (China)</option>
                            <option value="+20">+20 (Egypt)</option>
                            <option value="+33">+33 (France)</option>
                            <option value="+49">+49 (Germany)</option>
                            <option value="+30">+30 (Greece)</option>
                            <option value="+91">+91 (India)</option>
                            <option value="+62">+62 (Indonesia)</option>
                            <option value="+81">+81 (Japan)</option>
                            <option value="+82">+82 (South Korea)</option>
                            <option value="+60">+60 (Malaysia)</option>
                            <option value="+52">+52 (Mexico)</option>
                            <option value="+31">+31 (Netherlands)</option>
                            <option value="+64">+64 (New Zealand)</option>
                            <option value="+47">+47 (Norway)</option>
                            <option value="+48">+48 (Poland)</option>
                            <option value="+7">+7 (Russia)</option>
                            <option value="+65">+65 (Singapore)</option>
                            <option value="+34">+34 (Spain)</option>
                            <option value="+46">+46 (Sweden)</option>
                            <option value="+41">+41 (Switzerland)</option>
                            <option value="+27">+27 (South Africa)</option>
                            <option value="+44">+44 (UK)</option>
                            <option value="+1">+1 (USA)</option>
                            <option value="+63">+63 (Philippines)</option>
                            <option value="+90">+90 (Turkey)</option>

                        </select>
                            <input type="text" class="form-control" id="telefono${phoneIndex}" name="telefono${phoneIndex}" placeholder="${phoneLabel}" aria-label="Teléfono ${phoneIndex}" aria-describedby="basic-addon${phoneIndex+5}">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary remove-phone" type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                $('#additional-phones').append(phoneField);
                phoneIndex++;
            });

            // Remove phone number fields
            $(document).on('click', '.remove-phone', function() {
                $(this).closest('.form-group').remove();
            });
        });
    </script>
</body>
</html>
