package fr.sazaju.genshin.service.controller;

import static fr.sazaju.genshin.service.controller.Linker.*;

import java.io.IOException;
import java.util.List;
import java.util.stream.Collectors;

import org.springframework.hateoas.CollectionModel;
import org.springframework.hateoas.EntityModel;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

import fr.sazaju.genshin.PlayerState;
import fr.sazaju.genshin.service.controller.coder.PlayerStateCoder;
import fr.sazaju.genshin.tab.Slot;
import fr.sazaju.genshin.tab.Tab;
import fr.sazaju.genshin.tab.TabContent;

@Controller
// TODO Check HAL specifications: https://stateless.group/hal_specification.html
// TODO Check media types RFC: https://tools.ietf.org/html/rfc6838
//@EnableHypermediaSupport(type = HypermediaType.HAL)
//@EnableHypermediaSupport(type = HypermediaType.HAL_FORMS)
//@RequestMapping(value = "/banners/character", produces = "application/hal+json")
@RequestMapping(value = "/player", produces = "application/prs.hal-forms+json")
public class PlayerController {

	@GetMapping
	@ResponseBody
	public EntityModel<?> getPlayer() {
		PlayerState playerState = PlayerState.empty();
		// TODO state representation
		return allLinks().decoratePlayer(EntityModel.of(playerState), this::serializePlayerState);
	}

	@GetMapping("/{serial}")
	@ResponseBody
	public EntityModel<?> getPlayer(@PathVariable String serial) {
		PlayerState playerState = deserializePlayerState(serial);
		// TODO state representation
		return allLinks().decoratePlayer(EntityModel.of(playerState), this::serializePlayerState);
	}

	@GetMapping("/{serial}/ascension-materials")
	@ResponseBody
	public CollectionModel<?> getAscensionMaterials(@PathVariable String serial) {
		PlayerState playerState = deserializePlayerState(serial);
		TabContent content = Tab.ASCENSION_MATERIALS.on(playerState);
		List<Slot> slots = content.streamSlots().collect(Collectors.toList());
		return allLinks().decorateSlots(CollectionModel.of(slots), playerState, this::serializePlayerState);
	}

	private String serializePlayerState(PlayerState playerState) {
		return PlayerStateCoder.generateShortestSerial(playerState);
	}

	private PlayerState deserializePlayerState(String serial) {
		try {
			return PlayerStateCoder.fromSerial(serial).decode(serial);
		} catch (IOException cause) {
			throw new RuntimeException(cause);
		}
	}
}
