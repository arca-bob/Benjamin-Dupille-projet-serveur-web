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
                    padding-top: 5%;
                    background-color: beige;
                    display: flex;
                    justify-content: space-between;
                    margin: auto;
                    flex-direction: column;
                    align-content: flex-start;
                    }

                    main article{
                        width: 40%;
                        text-align: center;
                        border: 1px solid lightgrey;
                        margin: 10px;
                        border-radius: 10px;
                        padding: 20px;
                        gap: 10px;


                    }

                    main article img {
                        width: 20%;

                    }
                    main div{
                        width: 100%;
                        padding-top: 5%;
                        background-color: beige;
                        display: flex;
                        justify-content: space-around;
                        margin: auto;
                        flex-direction: row;
                        align-content: flex-start;
                        
                    }
                    .total{
                        display: flex;
                        justify-content: center;
                        font-size: 25px;
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


        <?php
include "partials/header.php"
?>

            <main>
                <h2>Votre Panier</h2>  
                <div>
                <article><img src="../image/shopping-cart.svg" alt="panier"width="30"><h3>Votre panier est vide</h3></article>
                <article><a href="/catalogue"><img src="../image/catalog-alt.svg" alt="Catalogue" width="30"></a><h3>Ajouter Des article</h3></article>
                </div>
                <h3 class ="total">Total : €</h3>
                
                <?php
                    include "partials/footer.php"
                    ?>
 