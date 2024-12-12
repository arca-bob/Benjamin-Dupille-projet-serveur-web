        <?php
include "partials/header.php"
?>

            <main>
                <style>

                    label {
                        display: block;
                        font-weight: bold;
                    }
                    

                
                    
   
                    

                    
                    button[type="submit"] {
                        background-color: #4CAF50;
                        color: white;
                        padding: 10px 20px;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                    }
                    
                    button[type="submit"]:hover {
                        background-color: #45a049;
                    }
                    
                    
                    
                    </style>
                    
                        <h2>Formulaire d'inscription</h2>
                        <form action="/submit" method="post" enctype="multipart/form-data">
                            <div>
                                <label for="nom">Nom :</label>
                                <input type="text" id="nom" name="nom" required>
                            </div>
                            <div>
                                <label for="prenom">Prénom :</label>
                                <input type="text" id="prenom" name="prenom" required>
                            </div>
                            <div>
                                <label for="email">Email :</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div>
                                <label for="telephone">Numéro de téléphone :</label>
                                <input type="tel" id="telephone" name="telephone" pattern="[0-9]{10}" required>
                            </div>  
                            <div>
                                <label for="adresse">Adresse :</label>
                                <textarea type="text" id="adresse" name="adresse" required></textarea>
                            </div>
                            <div>
                                <label for="motDePasse">Mot de passe :</label>
                                <input type="password" id="motDePasse" name="motDePasse" required>
                            </div>
                            <div>
                                <label for="confirmationMotDePasse">Confirmer le mot de passe :</label>
                                <input type="password" id="confirmationMotDePasse" name="confirmationMotDePasse" required>
                            </div>
                            <div>
                                <label>
                                    <input type="checkbox" id="conditions" name="conditions" required>
                                    J'accepte les conditions générales et la politique de confidentialité.
                                </label>
                            </div>
                            <button type="submit">Soumettre</button>
                        </form>

            </main>

            <?php
include "partials/footer.php"
?>
