<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Royal Pizza</title>
    <link rel="stylesheet" href="royal.css" />
  </head>
  <body>
    <header>
      <div class="site">
        <img src="fresh1.jpg" alt="pizza" srcset="" height = "695px" width="1520px" />
        <div class="tex">
          <h1>The Royal Pizza</h1>
          <h4>World's no.1 Pizzas</h4>
          <!-- <p>Scroll Down for more</p> -->
           <a href="#">Delievery</a>
           <a href="#">Carryout</a>
        </div>
      </div>
    </header>
    <br>
    <main>
      <section>
        <h2>Different types of pizzas</h2>
        <div class ="row">
        <article>
          <div id="div1">
          <h3>Pizza Marinera</h3>
          <img src="pizza-marinera.jpg" alt="marinera pizza" height="300px" width="300px">
          <p>recipes</p><br>
          <ul>
            <li>250 g mąki pszennej</li>
            <li> 8 g drożdży instant</li>
            <li>150 ml letniej wody</li>
            <li>1/2 łyżeczki cukru</li>
            <li> 1 łyżeczka soli</li>
          </ul>
            <div class="btn">
              <a href="#">Read More... </a>
            </div>
              </div>
              </article>
              <article>
                <div id="div2">
                <h3>Paneer Pizza</h3>
                <img src="paneer.webp" alt="" height="300px" width="300px">
                 <p>recipes</p><br>
                 <ul>
                  <li>1 medium pizza base</li>
                  <li>100 gm cubed paneer</li>
                  <li>1/2 cup mozzarella</li>
                  <li>1 tablespoon pizza sauce</li>
                  <li> 1 cubed capsicum ( green pepper)</li>
                  <li>1 tablespoon butter</li>
                </ul>
          <div class="btn">
            <a href="#">Read More... </a>
          </div>
          </div>
        </article>
        <article>
          <div id="div3">
          <h3>Mushroom Pizza</h3>
          <img src="gluten-free-vegan1.jpg" alt="" height="300px" width="300px">
          <p>recipes</p><br>

          <ul>
            <li>200 gm mozzarella</li>
            <li>40 gm parmesan cheese</li>
            <li>10 mushroom</li>
            <li>2 1/2 tablespoon canola oil/ rapeseed oil</li>
            <li>1 teaspoon Italian seasoning</li>
            <li>50 gm ricotta cheese</li>
          </ul>
         <div class="btn">
          <a href="#">Read More... </a>
          </div>
        </div>
        </article>
      </div>
    </div>
      </section>
      <br>
      <aside>
          <div class="sign-up">
            <h3>New to our site</h3><br>
              <form action="thnx.php" method="get">
               <h3>Sign Up </h3> 
               <br>
                <label for="finame"> First Name: </label>
                 <input type="text" id="finame" name="finame" size = "20" maxlength="40" placeholder="first name" required><br>
                   <label for="laname"> Last Name: </label>
                 <input type="text" id="laname" name="laname" size = "20" maxlength="40" placeholder="last name" required><br>

                 <label for="email"> Email: </label>
                 <input type="email" id="mail" name="email" required><br>

                 <label for="password">Password: </label>
                 <input type="password" id="word" name="word" required><br>

                 <label for="password">Confirm Password: </label>
                 <input type="password" id="od" name="word" required><br>
              
              <br>
                <input type="submit" value="Sign up">
             
              </form>
              <br>
              <p>By clicking the sign up button, you agree to our <a href="#">Terms, Conditions</a> and <a href="#">Policies</a></p>

              
              </div>
              <br>
                <br>
                
            <div class="sign-in">
            <h3>Already a member</h3><br>
                <form action="" method="get">
               <h3>Sign In</h3> 
                <label for="Email">Email: </label>
                <input type="email" name="email" id="email" required><br>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" required><br>
                <br>
               
                <br>
                <input type="submit" name="sign-in" id="sign-in" value="Sign in">
              </form>
          </div>
      </aside>
      
      <!-- <label for="no.">Number of pizzas: </label> -->
                <!-- <input type="radio" name="sat" id="job" value="job" />
                        <label for="job">1</label>
                        <input type="radio" name="sat" id="job" value="job" />
                        <label for="job">2</label>
                        <input type="radio" name="sat" id="job" value="job" />
                        <label for="job">3</label>
                        <input type="radio" name="sat" id="job" value="job" />
                        <label for="job">4</label> -->
                        <form action="confirm.php" method="GET">
                        <label for="quantity">Number of pizzas: </label>
      <input type="number" id="quantity" name="quantity"/>
     
      <label for="item">Select your pizza: </label>
      <select name="item" id="item">
        <option id="pizza" name="pi">Mushroom Pizza</option>
        <option id="pizza" name="pi">Pizza Marinera</option>
        <option id="pizza" name="pi">Paneer Pizza</option></selectl
        <br>
                        <label for="add">types you want: </label>
                        <!-- <p><a href="#">Deep-Dish pizza</a> </p> -->
                        
                        <label for="la">Deep-Dish pizza<span class="price">$25</span></label>
                        <input type="checkbox" name="la" id="la" value="la" />
                        <label for="va">Crust-type pizza  <span class="price">$15</span></label>
                        <input type="checkbox" name="la" id="la" value="va" />
                        <label for="ba">Cheese pizza  <span class="price">$20</span></label>
                        <input type="checkbox" name="la" id="la" value="ba" />
                        <label for="ba"><a href="#">Delivery</a>  <span class="free"> $8</span></label>
                        <input type="checkbox" name="la" id="la" value="ja" />
                        <label for="ba"><a href="#">Carryout</a>  <span class="free"> Free</span></label>
                        <input type="checkbox" name="la" id="la" value="ka" />
          
           <input type="submit" value="confirm">
</form>
    </main><br>
    <br><br>
    <hr><br>
    <footer>
      
     <p> *Pricing may vary by location. An additional charge may apply for premium
      toppings, sauces, extra cheese, and special pizza types including:
      Handmade Pan Pizzas, Thin Crust Pizzas, Gluten Free Pizzas and Feast
      Pizzas. Please refer to offer when ordering. Limited time. Prices,
      participation, delivery area, terms and charges may vary. According to our
      most recent assessment of scientific data, foods containing gluten levels
      not exceeding 20 PPM would not pose a health risk to the vast majority of
      individuals with Celiac Disease or to individuals with gluten sensitivity.
      The level of gluten found in our pizza made with Gluten Free Crust is
      below 20 PPM. However, Royal's pizza made with a Gluten Free Crust is
      prepared in a common kitchen with the risk of gluten exposure. Therefore,
      Royal's DOES NOT recommend this pizza for customers with Celiac Disease.
      Customers with gluten sensitivities should exercise judgement in consuming
      this pizza. Royal's Carryout Insurance program is only available to
      carryout customers who return their damaged order, uneaten, in its
      original packaging (inclusive of an order label or receipt) to the store
      from which it was originally purchased within a maximum of two hours of
      the time of purchase. Damaged orders will be replaced with identical
      products and no substitutions will be permitted. This is a limited time
      offer and store participation may vary. Due to baking quality, limit of 10
      toppings per pizza. ©2022 Royal's IP Holder LLC. Royal's®, Royal's Pizza®
      and the modular logo are registered trademarks of Royal's® IP Holder LLC.
      </p>
    </footer>
  </body>
</html>
<!-- recipe 1 name is
Pizza Need
Pizza Types Explained: You Should Try These Different Styles ASAP
        
       recipe 2 name is
Artisan Pizza Kitchen
What are the different kind of pizza flavors? ⋆ Artisan Pizza Kitchen - Art of Homemade Pizza

        recipe 3 name is 
Dogtown Pizza
The Absolute Best Pizza Topping Combos | Dogtown Pizza -->

<!-- ingredient of
  
  
  
  ingredient of marinera

250 g mąki pszennej
8 g drożdży instant
150 ml letniej wody
1/2 łyżeczki cukru
1 łyżeczka soli
-->

<!-- Ingredients of Mushroom Capsicum Pizza

4 Servings
2 pizza base
1/2 yellow bell pepper
10 mushroom
40 gm parmesan cheese
1 teaspoon garlic powder
salt as required
2 1/2 tablespoon canola oil/ rapeseed oil
1/2 red bell pepper
1/2 capsicum (green pepper)
50 gm ricotta cheese
200 gm mozzarella
1 teaspoon Italian seasoning
1/2 tablespoon white pepper powder
6 tablespoon pizza sauce -->

<!-- paneer
1 medium pizza base
100 gm cubed paneer
1/2 cup mozzarella
1 tablespoon pizza sauce
1 cubed capsicum ( green pepper)
1 tablespoon butter -->