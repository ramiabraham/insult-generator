<?php
/*
Plugin Name: Insult Generator
Plugin URI: http://ramiabraham.com/projects/insult-generator
Description: Generates insults for you
Version: 1.0
Author: ramiabraham
Contributors: ramiabraham
Author URI: http://ramiabraham.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; version 2 of the License (GPL v2) only.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


if ( ! function_exists( 'insult_generator_shortcode' ) ) {

	function insult_generator_shortcode( $atts, $content = null ) {

		extract(shortcode_atts(array(
					'type'    => '',
					'dirty' => ''
				), $atts));

		// Baroque by default yo

		$adjective_one = array(
			'artless',
			'bawdy',
			'beslubbering',
			'bootless',
			'churlish',
			'cockered',
			'clouted',
			'craven',
			'currish',
			'dankish',
			'dissembling',
			'droning',
			'errant',
			'fawning',
			'fobbing',
			'froward',
			'frothy',
			'gleeking',
			'goatish',
			'gorbellied',
			'impertinent',
			'infectious',
			'jarring',
			'loggerheaded',
			'lumpish',
			'mammering',
			'mangled',
			'mewling',
			'paunchy',
			'pribbling',
			'puking',
			'puny',
			'qualling',
			'rank',
			'reeky',
			'roguish',
			'ruttish',
			'saucy',
			'spleeny',
			'spongy',
			'surly',
			'tottering',
			'unmuzzled',
			'vain',
			'venomed',
			'villainous',
			'warped',
			'wayward',
			'weedy',
			'yeasty',
	   );

		$adjective_two = array(
			'base-court',
			'bat-fowling',
			'beef-witted',
			'beetle-headed',
			'boil-brained',
			'clapper-clawed',
			'clay-brained',
			'common-kissing',
			'crook-pated',
			'dismal-dreaming',
			'dizzy-eyed',
			'doghearted',
			'dread-bolted',
			'earth-vexing',
			'elf-skinned',
			'fat-kidneyed',
			'fen-sucked',
			'flap-mouthed',
			'fly-bitten',
			'folly-fallen',
			'fool-born',
			'full-gorged',
			'guts-griping',
			'half-faced',
			'hasty-witted',
			'hedge-born',
			'hell-hated',
			'idle-headed',
			'ill-breeding',
			'ill-nurtured',
			'knotty-pated',
			'milk-livered',
			'motley-minded',
			'onion-eyed',
			'plume-plucked',
			'pottle-deep',
			'pox-marked',
			'reeling-ripe',
			'rough-hewn',
			'rude-growing',
			'rump-fed',
			'shard-borne',
			'sheep-biting',
			'spur-galled',
			'swag-bellied',
			'tardy-gaited',
			'tickle-brained',
			'toad-spotted',
			'unchin-snouted',
			'weather-bitten',
		);

		$noun = array(
			'apple-john',
			'baggage',
			'barnacle',
			'bladder',
			'boar-pig',
			'bugbear',
			'bum-bailey',
			'canker-blossom',
			'clack-dish',
			'clotpole',
			'coxcomb',
			'codpiece',
			'death-token',
			'dewberry',
			'flap-dragon',
			'flax-wench',
			'flirt-gill',
			'foot-licker',
			'fustilarian',
			'giglet',
			'gudgeon',
			'haggard',
			'harpy',
			'hedge-pig',
			'horn-beast',
			'hugger-mugger',
			'joithead',
			'lewdster',
			'lout',
			'maggot-pie',
			'malt-worm',
			'mammet',
			'measle',
			'minnow',
			'miscreant',
			'moldwarp',
			'mumble-news',
			'nut-hook',
			'pigeon-egg',
			'pignut',
			'puttock',
			'pumpion',
			'ratsbane',
			'scut',
			'skainsmate',
			'strumpet',
			'varlot',
			'vassal',
			'whey-face',
			'wagtail',
		);

		// Use baroque insults

		if ( 'baroque' === $type ) {

			$adjective_one = array(
				'artless',
				'bawdy',
				'beslubbering',
				'bootless',
				'churlish',
				'cockered',
				'clouted',
				'craven',
				'currish',
				'dankish',
				'dissembling',
				'droning',
				'errant',
				'fawning',
				'fobbing',
				'froward',
				'frothy',
				'gleeking',
				'goatish',
				'gorbellied',
				'impertinent',
				'infectious',
				'jarring',
				'loggerheaded',
				'lumpish',
				'mammering',
				'mangled',
				'mewling',
				'paunchy',
				'pribbling',
				'puking',
				'puny',
				'qualling',
				'rank',
				'reeky',
				'roguish',
				'ruttish',
				'saucy',
				'spleeny',
				'spongy',
				'surly',
				'tottering',
				'unmuzzled',
				'vain',
				'venomed',
				'villainous',
				'warped',
				'wayward',
				'weedy',
				'yeasty',
			);

			$adjective_two = array(
				'base-court',
				'bat-fowling',
				'beef-witted',
				'beetle-headed',
				'boil-brained',
				'clapper-clawed',
				'clay-brained',
				'common-kissing',
				'crook-pated',
				'dismal-dreaming',
				'dizzy-eyed',
				'doghearted',
				'dread-bolted',
				'earth-vexing',
				'elf-skinned',
				'fat-kidneyed',
				'fen-sucked',
				'flap-mouthed',
				'fly-bitten',
				'folly-fallen',
				'fool-born',
				'full-gorged',
				'guts-griping',
				'half-faced',
				'hasty-witted',
				'hedge-born',
				'hell-hated',
				'idle-headed',
				'ill-breeding',
				'ill-nurtured',
				'knotty-pated',
				'milk-livered',
				'motley-minded',
				'onion-eyed',
				'plume-plucked',
				'pottle-deep',
				'pox-marked',
				'reeling-ripe',
				'rough-hewn',
				'rude-growing',
				'rump-fed',
				'shard-borne',
				'sheep-biting',
				'spur-galled',
				'swag-bellied',
				'tardy-gaited',
				'tickle-brained',
				'toad-spotted',
				'unchin-snouted',
				'weather-bitten',
			);

			$noun = array(
				'apple-john',
				'baggage',
				'barnacle',
				'bladder',
				'boar-pig',
				'bugbear',
				'bum-bailey',
				'canker-blossom',
				'clack-dish',
				'clotpole',
				'coxcomb',
				'codpiece',
				'death-token',
				'dewberry',
				'flap-dragon',
				'flax-wench',
				'flirt-gill',
				'foot-licker',
				'fustilarian',
				'giglet',
				'gudgeon',
				'haggard',
				'harpy',
				'hedge-pig',
				'horn-beast',
				'hugger-mugger',
				'joithead',
				'lewdster',
				'lout',
				'maggot-pie',
				'malt-worm',
				'mammet',
				'measle',
				'minnow',
				'miscreant',
				'moldwarp',
				'mumble-news',
				'nut-hook',
				'pigeon-egg',
				'pignut',
				'puttock',
				'pumpion',
				'ratsbane',
				'scut',
				'skainsmate',
				'strumpet',
				'varlot',
				'vassal',
				'whey-face',
				'wagtail',
				'lawyer',
			);
		}

		// Use boring modern insults. Needs work.

		elseif ( 'modern' === $type ) {

			$adjective_one = array(
				'smarmy',
				'stinky',
				'farty',
				'cheese-toothed',
				'common'
			);

			$adjective_two = array(
				'contrarian',
				'smelly',
				'toilet-breathed',
			);

			$noun = array(
				'ass-hat',
				'jerk',
				'ass-captain',
				'ass',
				'pig',
				'dick',
				'butt-burglar',
				'turd-burglar',
				'clack-dish',
				'fart-biscuit',
				'lawyer',
			);

		}

		// Use insults from the movie 'Hook'
		elseif ( 'pan' === $type || 'hook' === $type || 'peterpan' === $type || 'peter' === $type ) {

			$adjective_one = array(
				'boil-dripping',
				'beefy',
				'fart-sniffing',
				'slug-slimed',
				'pinheaded',
				'two-toned',
				'zebra-headed',
				'slime-coated',
				'pimple-farmin\'',
				'paramecium-brained',
			);

			$adjective_two = array(
				'scab-picked',
				'pimple-squeezing',
				'cheesy',
				'mung tongue',
				'camel-cake',
				'lying, crying, spying, prying',
			);

			$noun = array(
				'bubble-butt',
				'fart factory',
				'sack-of-rat-guts-in-cat-vomit',
				'finger bandage',
				'week old maggot burger with everything on it and flies on the side',
				'substitute chemistry teacher',
				'math tutor',
				'prison barber',
				'near-sighted gynecologist',
				'ultra-pig',
				'lewd, crude, rude, bag of pre-chewed food dude',
				'maggot burger',
				'lawyer',
			);

		}

		// Prepend 'fucking' to the insult

		if ( 'yes' === $dirty ) {

			return 'fucking ' . $adjective_one[array_rand($adjective_one)] . ' ' . $adjective_two[array_rand($adjective_two)] . ' ' . $noun[array_rand($noun)];

		} else {

			return $adjective_one[array_rand($adjective_one)] . ' ' . $adjective_two[array_rand($adjective_two)] . ' ' . $noun[array_rand($noun)];

		}

	}

}

add_shortcode( 'insult', 'insult_generator_shortcode' );
