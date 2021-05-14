package fr.sazaju.genshin.leveling;

import java.util.Map;

import fr.sazaju.genshin.character.Character;
import fr.sazaju.genshin.material.MaterialStack;

public interface Level {

	MaterialStack getCost();

	Requirement getRequirement();

	public static interface Requirement {
		public boolean testCharacter(Character character);
		public boolean testAdventureRank(int adventureRank);

		public static Requirement minimumAdventureRank(int minAdventureRank) {
			return new Requirement() {
				
				@Override
				public boolean testAdventureRank(int adventureRank) {
					return adventureRank >= minAdventureRank;
				}
				
				@Override
				public boolean testCharacter(Character character) {
					return true;
				}
			};
		}

		public static Requirement minimumAscensionLevel(int minAscensionLevel) {
			return new Requirement() {
				
				@Override
				public boolean testAdventureRank(int adventureRank) {
					return true;
				}
				@Override
				public boolean testCharacter(Character character) {
					return character.ascensionLevel >= minAscensionLevel;
				}
			};
		}

	}

	public static Level create(Requirement requirement, MaterialStack cost) {
		return new Level() {

			@Override
			public MaterialStack getCost() {
				return cost;
			}

			@Override
			public Requirement getRequirement() {
				return requirement;
			}

			@Override
			public String toString() {
				return Map.of("cost", cost).toString();
			}

		};
	}

}
