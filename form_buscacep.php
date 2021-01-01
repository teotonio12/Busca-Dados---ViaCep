    <style>
        .input-container {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        width: 100%;
        margin-bottom: 15px;
        }

        .icon {
        padding: 10px;
        background: dodgerblue;
        color: white;
        min-width: 50px;
        text-align: center;
        }

        .input-field {
        width: 100%;
        padding: 10px;
        outline: none;
        }

        .input-field:focus {
        border: 2px solid dodgerblue;
        }

        /* Set a style for the submit button */
        .btn {
        background-color: dodgerblue;
        color: white;
        padding: 15px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        }

        .btn:hover {
        opacity: 1;
        }
    </style>

    <form action="." method="post" style="max-width:500px;margin:auto">
        <h2>Informe o CEP</h2>
        <div class="input-container">
            <i class="fa fa-map-marker icon"></i>
            <input class="input-field" type="text" placeholder="Digite um CEP" name="cep">
        </div>

        <button type="submit" class="btn">Buscar</button>
    </form>
    <br>