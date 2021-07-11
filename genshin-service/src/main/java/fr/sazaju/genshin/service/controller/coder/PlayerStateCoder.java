package fr.sazaju.genshin.service.controller.coder;

import static fr.sazaju.genshin.service.controller.coder.PlayerStateDefinition.*;

import java.io.IOException;
import java.util.stream.Stream;

import fr.sazaju.genshin.service.controller.coder.SequentialCoder.Option;
import fr.sazaju.genshin.PlayerState;

public enum PlayerStateCoder implements Coder<PlayerState, String> {
	SEQUENTIAL(1, new SequentialCoder<>(V1)), //
	SEQUENTIAL_COMPRESSED(2, new SequentialCoder<>(V1, Option.GZIP));

	private final SerialCoder<PlayerState> serialCoder;

	private PlayerStateCoder(int version, Coder<PlayerState, byte[]> bytesCoder) {
		this.serialCoder = new SerialCoder<>(version, bytesCoder);
	}

	@Override
	public String encode(PlayerState configuration) throws IOException {
		return serialCoder.encode(configuration);
	}

	@Override
	public PlayerState decode(String serial) throws IOException {
		return serialCoder.decode(serial);
	}

	public static PlayerStateCoder fromSerial(String serial) {
		return Stream.of(values())//
				.filter(SerialCoder.fromSerial(serial, SimulatorCoder -> SimulatorCoder.serialCoder))//
				.findFirst().orElseThrow();
	}

	public static String generateShortestSerial(PlayerState configuration) {
		return Coder.generateShortestSerial(configuration, Stream.of(values()));
	}

}
