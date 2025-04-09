<style>
    *{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    form {
        max-width: 500px;
        margin: auto;
        padding: 1rem;
        background-color:rgb(180, 139, 1);
        border-radius: 8px;
    }

    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }

    input,
    select {
        width: 100%;
        padding: 0.5rem;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        margin-top: 15px;
        padding: 10px 20px;
        background-color:rgb(77, 91, 105);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color:rgb(1, 12, 24);
    }
</style>

</head>

<body>
    <h2 style="text-align: center;">Ajouter un nouvel employé</h2>

    <form method="post" action="form_back_end.php"> //action = données transférées ds la p. form_back_end
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" required>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required>
        <label for="sexe">Sexe</label>
        <select name="sexe" id="sexe" required>
            <option value="">-- Sélectionner --</option>
            <option value="m">Masculin</option>
            <option value="f">Féminin</option>
        </select>
        <label for="service">Service</label>
        <input type="text" name="service" id="service" required>
        <label for="date_embauche">Date d'embauche</label>
        <input type="date" name="date_embauche" id="date_embauche" required>
        <label for="salaire">Salaire (€)</label>
        <input type="number" name="salaire" id="salaire" required min="0" step="0.01">
        <button name="form_1" type="submit">Enregistrer</button>
    </form>