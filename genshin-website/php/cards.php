<?php
	class Card {
		public $id;
		public $rarity;
		public $image;
		
		function __construct($idTemplate, $rarity, $image) {
			$this->id = str_replace("{}", $rarity, $idTemplate);
			$this->rarity = $rarity;
			$this->image = $image;
		}
		
		public function render($text) {
			$id = $this->id;
			$rarity = $this->rarity;
			$image = $this->image;
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
			
			$html  = "<div id='${id}' class='card'>";
			$html .= 	"<img class='background' src='${background}' />";
			$html .= 	"<div class='content'><img src='${image}' title='${id}' /></div>";
			$html .= 	"<div class='label'><span>${text}</span></div>";
			$html .= 	"<div class='star'>${stars}</div>";
			$html .= "</div>";
			
			return $html;
		}
		
		public static function getCard($id) {
			return Card::getAllCards()[$id] ?? new Card($id, 0, "img/unknown.png");
		}
		
		private static $allCards;
		public static function getAllCards() {
			if (!isset(Card::$allCards)) {
				$cards = [];
				// Characters
				$cards[] = new Card("albedo", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/00/Character_Albedo_Thumb.png");
				$cards[] = new Card("amber", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/c6/Character_Amber_Thumb.png");
				$cards[] = new Card("barbara", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/72/Character_Barbara_Thumb.png	");
				$cards[] = new Card("beidou", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/61/Character_Beidou_Thumb.png");
				$cards[] = new Card("bennett", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/7b/Character_Bennett_Thumb.png");
				$cards[] = new Card("chongyun", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/68/Character_Chongyun_Thumb.png");
				$cards[] = new Card("diluc", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/02/Character_Diluc_Thumb.png");
				$cards[] = new Card("diona", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b9/Character_Diona_Thumb.png");
				$cards[] = new Card("eula", 5, "https://static.wikia.nocookie.net/gensin-impact/images/d/d3/Character_Eula_Thumb.png");
				$cards[] = new Card("fischl", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/14/Character_Fischl_Thumb.png");
				$cards[] = new Card("ganyu", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/0a/Character_Ganyu_Thumb.png");
				$cards[] = new Card("hu_tao", 5, "https://static.wikia.nocookie.net/gensin-impact/images/a/a4/Character_Hu_Tao_Thumb.png");
				$cards[] = new Card("jean", 5, "https://static.wikia.nocookie.net/gensin-impact/images/8/89/Character_Jean_Thumb.png");
				$cards[] = new Card("kaedehara_kazuha", 5, "https://static.wikia.nocookie.net/gensin-impact/images/f/f0/Character_Kaedehara_Kazuha_Thumb.png");
				$cards[] = new Card("kaeya", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/33/Character_Kaeya_Thumb.png");
				$cards[] = new Card("keqing", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/06/Character_Keqing_Thumb.png");
				$cards[] = new Card("klee", 5, "https://static.wikia.nocookie.net/gensin-impact/images/c/c3/Character_Klee_Thumb.png");
				$cards[] = new Card("lisa", 4, "https://static.wikia.nocookie.net/gensin-impact/images/5/51/Character_Lisa_Thumb.png");
				$cards[] = new Card("mona", 5, "https://static.wikia.nocookie.net/gensin-impact/images/a/a0/Character_Mona_Thumb.png");
				$cards[] = new Card("ningguang", 4, "https://static.wikia.nocookie.net/gensin-impact/images/2/2b/Character_Ningguang_Thumb.png");
				$cards[] = new Card("noelle", 4, "https://static.wikia.nocookie.net/gensin-impact/images/a/ab/Character_Noelle_Thumb.png");
				$cards[] = new Card("qiqi", 5, "https://static.wikia.nocookie.net/gensin-impact/images/d/d5/Character_Qiqi_Thumb.png");
				$cards[] = new Card("razor", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/1d/Character_Razor_Thumb.png");
				$cards[] = new Card("rosaria", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/f6/Character_Rosaria_Thumb.png");
				$cards[] = new Card("sucrose", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/61/Character_Sucrose_Thumb.png");
				$cards[] = new Card("tartaglia", 5, "https://static.wikia.nocookie.net/gensin-impact/images/5/53/Character_Tartaglia_Thumb.png");
				$cards[] = new Card("traveler", 5, "https://static.wikia.nocookie.net/gensin-impact/images/7/71/Character_Traveler_Thumb.png");
				$cards[] = new Card("venti", 5, "https://static.wikia.nocookie.net/gensin-impact/images/8/8d/Character_Venti_Thumb.png");
				$cards[] = new Card("xiangling", 4, "https://static.wikia.nocookie.net/gensin-impact/images/a/a0/Character_Xiangling_Thumb.png");
				$cards[] = new Card("xiao", 5, "https://static.wikia.nocookie.net/gensin-impact/images/b/b9/Character_Xiao_Thumb.png");
				$cards[] = new Card("xingqiu", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/4a/Character_Xingqiu_Thumb.png");
				$cards[] = new Card("xinyan", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/9d/Character_Xinyan_Thumb.png");
				$cards[] = new Card("yanfei", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/1f/Character_Yanfei_Thumb.png");
				$cards[] = new Card("zhongli", 5, "https://static.wikia.nocookie.net/gensin-impact/images/c/c2/Character_Zhongli_Thumb.png");
				// Weapons
				$cards[] = new Card("freedom_sworn", 5, "https://static.wikia.nocookie.net/gensin-impact/images/3/39/Weapon_Freedom-Sworn.png");
				$cards[] = new Card("aquila_favonia", 5, "https://static.wikia.nocookie.net/gensin-impact/images/6/6a/Weapon_Aquila_Favonia.png");
				$cards[] = new Card("primordial_jade_cutter", 5, "https://static.wikia.nocookie.net/gensin-impact/images/2/2a/Weapon_Primordial_Jade_Cutter.png");
				$cards[] = new Card("summit_shaper", 5, "https://static.wikia.nocookie.net/gensin-impact/images/c/ca/Weapon_Summit_Shaper.png");
				$cards[] = new Card("skyward_blade", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/03/Weapon_Skyward_Blade.png");
				$cards[] = new Card("skyward_pride", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/0b/Weapon_Skyward_Pride.png");
				$cards[] = new Card("song_of_broken_pines", 5, "https://static.wikia.nocookie.net/gensin-impact/images/d/dd/Weapon_Song_of_Broken_Pines.png");
				$cards[] = new Card("the_unforged", 5, "https://static.wikia.nocookie.net/gensin-impact/images/f/f7/Weapon_The_Unforged.png");
				$cards[] = new Card("wolfs_gravestone", 5, "https://static.wikia.nocookie.net/gensin-impact/images/4/4f/Weapon_Wolf%27s_Gravestone.png");
				$cards[] = new Card("staff_of_homa", 5, "https://static.wikia.nocookie.net/gensin-impact/images/1/17/Weapon_Staff_of_Homa.png");
				$cards[] = new Card("vortex_vanquisher", 5, "https://static.wikia.nocookie.net/gensin-impact/images/d/d6/Weapon_Vortex_Vanquisher.png");
				$cards[] = new Card("skyward_spine", 5, "https://static.wikia.nocookie.net/gensin-impact/images/6/69/Weapon_Skyward_Spine.png");
				$cards[] = new Card("primordial_jade_winged_spear", 5, "https://static.wikia.nocookie.net/gensin-impact/images/8/80/Weapon_Primordial_Jade_Winged-Spear.png");
				$cards[] = new Card("lost_prayer_to_the_sacred_winds", 5, "https://static.wikia.nocookie.net/gensin-impact/images/9/98/Weapon_Lost_Prayer_to_the_Sacred_Winds.png");
				$cards[] = new Card("memory_of_dust", 5, "https://static.wikia.nocookie.net/gensin-impact/images/c/ca/Weapon_Memory_of_Dust.png");
				$cards[] = new Card("skyward_atlas", 5, "https://static.wikia.nocookie.net/gensin-impact/images/3/33/Weapon_Skyward_Atlas.png");
				$cards[] = new Card("amos_bow", 5, "https://static.wikia.nocookie.net/gensin-impact/images/d/de/Weapon_Amos%27_Bow.png");
				$cards[] = new Card("elegy_for_the_end", 5, "https://static.wikia.nocookie.net/gensin-impact/images/a/a5/Weapon_Elegy_for_the_End.png");
				$cards[] = new Card("skyward_harp", 5, "https://static.wikia.nocookie.net/gensin-impact/images/1/19/Weapon_Skyward_Harp.png");
				$cards[] = new Card("blackcliff_longsword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/6f/Weapon_Blackcliff_Longsword.png");
				$cards[] = new Card("the_alley_flash", 4, "https://static.wikia.nocookie.net/gensin-impact/images/8/83/Weapon_The_Alley_Flash.png");
				$cards[] = new Card("lions_roar", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/e6/Weapon_Lion%27s_Roar.png");
				$cards[] = new Card("prototype_rancour", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/ef/Weapon_Prototype_Rancour.png");
				$cards[] = new Card("royal_longsword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/cd/Weapon_Royal_Longsword.png");
				$cards[] = new Card("sacrificial_sword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/a/a0/Weapon_Sacrificial_Sword.png");
				$cards[] = new Card("the_flute", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/63/Weapon_The_Flute.png");
				$cards[] = new Card("festering_desire", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/70/Weapon_Festering_Desire.png");
				$cards[] = new Card("sword_of_descension", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/17/Weapon_Sword_of_Descension.png");
				$cards[] = new Card("iron_sting", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/35/Weapon_Iron_Sting.png");
				$cards[] = new Card("the_black_sword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/cf/Weapon_The_Black_Sword.png");
				$cards[] = new Card("favonius_sword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/90/Weapon_Favonius_Sword.png");
				$cards[] = new Card("whiteblind", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/04/Weapon_Whiteblind.png");
				$cards[] = new Card("blackcliff_slasher", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/d7/Weapon_Blackcliff_Slasher.png");
				$cards[] = new Card("snow_tombed_starsilver", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/49/Weapon_Snow-Tombed_Starsilver.png");
				$cards[] = new Card("sacrificial_greatsword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/17/Weapon_Sacrificial_Greatsword.png");
				$cards[] = new Card("lithic_blade", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/3a/Weapon_Lithic_Blade.png");
				$cards[] = new Card("serpent_spine", 4, "https://static.wikia.nocookie.net/gensin-impact/images/8/88/Weapon_Serpent_Spine.png");
				$cards[] = new Card("the_bell", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/6e/Weapon_The_Bell.png");
				$cards[] = new Card("royal_greatsword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/bf/Weapon_Royal_Greatsword.png");
				$cards[] = new Card("rainslasher", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/d4/Weapon_Rainslasher.png");
				$cards[] = new Card("prototype_archaic", 4, "https://static.wikia.nocookie.net/gensin-impact/images/a/ab/Weapon_Prototype_Archaic.png");
				$cards[] = new Card("favonius_greatsword", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/9c/Weapon_Favonius_Greatsword.png");
				$cards[] = new Card("crescent_pike", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/4c/Weapon_Crescent_Pike.png");
				$cards[] = new Card("lithic_spear", 4, "https://static.wikia.nocookie.net/gensin-impact/images/2/2a/Weapon_Lithic_Spear.png");
				$cards[] = new Card("dragonspine_spear", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/1a/Weapon_Dragonspine_Spear.png");
				$cards[] = new Card("royal_spear", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/fd/Weapon_Royal_Spear.png");
				$cards[] = new Card("favonius_lance", 4, "https://static.wikia.nocookie.net/gensin-impact/images/5/57/Weapon_Favonius_Lance.png");
				$cards[] = new Card("deathmatch", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/69/Weapon_Deathmatch.png");
				$cards[] = new Card("prototype_starglitter", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/7e/Weapon_Prototype_Starglitter.png");
				$cards[] = new Card("dragons_bane", 4, "https://static.wikia.nocookie.net/gensin-impact/images/2/24/Weapon_Dragon%27s_Bane.png");
				$cards[] = new Card("blackcliff_pole", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/d5/Weapon_Blackcliff_Pole.png");
				$cards[] = new Card("the_widsith", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/f0/Weapon_The_Widsith.png");
				$cards[] = new Card("dodoco_tales", 4, "https://static.wikia.nocookie.net/gensin-impact/images/5/51/Weapon_Dodoco_Tales.png");
				$cards[] = new Card("wine_and_song", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/c6/Weapon_Wine_and_Song.png");
				$cards[] = new Card("frostbearer", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/1c/Weapon_Frostbearer.png");
				$cards[] = new Card("eye_of_perception", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/6c/Weapon_Eye_of_Perception.png");
				$cards[] = new Card("solar_pearl", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/fc/Weapon_Solar_Pearl.png");
				$cards[] = new Card("sacrificial_fragments", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/6c/Weapon_Sacrificial_Fragments.png");
				$cards[] = new Card("royal_grimoire", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/99/Weapon_Royal_Grimoire.png");
				$cards[] = new Card("prototype_amber", 4, "https://static.wikia.nocookie.net/gensin-impact/images/2/2a/Weapon_Prototype_Amber.png");
				$cards[] = new Card("mappa_mare", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/4d/Weapon_Mappa_Mare.png");
				$cards[] = new Card("favonius_codex", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/36/Weapon_Favonius_Codex.png");
				$cards[] = new Card("blackcliff_agate", 4, "https://static.wikia.nocookie.net/gensin-impact/images/a/a6/Weapon_Blackcliff_Agate.png");
				$cards[] = new Card("compound_bow", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/32/Weapon_Compound_Bow.png");
				$cards[] = new Card("favonius_warbow", 4, "https://static.wikia.nocookie.net/gensin-impact/images/8/85/Weapon_Favonius_Warbow.png");
				$cards[] = new Card("windblume_ode", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/38/Weapon_Windblume_Ode.png");
				$cards[] = new Card("alley_hunter", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/0a/Weapon_Alley_Hunter.png");
				$cards[] = new Card("blackcliff_warbow", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b8/Weapon_Blackcliff_Warbow.png");
				$cards[] = new Card("the_viridescent_hunt", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/ff/Weapon_The_Viridescent_Hunt.png");
				$cards[] = new Card("prototype_crescent", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/43/Weapon_Prototype_Crescent.png");
				$cards[] = new Card("sacrificial_bow", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/ec/Weapon_Sacrificial_Bow.png");
				$cards[] = new Card("the_stringless", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/71/Weapon_The_Stringless.png");
				$cards[] = new Card("rust", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/1c/Weapon_Rust.png");
				$cards[] = new Card("royal_bow", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/99/Weapon_Royal_Bow.png");
				$cards[] = new Card("mitternachts_waltz", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/77/Weapon_Mitternachts_Waltz.png");
				$cards[] = new Card("cool_steel", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/9c/Weapon_Cool_Steel.png");
				$cards[] = new Card("harbinger_of_dawn", 3, "https://static.wikia.nocookie.net/gensin-impact/images/2/23/Weapon_Harbinger_of_Dawn.png");
				$cards[] = new Card("dark_iron_sword", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/3a/Weapon_Dark_Iron_Sword.png");
				$cards[] = new Card("fillet_blade", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/f7/Weapon_Fillet_Blade.png");
				$cards[] = new Card("skyrider_sword", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/34/Weapon_Skyrider_Sword.png");
				$cards[] = new Card("travelers_handy_sword", 3, "https://static.wikia.nocookie.net/gensin-impact/images/c/c9/Weapon_Traveler%27s_Handy_Sword.png");
				$cards[] = new Card("white_iron_greatsword", 3, "https://static.wikia.nocookie.net/gensin-impact/images/5/56/Weapon_White_Iron_Greatsword.png");
				$cards[] = new Card("skyrider_greatsword", 3, "https://static.wikia.nocookie.net/gensin-impact/images/6/6e/Weapon_Skyrider_Greatsword.png");
				$cards[] = new Card("quartz", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/71/Weapon_Quartz.png");
				$cards[] = new Card("debate_club", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/74/Weapon_Debate_Club.png");
				$cards[] = new Card("ferrous_shadow", 3, "https://static.wikia.nocookie.net/gensin-impact/images/e/e9/Weapon_Ferrous_Shadow.png");
				$cards[] = new Card("bloodtainted_greatsword", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/4a/Weapon_Bloodtainted_Greatsword.png");
				$cards[] = new Card("halberd", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/41/Weapon_Halberd.png");
				$cards[] = new Card("white_tassel", 3, "https://static.wikia.nocookie.net/gensin-impact/images/1/1f/Weapon_White_Tassel.png");
				$cards[] = new Card("black_tassel", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/43/Weapon_Black_Tassel.png");
				$cards[] = new Card("amber_catalyst", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/97/Weapon_Amber_Catalyst.png");
				$cards[] = new Card("emerald_orb", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/7c/Weapon_Emerald_Orb.png");
				$cards[] = new Card("thrilling_tales_of_dragon_slayers", 3, "https://static.wikia.nocookie.net/gensin-impact/images/1/19/Weapon_Thrilling_Tales_of_Dragon_Slayers.png");
				$cards[] = new Card("twin_nephrite", 3, "https://static.wikia.nocookie.net/gensin-impact/images/e/e3/Weapon_Twin_Nephrite.png");
				$cards[] = new Card("otherworldly_story", 3, "https://static.wikia.nocookie.net/gensin-impact/images/1/11/Weapon_Otherworldly_Story.png");
				$cards[] = new Card("magic_guide", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/39/Weapon_Magic_Guide.png");
				$cards[] = new Card("slingshot", 3, "https://static.wikia.nocookie.net/gensin-impact/images/c/ca/Weapon_Slingshot.png");
				$cards[] = new Card("messenger", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/38/Weapon_Messenger.png");
				$cards[] = new Card("recurve_bow", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/b5/Weapon_Recurve_Bow.png");
				$cards[] = new Card("sharpshooters_oath", 3, "https://static.wikia.nocookie.net/gensin-impact/images/5/52/Weapon_Sharpshooter%27s_Oath.png");
				$cards[] = new Card("raven_bow", 3, "https://static.wikia.nocookie.net/gensin-impact/images/d/d0/Weapon_Raven_Bow.png");
				$cards[] = new Card("ebony_bow", 3, "https://static.wikia.nocookie.net/gensin-impact/images/a/a1/Weapon_Ebony_Bow.png");
				$cards[] = new Card("silver_sword", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/32/Weapon_Silver_Sword.png");
				$cards[] = new Card("old_mercs_pal", 2, "https://static.wikia.nocookie.net/gensin-impact/images/0/0b/Weapon_Old_Merc%27s_Pal.png");
				$cards[] = new Card("iron_point", 2, "https://static.wikia.nocookie.net/gensin-impact/images/2/25/Weapon_Iron_Point.png");
				$cards[] = new Card("pocket_grimoire", 2, "https://static.wikia.nocookie.net/gensin-impact/images/1/16/Weapon_Pocket_Grimoire.png");
				$cards[] = new Card("seasoned_hunters_bow", 2, "https://static.wikia.nocookie.net/gensin-impact/images/8/82/Weapon_Seasoned_Hunter%27s_Bow.png");
				$cards[] = new Card("dull_blade", 1, "https://static.wikia.nocookie.net/gensin-impact/images/2/2f/Weapon_Dull_Blade.png");
				$cards[] = new Card("waster_greatsword", 1, "https://static.wikia.nocookie.net/gensin-impact/images/4/4c/Weapon_Waster_Greatsword.png");
				$cards[] = new Card("beginners_protector", 1, "https://static.wikia.nocookie.net/gensin-impact/images/f/fc/Weapon_Beginner%27s_Protector.png");
				$cards[] = new Card("apprentices_notes", 1, "https://static.wikia.nocookie.net/gensin-impact/images/c/cf/Weapon_Apprentice%27s_Notes.png");
				$cards[] = new Card("hunters_bow", 1, "https://static.wikia.nocookie.net/gensin-impact/images/4/44/Weapon_Hunter%27s_Bow.png");
				// Weapon enhancement material
				$cards[] = new Card("mystic_enhancement_ore", 3, "https://static.wikia.nocookie.net/gensin-impact/images/5/55/Item_Mystic_Enhancement_Ore.png");
				$cards[] = new Card("fine_enhancement_ore", 2, "https://static.wikia.nocookie.net/gensin-impact/images/2/23/Item_Fine_Enhancement_Ore.png");
				$cards[] = new Card("enhancement_ore", 1, "https://static.wikia.nocookie.net/gensin-impact/images/4/4f/Item_Enhancement_Ore.png");
				// Artefacts
				$cards[] = new Card("initiates_flower", 1, "https://static.wikia.nocookie.net/gensin-impact/images/2/27/Item_Initiate%27s_Flower.png");
				$cards[] = new Card("initiates_feather", 1, "https://static.wikia.nocookie.net/gensin-impact/images/a/a0/Item_Initiate%27s_Feather.png");
				foreach(array(1, 2, 3) as $rarity) {
					$cards[] = new Card("adventurers_flower_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/e/ec/Item_Adventurer%27s_Flower.png");
					$cards[] = new Card("adventurers_feather_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/3/30/Item_Adventurer%27s_Tail_Feather.png");
					$cards[] = new Card("adventurers_pocket_watch_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/f/f6/Item_Adventurer%27s_Pocket_Watch.png");
					$cards[] = new Card("adventurers_golden_goblet_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/a/ae/Item_Adventurer%27s_Golden_Goblet.png");
					$cards[] = new Card("adventurers_bandana_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/4/43/Item_Adventurer%27s_Bandana.png");
				}
				foreach(array(1, 2, 3) as $rarity) {
					$cards[] = new Card("lucky_dogs_clover_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/e/e0/Item_Lucky_Dog%27s_Clover.png");
					$cards[] = new Card("lucky_dogs_eagle_feather_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/a/ac/Item_Lucky_Dog%27s_Eagle_Feather.png");
					$cards[] = new Card("lucky_dogs_hourglass_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/5/50/Item_Lucky_Dog%27s_Hourglass.png");
					$cards[] = new Card("lucky_dogs_goblet_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/c/c1/Item_Lucky_Dog%27s_Goblet.png");
					$cards[] = new Card("lucky_dogs_silver_circlet_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/6/6a/Item_Lucky_Dog%27s_Silver_Circlet.png");
				}
				foreach(array(1, 2, 3) as $rarity) {
					$cards[] = new Card("traveling_doctors_silver_lotus_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/a/a5/Item_Traveling_Doctor%27s_Silver_Lotus.png");
					$cards[] = new Card("traveling_doctors_owl_feather_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/0/01/Item_Traveling_Doctor%27s_Owl_Feather.png");
					$cards[] = new Card("traveling_doctors_pocket_watch_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/b/b7/Item_Traveling_Doctor%27s_Pocket_Watch.png");
					$cards[] = new Card("traveling_doctors_medicine_pot_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/2/25/Item_Traveling_Doctor%27s_Medicine_Pot.png");
					$cards[] = new Card("traveling_doctors_handkerchief_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/1/18/Item_Traveling_Doctor%27s_Handkerchief.png");
				}
				foreach(array(3, 4) as $rarity) {
					$cards[] = new Card("heart_of_comradeship_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/f/fc/Item_Heart_of_Comradeship.png");
					$cards[] = new Card("feather_of_homecoming_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/f/f0/Item_Feather_of_Homecoming.png");
					$cards[] = new Card("sundial_of_the_sojourner_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/93/Item_Sundial_of_the_Sojourner.png");
					$cards[] = new Card("goblet_of_the_sojourner_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/0/06/Item_Goblet_of_the_Sojourner.png");
					$cards[] = new Card("crown_of_parting_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/2/25/Item_Crown_of_Parting.png");
				}
				foreach(array(3, 4) as $rarity) {
					$cards[] = new Card("tiny_miracles_flower_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/6/68/Item_Tiny_Miracle%27s_Flower.png");
					$cards[] = new Card("tiny_miracles_feather_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/8/89/Item_Tiny_Miracle%27s_Feather.png");
					$cards[] = new Card("tiny_miracles_hourglass_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/1/14/Item_Tiny_Miracle%27s_Hourglass.png");
					$cards[] = new Card("tiny_miracles_goblet_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/5/52/Item_Tiny_Miracle%27s_Goblet.png");
					$cards[] = new Card("tiny_miracles_earrings_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/7/73/Item_Tiny_Miracle%27s_Earrings.png");
				}
				foreach(array(3, 4) as $rarity) {
					$cards[] = new Card("berserkers_rose_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/c/c1/Item_Berserker%27s_Rose.png");
					$cards[] = new Card("berserkers_indigo_feather_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/1/10/Item_Berserker%27s_Indigo_Feather.png");
					$cards[] = new Card("berserkers_timepiece_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/5/5c/Item_Berserker%27s_Timepiece.png");
					$cards[] = new Card("berserkers_bone_goblet_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/d/da/Item_Berserker%27s_Bone_Goblet.png");
					$cards[] = new Card("berserkers_battle_mask_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/5/5e/Item_Berserker%27s_Battle_Mask.png");
				}
				foreach(array(3, 4) as $rarity) {
					$cards[] = new Card("instructors_brooch_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/3/35/Item_Instructor%27s_Brooch.png");
					$cards[] = new Card("instructors_feather_accessory_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/a/af/Item_Instructor%27s_Feather_Accessory.png");
					$cards[] = new Card("instructors_pocket_watch_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/4/41/Item_Instructor%27s_Pocket_Watch.png");
					$cards[] = new Card("instructors_tea_cup_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/a/ad/Item_Instructor%27s_Tea_Cup.png");
					$cards[] = new Card("instructors_cap_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/d/da/Item_Instructor%27s_Cap.png");
				}
				foreach(array(3, 4) as $rarity) {
					$cards[] = new Card("exiles_flower_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/f/f9/Item_Exile%27s_Flower.png");
					$cards[] = new Card("exiles_feather_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/4/4d/Item_Exile%27s_Feather.png");
					$cards[] = new Card("exiles_pocket_watch_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/e/e4/Item_Exile%27s_Pocket_Watch.png");
					$cards[] = new Card("exiles_goblet_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/6/6a/Item_Exile%27s_Goblet.png");
					$cards[] = new Card("exiles_circlet_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/b/b3/Item_Exile%27s_Circlet.png");
				}
				foreach(array(3, 4) as $rarity) {
					$cards[] = new Card("guardians_flower_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/6/63/Item_Guardian%27s_Flower.png");
					$cards[] = new Card("guardians_sigil_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/f/ff/Item_Guardian%27s_Sigil.png");
					$cards[] = new Card("guardians_clock_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/5/51/Item_Guardian%27s_Clock.png");
					$cards[] = new Card("guardians_vessel_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/2/2b/Item_Guardian%27s_Vessel.png");
					$cards[] = new Card("guardians_band_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/c/c4/Item_Guardian%27s_Band.png");
				}
				foreach(array(3, 4) as $rarity) {
					$cards[] = new Card("medal_of_the_brave_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/9e/Item_Medal_of_the_Brave.png");
					$cards[] = new Card("prospect_of_the_brave_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/2/2f/Item_Prospect_of_the_Brave.png");
					$cards[] = new Card("fortitude_of_the_brave_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/e/ed/Item_Fortitude_of_the_Brave.png");
					$cards[] = new Card("outset_of_the_brave_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/4/49/Item_Outset_of_the_Brave.png");
					$cards[] = new Card("crown_of_the_brave_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/b/b3/Item_Crown_of_the_Brave.png");
				}
				foreach(array(3, 4) as $rarity) {
					$cards[] = new Card("martial_artists_red_flower_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/a/a7/Item_Martial_Artist%27s_Red_Flower.png");
					$cards[] = new Card("martial_artists_feather_accessory_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/6/6e/Item_Martial_Artist%27s_Feather_Accessory.png");
					$cards[] = new Card("martial_artists_water_hourglass_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/0/06/Item_Martial_Artist%27s_Water_Hourglass.png");
					$cards[] = new Card("martial_artists_wine_cup_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/8/8d/Item_Martial_Artist%27s_Wine_Cup.png");
					$cards[] = new Card("martial_artists_bandana_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/4/4c/Item_Martial_Artist%27s_Bandana.png");
				}
				foreach(array(3, 4) as $rarity) {
					$cards[] = new Card("gamblers_brooch_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/3/39/Item_Gambler%27s_Brooch.png");
					$cards[] = new Card("gamblers_feather_accessory_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/b/bf/Item_Gambler%27s_Feather_Accessory.png");
					$cards[] = new Card("gamblers_pocket_watch_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/f/f7/Item_Gambler%27s_Pocket_Watch.png");
					$cards[] = new Card("gamblers_dice_cup_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/f/fd/Item_Gambler%27s_Dice_Cup.png");
					$cards[] = new Card("gamblers_earrings_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/4/43/Item_Gambler%27s_Earrings.png");
				}
				foreach(array(3, 4) as $rarity) {
					$cards[] = new Card("scholars_bookmark_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/e/e5/Item_Scholar%27s_Bookmark.png");
					$cards[] = new Card("scholars_quill_pen_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/5/52/Item_Scholar%27s_Quill_Pen.png");
					$cards[] = new Card("scholars_clock_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/0/01/Item_Scholar%27s_Clock.png");
					$cards[] = new Card("scholars_ink_cup_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/6/66/Item_Scholar%27s_Ink_Cup.png");
					$cards[] = new Card("scholars_lens_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/93/Item_Scholar%27s_Lens.png");
				}
				foreach(array(3, 4) as $rarity) {
					$cards[] = new Card("tiara_of_flame_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/1/18/Item_Tiara_of_Flame.png");
					$cards[] = new Card("tiara_of_torrents_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/0/0a/Item_Tiara_of_Torrents.png");
					$cards[] = new Card("tiara_of_thunder_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/f/f6/Item_Tiara_of_Thunder.png");
					$cards[] = new Card("tiara_of_frost_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/1/14/Item_Tiara_of_Frost.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("gladiators_nostalgia_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/b/b1/Item_Gladiator%27s_Nostalgia.png");
					$cards[] = new Card("gladiators_destiny_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/94/Item_Gladiator%27s_Destiny.png");
					$cards[] = new Card("gladiators_longing_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/0/0c/Item_Gladiator%27s_Longing.png");
					$cards[] = new Card("gladiators_intoxication_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/6/6d/Item_Gladiator%27s_Intoxication.png");
					$cards[] = new Card("gladiators_triumphus_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/9b/Item_Gladiator%27s_Triumphus.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("troupes_dawnlight_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/a/ad/Item_Troupe%27s_Dawnlight.png");
					$cards[] = new Card("bards_arrow_feather_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/4/4e/Item_Bard%27s_Arrow_Feather.png");
					$cards[] = new Card("concerts_final_hour_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/9e/Item_Concert%27s_Final_Hour.png");
					$cards[] = new Card("wanderers_string_kettle_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/9b/Item_Wanderer%27s_String_Kettle.png");
					$cards[] = new Card("conductors_top_hat_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/8/81/Item_Conductor%27s_Top_Hat.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("thundersoothers_heart_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/e/ef/Item_Thundersoother%27s_Heart.png");
					$cards[] = new Card("thundersoothers_plume_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/c/cb/Item_Thundersoother%27s_Plume.png");
					$cards[] = new Card("hour_of_soothing_thunder_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/b/b7/Item_Hour_of_Soothing_Thunder.png");
					$cards[] = new Card("thundersoothers_goblet_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/8/87/Item_Thundersoother%27s_Goblet.png");
					$cards[] = new Card("thundersoothers_diadem_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/1/14/Item_Thundersoother%27s_Diadem.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("thunderbirds_mercy_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/5/57/Item_Thunderbird%27s_Mercy.png");
					$cards[] = new Card("survivor_of_catastrophe_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/e/e9/Item_Survivor_of_Catastrophe.png");
					$cards[] = new Card("hourglass_of_thunder_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/94/Item_Hourglass_of_Thunder.png");
					$cards[] = new Card("omen_of_thunderstorm_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/c/cd/Item_Omen_of_Thunderstorm.png");
					$cards[] = new Card("thunder_summoners_crown_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/a/a5/Item_Thunder_Summoner%27s_Crown.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("maidens_distant_love_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/d/dc/Item_Maiden%27s_Distant_Love.png");
					$cards[] = new Card("maidens_heart-stricken_infatuation_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/5/5f/Item_Maiden%27s_Heart-stricken_Infatuation.png");
					$cards[] = new Card("maidens_passing_youth_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/93/Item_Maiden%27s_Passing_Youth.png");
					$cards[] = new Card("maidens_fleeting_leisure_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/2/23/Item_Maiden%27s_Fleeting_Leisure.png");
					$cards[] = new Card("maidens_fading_beauty_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/8/82/Item_Maiden%27s_Fading_Beauty.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("in_remembrance_of_viridescent_fields_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/90/Item_In_Remembrance_of_Viridescent_Fields.png");
					$cards[] = new Card("viridescent_arrow_feather_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/4/41/Item_Viridescent_Arrow_Feather.png");
					$cards[] = new Card("viridescent_venerers_determination_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/8/8f/Item_Viridescent_Venerer%27s_Determination.png");
					$cards[] = new Card("viridescent_venerers_vessel_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/f/ff/Item_Viridescent_Venerer%27s_Vessel.png");
					$cards[] = new Card("viridescent_venerers_diadem_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/8/8b/Item_Viridescent_Venerer%27s_Diadem.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("witchs_flower_of_blaze_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/0/0f/Item_Witch%27s_Flower_of_Blaze.png");
					$cards[] = new Card("witchs_ever_burning_plume_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/b/b3/Item_Witch%27s_Ever-Burning_Plume.png");
					$cards[] = new Card("witchs_end_time_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/1/14/Item_Witch%27s_End_Time.png");
					$cards[] = new Card("witchs_heart_flames_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/b/ba/Item_Witch%27s_Heart_Flames.png");
					$cards[] = new Card("witchs_scorching_hat_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/e/ea/Item_Witch%27s_Scorching_Hat.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("lavawalkers_resolution_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/b/b5/Item_Lavawalker%27s_Resolution.png");
					$cards[] = new Card("lavawalkers_salvation_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/0/0a/Item_Lavawalker%27s_Salvation.png");
					$cards[] = new Card("lavawalkers_torment_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/3/3f/Item_Lavawalker%27s_Torment.png");
					$cards[] = new Card("lavawalkers_epiphany_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/1/1b/Item_Lavawalker%27s_Epiphany.png");
					$cards[] = new Card("lavawalkers_wisdom_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/6/63/Item_Lavawalker%27s_Wisdom.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("royal_flora_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/7/71/Item_Royal_Flora.png");
					$cards[] = new Card("royal_plume_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/e/ee/Item_Royal_Plume.png");
					$cards[] = new Card("royal_pocket_watch_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/1/1a/Item_Royal_Pocket_Watch.png");
					$cards[] = new Card("royal_silver_urn_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/9c/Item_Royal_Silver_Urn.png");
					$cards[] = new Card("royal_masque_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/e/eb/Item_Royal_Masque.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("bloodstained_flower_of_iron_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/5/5b/Item_Bloodstained_Flower_of_Iron.png");
					$cards[] = new Card("bloodstained_black_plume_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/5/5c/Item_Bloodstained_Black_Plume.png");
					$cards[] = new Card("bloodstained_final_hour_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/8/8c/Item_Bloodstained_Final_Hour.png");
					$cards[] = new Card("bloodstained_chevaliers_goblet_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/4/4f/Item_Bloodstained_Chevalier%27s_Goblet.png");
					$cards[] = new Card("bloodstained_iron_mask_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/0/0c/Item_Bloodstained_Iron_Mask.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("flower_of_creviced_cliff_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/9f/Item_Flower_of_Creviced_Cliff.png");
					$cards[] = new Card("feather_of_jagged_peaks_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/a/a5/Item_Feather_of_Jagged_Peaks.png");
					$cards[] = new Card("sundial_of_enduring_jade_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/1/1d/Item_Sundial_of_Enduring_Jade.png");
					$cards[] = new Card("goblet_of_chiseled_crag_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/0/02/Item_Goblet_of_Chiseled_Crag.png");
					$cards[] = new Card("mask_of_solitude_basalt_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/0/09/Item_Mask_of_Solitude_Basalt.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("summer_nights_bloom_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/a/a6/Item_Summer_Night%27s_Bloom.png");
					$cards[] = new Card("summer_nights_finale_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/e/ec/Item_Summer_Night%27s_Finale.png");
					$cards[] = new Card("summer_nights_moment_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/3/34/Item_Summer_Night%27s_Moment.png");
					$cards[] = new Card("summer_nights_waterballoon_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/1/10/Item_Summer_Night%27s_Waterballoon.png");
					$cards[] = new Card("summer_nights_mask_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/8/8a/Item_Summer_Night%27s_Mask.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("snowswept_memory_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/6/69/Item_Snowswept_Memory.png");
					$cards[] = new Card("icebreakers_resolve_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/d/d6/Item_Icebreaker%27s_Resolve.png");
					$cards[] = new Card("frozen_homelands_demise_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/5/58/Item_Frozen_Homeland%27s_Demise.png");
					$cards[] = new Card("frost_weaved_dignity_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/6/6a/Item_Frost-Weaved_Dignity.png");
					$cards[] = new Card("broken_rimes_echo_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/d/df/Item_Broken_Rime%27s_Echo.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("gilded_corsage_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/4/40/Item_Gilded_Corsage.png");
					$cards[] = new Card("gust_of_nostalgia_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/92/Item_Gust_of_Nostalgia.png");
					$cards[] = new Card("copper_compass_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/8/83/Item_Copper_Compass.png");
					$cards[] = new Card("goblet_of_thundering_deep_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/9c/Item_Goblet_of_Thundering_Deep.png");
					$cards[] = new Card("wine_stained_tricorne_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/a/a6/Item_Wine-Stained_Tricorne.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("flower_of_accolades_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/5/51/Item_Flower_of_Accolades.png");
					$cards[] = new Card("ceremonial_war_plume_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/8/86/Item_Ceremonial_War-Plume.png");
					$cards[] = new Card("orichalceous_time_dial_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/9/92/Item_Orichalceous_Time-Dial.png");
					$cards[] = new Card("nobles_pledging_vessel_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/f/f4/Item_Noble%27s_Pledging_Vessel.png");
					$cards[] = new Card("generals_ancient_helm_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/b/b9/Item_General%27s_Ancient_Helm.png");
				}
				foreach(array(4, 5) as $rarity) {
					$cards[] = new Card("stainless_bloom_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/e/e7/Item_Stainless_Bloom.png");
					$cards[] = new Card("wise_doctors_pinion_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/e/e8/Item_Wise_Doctor%27s_Pinion.png");
					$cards[] = new Card("moment_of_cessation_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/8/85/Item_Moment_of_Cessation.png");
					$cards[] = new Card("surpassing_cup_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/4/4b/Item_Surpassing_Cup.png");
					$cards[] = new Card("mocking_mask_{}", $rarity, "https://static.wikia.nocookie.net/gensin-impact/images/2/23/Item_Mocking_Mask.png");
				}
				// Character experience
				$cards[] = new Card("character_experience_4", 4, "https://static.wikia.nocookie.net/gensin-impact/images/2/26/Item_Hero%27s_Wit.png");
				$cards[] = new Card("character_experience_3", 3, "https://static.wikia.nocookie.net/gensin-impact/images/0/07/Item_Adventurer%27s_Experience.png");
				$cards[] = new Card("character_experience_2", 2, "https://static.wikia.nocookie.net/gensin-impact/images/6/60/Item_Wanderer%27s_Advice.png");
				// Common ascension materials
				$cards[] = new Card("slime_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/d/d8/Item_Slime_Concentrate.png");
				$cards[] = new Card("slime_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/f/f4/Item_Slime_Secretions.png");
				$cards[] = new Card("slime_{}", 1, "https://static.wikia.nocookie.net/gensin-impact/images/1/1c/Item_Slime_Condensate.png");
				$cards[] = new Card("mask_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/91/Item_Ominous_Mask.png");
				$cards[] = new Card("mask_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/2/2f/Item_Stained_Mask.png");
				$cards[] = new Card("mask_{}", 1, "https://static.wikia.nocookie.net/gensin-impact/images/6/69/Item_Damaged_Mask.png");
				$cards[] = new Card("arrowhead_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/2/22/Item_Weathered_Arrowhead.png");
				$cards[] = new Card("arrowhead_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/0/0d/Item_Sharp_Arrowhead.png");
				$cards[] = new Card("arrowhead_{}", 1, "https://static.wikia.nocookie.net/gensin-impact/images/0/01/Item_Firm_Arrowhead.png");
				$cards[] = new Card("scroll_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/f0/Item_Forbidden_Curse_Scroll.png");
				$cards[] = new Card("scroll_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/9/91/Item_Sealed_Scroll.png");
				$cards[] = new Card("scroll_{}", 1, "https://static.wikia.nocookie.net/gensin-impact/images/7/74/Item_Divining_Scroll.png");
				$cards[] = new Card("hoarder_insignia_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/71/Item_Golden_Raven_Insignia.png");
				$cards[] = new Card("hoarder_insignia_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/4/44/Item_Silver_Raven_Insignia.png");
				$cards[] = new Card("hoarder_insignia_{}", 1, "https://static.wikia.nocookie.net/gensin-impact/images/c/c9/Item_Treasure_Hoarder_Insignia.png");
				$cards[] = new Card("fatui_insignia_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/d/db/Item_Lieutenant%27s_Insignia.png");
				$cards[] = new Card("fatui_insignia_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/a/a5/Item_Sergeant%27s_Insignia.png");
				$cards[] = new Card("fatui_insignia_{}", 1, "https://static.wikia.nocookie.net/gensin-impact/images/b/b2/Item_Recruit%27s_Insignia.png");
				$cards[] = new Card("nectar_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/0/0b/Item_Energy_Nectar.png");
				$cards[] = new Card("nectar_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/4/46/Item_Shimmering_Nectar.png");
				$cards[] = new Card("nectar_{}", 1, "https://static.wikia.nocookie.net/gensin-impact/images/8/8b/Item_Whopperflower_Nectar.png");
				// Elite ascension materials
				$cards[] = new Card("horn_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/64/Item_Black_Crystal_Horn.png");
				$cards[] = new Card("horn_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/42/Item_Black_Bronze_Horn.png");
				$cards[] = new Card("horn_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/c/c0/Item_Heavy_Horn.png");
				$cards[] = new Card("ley_line_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/2/22/Item_Ley_Line_Sprouts.png");
				$cards[] = new Card("ley_line_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/d/d2/Item_Dead_Ley_Line_Leaves.png");
				$cards[] = new Card("ley_line_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/7/77/Item_Dead_Ley_Line_Branch.png");
				$cards[] = new Card("bone_shard_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/6/60/Item_Fossilized_Bone_Shard.png");
				$cards[] = new Card("bone_shard_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/ff/Item_Sturdy_Bone_Shard.png");
				$cards[] = new Card("bone_shard_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/e/e5/Item_Fragile_Bone_Shard.png");
				$cards[] = new Card("mist_grass_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/90/Item_Mist_Grass_Wick.png");
				$cards[] = new Card("mist_grass_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/73/Item_Mist_Grass.png");
				$cards[] = new Card("mist_grass_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/32/Item_Mist_Grass_Pollen.png");
				$cards[] = new Card("sacrificial_knife_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/5/53/Item_Inspector%27s_Sacrificial_Knife.png");
				$cards[] = new Card("sacrificial_knife_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/5/55/Item_Agent%27s_Sacrificial_Knife.png");
				$cards[] = new Card("sacrificial_knife_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/2/28/Item_Hunter%27s_Sacrificial_Knife.png");
				$cards[] = new Card("chaos_part_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/3e/Item_Chaos_Core.png");
				$cards[] = new Card("chaos_part_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/1/1f/Item_Chaos_Circuit.png");
				$cards[] = new Card("chaos_part_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/4/47/Item_Chaos_Device.png");
				// Boss drops
				$cards[] = new Card("boreas_tail_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/6/66/Item_Tail_of_Boreas.png");
				$cards[] = new Card("boreas_ring_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/d/d6/Item_Ring_of_Boreas.png");
				$cards[] = new Card("boreas_spirit_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/8/81/Item_Spirit_Locket_of_Boreas.png");
				$cards[] = new Card("dvalin_plume_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/b/bf/Item_Dvalin%27s_Plume.png");
				$cards[] = new Card("dvalin_claw_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/a/a8/Item_Dvalin%27s_Claw.png");
				$cards[] = new Card("dvalin_sigh_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/07/Item_Dvalin%27s_Sigh.png");
				$cards[] = new Card("childe_tusk_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/1/1c/Item_Tusk_of_Monoceros_Caeli.png");
				$cards[] = new Card("childe_shard_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/4/48/Item_Shard_of_a_Foul_Legacy.png");
				$cards[] = new Card("childe_shadow_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/5/5d/Item_Shadow_of_the_Warrior.png");
				$cards[] = new Card("azhdaha_crown_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/02/Item_Dragon_Lord%27s_Crown.png");
				$cards[] = new Card("azhdaha_branch_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/b/b1/Item_Bloodjade_Branch.png");
				$cards[] = new Card("azhdaha_scale_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/e/e1/Item_Gilded_Scale.png");
				// Boss material
				$cards[] = new Card("hurricane_seed", 4, "https://static.wikia.nocookie.net/gensin-impact/images/5/5e/Item_Hurricane_Seed.png");
				$cards[] = new Card("hoarfrost_core", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b5/Item_Hoarfrost_Core.png");
				$cards[] = new Card("crystalline_bloom", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/dc/Item_Crystalline_Bloom.png");
				$cards[] = new Card("lightning_prism", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/ee/Item_Lightning_Prism.png");
				$cards[] = new Card("basalt_pillar", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/bc/Item_Basalt_Pillar.png");
				$cards[] = new Card("cleansing_heart", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/02/Item_Cleansing_Heart.png");
				$cards[] = new Card("everflame_seed", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b2/Item_Everflame_Seed.png");
				$cards[] = new Card("juvenile_jade", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/f1/Item_Juvenile_Jade.png");
				$cards[] = new Card("marionette_core", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/1d/Item_Marionette_Core.png");
				// Ascension gems
				$cards[] = new Card("brilliant_diamond_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/0b/Item_Brilliant_Diamond_Gemstone.png");
				$cards[] = new Card("brilliant_diamond_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/74/Item_Brilliant_Diamond_Chunk.png");
				$cards[] = new Card("brilliant_diamond_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/3d/Item_Brilliant_Diamond_Fragment.png");
				$cards[] = new Card("brilliant_diamond_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/7/72/Item_Brilliant_Diamond_Sliver.png");
				$cards[] = new Card("vayuda_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/3/32/Item_Vayuda_Turquoise_Gemstone.png");
				$cards[] = new Card("vayuda_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/33/Item_Vayuda_Turquoise_Chunk.png");
				$cards[] = new Card("vayuda_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/71/Item_Vayuda_Turquoise_Fragment.png");
				$cards[] = new Card("vayuda_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/9/93/Item_Vayuda_Turquoise_Sliver.png");
				$cards[] = new Card("shivada_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/e/e9/Item_Shivada_Jade_Gemstone.png");
				$cards[] = new Card("shivada_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/41/Item_Shivada_Jade_Chunk.png");
				$cards[] = new Card("shivada_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/9a/Item_Shivada_Jade_Fragment.png");
				$cards[] = new Card("shivada_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/8/87/Item_Shivada_Jade_Sliver.png");
				$cards[] = new Card("vajrada_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/b/be/Item_Vajrada_Amethyst_Gemstone.png");
				$cards[] = new Card("vajrada_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/c1/Item_Vajrada_Amethyst_Chunk.png");
				$cards[] = new Card("vajrada_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/c/cb/Item_Vajrada_Amethyst_Fragment.png");
				$cards[] = new Card("vajrada_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/39/Item_Vajrada_Amethyst_Sliver.png");
				$cards[] = new Card("prithiva_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/e/eb/Item_Prithiva_Topaz_Gemstone.png");
				$cards[] = new Card("prithiva_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/4b/Item_Prithiva_Topaz_Chunk.png");
				$cards[] = new Card("prithiva_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/3e/Item_Prithiva_Topaz_Fragment.png");
				$cards[] = new Card("prithiva_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/33/Item_Prithiva_Topaz_Sliver.png");
				$cards[] = new Card("varunada_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/a/a4/Item_Varunada_Lazurite_Gemstone.png");
				$cards[] = new Card("varunada_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/f4/Item_Varunada_Lazurite_Chunk.png");
				$cards[] = new Card("varunada_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/f6/Item_Varunada_Lazurite_Fragment.png");
				$cards[] = new Card("varunada_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/f/f8/Item_Varunada_Lazurite_Sliver.png");
				$cards[] = new Card("agnidus_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/0d/Item_Agnidus_Agate_Gemstone.png");
				$cards[] = new Card("agnidus_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/00/Item_Agnidus_Agate_Chunk.png");
				$cards[] = new Card("agnidus_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/e/ec/Item_Agnidus_Agate_Fragment.png");
				$cards[] = new Card("agnidus_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/5/51/Item_Agnidus_Agate_Sliver.png");
				// Talent books
				$cards[] = new Card("book_freedom_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/c4/Item_Philosophies_of_Freedom.png");
				$cards[] = new Card("book_freedom_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/1/1a/Item_Guide_to_Freedom.png");
				$cards[] = new Card("book_freedom_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/3a/Item_Teachings_of_Freedom.png");
				$cards[] = new Card("book_resistance_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/0b/Item_Philosophies_of_Resistance.png");
				$cards[] = new Card("book_resistance_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/bf/Item_Guide_to_Resistance.png");
				$cards[] = new Card("book_resistance_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/33/Item_Teachings_of_Resistance.png");
				$cards[] = new Card("book_ballad_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/7e/Item_Philosophies_of_Ballad.png");
				$cards[] = new Card("book_ballad_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/2/2f/Item_Guide_to_Ballad.png");
				$cards[] = new Card("book_ballad_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/b/b4/Item_Teachings_of_Ballad.png");
				$cards[] = new Card("book_prosperity_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/bd/Item_Philosophies_of_Prosperity.png");
				$cards[] = new Card("book_prosperity_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/6/67/Item_Guide_to_Prosperity.png");
				$cards[] = new Card("book_prosperity_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/9/9e/Item_Teachings_of_Prosperity.png");
				$cards[] = new Card("book_diligence_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/c2/Item_Philosophies_of_Diligence.png");
				$cards[] = new Card("book_diligence_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/9f/Item_Guide_to_Diligence.png");
				$cards[] = new Card("book_diligence_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/a/a7/Item_Teachings_of_Diligence.png");
				$cards[] = new Card("book_gold_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/01/Item_Philosophies_of_Gold.png");
				$cards[] = new Card("book_gold_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/43/Item_Guide_to_Gold.png");
				$cards[] = new Card("book_gold_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/7/7f/Item_Teachings_of_Gold.png");
				// Event materials
				$cards[] = new Card("crown_of_insight", 5, "https://static.wikia.nocookie.net/gensin-impact/images/0/04/Item_Crown_of_Insight.png");
				// Weapon ascension materials
				$cards[] = new Card("decarabian_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/4/4c/Item_Scattered_Piece_of_Decarabian%27s_Dream.png");
				$cards[] = new Card("decarabian_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/8/8a/Item_Fragment_of_Decarabian%27s_Epic.png");
				$cards[] = new Card("decarabian_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/96/Item_Debris_of_Decarabian%27s_City.png");
				$cards[] = new Card("decarabian_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/d/d7/Item_Tile_of_Decarabian%27s_Tower.png");
				$cards[] = new Card("boreal_wolf_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/e/e0/Item_Boreal_Wolf%27s_Nostalgia.png");
				$cards[] = new Card("boreal_wolf_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/98/Item_Boreal_Wolf%27s_Broken_Fang.png");
				$cards[] = new Card("boreal_wolf_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/71/Item_Boreal_Wolf%27s_Cracked_Tooth.png");
				$cards[] = new Card("boreal_wolf_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/33/Item_Boreal_Wolf%27s_Milk_Tooth.png");
				$cards[] = new Card("dandelion_gladiator_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/b/b4/Item_Dream_of_the_Dandelion_Gladiator.png");
				$cards[] = new Card("dandelion_gladiator_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/40/Item_Shackles_of_the_Dandelion_Gladiator.png");
				$cards[] = new Card("dandelion_gladiator_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/a/ad/Item_Chains_of_the_Dandelion_Gladiator.png");
				$cards[] = new Card("dandelion_gladiator_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/0/05/Item_Fetters_of_the_Dandelion_Gladiator.png");
				$cards[] = new Card("guyun_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/e/e8/Item_Divine_Body_from_Guyun.png");
				$cards[] = new Card("guyun_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/94/Item_Relic_from_Guyun.png");
				$cards[] = new Card("guyun_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/c/cb/Item_Lustrous_Stone_from_Guyun.png");
				$cards[] = new Card("guyun_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/5/5d/Item_Luminous_Sands_from_Guyun.png");
				$cards[] = new Card("mist_veiled_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/a/a3/Item_Mist_Veiled_Primo_Elixir.png");
				$cards[] = new Card("mist_veiled_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/9/9b/Item_Mist_Veiled_Gold_Elixir.png");
				$cards[] = new Card("mist_veiled_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/0/0f/Item_Mist_Veiled_Mercury_Elixir.png");
				$cards[] = new Card("mist_veiled_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/a/a5/Item_Mist_Veiled_Lead_Elixir.png");
				$cards[] = new Card("aerosiderite_{}", 5, "https://static.wikia.nocookie.net/gensin-impact/images/4/48/Item_Chunk_of_Aerosiderite.png");
				$cards[] = new Card("aerosiderite_{}", 4, "https://static.wikia.nocookie.net/gensin-impact/images/1/17/Item_Bit_of_Aerosiderite.png");
				$cards[] = new Card("aerosiderite_{}", 3, "https://static.wikia.nocookie.net/gensin-impact/images/0/0d/Item_Piece_of_Aerosiderite.png");
				$cards[] = new Card("aerosiderite_{}", 2, "https://static.wikia.nocookie.net/gensin-impact/images/4/47/Item_Grain_of_Aerosiderite.png");
				// Food
				$cards[] = new Card("apple", 1, "https://static.wikia.nocookie.net/gensin-impact/images/8/8a/Item_Apple.png");
				$cards[] = new Card("sunsettia", 1, "https://static.wikia.nocookie.net/gensin-impact/images/4/45/Item_Sunsettia.png");
				$cards[] = new Card("chicken_mushroom_skewer", 1, "https://static.wikia.nocookie.net/gensin-impact/images/f/fd/Item_Chicken-Mushroom_Skewer.png");
				$cards[] = new Card("grilled_tiger_fish", 1, "https://static.wikia.nocookie.net/gensin-impact/images/d/d4/Item_Grilled_Tiger_Fish.png");
				$cards[] = new Card("mint_jelly", 1, "https://static.wikia.nocookie.net/gensin-impact/images/7/79/Item_Mint_Jelly.png");
				$cards[] = new Card("mondstadt_grilled_fish", 1, "https://static.wikia.nocookie.net/gensin-impact/images/c/c9/Item_Mondstadt_Grilled_Fish.png");
				$cards[] = new Card("mora_meat", 1, "https://static.wikia.nocookie.net/gensin-impact/images/8/8f/Item_Mora_Meat.png");
				$cards[] = new Card("pops_teas", 1, "https://static.wikia.nocookie.net/gensin-impact/images/5/52/Item_Pop%27s_Teas.png");
				$cards[] = new Card("radish_veggie_soup", 1, "https://static.wikia.nocookie.net/gensin-impact/images/7/7e/Item_Radish_Veggie_Soup.png");
				$cards[] = new Card("rice_buns", 1, "https://static.wikia.nocookie.net/gensin-impact/images/a/a4/Item_Rice_Buns.png");
				$cards[] = new Card("steak", 1, "https://static.wikia.nocookie.net/gensin-impact/images/a/a0/Item_Steak.png");
				$cards[] = new Card("stir_fried_filet", 1, "https://static.wikia.nocookie.net/gensin-impact/images/0/0f/Item_Stir-Fried_Filet.png");
				$cards[] = new Card("teyvat_fried_egg", 1, "https://static.wikia.nocookie.net/gensin-impact/images/2/20/Item_Teyvat_Fried_Egg.png");
				$cards[] = new Card("almond_tofu", 2, "https://static.wikia.nocookie.net/gensin-impact/images/5/5f/Item_Almond_Tofu.png");
				$cards[] = new Card("apple_cider", 2, "https://static.wikia.nocookie.net/gensin-impact/images/c/c3/Item_Apple_Cider.png");
				$cards[] = new Card("berry_and_mint_burst", 2, "https://static.wikia.nocookie.net/gensin-impact/images/b/bc/Item_Berry_%26_Mint_Burst.png");
				$cards[] = new Card("crab_roe_tofu", 2, "https://static.wikia.nocookie.net/gensin-impact/images/7/7b/Item_Crab_Roe_Tofu.png");
				$cards[] = new Card("cream_stew", 2, "https://static.wikia.nocookie.net/gensin-impact/images/7/7b/Item_Cream_Stew.png");
				$cards[] = new Card("crystal_shrimp", 2, "https://static.wikia.nocookie.net/gensin-impact/images/4/4a/Item_Crystal_Shrimp.png");
				$cards[] = new Card("fishermans_toast", 2, "https://static.wikia.nocookie.net/gensin-impact/images/4/4c/Item_Fisherman%27s_Toast.png");
				$cards[] = new Card("flaming_red_bolognese", 2, "https://static.wikia.nocookie.net/gensin-impact/images/7/73/Item_Flaming_Red_Bolognese.png");
				$cards[] = new Card("fried_radish_balls", 2, "https://static.wikia.nocookie.net/gensin-impact/images/f/f6/Item_Fried_Radish_Balls.png");
				$cards[] = new Card("goulash", 2, "https://static.wikia.nocookie.net/gensin-impact/images/2/2f/Item_Goulash.png");
				$cards[] = new Card("jewelry_soup", 2, "https://static.wikia.nocookie.net/gensin-impact/images/5/5b/Item_Jewelry_Soup.png");
				$cards[] = new Card("jueyun_chili_chicken", 2, "https://static.wikia.nocookie.net/gensin-impact/images/7/72/Item_Jueyun_Chili_Chicken.png");
				$cards[] = new Card("lotus_seed_and_bird_egg_soup", 2, "https://static.wikia.nocookie.net/gensin-impact/images/5/53/Item_Lotus_Seed_and_Bird_Egg_Soup.png");
				$cards[] = new Card("matsutake_meat_rolls", 2, "https://static.wikia.nocookie.net/gensin-impact/images/1/15/Item_Matsutake_Meat_Rolls.png");
				$cards[] = new Card("mint_salad", 2, "https://static.wikia.nocookie.net/gensin-impact/images/c/c2/Item_Mint_Salad.png");
				$cards[] = new Card("noodles_with_mountain_delicacies", 2, "https://static.wikia.nocookie.net/gensin-impact/images/7/7e/Item_Noodles_with_Mountain_Delicacies.png");
				$cards[] = new Card("northern_smoked_chicken", 2, "https://static.wikia.nocookie.net/gensin-impact/images/0/03/Item_Northern_Smoked_Chicken.png");
				$cards[] = new Card("satisfying_salad", 2, "https://static.wikia.nocookie.net/gensin-impact/images/8/8f/Item_Satisfying_Salad.png");
				$cards[] = new Card("stir_fried_fish_noodles", 2, "https://static.wikia.nocookie.net/gensin-impact/images/9/98/Item_Stir-Fried_Fish_Noodles.png");
				$cards[] = new Card("stone_harbor_delicacies", 2, "https://static.wikia.nocookie.net/gensin-impact/images/7/70/Item_Stone_Harbor_Delicacies.png");
				$cards[] = new Card("sweet_madame", 2, "https://static.wikia.nocookie.net/gensin-impact/images/1/12/Item_Sweet_Madame.png");
				$cards[] = new Card("tea_break_pancake", 2, "https://static.wikia.nocookie.net/gensin-impact/images/2/25/Item_Tea_Break_Pancake.png");
				$cards[] = new Card("vegetarian_abalone", 2, "https://static.wikia.nocookie.net/gensin-impact/images/3/37/Item_Vegetarian_Abalone.png");
				$cards[] = new Card("wolfhook_juice", 2, "https://static.wikia.nocookie.net/gensin-impact/images/6/6e/Item_Wolfhook_Juice.png");
				$cards[] = new Card("pile_em_up", 3, "https://static.wikia.nocookie.net/gensin-impact/images/e/e3/Item_%22Pile_%27Em_Up%22.png");
				$cards[] = new Card("adventurers_breakfast_sandwich", 3, "https://static.wikia.nocookie.net/gensin-impact/images/c/c4/Item_Adventurer%27s_Breakfast_Sandwich.png");
				$cards[] = new Card("bamboo_shoot_soup", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/9d/Item_Bamboo_Shoot_Soup.png");
				$cards[] = new Card("barbatos_ratatouille", 3, "https://static.wikia.nocookie.net/gensin-impact/images/a/a3/Item_Barbatos_Ratatouille.png");
				$cards[] = new Card("black_back_perch_stew", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/31/Item_Black-Back_Perch_Stew.png");
				$cards[] = new Card("calla_lily_seafood_soup", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/4e/Item_Calla_Lily_Seafood_Soup.png");
				$cards[] = new Card("cold_cut_platter", 3, "https://static.wikia.nocookie.net/gensin-impact/images/1/16/Item_Cold_Cut_Platter.png");
				$cards[] = new Card("come_and_get_it", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/f1/Item_Come_and_Get_It.png");
				$cards[] = new Card("crab_ham_and_veggie_bake", 3, "https://static.wikia.nocookie.net/gensin-impact/images/a/af/Item_Crab%2C_Ham_%26_Veggie_Bake.png");
				$cards[] = new Card("crispy_potato_shrimp_platter", 3, "https://static.wikia.nocookie.net/gensin-impact/images/a/ab/Item_Crispy_Potato_Shrimp_Platter.png");
				$cards[] = new Card("cured_pork_dry_hotpot", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/4f/Item_Cured_Pork_Dry_Hotpot.png");
				$cards[] = new Card("fragrant_mashed_potatoes", 3, "https://static.wikia.nocookie.net/gensin-impact/images/0/0e/Item_Fragrant_Mashed_Potatoes.png");
				$cards[] = new Card("fullmoon_egg", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/bf/Item_Fullmoon_Egg.png");
				$cards[] = new Card("golden_chicken_burger", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/b3/Item_Golden_Chicken_Burger.png");
				$cards[] = new Card("golden_shrimp_balls", 3, "https://static.wikia.nocookie.net/gensin-impact/images/d/dc/Item_Golden_Shrimp_Balls.png");
				$cards[] = new Card("jueyun_guoba", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/39/Item_Jueyun_Guoba.png");
				$cards[] = new Card("lotus_flower_crisp", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/b7/Item_Lotus_Flower_Crisp.png");
				$cards[] = new Card("minty_meat_rolls", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/40/Item_Minty_Meat_Rolls.png");
				$cards[] = new Card("mondstadt_hash_brown", 3, "https://static.wikia.nocookie.net/gensin-impact/images/e/e8/Item_Mondstadt_Hash_Brown.png");
				$cards[] = new Card("mushroom_pizza", 3, "https://static.wikia.nocookie.net/gensin-impact/images/e/e2/Item_Mushroom_Pizza.png");
				$cards[] = new Card("northern_apple_stew", 3, "https://static.wikia.nocookie.net/gensin-impact/images/8/80/Item_Northern_Apple_Stew.png");
				$cards[] = new Card("qingce_stir_fry", 3, "https://static.wikia.nocookie.net/gensin-impact/images/7/71/Item_Qingce_Stir_Fry.png");
				$cards[] = new Card("sauteed_matsutake", 3, "https://static.wikia.nocookie.net/gensin-impact/images/5/5f/Item_Saut%C3%A9ed_Matsutake.png");
				$cards[] = new Card("squirrel_fish", 3, "https://static.wikia.nocookie.net/gensin-impact/images/c/ce/Item_Squirrel_Fish.png");
				$cards[] = new Card("sticky_honey_roast", 3, "https://static.wikia.nocookie.net/gensin-impact/images/8/85/Item_Sticky_Honey_Roast.png");
				$cards[] = new Card("stir_fried_shrimp", 3, "https://static.wikia.nocookie.net/gensin-impact/images/6/62/Item_Stir-Fried_Shrimp.png");
				$cards[] = new Card("sunshine_sprat", 3, "https://static.wikia.nocookie.net/gensin-impact/images/5/5a/Item_Sunshine_Sprat.png");
				$cards[] = new Card("triple_layered_consomme", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/be/Item_Triple-Layered_Consomm%C3%A9.png");
				$cards[] = new Card("universal_peace", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/9c/Item_Universal_Peace.png");
				$cards[] = new Card("zhongyuan_chop_suey", 3, "https://static.wikia.nocookie.net/gensin-impact/images/8/8c/Item_Zhongyuan_Chop_Suey.png");
				$cards[] = new Card("chicken_tofu_pudding", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/db/Item_Chicken_Tofu_Pudding.png");
				$cards[] = new Card("golden_crab", 4, "https://static.wikia.nocookie.net/gensin-impact/images/a/a3/Item_Golden_Crab.png");
				$cards[] = new Card("golden_fried_chicken", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/37/Item_Golden_Fried_Chicken.png");
				$cards[] = new Card("jade_parcels", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b3/Item_Jade_Parcels.png");
				$cards[] = new Card("moon_pie", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/38/Item_Moon_Pie.png");
				$cards[] = new Card("tianshu_meat", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/f3/Item_Tianshu_Meat.png");
				$cards[] = new Card("adeptus_temptation", 5, "https://static.wikia.nocookie.net/gensin-impact/images/5/5e/Item_Adeptus%27_Temptation.png");
				// Potions
				$cards[] = new Card("essential_oil_gushing", 3, "https://static.wikia.nocookie.net/gensin-impact/images/d/d9/Item_Gushing_Essential_Oil.png");
				$cards[] = new Card("potion_windbarrier", 3, "https://static.wikia.nocookie.net/gensin-impact/images/8/84/Item_Windbarrier_Potion.png");
				$cards[] = new Card("essential_oil_frosting", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/46/Item_Frosting_Essential_Oil.png");
				$cards[] = new Card("potion_frostshield", 3, "https://static.wikia.nocookie.net/gensin-impact/images/c/cf/Item_Frostshield_Potion.png");
				$cards[] = new Card("essential_oil_shocking", 3, "https://static.wikia.nocookie.net/gensin-impact/images/0/00/Item_Shocking_Essential_Oil.png");
				$cards[] = new Card("potion_insulation", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/ba/Item_Insulation_Potion.png");
				$cards[] = new Card("essential_oil_unmoving", 3, "https://static.wikia.nocookie.net/gensin-impact/images/3/36/Item_Unmoving_Essential_Oil.png");
				$cards[] = new Card("potion_dustproof", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/bd/Item_Dustproof_Potion.png");
				$cards[] = new Card("essential_oil_streaming", 3, "https://static.wikia.nocookie.net/gensin-impact/images/0/08/Item_Streaming_Essential_Oil.png");
				$cards[] = new Card("potion_desiccant", 3, "https://static.wikia.nocookie.net/gensin-impact/images/8/85/Item_Desiccant_Potion.png");
				$cards[] = new Card("essential_oil_flaming", 3, "https://static.wikia.nocookie.net/gensin-impact/images/b/b9/Item_Flaming_Essential_Oil.png");
				$cards[] = new Card("potion_heatshield", 3, "https://static.wikia.nocookie.net/gensin-impact/images/4/4f/Item_Heatshield_Potion.png");
				// Teeth
				$cards[] = new Card("strange_tooth", 0, "https://static.wikia.nocookie.net/gensin-impact/images/9/9d/Item_Strange_Tooth.png");
				$cards[] = new Card("vitalized_dragontooth", 0, "https://static.wikia.nocookie.net/gensin-impact/images/8/8c/Item_Vitalized_Dragontooth.png");
				// Colors
				$cards[] = new Card("red_dye", 0, "https://static.wikia.nocookie.net/gensin-impact/images/6/64/Item_Red_Dye.png");
				$cards[] = new Card("yellow_dye", 0, "https://static.wikia.nocookie.net/gensin-impact/images/7/7a/Item_Yellow_Dye.png");
				$cards[] = new Card("blue_dye", 0, "https://static.wikia.nocookie.net/gensin-impact/images/6/62/Item_Blue_Dye.png");
				// Tissues
				$cards[] = new Card("fabric", 0, "https://static.wikia.nocookie.net/gensin-impact/images/6/6f/Item_Fabric.png");
				// Woods
				$cards[] = new Card("wood_fir", 1, "https://static.wikia.nocookie.net/gensin-impact/images/d/d1/Item_Fir_Wood.png");
				$cards[] = new Card("wood_fragrant_cedar", 1, "https://static.wikia.nocookie.net/gensin-impact/images/6/65/Item_Fragrant_Cedar_Wood.png");
				$cards[] = new Card("wood_bamboo_segment", 1, "https://static.wikia.nocookie.net/gensin-impact/images/5/55/Item_Bamboo_Segment.png");
				$cards[] = new Card("wood_sandbearer", 1, "https://static.wikia.nocookie.net/gensin-impact/images/3/36/Item_Sandbearer_Wood.png");
				$cards[] = new Card("wood_pine", 1, "https://static.wikia.nocookie.net/gensin-impact/images/8/8e/Item_Pine_Wood.png");
				$cards[] = new Card("wood_cuihua", 1, "https://static.wikia.nocookie.net/gensin-impact/images/c/c5/Item_Cuihua_Wood.png");
				$cards[] = new Card("wood_birch", 1, "https://static.wikia.nocookie.net/gensin-impact/images/d/d8/Item_Birch_Wood.png");
				// Forging materials
				$cards[] = new Card("iron_chunk", 0, "https://static.wikia.nocookie.net/gensin-impact/images/f/f0/Item_Iron_Chunk.png");
				$cards[] = new Card("white_iron_chunk", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/d5/Item_White_Iron_Chunk.png");
				$cards[] = new Card("crystal_chunk", 0, "https://static.wikia.nocookie.net/gensin-impact/images/6/6e/Item_Crystal_Chunk.png");
				$cards[] = new Card("magical_crystal_chunk", 0, "https://static.wikia.nocookie.net/gensin-impact/images/8/85/Item_Magical_Crystal_Chunk.png");
				$cards[] = new Card("starsilver", 0, "https://static.wikia.nocookie.net/gensin-impact/images/1/19/Item_Starsilver.png");
				$cards[] = new Card("northlander_bow_billet", 4, "https://static.wikia.nocookie.net/gensin-impact/images/0/0f/Item_Northlander_Bow_Billet.png");
				$cards[] = new Card("northlander_catalyst_billet", 4, "https://static.wikia.nocookie.net/gensin-impact/images/3/3b/Item_Northlander_Catalyst_Billet.png");
				$cards[] = new Card("northlander_claymore_billet", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/db/Item_Northlander_Claymore_Billet.png");
				$cards[] = new Card("northlander_polearm_billet", 4, "https://static.wikia.nocookie.net/gensin-impact/images/a/a5/Item_Northlander_Polearm_Billet.png");
				$cards[] = new Card("northlander_sword_billet", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/c2/Item_Northlander_Sword_Billet.png");
				// Misc.
				$cards[] = new Card("electro_crystal", 0, "https://static.wikia.nocookie.net/gensin-impact/images/9/99/Item_Electro_Crystal.png");
				$cards[] = new Card("lizard_tail", 0, "https://static.wikia.nocookie.net/gensin-impact/images/2/2f/Item_Lizard_Tail.png");
				$cards[] = new Card("mist_flower_corolla", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/b4/Item_Mist_Flower_Corolla.png");
				$cards[] = new Card("flaming_flower_stamen", 0, "https://static.wikia.nocookie.net/gensin-impact/images/9/97/Item_Flaming_Flower_Stamen.png");
				// Cooking ingredients
				$cards[] = new Card("almond", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/30/Item_Almond.png");
				$cards[] = new Card("bacon", 0, "https://static.wikia.nocookie.net/gensin-impact/images/1/16/Item_Bacon.png");
				$cards[] = new Card("bamboo_shoot", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/3d/Item_Bamboo_Shoot.png");
				$cards[] = new Card("berry", 0, "https://static.wikia.nocookie.net/gensin-impact/images/6/65/Item_Berry.png");
				$cards[] = new Card("bird_egg", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/dc/Item_Bird_Egg.png");
				$cards[] = new Card("butter", 0, "https://static.wikia.nocookie.net/gensin-impact/images/7/78/Item_Butter.png");
				$cards[] = new Card("cabbage", 0, "https://static.wikia.nocookie.net/gensin-impact/images/c/ca/Item_Cabbage.png");
				$cards[] = new Card("carrot", 0, "https://static.wikia.nocookie.net/gensin-impact/images/1/1e/Item_Carrot.png");
				$cards[] = new Card("cheese", 0, "https://static.wikia.nocookie.net/gensin-impact/images/a/ac/Item_Cheese.png");
				$cards[] = new Card("chilled_meat", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/da/Item_Chilled_Meat.png");
				$cards[] = new Card("crab", 0, "https://static.wikia.nocookie.net/gensin-impact/images/0/0b/Item_Crab.png");
				$cards[] = new Card("crab_roe", 0, "https://static.wikia.nocookie.net/gensin-impact/images/2/25/Item_Crab_Roe.png");
				$cards[] = new Card("cream", 0, "https://static.wikia.nocookie.net/gensin-impact/images/f/f3/Item_Cream.png");
				$cards[] = new Card("fish", 0, "https://static.wikia.nocookie.net/gensin-impact/images/e/ef/Item_Fish.png");
				$cards[] = new Card("flour", 0, "https://static.wikia.nocookie.net/gensin-impact/images/8/87/Item_Flour.png");
				$cards[] = new Card("fowl", 0, "https://static.wikia.nocookie.net/gensin-impact/images/f/f9/Item_Fowl.png");
				$cards[] = new Card("ham", 0, "https://static.wikia.nocookie.net/gensin-impact/images/c/c8/Item_Ham.png");
				$cards[] = new Card("horsetail", 0, "https://static.wikia.nocookie.net/gensin-impact/images/7/7b/Item_Horsetail.png");
				$cards[] = new Card("jam", 0, "https://static.wikia.nocookie.net/gensin-impact/images/c/c2/Item_Jam.png");
				$cards[] = new Card("lotus_head", 0, "https://static.wikia.nocookie.net/gensin-impact/images/0/05/Item_Lotus_Head.png");
				$cards[] = new Card("matsutake", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/39/Item_Matsutake.png");
				$cards[] = new Card("milk", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/37/Item_Milk.png");
				$cards[] = new Card("mint", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/bc/Item_Mint.png");
				$cards[] = new Card("mushroom", 0, "https://static.wikia.nocookie.net/gensin-impact/images/c/cb/Item_Mushroom.png");
				$cards[] = new Card("onion", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/b3/Item_Onion.png");
				$cards[] = new Card("pepper", 0, "https://static.wikia.nocookie.net/gensin-impact/images/e/eb/Item_Pepper.png");
				$cards[] = new Card("pinecone", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/35/Item_Pinecone.png");
				$cards[] = new Card("potato", 0, "https://static.wikia.nocookie.net/gensin-impact/images/2/2b/Item_Potato.png");
				$cards[] = new Card("radish", 0, "https://static.wikia.nocookie.net/gensin-impact/images/4/45/Item_Radish.png");
				$cards[] = new Card("raw_meat", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/bf/Item_Raw_Meat.png");
				$cards[] = new Card("rice", 0, "https://static.wikia.nocookie.net/gensin-impact/images/0/04/Item_Rice.png");
				$cards[] = new Card("salt", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/b5/Item_Salt.png");
				$cards[] = new Card("sausage", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/ba/Item_Sausage.png");
				$cards[] = new Card("shrimp_meat", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/d0/Item_Shrimp_Meat.png");
				$cards[] = new Card("smoked_fowl", 0, "https://static.wikia.nocookie.net/gensin-impact/images/b/bc/Item_Smoked_Fowl.png");
				$cards[] = new Card("snapdragon", 0, "https://static.wikia.nocookie.net/gensin-impact/images/7/7a/Item_Snapdragon.png");
				$cards[] = new Card("sugar", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/d9/Item_Sugar.png");
				$cards[] = new Card("sweet_flower", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/3a/Item_Sweet_Flower.png");
				$cards[] = new Card("tofu", 0, "https://static.wikia.nocookie.net/gensin-impact/images/a/ad/Item_Tofu.png");
				$cards[] = new Card("tomato", 0, "https://static.wikia.nocookie.net/gensin-impact/images/f/f1/Item_Tomato.png");
				$cards[] = new Card("wheat", 0, "https://static.wikia.nocookie.net/gensin-impact/images/0/06/Item_Wheat.png");
				// Local specialties
				$cards[] = new Card("calla_lily", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/de/Item_Calla_Lily.png");
				$cards[] = new Card("cecilia", 0, "https://static.wikia.nocookie.net/gensin-impact/images/9/9b/Item_Cecilia.png");
				$cards[] = new Card("cor_lapis", 0, "https://static.wikia.nocookie.net/gensin-impact/images/a/aa/Item_Cor_Lapis.png");
				$cards[] = new Card("dandelion_seed", 0, "https://static.wikia.nocookie.net/gensin-impact/images/d/de/Item_Dandelion_Seed.png");
				$cards[] = new Card("glaze_lily", 0, "https://static.wikia.nocookie.net/gensin-impact/images/e/e1/Item_Glaze_Lily.png");
				$cards[] = new Card("jueyun_chili", 0, "https://static.wikia.nocookie.net/gensin-impact/images/1/13/Item_Jueyun_Chili.png");
				$cards[] = new Card("noctilucous_jade", 0, "https://static.wikia.nocookie.net/gensin-impact/images/8/84/Item_Noctilucous_Jade.png");
				$cards[] = new Card("philanemo_mushroom", 0, "https://static.wikia.nocookie.net/gensin-impact/images/8/8a/Item_Philanemo_Mushroom.png");
				$cards[] = new Card("qingxin", 0, "https://static.wikia.nocookie.net/gensin-impact/images/2/2d/Item_Qingxin.png");
				$cards[] = new Card("sea_ganoderma", 0, "https://static.wikia.nocookie.net/gensin-impact/images/6/6d/Item_Sea_Ganoderma.png");
				$cards[] = new Card("silk_flower", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/37/Item_Silk_Flower.png");
				$cards[] = new Card("small_lamp_grass", 0, "https://static.wikia.nocookie.net/gensin-impact/images/1/17/Item_Small_Lamp_Grass.png");
				$cards[] = new Card("starconch", 0, "https://static.wikia.nocookie.net/gensin-impact/images/4/46/Item_Starconch.png");
				$cards[] = new Card("valberry", 0, "https://static.wikia.nocookie.net/gensin-impact/images/e/ed/Item_Valberry.png");
				$cards[] = new Card("violetgrass", 0, "https://static.wikia.nocookie.net/gensin-impact/images/5/5d/Item_Violetgrass.png");
				$cards[] = new Card("windwheel_aster", 0, "https://static.wikia.nocookie.net/gensin-impact/images/3/32/Item_Windwheel_Aster.png");
				$cards[] = new Card("wolfhook", 0, "https://static.wikia.nocookie.net/gensin-impact/images/5/57/Item_Wolfhook.png");
				// Gadgets
				$cards[] = new Card("serenitea_pot", 5, "https://static.wikia.nocookie.net/gensin-impact/images/5/5a/Item_Serenitea_Pot.png");
				$cards[] = new Card("anemo_treasure_compass", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/e3/Item_Anemo_Treasure_Compass.png");
				$cards[] = new Card("endora", 4, "https://static.wikia.nocookie.net/gensin-impact/images/c/c7/Item_Endora.png");
				$cards[] = new Card("geo_treasure_compass", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/f3/Item_Geo_Treasure_Compass.png");
				$cards[] = new Card("inquisitive_endora", 4, "https://static.wikia.nocookie.net/gensin-impact/images/2/28/Item_Inquisitive_Endora.png");
				$cards[] = new Card("kamera", 4, "https://static.wikia.nocookie.net/gensin-impact/images/7/76/Item_Kamera.png");
				$cards[] = new Card("kurious_kamera", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/fc/Item_Kurious_Kamera.png");
				$cards[] = new Card("mini_seelie_curcuma", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/e4/Item_Mini_Seelie_Curcuma.png");
				$cards[] = new Card("mini_seelie_dayflower", 4, "https://static.wikia.nocookie.net/gensin-impact/images/5/5a/Item_Mini_Seelie_Dayflower.png");
				$cards[] = new Card("mini_seelie_rose", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/d3/Item_Mini_Seelie_Ros%C3%A9.png");
				$cards[] = new Card("nre_menu_30", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b7/Item_NRE_%28Menu_30%29.png");
				$cards[] = new Card("parametric_transformer", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/f1/Item_Parametric_Transformer.png");
				$cards[] = new Card("portable_waypoint", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/fa/Item_Portable_Waypoint.png");
				$cards[] = new Card("special_kamera", 4, "https://static.wikia.nocookie.net/gensin-impact/images/e/e2/Item_Special_Kamera.png");
				$cards[] = new Card("treasure_seeking_seelie", 4, "https://static.wikia.nocookie.net/gensin-impact/images/f/fa/Item_Treasure-Seeking_Seelie.png");
				$cards[] = new Card("waverider_repair_toolbox", 4, "https://static.wikia.nocookie.net/gensin-impact/images/d/d7/Item_Waverider_Repair_Toolbox.png");
				$cards[] = new Card("wind_catcher", 4, "https://static.wikia.nocookie.net/gensin-impact/images/5/5b/Item_Wind_Catcher.png");
				$cards[] = new Card("wind_blessed_harpastum", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b6/Item_Wind-Blessed_Harpastum.png");
				$cards[] = new Card("windblume_festival_commemorative_balloon", 4, "https://static.wikia.nocookie.net/gensin-impact/images/b/b6/Item_Windblume_Festival_Commemorative_Balloon.png");
				$cards[] = new Card("windsong_lyre", 4, "https://static.wikia.nocookie.net/gensin-impact/images/4/4a/Item_Windsong_Lyre.png");
				$cards[] = new Card("adepti_seekers_stove", 3, "https://static.wikia.nocookie.net/gensin-impact/images/6/6a/Item_Adepti_Seeker%27s_Stove.png");
				$cards[] = new Card("anemoculus_resonance_stone", 3, "https://static.wikia.nocookie.net/gensin-impact/images/9/9e/Item_Anemoculus_Resonance_Stone.png");
				$cards[] = new Card("floaty_splody", 3, "https://static.wikia.nocookie.net/gensin-impact/images/6/66/Item_Floaty_Splody.png");
				$cards[] = new Card("geoculus_resonance_stone", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/f3/Item_Geoculus_Resonance_Stone.png");
				$cards[] = new Card("hot_pod", 3, "https://static.wikia.nocookie.net/gensin-impact/images/a/a9/Item_Hot_Pod.png");
				$cards[] = new Card("straight_shooter", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/f4/Item_Straight_Shooter.png");
				$cards[] = new Card("warming_bottle", 3, "https://static.wikia.nocookie.net/gensin-impact/images/f/fe/Item_Warming_Bottle.png");
				
				$map = [];
				foreach($cards as $card) {
					$map[$card->id] = $card;
				}
				
				Card::$allCards = $map;
			}
			
			return Card::$allCards;
		}
	}
?>
