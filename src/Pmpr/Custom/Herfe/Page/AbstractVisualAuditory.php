<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638b56c9d9574             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Page; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; class AbstractVisualAuditory extends Common { public function __construct() { $this->isPrivate = false; $this->hasBreadcrumb = true; parent::__construct(); } public function usasamuossgciacs() : array { return [VisualAuditory::symcgieuakksimmu()->kyqakacqeumicgag(), Visual::symcgieuakksimmu()->kyqakacqeumicgag(), Auditory::symcgieuakksimmu()->kyqakacqeumicgag()]; } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = $this->eswucuiqqwsggamc(ManipulateString::kwuyaykukcmaqggg(self::ugwmakayykcmcmqa())); $qookweymeqawmcwo[self::yusuiaeueqwieqqq] = $this->usasamuossgciacs(); return $qookweymeqawmcwo; } public function eswucuiqqwsggamc(string $iueymcwwscwqkiyq, array $ywmkwiwkosakssii = []) : array { $megmggkiokqkcwou = [self::yyigwaqioecwemiw, self::gcwcqmwwgiqsaame]; if (!in_array($iueymcwwscwqkiyq, $megmggkiokqkcwou)) { goto iggyqogweyosuikc; } $oqseeekuqisekiwy = [$iueymcwwscwqkiyq]; goto qqewoyookaskiuek; iggyqogweyosuikc: $oqseeekuqisekiwy = $megmggkiokqkcwou; qqewoyookaskiuek: $oyiyuuoguwwaksaa[self::ygyiacciqgemekwc] = self::iamiiekkgssgeaew; foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq) { $oyiyuuoguwwaksaa[] = [self::ykemsyouoqyoaysg => "\x3d", self::ascagqcquwgmygkm => self::uuseyckuwmiouskw, self::ciyoccqkiamemcmm => $iueymcwwscwqkiyq]; qkcyqocqqwmqgqww: } ssoucoucsgccekwe: $qawuqcsueakkgiio = max(1, DecoratorQuery::qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $ywmkwiwkosakssii[self::kkcqmwgccaygggcu] = $qawuqcsueakkgiio; $ywmkwiwkosakssii[self::uouymeyqasaeckso] = self::oguseymmyyoyaako; $ywmkwiwkosakssii[self::cuoyscoiacswuauq] = $oyiyuuoguwwaksaa; $ywmkwiwkosakssii[self::goqgcigmiawyauai] = ManipulateSetting::omkaowmygoqwsywq(); $gqgemcmoicmgaqie = ManipulatePost::owicscwgeuqcqaig(self::oguseymmyyoyaako, $ywmkwiwkosakssii); return [self::qgmuskygocwmouos => $gqgemcmoicmgaqie->get_posts(), "\x74\x6f\x74\141\154\x5f\160\141\x67\x65" => $gqgemcmoicmgaqie->max_num_pages, "\x63\x75\162\162\x65\x6e\164\x5f\160\x61\x67\145" => $qawuqcsueakkgiio]; } }
