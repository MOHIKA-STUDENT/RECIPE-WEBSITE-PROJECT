function displayRecipe(recipeName) {
    const mealPage = document.getElementById('meal-page');
    mealPage.style.display = 'block';

    const recipeTitle = document.getElementById('recipe-title');
    recipeTitle.textContent = recipeName;

    const recipeImageElement = document.querySelector('#recipe-img');

    const recipeList = document.getElementById('recipe-list');
    const instructionsList = document.getElementById('instructions-list');
     
 if (recipeName === 'Gajar Halwa' || recipeName === 'Pav Bhaji' || recipeName === 'Veg Pulao' || recipeName === 'Mutter Paneer' || recipeName === 'Manchurian Noodles' || recipeName === 'Naan' || recipeName === 'South Indian Dosa' || recipeName === 'Pithla Bhakri' || recipeName === 'Ukdiche Modak' || recipeName === 'Pizza' || recipeName === 'Samosa' || recipeName === 'Misal Pav') {
        // Display the default recipe details
    if (recipeName === 'Gajar Halwa') {
         recipeImageElement.src = 'gajar-halwa.webp';
        recipeList.innerHTML = `
            <li>Servings: 4</li>
            <li>Time Required: 45 minutes</li>

            <h3>
                <li>Ingredients:</li>
            </h3>
            <ul>
                <li>1 cup gajar (milk solids)</li>
                <li>1 cup sugar</li>
                <li>1/2 cup ghee</li>
                <li>1/2 cup water</li>
                <li>1/2 teaspoon cardamom powder</li>
                <li>1/2 teaspoon fennel seeds powder</li>
                <li>1/2 teaspoon saffron strands (dry)</li>
                <li>1/2 teaspoon cloves powder</li>
                <li>1/2 teaspoon cinnamon powder</li>
                <li>1/2 teaspoon ginger powder</li>
                <li>1/2 teaspoon nutmeg powder</li>
                <li>1/2 teaspoon poppy seeds</li>
                <li>1/2 teaspoon almonds powder</li>
                <li>1/2 teaspoon cashews powder</li>
                <li>1/2 teaspoon pistachios powder</li>
                <li>1/2 teaspoon raisins</li>
                <li>1/2 teaspoon almonds</li>
                <li>1/2 teaspoon cashews</li>
                <li>1/2 teaspoon pistachios</li>
            </ul>

            <h3>
                <li>Instructions:</li>
            </h3>
            <ol>
                <li>Heat ghee in a pan. Add cardamom powder, fennel seeds powder, saffron strands, cloves powder, cinnamon powder, ginger powder, nutmeg powder, poppy seeds, almonds powder, cashews powder, and pistachios powder. Mix well.</li>
                <li>Add gajar, sugar, water, and spices. Mix well and cook on low heat for about 15-20 minutes, stirring occasionally.</li>
                <li>Serve hot gajar halwa with buttered almonds, raisins, and pistachios.</li>
            </ol>
        `;
    } 

    else if (recipeName === 'Pav Bhaji') {
         recipeImageElement.src = 'pavbhaji.jpeg';
        recipeList.innerHTML = `
            <li>Servings: 4</li>
            <li>Time Required: 45 minutes</li>

            <h3>
                <li>Ingredients:</li>
            </h3>
            <ul>
                <li>4 medium-sized potatoes, boiled and mashed</li>
                <li>1 cup mixed vegetables (peas, carrots, capsicum), boiled and mashed</li>
                <li>2 onions, finely chopped</li>
                <li>2 tomatoes, finely chopped</li>
                <li>1/2 cup butter</li>
                <li>1 tablespoon pav bhaji masala</li>
                <li>1 teaspoon red chili powder</li>
                <li>1/2 teaspoon turmeric powder</li>
                <li>Salt to taste</li>
                <li>Fresh coriander leaves, chopped for garnishing</li>
                <li>8 pav (bread rolls)</li>
            </ul>

            <h3>
                <li>Instructions:</li>
            </h3>
            <ol>
                <li>Heat butter in a pan, add chopped onions, and sauté until golden brown.</li>
                <li>Add chopped tomatoes and cook until they turn soft and mushy.</li>
                <li>Add pav bhaji masala, red chili powder, turmeric powder, and salt. Mix well.</li>
                <li>Add mashed potatoes and mixed vegetables. Mix thoroughly, mashing the vegetables with the back of a spoon.</li>
                <li>Cook the bhaji on low heat for about 15-20 minutes, stirring occasionally.</li>
                <li>Toast the pav on a griddle with butter until golden brown.</li>
                <li>Garnish the bhaji with chopped coriander leaves.</li>
                <li>Serve hot pav bhaji with buttered pav, lemon wedges, and chopped onions.</li>
            </ol>
        `;
    }


    else if (recipeName === 'Veg Pulao') {
         recipeImageElement.src = 'vegpulao.webp';
        recipeList.innerHTML =`
        <li>Servings: 2 people</li>
    <li>Preparation Time: 25 minutes</li>
    
<h3>
    <li>Ingredients:</li>
    </h3>
    <ul>
        <li>1 cup basmati rice</li>
        <li>1 onion, sliced</li>
        <li>1 carrot, diced</li>
        <li>1/2 cup green beans, chopped</li>
        <li>1/2 cup peas</li>
        <li>2 tablespoons ghee or oil</li>
        <li>1 teaspoon cumin seeds</li>
        <li>1 cinnamon stick</li>
        <li>2 cloves</li>
        <li>2 cardamom pods</li>
        <li>Salt to taste</li>
        <li>2 cups water</li>
    </ul>
    <li>Substitutes: You can use mixed vegetables of your choice instead of specific ones mentioned.</li>
   
    <h3>
    <li>Instructions:</li>
    </h3>
    <ol>
        <li>Wash and soak basmati rice for 30 minutes.</li>
        <li>Heat ghee in a pan and add whole spices (cumin seeds, cinnamon stick, cloves, cardamom pods).</li>
        <li>Add sliced onions and sauté until translucent.</li>
        <li>Add chopped vegetables and sauté for a few minutes.</li>
        <li>Drain water from soaked rice and add it to the pan. Stir well.</li>
        <li>Add salt and water. Cover and cook until rice is done.</li>
    </ol>

`
;

}
   


    else if (recipeName === 'Mutter Paneer') {
         recipeImageElement.src = 'paneer-mutter.jpg';
        recipeList.innerHTML =`
        <li>Preparation Time: 30 minutes</li>
       <li>Servings: 4 people</li>
    
<h3>
    <li>Ingredients:</li>
    </h3>
    <ul>
        <li>200 grams paneer (cottage cheese), cubed</li>
        <li>1 cup green peas (mutter)</li>
        <li>2 onions, finely chopped</li>
        <li>2 tomatoes, pureed</li>
        <li>1 tablespoon ginger-garlic paste</li>
        <li>1 teaspoon cumin seeds</li>
        <li>1/2 teaspoon turmeric powder</li>
        <li>1 teaspoon coriander powder</li>
        <li>1/2 teaspoon garam masala</li>
        <li>Salt to taste</li>
        <li>Fresh coriander leaves for garnish</li>
    </ul>
    <li>Substitutes: You can use tofu instead of paneer for a vegan option.</li>
    <h3>
    <li>Instructions:</li></h3>
    <ol>
        <li>Heat oil in a pan and add cumin seeds.</li>
        <li>Add chopped onions and sauté until golden brown.</li>
        <li>Add ginger-garlic paste and cook for a minute.</li>
        <li>Add tomato puree, turmeric powder, coriander powder, and garam masala. Cook until oil separates.</li>
        <li>Add paneer and green peas. Mix well and simmer for 5-7 minutes.</li>
        <li>Garnish with fresh coriander leaves and serve hot.</li>
    </ol>
`;

}

 else if (recipeName === 'Manchurian Noodles') {
         recipeImageElement.src = 'noodles.jpg';
        recipeList.innerHTML =`
        <li>Preparation Time: 30 minutes</li>
    <li>Servings: 2 people</li>
        <h3>
        <li>Ingredients:</li>
        </h3>
    <ul>
        <li>1 packet noodles</li>
        <li>1 cup mixed vegetables (carrots, bell peppers, cabbage)</li>
        <li>1 onion, finely chopped</li>
        <li>2 tablespoons soy sauce</li>
        <li>1 tablespoon chili sauce</li>
        <li>1 tablespoon tomato ketchup</li>
        <li>1 tablespoon cornflour</li>
        <li>1 tablespoon oil</li>
        <li>Salt to taste</li>
        <li>Spring onions for garnish</li>
    </ul>
    <h3>
    <li>Instructions:</li>
    </h3>
    <ol>
        <li>Cook noodles as per instructions on the packet and keep aside.</li>
        <li>Heat oil in a pan, add chopped onions, and sauté until translucent.</li>
        <li>Add mixed vegetables and stir-fry until slightly cooked.</li>
        <li>Add soy sauce, chili sauce, and tomato ketchup. Mix well.</li>
        <li>Dissolve cornflour in water and add to the pan to thicken the sauce.</li>
        <li>Add cooked noodles and toss everything together.</li>
        <li>Garnish with chopped spring onions and serve hot.</li>
    </ol>`


}


 else if (recipeName === 'Naan') {
         recipeImageElement.src = 'Naan.jpg';
        recipeList.innerHTML =`
          <li>Preparation Time: 1 hour</li>
    <li>Servings: 4 naans</li>
    <h3>
         <li>Ingredients:</li>
         </h3>
    <ul>
        <li>2 cups all-purpose flour</li>
        <li>1/2 cup yogurt</li>
        <li>1 teaspoon sugar</li>
        <li>1 teaspoon baking powder</li>
        <li>Salt to taste</li>
    </ul>
  <h3>
    <li>Instructions:</li></h3>
    <ol>
        <li>Mix all-purpose flour, yogurt, sugar, baking powder, and salt to form a smooth dough.</li>
        <li>Cover and let the dough rest for about 30 minutes.</li>
        <li>Divide the dough into equal portions and roll out each portion into a naan shape.</li>
        <li>Cook the naan on a hot griddle or tawa until golden brown spots appear on both sides.</li>
        <li>Brush with butter and serve hot with your favorite curry.</li>
    </ol>`


}
 

 else if (recipeName === 'South Indian Dosa') {
         recipeImageElement.src = 'dosa.jpg';
        recipeList.innerHTML =`
        <li>Preparation Time: 8 hours (including soaking and fermentation)</li>
    <li>Servings: 8 dosas</li>
        <h3>
        <li>Ingredients:</li>
        </h3>
    <ul>
        <li>1 cup dosa rice</li>
        <li>1/4 cup urad dal (black gram dal)</li>
        <li>Salt to taste</li>
    </ul>
    
    <h3>
    <li>Instructions:</li></h3>
    <ol>
        <li>Soak dosa rice and urad dal separately for 6-8 hours.</li>
        <li>Grind them together to form a smooth batter. Add salt and mix well.</li>
        <li>Let the batter ferment overnight or for at least 8 hours.</li>
        <li>Heat a griddle, pour a ladleful of batter, and spread it in a circular motion to form a thin dosa.</li>
        <li>Cook until golden brown and crispy on both sides.</li>
        <li>Serve hot dosa with chutney and sambar.</li>
    </ol>`


}

 else if (recipeName === 'Pithla Bhakri') {
         recipeImageElement.src = 'pithla.webp';
        recipeList.innerHTML =`
        <li>Preparation Time: 20 minutes</li>
    <li>Servings: 4 people</li>
        <h3>
         <li>Ingredients:</li>
         </h3>
    <ul>
        <li>1 cup besan (gram flour)</li>
        <li>2 cups water</li>
        <li>1 onion, finely chopped</li>
        <li>2 green chilies, finely chopped</li>
        <li>1/2 teaspoon turmeric powder</li>
        <li>Salt to taste</li>
    </ul>
    <h3>
    <li>Instructions:</li>
    </h3>
    <ol>
        <li>Mix besan with water to form a smooth batter.</li>
        <li>Add chopped onions, green chilies, turmeric powder, and salt. Mix well.</li>
        <li>Heat a pan and pour the batter to make a thick bhakri.</li>
        <li>Cook on both sides until golden brown and cooked through.</li>
        <li>Serve hot pithla bhakri with pickle or curd.</li>
    </ol>`


}

 else if (recipeName === 'Ukdiche Modak') {
         recipeImageElement.src = 'modak.jpg';
        recipeList.innerHTML =`
        <li>Preparation Time: 40 minutes</li>
    <li>Servings: 8 pieces</li>
        
<h3>
    <li>Ingredients:</li>
    </h3>
        <li>1 cup rice flour</li>
        <li>1 cup jaggery, grated</li>
        <li>1/2 cup fresh coconut, grated</li>
        <li>1/4 teaspoon cardamom powder</li>
        <li>Ghee for greasing</li>
    </ul>
    <h3>
    <li>Instructions:</li>
    </h3>
    <ol>
        <li>Mix rice flour with water to form a smooth dough.</li>
        <li>Prepare the stuffing by mixing grated jaggery, coconut, and cardamom powder.</li>
        <li>Take a small portion of dough, flatten it, and stuff it with the jaggery-coconut mixture.</li>
        <li>Shape the modak and steam them for about 15-20 minutes.</li>
        <li>Brush with ghee before serving.</li>
    </ol>
</ul>
`


}

 else if (recipeName === 'Pizza') {
         recipeImageElement.src = 'pizza.webp';
        recipeList.innerHTML =`
        <li>Preparation Time: 30 minutes</li>
    <li>Servings: 2 people</li>
        <h3>
         <li>Ingredients:</li></h3>
    <ul>
        <li>1 pizza base</li>
        <li>1/2 cup pizza sauce</li>
        <li>1 cup mozzarella cheese, shredded</li>
        <li>1/2 cup bell peppers, chopped</li>
        <li>1/2 cup onions, sliced</li>
        <li>1/4 cup olives, sliced</li>
        <li>1/4 cup mushrooms, sliced</li>
        <li>1/4 cup corn kernels</li>
        <li>1/2 teaspoon oregano</li>
        <li>1/2 teaspoon chili flakes</li>
        <li>Salt to taste</li>
    </ul>
    
    <h3>
    <li>Instructions:</li></h3>
    <ol>
        <li>Preheat the oven to 200°C (400°F).</li>
        <li>Spread pizza sauce evenly on the pizza base.</li>
        <li>Sprinkle shredded mozzarella cheese on top.</li>
        <li>Add chopped vegetables, olives, and mushrooms.</li>
        <li>Season with oregano, chili flakes, and salt.</li>
        <li>Bake in the preheated oven for 15-20 minutes or until the cheese melts and the crust is golden brown.</li>
        <li>Slice the pizza and serve hot.</li>
    </ol>`


}

 else if (recipeName === 'Samosa') {
         recipeImageElement.src = 'samosa.jpeg';
        recipeList.innerHTML =`
        <li>Preparation Time: 45 minutes</li>
    <li>Servings: 8 samosas</li>
        <h3>
        <li>Ingredients:</li><h3>
    <ul>
        <li>2 cups all-purpose flour</li>
        <li>1 cup boiled and mashed potatoes</li>
        <li>1/2 cup green peas</li>
        <li>1 teaspoon cumin seeds</li>
        <li>1 teaspoon coriander powder</li>
        <li>1/2 teaspoon garam masala</li>
        <li>Oil for frying</li>
    </ul>
    
    <h3>
    <li>Instructions:</li></h3>
    <ol>
        <li>Prepare the dough by mixing all-purpose flour with water and kneading it into a smooth ball.</li>
        <li>For the filling, sauté cumin seeds, green peas, mashed potatoes, coriander powder, and garam masala.</li>
        <li>Divide the dough into small balls, roll them into discs, and cut them in half.</li>
        <li>Stuff each half with the filling, fold into a triangular shape, and seal the edges.</li>
        <li>Deep fry the samosas until golden brown and crispy.</li>
        <li>Serve hot samosas with chutney or ketchup.</li>
    </ol>`


}


 else if (recipeName === 'Misal Pav') {
         recipeImageElement.src = 'misal.jpg';
        recipeList.innerHTML =`
        <li>Preparation Time: 30 minutes</li>
        <li>Servings: 2 people</li>
    <h3>
        <li>Ingredients:</li>
        </h3>
    <ul>
        <li>1 cup sprouted moong beans</li>
        <li>1 onion, finely chopped</li>
        <li>2 tomatoes, finely chopped</li>
        <li>2 tablespoons misal masala</li>
        <li>1/2 cup farsan (crispy fried snacks)</li>
        <li>4 pav (bread rolls)</li>
    </ul>
    <h3>
    <li>Instructions:</li>
    </h3>
    <ol>
        <li>Heat oil in a pan and add chopped onions. Sauté until golden brown.</li>
        <li>Add chopped tomatoes and cook until they turn soft.</li>
        <li>Add misal masala and sprouted moong beans. Cook until beans are tender.</li>
        <li>Toast pav on a griddle with butter.</li>
        <li>Serve misal with toasted pav, farsan, chopped onions, and lemon wedges.</li>
    </ol>`


} }
else {
        // Fetch and display uploaded recipes
    fetch('recipe-details.php?recipe_name=' + recipeName)
        .then(response => response.json())
        .then(data => {
            // Display the recipe details
            // recipeImageElement.src = data.image_url;
            recipeList.innerHTML = `<br><h3>Ingredients:</h3> <br>${data.ingredients}
            <br><br><h3>Instructions:</h3><br>${data.instructions}`;
           
        })
        .catch(error => console.error('Error:', error));
    }


function displayRecipe() {
    const mealPage = document.getElementById('meal-page');
    mealPage.style.display = 'block';
}



    const recipeCloseBtn = document.querySelector('#recipe-close-btn');

    recipeCloseBtn.addEventListener('click', function() {
        hideRecipe();
    });

    function hideRecipe() {
        const recipePage = document.querySelector('#meal-page');
        recipePage.style.display = 'none';
    }

    
}

           //---------------Search btn------------//                   
           // Get all recipe cards
const recipeCards = document.querySelectorAll('.card');

// Get the search input and button
const searchInput = document.getElementById('search-input');
const searchBtn = document.getElementById('search-btn');

// Add event listener to the search button
searchBtn.addEventListener('click', () => {
  const searchTerm = searchInput.value.trim();
  if (searchTerm) {
    // Loop through each recipe card
    recipeCards.forEach((card) => {
      const recipeTitle = card.querySelector('h3').innerText;
      

      // If the recipe title matches the search term, show the card
      if (recipeTitle.toLowerCase().includes(searchTerm.toLowerCase())) {
        card.style.display = 'block';
      }
     
       else {
        // Otherwise, hide the card
         card.style.display = 'none';
      }
      
    });
  }
});



// Add event listener to the search input for enter key press
searchInput.addEventListener('keydown', (event) => {
  if (event.key === 'Enter') {
    event.preventDefault();
    searchBtn.click();
  }
});

searchInput.addEventListener('input', () => {
  if (searchInput.value.trim() === '') {
    // If the search input is empty, show all recipe cards
    recipeCards.forEach((card) => {
      card.style.display = 'block';
    });
  }
});

function logout() {
     
    alert("Logged out successfully!");
    window.location.href = "login.php";
   
}

document.querySelector('.dropdown').addEventListener('click', function() {
    this.classList.toggle('active');
    var dropdownContent = this.querySelector('.dropdown-content');
    if (dropdownContent.style.display === 'block') {
        dropdownContent.style.display = 'none';
    } else {
        dropdownContent.style.display = 'block';
    }
});

