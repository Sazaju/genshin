package fr.sazaju.genshin.service.controller.coder;

import java.util.List;
import java.util.stream.Collectors;
import java.util.stream.Stream;

import fr.sazaju.genshin.PlayerState;
import fr.sazaju.genshin.Rarity;
import fr.sazaju.genshin.item.ItemEntry;
import fr.sazaju.genshin.item.ItemState;
import fr.sazaju.genshin.item.ItemType;
import fr.sazaju.genshin.item.simple.CommonAscensionMaterial;

public class PlayerStateDefinition {


	private static final Property<PlayerState, ItemEntry> items = //
			// FIXME Support the whole list
			Property.onDefinition(ItemEntryDefinition.V1, playerState -> {
				List<ItemEntry> items = playerState.stream().collect(Collectors.toList());
				return items.isEmpty() ? ItemEntry.of(CommonAscensionMaterial.NECTAR.itemState(Rarity.TWO_STARS)) : items.get(0);
			});

	public static final Definition<PlayerState> V1 = Definition.onProperties(//
			List.of(//
					items //
			), //
			(input) -> {
				return PlayerState.fromItemEntries(Stream.of(input.readValue(items)));
			});

	public static class ItemEntryDefinition {

		private static final Property<ItemEntry, ItemState<?>> itemState = //
				Property.onDefinition(ItemStateDefinition.V1, itemEntry -> itemEntry.getItem());
		private static final Property<ItemEntry, Integer> quantity = //
				Property.onClass(Integer.class, itemEntry -> itemEntry.getQuantity());

		public static final Definition<ItemEntry> V1 = Definition.onProperties(//
				List.of(//
						itemState, //
						quantity //
				), //
				(input) -> {
					ItemState<?> state = input.readValue(itemState);
					return ItemEntry.of(state, input.readValue(quantity));
				});

	}
	
	public static class ItemStateDefinition {

		private static final Property<ItemState<?>, ItemType> type = //
				Property.onDefinition(ItemTypeDefinition.V1, itemState -> itemState.getType());
		private static final Property<ItemState<?>, Integer> rarity = //
				Property.onClass(Integer.class, itemState -> itemState.getRarity().stars);

		public static final Definition<ItemState<?>> V1 = Definition.onProperties(//
				List.of(//
						type, //
						rarity //
				), //
				(input) -> {
					// TODO Support ItemState extensions
					ItemType itemType = input.readValue(type);
					return new ItemState<ItemType>(itemType, Rarity.valueOf(input.readValue(rarity)));
				});

	}
	
	public static class ItemTypeDefinition {

		private static final Property<ItemType, String> typeClass = //
				Property.onClass(String.class, itemType -> {
					return itemType.getClass().getName();
				});
		private static final Property<ItemType, String> name = //
				Property.onClass(String.class, itemType -> {
					// TODO Consider each specific type
					return itemType.toString();
				});

		public static final Definition<ItemType> V1 = Definition.onProperties(//
				List.of(//
						typeClass, //
						name //
				), //
				(input) -> {
					String className = input.readValue(typeClass);
					if (className.equals(CommonAscensionMaterial.class.getName())) {
						return Enum.valueOf(CommonAscensionMaterial.class, input.readValue(name));
					}
					throw new RuntimeException("Not implemented yet for: "+className);
				});

	}
}
