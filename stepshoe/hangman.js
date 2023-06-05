

// initializing variables first


let Random_Word = '';
let Player_Guess = '';
let possibilities = 10;
let Player_alphabets = new Set();


// Prompting Player 1 with the condition of 8 letters only
while (chosen.length < 8) {
    chosen = prompt("Please enter a word with at least 8 alphabets");
}

// Word must be turned into *

Player_Guess = '*'.repeat(Random_Word.length);

// print initial camouflaged state of the random word generated

console.log('Word: ${Player_Guess}');

// Loop through game generation

while (possibilities > 0 && Player_Guess.includes('*')) {
    let Player_alphabet_guess = prompt("Player 2 guess another letter")

    // if the guessed letter has not been guessed before

    if (!Player_alphabets.has(Player_alphabets_guess)) {

        // add the guessed letter to the set5 of guessed letters

        Player_alphabets.add(Player_alphabets_guess);

        // if the letter is in the word

        if (Random_Word.includes(Player_alphabets_guess)) {
            let new_Guess = '';

            // go through each letter in the word using a for loop and if statement

            for (let i = 0; i < Random_Word.length; i++) {

                // if the letter matches one of the letter in the random word generated#

                if (Random_Word[i] == Player_alphabet_guess) {
                    new_Guess += Player_alphabet_guess;

                } else {
                    new_Guess = + Player_Guess[i];

                }
            }

            // update player's guess with the new guess
            Player_Guess = new_Guess;

        } else {
            // decrementation of possibilities given to player

            possibilities--;
        }

        // print ongoing game

        console.log(`The word: ${Player_Guess}`);
        console.log(`Guessed letters: ${Array.from(Player_alphabets).join(', ')}`);
        console.log(`Remaining possibilities: ${possibilities}`);
    } else {
        // If the guessed letter has been guessed before, notify the player
        console.log("You've already guessed that letter!");
    }

}

// After the game loop has ended, check if the player has won or lost and print the corresponding message
if (possibilities > 0) {
    console.log("CONGRATS YOU WIN");
} else {
    console.log("YOU LOSE");
}




