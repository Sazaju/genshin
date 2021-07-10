<?php
	class Item {
		public $id;
		public $rarity;
		public $image;
		
		function __construct($id, $rarity, $image) {
			$this->id = $id;
			$this->rarity = $rarity;
			$this->image = $image;
		}
	}
	
	$items = [];
	// Weapons
	$items[] = new Item("freedom_sworn", 5, "https://static.wikia.nocookie.net/gensin-impact/images/3/39/Weapon_Freedom-Sworn.png");
	$items[] = new Item("aquila_favonia", 5, "https://static.wikia.nocookie.net/gensin-impact/images/6/6a/Weapon_Aquila_Favonia.png");
	$items[] = new Item("primordial_jade_cutter", 5, "https://static.wikia.nocookie.net/gensin-impact/images/2/2a/Weapon_Primordial_Jade_Cutter.png");
	$items[] = new Item("summit_shaper", 5, "https://static.wikia.nocookie.net/gensin-impact/images/c/ca/Weapon_Summit_Shaper.png");
	$items[] = new Item("skyward_blade", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/03/Weapon_Skyward_Blade.png");
	$items[] = new Item("skyward_pride", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/0b/Weapon_Skyward_Pride.png");
	$items[] = new Item("song_of_broken_pines", 5, "https://static.wikia.nocookie.net/gensin-impact/images/d/dd/Weapon_Song_of_Broken_Pines.png");
	$items[] = new Item("the_unforged", 5, "https://static.wikia.nocookie.net/gensin-impact/images/f/f7/Weapon_The_Unforged.png");
	$items[] = new Item("wolfs_gravestone", 5, "https://static.wikia.nocookie.net/gensin-impact/images/4/4f/Weapon_Wolf%27s_Gravestone.png");
	$items[] = new Item("staff_of_homa", 5, "https://static.wikia.nocookie.net/gensin-impact/images/1/17/Weapon_Staff_of_Homa.png");
	$items[] = new Item("vortex_vanquisher", 5, "https://static.wikia.nocookie.net/gensin-impact/images/d/d6/Weapon_Vortex_Vanquisher.png");
	$items[] = new Item("skyward_spine", 5, "https://static.wikia.nocookie.net/gensin-impact/images/6/69/Weapon_Skyward_Spine.png");
	$items[] = new Item("primordial_jade_winged_spear", 5, "https://static.wikia.nocookie.net/gensin-impact/images/8/80/Weapon_Primordial_Jade_Winged-Spear.png");
	$items[] = new Item("lost_prayer_to_the_sacred_winds", 5, "https://static.wikia.nocookie.net/gensin-impact/images/9/98/Weapon_Lost_Prayer_to_the_Sacred_Winds.png");
	$items[] = new Item("memory_of_dust", 5, "https://static.wikia.nocookie.net/gensin-impact/images/c/ca/Weapon_Memory_of_Dust.png");
	$items[] = new Item("skyward_atlas", 5, "https://static.wikia.nocookie.net/gensin-impact/images/3/33/Weapon_Skyward_Atlas.png");
	$items[] = new Item("amos_bow", 5, "https://static.wikia.nocookie.net/gensin-impact/images/d/de/Weapon_Amos%27_Bow.png");
	$items[] = new Item("elegy_for_the_end", 5, "https://static.wikia.nocookie.net/gensin-impact/images/a/a5/Weapon_Elegy_for_the_End.png");
	$items[] = new Item("skyward_harp", 5, "https://static.wikia.nocookie.net/gensin-impact/images/1/19/Weapon_Skyward_Harp.png");
	$items[] = new Item("blackcliff_longsword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/6f/Weapon_Blackcliff_Longsword.png");
	$items[] = new Item("the_alley_flash", 4, "https://static.wikia.nocookie.net/gensin-impact/images/8/83/Weapon_The_Alley_Flash.png");
	$items[] = new Item("lions_roar", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/e6/Weapon_Lion%27s_Roar.png");
	$items[] = new Item("prototype_rancour", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/ef/Weapon_Prototype_Rancour.png");
	$items[] = new Item("royal_longsword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/cd/Weapon_Royal_Longsword.png");
	$items[] = new Item("sacrificial_sword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/a/a0/Weapon_Sacrificial_Sword.png");
	$items[] = new Item("the_flute", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/63/Weapon_The_Flute.png");
	$items[] = new Item("festering_desire", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/70/Weapon_Festering_Desire.png");
	$items[] = new Item("sword_of_descension", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/17/Weapon_Sword_of_Descension.png");
	$items[] = new Item("iron_sting", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/35/Weapon_Iron_Sting.png");
	$items[] = new Item("the_black_sword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/cf/Weapon_The_Black_Sword.png");
	$items[] = new Item("favonius_sword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/90/Weapon_Favonius_Sword.png");
	$items[] = new Item("whiteblind", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/04/Weapon_Whiteblind.png");
	$items[] = new Item("blackcliff_slasher", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/d7/Weapon_Blackcliff_Slasher.png");
	$items[] = new Item("snow_tombed_starsilver", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/49/Weapon_Snow-Tombed_Starsilver.png");
	$items[] = new Item("sacrificial_greatsword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/17/Weapon_Sacrificial_Greatsword.png");
	$items[] = new Item("lithic_blade", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/3a/Weapon_Lithic_Blade.png");
	$items[] = new Item("serpent_spine", 4, "https://static.wikia.nocookie.net/gensin-impact/images/8/88/Weapon_Serpent_Spine.png");
	$items[] = new Item("the_bell", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/6e/Weapon_The_Bell.png");
	$items[] = new Item("royal_greatsword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/bf/Weapon_Royal_Greatsword.png");
	$items[] = new Item("rainslasher", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/d4/Weapon_Rainslasher.png");
	$items[] = new Item("prototype_archaic", 4, "https://static.wikia.nocookie.net/gensin-impact/images/a/ab/Weapon_Prototype_Archaic.png");
	$items[] = new Item("favonius_greatsword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/9c/Weapon_Favonius_Greatsword.png");
	$items[] = new Item("crescent_pike", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/4c/Weapon_Crescent_Pike.png");
	$items[] = new Item("lithic_spear", 4, "https://static.wikia.nocookie.net/gensin-impact/images/2/2a/Weapon_Lithic_Spear.png");
	$items[] = new Item("dragonspine_spear", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/1a/Weapon_Dragonspine_Spear.png");
	$items[] = new Item("royal_spear", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/fd/Weapon_Royal_Spear.png");
	$items[] = new Item("favonius_lance", 4, "https://static.wikia.nocookie.net/gensin-impact/images/5/57/Weapon_Favonius_Lance.png");
	$items[] = new Item("deathmatch", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/69/Weapon_Deathmatch.png");
	$items[] = new Item("prototype_starglitter", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/7e/Weapon_Prototype_Starglitter.png");
	$items[] = new Item("dragons_bane", 4, "https://static.wikia.nocookie.net/gensin-impact/images/2/24/Weapon_Dragon%27s_Bane.png");
	$items[] = new Item("blackcliff_pole", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/d5/Weapon_Blackcliff_Pole.png");
	$items[] = new Item("the_widsith", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/f0/Weapon_The_Widsith.png");
	$items[] = new Item("dodoco_tales", 4, "https://static.wikia.nocookie.net/gensin-impact/images/5/51/Weapon_Dodoco_Tales.png");
	$items[] = new Item("wine_and_song", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/c6/Weapon_Wine_and_Song.png");
	$items[] = new Item("frostbearer", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/1c/Weapon_Frostbearer.png");
	$items[] = new Item("eye_of_perception", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/6c/Weapon_Eye_of_Perception.png");
	$items[] = new Item("solar_pearl", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/fc/Weapon_Solar_Pearl.png");
	$items[] = new Item("sacrificial_fragments", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/6c/Weapon_Sacrificial_Fragments.png");
	$items[] = new Item("royal_grimoire", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/99/Weapon_Royal_Grimoire.png");
	$items[] = new Item("prototype_amber", 4, "https://static.wikia.nocookie.net/gensin-impact/images/2/2a/Weapon_Prototype_Amber.png");
	$items[] = new Item("mappa_mare", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/4d/Weapon_Mappa_Mare.png");
	$items[] = new Item("favonius_codex", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/36/Weapon_Favonius_Codex.png");
	$items[] = new Item("blackcliff_agate", 4, "https://static.wikia.nocookie.net/gensin-impact/images/a/a6/Weapon_Blackcliff_Agate.png");
	$items[] = new Item("compound_bow", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/32/Weapon_Compound_Bow.png");
	$items[] = new Item("favonius_warbow", 4, "https://static.wikia.nocookie.net/gensin-impact/images/8/85/Weapon_Favonius_Warbow.png");
	$items[] = new Item("windblume_ode", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/38/Weapon_Windblume_Ode.png");
	$items[] = new Item("alley_hunter", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/0a/Weapon_Alley_Hunter.png");
	$items[] = new Item("blackcliff_warbow", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b8/Weapon_Blackcliff_Warbow.png");
	$items[] = new Item("the_viridescent_hunt", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/ff/Weapon_The_Viridescent_Hunt.png");
	$items[] = new Item("prototype_crescent", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/43/Weapon_Prototype_Crescent.png");
	$items[] = new Item("sacrificial_bow", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/ec/Weapon_Sacrificial_Bow.png");
	$items[] = new Item("the_stringless", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/71/Weapon_The_Stringless.png");
	$items[] = new Item("rust", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/1c/Weapon_Rust.png");
	$items[] = new Item("royal_bow", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/99/Weapon_Royal_Bow.png");
	$items[] = new Item("mitternachts_waltz", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/77/Weapon_Mitternachts_Waltz.png");
	$items[] = new Item("cool_steel", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/9c/Weapon_Cool_Steel.png");
	$items[] = new Item("harbinger_of_dawn", 3, "https://static.wikia.nocookie.net/gensin-impact/images/2/23/Weapon_Harbinger_of_Dawn.png");
	$items[] = new Item("dark_iron_sword", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/3a/Weapon_Dark_Iron_Sword.png");
	$items[] = new Item("fillet_blade", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/f7/Weapon_Fillet_Blade.png");
	$items[] = new Item("skyrider_sword", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/34/Weapon_Skyrider_Sword.png");
	$items[] = new Item("travelers_handy_sword", 3, "https://static.wikia.nocookie.net/gensin-impact/images/c/c9/Weapon_Traveler%27s_Handy_Sword.png");
	$items[] = new Item("white_iron_greatsword", 3, "https://static.wikia.nocookie.net/gensin-impact/images/5/56/Weapon_White_Iron_Greatsword.png");
	$items[] = new Item("skyrider_greatsword", 3, "https://static.wikia.nocookie.net/gensin-impact/images/6/6e/Weapon_Skyrider_Greatsword.png");
	$items[] = new Item("quartz", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/71/Weapon_Quartz.png");
	$items[] = new Item("debate_club", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/74/Weapon_Debate_Club.png");
	$items[] = new Item("ferrous_shadow", 3, "https://static.wikia.nocookie.net/gensin-impact/images/e/e9/Weapon_Ferrous_Shadow.png");
	$items[] = new Item("bloodtainted_greatsword", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/4a/Weapon_Bloodtainted_Greatsword.png");
	$items[] = new Item("halberd", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/41/Weapon_Halberd.png");
	$items[] = new Item("white_tassel", 3, "https://static.wikia.nocookie.net/gensin-impact/images/1/1f/Weapon_White_Tassel.png");
	$items[] = new Item("black_tassel", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/43/Weapon_Black_Tassel.png");
	$items[] = new Item("amber_catalyst", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/97/Weapon_Amber_Catalyst.png");
	$items[] = new Item("emerald_orb", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/7c/Weapon_Emerald_Orb.png");
	$items[] = new Item("thrilling_tales_of_dragon_slayers", 3, "https://static.wikia.nocookie.net/gensin-impact/images/1/19/Weapon_Thrilling_Tales_of_Dragon_Slayers.png");
	$items[] = new Item("twin_nephrite", 3, "https://static.wikia.nocookie.net/gensin-impact/images/e/e3/Weapon_Twin_Nephrite.png");
	$items[] = new Item("otherworldly_story", 3, "https://static.wikia.nocookie.net/gensin-impact/images/1/11/Weapon_Otherworldly_Story.png");
	$items[] = new Item("magic_guide", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/39/Weapon_Magic_Guide.png");
	$items[] = new Item("slingshot", 3, "https://static.wikia.nocookie.net/gensin-impact/images/c/ca/Weapon_Slingshot.png");
	$items[] = new Item("messenger", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/38/Weapon_Messenger.png");
	$items[] = new Item("recurve_bow", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/b5/Weapon_Recurve_Bow.png");
	$items[] = new Item("sharpshooters_oath", 3, "https://static.wikia.nocookie.net/gensin-impact/images/5/52/Weapon_Sharpshooter%27s_Oath.png");
	$items[] = new Item("raven_bow", 3, "https://static.wikia.nocookie.net/gensin-impact/images/d/d0/Weapon_Raven_Bow.png");
	$items[] = new Item("ebony_bow", 3, "https://static.wikia.nocookie.net/gensin-impact/images/a/a1/Weapon_Ebony_Bow.png");
	$items[] = new Item("silver_sword", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/32/Weapon_Silver_Sword.png");
	$items[] = new Item("old_mercs_pal", 2, "https://static.wikia.nocookie.net/gensin-impact/images/0/0b/Weapon_Old_Merc%27s_Pal.png");
	$items[] = new Item("iron_point", 2, "https://static.wikia.nocookie.net/gensin-impact/images/2/25/Weapon_Iron_Point.png");
	$items[] = new Item("pocket_grimoire", 2, "https://static.wikia.nocookie.net/gensin-impact/images/1/16/Weapon_Pocket_Grimoire.png");
	$items[] = new Item("seasoned_hunters_bow", 2, "https://static.wikia.nocookie.net/gensin-impact/images/8/82/Weapon_Seasoned_Hunter%27s_Bow.png");
	$items[] = new Item("dull_blade", 1, "https://static.wikia.nocookie.net/gensin-impact/images/2/2f/Weapon_Dull_Blade.png");
	$items[] = new Item("waster_greatsword", 1, "https://static.wikia.nocookie.net/gensin-impact/images/4/4c/Weapon_Waster_Greatsword.png");
	$items[] = new Item("beginners_protector", 1, "https://static.wikia.nocookie.net/gensin-impact/images/f/fc/Weapon_Beginner%27s_Protector.png");
	$items[] = new Item("apprentices_notes", 1, "https://static.wikia.nocookie.net/gensin-impact/images/c/cf/Weapon_Apprentice%27s_Notes.png");
	$items[] = new Item("hunters_bow", 1, "https://static.wikia.nocookie.net/gensin-impact/images/4/44/Weapon_Hunter%27s_Bow.png");
	// Weapon enhancement material
	$items[] = new Item("mystic_enhancement_ore", 3, "https://static.wikia.nocookie.net/gensin-impact/images/5/55/Item_Mystic_Enhancement_Ore.png");
	$items[] = new Item("fine_enhancement_ore", 2, "https://static.wikia.nocookie.net/gensin-impact/images/2/23/Item_Fine_Enhancement_Ore.png");
	$items[] = new Item("enhancement_ore", 1, "https://static.wikia.nocookie.net/gensin-impact/images/4/4f/Item_Enhancement_Ore.png");
	// Artefacts
	// TODO
	// Character experience
	$items[] = new Item("character_experience", 4, "https://static.wikia.nocookie.net/gensin-impact/images/2/26/Item_Hero%27s_Wit.png");
	$items[] = new Item("character_experience", 3, "https://static.wikia.nocookie.net/gensin-impact/images/0/07/Item_Adventurer%27s_Experience.png");
	$items[] = new Item("character_experience", 2, "https://static.wikia.nocookie.net/gensin-impact/images/6/60/Item_Wanderer%27s_Advice.png");
	// Common ascension materials
	$items[] = new Item("slime", 3, "https://static.wikia.nocookie.net/gensin-impact/images/d/d8/Item_Slime_Concentrate.png");
	$items[] = new Item("slime", 2, "https://static.wikia.nocookie.net/gensin-impact/images/f/f4/Item_Slime_Secretions.png");
	$items[] = new Item("slime", 1, "https://static.wikia.nocookie.net/gensin-impact/images/1/1c/Item_Slime_Condensate.png");
	$items[] = new Item("mask", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/91/Item_Ominous_Mask.png");
	$items[] = new Item("mask", 2, "https://static.wikia.nocookie.net/gensin-impact/images/2/2f/Item_Stained_Mask.png");
	$items[] = new Item("mask", 1, "https://static.wikia.nocookie.net/gensin-impact/images/6/69/Item_Damaged_Mask.png");
	$items[] = new Item("arrowhead", 3, "https://static.wikia.nocookie.net/gensin-impact/images/2/22/Item_Weathered_Arrowhead.png");
	$items[] = new Item("arrowhead", 2, "https://static.wikia.nocookie.net/gensin-impact/images/0/0d/Item_Sharp_Arrowhead.png");
	$items[] = new Item("arrowhead", 1, "https://static.wikia.nocookie.net/gensin-impact/images/0/01/Item_Firm_Arrowhead.png");
	$items[] = new Item("scroll", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/f0/Item_Forbidden_Curse_Scroll.png");
	$items[] = new Item("scroll", 2, "https://static.wikia.nocookie.net/gensin-impact/images/9/91/Item_Sealed_Scroll.png");
	$items[] = new Item("scroll", 1, "https://static.wikia.nocookie.net/gensin-impact/images/7/74/Item_Divining_Scroll.png");
	$items[] = new Item("hoarder_insignia", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/71/Item_Golden_Raven_Insignia.png");
	$items[] = new Item("hoarder_insignia", 2, "https://static.wikia.nocookie.net/gensin-impact/images/4/44/Item_Silver_Raven_Insignia.png");
	$items[] = new Item("hoarder_insignia", 1, "https://static.wikia.nocookie.net/gensin-impact/images/c/c9/Item_Treasure_Hoarder_Insignia.png");
	$items[] = new Item("fatui_insignia", 3, "https://static.wikia.nocookie.net/gensin-impact/images/d/db/Item_Lieutenant%27s_Insignia.png");
	$items[] = new Item("fatui_insignia", 2, "https://static.wikia.nocookie.net/gensin-impact/images/a/a5/Item_Sergeant%27s_Insignia.png");
	$items[] = new Item("fatui_insignia", 1, "https://static.wikia.nocookie.net/gensin-impact/images/b/b2/Item_Recruit%27s_Insignia.png");
	$items[] = new Item("nectar", 3, "https://static.wikia.nocookie.net/gensin-impact/images/0/0b/Item_Energy_Nectar.png");
	$items[] = new Item("nectar", 2, "https://static.wikia.nocookie.net/gensin-impact/images/4/46/Item_Shimmering_Nectar.png");
	$items[] = new Item("nectar", 1, "https://static.wikia.nocookie.net/gensin-impact/images/8/8b/Item_Whopperflower_Nectar.png");
	// Elite ascension materials
	$items[] = new Item("horn", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/64/Item_Black_Crystal_Horn.png");
	$items[] = new Item("horn", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/42/Item_Black_Bronze_Horn.png");
	$items[] = new Item("horn", 2, "https://static.wikia.nocookie.net/gensin-impact/images/c/c0/Item_Heavy_Horn.png");
	$items[] = new Item("ley_line", 4, "https://static.wikia.nocookie.net/gensin-impact/images/2/22/Item_Ley_Line_Sprouts.png");
	$items[] = new Item("ley_line", 3, "https://static.wikia.nocookie.net/gensin-impact/images/d/d2/Item_Dead_Ley_Line_Leaves.png");
	$items[] = new Item("ley_line", 2, "https://static.wikia.nocookie.net/gensin-impact/images/7/77/Item_Dead_Ley_Line_Branch.png");
	$items[] = new Item("bone_shard", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/60/Item_Fossilized_Bone_Shard.png");
	$items[] = new Item("bone_shard", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/ff/Item_Sturdy_Bone_Shard.png");
	$items[] = new Item("bone_shard", 2, "https://static.wikia.nocookie.net/gensin-impact/images/e/e5/Item_Fragile_Bone_Shard.png");
	$items[] = new Item("mist_grass", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/90/Item_Mist_Grass_Wick.png");
	$items[] = new Item("mist_grass", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/73/Item_Mist_Grass.png");
	$items[] = new Item("mist_grass", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/32/Item_Mist_Grass_Pollen.png");
	$items[] = new Item("sacrificial_knife", 4, "https://static.wikia.nocookie.net/gensin-impact/images/5/53/Item_Inspector%27s_Sacrificial_Knife.png");
	$items[] = new Item("sacrificial_knife", 3, "https://static.wikia.nocookie.net/gensin-impact/images/5/55/Item_Agent%27s_Sacrificial_Knife.png");
	$items[] = new Item("sacrificial_knife", 2, "https://static.wikia.nocookie.net/gensin-impact/images/2/28/Item_Hunter%27s_Sacrificial_Knife.png");
	$items[] = new Item("chaos_part", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/3e/Item_Chaos_Core.png");
	$items[] = new Item("chaos_part", 3, "https://static.wikia.nocookie.net/gensin-impact/images/1/1f/Item_Chaos_Circuit.png");
	$items[] = new Item("chaos_part", 2, "https://static.wikia.nocookie.net/gensin-impact/images/4/47/Item_Chaos_Device.png");
	// Boss drops
	$items[] = new Item("boreas_tail", 5, "https://static.wikia.nocookie.net/gensin-impact/images/6/66/Item_Tail_of_Boreas.png");
	$items[] = new Item("boreas_ring", 5, "https://static.wikia.nocookie.net/gensin-impact/images/d/d6/Item_Ring_of_Boreas.png");
	$items[] = new Item("boreas_spirit", 5, "https://static.wikia.nocookie.net/gensin-impact/images/8/81/Item_Spirit_Locket_of_Boreas.png");
	$items[] = new Item("dvalin_plume", 5, "https://static.wikia.nocookie.net/gensin-impact/images/b/bf/Item_Dvalin%27s_Plume.png");
	$items[] = new Item("dvalin_claw", 5, "https://static.wikia.nocookie.net/gensin-impact/images/a/a8/Item_Dvalin%27s_Claw.png");
	$items[] = new Item("dvalin_sigh", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/07/Item_Dvalin%27s_Sigh.png");
	$items[] = new Item("childe_tusk", 5, "https://static.wikia.nocookie.net/gensin-impact/images/1/1c/Item_Tusk_of_Monoceros_Caeli.png");
	$items[] = new Item("childe_shard", 5, "https://static.wikia.nocookie.net/gensin-impact/images/4/48/Item_Shard_of_a_Foul_Legacy.png");
	$items[] = new Item("childe_shadow", 5, "https://static.wikia.nocookie.net/gensin-impact/images/5/5d/Item_Shadow_of_the_Warrior.png");
	$items[] = new Item("azhdaha_crown", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/02/Item_Dragon_Lord%27s_Crown.png");
	$items[] = new Item("azhdaha_branch", 5, "https://static.wikia.nocookie.net/gensin-impact/images/b/b1/Item_Bloodjade_Branch.png");
	$items[] = new Item("azhdaha_scale", 5, "https://static.wikia.nocookie.net/gensin-impact/images/e/e1/Item_Gilded_Scale.png");
	// Boss material
	$items[] = new Item("hurricane_seed", 4, "https://static.wikia.nocookie.net/gensin-impact/images/5/5e/Item_Hurricane_Seed.png");
	$items[] = new Item("hoarfrost_core", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b5/Item_Hoarfrost_Core.png");
	$items[] = new Item("crystalline_bloom", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/dc/Item_Crystalline_Bloom.png");
	$items[] = new Item("lightning_prism", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/ee/Item_Lightning_Prism.png");
	$items[] = new Item("basalt_pillar", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/bc/Item_Basalt_Pillar.png");
	$items[] = new Item("cleansing_heart", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/02/Item_Cleansing_Heart.png");
	$items[] = new Item("everflame_seed", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b2/Item_Everflame_Seed.png");
	$items[] = new Item("juvenile_jade", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/f1/Item_Juvenile_Jade.png");
	$items[] = new Item("marionette_core", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/1d/Item_Marionette_Core.png");
	// Ascension gems
	$items[] = new Item("brilliant_diamond", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/0b/Item_Brilliant_Diamond_Gemstone.png");
	$items[] = new Item("brilliant_diamond", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/74/Item_Brilliant_Diamond_Chunk.png");
	$items[] = new Item("brilliant_diamond", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/3d/Item_Brilliant_Diamond_Fragment.png");
	$items[] = new Item("brilliant_diamond", 2, "https://static.wikia.nocookie.net/gensin-impact/images/7/72/Item_Brilliant_Diamond_Sliver.png");
	$items[] = new Item("vayuda", 5, "https://static.wikia.nocookie.net/gensin-impact/images/3/32/Item_Vayuda_Turquoise_Gemstone.png");
	$items[] = new Item("vayuda", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/33/Item_Vayuda_Turquoise_Chunk.png");
	$items[] = new Item("vayuda", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/71/Item_Vayuda_Turquoise_Fragment.png");
	$items[] = new Item("vayuda", 2, "https://static.wikia.nocookie.net/gensin-impact/images/9/93/Item_Vayuda_Turquoise_Sliver.png");
	$items[] = new Item("shivada", 5, "https://static.wikia.nocookie.net/gensin-impact/images/e/e9/Item_Shivada_Jade_Gemstone.png");
	$items[] = new Item("shivada", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/41/Item_Shivada_Jade_Chunk.png");
	$items[] = new Item("shivada", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/9a/Item_Shivada_Jade_Fragment.png");
	$items[] = new Item("shivada", 2, "https://static.wikia.nocookie.net/gensin-impact/images/8/87/Item_Shivada_Jade_Sliver.png");
	$items[] = new Item("vajrada", 5, "https://static.wikia.nocookie.net/gensin-impact/images/b/be/Item_Vajrada_Amethyst_Gemstone.png");
	$items[] = new Item("vajrada", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/c1/Item_Vajrada_Amethyst_Chunk.png");
	$items[] = new Item("vajrada", 3, "https://static.wikia.nocookie.net/gensin-impact/images/c/cb/Item_Vajrada_Amethyst_Fragment.png");
	$items[] = new Item("vajrada", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/39/Item_Vajrada_Amethyst_Sliver.png");
	$items[] = new Item("prithiva", 5, "https://static.wikia.nocookie.net/gensin-impact/images/e/eb/Item_Prithiva_Topaz_Gemstone.png");
	$items[] = new Item("prithiva", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/4b/Item_Prithiva_Topaz_Chunk.png");
	$items[] = new Item("prithiva", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/3e/Item_Prithiva_Topaz_Fragment.png");
	$items[] = new Item("prithiva", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/33/Item_Prithiva_Topaz_Sliver.png");
	$items[] = new Item("varunada", 5, "https://static.wikia.nocookie.net/gensin-impact/images/a/a4/Item_Varunada_Lazurite_Gemstone.png");
	$items[] = new Item("varunada", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/f4/Item_Varunada_Lazurite_Chunk.png");
	$items[] = new Item("varunada", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/f6/Item_Varunada_Lazurite_Fragment.png");
	$items[] = new Item("varunada", 2, "https://static.wikia.nocookie.net/gensin-impact/images/f/f8/Item_Varunada_Lazurite_Sliver.png");
	$items[] = new Item("agnidus", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/0d/Item_Agnidus_Agate_Gemstone.png");
	$items[] = new Item("agnidus", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/00/Item_Agnidus_Agate_Chunk.png");
	$items[] = new Item("agnidus", 3, "https://static.wikia.nocookie.net/gensin-impact/images/e/ec/Item_Agnidus_Agate_Fragment.png");
	$items[] = new Item("agnidus", 2, "https://static.wikia.nocookie.net/gensin-impact/images/5/51/Item_Agnidus_Agate_Sliver.png");
	// Talent books
	$items[] = new Item("book_freedom", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/c4/Item_Philosophies_of_Freedom.png");
	$items[] = new Item("book_freedom", 3, "https://static.wikia.nocookie.net/gensin-impact/images/1/1a/Item_Guide_to_Freedom.png");
	$items[] = new Item("book_freedom", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/3a/Item_Teachings_of_Freedom.png");
	$items[] = new Item("book_resistance", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/0b/Item_Philosophies_of_Resistance.png");
	$items[] = new Item("book_resistance", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/bf/Item_Guide_to_Resistance.png");
	$items[] = new Item("book_resistance", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/33/Item_Teachings_of_Resistance.png");
	$items[] = new Item("book_ballad", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/7e/Item_Philosophies_of_Ballad.png");
	$items[] = new Item("book_ballad", 3, "https://static.wikia.nocookie.net/gensin-impact/images/2/2f/Item_Guide_to_Ballad.png");
	$items[] = new Item("book_ballad", 2, "https://static.wikia.nocookie.net/gensin-impact/images/b/b4/Item_Teachings_of_Ballad.png");
	$items[] = new Item("book_prosperity", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/bd/Item_Philosophies_of_Prosperity.png");
	$items[] = new Item("book_prosperity", 3, "https://static.wikia.nocookie.net/gensin-impact/images/6/67/Item_Guide_to_Prosperity.png");
	$items[] = new Item("book_prosperity", 2, "https://static.wikia.nocookie.net/gensin-impact/images/9/9e/Item_Teachings_of_Prosperity.png");
	$items[] = new Item("book_diligence", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/c2/Item_Philosophies_of_Diligence.png");
	$items[] = new Item("book_diligence", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/9f/Item_Guide_to_Diligence.png");
	$items[] = new Item("book_diligence", 2, "https://static.wikia.nocookie.net/gensin-impact/images/a/a7/Item_Teachings_of_Diligence.png");
	$items[] = new Item("book_gold", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/01/Item_Philosophies_of_Gold.png");
	$items[] = new Item("book_gold", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/43/Item_Guide_to_Gold.png");
	$items[] = new Item("book_gold", 2, "https://static.wikia.nocookie.net/gensin-impact/images/7/7f/Item_Teachings_of_Gold.png");
	// Event materials
	$items[] = new Item("crown_of_insight", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/04/Item_Crown_of_Insight.png");
	// Weapon ascension materials
	$items[] = new Item("decarabian", 5, "https://static.wikia.nocookie.net/gensin-impact/images/4/4c/Item_Scattered_Piece_of_Decarabian%27s_Dream.png");
	$items[] = new Item("decarabian", 4, "https://static.wikia.nocookie.net/gensin-impact/images/8/8a/Item_Fragment_of_Decarabian%27s_Epic.png");
	$items[] = new Item("decarabian", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/96/Item_Debris_of_Decarabian%27s_City.png");
	$items[] = new Item("decarabian", 2, "https://static.wikia.nocookie.net/gensin-impact/images/d/d7/Item_Tile_of_Decarabian%27s_Tower.png");
	$items[] = new Item("boreal_wolf", 5, "https://static.wikia.nocookie.net/gensin-impact/images/e/e0/Item_Boreal_Wolf%27s_Nostalgia.png");
	$items[] = new Item("boreal_wolf", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/98/Item_Boreal_Wolf%27s_Broken_Fang.png");
	$items[] = new Item("boreal_wolf", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/71/Item_Boreal_Wolf%27s_Cracked_Tooth.png");
	$items[] = new Item("boreal_wolf", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/33/Item_Boreal_Wolf%27s_Milk_Tooth.png");
	$items[] = new Item("dandelion_gladiator", 5, "https://static.wikia.nocookie.net/gensin-impact/images/b/b4/Item_Dream_of_the_Dandelion_Gladiator.png");
	$items[] = new Item("dandelion_gladiator", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/40/Item_Shackles_of_the_Dandelion_Gladiator.png");
	$items[] = new Item("dandelion_gladiator", 3, "https://static.wikia.nocookie.net/gensin-impact/images/a/ad/Item_Chains_of_the_Dandelion_Gladiator.png");
	$items[] = new Item("dandelion_gladiator", 2, "https://static.wikia.nocookie.net/gensin-impact/images/0/05/Item_Fetters_of_the_Dandelion_Gladiator.png");
	$items[] = new Item("guyun", 5, "https://static.wikia.nocookie.net/gensin-impact/images/e/e8/Item_Divine_Body_from_Guyun.png");
	$items[] = new Item("guyun", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/94/Item_Relic_from_Guyun.png");
	$items[] = new Item("guyun", 3, "https://static.wikia.nocookie.net/gensin-impact/images/c/cb/Item_Lustrous_Stone_from_Guyun.png");
	$items[] = new Item("guyun", 2, "https://static.wikia.nocookie.net/gensin-impact/images/5/5d/Item_Luminous_Sands_from_Guyun.png");
	$items[] = new Item("mist_veiled", 5, "https://static.wikia.nocookie.net/gensin-impact/images/a/a3/Item_Mist_Veiled_Primo_Elixir.png");
	$items[] = new Item("mist_veiled", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/9b/Item_Mist_Veiled_Gold_Elixir.png");
	$items[] = new Item("mist_veiled", 3, "https://static.wikia.nocookie.net/gensin-impact/images/0/0f/Item_Mist_Veiled_Mercury_Elixir.png");
	$items[] = new Item("mist_veiled", 2, "https://static.wikia.nocookie.net/gensin-impact/images/a/a5/Item_Mist_Veiled_Lead_Elixir.png");
	$items[] = new Item("aerosiderite", 5, "https://static.wikia.nocookie.net/gensin-impact/images/4/48/Item_Chunk_of_Aerosiderite.png");
	$items[] = new Item("aerosiderite", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/17/Item_Bit_of_Aerosiderite.png");
	$items[] = new Item("aerosiderite", 3, "https://static.wikia.nocookie.net/gensin-impact/images/0/0d/Item_Piece_of_Aerosiderite.png");
	$items[] = new Item("aerosiderite", 2, "https://static.wikia.nocookie.net/gensin-impact/images/4/47/Item_Grain_of_Aerosiderite.png");
	// Raw food
	// TODO
	// Food
	// TODO
	// Potions
	$items[] = new Item("essential_oil_gushing", 3, "https://static.wikia.nocookie.net/gensin-impact/images/d/d9/Item_Gushing_Essential_Oil.png");
	$items[] = new Item("potion_windbarrier", 3, "https://static.wikia.nocookie.net/gensin-impact/images/8/84/Item_Windbarrier_Potion.png");
	$items[] = new Item("essential_oil_frosting", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/46/Item_Frosting_Essential_Oil.png");
	$items[] = new Item("potion_frostshield", 3, "https://static.wikia.nocookie.net/gensin-impact/images/c/cf/Item_Frostshield_Potion.png");
	$items[] = new Item("essential_oil_shocking", 3, "https://static.wikia.nocookie.net/gensin-impact/images/0/00/Item_Shocking_Essential_Oil.png");
	$items[] = new Item("potion_insulation", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/ba/Item_Insulation_Potion.png");
	$items[] = new Item("essential_oil_unmoving", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/36/Item_Unmoving_Essential_Oil.png");
	$items[] = new Item("potion_dustproof", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/bd/Item_Dustproof_Potion.png");
	$items[] = new Item("essential_oil_streaming", 3, "https://static.wikia.nocookie.net/gensin-impact/images/0/08/Item_Streaming_Essential_Oil.png");
	$items[] = new Item("potion_desiccant", 3, "https://static.wikia.nocookie.net/gensin-impact/images/8/85/Item_Desiccant_Potion.png");
	$items[] = new Item("essential_oil_flaming", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/b9/Item_Flaming_Essential_Oil.png");
	$items[] = new Item("potion_heatshield", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/4f/Item_Heatshield_Potion.png");
	// Teeth
	// TODO
	// Colors
	// TODO
	// Tissues
	// TODO
	// Woods
	$items[] = new Item("wood_fir", 1, "https://static.wikia.nocookie.net/gensin-impact/images/d/d1/Item_Fir_Wood.png");
	$items[] = new Item("wood_fragrant_cedar", 1, "https://static.wikia.nocookie.net/gensin-impact/images/6/65/Item_Fragrant_Cedar_Wood.png");
	$items[] = new Item("wood_bamboo_segment", 1, "https://static.wikia.nocookie.net/gensin-impact/images/5/55/Item_Bamboo_Segment.png");
	$items[] = new Item("wood_sandbearer", 1, "https://static.wikia.nocookie.net/gensin-impact/images/3/36/Item_Sandbearer_Wood.png");
	$items[] = new Item("wood_pine", 1, "https://static.wikia.nocookie.net/gensin-impact/images/8/8e/Item_Pine_Wood.png");
	$items[] = new Item("wood_cuihua", 1, "https://static.wikia.nocookie.net/gensin-impact/images/c/c5/Item_Cuihua_Wood.png");
	$items[] = new Item("wood_birch", 1, "https://static.wikia.nocookie.net/gensin-impact/images/d/d8/Item_Birch_Wood.png");
	// Forging materials
	$items[] = new Item("iron_chunk", 0, "https://static.wikia.nocookie.net/gensin-impact/images/f/f0/Item_Iron_Chunk.png");
	$items[] = new Item("white_iron_chunk", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/d5/Item_White_Iron_Chunk.png");
	$items[] = new Item("crystal_chunk", 0, "https://static.wikia.nocookie.net/gensin-impact/images/6/6e/Item_Crystal_Chunk.png");
	$items[] = new Item("magical_crystal_chunk", 0, "https://static.wikia.nocookie.net/gensin-impact/images/8/85/Item_Magical_Crystal_Chunk.png");
	$items[] = new Item("starsilver", 0, "https://static.wikia.nocookie.net/gensin-impact/images/1/19/Item_Starsilver.png");
	$items[] = new Item("northlander_bow_billet", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/0f/Item_Northlander_Bow_Billet.png");
	$items[] = new Item("northlander_catalyst_billet", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/3b/Item_Northlander_Catalyst_Billet.png");
	$items[] = new Item("northlander_claymore_billet", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/db/Item_Northlander_Claymore_Billet.png");
	$items[] = new Item("northlander_polearm_billet", 4, "https://static.wikia.nocookie.net/gensin-impact/images/a/a5/Item_Northlander_Polearm_Billet.png");
	$items[] = new Item("northlander_sword_billet", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/c2/Item_Northlander_Sword_Billet.png");
	// Misc.
	$items[] = new Item("electro_crystal", 0, "https://static.wikia.nocookie.net/gensin-impact/images/9/99/Item_Electro_Crystal.png");
	$items[] = new Item("lizard_tail", 0, "https://static.wikia.nocookie.net/gensin-impact/images/2/2f/Item_Lizard_Tail.png");
	$items[] = new Item("mist_flower_corolla", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/b4/Item_Mist_Flower_Corolla.png");
	$items[] = new Item("flaming_flower_stamen", 0, "https://static.wikia.nocookie.net/gensin-impact/images/9/97/Item_Flaming_Flower_Stamen.png");
	// Cooking ingredients
	$items[] = new Item("almond", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/30/Item_Almond.png");
	$items[] = new Item("bacon", 0, "https://static.wikia.nocookie.net/gensin-impact/images/1/16/Item_Bacon.png");
	$items[] = new Item("bamboo_shoot", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/3d/Item_Bamboo_Shoot.png");
	$items[] = new Item("berry", 0, "https://static.wikia.nocookie.net/gensin-impact/images/6/65/Item_Berry.png");
	$items[] = new Item("bird_egg", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/dc/Item_Bird_Egg.png");
	$items[] = new Item("butter", 0, "https://static.wikia.nocookie.net/gensin-impact/images/7/78/Item_Butter.png");
	$items[] = new Item("cabbage", 0, "https://static.wikia.nocookie.net/gensin-impact/images/c/ca/Item_Cabbage.png");
	$items[] = new Item("carrot", 0, "https://static.wikia.nocookie.net/gensin-impact/images/1/1e/Item_Carrot.png");
	$items[] = new Item("cheese", 0, "https://static.wikia.nocookie.net/gensin-impact/images/a/ac/Item_Cheese.png");
	$items[] = new Item("chilled_meat", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/da/Item_Chilled_Meat.png");
	$items[] = new Item("crab", 0, "https://static.wikia.nocookie.net/gensin-impact/images/0/0b/Item_Crab.png");
	$items[] = new Item("crab_roe", 0, "https://static.wikia.nocookie.net/gensin-impact/images/2/25/Item_Crab_Roe.png");
	$items[] = new Item("cream", 0, "https://static.wikia.nocookie.net/gensin-impact/images/f/f3/Item_Cream.png");
	$items[] = new Item("fish", 0, "https://static.wikia.nocookie.net/gensin-impact/images/e/ef/Item_Fish.png");
	$items[] = new Item("flour", 0, "https://static.wikia.nocookie.net/gensin-impact/images/8/87/Item_Flour.png");
	$items[] = new Item("fowl", 0, "https://static.wikia.nocookie.net/gensin-impact/images/f/f9/Item_Fowl.png");
	$items[] = new Item("ham", 0, "https://static.wikia.nocookie.net/gensin-impact/images/c/c8/Item_Ham.png");
	$items[] = new Item("horsetail", 0, "https://static.wikia.nocookie.net/gensin-impact/images/7/7b/Item_Horsetail.png");
	$items[] = new Item("jam", 0, "https://static.wikia.nocookie.net/gensin-impact/images/c/c2/Item_Jam.png");
	$items[] = new Item("lotus_head", 0, "https://static.wikia.nocookie.net/gensin-impact/images/0/05/Item_Lotus_Head.png");
	$items[] = new Item("matsutake", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/39/Item_Matsutake.png");
	$items[] = new Item("milk", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/37/Item_Milk.png");
	$items[] = new Item("mint", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/bc/Item_Mint.png");
	$items[] = new Item("mushroom", 0, "https://static.wikia.nocookie.net/gensin-impact/images/c/cb/Item_Mushroom.png");
	$items[] = new Item("onion", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/b3/Item_Onion.png");
	$items[] = new Item("pepper", 0, "https://static.wikia.nocookie.net/gensin-impact/images/e/eb/Item_Pepper.png");
	$items[] = new Item("pinecone", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/35/Item_Pinecone.png");
	$items[] = new Item("potato", 0, "https://static.wikia.nocookie.net/gensin-impact/images/2/2b/Item_Potato.png");
	$items[] = new Item("radish", 0, "https://static.wikia.nocookie.net/gensin-impact/images/4/45/Item_Radish.png");
	$items[] = new Item("raw_meat", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/bf/Item_Raw_Meat.png");
	$items[] = new Item("rice", 0, "https://static.wikia.nocookie.net/gensin-impact/images/0/04/Item_Rice.png");
	$items[] = new Item("salt", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/b5/Item_Salt.png");
	$items[] = new Item("sausage", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/ba/Item_Sausage.png");
	$items[] = new Item("shrimp_meat", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/d0/Item_Shrimp_Meat.png");
	$items[] = new Item("smoked_fowl", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/bc/Item_Smoked_Fowl.png");
	$items[] = new Item("snapdragon", 0, "https://static.wikia.nocookie.net/gensin-impact/images/7/7a/Item_Snapdragon.png");
	$items[] = new Item("sugar", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/d9/Item_Sugar.png");
	$items[] = new Item("sweet_flower", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/3a/Item_Sweet_Flower.png");
	$items[] = new Item("tofu", 0, "https://static.wikia.nocookie.net/gensin-impact/images/a/ad/Item_Tofu.png");
	$items[] = new Item("tomato", 0, "https://static.wikia.nocookie.net/gensin-impact/images/f/f1/Item_Tomato.png");
	$items[] = new Item("wheat", 0, "https://static.wikia.nocookie.net/gensin-impact/images/0/06/Item_Wheat.png");
	// Local specialties
	$items[] = new Item("calla_lily", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/de/Item_Calla_Lily.png");
	$items[] = new Item("cecilia", 0, "https://static.wikia.nocookie.net/gensin-impact/images/9/9b/Item_Cecilia.png");
	$items[] = new Item("cor_lapis", 0, "https://static.wikia.nocookie.net/gensin-impact/images/a/aa/Item_Cor_Lapis.png");
	$items[] = new Item("dandelion_seed", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/de/Item_Dandelion_Seed.png");
	$items[] = new Item("glaze_lily", 0, "https://static.wikia.nocookie.net/gensin-impact/images/e/e1/Item_Glaze_Lily.png");
	$items[] = new Item("jueyun_chili", 0, "https://static.wikia.nocookie.net/gensin-impact/images/1/13/Item_Jueyun_Chili.png");
	$items[] = new Item("noctilucous_jade", 0, "https://static.wikia.nocookie.net/gensin-impact/images/8/84/Item_Noctilucous_Jade.png");
	$items[] = new Item("philanemo_mushroom", 0, "https://static.wikia.nocookie.net/gensin-impact/images/8/8a/Item_Philanemo_Mushroom.png");
	$items[] = new Item("qingxin", 0, "https://static.wikia.nocookie.net/gensin-impact/images/2/2d/Item_Qingxin.png");
	$items[] = new Item("sea_ganoderma", 0, "https://static.wikia.nocookie.net/gensin-impact/images/6/6d/Item_Sea_Ganoderma.png");
	$items[] = new Item("silk_flower", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/37/Item_Silk_Flower.png");
	$items[] = new Item("small_lamp_grass", 0, "https://static.wikia.nocookie.net/gensin-impact/images/1/17/Item_Small_Lamp_Grass.png");
	$items[] = new Item("starconch", 0, "https://static.wikia.nocookie.net/gensin-impact/images/4/46/Item_Starconch.png");
	$items[] = new Item("valberry", 0, "https://static.wikia.nocookie.net/gensin-impact/images/e/ed/Item_Valberry.png");
	$items[] = new Item("violetgrass", 0, "https://static.wikia.nocookie.net/gensin-impact/images/5/5d/Item_Violetgrass.png");
	$items[] = new Item("windwheel_aster", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/32/Item_Windwheel_Aster.png");
	$items[] = new Item("wolfhook", 0, "https://static.wikia.nocookie.net/gensin-impact/images/5/57/Item_Wolfhook.png");
	// Gadgets
	$items[] = new Item("serenitea_pot", 5, "https://static.wikia.nocookie.net/gensin-impact/images/5/5a/Item_Serenitea_Pot.png");
	$items[] = new Item("anemo_treasure_compass", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/e3/Item_Anemo_Treasure_Compass.png");
	$items[] = new Item("endora", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/c7/Item_Endora.png");
	$items[] = new Item("geo_treasure_compass", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/f3/Item_Geo_Treasure_Compass.png");
	$items[] = new Item("inquisitive_endora", 4, "https://static.wikia.nocookie.net/gensin-impact/images/2/28/Item_Inquisitive_Endora.png");
	$items[] = new Item("kamera", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/76/Item_Kamera.png");
	$items[] = new Item("kurious_kamera", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/fc/Item_Kurious_Kamera.png");
	$items[] = new Item("mini_seelie_curcuma", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/e4/Item_Mini_Seelie_Curcuma.png");
	$items[] = new Item("mini_seelie_dayflower", 4, "https://static.wikia.nocookie.net/gensin-impact/images/5/5a/Item_Mini_Seelie_Dayflower.png");
	$items[] = new Item("mini_seelie_rose", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/d3/Item_Mini_Seelie_Ros%C3%A9.png");
	$items[] = new Item("nre_menu_30", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b7/Item_NRE_%28Menu_30%29.png");
	$items[] = new Item("parametric_transformer", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/f1/Item_Parametric_Transformer.png");
	$items[] = new Item("portable_waypoint", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/fa/Item_Portable_Waypoint.png");
	$items[] = new Item("special_kamera", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/e2/Item_Special_Kamera.png");
	$items[] = new Item("treasure_seeking_seelie", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/fa/Item_Treasure-Seeking_Seelie.png");
	$items[] = new Item("waverider_repair_toolbox", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/d7/Item_Waverider_Repair_Toolbox.png");
	$items[] = new Item("wind_catcher", 4, "https://static.wikia.nocookie.net/gensin-impact/images/5/5b/Item_Wind_Catcher.png");
	$items[] = new Item("wind_blessed_harpastum", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b6/Item_Wind-Blessed_Harpastum.png");
	$items[] = new Item("windblume_festival_commemorative_balloon", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b6/Item_Windblume_Festival_Commemorative_Balloon.png");
	$items[] = new Item("windsong_lyre", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/4a/Item_Windsong_Lyre.png");
	$items[] = new Item("adepti_seekers_stove", 3, "https://static.wikia.nocookie.net/gensin-impact/images/6/6a/Item_Adepti_Seeker%27s_Stove.png");
	$items[] = new Item("anemoculus_resonance_stone", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/9e/Item_Anemoculus_Resonance_Stone.png");
	$items[] = new Item("floaty_splody", 3, "https://static.wikia.nocookie.net/gensin-impact/images/6/66/Item_Floaty_Splody.png");
	$items[] = new Item("geoculus_resonance_stone", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/f3/Item_Geoculus_Resonance_Stone.png");
	$items[] = new Item("hot_pod", 3, "https://static.wikia.nocookie.net/gensin-impact/images/a/a9/Item_Hot_Pod.png");
	$items[] = new Item("straight_shooter", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/f4/Item_Straight_Shooter.png");
	$items[] = new Item("warming_bottle", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/fe/Item_Warming_Bottle.png");
	
	foreach($items as $item) {
		$id = $item->id;
		$rarity = $item->rarity;
		$image = $item->image;
		$background = $rarity == 5 ? "https://static.wikia.nocookie.net/gensin-impact/images/e/ea/Rarity_5_background.png" : (
			$rarity == 4 ? "https://static.wikia.nocookie.net/gensin-impact/images/c/c9/Rarity_4_background.png" : (
				$rarity == 3 ? "https://static.wikia.nocookie.net/gensin-impact/images/5/57/Rarity_3_background.png" : (
					$rarity == 2 ? "https://static.wikia.nocookie.net/gensin-impact/images/d/d4/Rarity_2_background.png" : (
						"https://static.wikia.nocookie.net/gensin-impact/images/6/69/Rarity_1_background.png"
					)
				)
			)
		);
		$stars = "";
		for($i = 0 ; $i < $rarity ; $i++) {
			$stars .= "<img src='https://static.wikia.nocookie.net/gensin-impact/images/b/b7/Icon_1_Star.png' />";
		}
		echo "<div id='${id}_${rarity}' class='card'>";
		echo "	<img class='background' src='${background}' />";
		echo "	<div class='item'><img src='${image}' /></div>";
		echo "	<div class='counter'><span>xxx</span></div>";
		echo "	<div class='star'>${stars}</div>";
		echo "</div>";
	}
?>
