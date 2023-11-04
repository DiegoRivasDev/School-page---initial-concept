<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="./css/main.css" rel="stylesheet" />
    <title>Document</title>
</head>



<body>
    <div class="v115_175">
        <div class="v1_238">
            <div class="v1_239"></div>
            <span class="v105_29">Datos de la institucion</span>
            <span class="v105_30">Estado</span>
            <span class="v105_31">Municipio</span>
            <span class="v105_32">Convencional</span>
            <span class="v105_33">Institucion</span>
            <span class="v105_34">Niveles</span>
            <span class="v105_35">modalidad</span>
            <span class="v105_36">Area de atencion</span>
            

            <div class="v105_37">
            <?php
            @$Estado = $_POST ['Estado'];
            echo "$Estado";
            ?>  </div>

            <div class="v105_38">
            <?php
            @$Municipio = $_POST ['Municipio'];
            echo "$Municipio";
            ?>  </div>

            <div class="v105_39">
            <?php
            @$Institución = $_POST ['Institución'];
            echo "$Institución";
            ?>  </div>

            <div class="v105_40">
            <?php
            @$Niveles = $_POST ['Niveles'];
            echo "$Niveles";
            ?>  </div>

            <div class="v105_41">
            <?php
            @$Modalidad = $_POST ['Modalidad'];
            echo "$Modalidad";
            ?>  </div>

            <div class="v105_42">
            <?php
            @$Convencional = $_POST ['Convencional'];
            echo "$Convencional";
            ?>  </div>

            <div class="v105_43">
            <?php
            @$Área_Atención = $_POST ['Área_Atención'];
            echo "$Área_Atención";
            ?>  </div>

            <div class="v105_44"></div><span class="v105_45">Datos del profesor</span>
            
            <span class="v105_46">Nombres y Apellidos</span>
            <span class="v105_47">Cedula</span>
            <span class="v105_48">Numero de telefono</span>
            <span class="v105_49">Correo</span>
            
            <div class="v105_50">
            <?php
            @$Nombres_Apellidos = $_POST ['Nombres_Apellidos'];
            echo "$Nombres_Apellidos";
            ?>  </div>

            <div class="v105_51">
            <?php
            @$Cédula_profe = $_POST ['Cédula_profe'];
            echo "$Cédula_profe";
            ?>  </div>

            <div class="v105_52">
            <?php
            @$phone_profe = $_POST ['phone_profe'];
            echo "$phone_profe";
            ?>  </div>

            <div class="v105_53">
            <?php
            @$correo = $_POST ['correo'];
            echo "$correo";
            ?>  </div>

            <div class="v106_2"></div>
            <span class="v121_2">Parroquia</span>

            <div class="v121_3">
            <?php
            @$Parroquia = $_POST ['Parroquia'];
            echo "$Parroquia";
            ?>  </div>
            
        </div>

        <span class="v107_2">Talla (m)</span>
        <span class="v107_3">Talla al cuadrado</span>
        <span class="v107_4">Lanzamiento de Balón Medicinal (m)</span>
        <span class="v107_5">Peso (Kg)</span>
        <span class="v107_6">Flexion ventral (cm)</span>
        <span class="v107_7">Rapidez</span>
        <span class="v107_8">Flexión y Extensión de codo</span>

        <input type="text" placeholder="Ingrese Talla (m)" id="name-6ee9" name="Talla" class="v107_9" required="">

<input type="text" placeholder="Ingrese Peso (Kg)" id="name-6ee9" name="Peso" class="v107_10" required="">

<input type="text" placeholder="Ingrese Flexion ventral (cm)" id="name-6ee9" name="Flexion_ventral" class="v107_11" required="">

<input type="text" placeholder="Ingrese Rapidez" id="name-6ee9" name="Rapidez" class="v107_12" required="">

<input type="text" placeholder="Ingrese Lanzamiento de Balón Medicinal" id="name-6ee9" name="Lanzamiento_Balón_Medicinal" class="v107_13" required="">

<input type="text" placeholder="Ingrese Flexión y Extensión de codo" id="name-6ee9" name="Flexión_Extensión_codo" class="v107_14" required="">

<input type="text" placeholder="Ingrese Talla al cuadrado" id="name-6ee9" name="Talla_cuadrado" class="v107_15" required="">

        <span class="v107_16">Salto de Longitud sin Carrera de Impulso (m)</span>
        <span class="v107_17">Lanzamiento de Pelota de Béisbol (m)</span>
        <span class="v107_19">Abdominales</span>
        <span class="v107_20">Resistencia</span>
        <span class="v107_21">IMC</span>
        
        <input type="text" placeholder="Ingrese Salto de Longitud sin Carrera de Impulso (m)" id="name-6ee9" name="Salto_Longitud_sin_Carrera_Impulso" class="v107_23" required="">

        <input type="text" placeholder="Ingrese Abdominales" name="Abdominales" class="v107_24" required="">

        <input type="text" placeholder="Ingrese Resistencia" id="name-6ee9" name="Resistencia" class="v107_25" required="">

        <input type="text" placeholder="Ingrese IMC" id="name-6ee9" name="IMC" class="v107_26" required="">

        <input type="text" placeholder="Ingrese Lanzamiento de Pelota de Béisbol (m)" id="name-6ee9" name="Lanzamiento_Pelota_Béisbol" class="v107_29" required="">


        <div class="v107_58"><span class="v109_97">logo</span></div>

        <span class="v107_86">Nombres y Apellidos</span>
        <span class="v107_87">Cédula</span>

        <input type="text" placeholder="Ingrese Cédula" id="name-6ee9" name="Cédula" class="v107_88" required="">

        <input type="text" placeholder="Ingrese Nombres Y Apellidos" id="name-6ee9" name="Nombres_Apellidos_Estudiante" class="v107_89" required="">

            <span class="v107_90">Fecha de Nacimiento</span>
            <span class="v107_91">Edad</span>

            <input type="text" placeholder="Ingrese Edad" id="name-6ee9" name="Edad" class="v107_92" required="">

        <input type="date" placeholder="Ingrese Fecha de Nacimiento" id="name-6ee9" name="Nacimiento" class="v107_93" required="">

            <span class="v107_94">Sexo</span>

            <select name="Sexo"class="v107_95" required="">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
                </select>
        
        <div class="v109_98">
        <div class="v109_99"> </div>
        <span class="v109_100">Guardar Datos</span>
        </div>

        <span class="v109_101">Datos personales del estudiante</span>
        <span class="v109_172">Datos antropomericos del estudiante</span>
        <div class="v112_174"></div><span class="v115_179">logo</span>

    </div>
</body>

</html>