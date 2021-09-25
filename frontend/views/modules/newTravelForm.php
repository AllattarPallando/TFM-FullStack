<div id="newTravelForm">
    <form id="newTravel">
        <div class="travelImagePanel">
            <input type="image" src="img/newImage.png" alt="Añadir imagen de usuario" class="tarvelImg">
        </div>

        <div class="travelNameInput">
            <h3 class="travelNameLabel">Nombre del viaje: <span class="asterisk">*</span></h3>
            <i class="fas fa-bookmark"></i>
            <input type="text" placeholder="Introduzca el nombre" />
        </div>

        <div class="travelOrigin">
            <h3 class="travelOriginLabel">Origen: <span class="asterisk">*</span></h3>
            <i class="fas fa-hourglass-start"></i>
            <select name="origin" id="origin">

                <option selected value="0">Seleccione el origen</option>

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

        <div class="travelDestinationForm">
            <h3 class="travelDestinationLabel">Destino: <span class="asterisk">*</span></h3>
            <i class="fas fa-hourglass-end"></i>
            <select name="destination" id="destination">

                <option selected value="0">Seleccione el destino</option>

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
            <h3 class="travelStartLabel">Fecha de incio: <span class="asterisk">*</span></h3>
            <input type="date" id="start" name="travelStart" value="2021-11-06" min="2021-11-06" max="2022-12-31">
        </div>

        <div class="endDate">
            <h3 class="travelEndsLabel">Fecha de fin: <span class="asterisk">*</span></h3>
            <input type="date" id="end" name="travelEnd" value="2021-11-07" min="2021-11-07" max="2022-12-31">
        </div>

        <div class="travelers">
            <h3 class="travelersLabel">Viajeros: <span class="asterisk">*</span></h3>
            <i class="fas fa-users"></i>
            <div class="inputSpinner">                
                <input type="number" name="travelers" id="travelers" min="0" max="20" value="0" step="1">
                <button type="button" class="plus"><i class="fas fa-caret-up"></i></button>
                <button type="button" class="less"><i class="fas fa-caret-down"></i></button>
            </div>
        </div>

        <div class="travelStops">
            <h3 class="travelStopsLabel">Paradas:</h3>
            <div class="travelStopsPanel">
                <div class="travelStopPanel">
                    <?php 
                        include "modules/travelStop.php"
                    ?>
                </div>
                <button type="button" class="newTravelStop"><a href="newTravelStop.php"><span>+</span> Nueva parada</a></button>
            </div>
        </div>

        <div class="travelBudget">
            <h3 class="travelBudgetLabel">Presupuesto:</h3>
            <div class="travelExpensesPanel">
                <div class="travelExpenses">
                    <?php 
                        include "modules/travelSpending.php"
                    ?>
                </div>
                <button type="button" class="newTravelSpending"><a href="newTravelSpending.php"><span>+</span> Nuevo gasto</a></button>
                <div class="total">
                    <h2 class="travelBudgetName">Total</h2>
                    <h3 class="travelBudgetAmount">€</h3>
                </div>
            </div>
        </div>

        <div class="asteriskInfo">
            <h4><span class="asterisk" id="asterisk">*</span> Campo obligatorio</h4>
        </div>

        <div class="travelFormButton">
            <button type="submit" form="newTravel" value="newTravel" id="newTravelButton"><a id="newTravelLink" href="travels.php">Guardar viaje</a></button>
        </div>
    </form>
</div>