<?php declare(strict_types = 1);

namespace Ispa\Icons;

use InvalidArgumentException;

class Icons
{

	/** @var string[] */
	private $map = [
		'ČT 1 HD' => 'ct1-hd.png',
		'ČT 2 HD' => 'ct2-hd.png',
		'Nova HD' => 'nova-hd.jpg',
		'Nova Cinema HD' => 'nova-cinema-hd.jpg',
		'Nova Action HD' => 'nova-action-hd.jpg',
		'Nova 2 HD' => 'nova2-hd.jpg',
		'Nova Gold HD' => 'nova-gold-hd.jpg',
		'Prima HD' => 'prima-hd.png',
		'Prima MAX HD' => 'prima-max.png',
		'Prima Krimi HD' => 'prima-krimi.png',
		'Prima Comedy Central' => 'prima-comedy-central.png',
		'Prima Cool HD' => 'prima-cool-hd.png',
		'Prima Love HD' => 'prima-love-hd.png',
		'Barrandov TV HD' => 'barrandov-hd.png',
		'Kino Barrandov HD' => 'barrandov-kino.png',
		'Barrandov Plus HD' => 'barrandov-plus.png',
		'CT Art HD' => 'ct-art-hd.png',
		'TV NOE' => 'noe-tv.png',
		'Focus TV' => 'fokus-tv.png', //TODO - našel jsem Fokus TV, jde o totéž?
		'Praha TV' => 'praha-tv.png',
		'Mnau TV HD' => 'mnau-tv.png',
		'Hobby TV HD' => 'hobby-tv.png',
		'B-TV' => 'b-tv.png', //TODO - b-tv je více, jde o správnou? https://www.b-tv.cz
		'STV 1 HD' => 'stv1.png',
		'STV 2 HD' => 'stv2.png',
		'JOJ Family HD' => 'joj-family.png',
		'Markíza International HD' => 'markiza-international.png',
		'TV Lux HD' => 'lux-tv.png',
		'TV8 HD' => '8-tv.png',
		'CT :D HD' => 'ct-d-hd.png',
		'tuty' => 'tuty.png', //TODO - prý už nevysílá - https://tuty.tv
		'KiKA' => 'kika.png',
		'Óčko' => 'ocko.png',
		'Óčko Star' => 'ocko-star.png',
		'Retro Music TV' => 'retro-music-tv.png',
		'Šlágr TV HD' => 'slagr-tv.png',
		'Šlágr TV 2' => 'slagr-tv-2.png',
		'ČT 24 HD' => 'ct24-hd.png',
		'Seznam TV HD' => 'seznam-tv.png',
		'France24' => 'france-24.png',
		'EbS' => 'ebs-hd.png',
		'EbS+' => 'ebs-plus.png',
		'Sky News' => 'sky-news.png',
		'BBC World News HD' => 'bbc-world-news.png',
		'RT HD' => 'rt-hd.png',
		'ZDF info' => 'zdf-info.png',
		'OTV Ukraine' => 'o-tv-music.png',
		'Bloomberg Europe' => 'bloomberg-tv-europe.png',
		'Al Jazeera' => 'aljazeera.png',
		'Prima ZOOM HD' => 'prima-zoom-hd.png',
		'Mňam TV HD' => 'mnam-tv.png',
		'Kino Svět' => 'kinosvet.png',
		'RT Doc HD' => 'rt-doc-hd.png',
		'NASA TV HD' => 'nasa-tv.png',
		'regionalnitelevize.cz' => 'regionalni-televize.png',
		'OKO1 HD' => 'oko1.png', //TODO - snad jde o správnou televizi - prý existuje jen v síti kabel1 - http://www.kabel1.cz/wordpress/oko1/
		'Regionální televize Litoměřicko' => 'regionalni-televize.png', // TODO - jiné logo, než regionální televize???
		'ORF1' => 'orf-1.png',
		'ORF2' => 'orf-2.png',
		'TVP1 HD' => 'tvp-1-hd.png',
		'TVP2 HD' => 'tvp-2-hd.png',
		'TVP info' => 'tvp-info.png',
		'TVP 3' => 'tvp-3.png',
		'TVP Historia' => 'tvp-historia.png',
		'TVP Sport' => 'tvp-sport.png',
		'Thai TV Global Network' => 'thai-tv-global-network.png',
		'ZDF' => 'zdf.png',
		'ZDF neo' => 'zdf-neo.png',
		'ARD' => 'ard.png',
		'3sat' => '3sat.png',
		'Arte' => 'arte.png',
		'WDR' => 'wdr.png',
		'ČT sport HD' => 'ct-sport-hd.png',
		'ČT 1' => 'ct1.png',
		'ČT 2' => 'ct2.png',
		'Nova' => 'nova.jpg',
		'Prima' => 'prima.png',
		'ČRo 1-Radiožurnál' => 'cro1-radiozurnal.png',
		'CRo 2-Dvojka' => 'cro2-dvojka.png',
		'CRo 3-Vltava' => 'cro3-vltava.png',
		'Proglas' => 'proglas.png',
		'CRo Region' => 'cro-region.png',
		'CRo Plus' => 'cro-plus.png',
		'CRo D-dur' => 'cro-d-dur.png',
		'CRo Junior' => 'cro-junior.png',
		'CRo JAZZ' => 'cro-jazz.png',
		'CRo Radio Wave' => 'cro-radio-wave.png',
		'CRo Dvojka/Plus' => '', //TODO - dvojka i plus logo mají - existuje nějaké kombinované?
		'GRAPE SC Infokanál' => 'grape-sc.png',
		'TV OK plus' => 'ok-plus.png',
		'Klínovec CAM1' => '', //TODO - tak tohle fakt nevím
		'Klínovec CAM2' => '',
		'Klínovec CAM3' => '',
		'Klínovec CAM4' => '',
		'Krb' => '', //TODO - taky ne
		'Akvárium' => '', //TODO - fakt by bylo super, kdyby se televize pojmenovávaly tak, aby je šlo vygooglit
		'Infokanál LT' => '', //TODO - fakt nevím
		'Filmbox' => 'filmbox.png',
		'Ceskoslovensko HD' => 'ceskoslovensko.png',
		'Film Europe HD' => 'film-europe-hd.png',
		'Be2Can HD' => 'be2can.png',
		'AXN' => 'axn.png',
		'AXN Black' => 'axn-black.png',
		'AXN White' => 'axn-white.png',
		'Film+ HD' => 'film-plus.png',
		'AMC HD' => 'amc-hd.png',
		'Pohoda TV' => 'relax.png', //TODO - televize se teď prý jmenuje Relax, TV Pohoda je jen časopis (totéž Pohoda Rebel, Rebel2)
		'Disney Channel' => 'disney-channel.png',
		'Minimax' => 'minimax.png',
		'Jim Jam' => 'jim-jam.png',
		'Baby TV' => 'baby-tv.png',
		'Nickelodeon' => 'nickelodeon.png',
		'Pohoda Rebel' => 'rebel.png',
		'Deluxe Music' => 'deluxe-music.png',
		'MTV Europe' => 'mtv.png',
		'VH1' => 'vh1.png',
		'Rebel 2 Slušnej kanál' => 'rebel2.png',
		'TA3 HD' => 'ta3.png',
		'National Geographic' => 'national-geographic.png',
		'Nat Geo Wild HD' => 'nat-geo-wild-hd.png',
		'Spektrum' => 'spektrum.png',
		'Food Network' => 'food-network.png',
		'Animal Planet' => 'animal-planet.png',
		'Discovery' => 'discovery-channel.png',
		'History Channel' => 'history-channel.png',
		'TravelChannel' => 'travel-channel.png',
		'CBS Reality' => 'cbs-reality.png',
		'Fine Living' => 'fine-living.png',
		'NetViet' => 'netviet.png',
		'NOVA Sport 1 HD' => 'nova-sport-1-hd.png',
		'NOVA Sport 2 HD' => 'nova-sport-2-hd.png',
		'Sport 1 HD' => 'sport-1-hd.png',
		'Sport 2 HD' => 'sport-2-hd.png',
		'Eurosport 1 HD' => 'eurosport-1-hd.png',
		'Eurosport 2 HD' => 'eurosport-2-hd.png',
		'Blue Hustler' => 'blue-hustler.png',
		'Brazzers TV Europe' => 'brazzers-europe.png',
		'Filmbox Extra HD' => 'filmbox-extra-hd.png',
		'Filmbox Premium HD' => 'filmbox-premium-hd.png',
		'Filmbox Family' => 'filmbox-family.png',
		'Filmbox Arthouse' => 'filmbox-arthouse.png',
		'360 Tune BOX HD' => '360-tune-box.png',
		'DocuBOX HD' => 'docu-box-hd.png',
		'FashionBOX HD' => 'fashion-box-hd.png',
		'FightBox HD' => 'fight-box-hd.png',
		'Fast&FunBox HD' => 'fast-fun-box-hd.png',
		'Erox HD' => 'ero-x-hd.png',
		'Eroxxx HD' => 'ero-xxx-hd.png',
		'Fishing&Hunting' => 'fishing-hunting.png',
		'Sport5 HD' => 'sport5.png',
		'Extreme Sports' => 'extreme-sports-channel.png',
		'CS Film' => 'cs-film.png',
		'CS Mini' => 'cs-mini.png',
		'Megamax' => 'megamax.png',
		'Spektrum home' => 'spektrum-home.png',
		'Paprika TV' => 'paprika-tv.png',
		'Golf Channel HD' => 'golf-channel.png',
		'Filmbox Plus' => 'filmbox-plus.png',
	];

	public function has(string $name): bool
	{
		return array_key_exists($name, $this->map);
	}

	public function getFilename(string $name): string
	{
		if (array_key_exists($name, $this->map)) {
			return $this->map[$name];
		}

		throw new InvalidArgumentException(sprintf('"%s" not found, did you mean "%s"?', $name, $this->getClosest($name, array_keys($this->map))));
	}

	/**
	 * @return string[]
	 */
	public function getIcons(): array
	{
		return $this->map;
	}

	/**
	 * @param string[] $words
	 */
	private function getClosest(string $name, array $words): string
	{
		$closest = '';
		$shortest = -1;

		foreach ($words as $word) {
			$lev = levenshtein($name, $word);

			if ($lev === 0) {
				return $word;
			}

			if ($lev <= $shortest || $shortest < 0) {
				$closest = $word;
				$shortest = $lev;
			}
		}

		return $closest;
	}

}
