        <?php
        include "partials/header.php"
        ?>
            <main>
                <style>
                  html{
                        font-family:cursive
                    }



                    header {
                        width: 100%;
                        padding-top: 30px;
                        background-color: lightgrey;
                        flex-wrap: wrap;
                        justify-content: space-evenly;
                        display: flex;
                        align-items: center;
                        text-decoration: none;
                    }
                    #headersearch {
                        height: 50%;
                        width: 20%;
                        margin-bottom: 15px;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        background-color: white;
                        border-radius: 50px;

                    }


                    #recherche {
                        height: 100%;
                        width: 80%;
                        margin: 10%;
                        border: none;
                        background-color: white;
    
                    }
                    #recherche2 {
                        height: 1%;
                        margin: 5%;
                    }

                    body{
                        margin: auto;
                    }

                    main{
                        width: 100%;
                        padding-bottom: 13%;
                        background-color: beige;
                        align-items: center;
                        display: flex;
                        align-content: center;
                        flex-direction: column;
                        justify-content: center;


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
                    footer {
                        background-color: blanchedalmond;
                        justify-content: center;
                        width: 100%;
                        display: flex;  
                    }

                    footer iframe {
                        width: 70%;

                    }

                    footer p {
                        width: 30%;
                    }
                    
                    
                    
                    
                    </style>
                    
                        <h2>Connexion</h2>
                        <form action="/submit" method="post" enctype="multipart/form-data">

                                <label for="email">Email :</label>
                                <input type="email" id="email" name="email" required>
                                <br>
                                <label for="motDePasse">Mot de passe :</label>
                                <input type="password" id="motDePasse" name="motDePasse" required>
                                <br>    
                            <button type="submit">Connexion</button>
                        </form>

            </main>

            <?php
            include "partials/footer.php"
            ?>
 