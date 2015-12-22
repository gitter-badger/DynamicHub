<?php

/*
 * DynamicHub
 *
 * Copyright (C) 2015 LegendsOfMCPE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author LegendsOfMCPE
 */

namespace DynamicHub\Module;

use DynamicHub\Gamer\Gamer;
use DynamicHub\Utils\StaticTranslatable;
use DynamicHub\Utils\Translatable;

class HubModule extends Module{
	const NAME = "Hub";

	public function getName() : Translatable{
		return new StaticTranslatable(self::NAME); // TODO translate
	}

	public function onJoin(Gamer $gamer){
		// TODO: Implement onJoin() method.
	}

	public function onQuit(Gamer $gamer){
		// TODO: Implement onQuit() method.
	}
}
