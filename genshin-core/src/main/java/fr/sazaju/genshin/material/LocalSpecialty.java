package fr.sazaju.genshin.material;

import fr.sazaju.genshin.Rarity;

public enum LocalSpecialty implements MaterialType {
	LAPIS, NOCTILUCOUS_JADE;
	
	@Override
	public boolean hasRarity(Rarity rarity) {
		return Rarity.SPECIALTY.equals(rarity);
	}
}
