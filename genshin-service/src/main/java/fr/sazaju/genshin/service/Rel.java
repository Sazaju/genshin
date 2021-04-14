package fr.sazaju.genshin.service;

import org.springframework.hateoas.IanaLinkRelations;
import org.springframework.hateoas.LinkRelation;

public class Rel {
	public static class Iana {
		public static final LinkRelation SELF = IanaLinkRelations.SELF;
		public static final LinkRelation ABOUT = IanaLinkRelations.ABOUT;
		public static final LinkRelation AUTHOR = IanaLinkRelations.AUTHOR;
	}

	public static class Global {
		public static final LinkRelation SOURCE = LinkRelation.of("source");
	}

	public static class Packs {
		public static final LinkRelation PACKS = LinkRelation.of("packs");
		public static final LinkRelation FIRST_ORDER = LinkRelation.of("firstOrder");
		public static final LinkRelation NEXT_ORDERS = LinkRelation.of("nextOrders");
	}

	public static class Banners {
		public static final LinkRelation BANNERS = LinkRelation.of("banners");
		public static final LinkRelation CHARACTERS = LinkRelation.of("characters");
		public static final LinkRelation SETTINGS = LinkRelation.of("settings");
	}
}
