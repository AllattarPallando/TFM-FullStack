<div id="newSpendingForm">
    <form id="newSpending">

        <div class="spendingNameInput">
            <h3 class="spendingNameLabel">Nombre del gasto: <span class="asterisk">*</span></h3>
            <i class="fas fa-bookmark"></i>
            <input type="text" placeholder="Introduzca el nombre" />
        </div>

        <div class="amount">
            <h3 class="amountLabel">Importe: <span class="asterisk">*</span></h3>
            <i class="fas fa-euro-sign"></i>
            <input type="number" name="amount" id="amount" min="0" max="10000000000000" value="0">
        </div>        

        <div class="asteriskInfo">
            <h4><span class="asterisk" id="asterisk">*</span> Campo obligatorio</h4>
        </div>

        <div class="spendingFormButton">
            <button type="submit" form="newSpending" value="newSpending" id="newSpendingButton"><a id="newSpendingLink" href="newTravel.php">Guardar gasto</a></button>
        </div>
    </form>
</div>