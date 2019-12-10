<?php

namespace App\Helpers;

use App\Pokemon;
use App\Item;
use App\Ability;
use App\Nature;
use App\Move;
use App\TeamData;
use App\Team;

use App\Helpers\PokemonDataConstants;

class ShowdownExportParser {
	static function parse($data) {
		// Split the data first to get each pokemon into its own array...
        $aData = preg_split('/\n\n/', trim($data));
        // ... then split again to get a nested array for each line of data for each Pokemon.
        for($i = 0; $i < count($aData); $i++) {
            $aData[$i] = preg_split('/\n/', trim($aData[$i]));
		}
        $pokemon = [];
        $i = 0;
        foreach($aData as $poke) {
			$index = 2; // There's 3 guaranteed lines before optional lvl and shiny
			$pokemon_id = PokemonDataConstants::POKEMON[trim(preg_replace('/\(\w\)/', '', explode('@', $poke[0])[0]))];
			$item_id = PokemonDataConstants::ITEMS[trim(explode('@', $poke[0])[1])];
			$ability_id = PokemonDataConstants::ABILITIES[trim(explode(':', $poke[1])[1])];
			$level = 100; // default value
			$shiny = false; // default value
			$ivs = '';

			if (strpos($poke[2], 'Level') !== false) {
				$level = trim(explode(': ', $poke[2])[1]);
				$index++;
			}
			if (strpos($poke[3], 'Shiny') !== false) {
				$shiny = true;
				$index++;
			}
			$evs = trim(explode(':', $poke[$index])[1]);
			$index++;
			$nature_id = PokemonDataConstants::NATURES[
				trim(explode(' ', $poke[$index])[1]) == 'Nature' 
				? trim(explode(' ', $poke[$index])[0]) 
				: 'Serious'
			]; 
			$index++;
			if (strpos($poke[$index], 'IVs') !== false) {
				$ivs = trim(explode(':', $poke[$index])[1]);
				$index++;
			}
			$move1_id = PokemonDataConstants::MOVES[trim(str_replace('- ', '',  $poke[$index]))];
			$index++;
			$move2_id = PokemonDataConstants::MOVES[trim(str_replace('- ', '',  $poke[$index]))];
			$index++;
			$move3_id = PokemonDataConstants::MOVES[trim(str_replace('- ', '',  $poke[$index]))];
			$index++;
			$move4_id = PokemonDataConstants::MOVES[trim(str_replace('- ', '',  $poke[$index]))];
			$index++;


            $pokemon[$i] = 
            [  
                'pokemon_id' => $pokemon_id,
                'item_id' => $item_id,
				'ability_id' => $ability_id,
				'level' => $level,
				'shiny' => $shiny,
                'evs' => $evs,
                'nature_id' => $nature_id,
                'ivs' => $ivs,
                'move1_id' => $move1_id,
                'move2_id' => $move2_id,
                'move3_id' => $move3_id,
                'move4_id' => $move4_id
            ];
            $i++;
		}
		
		return $pokemon;
	}
}