<div id="newStopForm">
    <form id="newStop">
        <div class="stopImagePanel">
            <input type="image" src="img/newImage.png" alt="Añadir imagen de usuario" class="stopImg">
        </div>        

        <div class="stopOrigin">
            <h3 class="stopOriginLabel">Lugar: <span class="asterisk">*</span></h3>
            <i class="fas fa-hourglass-start"></i>
            <select name="origin" id="origin">

                <option selected value="0">Seleccione el lugar</option>

                <optgroup label="Asturias">
                    <option value="1">Arriondas</option>
                    <option value="2">Avilés</option>
                    <option value="3">Cangas del Narcea</option>
                    <option value="4">Cangas de Onís</option>
                    <option value="5">Covadonga</option>
                    <option value="6">Cudillero</option>
                    <option value="7">Gijón</option>
                    <option value="8">Llanes</option>
                    <option value="9">Oviedo</option>
                    <option value="10">Ribadesella</option>
                </optgroup>

                <optgroup label="Cantabria">
                    <option value="11">Astillero</option>
                    <option value="12">Argoños</option>
                    <option value="13">Castro Urdiales</option>
                    <option value="14">Camargo</option>
                    <option value="15">Comillas</option>
                    <option value="16">Potes</option>
                    <option value="17">Reinosa</option>
                    <option value="18">Santander</option>
                    <option value="19">Santillana del Mar</option>
                    <option value="20">Torrelavega</option>
                </optgroup>

                <optgroup label="Galicia">
                    <option value="21">Bayona</option>
                    <option value="22">Carballo</option>
                    <option value="23">Combarro</option>
                    <option value="24">Ferrol</option>
                    <option value="25">La Coruña</option>
                    <option value="26">Lugo</option>
                    <option value="27">Ourense</option>
                    <option value="28">Pontevedra</option>
                    <option value="29">Riveira</option>
                    <option value="30">Santiago de Compostela</option>
                </optgroup>

            </select>
        </div>        

        <div class="startDate">
            <h3 class="stopStartLabel">Fecha de parada: <span class="asterisk">*</span></h3>
            <input type="date" id="start" name="stopStart" value="2021-11-06" min="2021-11-06" max="2022-12-31">
        </div>

        <div class="endDate">
            <h3 class="stopEndsLabel">Fecha de salida: <span class="asterisk">*</span></h3>
            <input type="date" id="end" name="stopEnd" value="2021-11-07" min="2021-11-07" max="2022-12-31">
        </div>        

        <div class="asteriskInfo">
            <h4><span class="asterisk" id="asterisk">*</span> Campo obligatorio</h4>
        </div>

        <div class="stopFormButton">
            <button type="submit" form="newStop" value="newStop" id="newStopButton"><a id="newStopLink" href="newTravel.php">Guardar parada</a></button>
        </div>
    </form>
</div>